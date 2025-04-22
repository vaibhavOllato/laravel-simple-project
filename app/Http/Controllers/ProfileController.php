<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function show()
    {
        $user = User::find(session('user_id'));
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $user = User::find(session('user_id'));

        if ($user) {
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->save();

            // Update session
            session(['user_name' => $user->name]);
            session(['phone' => $user->phone]);

            return back()->with('success', 'Profile updated successfully.');
        }

        return back()->with('error', 'User not found.');
    }
}

