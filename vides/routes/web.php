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
    return view('index');
});

Route::get('hoteles', function () {
    return "pipo";
});

Route::get('turismo', function () {
    return "pagina de turismo";
});

Route::get('graphs-hotels', function () {
    return "Aqui se haran las graficas";
});

Route::get('error', function () {
    return "plantilla de erro";
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
