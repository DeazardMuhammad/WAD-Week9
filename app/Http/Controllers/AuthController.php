<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    function formregistrasi() {
        return view('registrasi');
    }

    function submitRegistrasi(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        //dd($user);
        return redirect()->route('login.form');
    }

    function formlogin() {
        return view('login');
    }

    function submitLogin(Request $request){
        $data = $request->only('email', 'password');

        if (Auth::attempt ($data)) {
            $request->session()->regenerate();
            return redirect()->route('list.komen');
        } else {
            return redirect()->back()->with('error', 'Email atau password anda salah');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken(); 
        return redirect()->route('login.form');
    }
}
