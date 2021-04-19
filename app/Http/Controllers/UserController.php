<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            return redirect()->route('user.index');
        } else {
            return response()->json(
                [
                    'code' => '401',
                    'message' => 'Invalid User'
                ], 401, []);
        }
    }
}
