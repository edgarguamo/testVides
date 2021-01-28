<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Visualizar Registro
        </h2>
    </x-slot>
    
    <h3 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800 m-4">Datos de hoteles</h3>
    <div class="pt-12 grid grid-cols-2 justify-items-center">
        <a href="{{route('dashboard.data.hotel.create')}}" class="border bg-gray-800  text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-300 focus:outline-none focus:shadow-outline">Crear</a>
        <a href="/dashboard/data" class="border border-gray-800 bg-gray-800 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-200 hover:border-gray-200 focus:outline-none focus:shadow-outline">Atras</a>
    </div>

    <div class="overflow-x-auto absolute inset-x-0  text-center mt-8">
    <table id="hoteles" align="center" class="table table-bordered table-striped w-1/2">
        <thead class="bg-primary text-white">
            <tr class="bg-gray-800">
                <th class="px-4 py-2" scope="col">id</th>
                <th class="px-32 py-2" scope="col">nombres</th>
                <th class="px-6 py-2" scope="col">categoria</th>
                <th class="px-4 py-2" scope="col">numHabitaciones</th>
                <th class="px-4 py-2" scope="col">plazas</th>
                <th class="px-4 py-2" scope="col">empTemp</th>
                <th class="px-16 py-2" scope="col">Personalizar</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach ($hoteles as $hotel)
            <tr class="bg-white border-4 border-gray-200">    
                <td class="px-4 py-2 text-center">{{$hotel['id']}}</td>
                <td class="px-32 py-2 text-center">{{$hotel['nombres']}}</td>
                <td class="px-6 py-2 text-center">{{$hotel['categoria']}}</td>
                <td class="px-4 py-2 text-center">{{$hotel['numHabitaciones']}}</td>
                <td class="px-4 py-2 text-center">{{$hotel['plazas']}}</td>
                <td class="px-4 y-2 text-center">{{$hotel['empTemp']}}</td>    
                <td class="px-16 py-2 text  -center">
                <div class="px-4 items-center flex gap-3">
                    <form action="/hotelFol/tablaHotel/{{ $hotel->id}}/edit" method="GET">
                        @csrf
                        <button link type="submit" class="uppercase p-3 flex items-center bg-blue-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg rounded-full w-12 h-12 ">
                            <svg width="32" height="32"  viewBox="0 0 32 32" style="transform: rotate(360deg);"><path d="M29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29zM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9z" fill="currentColor"></path></svg>
                        </button>
                    </form>
                    <form action="{{ route('tablaHotel.destroy', $hotel->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
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
    </div>
    <script src="{{asset('js/style.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function(){
        $('#hoteles').DataTable({
            "lengthMenu": [[5, 25, 50, 100, -1], [5, 25, 50, 100, "ALL"]]
        });

    });
    </script>
</x-app-layout>