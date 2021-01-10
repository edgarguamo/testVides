@extends('layouts.baseCarga')
    
@section('contenido')

<form action="/hotelFol/tablaHotel/{{ $hotel->idEstablecimiento}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Id del Establecimiento</label>
        <input id="idestab" name="idestab" type="text" class="form-control" value="{{ $hotel->idEstablecimiento}}" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre del establecimiento</label>
        <input id="nomestab" name="nomestab" type="text" class="form-control" value="{{ $hotel->nombres}}" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Categoria</label>
        <input id="categoria" name="categoria" type="text" class="form-control" value="{{ $hotel->categoria}}" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">N Habitaciones</label>
        <input id="nhab" name="nhab" type="text" class="form-control" value="{{ $hotel->numHabitaciones}}" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Plazas</label>
        <input id="plazas" name="plazas" type="text" class="form-control" value="{{ $hotel->plazas}}" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Empleados temporales</label>
        <input id="empTemp" name="empTemp" type="text" class="form-control" value="{{ $hotel->empTemp}}" tabindex="1">
    </div>
    <a href="/hotelFol/tablaHotel" class="btn btn-secondary" tabindex="5">Cancel</a>
    <button type="sumbit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection