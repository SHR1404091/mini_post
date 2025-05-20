<?php

use App\Http\Controllers\AuthController;
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

// Ruta login
Route::get('/', function () {
    return view('login');
})->name('login');

// Procesar login
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Ruta dashboard protegida
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/inventario', function () {
    return view('inventario');
});
