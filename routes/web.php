<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Site_web_Controller;
use App\Http\Controllers\assurannce;
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
// site web start

//page
Route::get('/',[Site_web_Controller::class, 'P_principal'])->name('Page_principal');
Route::get('/abouts',[Site_web_Controller::class, 'P_about'])->name('Page_about');
Route::get('/carte',[Site_web_Controller::class, 'P_carte'])->name('Page_carte');
Route::get('/contact',[Site_web_Controller::class, 'P_contact'])->name('Page_contact');
Route::get('/loan',[Site_web_Controller::class, 'P_loan'])->name('Page_loan');
Route::get('/donation',[Site_web_Controller::class, 'P_donation'])->name('Page_donation');
Route::get('/insurance',[Site_web_Controller::class, 'P_insurance'])->name('Page_insurance');
Route::get('/investment planning',[Site_web_Controller::class, 'P_investmentPlanning'])->name('Page_investmentPlanning');
Route::get('/term&Conditions',[Site_web_Controller::class, 'Term'])->name('Term');

//page formulaire
Route::get('/assurance',[assurannce::class, 'assurances'])->name('assurances');
Route::post('/assurance-form',[assurannce::class, 'assurance'])->name('assurancess');
Route::get('/car-loan',[Site_web_Controller::class, 'car_loan'])->name('car-loan');
Route::get('/commercial-loan',[Site_web_Controller::class, 'commercial_loan'])->name('commercial_loan');
Route::get('/debt-consolidation-loan',[Site_web_Controller::class, 'debt_consolidation_loan'])->name('debt_consolidation_loan');
Route::get('/loan-entrepreneur',[Site_web_Controller::class, 'loan_entrepreneur'])->name('loan_entrepreneur');
Route::get('/loan-entreprise',[Site_web_Controller::class, 'loan_entreprise'])->name('loan_entreprise');
Route::get('/loan-student',[Site_web_Controller::class, 'loan_student'])->name('loan_student');
Route::get('/loan-mortgage',[Site_web_Controller::class, 'loan_mortgage'])->name('loan_mortgage');
Route::get('/loan-sick',[Site_web_Controller::class, 'loan_sick'])->name('loan_sick');
Route::get('/loan-personal',[Site_web_Controller::class, 'loan_personal'])->name('loan_personal');
Route::get('/loan-mariage',[Site_web_Controller::class, 'loan_mariage'])->name('loan_mariage');
Route::get('/loan-birth',[Site_web_Controller::class, 'loan_birth'])->name('loan_birth');
Route::get('/loan-travel',[Site_web_Controller::class, 'loan_travel'])->name('loan_travel');
Route::get('/get-carte',[Site_web_Controller::class, 'demande_cartes'])->name('get_carte');




//formulaire
Route::get('/form-car-loan',[Site_web_Controller::class, 'form_car_loan'])->name('form_car-loan');
Route::get('/form-commercial-loan',[Site_web_Controller::class, 'form_commercial_loan'])->name('form_commercial_loan');
Route::get('/form-debt-consolidation-loan',[Site_web_Controller::class, 'form_debt_consolidation_loan'])->name('form_debt_consolidation_loan');
Route::get('/form-loan-entrepreneur',[Site_web_Controller::class, 'form_loan_entrepreneur'])->name('form_loan_entrepreneur');
Route::get('/form-loan-entreprise',[Site_web_Controller::class, 'form_loan_entreprise'])->name('form_loan_entreprise');
Route::get('/form-loan-student',[Site_web_Controller::class, 'form_loan_student'])->name('form_loan_student');
Route::get('/form-loan-mortgage',[Site_web_Controller::class, 'form_loan_mortgage'])->name('form_loan_mortgage');
Route::get('/form-loan-sick',[Site_web_Controller::class, 'form_loan_sick'])->name('form_loan_sick');
Route::get('/form-loan-personal',[Site_web_Controller::class, 'form_loan_personal'])->name('form_loan_personal');
Route::get('/form-loan-mariage',[Site_web_Controller::class, 'form_loan_mariage'])->name('form_loan_mariage');
Route::get('/form-loan-birth',[Site_web_Controller::class, 'form_loan_birth'])->name('form_loan_birth');
Route::get('/form-loan-travel',[Site_web_Controller::class, 'form_loan_travel'])->name('form_loan_travel');
Route::get('/form-investmentPlanning',[Site_web_Controller::class, 'demande_gestion_portefeuilles'])->name('demande_gestion_portefeuilles');

