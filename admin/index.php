<!DOCTYPE html>

<html>

	<head>

		<meta charset="UTF-8">

		<title>Facultad de Odontologia Mexicali</title>

		<link rel="stylesheet" type="text/css" href="css/style.css">

		<link href="css/login.css" rel="stylesheet">

		<link rel="stylesheet" href="css/alertify.core.css" />

		<link rel="stylesheet" href="css/alertify.default.css" id="toggleCSS" />



		<!-- The fav icon -->

		<link rel="shortcut icon" href="img/favicon_logo.ico">

		

		<style>

			header{

				margin: 0 auto;

			}

			h1{

				margin-top: -20px;

			}

			h3{

				margin-top: 10px;

			}

			.sombra{

				margin-top: -20px;

			}

		</style>

	</head>

	<body>

		<!-- Header -->

		<header>

			<h1><img src="img/logo_uabc.png" alt="UABC"></h1>

			<div class="texto">

				<h2><strong>Universidad Autónoma de Baja California</strong></h2>

				<h3>Facultad de Odontología Mexicali</h3>

				<h3>Coordinación de Posgrado e Investigación</h3>

				<h3>Programa de seguimiento a Egresados</h3>

			</div>

			<h1><img src="img/logo_odonto.png" alt="Odontolog" width="70"></h1>

			<h1><img src="img/conacyt.png" alt="Conacyt" width="100"></h1>

			<div class="sombra"></div>

		</header>

		<!-- Main -->

		<section class="main">

			<!-- Mensaje de bienvenida -->

			<div class="mensaje">

				<div id="box_bg">

					<div id="content">

						<h1>Login</h1>

						<form action="validarEmail.php" method="POST">

						<!-- Login Fields -->

						<div id="login">Para loguearse favor de poner su correo y contraseña:<br/>

							<input type="text" name='email' placeholder="Correo" class="login user"/>

							<input type='password' name='password' placeholder='Password' class="login password"/>

						</div>

						

						<!-- Green Button -->

						<input type="submit" class="button green" value="Aceptar" />

						</form>

						<!-- Checkbox -->

						<div class="checkbox">

							<li>

								<fieldset>

									<![if !IE | (gte IE 8)]><legend id="title2" class="desc">Olvide la <a href="reset_password.php">Contraseña</a></legend><![endif]>

									<!--[if lt IE 8]><label id="title2" class="desc"></label><![endif]-->

									<div>

										

									</div>

								</fieldset>

							</li>

						</div>

					</div>

				</div>

			</div>

			<!-- Botones de registro y login -->

			<div class="botones">

			</div>

		</section>

		<!-- Footer -->

		<footer>

			<p>Universidad Autónoma de Baja California | Facultad de Odontología Mexicali - Mexicali Baja California Copyright 2014 ©</p>

		</footer>

		<!-- Script de Alertify -->

	<script src="js/jquery-1.11.0.min.js"></script>

	<script src="js/alertify.min.js"></script>

	<script>

		function reset () {

			$("#toggleCSS").attr("href", "css/alertify.default.css");

			alertify.set({

				labels : {

					ok     : "OK",

					cancel : "Cancel"

				},

				delay : 5000,

				buttonReverse : false,

				buttonFocus   : "ok"

			});

		}

	</script>

	<?php 

		if (isset($_POST['msg_error'])) {

			

			switch (isset($_POST['msg_error'])) {

				case 1 :

				?>

				<script type="text/javascript"> 

		        	reset();

					alertify.error("El usuario o password son incorrectos o Tu Cuenta esta Inactiva");

					$("#password").focus();

					return false;

		      	</script>

				<?php

					break;

				case 2 :

				?>

				<script type="text/javascript"> 

		        	reset();

					alertify.error("La seccion a la que intentaste entrar esta restringida.");

					return false;

		      	</script>

				<?php

					break;

				case 3 :

				?>

				<script type="text/javascript"> 

		        	reset();

					alertify.error("Has Salido, Bye.");

					return false;

		      	</script>

				<?php

					break;

				case 4 :

				?>

				<script type="text/javascript"> 

		        	reset();

					alertify.error("Tu Cuenta esta Inactiva.");

					return false;

		      	</script>

				<?php

					break;

			}

		}

	?>



	<!-- external javascript

	================================================== -->

	<!-- Placed at the end of the document so the pages load faster -->



	<!-- jQuery -->

	<script src="js/jquery-1.7.2.min.js"></script>	

	</body>

</html>