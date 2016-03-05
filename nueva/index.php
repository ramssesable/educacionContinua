<?php  
	if(isset($_GET['msj'])) {
		$msj = $_GET['msj'];

		if ($msj == 1) {
			$msj = "<div class='alert alert-success'>Se Envio un Correo al <b><u>".$_GET['email']."</u></b> Favor de Verificarlo..</div>";
		}
		if ($msj == 2) {
			$msj = "<div class='alert alert-danger'>Error Intente mas Tarde o comuniquese con los administradores</div>";
		}
	}
		
?>
<!DOCTYPE html>

<html>

	<head>

		<meta charset="UTF-8">
		<title>Facultad de Ciencias Administrativas Mexicali</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="shortcut icon" href="../img/favicon_logo.png">
		<link rel="stylesheet" type="text/css" href="../css/popup.css">
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
			.encabezado {
				font-size: 40pt;
			}
		</style>


	</head>

	<body>

		<!-- Main -->

		<section class="main">

			<!-- Mensaje de bienvenida -->

			<div class="mensaje">

				<h1 class="encabezado">Bienvenido</h1>

				<p class="redaccion">

					La Facultad de Ciencias Administrativas Mexicali (FCA) con el propósito establecer una relación recíproca, permanente y de vinculación con sus egresados,

					agradece, de antemano, el llenado del siguiente cuestionario.<br><br>



					La FCA garantiza la confidencialidad de la información que proporcione.

					

					<!-- La evidencia empírica nos ha demostrado que las TIC’s pueden mejorar el rendimiento

					de una empresa y hacerla más competitiva comercializando sus productos o servicios internaionalmente.<br><br>



					En los últimos 10 años se han realizado varios estudios destinados a analizar el impacto económico que las TIC´s proporcionan

					y la finalidad de este proyecto es medir el nivel de adopción de TIC’s en las PYMES del sector manufacturero en Baja California. -->

				</p>

			</div>

			<!-- Botones de registro y login -->

			<div class="botones">

				<a href="user/index.php"  class="btn">Login</a>

				<a href="form.php" class="btn">Regístrate</a>

			</div>
			<? if(isset($_GET['msj']) php echo $msj; ?>
		</section>
		
	</body>

</html>