//formulaire-post
Route::post('/form-car-loan',[Site_web_Controller::class, 'post_car_loan'])->name('form_car-loan');
Route::post('/get-carte',[Site_web_Controller::class, 'demande_carte'])->name('get_carte');
Route::post('/form-donation',[Site_web_Controller::class, 'demande_donation'])->name('demande_donations');
Route::post('/form-investmentPlanning',[Site_web_Controller::class, 'demande_gestion_portefeuille'])->name('demande_gestion_portefeuilles');
Route::post('/contact',[Site_web_Controller::class, 'contact'])->name('contacts');






//site web end


/* authentication */
Route::get('/login', [AuthController::class, 'login_view'])->name('login');
Route::post('/envoie-mail', [AuthController::class, 'envoie_email'])->name('envoie_email');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/register', [AuthController::class, 'register_view'])->name('auth.register.view');
Route::post('/register', [AuthController::class, 'Inscription'])->name('auth.register');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/confirmation/{token}', [AuthController::class, 'confirmation'])->name('confirmation');
Route::get('/mail', [AuthController::class, 'Envoi_mail'])->name('auth.mail');
Route::get('/forget_password', [AuthController::class, 'forget_password'])->name('auth.forget_pass');


// dashboard client 
Route::get('/dashboard', [ClientController::class, 'accueil_dashboard'])->middleware('auth');
Route::get('/dashboard/portefeuille', [ClientController::class, 'portefeuille_dashboard'])->middleware('auth')->name('portefeuille');
Route::post('/dashboard/portefeuille/retrait', [ClientController::class, 'portefeuille_retrait'])->middleware('auth')->name('portefeuille');
Route::get('/dashboard/account', [ClientController::class, 'my_account'])->middleware('auth');
Route::get('/dashboard/profil', [ClientController::class, 'my_profil'])->middleware('auth');
Route::post('/dashboard/profil', [AuthController::class, 'change_profile'])->middleware('auth')->name('change.profile');
Route::post('/dashboard/profil/avatar', [AuthController::class, 'change_profile_avatar'])->middleware('auth')->name('change.profile.avatar');
Route::get('/dashboard/transations', [ClientController::class, 'my_transations'])->middleware('auth');
Route::get('/dashboard/transfert', [ClientController::class, 'new_transfert'])->middleware('auth');
Route::post('/dashboard/depot', [ClientController::class, 'depot'])->middleware('auth');
Route::get('/dashboard/virement', [ClientController::class, 'new_virement'])->middleware('auth');
Route::get('/dashboard/virements', [ClientController::class, 'mes_virements'])->middleware('auth');
Route::post('/dashboard/virement/code', [ClientController::class, 'virement_code'])->middleware('auth')->name('virement_code');
Route::get('/dashboard/virement/pourcentage/{user_id}/{virements_id}', [ClientController::class, 'virement_pourcentage'])->middleware('auth');
Route::get('/dashboard/virement/pourcentage/nombre/{user_id}/{virements_id}', [ClientController::class, 'virement_nombre_pourcentage'])->middleware('auth');
Route::post('/dashboard/virement', [ClientController::class, 'virement'])->middleware('auth');
Route::get('/dashboard/chat', [ClientController::class, 'chat_view'])->middleware('auth');
// Route::get('/dashboard/admin/chat', [ClientController::class, 'chat_admin_view'])->middleware('auth');
Route::get('/admin', [AdminController::class, 'accueil_dashboard'])->name('admin.dashboard')->middleware('auth');
Route::get('/admin/virements', [AdminController::class, 'virements'])->middleware('auth')->middleware('admin');
Route::post('/dashboard/virement/success', [ClientController::class, 'valider_virement'])->middleware('auth');



