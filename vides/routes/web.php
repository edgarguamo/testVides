<?php

use App\Http\Controllers\HistorialController;
use App\Http\Controllers\GraficoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ClienteController;
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
Route::group(['middleware' => 'auth'], function(){

    Route::resource('/hotelFol/tablaHotel', 'App\Http\Controllers\HotelController');

    Route::resource('/historialFol/tablaHistorial', 'App\Http\Controllers\HistorialController');

    Route::resource('/clienteFol/tablaCliente', 'App\Http\Controllers\ClienteController');

    Route::resource('/tablaGeneral', 'App\Http\Controllers\TablaGeneralController');

    Route::post('excelHotel', 'App\Http\Controllers\UploadExcel@excelHotel')->name('excelHotel');

    Route::get('/dashboard/data',[DataController::class,'index'])->name('dashboard.data');
    Route::get('/dashboard/data/historial',[HistorialController::class,'index'])->name('dashboard.data.historial');
    Route::get('/dashboard/data/hotel',[HotelController::class,'index'])->name('dashboard.data.hotel');
    Route::get('/dashboard/data/cliente',[ClienteController::class,'index'])->name('dashboard.data.cliente');
    Route::get('/dashboard/data/hotel/create', [HotelController::class, 'create'])->name('dashboard.data.hotel.create');
});

Route::get('/', function () {
    return view('index');
});

Route::get('carga', function(){
    return view('cargaFol.carga');
})->name('carga');

Route::get('graficos', function(){
    return view('graficas.getGrafica');
})->name('graficos');

Route::get('hoteles', function () {
    return view('welcome'); 
});

Route::get('turismo', function () {
    return "pagina de turismo";
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/grafica', function () {
    return view('graficas.grafica2');
})->name('grafica');

Route::resource('/dashboard/users', \App\Http\Controllers\UsersController::class);


Route::get('/dashboard/graficas/grafica2', [GraficoController::class, 'index']);

Route::post('/dashboard/graficas/grafica2', [GraficoController::class, 'index'])->name('crear');
