<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoteles = Hotel::all();
        return view('cargaFol.hotelFol.tablaHotel', compact('hoteles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargaFol.hotelFol.createHotel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hoteles = new Hotel();
        $hoteles->id = $request->get('idestab');
        $hoteles->nombres = $request->get('nomestab');
        $hoteles->categoria = $request->get('categoria');
        $hoteles->numHabitaciones = $request->get('nhab');
        $hoteles->plazas = $request->get('plazas');
        $hoteles->empTemp = $request->get('empTemp');

        $hoteles->save();

        return redirect('/hotelFol/tablaHotel');
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
        $hotel = Hotel::find($id);
        return view('cargaFol.hotelFol.editHotel', compact('hotel'));
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
        $hotel = Hotel::find($id);
        $hotel->id = $request->get('idestab');
        $hotel->nombres = $request->get('nomestab');
        $hotel->categoria = $request->get('categoria');
        $hotel->numHabitaciones = $request->get('nhab');
        $hotel->plazas = $request->get('plazas');
        $hotel->empTemp = $request->get('empTemp');

        $hotel->save();

        return redirect('/hotelFol/tablaHotel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::find($id);

        $hotel->delete();

        return redirect('/hotelFol/tablaHotel');
}
}