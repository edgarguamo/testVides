<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MostrarDatos;
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
Route::get('carga', [MostrarDatos::class,'show']);

Route::post('excelHotel', 'App\Http\Controllers\UploadExcel@excelHotel')->name('excelHotel');

Route::post('excelHistorial', 'App\Http\Controllers\UploadExcel@excelHistorial')->name('excelHistorial');

Route::post('excelCliente', 'App\Http\Controllers\UploadExcel@excelCliente')->name('excelCliente');

Route::get('/', function () {
    return view('index');
});

Route::get('carga', function(){
    return view('carga');
})->name('carga');

Route::get('graficos', function () {
    return "graficos";
})->name('graficos');

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
