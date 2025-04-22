<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Login extends Controller
{
    public function show()
    {
        return view('login'); 
    }

    public function authenticate(Request $request)
    {
        $user = User::where('email', $request->email)->first();
    
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                session([
                    'user_id' => $user->id,
                    'user_name' => $user->name,
                    'user_email' => $user->email,
                    'phone' => $user->phone,
                ]);
                return redirect()->route('dashboard');
            } else {
                return back()->with('error', 'Wrong password');
            }
        } else {
            return back()->with('error', 'User not found');
        }
    }
    
}