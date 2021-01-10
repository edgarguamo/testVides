<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoteles</title>
    <link rel="stylesheet" href="../css/hotelesyturismo.css">
</head>
<body>
    <x-navbar/>
    <section class="valoresbusqueda">
        <img src="../imgs/disp.png" alt="">
        <h1>Personalizar Tabla</h1>
        <div>
            <h3>Nombre del Hotel</h3>
        </div>
        <div>
            <select class="opciones" name="Nombre del Hotel" id="nh">
                <option>General</option>
                <option>Ejemplo2</option>
                <option>Ejemplo3</option>
            </select>
            <div>
                <h3>Datos Mostrados</h3>
            </div>
            <div>
                <select class="opciones" name="Datos Mostrados" id="dm">
                    <option>Rendimiento Financiero</option>
                    <option>Ejemplo2</option>
                    <option>Ejemplo3</option>
                </select>
            </div>
            <div>
                <h3>Mes de Inicio</h3>
            </div>
            <div>
                <select class="opciones" name="Mes Inicio" id="mi">
                    <option>Enero</option>
                    <option>Febrero</option>
                    <option>Marzo</option>
                    <option>Abril</option>
                    <option>Mayo</option>
                    <option>Junio</option>
                    <option>Julio</option>
                    <option>Agosto</option>
                    <option>Septiembre</option>
                    <option>Octubre</option>
                    <option>Noviembre</option>
                    <option>Diciembre</option>
                </select>
            </div>
            <div>
                <h3>Mes Fin</h3>
            </div>
            <div>
                <select class="opciones" name="Mes Fin" id="mf">
                    <option>Enero</option>
                    <option>Febrero</option>
                    <option>Marzo</option>
                    <option>Abril</option>
                    <option>Mayo</option>
                    <option>Junio</option>
                    <option>Julio</option>
                    <option>Agosto</option>
                    <option>Septiembre</option>
                    <option>Octubre</option>
                    <option>Noviembre</option>
                    <option>Diciembre</option>
                </select>
            </div>
            <div>
                <h3>Tipo de Tabla</h3>
            </div>
            <div>
                <select class="opciones" name="Tipo de Tabla" id="tdt">
                    <option>Gráfico de Barras</option>
                    <option>Gráfico de Pastel</option>
                    <option>Gráfico de Dispersión</option>
                </select>
            </div>
            <div class="botones">
                <input class="bot" type="button" value="Buscar">
                <input class="bot" type="button" value="Limpiar">
            </div>
        </div>
    </section>
</body>
</html>