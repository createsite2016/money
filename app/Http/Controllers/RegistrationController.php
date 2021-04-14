<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    // сохранение пользователя
    public function save(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);
        
        $validated['password'] = bcrypt($validated['password']);
        $user = User::create($validated);
        Auth::login($user);

        return redirect('/dashboard');
    }
}
