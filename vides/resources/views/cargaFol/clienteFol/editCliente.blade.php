@extends('layouts.baseCarga')
    
@section('contenido')

<form action="/clienteFol/tablaCliente/{{ $cliente->idCliente}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Id cliente</label>
        <input id="idCliente" name="idCliente" type="text" class="form-control" value="{{ $cliente->idCliente}}" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Id cliente estadia</label>
        <input id="idhesta" name="idhesta" type="text" class="form-control" value="{{ $cliente->idHEstadia}}" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tipo cliente</label>
        <input id="tipoCliente" name="tipoCliente" type="text" class="form-control" value="{{ $cliente->tipoCliente}}"tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Numero Clientes</label>
        <input id="numClientes" name="numClientes" type="text" class="form-control" value="{{ $cliente->numClientes}}" tabindex="1">
    </div>
    <a href="/clienteFol/tablaCliente" class="btn btn-secondary" tabindex="5">Cancel</a>
    <button type="sumbit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection