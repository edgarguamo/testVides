@extends('layouts.baseCarga')
    
    @section('css')
    <link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    @endsection
    @section('contenido')
    <a href="tablaHotel/create" class="btn btn-primary">Crear</a>
    
    <br>
    <h3 align="center">Datos de hoteles:</h3>
    <br>
    <table id="hoteles" align="center" class="table table-bordered table-striped" style="width:100%">
        <thead class="bg-primary text-white">
        <tr>
            <th scope="col">idEstablecimiento</th>
            <th scope="col">nombres</th>
            <th scope="col">categoria</th>
            <th scope="col">numHabitaciones</th>
            <th scope="col">plazas</th>
            <th scope="col">empTemp</th>
            <th scope="col">Personalizar</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($hoteles as $hotel)
            <tr>    
                <td>{{$hotel['idEstablecimiento']}}</td>
                <td>{{$hotel['nombres']}}</td>
                <td>{{$hotel['categoria']}}</td>
                <td>{{$hotel['numHabitaciones']}}</td>
                <td>{{$hotel['plazas']}}</td>
                <td>{{$hotel['empTemp']}}</td>    
                <td>
                    <form action="{{ route('tablaHotel.destroy', $hotel->idEstablecimiento)}}" method="POST">
                    <a href="/hotelFol/tablaHotel/{{ $hotel->idEstablecimiento}}/edit" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-info">Eliminar</button>
                    </form>  
                    </td>            
            </tr>
        @endforeach
        </tbody>
    </table>
    @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

    <script>
    $(document).ready(function(){
        $('#hoteles').DataTable({
            "lengthMenu": [[5, 25, 50, 100, -1], [5, 25, 50, 100, "ALL"]]
        });

    });
    </script>
    @endsection
@endsection