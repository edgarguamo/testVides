<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Visualizar Graficas
        </h2>
    </x-slot>
<body>
<div class="container mx-auto my-6" >
    <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="w-10/12 p-12 bg-white w-1/2 my-2 max-h-96 md:h-screen">
            <h2 class="text-center ">Panel de datos</h2>
                <form method="POST" action="{{ route('crear') }}">
                    @csrf
                    <div class="block justify-between gap-3">
                        <label for="tipoDatos" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">
                            Seleccione los datos
                        </label>
                        <select id="tipoDatos" name="tipoDatos" type="text" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 focus:outline-none focus:bg-gray-300 focus:shadow-inner">
                                <option>Tipo de datos</option>
                                <option value="generales">Datos generales</option>
                                <option value="mensuales">Datos mensuales</option>
                        </select>

                        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                        <script>

                            var correctPlaces = ['generales'];
                            var correctPlaces1 = ['mensuales'];

                            $('select[name=tipoDatos]').change(function(){
                                $('select[class=dgeneral]').toggle(correctPlaces.indexOf($(this).val())>=0);

                            });

                            $('select[name=tipoDatos]').change(function(){
                                $('select[class=dmensual]').toggle(correctPlaces1.indexOf($(this).val())>=0);

                            });

                        </script>
                        <select class="dgeneral block w-full p-3 mt-2 text-gray-700 bg-gray-200 focus:outline-none focus:bg-gray-300 focus:shadow-inner" name="hotelG" type="text" style="display:none">
                            <option value="hotel">Seleccionar hotel</option>
                            <option value="SONESTA HOTEL LOJA">Hotel Sonesta</option>
                            <option value="GRAND VICTORIA BOUTIQUE">Hotel Gran Victoria</option>
                        </select>

                        <select class="dgeneral block w-full p-3 mt-2 text-gray-700 bg-gray-200 focus:outline-none focus:bg-gray-300 focus:shadow-inner" name="tipoGraficaG" type="text" style="display:none">
                            <option value="grafica">Tipo de grafica</option>
                            <option value="line">Lineas</option>
                            <option value="spline">Spline</option>
                            <option value="area">Area</option>
                            <option value="areaspline">Areaspline</option>
                            <option value="column">Columnas</option>
                            <option value="bar">Barras</option>
                            <option value="pie">Pastel</option>
                            <option value="scatter">Scatter</option>
                        </select>

                        <select class="dgeneral" name="datosG" type="text" style="display:none">
                            <option value="datos">Seleccionar datos</option>
                            <option value="numHabitaciones">Numero de habitaciones</option>
                            <option value="plazas">Plazas</option>
                            <option value="empTemp">Empleados temporales</option>
                        </select>

                        <select class="dmensual" name="hotelM" type="text" style="display:none">
                            <option value="hotel">Seleccionar hotel</option>
                            <option value="SONESTA HOTEL LOJA">Hotel Sonesta</option>
                            <option value="GRAND VICTORIA BOUTIQUE">Hotel Gran Victoria</option>
                        </select>

                        <select class="dgeneral block w-full p-3 mt-2 text-gray-700 bg-gray-200 focus:outline-none focus:bg-gray-300 focus:shadow-inner" name="tipoGraficaM" type="text" style="display:none">
                            <option value="grafica">Tipo de grafica</option>
                            <option value="line">Lineas</option>
                            <option value="spline">Spline</option>
                            <option value="area">Area</option>
                            <option value="areaspline">Areaspline</option>
                            <option value="column">Columnas</option>
                            <option value="bar">Barras</option>
                            <option value="pie">Pastel</option>
                            <option value="scatter">Scatter</option>
                        </select>

                        <select class="dmensual" name="datosM" type="text" style="display:none">
                            <option value="datos">Seleccionar datos</option>
                            <option value="Nacional">Nacional</option>
                            <option value="Extranjero">Extranjero</option>
                            <option value="checkIn">CheckIn</option>
                            <option value="checkOut">CheckOut</option>
                            <option value="pernotaciones">Pernotaciones</option>
                            <option value="habitOcupadas">Habitaciones ocupadas</option>
                            <option value="ventaNeta">Venta Neta</option>
                            <option value="promTarifa">Promedio de tarifa</option>
                            <option value="tarPer">Tarifa por persona</option>
                        </select>

                        <select class="dmensual" name="mesInic" type="text" style="display:none">
                            <option value="mesinicio">Mes Inicial</option>
                            <option value="2019-05-01">Mayo</option>
                            <option value="2019-06-01">Junio</option>
                            <option value="2019-07-01">Julio</option>
                            <option value="2019-08-01">Agosto</option>
                            <option value="2019-09-01">Septiembre</option>
                            <option value="2019-10-01">Octubre</option>
                            <option value="2019-11-01">Noviembre</option>
                            <option value="2019-12-01">Diciembre</option>
                        </select>

                        <select class="dmensual" name="mesFin" type="text" style="display:none">
                            <option value="mesfin">Mes final</option>
                            <option value="2019-05-30">Mayo</option>
                            <option value="2019-06-31">Junio</option>
                            <option value="2019-07-30">Julio</option>
                            <option value="2019-08-31">Agosto</option>
                            <option value="2019-09-30">Septiembre</option>
                            <option value="2019-10-31">Octubre</option>
                            <option value="2019-11-30">Noviembre</option>
                            <option value="2019-12-31">Diciembre</option>
                        </select>
                        <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">Subir</button>
                    </div>
                </form>
            </div>
        @yield('grafica')
    </div>
</div>

</div>
</body>
</x-app-layout>