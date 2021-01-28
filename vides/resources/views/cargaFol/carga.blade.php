<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Carga de Archivos
        </h2>
    </x-slot>
    <section class="h-96 flex items-center content-center justify-center ">
        <article>
            <form method="post" action="{{route('excelHotel')}}" enctype="multipart/form-data" class="-mt-16 ">
                @csrf
                <label class="w-64 flex flex-col items-center px-4 py-6 mb-4 bg-gray-800 text-white rounded-lg shadow-lg tracking-wide uppercase transition duration-500 hover:bg-white hover:text-gray-800 border border-blue cursor-pointer ">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                    </svg>
                    <span class="mt-2 text-base leading-normal">Select a file</span>
                    <input type='file' name="file" class="hidden" />
                </label>
                <label  class="" >
                    <button class="border bg-gray-800  text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-white hover:text-gray-800 focus:outline-none focus:shadow-outline" type="submit">
                        Cargar
                    </button>
                    <a class="border bg-gray-800  text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-white hover:text-gray-800 focus:outline-none focus:shadow-outline" href="/tablaGeneral" >
                        Archivos cargados
                    </a>                    
                </label>
                
            </form>
            <div class="absolute inset-x-0  text-center mt-8">
                <div class="">
                    @yield('archivo')
                </div>
            </div>
        </article>
    </section>  
</x-app-layout>