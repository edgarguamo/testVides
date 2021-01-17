@extends('cargaFol.carga')
@section('archivo')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Archivos subidos
        </h2>
    </x-slot>
    <br>
    <table id="archivos" align="center" class="table table-bordered table-striped" style="width:100%">
        <thead class="bg-primary text-white">
            <tr class="bg-gray-800">
                <th class="px-16 py-2" scope="col">id</th>
                <th class="px-16 py-2" scope="col">Archivo</th>
                <th class="px-16 py-2" scope="col">Fecha de subida</th>
                <th class="px-16 py-2" scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($archivos as $archivo)
            <tr class="bg-white border-4 border-gray-200">    
                <td class="px-16 py-2 items-center">{{$archivo['id']}}</td>
                <td class="px-16 py-2 items-center">{{$archivo['nomArchivo']}}</td>
                <td class="px-16 py-2 items-center">{{$archivo['created_at']}}</td>   
                <td class="px-16 py-2 items-center">
                    <form action="{{ route('tablaGeneral.destroy', $archivo->id)}}" method="POST" class="flex">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="uppercase p-3 flex items-center bg-red-500 text-blue-50 max-w-max shadow-sm hover:shadow-lg rounded-full w-12 h-12 ">
                        <svg width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" style="transform: rotate(360deg);"><path d="M12 12h2v12h-2z" fill="currentColor"></path><path d="M18 12h2v12h-2z" fill="currentColor"></path><path d="M4 6v2h2v20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8h2V6zm4 22V8h16v20z" fill="currentColor"></path><path d="M12 2h8v2h-8z" fill="currentColor"></path></svg>
                    </button>
                    </form>  
                    </td>            
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pt-12">
    <a href="/carga" class="border bg-gray-800  text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-300 focus:outline-none focus:shadow-outline">Cerrar tabla</a>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function(){
        $('#archivos').DataTable({
            "lengthMenu": [[5, 25, 50, 100, -1], [5, 25, 50, 100, "ALL"]]
        });

    });
    </script>
@endsection