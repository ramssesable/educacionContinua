<?php
    include('sesion.php');
    include('conex.php');
    
    $h=0;
    $m=0;
    
    if ($rol == 1) {
        $result = mysql_query("SELECT sexo FROM datos_personales");
    }else{
        $result = mysql_query("SELECT sexo FROM datos_personales a, datos_posgrado b WHERE posgrado='$rol' AND a.email=b.email");
    }
    
    while ($row=mysql_fetch_assoc($result)) {
        if ($row['sexo'] == 'M') {
            $h++;
       }
       if ($row['sexo'] == 'F') {
            $m++;
       }
    }

?>
<script src="../amcharts/amcharts.js" type="text/javascript"></script>
<script src="../amcharts/serial.js" type="text/javascript"></script>

<!-- scripts for exporting chart as an image -->
<!-- Exporting to image works on all modern browsers except IE9 (IE10 works fine) -->
<!-- Note, the exporting will work only if you view the file from web server -->
<!--[if (!IE) | (gte IE 10)]> -->
<script src="../amcharts/exporting/amexport.js" type="text/javascript"></script>
<script src="../amcharts/exporting/rgbcolor.js" type="text/javascript"></script>
<script src="../amcharts/exporting/canvg.js" type="text/javascript"></script>
<script src="../amcharts/exporting/jspdf.js" type="text/javascript"></script>
<script src="../amcharts/exporting/filesaver.js" type="text/javascript"></script>
<script src="../amcharts/exporting/jspdf.plugin.addimage.js" type="text/javascript"></script>
<!-- <![endif]-->
<script>
		var chart;

        var chartData = [{
            "country": "Hombres",
                "visits": <?php echo $h; ?>,
                "color": "#FF0F00"
        }, {
            "country": "Mujeres",
                "visits": <?php echo $m; ?>,
                "color": "#B0DE09"
        }];


        var chart = AmCharts.makeChart("genero", {
            type: "serial",
            dataProvider: chartData,
            categoryField: "country",
            depth3D: 20,
            angle: 30,

            categoryAxis: {
                labelRotation: 0,
                gridPosition: "start"
            },

            valueAxes: [{
                title: "Reporte de Genero"
            }],

            graphs: [{

                valueField: "visits",
                colorField: "color",
                type: "column",
                lineAlpha: 0,
                fillAlphas: 1
            }],

            chartCursor: {
                cursorAlpha: 0,
                zoomable: false,
                categoryBalloonEnabled: false
            },

            exportConfig: {
                menuTop: "21px",
                menuBottom: "auto",
                menuRight: "21px",
                backgroundColor: "#efefef",

                menuItemStyle	: {
                backgroundColor			: '#EFEFEF',
                rollOverBackgroundColor	: '#DDDDDD'},

                menuItems: [{
                    textAlign: 'center',
                    icon: '../amcharts/images/export.png',
                    onclick:function(){},
                    items: [{
                        title: 'JPG',
                        format: 'jpg'
                    }, {
                        title: 'PNG',
                        format: 'png'
                    }, {
                        title: 'SVG',
                        format: 'svg'
                    }, {
                        title: 'PDF',
                        format: 'pdf'
                    }]
                }]
            }
        });
	</script>
    <div id="genero" style="width: 300px; height: 200px;"></div>