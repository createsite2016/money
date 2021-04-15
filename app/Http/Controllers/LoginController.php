<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if (Auth::attempt($validated)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withErrors(['email' => 'Не верный логин или пароль'])->withInput();
        }

    }

    public function logout()
    {
        Auth::logout();
        
        return redirect()->back();
    }
}
