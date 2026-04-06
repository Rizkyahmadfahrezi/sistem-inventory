<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return $this->RedirectToDashboard();
        }

        return view('Auth.login');
    }


    public function Login(Request $request)
    {

        // validasi login
        $validatedData =    $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required', 'max:255']
            ],
            [
                'email.unique' => 'Alamat Email Sudah Digunakan',
                'email.required' => 'Format Email tidak Valid',
                'password.required' => 'Password Wajib Diisi',
            ]
        );

        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();

            return $this->RedirectToDashboard();
        }

        return back()->withErrors([
            'email' => 'email anda salah'
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function RedirectToDashboard()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        if ($user->isAdmin()) {
            return redirect()->route('Admin-Dashboard');
        }

        if ($user->isUser()) {
            return redirect()->route('User-Dashboard');
        }
        abort(403, 'tidak dikenali');
    }
}
