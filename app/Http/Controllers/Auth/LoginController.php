<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\UserModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class LoginController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {   
        $user = UserModel::where('email', $request->email)->first();

        if ($user) {
            // Cek apakah password sudah menggunakan bcrypt
            if (Hash::needsRehash($user->password)) {
                // Password tidak menggunakan bcrypt, misal MD5
                if (md5($request->password) === $user->password) {
                    // Jika cocok, update password menjadi Bcrypt
                    $user->password = Hash::make($request->password);
                    $user->save();
                    
                    // Lakukan login
                    Auth::login($user);
                    $request->session()->regenerate();
                    return redirect()->intended(route('dashboard', absolute: false));
                }
            }
        }
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
