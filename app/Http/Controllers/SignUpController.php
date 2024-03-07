<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class SignUpController extends Controller
{
    public function index()
    {
        return view('pages.signup');
    }

    public function create_account(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:App\Models\User,name',
            'email' => 'required|email|unique:App\Models\User,email|min:8|max:50',
            'password' => ['required', Password::min(8)->numbers()],
        ]);

        $user = User::create($validated);

        if ($user) {
            return redirect()->route('login');
        }
    }
}
