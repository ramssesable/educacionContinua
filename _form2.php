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
		<title>Facultad de Odontologia Mexicali</title>
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

		<script type="text/javascript" src="js/jquery-1.7.min.js"></script>

		<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
		<script type="text/javascript" src="js/validacion.js"></script>
		<script type="text/javascript" src="js/validar.js"></script>
		<link rel="shortcut icon" href="img/favicon_logo.ico">

		<script>

			$(document).ready(function() {

				$( ".contenido" ).hide();

				$( ".contenido" ).fadeIn(1000);

			});

			if(history.forward(1)){

				history.replace(history.forward(1));

			}

			jQuery(function($){

				$("#tel_p").mask("(999)999-9999");

				$("#tel_c").mask("(999)999-9999");

				$("#tel_t").mask("(999)999-9999");

			});

		</script>

	</head>

	<body>

		<!-- Header -->

		<header>

			<h1><img src="img/logo_uabc.png" alt=""></h1>

			<div class="texto">

				<h2><strong>Universidad Autónoma de Baja California</strong></h2>

				<h3>Facultad de Odontología</h3>

				<h3>Coordinación de Posgrado e Investigación</h3>

				<h3>Programa de seguimiento a Egresados</h3>

			</div>

			<h1><img src="img/logo_odonto.png" alt="Odontología" width="70"></h1>

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

				<form action="save2.php" method="POST">

					<fieldset>

						<legend>DATOS DE POSGRADO</legend>

						<div class="row">

							<div class="columns2">

								<label>Institución donde curso la licenciatura: <small>requerido</small></label>

								<input type="text" name="institucion" id="institucion" placeholder="Institución donde curso la licenciatura" required>

								<input type="hidden" name="email" id="email" value="<?php echo $email; ?>">

					    	</div>

					    	<div class="columns2">

					    		<label>Programa de posgrado que cursó: <small>requerido</small></label>

					    		<select name="posgrado" id="posgrado" required>

					    		<option value="">-- Selecciona --</option>

					    		<option value="2">Especialidad en Endodoncia</option>

					    		<option value="3">Especialidad en Ortodoncia</option>

					    		<option value="4">Especialidad en Periodoncia</option>

					    		<option value="5">Especialidad en Prostodoncia</option>

					    		</select>

					    	</div>

						</div>

						<div class="row">

							<div class="columns2">

								<label>Fecha de Ingreso: <small>requerido</small></label>

								<input type="text" id="fecha_ingreso" name="fecha_ingreso" placeholder="Fecha de ingreso" required>

					    	</div>

					    	<div class="columns2">

					    		<label>Fecha de Egreso: <small>requerido</small></label>

					    		<input type="text" id="fecha_egreso" name="fecha_egreso" placeholder="Fecha de egreso" required>

					    	</div>

						</div>

						<div class="row">

							<table class="tabla">

								<tr>

									<td colspan="2">

										<label>1. Principal motivo por el cuál realizó el posgrado (Enumere del 1 al 5 conforme a sus preferencias):</label>

									</td>

								</tr>

								<tr>

									<td colspan="2">

										<table>

											<tr>

												<td colspan="6"></td>

												<td>1</td>

												<td>2</td>

												<td>3</td>

												<td>4</td>

												<td>5</td>

											</tr>

											<tr>

												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->

												<td colspan="6" align="left"><label for="">Para mejorar mi preparación</label></td>

												<td><input type="radio" name="mot_1" id="mot_11" onClick="p11()" value="1" required></td>

												<td><input type="radio" name="mot_1" id="mot_12" onClick="p21()" value="2" required></td>

												<td><input type="radio" name="mot_1" id="mot_13" onClick="p31()" value="3" required></td>

												<td><input type="radio" name="mot_1" id="mot_14" onClick="p41()" value="4" required></td>

												<td><input type="radio" name="mot_1" id="mot_15" onClick="p51()" value="5" required></td>

											</tr>

											<tr>

												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->

												<td colspan="6" align="left"><label for="">Para desarrollar mi actual ámbito laboral</label></td>

												<td><input type="radio" name="mot_2" id="mot_21" onClick="p12()" value="1" required></td>

												<td><input type="radio" name="mot_2" id="mot_22" onClick="p22()" value="2" required></td>

												<td><input type="radio" name="mot_2" id="mot_23" onClick="p32()" value="3" required></td>

												<td><input type="radio" name="mot_2" id="mot_24" onClick="p42()" value="4" required></td>

												<td><input type="radio" name="mot_2" id="mot_25" onClick="p52()" value="5" required></td>

											</tr>

											<tr>

												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->

												<td colspan="6" align="left"><label for="">Para acceder a una beca económica</label></td>

												<td><input type="radio" name="mot_3" id="mot_31" onClick="p13()" value="1" required></td>

												<td><input type="radio" name="mot_3" id="mot_32" onClick="p23()" value="2" required></td>

												<td><input type="radio" name="mot_3" id="mot_33" onClick="p33()" value="3" required></td>

												<td><input type="radio" name="mot_3" id="mot_34" onClick="p43()" value="4" required></td>

												<td><input type="radio" name="mot_3" id="mot_35" onClick="p53()" value="5" required></td>

											</tr>

											<tr>

												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->

												<td colspan="6" align="left"><label for="">Por status</label></td>

												<td><input type="radio" name="mot_4" id="mot_41" onClick="p14()" value="1" required></td>

												<td><input type="radio" name="mot_4" id="mot_42" onClick="p24()" value="2" required></td>

												<td><input type="radio" name="mot_4" id="mot_43" onClick="p34()" value="3" required></td>

												<td><input type="radio" name="mot_4" id="mot_44" onClick="p44()" value="4" required></td>

												<td><input type="radio" name="mot_4" id="mot_45" onClick="p54()" value="5" required></td>

											</tr>

											<tr>

												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->

												<td align="left" colspan="6"><label for="">Otro, Especifique:</label></td>

												<td><input type="radio" name="mot_5" id="mot_51" onClick="p15()" value="1" required></td>

												<td><input type="radio" name="mot_5" id="mot_52" onClick="p25()" value="2" required></td>

												<td><input type="radio" name="mot_5" id="mot_53" onClick="p35()" value="3" required></td>

												<td><input type="radio" name="mot_5" id="mot_54" onClick="p45()" value="4" required></td>

												<td><input type="radio" name="mot_5" id="mot_55" onClick="p55()" value="5" required></td>

												<td><input type="text" name="mot_6" id="mot_6" placeholder="Especifique otro"></td>

											</tr>

										</table>

									</td>

								</tr>

							</table>

						</div>

						<div class="row">

							<div class="columns3">

								<label>2. Al momento de elegir el posgrado, la Facultad de Odontología Mexicali fue su: <small>requerido</small></label>

								<input type="radio" name="el_posgrado" id="el_posgrado" value="Primera eleccion" required><label>Primera elección</label>

								<input type="radio" name="el_posgrado" id="el_posgrado" value="Segunda eleccion" required><label>Segunda elección</label>

								<input type="radio" name="el_posgrado" id="el_posgrado" value="Ultima eleccion" required><label>Última elección</label>

								<input type="radio" name="el_posgrado" id="el_posgrado" value="Unica eleccion" required><label>Única elección</label>

							</div>

						</div>

						<div class="row">

							<div class="columns3">

								<label>3. ¿El posgrado que eligió cubrió sus expectativas de formación? <small>requerido</small></label>

								<input type="radio" name="exp_posgrado" id="exp_posgrado" value="100%" required><label>100%</label>

								<input type="radio" name="exp_posgrado" id="exp_posgrado" value="75%" required><label>75%</label>

								<input type="radio" name="exp_posgrado" id="exp_posgrado" value="50%" required><label>50%</label>

								<input type="radio" name="exp_posgrado" id="exp_posgrado" value="25%" required><label>25%</label>

								<input type="radio" name="exp_posgrado" id="exp_posgrado" value="nada" required><label>Nada</label>

							</div>

						</div>

						<div class="row">

							<table class="tabla">

								<tr>

									<td colspan="2">

										<label>4. ¿Cómo valora las materias que cursó en el plan de estudios de su posgrado?</label>

									</td>

								</tr>

								<tr>

									<td colspan="2">

										<table>

											<tr>

												<td></td>

												<td style="padding-right:10px;"><label>Siempre</label></td>

												<td style="padding-right:10px;"><label>Casi siempre</label></td>

												<td style="padding-right:10px;"><label>Casi nunca</label></td>

												<td><label>Nunca</label></td>

											</tr>

											<tr>

												<td><label>Adecuadas en carga horaria</label></td>

												<td><input type="radio" name="val_pos1" id="val_pos1" value="Siempre" required></td>

												<td><input type="radio" name="val_pos1" id="val_pos1" value="Casi siemp" required></td>

												<td><input type="radio" name="val_pos1" id="val_pos1" value="Casi nunca" required></td>

												<td><input type="radio" name="val_pos1" id="val_pos1" value="Nunca" required></td>

											</tr>

											<tr>

												<td><label>Adecuadas en la relación teoría y práctica</label></td>

												<td><input type="radio" name="val_pos2" id="val_pos2" value="Siempre" required></td>

												<td><input type="radio" name="val_pos2" id="val_pos2" value="Casi siemp" required></td>

												<td><input type="radio" name="val_pos2" id="val_pos2" value="Casi nunca" required></td>

												<td><input type="radio" name="val_pos2" id="val_pos2" value="Nunca" required></td>

											</tr>

											<tr>

												<td><label>Congruencia entre la formación y la línea de investigación</label></td>

												<td><input type="radio" name="val_pos3" id="val_pos3" value="Siempre" required></td>

												<td><input type="radio" name="val_pos3" id="val_pos3" value="Casi siemp" required></td>

												<td><input type="radio" name="val_pos3" id="val_pos3" value="Casi nunca" required></td>

												<td><input type="radio" name="val_pos3" id="val_pos3" value="Nunca" required></td>

											</tr>

											<tr>

												<td><label>Contenidos actualizados</label></td>

												<td><input type="radio" name="val_pos4" id="val_pos4" value="Siempre" required></td>

												<td><input type="radio" name="val_pos4" id="val_pos4" value="Casi siemp" required></td>

												<td><input type="radio" name="val_pos4" id="val_pos4" value="Casi nunca" required></td>

												<td><input type="radio" name="val_pos4" id="val_pos4" value="Nunca" required></td>

											</tr>
											
										</table>

									</td>

								</tr>

							</table>

					    </div>

					    <div class="row">

							<table class="tabla">

								<tr>

									<td colspan="2">

										<label>5. Valore los servicios del posgrado:</label>

									</td>

								</tr>

								<tr>

									<td colspan="2">

										<table>

											<tr>

												<td></td>

												<td style="padding-right:10px;"><label>Excelente</label></td>

												<td style="padding-right:10px;"><label>Bueno</label></td>

												<td style="padding-right:10px;"><label>Malo</label></td>

											</tr>

											<tr>

												<td><label>Promoción y difusión de convocatoria</label></td>

												<td><input type="radio" name="serv_1" id="serv_1" value="Excelente" required></td>

												<td><input type="radio" name="serv_1" id="serv_1" value="Bueno" required></td>

												<td><input type="radio" name="serv_1" id="serv_1" value="Malo" required></td>

											</tr>

											<tr>

												<td><label>Proceso de Selección</label></td>

												<td><input type="radio" name="serv_2" id="serv_2" value="Excelente" required></td>

												<td><input type="radio" name="serv_2" id="serv_2" value="Bueno" required></td>

												<td><input type="radio" name="serv_2" id="serv_2" value="Malo" required></td>

											</tr>

											<tr>

												<td><label>Curso propedéutico</label></td>

												<td><input type="radio" name="serv_3" id="serv_3" value="Excelente" required></td>

												<td><input type="radio" name="serv_3" id="serv_3" value="Bueno" required></td>

												<td><input type="radio" name="serv_3" id="serv_3" value="Malo" required></td>

											</tr>

											<tr>

												<td><label>Tutorías</label></td>

												<td><input type="radio" name="serv_4" id="serv_4" value="Excelente" required></td>

												<td><input type="radio" name="serv_4" id="serv_4" value="Bueno" required></td>

												<td><input type="radio" name="serv_4" id="serv_4" value="Malo" required></td>

											</tr>

											<tr>

												<td><label>Disponibilidad de material didáctico</label></td>

												<td><input type="radio" name="serv_5" id="serv_5" value="Excelente" required></td>

												<td><input type="radio" name="serv_5" id="serv_5" value="Bueno" required></td>

												<td><input type="radio" name="serv_5" id="serv_5" value="Malo" required></td>

											</tr>

											<tr>

												<td><label>Acceso a los servicios de cómputo</label></td>

												<td><input type="radio" name="serv_6" id="serv_6" value="Excelente" required></td>

												<td><input type="radio" name="serv_6" id="serv_6" value="Bueno" required></td>

												<td><input type="radio" name="serv_6" id="serv_6" value="Malo" required></td>

											</tr>

											<tr>

												<td><label>Programas de vinculación nacionales e internacionales</label></td>

												<td><input type="radio" name="serv_7" id="serv_7" value="Excelente" required></td>

												<td><input type="radio" name="serv_7" id="serv_7" value="Bueno"required></td>

												<td><input type="radio" name="serv_7" id="serv_7" value="Malo"required></td>

											</tr>

											<tr>

												<td><label>Bases de datos actualizadas y del área</label></td>

												<td><input type="radio" name="serv_8" id="serv_8" value="Excelente" required></td>

												<td><input type="radio" name="serv_8" id="serv_8" value="Bueno"required></td>

												<td><input type="radio" name="serv_8" id="serv_8" value="Malo"required></td>

											</tr>

											<tr>

												<td><label>Disponibilidad de material bibliográfico</label></td>

												<td><input type="radio" name="serv_9" id="serv_9" value="Excelente" required></td>

												<td><input type="radio" name="serv_9" id="serv_9" value="Bueno"required></td>

												<td><input type="radio" name="serv_9" id="serv_9" value="Malo"required></td>

											</tr>

											<tr>

												<td><label>Actividades y eventos de difusión</label></td>

												<td><input type="radio" name="serv_10" id="serv_10" value="Excelente" required></td>

												<td><input type="radio" name="serv_10" id="serv_10" value="Bueno"required></td>

												<td><input type="radio" name="serv_10" id="serv_10" value="Malo"required></td>

											</tr>

											<tr>

												<td><label>Programa de apoyo para la publicación científica</label></td>

												<td><input type="radio" name="serv_11" id="serv_11" value="Excelente" required></td>

												<td><input type="radio" name="serv_11" id="serv_11" value="Bueno"required></td>

												<td><input type="radio" name="serv_11" id="serv_11" value="Malo"required></td>

											</tr>

											<tr>

												<td><label>Programa de apoyo para becas</label></td>

												<td><input type="radio" name="serv_12" id="serv_12" value="Excelente" required></td>

												<td><input type="radio" name="serv_12" id="serv_12" value="Bueno" required></td>

												<td><input type="radio" name="serv_12" id="serv_12" value="Malo" required></td>

											</tr>

											<tr>

												<td><label>Programa de movilidad estudiantil Interinstitucional</label></td>

												<td><input type="radio" name="serv_13" id="serv_13" value="Excelente" required></td>

												<td><input type="radio" name="serv_13" id="serv_13" value="Bueno" required></td>

												<td><input type="radio" name="serv_13" id="serv_13" value="Malo" required></td>

											</tr>

											<tr>

												<td><label>Costos</label></td>

												<td><input type="radio" name="serv_14" id="serv_14" value="Excelente" required></td>

												<td><input type="radio" name="serv_14" id="serv_14" value="Bueno" required></td>

												<td><input type="radio" name="serv_14" id="serv_14" value="Malo" required></td>

											</tr>

										</table>

									</td>

								</tr>

							</table>

					    </div>

					    <div class="row">

							<table class="tabla">

								<tr>

									<td colspan="2">

										<label>6. Valore la infraestructura del posgrado:</label>

									</td>

								</tr>

								<tr>

									<td colspan="2">

										<table>

											<tr>

												<td></td>

												<td style="padding-right:10px;"><label>Excelente</label></td>

												<td style="padding-right:10px;"><label>Bueno</label></td>

												<td style="padding-right:10px;"><label>Malo</label></td>

											</tr>

											<tr>

												<td><label>Clínicas</label></td>

												<td><input type="radio" name="infr_1" id="infr_1" value="Excelente" required></td>

												<td><input type="radio" name="infr_1" id="infr_1" value="Bueno" required></td>

												<td><input type="radio" name="infr_1" id="infr_1" value="Malo" required></td>

											</tr>

											<tr>

												<td><label>Laboratorios</label></td>

												<td><input type="radio" name="infr_2" id="infr_2" value="Excelente" required></td>

												<td><input type="radio" name="infr_2" id="infr_2" value="Bueno" required></td>

												<td><input type="radio" name="infr_2" id="infr_2" value="Malo" required></td>

											</tr>

											<tr>

												<td><label>Centro de esterilización</label></td>

												<td><input type="radio" name="infr_3" id="infr_3" value="Excelente" required></td>

												<td><input type="radio" name="infr_3" id="infr_3" value="Bueno" required></td>

												<td><input type="radio" name="infr_3" id="infr_3" value="Malo" required></td>

											</tr>

											<tr>

												<td><label>Laboratorio de cómputo</label></td>

												<td><input type="radio" name="infr_4" id="infr_4" value="Excelente" required></td>

												<td><input type="radio" name="infr_4" id="infr_4" value="Bueno" required></td>

												<td><input type="radio" name="infr_4" id="infr_4" value="Malo" required></td>

											</tr>

											<tr>

												<td><label>Espacios para desarrollar sus actividades de estudio</label></td>

												<td><input type="radio" name="infr_5" id="infr_5" value="Excelente" required></td>

												<td><input type="radio" name="infr_5" id="infr_5" value="Bueno" required></td>

												<td><input type="radio" name="infr_5" id="infr_5" value="Malo" required></td>

											</tr>

											<tr>

												<td><label>Biblioteca</label></td>

												<td><input type="radio" name="infr_6" id="infr_6" value="Excelente" required></td>

												<td><input type="radio" name="infr_6" id="infr_6" value="Bueno" required></td>

												<td><input type="radio" name="infr_6" id="infr_6" value="Malo" required></td>

											</tr>

											<tr>

												<td><label>Instalaciones deportivas</label></td>

												<td><input type="radio" name="infr_7" id="infr_7" value="Excelente" required></td>

												<td><input type="radio" name="infr_7" id="infr_7" value="Bueno" required></td>

												<td><input type="radio" name="infr_7" id="infr_7" value="Malo" required></td>

											</tr>

											<tr>

												<td><label>Estacionamiento</label></td>

												<td><input type="radio" name="infr_8" id="infr_8" value="Excelente" required></td>

												<td><input type="radio" name="infr_8" id="infr_8" value="Bueno" required></td>

												<td><input type="radio" name="infr_8" id="infr_8" value="Malo" required></td>

											</tr>

											<tr>

												<td><label>Condiciones generales de las instalaciones</label></td>

												<td><input type="radio" name="infr_9" id="infr_9" value="Excelente" required></td>

												<td><input type="radio" name="infr_9" id="infr_9" value="Bueno" required></td>

												<td><input type="radio" name="infr_9" id="infr_9" value="Malo" required></td>

											</tr>

										</table>

									</td>

								</tr>

							</table>

					    </div>

					    <div class="row">

							<table class="tabla">

								<tr>

									<td colspan="2">

										<label>7. Para que los egresados tengan mayor capacidad de incorporarse al ámbito laboral,

										¿qué modificaciones al posgrado sugiere? (Enumere a partir del número uno en orden de prioridad):</label>

									</td>

								</tr>

								<tr>

									<td colspan="2">

										<table>

											<tr>
												<td colspan="6"></td>
												<td>1</td>
												<td>2</td>
												<td>3</td>
												<td>4</td>
												<td>5</td>
												<td>6</td>
											</tr>
											<tr>
												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->
												<td colspan="6" align="left"><label for="">Enfatizar los aspectos prácticos en la mayoría de las materias</label></td>
												<td><input type="radio" name="mod_1" onClick="m11()" id="mod_11" value="1" required></td>
												<td><input type="radio" name="mod_1" onClick="m21()" id="mod_12" value="2" required></td>
												<td><input type="radio" name="mod_1" onClick="m31()" id="mod_13" value="3" required></td>
												<td><input type="radio" name="mod_1" onClick="m41()" id="mod_14" value="4" required></td>
												<td><input type="radio" name="mod_1" onClick="m51()" id="mod_15" value="5" required></td>
												<td><input type="radio" name="mod_1" onClick="m61()" id="mod_16" value="6" required></td>
											</tr>
											<tr>
												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->
												<td colspan="6" align="left"><label for="">Actualización de los contenidos</label></td>
												<td><input type="radio" name="mod_2" onClick="m12()" id="mod_21" value="1" required></td>
												<td><input type="radio" name="mod_2" onClick="m22()" id="mod_22" value="2" required></td>
												<td><input type="radio" name="mod_2" onClick="m32()" id="mod_23" value="3" required></td>
												<td><input type="radio" name="mod_2" onClick="m42()" id="mod_24" value="4" required></td>
												<td><input type="radio" name="mod_2" onClick="m52()" id="mod_25" value="5" required></td>
												<td><input type="radio" name="mod_2" onClick="m62()" id="mod_26" value="6" required></td>
											</tr>
											<tr>
												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->
												<td colspan="6" align="left"><label for="">Dar ma()yor peso a la investigación</label></td>
												<td><input type="radio" name="mod_3" onClick="m13()" id="mod_31" value="1" required></td>
												<td><input type="radio" name="mod_3" onClick="m23()" id="mod_32" value="2" required></td>
												<td><input type="radio" name="mod_3" onClick="m33()" id="mod_33" value="3" required></td>
												<td><input type="radio" name="mod_3" onClick="m43()" id="mod_34" value="4" required></td>
												<td><input type="radio" name="mod_3" onClick="m53()" id="mod_35" value="5" required></td>
												<td><input type="radio" name="mod_3" onClick="m63()" id="mod_36" value="6" required></td>
											</tr>
											<tr>
												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->
												<td colspan="6" align="left"><label for="">Complementar y enriquecer los contenidos con cursos y conferencias</label></td>
												<td><input type="radio" name="mod_4" onClick="m14()" id="mod_41" value="1" required></td>
												<td><input type="radio" name="mod_4" onClick="m24()" id="mod_42" value="2" required></td>
												<td><input type="radio" name="mod_4" onClick="m34()" id="mod_43" value="3" required></td>
												<td><input type="radio" name="mod_4" onClick="m44()" id="mod_44" value="4" required></td>
												<td><input type="radio" name="mod_4" onClick="m54()" id="mod_45" value="5" required></td>
												<td><input type="radio" name="mod_4" onClick="m64()" id="mod_46" value="6" required></td>
											</tr>
											<tr>
												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->
												<td colspan="6" align="left"><label for="">Reducir las materias teóricas</label></td>
												<td><input type="radio" name="mod_5" onClick="m15()" id="mod_51" value="1" required></td>
												<td><input type="radio" name="mod_5" onClick="m25()" id="mod_52" value="2" required></td>
												<td><input type="radio" name="mod_5" onClick="m35()" id="mod_53" value="3" required></td>
												<td><input type="radio" name="mod_5" onClick="m45()" id="mod_54" value="4" required></td>
												<td><input type="radio" name="mod_5" onClick="m55()" id="mod_55" value="5" required></td>
												<td><input type="radio" name="mod_5" onClick="m65()" id="mod_56" value="6" required></td>
											</tr>

											<tr>
												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->
												<td align="left" colspan="6"><label for="">Otro, Especifique:</label></td>
												<td><input type="radio" name="mod_6" onClick="m16()" id="mod_61" value="1" required></td>
												<td><input type="radio" name="mod_6" onClick="m26()" id="mod_62" value="2" required></td>
												<td><input type="radio" name="mod_6" onClick="m36()" id="mod_63" value="3" required></td>
												<td><input type="radio" name="mod_6" onClick="m46()" id="mod_64" value="4" required></td>
												<td><input type="radio" name="mod_6" onClick="m56()" id="mod_65" value="5" required></td>
												<td><input type="radio" name="mod_6" onClick="m66()" id="mod_66" value="6" required></td>
												<td><input type="text" name="mod_7" id="mod_7" placeholder="Especifique otro"></td>

											</tr>

										</table>

									</td>

								</tr>

							</table>

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

			<p>Universidad Autónoma de Baja California | Facultad de Odontología Campus Mexicali - Mexicali Baja California Copyright 2014 ©</p>

		</footer>

		<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >

		<script type="text/javascript" src="js/jquery.datetimepicker.js"></script>

		<script>

			$('#fecha_ingreso').datetimepicker({

				format:'Y/m/d',

				timepicker:false

			});



			$('#fecha_egreso').datetimepicker({

				format:'Y/m/d',

				timepicker:false

			});

		</script>

	</body>

</html>