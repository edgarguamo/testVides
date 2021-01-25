<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Visualizar Registro
        </h2>
    </x-slot>
    <h3 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800 m-6">Datos de Clientes</h3>
    <button
        type="button"
        class="border border-gray-800 bg-gray-800 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline">
        <a href="/dashboard/datos">Atras</a>
    </button>
    <table id="clientes" align="center" class="table table-bordered table-striped w-4/6">
        <thead class="bg-primary text-white">
        <tr class="bg-gray-800 rounded-md">
            <th class="px-4 py-2"  scope="col">id</th>
            <th class="px-8 py-2"  scope="col">idHEstadia</th>
            <th class="px-6 py-2"  scope="col">tipoCliente</th>
            <th class="px-4 py-2"  scope="col">numClientes</th>
            <th class="px-4 py-2"  scope="col">Personalizar</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($clientes as $cliente)
            <tr class="bg-white border-4 border-gray-200">  
                <td class="px-4 py-2 items-center">{{$cliente['id']}}</td>  
                <td class="px-8 py-2 items-center">{{$cliente['idHEstadia']}}</td>
                <td class="px-6 py-2 items-center">{{$cliente['tipoCliente']}}</td>
                <td class="px-4 py-2 items-center">{{$cliente['numClientes']}}</td>
                <td>
                    <div class="px-4 items-center flex gap-3">
                        <form action="/clienteFol/tablaCliente/{{ $cliente->id}}/edit" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button link type="submit" class="uppercase p-3 flex items-center bg-blue-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg rounded-full w-12 h-12 ">
                                <svg width="32" height="32"  viewBox="0 0 32 32" style="transform: rotate(360deg);"><path d="M29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29zM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9z" fill="currentColor"></path></svg>
                            </button>
                        </form>
                        <form action="{{ route('tablaCliente.destroy', $cliente->id)}}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="uppercase p-3 flex items-center bg-red-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg rounded-full w-12 h-12 ">
                                <svg width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" style="transform: rotate(360deg);">
                                    <path d="M12 12h2v12h-2z" fill="currentColor"></path>
                                    <path d="M18 12h2v12h-2z" fill="currentColor"></path>
                                    <path d="M4 6v2h2v20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8h2V6zm4 22V8h16v20z" fill="currentColor"></path>
                                    <path d="M12 2h8v2h-8z" fill="currentColor"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </td>                 
            </tr>
        @endforeach
        </tbody>
    </table>
    <button
        type="button"
        class="border border-gray-800 bg-gray-800 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline">
        <a href="/dashboard/datos">Atras</a>
    </button>

    <script src="{{asset('js/style.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#clientes').DataTable({
            "lengthMenu": [[5, 25, 50, 100, -1], [5, 25, 50, 100, "ALL"]]
        });

    });
    </script>
</x-app-layout>