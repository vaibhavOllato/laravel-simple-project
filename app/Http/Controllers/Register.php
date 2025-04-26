<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    //
    public function show()
    {
        return view('register'); 
    }

    // // Handle registration submission
    public function submit (Request $request)
    {
         // Validate form input
         $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        //create user
        $user = User::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'phone' => $request->phone,
            'gender' => $request->gender,
        ]);

        return redirect('/login')->with('success', 'Registration successful. Please log in.');

    }
}
