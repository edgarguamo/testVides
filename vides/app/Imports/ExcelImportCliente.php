<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use DB;

class ExcelImportCliente implements ToCollection, WithMultipleSheets, WithCalculatedFormulas

{
    public function sheets(): array
    {
        return [
            
            'MAYO' => $this,
            'JUNIO' => $this,
            'JULIO' => $this,
            'AGOSTO' => $this,
            'SEPTIEMBRE' => $this,
            'OCTUBRE' => $this,
            'NOVIEMBRE' => $this,
            'DICIEMBRE' => $this,
        ];
    }

    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach($collection as $key=>$value){
            if($value[5]!=null && $value[1]!=null && $value[0]!=null){
                if($key!=0){ 
                    $fechaEx = explode('/', $value[5]);
                    $fecha = $fechaEx[2].'-'.$fechaEx[1].'-'.$fechaEx[0]; 
                    DB::table('cliente')->insert([
                        'idHEstadia' => DB::table('historialestadia')
                        ->select('historialestadia.id')
                        ->join('hotel', 'historialestadia.idEstablecimiento', 'hotel.id')
                        ->where('nombres', '=', $value[0])
                        ->where('fecha', '=', $fecha)
                        ->first()->id,
                        'tipoCliente' => 'Nacional', 'numCLientes' => $value[9]]);
                    DB::table('cliente')->insert([
                        'idHEstadia' => DB::table('historialestadia')
                        ->select('historialestadia.id')
                        ->join('hotel', 'historialestadia.idEstablecimiento', 'hotel.id')
                        ->where('nombres', '=', $value[0])
                        ->where('fecha', '=', $fecha)
                        ->first()->id,
                        'tipoCliente' => 'Extranjero', 'numCLientes' => $value[10]]); 
                }
            }
            
        }
    }
}
