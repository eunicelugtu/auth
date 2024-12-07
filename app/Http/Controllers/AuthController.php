<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('register');
    }

    public function registeredUser(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'sometimes|string|in:user,admin'
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'] ?? 'user'
        ]);

        Auth::login(User::where('email', $validated['email'])->first());

        return redirect()->route('loginForm')
            ->with('success', 'Registration successful! Welcome aboard!');
    }

    public function loginForm()
    {
        return view('login');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (Auth::attempt($credentials)) {

            Auth::login($user);

            return redirect()->intended(route('dashboard'))
                ->with('success', 'Welcome back!');
        }

        if (!$user) {
            return back()
                ->withInput($request->only('email'))
                ->withErrors([
                    'email' => 'No account found with this email address.'
                ]);
        }

        return back()
            ->withInput($request->only('email'))
            ->withErrors([
                'password' => 'The provided password is incorrect.'
            ]);
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}