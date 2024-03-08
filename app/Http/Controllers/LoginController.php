<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        } else {
            return redirect()->back()->withInput()
                ->withErrors(['credentials' => 'The email or password is incorrect']);
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('index');
    }
}
