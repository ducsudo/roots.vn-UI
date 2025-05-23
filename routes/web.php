<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('login', [UserController::class, 'showLogin'])->name('auth.showLogin');
// Route::post('login', [UserController::class, 'login'])->name('auth.login');
// Route::get('signup', [UserController::class, 'showSignup'])->name('auth.showSignup');
// Route::post('signup', [UserController::class, 'signup'])->name('auth.signup');

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

// Route::get('/test', [HomeController::class, "test"]);