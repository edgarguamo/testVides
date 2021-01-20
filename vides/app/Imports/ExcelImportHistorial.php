<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use DB;
use App\Models\Hotel;

class ExcelImportHistorial implements ToCollection, WithMultipleSheets, WithCalculatedFormulas

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
                    $fecha = $fecha[2].'-'.$fecha[1].'-'.$fecha[0];
                    DB::table('historialestadia')->insert([
                        'idEstablecimiento' => DB::table('hotel')->select('id')->where('nombres', '=', $value[0])->first()->id,
                     'fecha' => $fecha, 'checkIn' => $value[6], 'checkOut' => $value[7], 'pernotaciones' => $value[8], 
                    'habitOcupadas' => $value[11], 'ventaNeta' => $value[16], 'tipoTarifa' => $value[13], 'promTarifa' => $value[14], 
                    'tarPer' => $value[15]]); 
                }
            }
            
        }
    }
}
