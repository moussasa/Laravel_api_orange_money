<?php

use App\Http\Controllers\OrangeController;
use App\Http\Controllers\PayerController;
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

// page d'acuueil
Route::get('/', function () {
    return view('index');
})->name('home');


// link de paiement orange

Route::get('/orange_payement_link',[OrangeController::class ,'orange_payement_link'])->name('orange_payement_link');
Route::get('/status',[OrangeController::class ,'status'])->name('status');



//======================================================================
// Payement mobile money mtn & Orange
//======================================================================


//======================================================================
// Payement mobile money mtn 
//======================================================================

Route::get('/smspayer', [PayerController::class, 'index']);

//======================================================================
// Payement mobile money Orange
//======================================================================

//======================================================================
// page intermediiare
//======================================================================
Route::post('/orange', [PayerController::class, 'orange']);
Route::post('/orangeretour', [PayerController::class, 'orangeretour']);
//======================================================================
// retour et details
//======================================================================
Route::get('/lastpartorange', [PayerController::class, 'orangelastretour']);
