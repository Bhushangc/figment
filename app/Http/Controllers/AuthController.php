<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            if (Auth::user()->hasRole('admin')) {
                return redirect()->route('admin.dashboard');
            }
            return back()->withErrors([
                'Error' => 'The User Does not have access',
            ]);
        }
        return back()->withErrors([
            'Error' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
