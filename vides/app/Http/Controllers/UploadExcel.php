<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ExcelImportHotel;
use App\Imports\ExcelImportHistorial;
use App\Imports\ExcelImportCliente;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Archivo;

class UploadExcel extends Controller
{

    function excel(Request $request){
        if($request->hasFile('file')){
            $file = $request->file('file');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/archivos/', $name);

            $archivo = new Archivo();
            $archivo->nomArchivo = $name;
            $archivo->save();

            
        }
        return redirect('/carga');
    }

    function excelHotel(Request $request){

        $file =  $request->file('file');

        Excel::import(new ExcelImportHotel, $file);
        Excel::import(new ExcelImportHistorial, $file);
        Excel::import(new ExcelImportCliente, $file);
        UploadExcel::excel($request);
        return redirect('/carga');
    }

    function excelHistorial(Request $request){
        $file =  $request->file;

        
        return redirect('/carga');
    }

    function excelCliente(Request $request){
        $file =  $request->file;

        
        return redirect('/carga');
    }
}