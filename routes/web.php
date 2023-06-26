<?php

use App\Http\Controllers\ClientController;
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
/* authentication */
Route::get('/login', [AuthController::class, 'login_view'])->name('auth.login.view');
Route::get('/register', [AuthController::class, 'register_view'])->name('auth.register.view');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [ClientController::class, 'accueil_dashboard'])->name('client.dashboard');

