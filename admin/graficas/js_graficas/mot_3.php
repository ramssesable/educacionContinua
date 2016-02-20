<?php 
    include('sesion.php');
    include('conex.php');
    
    $mot_1=0;
    $mot_2=0;
    $mot_3=0;
    $mot_4=0;
    $mot_5=0;

    if ($rol == 1) {
        $result = mysql_query("SELECT mot_3 FROM datos_posgrado");
    }else{
        $result = mysql_query("SELECT mot_3 FROM datos_posgrado WHERE posgrado='$rol' ");
    }
    while ($row=mysql_fetch_assoc($result)) {
        if ($row['mot_3'] == 1) {
            $mot_1++;
        }
        if ($row['mot_3'] == 2) {
            $mot_2++;
        }
        if ($row['mot_3'] == 3) {
            $mot_3++;
        }
        if ($row['mot_3'] == 4) {
            $mot_4++;
        }
        if ($row['mot_3'] == 5) {
            $mot_5++;
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
            "country": "Primero Opcion",
            "litres": <?php echo $mot_1; ?>,
              "color": "#008000"
        },
        {
            "country": "Segunda Opcion",
            "litres": <?php echo $mot_2; ?>,
              "color": "#778899"
        },
        {
            "country": "Tercera Opcion",
            "litres": <?php echo $mot_3; ?>,
              "color": "#483D8B"
        },
        {
            "country": "Cuarta Opcion",
            "litres": <?php echo $mot_4; ?>,
              "color": "#7B68EE"
        },
        {
            "country": "Quinta Opcion",
            "litres": <?php echo $mot_5; ?>,
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
        chart.write("mot_3");
    });
</script>
<div id="mot_3" style="width: 430px; height: 200px;"></div>