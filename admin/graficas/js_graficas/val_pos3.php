<?php 
    include('sesion.php');
    include('conex.php');
    
	$siempre=0;
	$casi_siempre=0;
	$casi_nunca=0;
	$nunca=0;;

    if ($rol == 1) {
        $result = mysql_query("SELECT val_pos1,val_pos2,val_pos3 FROM datos_posgrado");
    }else{
        $result = mysql_query("SELECT val_pos1,val_pos2,val_pos3 FROM datos_posgrado WHERE posgrado='$rol' ");
    }
	while ($row2=mysql_fetch_assoc($result)) {
		if ($row2['val_pos3'] == 'Siempre') {
			$siempre++;
		}
		if ($row2['val_pos3'] == 'Casi siempre') {
			$casi_siempre++;
		}
		if ($row2['val_pos3'] == 'Casi nunca') {
			$casi_nunca++;
		}
		if ($row2['val_pos3'] == 'Nunca') {
			$nunca++;
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
            "country": "Siempre",
            "litres": <?php echo $siempre; ?>,
              "color": "#008000"
        },
        {
            "country": "Casi Siempre",
            "litres": <?php echo $casi_siempre; ?>,
              "color": "#778899"
        },
        {
            "country": "Casi Nunca",
            "litres": <?php echo $casi_nunca; ?>,
              "color": "#483D8B"
        },
        {
            "country": "Nunca",
            "litres": <?php echo $nunca; ?>,
              "color": "#7B68EE"
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