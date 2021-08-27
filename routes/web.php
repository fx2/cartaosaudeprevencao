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

Auth::routes(['register' => false]);

Route::prefix('admin')->group(function () {
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('vendedores/deletar', [App\Http\Controllers\Vendedores\VendedorController::class, 'deletar'])->name('vendedores.deletar');
    Route::resource('vendedores', App\Http\Controllers\Vendedores\VendedorController::class);
});


// Route::post('campanha-boleto-token/{id}', 'App\Http\Controllers\Normal\CampanhaController@getTokenBoleto')->name('campanha-boleto-token');
Route::post('campanha-boleto', 'App\Http\Controllers\Normal\CampanhaController@salvaBoleto')->name('campanha-boleto');
Route::resource('campanha', App\Http\Controllers\Normal\CampanhaController::class);

Route::resource('pricing', App\Http\Controllers\Normal\PricingController::class);

Route::resource('textocontrato', App\Http\Controllers\Normal\MediaText\TextoContratoController::class);
Route::resource('textoconcluircompra', App\Http\Controllers\Normal\MediaText\TextoConcluirCompraController::class);