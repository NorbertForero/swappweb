<?php

require_once ('conn.php');

?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Highcharts Example</title>

		<style type="text/css">

		</style>
	</head>
	<body>

<script src="..\..\code\highcharts.js"></script>
<script src="..\..\code\highcharts-3d.js"></script>
<script src="..\..\code\modules\exporting.js"></script>
<script src="..\..\code\modules\export-data.js"></script>

<div id="container" style="height: 400px"></div>


		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: 'Relación de gastos e ingresos'
    },
    //tooltip: {
        //pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    //},
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Valor en pesos',
        data: [
            <?php
                    $sql = 'SELECT * FROM gastos WHERE id_usuario=37';
                    $result = mysqli_query($conn,$sql);
                    while ($registros = mysqli_fetch_array($result))
                    {
                    ?>
                        ['<?php echo $registros["categoria_gasto"]; ?>', <?php echo $registros["valor_gasto"]?>],
                    <?php
                    }
                    ?>
        ]
    }]
});
		</script>
	</body>
</html>
