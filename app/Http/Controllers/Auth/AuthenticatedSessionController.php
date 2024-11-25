<?php 

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input login
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('email', 'password');

        // Autentikasi
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('account')->with('success', 'Welcome back!');
        }
        

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
