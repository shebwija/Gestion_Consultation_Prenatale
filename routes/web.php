<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PayementController;
use App\Http\Controllers\RdvController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/backend', function () {
    return view('back-end.index');

});

Route::get('Accueil', [UtilisateurController::class, 'home'])->name('home');

Route::resource('gestion_consultations', ConsultationController::class);

Route::get('supprimer_consultation/{id}', [ConsultaionController::class, 'destroy']);

Route::resource('gestion_medecin', MedecinController::class);
Route::get('supprimer_medecin/{id}', [MedecinController::class, 'destroy']);

Route::resource('gestion_patient', PatientController::class);

Route::get('supprimer_patient/{id}', [PatientController::class, 'destroy']);

Route::resource('gestion_payement', PayementController::class);

Route::get('supprimer_payement/{id}', [PayementController::class, 'destroy']);

Route::resource('gestion_rendez_vous', RdvController::class);

Route::get('supprimer_rendez_vous/{id}', [RdvController::class, 'destroy']);

Route::get('contact', [ClientController::class, 'helloo'])->name('contact');

Route::post('/consultation', [UtilisateurController::class, 'consultation'])->name('consultation')->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
