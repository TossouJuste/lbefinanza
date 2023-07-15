<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ClientController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('messages/chats', [MessageController::class, 'chats']); // Route pour récupérer tous les messages (GET)
Route::post('messages', [MessageController::class, 'new_message']); // Route pour envoyer un message (POST)
Route::get('messages', [MessageController::class, 'index']); // Route pour récupérer tous les messages (GET)
Route::get('messages/{id}', [MessageController::class, 'show']); // Route pour récupérer un message spécifique par son ID (GET)
Route::get('messages/admin/{id1}/{id2}', [MessageController::class, 'show_admin']); // Route pour récupérer un message spécifique par son ID (GET)
Route::get('messages/nombre/{id}', [MessageController::class, 'nombre']); // Route pour récupérer un message spécifique par son ID (GET)
Route::delete('messages/{id}', [MessageController::class, 'destroy']); // Route pour supprimer un message spécifique par son ID (DELETE)
Route::get('messages', [MessageController::class, 'index']);

Route::post('virement/pourcentage/code/', [ClientController::class, 'code_verification']);
Route::get('virement/pourcentage/{id_virement}', [ClientController::class, 'virement_pourcentage_api']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
