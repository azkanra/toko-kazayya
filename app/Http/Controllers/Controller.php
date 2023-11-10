<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('pelanggan.page.home', [
            'title' => 'Home',
        ]);
    }
    public function kategori()
    {
        return view('pelanggan.page.kategori', [
            'title' => 'Kategori',
        ]);
    }
    public function contact()
    {
        return view('pelanggan.page.contact', [
            'title' => 'Contact Us',
        ]);
    }
    public function transaksi()
    {
        return view('pelanggan.page.transaksi', [
            'title' => 'Transaksi',
        ]);
    }
    public function checkout()
    {
        return view('pelanggan.page.checkout', [
            'title' => 'Check Out',
        ]);
    }
    public function admin()
    {
        return view('admin.page.dashboard', [
            'name' => "Dashboard",
            'title' => 'Admin Dashboard',
        ]);
    }
    public function userManagement()
    {
        return view('admin.page.user', [
            'name' => "User Management",
            'title' => 'Admin User Management',
        ]);
    }
    public function report()
    {
        return view('admin.page.report', [
            'name' => "Report",
            'title' => 'Admin Report',
        ]);
    }
    public function login()
    {
        return view('admin.page.login', [
            'name' => "Login",
            'title' => 'Admin Login',
        ]);
    }
    public function loginProses(Request $request)
    {
        Session::flash('error', $request->email);
        $dataLogin = [
            'email' => $request->email,
            'password' =>  $request->password,
        ];

        $user = new User;
        $proses = $user::where('email', $request->email)->first();

        if ($proses->is_admin === 0) {
            Session::flash('error', 'Anda bukan admin');
            return back();
        } else {
            if (Auth::attempt($dataLogin)) {
                Alert::toast('Kamu berhasil login', 'success');
                $request->session()->regenerate();
                return redirect()->intended('/admin/dashboard');
            } else {
                Alert::toast('Email dan password salah', 'error');
                return back();
            }
        }
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Alert::toast('Kamu berhasil logout', 'success');
        return redirect('admin');
    }
}
