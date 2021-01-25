<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HighCharts</title>
</head>
<body>
    
    <div id="chart-container"></div>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        var datas = <?php echo json_encode($datas) ?>;
        var datas1 = <?php echo json_encode($datas1) ?>;

        Highcharts.chart('chart-container', {
            title:{
                text: 'Titulo'
            },
            subtitle:{
                text: 'Subtitulo'
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
                name: 'New User',
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
</body>
</html>