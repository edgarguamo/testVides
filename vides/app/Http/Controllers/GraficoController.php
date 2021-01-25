<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Historial;
use DB;

class GraficoController extends Controller
{
    public function index(Request $request)
    {
        $hotel = $request->hotel;
        $datos = $request->datos;
        $mes1 = $request->mesInic;
        $mes2 = $request->mesFin;
        $mes1aux = explode('-', $mes1);
        $mes1Array = intval($mes1aux[1]);
        $mes2aux = explode('-', $mes2);
        $mes2Array = intval($mes2aux[1]);

        $tamArray = $mes2Array - $mes1Array + 1;

        if($datos == 'Nacional' || $datos == 'Extranjero')
        {
            $consulta = DB::table('cliente')
                ->join('historialestadia', 'cliente.idHEstadia', 'historialestadia.id')
                ->join('hotel', 'historialestadia.idEstablecimiento', 'hotel.id')
                ->selectRaw("SUM(numClientes) as sum")              
                ->whereYear('fecha', 2019)
                ->whereBetween('fecha', [$mes1, $mes2])
                ->where('nombres', '=', $hotel)
                ->where('tipoCliente', '=', $datos)
                ->groupBy(DB::raw("Month(fecha)"))
                ->pluck('sum');
        }else{
            $consulta = DB::table('historialestadia')
                ->selectRaw("SUM($datos) as sum")
                ->whereYear('fecha', 2019)
                ->whereBetween('fecha', [$mes1, $mes2])
                ->groupBy(DB::raw("Month(fecha)"))
                ->pluck('sum');
        }
        $months = Historial::select(DB::raw("Month(fecha) as month"))
            ->whereYear('fecha', 2019)
            ->whereBetween('fecha', [$mes1, $mes2])
            ->groupBy(DB::raw("Month(fecha)"))
            ->pluck('month'); 

        $datas = array($tamArray);

        foreach($months as $index => $month)
        {
            $datas[$month - $mes1Array] = (int)$consulta[$index];
        }
        
        return view('graficas.grafica2', compact('datas'), compact('datos')); 
    }
    public function obtener(Request $request)
    {
        
    }
}
