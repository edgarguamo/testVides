<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Carga de Archivos
        </h2>
    </x-slot>
    <section class="h-96 flex items-center content-center justify-center ">
        <article>
            <form method="post" action="{{route('excelHotel')}}" enctype="multipart/form-data">
                @csrf
                <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                    </svg>
                    <span class="mt-2 text-base leading-normal">Select a file</span>
                    <input type='file' name="file" class="hidden" />
                </label>
                <button class="bg-transparent hover:bg-grey text-grey-dark font-semibold hover:text-green-600 py-2 px-4 border border-grey hover:border-green-600 rounded mr-2" type="submit">Hotel</button>
            </form>
        </article>
        <article>
            <form method="post" action="{{route('excelHistorial')}}" enctype="multipart/form-data">
                @csrf
                <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                    </svg>
                    <span class="mt-2 text-base leading-normal">Select a file</span>
                    <input type='file' name="file" class="hidden" />
                </label>
                <button class="bg-transparent hover:bg-grey text-grey-dark font-semibold hover:text-green-600 py-2 px-4 border border-grey hover:border-green-600 rounded mr-2" type="submit">Historial</button>
            </form>
        </article>
        <br><br><br><br>
        <article>
            <form method="post" action="{{route('excelCliente')}}" enctype="multipart/form-data">
                @csrf
                <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                    </svg>
                    <span class="mt-2 text-base leading-normal">Select a file</span>
                    <input type='file' name="file" class="hidden" />
                </label>
                <button class="bg-transparent hover:bg-grey text-grey-dark font-semibold hover:text-green-600 py-2 px-4 border border-grey hover:border-green-600 rounded mr-2" type="submit">Cliente</button>
            </form>
        </article>
    </section>
    <div class="row">
        <div class"col-md-12">
        <br>
            <h3 align="center">Hotel</h3>
            <br>
            <table class="table table-bordered">
                <tr>
                    <td>idEstablecimiento</td>
                    <td>nombres</td>
                    <td>categoria</td>
                    <td>numHabitaciones</td>
                    <td>plazas</td>
                    <td>empTemp</td>
                </tr>
                 @foreach($datos as $data)
                    <tr>    
                        <td>{{$data['idEstablecimiento']}}</td>
                        <td>{{$data['nombres']}}</td>
                        <td>{{$data['categoria']}}</td>
                        <td>{{$data['numHabitaciones']}}</td>
                        <td>{{$data['plazas']}}</td>
                        <td>{{$data['empTemp']}}</td>                  
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>