@extends('layouts.baseCarga')
    
@section('contenido')

<form action="/historialFol/tablaHistorial" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Id historial estadia</label>
        <input id="idhesta" name="idhesta" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Id del Establecimiento</label>
        <input id="idestab" name="idestab" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha</label>
        <input id="fecha" name="fecha" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">checkIn</label>
        <input id="checkIn" name="checkIn" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">checkOut</label>
        <input id="checkOut" name="checkOut" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Pernotaciones</label>
        <input id="pernotaciones" name="pernotaciones" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Habitaciones ocupadas</label>
        <input id="habitOcupadas" name="habitOcupadas" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Venta Neta</label>
        <input id="ventaNeta" name="ventaNeta" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tipo tarifa</label>
        <input id="tipoTarifa" name="tipoTarifa" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Promedio tarifa</label>
        <input id="promTarifa" name="promTarifa" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tarifa por persona</label>
        <input id="tarPer" name="tarPer" type="text" class="form-control" tabindex="1">
    </div>
    <a href="/historialFol/tablaHistorial" class="btn btn-secondary" tabindex="5">Cancel</a>
    <button type="sumbit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection