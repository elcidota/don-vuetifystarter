<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        return Inertia::render('Auth/Login');
    }

    public function auth(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (auth()->attempt($data)) {
            return redirect()->intended('/');
        } else {
            return redirect()->back()->withInput($data)->withErrors([
                'email' => 'Invalid email or password',
            ]);
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }
}
