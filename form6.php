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
				<form action="save6.php" method="POST">
					<input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
					<fieldset>
						<legend>IMPACTO DE SUS ESTUDIOS</legend>
						
						<div class="row">
							<div class="columns3">
								<label>43. Considera que sus estudios de posgrado le ayudaron a : <small>requerido</small></label>
								<table>
									<tr>
										<td><input type="checkbox" name="pre43[]" id="pre43_1" value="1" /></td>
										<td><label for="pre43_1">Contar con  conocimientos  más amplios y a desarrollar  habilidades para poder realizar mejor su trabajo profesional.</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="pre43[]" id="pre43_2" value="2" /></td>
										<td><label for="pre43_2">Adquirir un amplio conocimiento de su área de especialidad para  participar en el desarrollo innovador, en el análisis, y en la adaptación e incorporación a la práctica de los avances del área en cuestión o de aspectos específicos del ejercicio profesional</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="pre43[]" id="pre43_3" value="3" /></td>
										<td><label for="pre43_3">Adquirir herramientas metodológicas y técnicas en vigor para el desarrollo de actividades académicas de alto nivel.</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="pre43[]" id="pre43_4" value="4" /></td>
										<td><label for="pre43_4">Adquirir herramientas metodológicas y técnicas en vigor para el desarrollo de actividades profesionales</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="pre43[]" id="pre43_5" value="5" /></td>
										<td><label for="pre43_5">Formarse como investigador capaz de generar y aplicar el conocimiento científico, humanístico y/o tecnológico en forma original e innovadora.</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="pre43[]" id="pre43_6" value="6" /></td>
										<td><label for="pre43_6">Desarrollar las competencias para dirigir a grupos de investigación</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="pre43[]" id="pre43_7" value="7" /></td>
										<td><label for="pre43_7">Desarrollar las competencias docentes</label></td>
									</tr>
								</table>
								
							</div>
						</div>
						<div class="row">
							<div class="columns3">
								<label>44. Considera que sus principales aportes a la sociedad hasta ahora ha sido: <small>requerido</small></label>
								<table>
									<tr>
										<td><input type="checkbox" name="pre44[]" id="pre44_1" value="1" /></td>
										<td><label for="pre44_1">Ser competente profesionalmente</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="pre44[]" id="pre44_2" value="2" /></td>
										<td><label for="pre44_2">Generar empleos para el país</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="pre44[]" id="pre44_3" value="3" /></td>
										<td><label for="pre44_3">Contribuir al desarrollo científico, tecnológico, cultural y/o artístico</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="pre44[]" id="pre44_4" value="4" /></td>
										<td><label for="pre44_4">Ser un ciudadano responsable y honesto</label></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="pre44[]" id="pre44_5" value="5" /></td>
										<td><label for="pre44_5">Ejercer un liderazgo político comprometido con las causas justas</label></td>
									</tr>
								</table>
								
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>PRODUCTIVIDAD</legend>
						
						<div class="row">
							<div class="columns3">
								<label>45. ¿Ha hecho alguna(s) aportación(es) al desarrollo del conocimiento, tecnológico o de infraestructura? <small>requerido</small></label>

								<label><input type="radio" name="pre45" id="pre45" value="1" required />Si</label>
								<label><input type="radio" name="pre45" id="pre45" value="0" required />No</label>
							</div>
						</div>
						<div class="row">
							<div class="columns3">
								<label>46. Describa en qué consiste o consisten sus aportaciones, el año y el país donde las realizó (máximo tres): <small>requerido</small></label>

								<textarea name="pre46" id="pre46" required></textarea>
							</div>
						</div>
						<div class="row">
							<div class="columns3">
								<label>47. ¿Para qué empresa o institución trabaja o trabajaba cuando la(s) realizó?</small></label>

								<label><input type="radio" name="pre47" id="pre47" value="1" required />Instituciones públicas de educación superior</label>
								<label><input type="radio" name="pre47" id="pre47" value="2" required />Instituciones privadas de educación superior</label>
								<label><input type="radio" name="pre47" id="pre47" value="3" required />Negocio propio</label>
								<label><input type="radio" name="pre47" id="pre47" value="4" required />Empresas paraestatales</label>
								<label><input type="radio" name="pre47" id="pre47" value="5" required />Sector social (cooperativas, ejidos, sindicatos, etc.).</label>
								<label><input type="radio" name="pre47" id="pre47" value="6" required />Organizaciones no gubernamentales ni lucrativas</label>
								<label><input type="radio" name="pre47" id="pre47" value="7" required />Instituciones públicas dedicadas principalmente a la investigación</label>
								<label><input type="radio" name="pre47" id="pre47" value="8" required />Instituciones privadas dedicadas principalmente a la investigación</label>
								<label><input type="radio" name="pre47" id="pre47" value="9" required />Instituciones dedicadas principalmente a la consultoría y a la prestación de servicios afines</label>
								<label><input type="radio" name="pre47" id="pre47" value="10" required />Otras empresas o instituciones del sector público</label>
								<label><input type="radio" name="pre47" id="pre47" value="11" required />Otras empresas o instituciones del sector privado</label>
								<label><input type="radio" name="pre47" id="pre47" value="0" required />No aplica</label>
							</div>
						</div>
						<div class="row">
							<div class="columns3">
								<label>48. ¿Volvería a estudiar en la UABC? <small>requerido</small></label>

								<label><input type="radio" name="pre48" id="pre48" value="1" required />Si</label>
								<label><input type="radio" name="pre48" id="pre48" value="0" required />No</label>
							</div>
						</div>
						<div class="row">
							<div class="columns3">
								<label>49. Indique algunas acciones que sugiere deberían llevarse a cabo para mejorar el programa de posgrado <small>requerido</small></label>

								<textarea name="pre49" id="pre49" required></textarea>
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