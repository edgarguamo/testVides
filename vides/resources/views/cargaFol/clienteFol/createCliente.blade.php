@extends('layouts.baseCarga')
    
@section('contenido')

<form action="/clienteFol/tablaCliente" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Id Cliente</label>
        <input id="idCliente" name="idCliente" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Id historial estadia</label>
        <input id="idhesta" name="idhesta" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tipo cliente</label>
        <input id="tipoCliente" name="tipoCliente" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Numero de clientes</label>
        <input id="numClientes" name="numClientes" type="text" class="form-control" tabindex="1">
    </div>
    <a href="/clienteFol/tablaCliente" class="btn btn-secondary" tabindex="5">Cancel</a>
    <button type="sumbit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection