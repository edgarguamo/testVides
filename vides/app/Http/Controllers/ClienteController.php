<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        $clientes = Cliente::orderBy('id')->paginate();

        return view('cargaFol.clienteFol.tablaCliente', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargaFol.clienteFol.createCliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new Cliente();
        $clientes->id = $request->get('idCliente');
        $clientes->idHEstadia = $request->get('idhesta');
        $clientes->tipoCliente = $request->get('tipoCliente');
        $clientes->numClientes = $request->get('numClientes');

        $clientes->save();

        return redirect('/clienteFol/tablaCliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return redirect()->view('cargaFol.hotelFol.tablacliente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('cargaFol.clienteFol.editCliente', compact('cliente'));
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
        $cliente = Cliente::find($id);
        $cliente->id = $request->get('idCliente');
        $cliente->idHEstadia = $request->get('idhesta');
        $cliente->tipoCliente = $request->get('tipoCliente');
        $cliente->numClientes = $request->get('numClientes');

        $cliente->save();

        return redirect('/clienteFol/tablaCliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);

        $cliente->delete();

        $max = DB::table('cliente')->max('id') + 1; 
        DB::statement("ALTER TABLE cliente AUTO_INCREMENT =  $max");

        return redirect('/clienteFol/tablaCliente');
}
}