<?php  
	error_reporting(E_ALL ^ E_NOTICE);

	$email=$_GET['email'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Facultad de Ciencias Administrativas Mexicali</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/form.css">
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.7.min.js"></script>
		<script type="text/javascript" src="js/hidders.js"></script>
		<link rel="shortcut icon" href="img/favicon_logo.png">
		<script>
			$(document).ready(function() {
				$( ".contenido" ).hide();
				$( ".contenido" ).fadeIn(1000);
			});
			if(history.forward(1)){
				history.replace(history.forward(1));
			}
		</script>
		<style type="text/css">
			.columns3 {
				width: 70%;
			}
			.tablahead {
			    min-width: 80px;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<!-- Header -->
		<header>
			<h1><img src="img/logo_uabc.png" alt=""></h1>
			<div class="texto">
				<h2><strong>Universidad Autónoma de Baja California</strong></h2>
				<h3>Facultad de Ciencias Administrativas Mexicali</h3>
				<h3>Coordinación de Posgrado e Investigación</h3>
				<h3>Programa de seguimiento a Egresados</h3>
			</div>
			<h1></h1>
			<div class="sombra"></div>
		</header>
		<!-- Main -->
		<section class="main">
			<!-- Formulario -->
			<div class="contenido">
				<p class="redaccion">
					<b>Instrucciones:</b> Agradecemos colocar una 'X' en el recuadro que corresponda a su respuesta,
					hacer un breve comentario cuando se le solicite aclarar alguna respuesta especifica y seguir las indicaciones en cada pregunta.
				</p>
				<form action="save4.php" method="POST">
					<input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
					<fieldset>
						<legend>COMPROMISO SOCIAL</legend>
						
						<div class="row">
							<div class="columns3">
								<label>34. Quienes han cursado el programa de posgrado del que usted procede, ¿han hecho algún tipo de contribución para resolver problemas que afectan a los sectores más vulnerables de la sociedad? <small>requerido</small></label>

								<label><input type="radio" name="pre34" id="pre34" value="Si" required />Si</label>
								<label><input type="radio" name="pre34" id="pre34" value="No" required />No</label>
								<label><input type="radio" name="pre34" id="pre34" value="No sabe" required />No sabe</label>
							</div>
						</div>
						<div id="pre34si">
							<div class="row">
								<div class="columns2">
									<label>¿Cual?<small>requerido</small>
										<input type="text" name="pre34_cual" id="pre34_cual" placeholder="Proporcione">
									</label>
								</div>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>TUTORIA, ASESORIA.</legend>
						
						<div class="row">
							<div class="columns3">
								<label>35. Durante sus estudios de posgrado, ¿tuvo usted un asesor académico? <small>requerido</small></label>

								<label><input type="radio" name="pre35" id="pre35" value="Si" required />Si</label>
								<label><input type="radio" name="pre35" id="pre35" value="No" required />No</label>
								<label><input type="radio" name="pre35" id="pre35" value="No aplica" required />No aplica</label>
							</div>
						</div>
						<div id="pre35si">
							<div class="row">
								<div class="columns3">
									<label>36. Durante sus estudios de posgrado, ¿tuvo usted un asesor para su trabajo de titulación? <small>requerido</small></label>

									<label><input type="radio" name="pre36" id="pre36" value="Si" required />Si</label>
									<label><input type="radio" name="pre36" id="pre36" value="No" required />No</label>
									<label><input type="radio" name="pre36" id="pre36" value="No aplica" required />No aplica</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="columns3">
								<label>37. ¿Cómo evaluaría el desempeño de su asesor académico en los siguientes aspectos?</label>
								<table>
									<tr>
										<td></td>
										<td class="tablahead"><label2>Excelente<label2></td>
										<td class="tablahead"><label2>Bueno<label2></td>
										<td class="tablahead"><label2>Deficiente<label2></td>
										<td class="tablahead"><label2>Malo<label2></td>
										<td><label2>No Aplica<label2></td>
									</tr>
									<tr>
										<td><label>Orientación de dudas relacionadas con aspectos teóricos</label></td>
										<td><input type="radio" name="pre37_1" id="pre37_1" value="1" required></td>
										<td><input type="radio" name="pre37_1" id="pre37_1" value="2" required></td>
										<td><input type="radio" name="pre37_1" id="pre37_1" value="3" required></td>
										<td><input type="radio" name="pre37_1" id="pre37_1" value="4" required></td>
										<td><input type="radio" name="pre37_1" id="pre37_1" value="5" required></td>
									</tr>
									<tr>
										<td><label>Orientación en dudas relacionadas con aspectos metodológicos</label></td>
										<td><input type="radio" name="pre37_2" id="pre37_2" value="1" required></td>
										<td><input type="radio" name="pre37_2" id="pre37_2" value="2" required></td>
										<td><input type="radio" name="pre37_2" id="pre37_2" value="3" required></td>
										<td><input type="radio" name="pre37_2" id="pre37_2" value="4" required></td>
										<td><input type="radio" name="pre37_2" id="pre37_2" value="5" required></td>
									</tr>
									<tr>
										<td><label>Orientación para la planeación del curriculum personal (organizar su plan de estudios)</label></td>
										<td><input type="radio" name="pre37_3" id="pre37_3" value="1" required></td>
										<td><input type="radio" name="pre37_3" id="pre37_3" value="2" required></td>
										<td><input type="radio" name="pre37_3" id="pre37_3" value="3" required></td>
										<td><input type="radio" name="pre37_3" id="pre37_3" value="4" required></td>
										<td><input type="radio" name="pre37_3" id="pre37_3" value="5" required></td>
									</tr>
								</table>
							</div>
					    </div>
						<div class="row">
							<div class="columns3">
								<label>38.Su asesor de tesis fue interno o externo a la institución <small>requerido</small></label>

								<label><input type="radio" name="pre38" id="pre38" value="Interno" required>Interno</label>
								<label><input type="radio" name="pre38" id="pre38" value="Externo" required>Externo</label>
							</div>
						</div>
						<div class="row">
							<div class="columns3">
								<label>39. ¿Cómo evaluaría el desempeño de su asesor de tesis en los siguientes aspectos?<small>Requerido</small></label>
								<table>
									<tr>
										<td></td>
										<td class="tablahead"><label2>Excelente<label2></td>
										<td class="tablahead"><label2>Bueno<label2> (a)</td>
										<td class="tablahead"><label2>Deficiente<label2></td>
										<td class="tablahead"><label2>Malo<label2> (a)</td>
										<td><label2>No Aplica<label2></td>
									</tr>
									<tr>
										<td><label>Orientación en la delimitación del problema de investigación</label></td>
										<td><input type="radio" name="pre39_1" id="pre39_1" value="1" required></td>
										<td><input type="radio" name="pre39_1" id="pre39_1" value="2" required></td>
										<td><input type="radio" name="pre39_1" id="pre39_1" value="3" required></td>
										<td><input type="radio" name="pre39_1" id="pre39_1" value="4" required></td>
										<td><input type="radio" name="pre39_1" id="pre39_1" value="5" required></td>
									</tr>
									<tr>
										<td><label>Orientación en la elaboración del proyecto</label></td>
										<td><input type="radio" name="pre39_2" id="pre39_2" value="1" required></td>
										<td><input type="radio" name="pre39_2" id="pre39_2" value="2" required></td>
										<td><input type="radio" name="pre39_2" id="pre39_2" value="3" required></td>
										<td><input type="radio" name="pre39_2" id="pre39_2" value="4" required></td>
										<td><input type="radio" name="pre39_2" id="pre39_2" value="5" required></td>
									</tr>
									<tr>
										<td><label>Periodicidad controlada en la elaboración y revisión de sus avances</label></td>
										<td><input type="radio" name="pre39_3" id="pre39_3" value="1" required></td>
										<td><input type="radio" name="pre39_3" id="pre39_3" value="2" required></td>
										<td><input type="radio" name="pre39_3" id="pre39_3" value="3" required></td>
										<td><input type="radio" name="pre39_3" id="pre39_3" value="4" required></td>
										<td><input type="radio" name="pre39_3" id="pre39_3" value="5" required></td>
									</tr>
									<tr>
										<td><label>Orientación y participación en la agilización de los trámites administrativos para la titulación</label></td>
										<td><input type="radio" name="pre39_4" id="pre39_4" value="1" required></td>
										<td><input type="radio" name="pre39_4" id="pre39_4" value="2" required></td>
										<td><input type="radio" name="pre39_4" id="pre39_4" value="3" required></td>
										<td><input type="radio" name="pre39_4" id="pre39_4" value="4" required></td>
										<td><input type="radio" name="pre39_4" id="pre39_4" value="5" required></td>
									</tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="columns3">
								<label>40. Su asesor se mostró interesado por su trabajo de titualación:<small>requerido</small></label>

								<label><input type="radio" name="pre40" id="pre40" value="Muy interesado" required />Muy interesado</label>
								<label><input type="radio" name="pre40" id="pre40" value="Interesado" required />Interesado</label>
								<label><input type="radio" name="pre40" id="pre40" value="Poco Interesado" required />Poco Interesado</label>
								<label><input type="radio" name="pre40" id="pre40" value="Desinteresado" required />Desinteresado</label>
							</div>
						</div>
						<div class="row">
							<div class="columns3">
								<label>41. Considera que la comunicación con su asesor, fue en general: <small>requerido</small></label>

								<label><input type="radio" name="pre41" id="pre41" value="Excelente" required />Excelente</label>
								<label><input type="radio" name="pre41" id="pre41" value="Buena" required />Buena</label>
								<label><input type="radio" name="pre41" id="pre41" value="Deficiente" required />Deficiente</label>
								<label><input type="radio" name="pre41" id="pre41" value="Mala" required />Mala</label>
							</div>
						</div>
						<div class="row">
							<div class="columns3">
								<label>42. En general, en cada entrevista con su asesor las recomendaciones respecto a su trabajo <small>requerido</small></label>

								<label><input type="radio" name="pre42" id="pre42" value="1" required />Siempre permitían el avance</label>
								<label><input type="radio" name="pre42" id="pre42" value="2" required />La mayoría de las veces permitían el avance</label>
								<label><input type="radio" name="pre42" id="pre42" value="3" required />A veces se avanzaba y otras se retrocedía</label>
								<label><input type="radio" name="pre42" id="pre42" value="4" required />Casi nunca se avanzaba</label>
								<label><input type="radio" name="pre42" id="pre42" value="5" required />No aplica</label>
							</div>
						</div>
					</fieldset>
					<div class="botones">
						<input type="submit" class="btn" value="Siguiente >>">
					</div>
				</form>
			</div>
			
		</section>
		<!-- Footer -->
		<footer>
			<p>Universidad Autónoma de Baja California | Facultad de Ciencias Administrativas Campus Mexicali - Mexicali Baja California Copyright 2015 ©</p>
		</footer>
	</body>
</html>