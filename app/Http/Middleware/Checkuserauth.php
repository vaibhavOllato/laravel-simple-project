<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Checkuserauth
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('user_id')) {
            return redirect()->route('login')->with('error', 'Please login to continue.');
        }

        return $next($request);
    }
}

