<?php

use App\Http\Controllers\CakeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login/auth', [LoginController::class, 'login'])->name('auth.login');

    Route::get('/signup', [SignUpController::class, 'index'])->name('signup');
    Route::post('/signup/auth', [SignUpController::class, 'create_account'])->name('auth.signup');

    Route::get('/', function () {
        return view('pages.index');
    })->name('index');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/home', function () {
        return view('pages.home');
    })->name('home');

    Route::resource('/cake', CakeController::class);
});
