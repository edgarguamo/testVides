<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use DB;

class ExcelImportHotel implements ToCollection, WithMultipleSheets, WithCalculatedFormulas
{
    public function sheets(): array
    {
        return [
            'DICIEMBRE' => $this,
        ];
    }

    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach($collection as $key=>$value){
            
            if($key==31){
                DB::table('hotel')->insert(['idEstablecimiento' => $value[0], 'nombres' => $value[0], 'categoria' => 
                $value[2], 'numHabitaciones' => $value[3], 'plazas' => $value[4], 'empTemp' => $value[19]]); 
            }
        }
    }
}
