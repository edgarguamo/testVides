<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ExcelImportHotel;
use App\Imports\ExcelImportHistorial;
use App\Imports\ExcelImportCliente;
use Maatwebsite\Excel\Facades\Excel;

class UploadExcel extends Controller
{
    function excelHotel(Request $request){
        $file =  $request->file;

        Excel::import(new ExcelImportHotel, $file);
        return redirect('/carga');
    }

    function excelHistorial(Request $request){
        $file =  $request->file;

        Excel::import(new ExcelImportHistorial, $file);
        return redirect('/carga');
    }

    function excelCliente(Request $request){
        $file =  $request->file;

        Excel::import(new ExcelImportCliente, $file);
        return redirect('/carga');
    }
}