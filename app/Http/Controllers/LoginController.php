<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
            Alert::success('Sukses', 'Berhasil login!');
            return redirect()->route('home');
        } else {
            return redirect()->back()->withInput()
                ->withErrors(['credentials' => 'The email or password is incorrect']);
        }
    }

    public function logout()
    {
        auth()->logout();

        Alert::success('Sukses', 'Berhasil keluar!');
        return redirect()->route('index');
    }
}
