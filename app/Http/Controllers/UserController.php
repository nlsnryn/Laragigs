<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register Form

    public function register() {
        return view('users.register');
    }


    // Create new users account
    public function store(Request $request) {

        $formInputs = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
        ]);

        // Hash passwords
        $formInputs['password'] = bcrypt($formInputs['password']);

        // Create user 
        $user = User::create($formInputs);

        // Login
        auth()->login($user);

        // dd(auth()->user()->name);

        return redirect('/')->with('message', 'User successfully created and logged in');
    }

    // Logout Session
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out.');
    }
    
    // Login Form
    public function login() {
        return view('users.login');
    }

    public function authentication(Request $request) {
        
        $formInputs = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if (auth()->attempt($formInputs)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
