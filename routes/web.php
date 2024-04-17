<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use GuzzleHttp\Promise\Create;
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

Route::get('/', function () {
    return view('welcome');
});

/**
 * 
 */
Route::get('/register',[RegisterController::class, 'create'])->name('register');
Route::post('/register',[RegisterController::class, 'register'])->name('register1');
Route::get('/login',[LoginController::class, 'create'])->name('login');
Route::post('/login',[LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
Route::view('/dashboard','dashboard');
// Route::get('/dashboard',[LoginController::class, 'authenticate'])->middleware('auth.basic')->name('authenticate1');
