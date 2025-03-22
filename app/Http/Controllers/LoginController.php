<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Register;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Since you're using a custom Register model instead of the default User model,
        // we need to manually check the credentials
        $user = Register::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->withInput($request->only('email'));
        }

        // Store user info in session
        $request->session()->put('user', $user);
        
        return redirect('/dashboard');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect('/login');
    }
}