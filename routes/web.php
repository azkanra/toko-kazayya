<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiAdminController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TransaksiController::class, 'index'])->name('Home');
Route::post('/adTocart', [TransaksiController::class, 'adTocart'])->name('adTocart');

Route::get('/kategori', [Controller::class, 'kategori'])->name('kategori');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/transaksi', [Controller::class, 'transaksi'])->name('transaksi');

Route::get('/checkout', [Controller::class, 'checkout'])->name('checkout');
Route::POST('/checkout/proses/{id}', [Controller::class, 'prosesCheckout'])->name('checkout.product');
Route::POST('/checkout/prosesPembayaran', [Controller::class, 'prosesPembayaran'])->name('checkout.bayar');
Route::get('/checkOut', [Controller::class, 'keranjang'])->name('keranjang');
Route::get('/checkout/{id}', [Controller::class, 'bayar'])->name('keranjang.bayar');


Route::get('/admin', [Controller::class, 'login'])->name('login');
Route::get('/admin/loginProses', [Controller::class, 'loginProses'])->name('loginProses');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [Controller::class, 'admin'])->name('admin');
    Route::get('/admin/logout', [Controller::class, 'logout'])->name('logout');
    Route::get('/admin/product', [ProductController::class, 'index'])->name('product');
    Route::get('/admin/report', [Controller::class, 'report'])->name('report');
    Route::get('/admin/addModal', [ProductController::class, 'addModal'])->name('addModal');

     Route::get('/admin/user_management', [UserController::class, 'index'])->name('userManagement');
    Route::get('/admin/user_management/addModalUser', [UserController::class, 'addModalUser'])->name('addModal.user');
    Route::POST('/admin/user_management/addData', [UserController::class, 'store'])->name('userManagement.add');
    Route::get('/admin/user_management/editUser/{id}', [UserController::class, 'show'])->name('userManagement.show');
    Route::PUT('/admin/user_management/updateDataUser/{id}', [UserController::class, 'update'])->name('userManagement.update');
    Route::DELETE('/admin/user_management/deleteUser/{id}', [UserController::class, 'destroy'])->name('userManagement.destroy');

    Route::POST('/admin/addData', [ProductController::class, 'store'])->name('addData');
    Route::GET('/admin/editModal/{id}', [ProductController::class, 'show'])->name('editModal');
    Route::PUT('/admin/updateData/{id}', [ProductController::class, 'update'])->name('updateData');
    Route::DELETE('/admin/deleteData/{id}', [ProductController::class, 'destroy'])->name('deleteData');

    Route::GET('/admin/transaksi', [TransaksiAdminController::class, 'index'])->name('transaksi.admin');
});
