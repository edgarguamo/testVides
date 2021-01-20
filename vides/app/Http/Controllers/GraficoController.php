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
        $clientesN = DB::table('cliente')
            ->join('historialestadia', 'cliente.idHEstadia', 'historialestadia.id')
            ->select(DB::raw("SUM(numClientes) as sum"))
            ->whereYear('fecha', 2019)
            ->where('tipoCliente', '=', 'Nacional')
            ->groupBy(DB::raw("Month(fecha)"))
            ->pluck('sum');

        $clientesE = DB::table('cliente')
            ->join('historialestadia', 'cliente.idHEstadia', 'historialestadia.id')
            ->select(DB::raw("SUM(numClientes) as sum"))
            ->whereYear('fecha', 2019)
            ->where('tipoCliente', '=', 'Extranjero')
            ->groupBy(DB::raw("Month(fecha)"))
            ->pluck('sum');

        $months = Historial::select(DB::raw("Month(fecha) as month"))
            ->whereYear('fecha', 2019)
            ->groupBy(DB::raw("Month(fecha)"))
            ->pluck('month'); 

        $datas = array(0, 0, 0, 0, 0, 0, 0, 0);
        $datas1 = array(0, 0, 0, 0, 0, 0, 0, 0);

        foreach($months as $index => $month)
        {
            $datas[$month - 5] = (int)$clientesN[$index];
            $datas1[$month - 5] = (int)$clientesE[$index];
        }

        return view('graficas.grafica2', compact('datas'), compact('datas1')); 
    }
}
