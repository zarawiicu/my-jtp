<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;

class AuthController extends Controller
{

    public function index(){
        return view('auth.login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::guard('admin')->attempt($credentials)) {
        return redirect()->intended(route('dashboard'));
    }

    return redirect()->intended(route('home'));
    // return back()->withErrors(['email' => 'Invalid credentials']);
}


public function dashboard()
{
    return view('admin.dashboard');
}

    public function showRegis(){
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required'
        ]);

        // Simpan data user baru
        $user = UserModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Enkripsi password
            'role' => $request->role
        ]);

        // Login otomatis setelah registrasi
        //Auth::login($user);

        // Redirect ke halaman dashboard atau yang diinginkan
        return redirect()->route('login.index')->with('success', 'Registration successful!');
    }

    public function logout()
{
    Auth::logout();
    return redirect('/');
}
// public function logout()
// {
//     Auth::guard('admin')->logout();
//     return redirect()->route('admin.login');
// }
}

