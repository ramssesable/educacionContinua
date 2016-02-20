<?

    include('conex.php');

    $h=0;

    $m=0;

    $result = mysql_query("SELECT sexo FROM datos_personales");

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
				</tbody>
			</table>
		</div>
		<footer>
			<p>Universidad Autónoma de Baja California | Facultad de Odontología Campus Mexicali - Mexicali Baja California Copyright 2014 ©</p>
			<h1><img src="../img/logo-conacyt.png" width="50"></h1>
		</footer>
		<center><a href="JavaScript:window.print();">Imprimir</a></center>
		<?echo"<center><a href="">Imprimir</a></center>";?>
	</body>
</html>
