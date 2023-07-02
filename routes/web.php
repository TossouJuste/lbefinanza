<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
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
Route::post('/login', [AuthController::class, 'login_view'])->name('auth.login');
Route::get('/register', [AuthController::class, 'register_view'])->name('auth.register.view');
Route::post('/register', [AuthController::class, 'Inscription'])->name('auth.register');
Route::get('/logout', [AuthController::class, 'Inscription'])->name('auth.logout');
Route::get('/mail', [AuthController::class, 'Envoi_mail'])->name('auth.mail');


Route::get('/', function () {
    return view('welcome');
});
// dashboard client 
Route::get('/dashboard', [ClientController::class, 'accueil_dashboard']);
Route::get('/dashboard/account', [ClientController::class, 'my_account']);
Route::get('/dashboard/profil', [ClientController::class, 'my_profil']);
Route::get('/dashboard/transations', [ClientController::class, 'my_transations']);
Route::get('/dashboard/transfert', [ClientController::class, 'new_transfert']);
Route::get('/dashboard/virement', [ClientController::class, 'new_virement']);
Route::get('/dashboard/chat', [ClientController::class, 'chat_view']);

Route::get('/admin', [AdminController::class, 'accueil_dashboard'])->name('admin.dashboard');

