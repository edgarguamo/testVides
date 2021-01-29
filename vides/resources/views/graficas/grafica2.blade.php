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
        var tipoGrafica = <?php echo json_encode($tipoGrafica) ?>;
        var yAxis = <?php echo json_encode($yAxis) ?>;
        var titulo = <?php echo json_encode($titulo) ?>;
        var meses = <?php echo json_encode($meses) ?>;
        Highcharts.chart('chart-container', {
            title:{
                text: titulo
            },
            tooltip: {
                formatter: function() {
                    var sliceIndex = this.point.index;
                    var sliceName = this.series.chart.axes[0].categories[sliceIndex];
                    return 'The value for <b>' + sliceName +
                    '</b> is <b>' + this.y + '</b>';
                }
            },
            legend: {
                enabled: true,
                labelFormatter: function() {
                    var legendIndex = this.index;
                    var legendName = this.series.chart.axes[0].categories[legendIndex];

                    return legendName;
                }
            },
            xAxis:{
                categories: meses
            },
            yAxis:{
                title:{
                    text: yAxis
                }
            },
            legend:{
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'top'
            },
            plotOptions:{
                series:{
                    allowPointSelect:true
                }
            },
            chart: {
                type: tipoGrafica
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