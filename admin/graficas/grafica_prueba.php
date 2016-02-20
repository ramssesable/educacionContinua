<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Grafica</title>
	<script src="amcharts/amcharts.js" type="text/javascript"></script>
    <script src="amcharts/serial.js" type="text/javascript"></script>
    <script src="amcharts/pie.js" type="text/javascript"></script>
	<!--[if (!IE) | (gte IE 10)]> -->
    <script src="amcharts/exporting/amexport.js" type="text/javascript"></script>
    <script src="amcharts/exporting/rgbcolor.js" type="text/javascript"></script>
    <script src="amcharts/exporting/canvg.js" type="text/javascript"></script>
    <script src="amcharts/exporting/jspdf.js" type="text/javascript"></script>
    <script src="amcharts/exporting/filesaver.js" type="text/javascript"></script>
    <script src="amcharts/exporting/jspdf.plugin.addimage.js" type="text/javascript"></script>
    <?php 
        include('js_graficas/genero.php');
        include('js_graficas/mot_1.php');
        /*include('js_graficas/mot_2.php');
        /*include('js_graficas/mot_3.php');
        include('js_graficas/mot_4.php');
        include('js_graficas/mot_5.php');
        include('js_graficas/p1.php');
        include('js_graficas/p2.php'); */
    ?>
    <style>
        #mot_4, #p1{
            margin-left: 500px;
            margin-top: -200px;
        }
    </style>
</head>
<body>
    <a href="JavaScript:window.print();">imprimir</a>
    <br>
    <!-- Grafica Genero -->
    <div id="genero" style="width:500px;height:200px;"></div>
    <!-- Fin Grafica Genero -->
    <br>
    <!-- Grafica Motivo 1 -->
    <div id="mot_1" style="width:500px;height:200px;"></div>
    <!-- Fin Grafica Motivo 1 -->
    <!-- Grafica Motivo 2 -->
    <div id="mot_2" style="width:500px;height:200px;"></div>
    <!-- Fin Grafica Motivo 2 -->
    <br>
    <!-- Grafica Motivo 3 -->
    <div id="mot_3" style="width:500px;height:200px;"></div>
    <!-- Fin Grafica Motivo 3 -->
    <!-- Grafica Motivo 4 -->
    <div id="mot_4" style="width:500px;height:200px;"></div>
    <!-- Fin Grafica Motivo 4 -->
    <br>
    <!-- Grafica Motivo 5 -->
    <div id="mot_5" style="width:500px;height:200px;"></div>
    <!-- Fin Grafica Motivo 5 -->
    <!-- Grafica Pregunta 1 -->
    <div id="p1" style="width:500px;height:200px;"></div>
    <!-- Fin Grafica Pregunta 1 -->
    <br>
    <!-- Grafica Pregunta 2 -->
    <div id="p2" style="width:500px;height:200px;"></div>
    <!-- Fin Grafica Pregunta 2 -->
</body>
</html>