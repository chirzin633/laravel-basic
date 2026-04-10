<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SiswaModelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', [SiswaController::class, 'about'])->name('about');

// Route::get('/siswa', [SiswaModelController::class, 'index'])->name('siswa.index');

// Route::get('/siswa/create', [SiswaModelController::class, 'create'])->name('siswa.create');

// Route::get('/siswa/{id}', [SiswaModelController::class, 'show'])->name('siswa.show');

Route::resource('siswa', SiswaModelController::class);

Route::get('/auth/login', [AuthController::class, 'showLogin'])->name(
    'auth.login',
);
Route::get('/auth/register', [AuthController::class, 'showRegister'])->name(
    'auth.register',
);
Route::post('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/register', [AuthController::class, 'register'])->name(
    'register',
);

Route::get('/contact', function () {
    $nama = 'Abiq';
    $umur = 17;
    return view('pages.contact', ['data' => $nama, 'umur' => $umur]);
});
