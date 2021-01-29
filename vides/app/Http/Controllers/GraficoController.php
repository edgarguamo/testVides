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
        
        $tipoDatos = $request->tipoDatos;
        if($tipoDatos == 'generales'){

            $tipoGrafica = $request->tipoGraficaG;
            $hotel = $request->hotelG;
            $datos = $request->datosG;

            $consulta = DB::table('hotel')
                    ->select($datos)
                    ->where('nombres', '=', $hotel)
                    ->pluck($datos);

            $datas = $consulta;
        }else{
            $tipoGrafica = $request->tipoGraficaM;
            $hotel = $request->hotelM;
            $datos = $request->datosM;
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
        }
        $yAxis = $this->datos($datos);
        $datos = $hotel; 
        $titulo = $yAxis." de ".$hotel;
        $meses = $this->rangoHoteles($mes1);
        return view('graficas.grafica2', compact('datas', 'datos', 'tipoGrafica', 'yAxis', 'titulo', 'meses')); 
    }

    public function datos($yAxis)
    {
        switch($yAxis){
            case 'numHabitaciones':
                return 'Numero de habitaciones';
                break;
            case 'plazas':
                return 'Numero de plazas';
                break;
            case 'empTemp':
                return 'Numero de empleados temporales';
                break;
            case 'Nacional':
                return 'Promedio de clientes nacionales';
                break;
            case 'Extranjero':
                return 'Promedio de clientes extranjeros';
                break;
            case 'checkIn':
                return 'Promedio de checkIn';
                break;
            case 'checkOut':
                return 'Promedio de checkOut';
                break;
            case 'pernotaciones':
                return 'Promedio de pernotaciones';
                break;
            case 'habitOcupadas':
                return 'Promedio de habitaciones ocupadas';
                break;
            case 'ventaNeta':
                return 'Promedio de venta neta';
                break;
            case 'promTarifa':
                return 'Promedio de tarifa';
                break;
            case 'tarPer':
                return 'Promedio de tarifa por persona';
                break;
        }
    }

    public function rangoHoteles($mes1)
    {
        switch($mes1){
            case '2019-05-01':
                return ['Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
                break;
            case '2019-06-01':
                return ['Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
                break;
            case '2019-07-01':
                return ['Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
                break;
            case '2019-08-01':
                return ['Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
                break;
            case '2019-09-01':
                return ['Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
                break;
            case '2019-10-01':
                return ['Octubre', 'Noviembre', 'Diciembre'];
                break;
            case '2019-11-01':
                return ['Noviembre', 'Diciembre'];
                break;
            case '2019-12-01':
                return ['Diciembre'];
                break;
        }
    }
}
