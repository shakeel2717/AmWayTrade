<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('login');
        }

        // checking suspend status
        if (auth()->user()->suspend == true) {
            // logout
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route("login")->withErrors("Account Suspended, Please Contact Support");
        }

        if (auth()->user()->role == 'user') {
            return redirect()->route('user.dashboard.index');
        } elseif (auth()->user()->role == 'admin') {
            return redirect()->route('admin.dashboard.index');
        }
    }
}
