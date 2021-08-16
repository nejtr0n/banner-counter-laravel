<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        $user = Auth::user();
        if (!empty($user)) {
            return redirect()->route("books.index")
                ->withSuccess('Already logged in');
        }
        return view('auth.login');
    }

    public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $remember = $request->get("remember_me", false);


        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route("books.index")
                ->withSuccess('Signed in');
        }

        return redirect()->route("login")
            ->withErrors('Login details are not valid');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route("login")
            ->withSuccess('Logged out');
    }
}
