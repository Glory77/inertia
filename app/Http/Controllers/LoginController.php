<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
        return to_route('posts.index')->with('message', 'Login successfully');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('home');
    }
}
