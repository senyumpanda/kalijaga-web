<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('akun.registrasi',[
            'fileCSS' => 'css/akun/registrasi.css'
        ]);
    }

    public function store(Request $request)
    {
        $request['no_telepon'] = '';
        $validatedData = $request->validate([
            'nama_depan' => 'required|max:50',
            'nama_belakang' => 'max:50',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255',
            'password2' => 'required|min:8|max:255',
            'no_telepon' => 'max:15',
        ]);

        dd( "Nama Depan : " . $request['nama_depan'],
            "Nama Belakang : " . $request['nama_belakang'],
            "Email : " . $request['email'],
            "Password : " . $request['password'],
            "No Telepon : " . $request['no_telepon']);

        if($request['password'] !== $request['password2']){
            return back()->with('regisGagal', 'Registrasi Gagal! Tolong dicek kembali');
        }

        // hashing password
        $validatedData['password'] = Hash::make($validatedData['password']);

        // add slug
        $validatedData['slug'] = Str::of($validatedData['keterangan'][0])->lower();

        User::create($validatedData);

        return redirect('/masuk')->with('regisSukses', 'Registrasi Berhasil! Silakan masuk dahulu');
    }
}
