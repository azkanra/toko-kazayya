<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Real\Rashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = product::get();
        return view('admin.page.product', [
            'name' => "Product",
            'title' => 'Admin Product',
            'data' => $data,
        ]);
    }

    public function addModal()
    {
        return view('admin/modal/addModal', [
            'title' => 'Tambah data produk',
            'sku' => 'BRG' . rand(1000, 99999),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductRequest $request)
    {
        $data = new product();
        $data->sku          = $request->sku;
        $data->nama_product = $request->nama;
        $data->type         = $request->type;
        $data->kategori     = $request->kategori;
        $data->harga        = $request->harga;
        $data->quantity     = $request->quantity;
        $data->discount     = 10/100;
        $data->is_active    = 1;
        


        if ($request->hasFile('foto')) {
            $photo = $request->file('foto');
            $filename = date('Ymd') .'_'.$photo->getClientOriginalName();
            $photo->move(public_path('storage/product'), $filename);
            $data->foto = $filename;
        }

        $data->save();
        return redirect()->route('product')->with('Data berhasil disimpan', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}