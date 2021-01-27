<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Visualizar Registro
        </h2>
    </x-slot>
<div class="grid place-items-center pt-10 h-4/6">
    <div class="w-10/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-4/12">
    <h2 class="text-center ">Crear Hotel</h2>
        <form action="/hotelFol/tablaHotel" method="POST" class="mt-6">
            @csrf
            <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Id del Establecimiento</label>
            <input id="idestab" name="idestab" type="text" placeholder="15" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required tabindex="1">
            
            <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Nombre del establecimiento</label>
            <input id="nomestab" name="nomestab" type="text" placeholder="Hotel el Dorado" class="block w-full  p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required tabindex="1">

            <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Categoria</label>
            <input id="categoria" name="categoria" type="text" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required tabindex="1">

            <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">N Habitaciones</label>
            <input id="nhab" name="nhab" type="text" placeholder="70" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required tabindex="1">

            <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Plazas</label>
            <input id="plazas" name="plazas" type="text" placeholder="50" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required tabindex="1">

            <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Empleados temporales</label>
            <input id="empTemp" name="empTemp" type="text" placeholder="12" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required tabindex="1">
            
            <div class="flex justify-between gap-3 object-cover">
                <span class="w-1/2">
                    <button type="sumbit" class="w-full lg:px-14 py-3 mt-6 font-medium tracking-widest text-white uppercase bg-red-500 shadow-lg focus:outline-none hover:bg-red-900 hover:shadow-none" tabindex="4">
                        <a href="/hotelFol/tablaHotel" class="btn btn-secondary" tabindex="5">Cancel</a>
                    </button>
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