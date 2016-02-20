<?
    include('sesion.php');
    include('conex.php');

    $mes=date("F");
    if ($mes=="January") $mes="Enero";
    if ($mes=="February") $mes="Febrero";
    if ($mes=="March") $mes="Marzo";
    if ($mes=="April") $mes="Abril";
    if ($mes=="May") $mes="Mayo";
    if ($mes=="June") $mes="Junio";
    if ($mes=="July") $mes="Julio";
    if ($mes=="August") $mes="Agosto";
    if ($mes=="September") $mes="Setiembre";
    if ($mes=="October") $mes="Octubre";
    if ($mes=="November") $mes="Noviembre";
    if ($mes=="December") $mes="Diciembre";

    $h=0;
    $m=0;

    if ($rol == 1) {
    	$result = mysql_query("SELECT sexo FROM datos_personales");
    }
    else{
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

<html>
	<head>
		<title>Reporte</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="reportes.css">
	</head>
	<body>
		<!-- Header -->
		<div class="header">
			<!-- HEADER -->
			<h1><img src="../img/logo_uabc.png" width="50" alt=""></h1>
			<div class="texto">
				<h2><strong>Universidad Autónoma de Baja California</strong></h2>
				<h3>Facultad de Odontología</h3>
				<h3>Coordinación de Posgrado e Investigación</h3>
				<h3>Programa de seguimiento a Egresados</h3>
			</div>
			<h1><img src="../img/logo_odonto.png" width="50"></h1>
			<!--<h1><img src="img/logo-conacyt.png" width="70"></h1>-->
		</div>
		<div class="main">
			<label>Reporte de Genero</label>
			<table class='tablesorter'>
				<thead>
					<tr>
						<th>Hombres</th>
						<th>Mujeres</th>
					</tr>
				</thead>
				<tbody>
					
					<tr class="odd">
						<td><? echo $h; ?></td>	
						<td><? echo $m; ?></td>	
					</tr>
					<tr class="odd">
						<td colspan="2" align="center"><iframe src="../graficas/js_graficas/genero_g.php" width="720" height="470" frameborder="0"></iframe></td>
					</tr>
				</tbody>
			</table>
		</div>
		
		<footer>
			<p><? echo date("d");?> de <? echo $mes; ?> del <? echo date("Y") ?></p>
			<h1><img src="../img/conacyt.png" width="70"></h1>
		</footer>
		<center><a href="JavaScript:window.print();">Imprimir</a></center>
	</body>
</html>
