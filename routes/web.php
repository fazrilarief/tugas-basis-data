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

    // Route::resource('/cake', CakeController::class);
    Route::get('/cake', [CakeController::class, 'index'])->name('cake.index');
    Route::get('/cake/create', [CakeController::class, 'create'])->name('cake.create');
    Route::post('/cake/store', [CakeController::class, 'store'])->name('cake.store');
    Route::get('/cake/show{id}', [CakeController::class, 'show'])->name('cake.show');
    Route::get('/cake/edit{id}', [CakeController::class, 'edit'])->name('cake.edit');
    Route::put('/cake/update{id}', [CakeController::class, 'update'])->name('cake.update');
    Route::delete('/cake/destroy{id}', [CakeController::class, 'destroy'])->name('cake.destroy');
    Route::get('/cake/downloadPdf', [CakeController::class, 'downloadPdf'])->name('cake.downloadpdf');
});
