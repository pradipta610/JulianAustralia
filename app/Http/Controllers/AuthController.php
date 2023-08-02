<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function loginProcess(Request $request){
        // validasi
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {

            // buat ulang session login
            $request->session()->regenerate();

            if (Auth::user()->role_id === 1) {
                // jika user superadmin
                return redirect()->intended('/superadmin/dashboard');
            } else {
                // jika user pegawai
                return redirect()->intended('/admin/dashboard');
            }
        }

        // jika email atau password salah
        // kirimkan session error
        return back()->with('error', 'email atau password salah');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
