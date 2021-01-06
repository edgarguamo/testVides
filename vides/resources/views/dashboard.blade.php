<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Panel de Control
        </h2>
    </x-slot>
    <!--
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>-->
    <div class="dashboardBody h-96 relative ">
        <section class="h-96 flex justify-around space-x-4">
            <article class="category">
                <a href="{{ route('carga') }}">
                    <img class="object-cover h-48" src="{{asset('img/dashboard/cargar-archivos.png')}}" alt="Img Cargar Archivos">
                    <p class="text-center">Cargar de Archivos</p> 
                </a>
            </article>
            <article class="category">
                <a href="#">
                    <img class="object-cover h-48" src="{{asset('img/dashboard/hacer-graficas.jpg')}}" alt="Img Grear Graficos">
                    <p class="text-center">Crear Graficas</p> 
                </a>
            </article>
        </section>
    </div>
</x-app-layout>
