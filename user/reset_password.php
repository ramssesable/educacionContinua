<?php  
	$msj=$_GET['msj'];

	if ($msj == 1) {
		$msj = "<div class='alert alert-danger'>Correo NO Existe!!!!</div>";
	}
	if ($msj == 2) {
		$msj = "<div class='alert alert-success'>Se Envio El Correo</div>";
	}
	if ($msj == 3) {
		$msj = "<div class='alert alert-danger'>Error al intentar de enviar su correo</div>";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Facultad de Odontologia</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="css/login.css" rel="stylesheet">

		<!-- The fav icon -->
		<link rel="shortcut icon" href="img/favicon_logo.ico">
		
		<style>
			.alert {
			  	padding: 15px;
			  	margin-bottom: 20px;
			  	border: 1px solid transparent;
			  	border-radius: 4px;
			}
			.alert-success {
			  	background-color: #dff0d8;
			  	border-color: #d6e9c6;
			  	color: #3c763d;
			}
			.alert-danger {
			  	background-color: #f2dede;
			  	border-color: #ebccd1;
			  	color: #a94442;
			}
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
			.label{
				margin-top: -0px;
			}
		</style>
	</head>
	<body>
		<!-- Header -->
		<header>
			<h1><img src="img/logo_uabc.png" alt="UABC"></h1>
			<div class="texto">
				<h2><strong>Universidad Autónoma de Baja California</strong></h2>
				<h3>Facultad de Odontología</h3>
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
						<form action="resetEmail.php" method="POST">
						<!-- Login Fields -->
						<div id="login">Su Correo Para Cambiar Su Contraseña:<br/>
							<input type="email" name='email' placeholder="Su Correo Para Cambiar Password" class="login user"/>
						</div>
						
						<!-- Green Button -->
						<input type="submit" class="button green" value="Aceptar" />
						</form>
						<!-- Checkbox -->
						<div class="checkbox">
							<li>
								<fieldset>
									<![if !IE | (gte IE 8)]><![endif]>
									<!--[if lt IE 8]><label id="title2" class="desc"></label><![endif]-->
									<div class="label">
										<?php echo $msj; ?>
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
			<p>Universidad Autónoma de Baja California | Facultad de Odontología Campus Mexicali - Mexicali Baja California Copyright 2014 ©</p>
		</footer>
		<!-- Script de Alertify -->
	<script src="js/jquery-1.11.0.min.js"></script>
	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="js/jquery-1.7.2.min.js"></script>	
	</body>
</html>