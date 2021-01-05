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
        echo "Inserted succesfully";
    }

    function excelHistorial(Request $request){
        $file =  $request->file;

        Excel::import(new ExcelImportHistorial, $file);
        echo "Inserted succesfully";
    }

    function excelCliente(Request $request){
        $file =  $request->file;

        Excel::import(new ExcelImportCliente, $file);
        echo "Inserted succesfully";
    }
}