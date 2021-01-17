<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Visualizar Registro
        </h2>
    </x-slot>
    <div class="pt-12">
        <a href="tablaHistorial/create" class="border bg-gray-800  text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-300 focus:outline-none focus:shadow-outline">Crear</a>
    </div>
    <br>
    <h3 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">Datos de historiales:</h3>
    <br>
    <table id="historiales" align="center" class="table table-bordered table-striped" style="width:100%">
        <thead class="bg-primary text-white">
            <tr class="bg-gray-800">
                <th class="px-16 py-2" scope="col">id</th>
                <th class="px-16 py-2" scope="col">idEstablecimiento</th>
                <th class="px-16 py-2" scope="col">Fecha</th>
                <th class="px-16 py-2" scope="col">checkIn</th>
                <th class="px-16 py-2" scope="col">checkOut</th>
                <th class="px-16 py-2" scope="col">pernotaciones</th>
                <th class="px-16 py-2" scope="col">habitOcupadas</th>
                <th class="px-16 py-2" scope="col">ventaNeta</th>
                <th class="px-16 py-2" scope="col">tipoTarifa</th>
                <th class="px-16 py-2" scope="col">promTarifa</th>
                <th class="px-16 py-2" scope="col">tarPer</th>
                <th class="px-16 py-2" scope="col">Personalizar</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($historiales as $historial)
            <tr class="bg-white border-4 border-gray-200">  
                <td class="px-16 py-2 items-center">{{$historial['id']}}</td>  
                <td class="px-16 py-2 items-center">{{$historial['idEstablecimiento']}}</td>
                <td class="px-16 py-2 items-center">{{$historial['fecha']}}</td>
                <td class="px-16 py-2 items-center">{{$historial['checkIn']}}</td>
                <td class="px-16 py-2 items-center">{{$historial['checkOut']}}</td>
                <td class="px-16 py-2 items-center">{{$historial['pernotaciones']}}</td>
                <td class="px-16 py-2 items-center">{{$historial['habitOcupadas']}}</td>
                <td class="px-16 py-2 items-center">{{$historial['ventaNeta']}}</td>
                <td class="px-16 py-2 items-center">{{$historial['tipoTarifa']}}</td>
                <td class="px-16 py-2 items-center">{{$historial['promTarifa']}}</td>
                <td class="px-16 py-2 items-center">{{$historial['tarPer']}}</td> 
                <td>
                <form action="{{ route('tablaHistorial.destroy', $historial->id)}}" method="POST">
                    <a href="/historialFol/tablaHistorial/{{ $historial->id}}/edit" class="btn btn-info">Editar</a>
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
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function(){
        $('#historiales').DataTable({
            "lengthMenu": [[5, 25, 50, 100, -1], [5, 25, 50, 100, "ALL"]]
        });

    });
    </script>
</x-app-layout>