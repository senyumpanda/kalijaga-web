<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class MasukController extends Controller
{

    public function authenticate(Request $request)
    {   
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        // jika sesuai / ada di dalam database
        if(Auth::attempt($credentials))
        {   
            // dd($credentials);
            $request->session()->regenerate();

            return redirect()->action([CustomerController::class, 'index']);
        }

        // jika tidak sesuai / tidak ada di dalam database
        return back()->with('loginGagal', 'Login gagal!');
    }

    public function keluar(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function masuk()
    {
        return view('akun.masuk',[
            'fileCSS' => 'akun/masuk',
        ]);
    }
}
