<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function Login(Request $request)
    {

        // validasi login
        $validatedData = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required', 'max:255'],
            ],
            [
                'email.unique' => 'Alamat Email Sudah Digunakan',
                'email.required' => 'Format Email tidak Valid',
                'password.required' => 'Password Wajib Diisi',
            ]
        );

        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();

            /** @var User $user */
        $user = Auth::user();

        if ($user->isAdmin()) {
            return redirect()->route('Admin-Dashboard')->with('success', 'Login Berhasil');
        }

        if ($user->isUser()) {
            return redirect()->route('User-Dashboard');
        }
        abort(403, 'tidak dikenali');

        }

        return back()->withErrors([
            'email' => 'email anda salah',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
