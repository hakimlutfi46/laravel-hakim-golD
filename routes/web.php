<?php

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/data', [BelajarController::class, 'index']);

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');

// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/user', [HomeController::class, 'index'])->name('dashboard');
Route::get('/create', [HomeController::class, 'create'])->name('user.create');
Route::post('/store', [HomeController::class, 'store'])->name('user.store');
