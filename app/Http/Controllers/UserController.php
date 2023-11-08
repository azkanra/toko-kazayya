<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::paginate(10);
        return view('admin.page.user', [
            'name' => "User Management",
            'title' => 'Admin User Management',
            'data' => $data, 
        ]);
    } 
    public function addModalUser()
    {
        return view('admin.modal.modalUser', [
            'title' => 'Tambah data user',
            'nik' => date('Ymd').rand(000,999),
        ]);
    }
    public function store(UserRequest $request)
    {
        $data = new User;
        $data->nik          = $request->nik;
        $data->name         = $request->nama;
        $data->email        = $request->email;
        $data->password     = bcrypt($request->password);
        $data->alamat       = $request->alamat;
        $data->tlp          = $request->tlp;
        $data->role         = $request->role;
        $data->is_active    = 1;
        $data->is_member    = 0;
        $data->is_admin     = 1;

        if ($request->hasFile('foto')) {
            $photo = $request->file('foto');
            $filename = date('Ymd') . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/user'), $filename);
            $data->foto = $filename;
        }

        $data->save();
    }
    public function show()
    {
        
    }
    public function update()
    {
        
    }
    public function destroy()
    {
        
    }
}
