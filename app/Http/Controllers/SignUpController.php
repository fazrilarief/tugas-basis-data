<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use RealRashid\SweetAlert\Facades\Alert;

class SignUpController extends Controller
{
    public function index()
    {
        return view('pages.auth.signup');
    }

    public function create_account(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:App\Models\User,name',
            'nim' => 'required|unique:App\Models\User,nim',
            'password' => ['required', Password::min(8)->numbers()],
        ]);

        $user = User::create($validated);

        if ($user) {
            Alert::success('Sukses', 'Berhasil mendaftarkan akun, silahkan login!');
            return redirect()->route('login');
        }
    }
}
