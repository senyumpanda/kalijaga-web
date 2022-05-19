<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function index()
    {
        return view('akun.daftar', [
            "fileCSS" => "akun/daftar",
        ]);
    }

    public function simpanData(Request $request)
    {
        // dd($request['password'], $request['password2']);        

        $request['no_telepon'] = '';
        $validatedData = $request->validate([
            'nama_depan' => 'required|max:50',
            'nama_belakang' => 'max:50',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255',
            'password2' => 'required|min:8|max:255',
            'no_telepon' => 'max:15',
            'slug' => ''
        ]);

        if($request['password'] !== $request['password2']){
            return back()->with('daftarGagal', 'Pendaftaran Gagal! Tolong dicek kembali');
        }

        // hashing password
        $validatedData['password'] = Hash::make($validatedData['password']);

        // add slug
        $validatedData['slug'] = Str::of($validatedData['keterangan'][0])->lower();

        User::create($validatedData);

        return redirect('/masuk')->with('daftarSukses', 'Pendaftaran Berhasil! Silakan masuk dahulu');
        
    }
}
