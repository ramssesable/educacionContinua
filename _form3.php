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
		<link rel="shortcut icon" href="img/favicon_logo.ico">

		<script>

			$(document).ready(function() {

				$( ".contenido" ).hide();

				$( ".contenido" ).fadeIn(3000);



				$('input[type="radio"][name="trabaja"]').click(function(){

		            if($(this).attr("value")=="SI"){

		                $("#nowork").show();

		            }

		            if($(this).attr("value")=="NO"){

		                $("#nowork").hide();
		            }

		        });

				

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

				<form action="save3.php" method="POST">

					<fieldset>

					<input type="hidden" name="email" id="email" value="<?php echo $email; ?>">

						<legend>DATOS LABORALES</legend>

						<div class="row">

							<div class="columns">

								<label>8. Trabaja: <small>requerido</small></label>

								<input type="radio" name="trabaja" id="trabaja" value="SI" ><label>Sí</label>

								<input type="radio" name="trabaja" id="trabaja" value="NO" ><label>No</label>

							</div>

						</div>

						<div id="nowork">

							<div class="row">

								<div class="columns">

									<label>9. Ejerces la profesión: <small>requerido</small></label>

									<input type="radio" name="ejerce" id="ejerce" value="SI" required><label>Sí</label>

									<input type="radio" name="ejerce" id="ejerce" value="NO"><label>No</label>

								</div>

							</div>

							<div class="row">

								<table class="tabla">

									<tr>

										<td colspan="2"><label>10. Empleos Actuales:</label></td>

									</tr>

									<tr>

										<td colspan="2">

											<table>

												<tr>

													<td><b>Dependencia o empresa donde trabaja</b></td>

													<td><b>Puesto</b></td>

													<td><b>Sector</b></td>

													<td><b>Domicilio</b></td>

													<td><b>Teléfono</b></td>

												</tr>

												<tr>

													<td><input type="text" class="input_medio" name="emp_1" id="emp_1"></td>

													<td><input type="text" class="input_medio" name="puesto_1" id="puesto_1"></td>

													<td><input type="text" class="input_medio" name="sector_1" id="sector_1"></td>

													<td><input type="text" class="input_medio" name="dom_1" id="dom_1"></td>

													<td><input type="text" class="input_medio" name="tel_1" id="tel_1"></td>

												</tr>

												<tr>

													<td><input type="text" class="input_medio" name="emp_2" id="emp_2"></td>

													<td><input type="text" class="input_medio" name="puesto_2" id="puesto_2"></td>

													<td><input type="text" class="input_medio" name="sector_2" id="sector_2"></td>

													<td><input type="text" class="input_medio" name="dom_2" id="dom_2"></td>

													<td><input type="text" class="input_medio" name="tel_2" id="tel_2"></td>

												</tr>

												<tr>

													<td><input type="text" class="input_medio" name="emp_3" id="emp_3"></td>

													<td><input type="text" class="input_medio" name="puesto_3" id="puesto_3"></td>

													<td><input type="text" class="input_medio" name="sector_3" id="sector_3"></td>

													<td><input type="text" class="input_medio" name="dom_3" id="dom_3"></td>

													<td><input type="text" class="input_medio" name="tel_3" id="tel_3"></td>

												</tr>

											</table>

										</td>

									</tr>

								</table>

						    </div>

					    </div>

					    <div class="row">

							<div class="columns3">

								<label>11. ¿Que tanto influyó tu preparación de posgrado en el empleo actual?: <small>requerido</small></label>

								<input type="radio" name="prep_posgrado" id="prep_posgrado" value="100" required><label>100%</label>

								<input type="radio" name="prep_posgrado" id="prep_posgrado" value="75"><label>75%</label>

								<input type="radio" name="prep_posgrado" id="prep_posgrado" value="50"><label>50%</label>

								<input type="radio" name="prep_posgrado" id="prep_posgrado" value="25"><label>25%</label>

								<input type="radio" name="prep_posgrado" id="prep_posgrado" value="0"><label>Nada</label>

							</div>

						</div>

						<div class="row">

							<table class="tabla">

								<tr>

									<td colspan="2">

										<label>12. ¿En cuál de los siguientes aspectos considera que impactó el posgrado que cursó? (Enumere a partir de uno en orden de prioridad):</label>

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

												<td colspan="6" align="left"><label for="">Mejores alternativas de desarrollo profesional y personal</label></td>

												<td><input type="radio" name="aspecto_1" onClick="m11()" id="aspecto_11" value="1" required></td>

												<td><input type="radio" name="aspecto_1" onClick="m12()" id="aspecto_12" value="2"></td>

												<td><input type="radio" name="aspecto_1" onClick="m13()" id="aspecto_13" value="3"></td>

												<td><input type="radio" name="aspecto_1" onClick="m14()" id="aspecto_14" value="4"></td>

												<td><input type="radio" name="aspecto_1" onClick="m15()" id="aspecto_15" value="5"></td>

											</tr>

											<tr>

												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->

												<td colspan="6" align="left"><label for="">Posibilidad de incursionar en campos científicos</label></td>

												<td><input type="radio" name="aspecto_2" onClick="m21()" id="aspecto_21" value="1" required></td>

												<td><input type="radio" name="aspecto_2" onClick="m22()" id="aspecto_22" value="2"></td>

												<td><input type="radio" name="aspecto_2" onClick="m23()" id="aspecto_23" value="3"></td>

												<td><input type="radio" name="aspecto_2" onClick="m24()" id="aspecto_24" value="4"></td>

												<td><input type="radio" name="aspecto_2" onClick="m25()" id="aspecto_25" value="5"></td>

											</tr>

											<tr>

												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->

												<td colspan="6" align="left"><label for="">Apertura de oportunidades</label></td>

												<td><input type="radio" name="aspecto_3" onClick="m31()" id="aspecto_31" value="1" required></td>

												<td><input type="radio" name="aspecto_3" onClick="m32()" id="aspecto_32" value="2"></td>

												<td><input type="radio" name="aspecto_3" onClick="m33()" id="aspecto_33" value="3"></td>

												<td><input type="radio" name="aspecto_3" onClick="m34()" id="aspecto_34" value="4"></td>

												<td><input type="radio" name="aspecto_3" onClick="m35()" id="aspecto_35" value="5"></td>

											</tr>

											<tr>

												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->

												<td colspan="6" align="left"><label for="">Una mejor situación laboral</label></td>

												<td><input type="radio" name="aspecto_4" onClick="m41()" id="aspecto_41" value="1" required></td>

												<td><input type="radio" name="aspecto_4" onClick="m42()" id="aspecto_42" value="2"></td>

												<td><input type="radio" name="aspecto_4" onClick="m43()" id="aspecto_43" value="3"></td>

												<td><input type="radio" name="aspecto_4" onClick="m44()" id="aspecto_44" value="4"></td>

												<td><input type="radio" name="aspecto_4" onClick="m45()" id="aspecto_45" value="5"></td>

											</tr>

											<tr>

												<!--<td align="right"><input type="text" class="input_mini" placeholder="Numero"></td>-->

												<td align="left" colspan="6"><label for="">Otro, Especifique:</label></td>

												<td><input type="radio" name="aspecto_5" onClick="m51()" id="aspecto_51" value="1" required></td>

												<td><input type="radio" name="aspecto_5" onClick="m52()" id="aspecto_52" value="2"></td>

												<td><input type="radio" name="aspecto_5" onClick="m53()" id="aspecto_53" value="3"></td>

												<td><input type="radio" name="aspecto_5" onClick="m54()" id="aspecto_54" value="4"></td>

												<td><input type="radio" name="aspecto_5" onClick="m55()" id="aspecto_55" value="5"></td>

												<td><input type="text"  name="aspecto_6" id="aspecto_6" placeholder="Especifique otro"></td>

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

	</body>

</html>