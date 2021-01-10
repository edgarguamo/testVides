<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Historial;

class HistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historiales = Historial::all();
        return view('cargaFol.historialFol.tablaHistorial', compact('historiales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargaFol.historialFol.createHistorial');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $historiales = new Historial();
        $historiales->id = $request->get('idhesta');
        $historiales->idEstablecimiento = $request->get('idestab');
        $historiales->fecha = $request->get('fecha');
        $historiales->checkIn = $request->get('checkIn');
        $historiales->checkOut = $request->get('checkOut');
        $historiales->pernotaciones = $request->get('pernotaciones');
        $historiales->habitOcupadas = $request->get('habitOcupadas');
        $historiales->ventaNeta = $request->get('ventaNeta');
        $historiales->tipoTarifa = $request->get('tipoTarifa');
        $historiales->promTarifa = $request->get('promTarifa');
        $historiales->tarPer = $request->get('tarPer');

        $historiales->save();

        return redirect('/historialFol/tablaHistorial');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historial = Historial::find($id);
        return view('cargaFol.historialFol.editHistorial', compact('historial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $historial = Historial::find($id);
        $historial->id = $request->get('idhesta');
        $historial->idEstablecimiento = $request->get('idestab');
        $historial->fecha = $request->get('fecha');
        $historial->checkIn = $request->get('checkIn');
        $historial->checkOut = $request->get('checkOut');
        $historial->pernotaciones = $request->get('pernotaciones');
        $historial->habitOcupadas = $request->get('habitOcupadas');
        $historial->ventaNeta = $request->get('ventaNeta');
        $historial->tipoTarifa = $request->get('tipoTarifa');
        $historial->promTarifa = $request->get('promTarifa');
        $historial->tarPer = $request->get('tarPer');

        $historial->save();

        return redirect('/historialFol/tablaHistorial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $historial = Historial::find($id);

        $historial->delete();

        return redirect('/historialFol/tablaHistorial');
}
}