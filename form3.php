<?php  
	error_reporting(E_ALL ^ E_NOTICE);

	$email=$_GET['email'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/form.css">
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.7.min.js"></script>
		<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
		<script type="text/javascript" src="js/jvalidar.js"></script>
		<link rel="shortcut icon" href="img/favicon_logo.png">
		<script type="text/javascript">
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
			    min-width: 100px;
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
				<form action="save3.php" method="POST">
					<fieldset>
					<input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
						<legend>PROCESO DE ENSEÑANZA Y APRENDIZAJE</legend>

						<div class="row">
							<div class="columns3">
								<label>27. ¿Cómo evaluaría los siguientes aspectos del programa?</label>
								<table>
									<tr>
										<td></td>
										<td class="tablahead">Muy efectivos</td>
										<td class="tablahead">Efectivos</td>
										<td class="tablahead">Poco Efectivos</td>
										<td><label>Deficientes</label></td>
									</tr>
									<tr>
										<td><label>Métodos de enseñanza</label></td>
										<td><input type="radio" name="pre27_1" id="pre27_1" value="1" required></td>
										<td><input type="radio" name="pre27_1" id="pre27_1" value="2" required></td>
										<td><input type="radio" name="pre27_1" id="pre27_1" value="3" required></td>
										<td><input type="radio" name="pre27_1" id="pre27_1" value="4" required></td>
									</tr>
									<tr>
										<td><label>Actualidad de los contenidos teóricos de las principales asignaturas</label></td>
										<td><input type="radio" name="pre27_2" id="pre27_2" value="1" required></td>
										<td><input type="radio" name="pre27_2" id="pre27_2" value="2" required></td>
										<td><input type="radio" name="pre27_2" id="pre27_2" value="3" required></td>
										<td><input type="radio" name="pre27_2" id="pre27_2" value="4" required></td>
									</tr>
									<tr>
										<td><label>Actualidad de los contenidos en general</label></td>
										<td><input type="radio" name="pre27_3" id="pre27_3" value="1" required></td>
										<td><input type="radio" name="pre27_3" id="pre27_3" value="2" required></td>
										<td><input type="radio" name="pre27_3" id="pre27_3" value="3" required></td>
										<td><input type="radio" name="pre27_3" id="pre27_3" value="4" required></td>
									</tr>
									<tr>
										<td><label>Grado de aplicabilidad de los contenidos a la realidad nacional</label></td>
										<td><input type="radio" name="pre27_4" id="pre27_4" value="1" required></td>
										<td><input type="radio" name="pre27_4" id="pre27_4" value="2" required></td>
										<td><input type="radio" name="pre27_4" id="pre27_4" value="3" required></td>
										<td><input type="radio" name="pre27_4" id="pre27_4" value="4" required></td>
									</tr>
									<tr>
										<td><label>Habilidades para la identificación y resolución de problemas que se plantean en su área de formación profesional</label></td>
										<td><input type="radio" name="pre27_5" id="pre27_5" value="1" required></td>
										<td><input type="radio" name="pre27_5" id="pre27_5" value="2" required></td>
										<td><input type="radio" name="pre27_5" id="pre27_5" value="3" required></td>
										<td><input type="radio" name="pre27_5" id="pre27_5" value="4" required></td>
									</tr>
									<tr>
										<td><label>Grado de vinculación temática entre las asignaturas</label></td>
										<td><input type="radio" name="pre27_6" id="pre27_6" value="1"></td>
										<td><input type="radio" name="pre27_6" id="pre27_6" value="2"></td>
										<td><input type="radio" name="pre27_6" id="pre27_6" value="3"></td>
										<td><input type="radio" name="pre27_6" id="pre27_6" value="4"></td>
									</tr>
									<tr>
										<td><label>Pertinencia del curriculum (rígido o flexible) para brindar alternativas a su formación</label></td>
										<td><input type="radio" name="pre27_7" id="pre27_7" value="1" required></td>
										<td><input type="radio" name="pre27_7" id="pre27_7" value="2" required></td>
										<td><input type="radio" name="pre27_7" id="pre27_7" value="3" required></td>
										<td><input type="radio" name="pre27_7" id="pre27_7" value="4" required></td>
									</tr>
									<tr>
										<td><label>Pertinencia y suficiencia de los materiales y apoyo técnico</label></td>
										<td><input type="radio" name="pre27_8" id="pre27_8" value="1" required></td>
										<td><input type="radio" name="pre27_8" id="pre27_8" value="2" required></td>
										<td><input type="radio" name="pre27_8" id="pre27_8" value="3" required></td>
										<td><input type="radio" name="pre27_8" id="pre27_8" value="4" required></td>
									</tr>
									<tr>
										<td><label>Pertinencia y suficiencia de los materiales bibliográficos y hemerográficos</label></td>
										<td><input type="radio" name="pre27_9" id="pre27_9" value="1" required></td>
										<td><input type="radio" name="pre27_9" id="pre27_9" value="2" required></td>
										<td><input type="radio" name="pre27_9" id="pre27_9" value="3" required></td>
										<td><input type="radio" name="pre27_9" id="pre27_9" value="4" required></td>
									</tr>
									<tr>
										<td><label>Métodos de evaluación del aprendizaje</label></td>
										<td><input type="radio" name="pre27_10" id="pre27_10" value="1" required></td>
										<td><input type="radio" name="pre27_10" id="pre27_10" value="2" required></td>
										<td><input type="radio" name="pre27_10" id="pre27_10" value="3" required></td>
										<td><input type="radio" name="pre27_10" id="pre27_10" value="4" required></td>
									</tr>
									<tr>
										<td><label>Adecuación de las instalaciones físicas</label></td>
										<td><input type="radio" name="pre27_11" id="pre27_11" value="1" required></td>
										<td><input type="radio" name="pre27_11" id="pre27_11" value="2" required></td>
										<td><input type="radio" name="pre27_11" id="pre27_11" value="3" required></td>
										<td><input type="radio" name="pre27_11" id="pre27_11" value="4" required></td>
									</tr>
									<tr>
										<td><label>Grado de formación pedagógica de los profesores</label></td>
										<td><input type="radio" name="pre27_12" id="pre27_12" value="1" required></td>
										<td><input type="radio" name="pre27_12" id="pre27_12" value="2" required></td>
										<td><input type="radio" name="pre27_12" id="pre27_12" value="3" required></td>
										<td><input type="radio" name="pre27_12" id="pre27_12" value="4" required></td>
									</tr>
									<tr>
										<td><label>Flexibilidad del curriculum</label></td>
										<td><input type="radio" name="pre27_13" id="pre27_13" value="1" required></td>
										<td><input type="radio" name="pre27_13" id="pre27_13" value="2" required></td>
										<td><input type="radio" name="pre27_13" id="pre27_13" value="3" required></td>
										<td><input type="radio" name="pre27_13" id="pre27_13" value="4" required></td>
									</tr>
									<tr>
										<td><label>Relación maestro-estudiante</label></td>
										<td><input type="radio" name="pre27_14" id="pre27_14" value="1" required></td>
										<td><input type="radio" name="pre27_14" id="pre27_14" value="2" required></td>
										<td><input type="radio" name="pre27_14" id="pre27_14" value="3" required></td>
										<td><input type="radio" name="pre27_14" id="pre27_14" value="4" required></td>
									</tr>
									<tr>
										<td><label>Relación entre estudiantes</label></td>
										<td><input type="radio" name="pre27_15" id="pre27_15" value="1" required></td>
										<td><input type="radio" name="pre27_15" id="pre27_15" value="2" required></td>
										<td><input type="radio" name="pre27_15" id="pre27_15" value="3" required></td>
										<td><input type="radio" name="pre27_15" id="pre27_15" value="4" required></td>
									</tr>
									<tr>
										<td><label>Puntualidad y asistencia de los profesores</label></td>
										<td><input type="radio" name="pre27_16" id="pre27_16" value="1" required></td>
										<td><input type="radio" name="pre27_16" id="pre27_16" value="2" required></td>
										<td><input type="radio" name="pre27_16" id="pre27_16" value="3" required></td>
										<td><input type="radio" name="pre27_16" id="pre27_16" value="4" required></td>
									</tr>
									<tr>
										<td><label>Su aprendizaje</label></td>
										<td><input type="radio" name="pre27_17" id="pre27_17" value="1" required></td>
										<td><input type="radio" name="pre27_17" id="pre27_17" value="2" required></td>
										<td><input type="radio" name="pre27_17" id="pre27_17" value="3" required></td>
										<td><input type="radio" name="pre27_17" id="pre27_17" value="4" required></td>
									</tr>
									<tr>
										<td><label>Desarrollo de habilidades orientadas hacia la dirección y organización de otras personas</label></td>
										<td><input type="radio" name="pre27_18" id="pre27_18" value="1" required></td>
										<td><input type="radio" name="pre27_18" id="pre27_18" value="2" required></td>
										<td><input type="radio" name="pre27_18" id="pre27_18" value="3" required></td>
										<td><input type="radio" name="pre27_18" id="pre27_18" value="4" required></td>
									</tr>
									<tr>
										<td><label>Desarrollo de habilidades para la cooperación y el trabajo en equipo</label></td>
										<td><input type="radio" name="pre27_19" id="pre27_19" value="1" required></td>
										<td><input type="radio" name="pre27_19" id="pre27_19" value="2" required></td>
										<td><input type="radio" name="pre27_19" id="pre27_19" value="3" required></td>
										<td><input type="radio" name="pre27_19" id="pre27_19" value="4" required></td>
									</tr>
									<tr>
										<td><label>Tiempo asignado a cada asignatura</label></td>
										<td><input type="radio" name="pre27_20" id="pre27_20" value="1" required></td>
										<td><input type="radio" name="pre27_20" id="pre27_20" value="2" required></td>
										<td><input type="radio" name="pre27_20" id="pre27_20" value="3" required></td>
										<td><input type="radio" name="pre27_20" id="pre27_20" value="4" required></td>
									</tr>
								</table>
							</div>
					    </div>
						<div class="row">
							<div class="columns3">
								<label>28. Los objetivos de su posgrado con relación a su actual campo de trabajo, están: <small>requerido</small></label>

								<label><input type="radio" name="pre28" id="pre28" value="1" required>Estrechamente vinculados entre sí</label>
								<label><input type="radio" name="pre28" id="pre28" value="2" required>Medianamente vinculados entre sí</label>
								<label><input type="radio" name="pre28" id="pre28" value="3" required>Poco efectivos</label>
								<label><input type="radio" name="pre28" id="pre28" value="4" required>No tiene ninguna relación</label>
							</div>
						</div>
						<div class="row">
							<div class="columns3">
								<label>29. Los conocimientos que adquirió durante su formación en el posgrado satisfacen las necesidades de su empleo actual: <small>requerido</small></label>

								<label><input type="radio" name="pre29" id="pre29" value="1" required>Completamente</label>
								<label><input type="radio" name="pre29" id="pre29" value="2" required>En gran medida</label>
								<label><input type="radio" name="pre29" id="pre29" value="3" required>Solo una parte</label>
								<label><input type="radio" name="pre29" id="pre29" value="4" required>Nada</label>
							</div>
						</div>
						<div class="row">
							<div class="columns3">
								<label>30. ¿Considera que durante sus estudios de posgrado tuvo oportunidad de reflexionar sobre problemas éticos a los que se enfrenta en su ejercicio profesional?mos de admisión fueron: <small>requerido</small></label>

								<label><input type="radio" name="pre30" id="pre30" value="1" required>Muchas veces</label>
								<label><input type="radio" name="pre30" id="pre30" value="2" required>Algunas veces</label>
								<label><input type="radio" name="pre30" id="pre30" value="3" required>Casi nunca</label>
								<label><input type="radio" name="pre30" id="pre30" value="4" required>Nunca</label>
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