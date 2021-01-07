<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ExcelImportHotel;
use App\Imports\ExcelImportHistorial;
use App\Imports\ExcelImportCliente;
use App\Models\Datos;

class MostrarDatos extends Controller
{
    function show()
    {
        $data = Datos::all();
        return view('carga', ['datos'=>$data]);
    }
}