// admin
Route::get('/admin/dashboard', [AdminController::class, 'accueil_dashboard'])->middleware('auth')->middleware('admin');
Route::get('/admin/client-non-valide', [AdminController::class, 'client_non_valide'])->middleware('auth')->middleware('admin');
Route::get('/admin/clients', [AdminController::class, 'clients'])->middleware('auth')->middleware('admin');
Route::get('/admin/virements', [AdminController::class, 'virements'])->middleware('auth')->middleware('admin');
Route::get('/admin/transations', [AdminController::class, 'transations'])->middleware('auth')->middleware('admin');
Route::get('/admin/chat', [AdminController::class, 'chat_admin'])->middleware('auth')->middleware('admin');
Route::get('/admin/valide-client/{id}', [AdminController::class, 'valide_client'])->middleware('auth')->middleware('admin');
Route::get('/admin/delete-client/{id}', [AdminController::class, 'delete_client'])->middleware('auth')->middleware('admin');
Route::post('/admin/portefeuille/depot', [AdminController::class, 'portefeuille_depot'])->middleware('auth')->middleware('admin');
Route::post('/admin/change-progression', [AdminController::class, 'change_virement_progression'])->middleware('auth')->middleware('admin');
Route::get('/admin/delete-virement/{id}', [AdminController::class, 'delete_virement'])->middleware('auth')->middleware('admin');
Route::get('/admin/valider-virement/{id}', [AdminController::class, 'valider_virement'])->middleware('auth')->middleware('admin');
Route::post('/admin/crediter', [AdminController::class, 'crediter_compte'])->middleware('auth')->middleware('admin');


Route::get('/dashboard/demande', [AdminController::class, 'demande_pret'])->name('reception_pret')->middleware('auth')->middleware('admin');
Route::get('/dashboard/demande/{id}', [AdminController::class, 'demande_pret_control'])->name('vue')->middleware('auth')->middleware('admin');

Route::get('/dashboard/contact', [AdminController::class, 'contact'])->name('reception_contact')->middleware('auth')->middleware('admin');
Route::get('/dashboard/contact/{id}', [AdminController::class, 'contact_control'])->name('vue_contact')->middleware('auth')->middleware('admin');


Route::get('/dashboard/donation', [AdminController::class, 'donation'])->name('reception_donation')->middleware('auth')->middleware('admin');
Route::get('/dashboard/donation/{id}', [AdminController::class, 'donation_control'])->name('vue_donation')->middleware('auth')->middleware('admin');


Route::get('/dashboard/gestion', [AdminController::class, 'gestion'])->name('reception_gestion')->middleware('auth')->middleware('admin');
Route::get('/dashboard/gestion/{id}', [AdminController::class, 'gestion_control'])->name('vue_gestion')->middleware('auth')->middleware('admin');

Route::get('/dashboard/carte', [AdminController::class, 'carte'])->name('carte_gestion')->middleware('auth')->middleware('admin');
Route::get('/dashboard/carte/{id}', [AdminController::class, 'carte_control'])->name('carte_gestion')->middleware('auth')->middleware('admin');

Route::get('/dashboard/assurance', [assurannce::class, 'assurance_f'])->name('assurance_f')->middleware('auth')->middleware('admin');
Route::get('/dashboard/assurance/{id}', [assurannce::class, 'assurance_control'])->name('assurance_control')->middleware('auth')->middleware('admin');
Route::get('nos_implantation', [ClientController::class, 'implantation'])->name('implantation');
