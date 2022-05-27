<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;    

class LoginController extends Controller
{
    public function login()
    {
        return view('akun.login', [
            'fileCSS' => 'css/akun/login.css',
            'akun' => ''
        ]);
    }

    public function register()
    {
        return view('akun.registrasi',[
            'fileCSS' => 'css/akun/registrasi.css',
            'akun' => ''
        ]);
    }

    public function loginproses(Request $request)
    {
        // dd($request);
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        $akses_akun = User::all()->firstWhere('email', $request['email'])->keterangan;

        // dd($akses_akun, $akses_akun === 'Admin');

        if(Auth::attempt($request->only('email', 'password')))
        {
            if($akses_akun === 'Admin')
            {
                // dd('admin');
                return redirect('/admin');
            } 
            // dd('customer');
            return redirect('/customer');
        }

        // dd('salah');
        // jika tidak sesuai / tidak ada di dalam database
        return redirect('/login')->with('loginGagal', 'Login gagal!');
    }

    public function registeruser(Request $request)
    {   
        // dd($request);
        $request['no_telepon'] = '';
        $validatedData = $request->validate([
            'nama_depan' => 'required|max:50',
            'nama_belakang' => 'max:50',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|max:255',
            'password2' => 'required|max:255',
        ]);

        if($request['password'] !== $request['password2']){
            return back()->with('regisGagal', 'Registrasi Gagal! Tolong dicek kembali');
        }
 
        // hashing password
        $request['password'] = bcrypt($request['password']);

        User::create([
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'email' => $request->email,
            'password' => $request->password,
            'slug_user' => 'c',
            'remember_token' => Str::random(60)
        ]);

        return redirect('/login')->with('regisSukses', 'Registrasi Berhasil! Silakan masuk dahulu');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        return redirect('/');
    }
}
