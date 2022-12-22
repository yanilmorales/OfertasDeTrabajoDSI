<?php

use App\Http\Controllers\OfertController;
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

Route::view('/', 'index')->name("index");
Route::view('/contacto', 'contacto')->name("contacto");
Route::view('/iniciar_sesion', 'iniciar_sesion')->name("iniciar_sesion");
Route::view('/registrarse', 'registrarse')->name("registrarse");
Route::view('/busqueda', 'busqueda')->name("busqueda");
Route::view('/faqs', 'faqs')->name("faqs");

Route::resource('ofertas', OfertController::class)->names([
    'create' => "publicar_oferta"
]);


