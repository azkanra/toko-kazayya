<?php

namespace App\Http\Controllers;

use App\Models\modelDetailTransaksi;
use App\Models\product;
use App\Models\tblCart;
use App\Models\transaksi;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function kategori()
    {
        $data = product::paginate(5);
        $countKeranjang = tblCart::where(['idUser' => 'guest123', 'status' => 0])->count();

        return view('pelanggan.page.kategori', [
            'title' => 'Kategori',
            'data' => $data,
            'count' => $countKeranjang,
        ]);
    }
    public function contact()
    {
        $countKeranjang = tblCart::where(['idUser' => 'guest123', 'status' => 0])->count();

        return view('pelanggan.page.contact', [
            'title' => 'Contact Us',
            'count' => $countKeranjang,
        ]);
    }
    public function transaksi()
    {
        $db = tblCart::with('product')->where(['idUser' => 'guest123', 'status' => 0])->get();
        $countKeranjang = tblCart::where(['idUser' => 'guest123', 'status' => 0])->count();

        // dd($db->product->nama_product);die;
        return view('pelanggan.page.transaksi', [
            'title' => 'Transaksi',
            'count' => $countKeranjang,
            'data' => $db
        ]);
    }
    public function checkout()
    {
        $countKeranjang = tblCart::where(['idUser' => 'guest123', 'status' => 0])->count();
        $code = transaksi::count();
        $codeTransaksi = date('Ymd') . $code + 1;
        $detailBelanja = modelDetailTransaksi::where(['id_transaksi' => $codeTransaksi, 'status' => 0])->sum('price');
        $jumlahBarang = modelDetailTransaksi::where(['id_transaksi' => $codeTransaksi, 'status' => 0])->count('id_barang');
        $qtyBarang = modelDetailTransaksi::where(['id_transaksi' => $codeTransaksi, 'status' => 0])->sum('qty');
        return view('pelanggan.page.checkout', [
            'title' => 'Check Out',
            'count' => $countKeranjang,
            'detailBelanja' => $detailBelanja,
            'jumlahBarang' => $jumlahBarang,
            'qtyOrder' => $qtyBarang,
            'codeTransaksi' => $codeTransaksi
        ]);
    }
    public function prosesCheckout(Request $request, $id)
    {
        $data = $request->all();
        // $findId = tblCart::where('id', $id)->get();
        $code = transaksi::count();
        $codeTransaksi = date('Ymd') . $code + 1;
        dd($data['idBarang']);
        die;

        // simpan detail barang 
        $detailTransaksi = new modelDetailTransaksi();
        $fieldDetail = [
            'id_transaksi' => $codeTransaksi,
            'id_barang' => $data['idBarang'],
            'qty' => $data['qty'],
            'price' => $data['total']
        ];
        $detailTransaksi::create($fieldDetail);

        // update cart 
        $fieldCart = [
            'qty' => $data['qty'],
            'price' => $data['total'],
            'status' => 1,
        ];
        tblCart::where('id', $id)->update($fieldCart);

        Alert::toast('Checkout Berhasil', 'success');
        return redirect()->route('checkout');
    }
    public function prosesPembayaran(Request $request)
    {
        $data = $request->all();
        $dbTransaksi =  new transaksi();
        // dd($data);die;
   
        $dbTransaksi->code_transaksi = $data['code'];
        $dbTransaksi->total_qty = $data['totalQty'];
        $dbTransaksi->total_harga = $data['dibayarkan'];
        $dbTransaksi->nama_customer = $data['namaPenerima'];
        $dbTransaksi->alamat = $data['alamatPenerima'];
        $dbTransaksi->no_tlp = $data['tlp'];
        
        $dbTransaksi->save();

        $dataCart = modelDetailTransaksi::where('id_transaksi', $data['code'])->get();
        foreach ($dataCart as $x) {
            $dataUp = modelDetailTransaksi::where('id', $x->id)->first();
            $dataUp->status = 1;
            $dataUp->save();

            $idProduct = product::where('id', $x->id_barang)->first();
            $idProduct->quantity = $idProduct->quantity - $x->qty;
            $idProduct->quantity_out = $x->qty;
            $idProduct->save();
        }

        Alert::toast('Transaksi Berhasil', 'Ditunggu pesanan anda');
        return redirect()->route('home');
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
                alert()::toast('Email dan password salah', 'error');
                return back();
            }
        }
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        alert()::toast('Kamu berhasil logout', 'success');
        return redirect('admin');
    }
}
