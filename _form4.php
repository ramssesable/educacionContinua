<?php  
	error_reporting(E_ALL ^ E_NOTICE);

	$email=$_GET['email'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Facultad de Odontologia Mexicali</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/form.css">
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.7.min.js"></script>
		<script type="text/javascript" src="js/valida.js"></script>
		<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
		<link rel="shortcut icon" href="img/favicon_logo.ico">
		<script>
			$(document).ready(function() {
				$( ".contenido" ).hide();
				$( ".contenido" ).fadeIn(3000);
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
					<fieldset>
						<legend>EDUCACIÓN CONTINUA</legend>
						<div class="row">
						<input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
							<table class="tabla">
								<tr>
									<td colspan="2">
										<label>13. Si después de sus estudios de posgrado ha publicado, conteste la siguiente pregunta:</label>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<table>
											<tr>
												<td colspan="5"></td>
												<td>1</td>
												<td>2</td>
												<td>3</td>
												<td>4</td>
											</tr>
											<tr>
												<td colspan="5" align="left"><label for="">Libros</label></td>
												<td><input type="radio" name="pub_pos1" onclick="pub11()" id="pub_pos11" value="1" required></td>
												<td><input type="radio" name="pub_pos1" onclick="pub21()" id="pub_pos12" value="2" required></td>
												<td><input type="radio" name="pub_pos1" onclick="pub31()" id="pub_pos13" value="3" required></td>
												<td><input type="radio" name="pub_pos1" onclick="pub41()" id="pub_pos14" value="4" required></td>
											</tr>
											<tr>
												<td colspan="5" align="left"><label for="">Artículos en revistas arbitradas</label></td>
												<td><input type="radio" name="pub_pos2" onclick="pub12()" id="pub_pos21" value="1" required></td>
												<td><input type="radio" name="pub_pos2" onclick="pub22()" id="pub_pos22" value="2" required></td>
												<td><input type="radio" name="pub_pos2" onclick="pub32()" id="pub_pos23" value="3" required></td>
												<td><input type="radio" name="pub_pos2" onclick="pub42()" id="pub_pos24" value="4" required></td>

											</tr>
											<tr>
												<td colspan="5" align="left"><label for="">Artículos en revistas no arbitradas</label></td>
												<td><input type="radio" name="pub_pos3" onclick="pub13()" id="pub_pos31" value="1" required></td>
												<td><input type="radio" name="pub_pos3" onclick="pub23()" id="pub_pos32" value="2" required></td>
												<td><input type="radio" name="pub_pos3" onclick="pub33()" id="pub_pos33" value="3" required></td>
												<td><input type="radio" name="pub_pos3" onclick="pub43()" id="pub_pos34" value="4" required></td>
											</tr>
											<tr>
												<td align="left" colspan="5"><label for="">Otro, Especifique:</label></td>
												<td><input type="radio" name="pub_pos4" onclick="pub14()" id="pub_pos41" value="1" required></td>
												<td><input type="radio" name="pub_pos4" onclick="pub24()" id="pub_pos42" value="2" required></td>
												<td><input type="radio" name="pub_pos4" onclick="pub34()" id="pub_pos43" value="3" required></td>
												<td><input type="radio" name="pub_pos4" onclick="pub44()" id="pub_pos44" value="4" required></td>
												<td><input type="text" name="pub_pos5" id="pub_pos5" placeholder="Especifique otro"></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
						<div class="row">
							<table class="tabla">
								<tr>
									<td colspan="2"><label>14. Si después de sus estudios de posgrado ha realizado otros estudios (posgrados, diplomados, cursos o talleres), asistido o participado en eventos académicos (Congresos, conferencias, seminarios, etc.) conteste la siguiente pregunta:</label></td>
								</tr>
								<tr>
									<td colspan="2"><label>Otros estudios:</label></td>
								</tr>
								<tr>
									<td colspan="2">
										<table>
											<tr>
												<td><b>Nombre</b></td>
												<td><b>Institución</b></td>
												<td><b>Fecha</b></td>
											</tr>
											<tr>
												<td><input type="text" class="input_medio" name="est_nom1" id="est_nom1"></td>
												<td><input type="text" class="input_medio" name="est_inst1" id="est_inst1"></td>
												<td><input type="text" class="input_medio" name="est_fecha1" id="est_fecha1"></td>
											</tr>
											<tr>
												<td><input type="text" class="input_medio" name="est_nom2" id="est_nom2"></td>
												<td><input type="text" class="input_medio" name="est_inst2" id="est_inst2"></td>
												<td><input type="text" class="input_medio" name="est_fecha2" id="est_fecha2"></td>
											</tr>
											<tr>
												<td><input type="text" class="input_medio" name="est_nom3" id="est_nom3"></td>
												<td><input type="text" class="input_medio" name="est_inst3" id="est_inst3"></td>
												<td><input type="text" class="input_medio" name="est_fecha3" id="est_fecha3"></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
					    </div>
					    <div class="row">
							<table class="tabla">
								<tr>
									<td colspan="2"><label>Eventos académicos:</label></td>
								</tr>
								<tr>
									<td colspan="2">
										<table>
											<tr>
												<td><b>Nombre</b></td>
												<td><b>Institución</b></td>
												<td><b>Fecha</b></td>
											</tr>
											<tr>
												<td><input type="text" class="input_medio"  name="event_nom1" id="event_nom1"></td>
												<td><input type="text" class="input_medio"  name="event_inst1" id="event_inst1"></td>
												<td><input type="text" class="input_medio"  name="event_fecha1" id="event_fecha1"></td>
											</tr>
											<tr>
												<td><input type="text" class="input_medio" name="event_nom2" id="event_nom2"></td>
												<td><input type="text" class="input_medio" name="event_inst2" id="event_inst2"></td>
												<td><input type="text" class="input_medio" name="event_fecha2" id="event_fecha2"></td>
											</tr>
											<tr>
												<td><input type="text" class="input_medio" name="event_nom3" id="event_nom3"></td>
												<td><input type="text" class="input_medio" name="event_inst3" id="event_inst3"></td>
												<td><input type="text" class="input_medio" name="event_fecha3" id="event_fecha3"></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
					    </div>
						<div class="row">
							<table class="tabla">
								<tr>
									<td colspan="2"><label>15. Si pertenece a alguna organización profesional, proporcione la siguiente información:</label></td>
								</tr>
								<tr>
									<td colspan="2">
										<table>
											<tr>
												<td><b>Nombre de la organización</b></td>
												<td><b>Certificación, reconocimientos o distinciones recibidos</b></td>
											</tr>
											<tr>
												<td><input type="text" class="input_medio" name="org_nom1" id="org_nom1"></td>
												<td><input type="text" class="input_medio" name="org_doc1" id="org_doc1"></td>
											</tr>
											<tr>
												<td><input type="text" class="input_medio" name="org_nom2" id="org_nom2"></td>
												<td><input type="text" class="input_medio" name="org_doc2" id="org_doc2"></td>
											</tr>
											<tr>
												<td><input type="text" class="input_medio" name="org_nom3" id="org_nom3"></td>
												<td><input type="text" class="input_medio" name="org_doc3" id="org_doc3"></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
					    </div>
					    <div class="row">
					    	<table class="tabla">
					    		<tr><td colspan="2"><label>16. Si desea recibir información sobre las actividades que se realizan en esta Facultad marque con una “X” el tema de su interés:</label></td>
					    		</tr>
					    		<tr>
					    			<td colspan="2">
					    				<table>
					    					<tr>
					    						<td><input type="checkbox" name="check_1" id="check_1" value="Posgrados"></td>
					    						<td colspan="2" align="left"><label for="check_1">Posgrados</label></td>
					    					</tr>
					    					<tr>
					    						<td><input type="checkbox" name="check_2" id="check_2" value="Diplomados"></td>
					    						<td colspan="2" align="left"><label for="check_2">Diplomados</label></td>
					    					</tr>
					    					<tr>
					    						<td><input type="checkbox" name="check_3" id="check_3" value="Investigacion"></td>
					    						<td colspan="2" align="left"><label for="check_3">Investigación</label></td>
					    					</tr>
					    					<tr>
					    						<td><input type="checkbox" name="check_4" id="check_4" value="Eventos academicos (congresos, conferencias, seminarios, talleres)"></td>
					    						<td colspan="2" align="left"><label for="check_4">Eventos académicos (congresos, conferencias, seminarios, talleres)</label></td>
					    					</tr>
					    					<tr>
					    						<td><input type="checkbox" name="check_5" id="check_5" value="Eventos culturales"></td>
					    						<td colspan="2" align="left"><label for="check_5">Eventos culturales</label></td>
					    					</tr>
					    					<tr>
					    						<td><input type="checkbox" name="check_6" id="check_6" value="Eventos recreativos y deporticos"></td>
					    						<td colspan="2" align="left"><label for="check_6">Eventos recreativos y deporticos</label></td>
					    					</tr>
					    					<tr>
					    						<td><input type="checkbox" name="check_7" id="check_7" value="Eventos sociales"></td>
					    						<td colspan="2" align="left"><label for="check_7">Eventos sociales</label></td>
					    					</tr>
					    					<tr>
					    						<td><input type="checkbox" name="check_8" id="check_8" value="Otro"></td>
					    						<td><label for="check_8">Otro, Especifique: </label></td>
					    						<td><input type="text" name="check_9" id="check_9" placeholder="Otro, especifique"></td>
					    					</tr>
					    				</table>
					    			</td>
					    		</tr>
					    	</table>
					    </div>
					    <div class="row">
					    	<div class="columns2">
								<label>17. ¿Desea hacer algún comentario adicional?: <small>requerido</small></label>
								<textarea name="comentario" id="comentario" cols="30" rows="10"></textarea>
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
			<p>Universidad Autónoma de Baja California | Facultad de Odontología Campus Mexicali - Mexicali Baja California Copyright 2014 ©</p>
		</footer>
		<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
		<script type="text/javascript" src="js/jquery.datetimepicker.js"></script>
		<script>
			$('#est_fecha1').datetimepicker({
				format:'Y/m/d',
				timepicker:false
			});

			$('#est_fecha2').datetimepicker({
				format:'Y/m/d',
				timepicker:false
			});

			$('#est_fecha3').datetimepicker({
				format:'Y/m/d',
				timepicker:false
			});

			$('#event_fecha1').datetimepicker({
				format:'Y/m/d',
				timepicker:false
			});

			$('#event_fecha2').datetimepicker({
				format:'Y/m/d',
				timepicker:false
			});

			$('#event_fecha3').datetimepicker({
				format:'Y/m/d',
				timepicker:false
			});
		</script>
	</body>
</html>