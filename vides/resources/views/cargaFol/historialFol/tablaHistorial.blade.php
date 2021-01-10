@extends('layouts.baseCarga')
    
    @section('css')
    <link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    @endsection
    @section('contenido')
    <a href="tablaHistorial/create" class="btn btn-primary">Crear</a>
    
    <br>
    <h3 align="center">Datos de historiales:</h3>
    <br>
    <table id="historiales" class="table table-bordered table-striped" style="width:100%">
        <thead class="bg-primary text-white">
        <tr>
            <th scope="col">idHEstadia</th>
            <th scope="col">idEstablecimiento</th>
            <th scope="col">Fecha</th>
            <th scope="col">checkIn</th>
            <th scope="col">checkOut</th>
            <th scope="col">pernotaciones</th>
            <th scope="col">habitOcupadas</th>
            <th scope="col">ventaNeta</th>
            <th scope="col">tipoTarifa</th>
            <th scope="col">promTarifa</th>
            <th scope="col">tarPer</th>
            <th scope="col">Personalizar</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($historiales as $historial)
            <tr>  
                <td>{{$historial['idHEstadia']}}</td>  
                <td>{{$historial['idEstablecimiento']}}</td>
                <td>{{$historial['fecha']}}</td>
                <td>{{$historial['checkIn']}}</td>
                <td>{{$historial['checkOut']}}</td>
                <td>{{$historial['pernotaciones']}}</td>
                <td>{{$historial['habitOcupadas']}}</td>
                <td>{{$historial['ventaNeta']}}</td>
                <td>{{$historial['tipoTarifa']}}</td>
                <td>{{$historial['promTarifa']}}</td>
                <td>{{$historial['tarPer']}}</td> 
                <td>
                <form action="{{ route('tablaHistorial.destroy', $historial->idHEstadia)}}" method="POST">
                    <a href="/historialFol/tablaHistorial/{{ $historial->idHEstadia}}/edit" class="btn btn-info">Editar</a>
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
        $('#historiales').DataTable({
            "lengthMenu": [[5, 25, 50, 100, -1], [5, 25, 50, 100, "ALL"]]
        });

    });
    </script>
    @endsection
@endsection