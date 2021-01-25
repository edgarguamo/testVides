<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Visualizar Graficas
        </h2>
    </x-slot>
<body>
<form method="POST" action="{{ route('crear') }}">
@csrf

<select id="tipoDatos" name="tipoDatos" type="text">
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

            <select class="dgeneral" name="hotel" type="text" style="display:none">
                <option value="SONESTA HOTEL LOJA">Hotel Sonesta</option>
                <option value="GRAND VICTORIA BOUTIQUE">Hotel Gran Victoria</option>
            </select>

            <select class="dgeneral" name="datos" type="text" style="display:none">
                <option value="numHabitaciones">Numero de habitaciones</option>
                <option value="plazas">Plazas</option>
                <option value="empTemp">Empleados temporales</option>
            </select>

            <select class="dmensual" name="hotel" type="text" style="display:none">
                <option value="SONESTA HOTEL LOJA">Hotel Sonesta</option>
                <option value="GRAND VICTORIA BOUTIQUE">Hotel Gran Victoria</option>
            </select>

            <select class="dmensual" name="datos" type="text" style="display:none">
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
                <option value="2019-05-30">Mayo</option>
                <option value="2019-06-31">Junio</option>
                <option value="2019-07-30">Julio</option>
                <option value="2019-08-31">Agosto</option>
                <option value="2019-09-30">Septiembre</option>
                <option value="2019-10-31">Octubre</option>
                <option value="2019-11-30">Noviembre</option>
                <option value="2019-12-31">Diciembre</option>
            </select>
            <button type="submit">Subir</button>
</form>
@yield('grafica')
</body>
</x-app-layout>