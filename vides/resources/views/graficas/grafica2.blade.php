<link rel="stylesheet" href="{{asset('css.normalize.css')}}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
@extends('graficas.getGrafica')
@section('grafica')
    <div class="flex bg-gray-100">
        <div id="chart-container" class=""></div>
    </div>

    <script src="https://code.highcharts.com/highcharts.js" ></script>
    <script>
        var datas = <?php echo json_encode($datas) ?>;
        var datos = <?php echo json_encode($datos) ?>;

        Highcharts.chart('chart-container', {
            title:{
                text: 'Informacion de hoteles'
            },
            xAxis:{
                categories:['Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
            },
            yAxis:{
                title:{
                    text: "Numero Y"
                }
            },
            legend:{
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions:{
                series:{
                    allowPointSelect:true
                }
            },
            series:[{
                name: datos,
                data: datas
            }],
            responsive:{
                rules:[
                    {
                        condition:{
                            maxWidth: 500
                        },
                        chartOptions:{
                            legend:{
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }
                ]
            }
        })
        </script>
@endsection