<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/site', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('campanha', App\Http\Controllers\Normal\CampanhaController::class);
Route::resource('pricing', App\Http\Controllers\Normal\PricingController::class);

Route::resource('textocontrato', App\Http\Controllers\Normal\MediaText\TextoContratoController::class);
Route::resource('textoconcluircompra', App\Http\Controllers\Normal\MediaText\TextoConcluirCompraController::class);