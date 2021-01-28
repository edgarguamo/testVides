<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Visualizar Registro
        </h2>
    </x-slot>
    <div class="grid place-items-center pt-10 h-4/6">
        <div class="w-10/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-4/12">
        <h2 class="text-center ">Crear Historial</h2>
            <form action="/historialFol/tablaHistorial" method="POST">
                @csrf
                <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Id historial estadia</label>
                <input id="idhesta" name="idhesta" type="text" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required tabindex="1">
                <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Id del Establecimiento</label>
                <input id="idestab" name="idestab" type="text" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" tabindex="1">
                <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Fecha</label>
                <input id="fecha" name="fecha" type="text" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" tabindex="1">
                <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">checkIn</label>
                <input id="checkIn" name="checkIn" type="text" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" tabindex="1">
                <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">checkOut</label>
                <input id="checkOut" name="checkOut" type="text" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" tabindex="1">
                <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Pernotaciones</label>
                <input id="pernotaciones" name="pernotaciones" type="text" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" tabindex="1">
                <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Habitaciones ocupadas</label>
                <input id="habitOcupadas" name="habitOcupadas" type="text" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" tabindex="1">
                <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Venta Neta</label>
                <input id="ventaNeta" name="ventaNeta" type="text" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" tabindex="1">
                <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Tipo tarifa</label>
                <input id="tipoTarifa" name="tipoTarifa" type="text" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" tabindex="1">
                <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Promedio tarifa</label>
                <input id="promTarifa" name="promTarifa" type="text" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" tabindex="1">
                <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Tarifa por persona</label>
                <input id="tarPer" name="tarPer" type="text" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" tabindex="1">
                <div class="flex justify-between gap-3 object-cover">
                    <span class="w-1/2 mt-9">
                        <a href="{{route('dashboard.data.historial')}}" class="w-full lg:px-14 py-3 mt-6 font-medium tracking-widest text-white uppercase bg-red-500 shadow-lg focus:outline-none hover:bg-red-900 hover:shadow-none" tabindex="5">Cancel</a>
                    </span>
                    <span class="1/2">
                        <button type="sumbit" class="w-full lg:px-14 md:px-7 py-3 mt-6 font-medium tracking-widest text-white uppercase bg-blue-500 shadow-lg focus:outline-none hover:bg-blue-900 hover:shadow-none" tabindex="4">
                            Guardar
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>