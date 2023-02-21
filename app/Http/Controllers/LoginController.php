<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login', [
            'title' => 'login'
        ]);
    }

    public function validasi(Request $request) {
        $validateData = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if(Auth::attempt($validateData)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return back()->with('login Error', 'login failed!');
    }
}
