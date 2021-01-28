<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Visualizar Registro
        </h2>
    </x-slot>
    <div class="grid place-items-center pt-10 h-4/6">
        <div class="w-10/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-4/12">
        <h2 class="text-center ">Crear Cliente</h2>

        <form action="/clienteFol/tablaCliente" method="POST">
            @csrf
                <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Id Cliente</label>
                <input id="idCliente" name="idCliente" type="text" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" tabindex="1">
                <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Id historial estadia</label>
                <input id="idhesta" name="idhesta" type="text" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" tabindex="1">
                <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Tipo cliente</label>
                <input id="tipoCliente" name="tipoCliente" type="text" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" tabindex="1">
                <label for="" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Numero de clientes</label>
                <input id="numClientes" name="numClientes" type="text" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" tabindex="1">

            <div class="flex justify-between gap-3 object-cover">
                <span class="w-1/2">
                    <a href="{{route('dashboard.data.cliente')}}" class="w-full lg:px-14 py-3 mt-6 font-medium tracking-widest text-white uppercase bg-red-500 shadow-lg focus:outline-none hover:bg-red-900 hover:shadow-none" tabindex="5">Cancel</a>

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