<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Panel de Control
        </h2>
    </x-slot>

    <div class="container lg:mt-36 md:mt-24  mb-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
    
            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
    
                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg bg-white hover:bg-gray-200  hover:border-gray-200">
    
                    <a href="{{ route('dashboard.data.historial')}}">
                        <img alt="Placeholder" class="block object-cover w-full h-48" src="{{asset('img/dashboard/cargar-archivos.png')}}">
                    </a>
    
                    <header class="leading-tight p-2 md:p-4">
                        <h2 class="text-lg ">
                            <a class="no-underline hover:underline text-black sm:ml-14" href="{{ route('dashboard.data.historial')}}">
                            historial
                            </a>
                        </h2>
                    </header>
                </article>
                <!-- END Article -->
            </div>
            
            <!-- END Column -->
    
            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
    
                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg bg-white hover:bg-gray-200  hover:border-gray-200">
    
                    <a href="{{ route('dashboard.data.hotel')}}">
                        <img alt="Placeholder" class="block object-cover h-48 w-full" src="{{asset('img/dashboard/users.png')}}">
                    </a>
    
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-black sm:ml-14" href="{{ route('dashboard.data.hotel')}}">
                                Hoteles
                            </a>
                        </h1>
                    </header>
                </article>
                <!-- END Article -->
    
            </div>
            <!-- END Column -->
    
            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
    
                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg bg-white hover:bg-gray-200  hover:border-gray-200">
    
                    <a href="{{ route('dashboard.data.cliente')}}">
                        <img alt="Placeholder" class="block object-cover h-48 w-full" src="{{asset('img/dashboard/hacer-graficas.jpg')}}">
                    </a>
    
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-black sm:ml-14" href="{{ route('dashboard.data.cliente')}}">
                                clientes
                            </a>
                        </h1>
                    </header>
                </article>
                <!-- END Article -->
    
            </div>
            <!-- END Column -->
        </div>
        <button
            type="button"
            class="border border-gray-100 bg-white text-black rounded-md px-4 py-2 m-2 px-12 shadow-lg transition duration-500 ease select-none hover:bg-gray-200  hover:border-gray-200 focus:outline-none focus:shadow-outline">
            <a href="/dashboard">Atras</a>
        </button>
    </div>
    

</x-app-layout>