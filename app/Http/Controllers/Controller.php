<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('pelanggan.page.home',[
            'title' => 'Home',
        ]); 
    }
    public function kategori()
    {
        return view('pelanggan.page.kategori',[
            'title' => 'Kategori',
        ]); 
    }
    public function contact()
    {
        return view('pelanggan.page.contact',[
            'title' => 'Contact Us',
        ]); 
    }
    public function transaksi()
    {
        return view('pelanggan.page.transaksi',[
            'title' => 'Transaksi',
        ]); 
    }
    public function checkout()
    {
        return view('pelanggan.page.checkout',[
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
}
