<?php 
    include('sesion.php');
    include('conex.php');
    
	$exp_posgrado_1=0;
	$exp_posgrado_2=0;
	$exp_posgrado_3=0;
	$exp_posgrado_4=0;
    $exp_posgrado_5=0;

    if ($rol == 1) {
        $result = mysql_query("SELECT exp_posgrado FROM datos_posgrado");
    }else{
        $result = mysql_query("SELECT exp_posgrado FROM datos_posgrado WHERE posgrado='$rol' ");
    }
	while ($row2=mysql_fetch_assoc($result)) {
		if ($row2['exp_posgrado'] == '100') {
			$exp_posgrado_1++;
		}
		if ($row2['exp_posgrado'] == '75') {
			$exp_posgrado_2++;
		}
		if ($row2['exp_posgrado'] == '50') {
			$exp_posgrado_3++;
		}
		if ($row2['exp_posgrado'] == '25') {
			$exp_posgrado_4++;
		}
        if ($row2['exp_posgrado'] == 'nada') {
            $exp_posgrado_5++;
        }
	}
 ?>
<script src="../amcharts/amcharts.js" type="text/javascript"></script>
<script src="../amcharts/pie.js" type="text/javascript"></script>
	<script type="text/javascript">
            var chart;
    var legend;

    var chartData = [
        {
            "country": "100%",
            "litres": <?php echo $exp_posgrado_1; ?>,
              "color": "#008000"
        },
        {
            "country": "75%",
            "litres": <?php echo $exp_posgrado_2; ?>,
              "color": "#778899"
        },
        {
            "country": "50%",
            "litres": <?php echo $exp_posgrado_3; ?>,
              "color": "#483D8B"
        },
        {
            "country": "25%",
            "litres": <?php echo $exp_posgrado_4; ?>,
              "color": "#7B68EE"
        },
        {
            "country": "Nada",
            "litres": <?php echo $exp_posgrado_5; ?>,
              "color": "#A52A2A"
        }
    ];

    AmCharts.ready(function () {
        // PIE CHART
        chart = new AmCharts.AmPieChart();
        chart.dataProvider = chartData;
        chart.titleField = "country";
        chart.valueField = "litres";
        chart.colorField = "color";

        // LEGEND
        legend = new AmCharts.AmLegend();
        legend.align = "center";
        legend.markerType = "circle";
        legend.position ='right';
        chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
        chart.addLegend(legend);
        chart.labelRadius = -30;
        chart.labelText = "";
        chart.depth3D = 10;
        chart.angle = 10;
        legend.switchType = "v";
        // WRITE
        chart.write("p2");
    });
        </script>
<div id="p2" style="width: 430px; height: 200px;"></div>