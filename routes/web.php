<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserConnectedController;
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

Route::get('/home',[HomeController::class, 'index']);
Route::get('/register',[RegisterController::class, 'show'])->name('register')->middleware('web');
Route::post('/register',[RegisterController::class,'store'])->name('register');


Route::get('/login',[LoginController::class, 'show'])->name('auth.login');
Route::post('/login',[LoginController::class, 'authenticate'])->middleware('web');

//use middleware('auth') only for user authentificated for protect all route ex : login

Route::get('/user',[UserConnectedController::class,'show'])->middleware('auth');
