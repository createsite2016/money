<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{

    public function index()
    {
        return view('registration.index');
    }

    // сохранение пользователя
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);
        
        $validated['password'] = bcrypt($validated['password']);
        $user = User::create($validated);
        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
