<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function create(Request $request) {

        $validation = $request->validate([
            'first_name' => 'required|min:5',
            'last_name' => 'required|min:5',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|alpha_num|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        DB::table('users')->insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
    ]);
    return redirect('/login')->with('/home', 'Please login');
 }
}
