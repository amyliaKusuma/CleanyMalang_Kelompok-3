<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function create()
    {
        return view('register');
    }

    // Metode untuk registrasi
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('account');

    }

    // Metode untuk login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('account')->with('success', 'Welcome back!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Metode untuk logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function showAccount()
{
    // Pastikan pengguna sudah login
    if (!Auth::check()) {
        return redirect()->route('login')->withErrors('You need to log in to access this page.');
    }

    return view('account'); // Pastikan file Blade 'account.blade.php' ada di folder 'resources/views'
}

public function editProfile()
{
    if (!Auth::check()) {
        return redirect()->route('login')->withErrors('You must be logged in to edit your profile.');
    }

    return view('edit-profile'); // Pastikan file Blade 'edit-profile.blade.php' ada
}

public function updateProfile(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
    ]);

    $user->update([
        'name' => $request->name,
        'email' => $request->email,
    ]);

    return redirect()->route('account')->with('success', 'Profile updated successfully!');
}
public function changePassword()
{
    if (!Auth::check()) {
        return redirect()->route('login')->withErrors('You must be logged in to change your password.');
    }

    return view('change-password'); // Pastikan file Blade 'change-password.blade.php' ada
}

public function updatePassword(Request $request)
{
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:8|confirmed',
    ]);

    $user = Auth::user();

    if (!Hash::check($request->current_password, $user->password)) {
        return back()->withErrors(['current_password' => 'The current password is incorrect.']);
    }

    $user->update([
        'password' => Hash::make($request->new_password),
    ]);

    return redirect()->route('account')->with('success', 'Password changed successfully!');
}
}
