@extends('graficas.getGrafica')
@section('grafica')
    <div id="chart-container"></div>

    <script src="https://code.highcharts.com/highcharts.js"></script>
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