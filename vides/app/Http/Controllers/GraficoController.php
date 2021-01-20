<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Historial;
use DB;

class GraficoController extends Controller
{
    public function index()
    {
        $clientes = Cliente::select(DB::raw("SUM('tipoCliente') as sum"))
            ->whereYear('')
            ->groupBy(DB::raw("idHEstadia"))
            ->pluck('sum');

        $months = Historial::select(DB::raw("Month(fecha) as month"))
            ->whereYear('fecha', date('Y'))
            ->groupBy(DB::raw("Month"))
            ->pluck('month'); 

        $datas = array(0, 0, 0, 0, 0, 0, 0, 0);

        foreach($months as $index => $month)
        {
            $datas[$month] = 
        }
    }
}
