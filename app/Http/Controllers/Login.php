<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
      public function show()
    {
        return view('login'); 
    }

    // handle login
    public function authenticate(Request $request)
    {
        $credentials = $request->validate ([
            'email' => ['required', 'email'],
            'password'=>['required'],
        ]);

        if (Auth:: attempt($credentials)) {
            $request -> session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->with('error','Invalid email or password.');
    }
}
