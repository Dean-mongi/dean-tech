<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use App\Models\LoginAttempt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $ipAddress = $request->ip();

        // Check for brute force lockout
        if (LoginAttempt::isLocked($ipAddress)) {
            $seconds = LoginAttempt::lockoutSeconds($ipAddress);
            return back()->withErrors([
                'username' => 'Too many failed login attempts. Please try again in ' . ceil($seconds / 60) . ' minutes.',
            ])->withInput();
        }

        $credentials = $request->only('username', 'password');
        $role = $request->input('role');

        // Attempt 1: Try Laravel's default auth (User model)
        $user = User::where('email', $request->username)
            ->orWhere('name', $request->username)
            ->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();
            LoginAttempt::clearAttempts($ipAddress);

            // Redirect regular users to home, not admin dashboard
            return redirect()->intended('/');
        }

        // Attempt 2: Try Admin model
        $admin = Admin::where('username', $request->username)
            ->orWhere('email', $request->username)
            ->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::login($admin);
            $request->session()->regenerate();
            LoginAttempt::clearAttempts($ipAddress);

            return redirect()->intended('admin/dashboard');
        }

        // Record failed attempt
        LoginAttempt::recordAttempt($ipAddress, $request->username);

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
