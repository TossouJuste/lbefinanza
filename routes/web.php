<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Site_web_Controller;
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
// site web
Route::get('/',[Site_web_Controller::class, 'P_principal'])->name('Page_principal');
Route::get('/abouts',[Site_web_Controller::class, 'P_about'])->name('Page_about');
Route::get('/carte',[Site_web_Controller::class, 'P_carte'])->name('Page_carte');
Route::get('/contact',[Site_web_Controller::class, 'P_contact'])->name('Page_contact');
Route::get('/loan',[Site_web_Controller::class, 'P_loan'])->name('Page_loan');
Route::get('/donation',[Site_web_Controller::class, 'P_donation'])->name('Page_donation');
Route::get('/insurance',[Site_web_Controller::class, 'P_insurance'])->name('Page_insurance');
Route::get('/investment planning',[Site_web_Controller::class, 'P_investmentPlanning'])->name('Page_investmentPlanning');



/* authentication */
Route::get('/login', [AuthController::class, 'login_view'])->name('auth.login.view');
Route::post('/login', [AuthController::class, 'login_view'])->name('auth.login');
Route::get('/register', [AuthController::class, 'register_view'])->name('auth.register.view');
Route::post('/register', [AuthController::class, 'Inscription'])->name('auth.register');
Route::get('/logout', [AuthController::class, 'Inscription'])->name('auth.logout');
Route::get('/mail', [AuthController::class, 'Envoi_mail'])->name('auth.mail');
Route::get('/forget_password', [AuthController::class, 'forget_password'])->name('auth.forget_pass');


// dashboard client 
Route::get('/dashboard', [ClientController::class, 'accueil_dashboard']);
Route::get('/dashboard/account', [ClientController::class, 'my_account']);
Route::get('/dashboard/profil', [ClientController::class, 'my_profil']);
Route::get('/dashboard/transations', [ClientController::class, 'my_transations']);
Route::get('/dashboard/transfert', [ClientController::class, 'new_transfert']);
Route::get('/dashboard/virement', [ClientController::class, 'new_virement']);
Route::get('/dashboard/chat', [ClientController::class, 'chat_view']);

Route::get('/admin', [AdminController::class, 'accueil_dashboard'])->name('admin.dashboard');

