<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm() {
        return view('auth.login');
    }

    public function login(Request $request) {
        // dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password',);

        // dd($credentials);
        if(Auth::attempt($credentials)) {
            if(Auth::user()->role === 'admin') {
                return redirect('/dashboardadmin');
            } elseif (Auth::user()->role ==='guru') {
                return redirect('/home/{id}');
            }
        }


        return back()->withErrors([
            'email' => 'Email atau passsword salah.',
        ]);
    }
}
