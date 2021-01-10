@extends('layouts.baseCarga')
    
    @section('css')
    <link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    @endsection
    @section('contenido')
    <a href="tablaCliente/create" class="btn btn-primary">Crear</a>
    
    <br>
    <h3 align="center">Datos de Clientes:</h3>
    <br>
    <table id="clientes" class="table table-bordered table-striped" style="width:100%">
        <thead class="bg-primary text-white">
        <tr>
            <th scope="col">id</th>
            <th scope="col">idHEstadia</th>
            <th scope="col">tipoCliente</th>
            <th scope="col">numClientes</th>
            <th scope="col">Personalizar</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($clientes as $cliente)
            <tr>  
                <td>{{$cliente['id']}}</td>  
                <td>{{$cliente['idHEstadia']}}</td>
                <td>{{$cliente['tipoCliente']}}</td>
                <td>{{$cliente['numClientes']}}</td>
                <td>
                <form action="{{ route('tablaCliente.destroy', $cliente->id)}}" method="POST">
                    <a href="/clienteFol/tablaCliente/{{ $cliente->id}}/edit" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-info">Eliminar</button>
                    </form>
                    </td>                 
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="/carga" class="btn btn-primary">Atras</a>
    @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

    <script>
    $(document).ready(function(){
        $('#clientes').DataTable({
            "lengthMenu": [[5, 25, 50, 100, -1], [5, 25, 50, 100, "ALL"]]
        });

    });
    </script>
    @endsection
@endsection