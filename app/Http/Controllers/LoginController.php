<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function auth(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($validated)) {
            return redirect('/dashboard');
        } else {
            return Redirect::back()->withErrors(['email' => 'Не верный логин или пароль'])->withInput();
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
