<?php

use App\Http\Controllers\GraficoController;
use App\Http\Controllers\UserController;
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

Route::resource('/hotelFol/tablaHotel', 'App\Http\Controllers\HotelController');

Route::resource('/historialFol/tablaHistorial', 'App\Http\Controllers\HistorialController');

Route::resource('/clienteFol/tablaCliente', 'App\Http\Controllers\ClienteController');

Route::resource('/tablaGeneral', 'App\Http\Controllers\TablaGeneralController');

Route::post('excelHotel', 'App\Http\Controllers\UploadExcel@excelHotel')->name('excelHotel');

Route::get('/', function () {
    return view('index');
});

Route::get('carga', function(){
    return view('cargaFol.carga');
})->name('carga');

Route::get('getGrafica', function(){
    return view('graficas.getGrafica');
})->name('getGrafica');

Route::get('graficos', function () {
    return "graficos";
})->name('graficos');

Route::get('hoteles', function () {
    return view('welcome'); 
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


Route::get('camino', function () {
    return "plantilla de erro";
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/listUser', [UserController::class,'index'])->name('dashboard.listUser');

Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/user',[UserController::class,'create'])->name('dashboard.createUser');

Route::get('/grafica', function () {
    return view('graficas.grafica');
})->name('grafica');

Route::delete('/dashboard/user/', [UserController::class, 'destroy'])->name('dashboard.destroyUser');

Route::get('dashboard/user/{id}/edit', [UserController::class, 'edit'])->name('dashboard.edit');

Route::get('graficas/grafica2', [GraficoController::class, 'index']);

Route::post('graficas/grafica2', [GraficoController::class, 'index'])->name('crear');