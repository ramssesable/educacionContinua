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
		<script type="text/javascript" src="js/disablers.js"></script>
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
						<legend>ACTIVIDADES DE INVESTIGACIÓN</legend>
						
						<div class="row">
							<div class="columns3">
								<label>31. ¿Había vinculación entre los proyectos de investigación que tenía el programa y las investigaciones o proyectos de trabajo realizadas por los estudiantes para obtener el grado? <small>requerido</small></label>

								<label><input type="radio" name="pre31" id="pre31" value="Si" required>Si</label>
								<label><input type="radio" name="pre31" id="pre31" value="No" required>No</label>
								<label><input type="radio" name="pre31" id="pre31" value="No aplica" required>No aplica</label>
							</div>
						</div>
						<div class="row">
							<div class="columns3">
								<label>32. ¿En la planeación curricular de su programa de posgrado se contemplaron actividades para incorporar a los estudiantes de modo activo en los proyectos de investigación o profesionales existentes? <small>requerido</small></label>

								<label><input type="radio" name="pre32" id="pre32" value="1" required>Sí, se contemplaron modos variados y eficaces de incorporación</label>
								<label><input type="radio" name="pre32" id="pre32" value="2" required>No existieron posibilidades de incorporación</label>
								<label><input type="radio" name="pre32" id="pre32" value="3" required>Las oportunidades de incorporación fueron escasas</label>
								<label><input type="radio" name="pre32" id="pre32" value="4" required>Las opciones aunque fueron múltiples, el acceso estuvo limitado y los requisitos fueron poco asequibles</label>
								<label><input type="radio" name="pre32" id="pre32" value="5" required>No aplica</label>
							</div>
						</div>
						<div class="row">
							<div class="columns3">
								<label>33. Señale las actividades de investigación en las que tuvo la oportunidad de participar durante su estancia en el posgrado:(Segun su importancia)<small>Requerido</small></label>
								<table>
									<tr>
										<td colspan="6"></td>
										<td style="padding-right:10px;"><label>Primero</label></td>
										<td style="padding-right:10px;"><label>Segundo</label></td>
										<td style="padding-right:10px;"><label>Tercero</label></td>
										<td style="padding-right:10px;"><label>Cuarto</label></td>
										<td style="padding-right:10px;"><label>Quinto</label></td>
										<td><label>No aplica</label></td>
									</tr>
									<tr>
										<td colspan="6" align="left"><label>Elaboración de monografías o estados del conocimiento</label></td>
										<td><input type="radio" name="pre33_1" id="pre33_11"  value="1" required></td>
										<td><input type="radio" name="pre33_2" id="pre33_21"  value="1" required></td>
										<td><input type="radio" name="pre33_3" id="pre33_31"  value="1" required></td>
										<td><input type="radio" name="pre33_4" id="pre33_41"  value="1" required></td>
										<td><input type="radio" name="pre33_5" id="pre33_51"  value="1" required></td>
										<td><input type="checkbox" name="pre33_6"  value="1"></td>
									</tr>
									<tr>
										<td colspan="6" align="left"><label>Diseño de proyectos de investigación</label></td>
										<td><input type="radio" name="pre33_1" id="pre33_12"  value="2" required></td>
										<td><input type="radio" name="pre33_2" id="pre33_22"  value="2" required></td>
										<td><input type="radio" name="pre33_3" id="pre33_32"  value="2" required></td>
										<td><input type="radio" name="pre33_4" id="pre33_42"  value="2" required></td>
										<td><input type="radio" name="pre33_5" id="pre33_52"  value="2" required></td>
										<td><input type="checkbox" name="pre33_6"  value="2"></td>
									</tr>
									<tr>
										<td colspan="6" align="left"><label>Trabajo de biblioteca, laboratorio</label></td>
										<td><input type="radio" name="pre33_1" id="pre33_13"  value="3" required></td>
										<td><input type="radio" name="pre33_2" id="pre33_23"  value="3" required></td>
										<td><input type="radio" name="pre33_3" id="pre33_33"  value="3" required></td>
										<td><input type="radio" name="pre33_4" id="pre33_43"  value="3" required></td>
										<td><input type="radio" name="pre33_5" id="pre33_53"  value="3" required></td>
										<td><input type="checkbox" name="pre33_6"  value="3"></td>
									</tr>
									<tr>
										<td colspan="6" align="left"><label>Realización de trabajo de campo</label></td>
										<td><input type="radio" name="pre33_1" id="pre33_14"  value="4" required></td>
										<td><input type="radio" name="pre33_2" id="pre33_24"  value="4" required></td>
										<td><input type="radio" name="pre33_3" id="pre33_34"  value="4" required></td>
										<td><input type="radio" name="pre33_4" id="pre33_44"  value="4" required></td>
										<td><input type="radio" name="pre33_5" id="pre33_54"  value="4" required></td>
										<td><input type="checkbox" name="pre33_6"  value="4"></td>
									</tr>
									<tr>
										<td colspan="6" align="left"><label>Análisis de datos</label></td>
										<td><input type="radio" name="pre33_1" id="pre33_15"  value="5" required></td>
										<td><input type="radio" name="pre33_2" id="pre33_25"  value="5" required></td>
										<td><input type="radio" name="pre33_3" id="pre33_35"  value="5" required></td>
										<td><input type="radio" name="pre33_4" id="pre33_45"  value="5" required></td>
										<td><input type="radio" name="pre33_5" id="pre33_55"  value="5" required></td>
										<td><input type="checkbox" name="pre33_6"  value="5"></td>
									</tr>
									<tr>
										<td colspan="6" align="left"><label>Elaboración de informes de investigación </label></td>
										<td><input type="radio" name="pre33_1" id="pre33_16"  value="6" required></td>
										<td><input type="radio" name="pre33_2" id="pre33_26"  value="6" required></td>
										<td><input type="radio" name="pre33_3" id="pre33_36"  value="6" required></td>
										<td><input type="radio" name="pre33_4" id="pre33_46"  value="6" required></td>
										<td><input type="radio" name="pre33_5" id="pre33_56"  value="6" required></td>
										<td><input type="checkbox" name="pre33_6"  value="6"></td>
									</tr>
									<tr>
										<td colspan="6" align="left"><label>Otro</label></td>
										<td><input type="radio" name="pre33_1" id="pre33_17"  value="7" required></td>
										<td><input type="radio" name="pre33_2" id="pre33_27"  value="7" required></td>
										<td><input type="radio" name="pre33_3" id="pre33_37"  value="7" required></td>
										<td><input type="radio" name="pre33_4" id="pre33_47"  value="7" required></td>
										<td><input type="radio" name="pre33_5" id="pre33_57"  value="7" required></td>
										<td><input type="checkbox" name="pre33_6"  value="7"></td>
									</tr>
								</table>
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