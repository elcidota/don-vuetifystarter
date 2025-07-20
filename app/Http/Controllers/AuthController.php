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
        [
            'email' => $email,
            'password' => $password,
            'remember' => $remember
        ] = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'remember' => 'boolean|nullable',
        ]);

        if (auth()->attempt(['email' => $email, 'password' => $password], $remember)) {
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
