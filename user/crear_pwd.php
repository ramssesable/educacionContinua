<?php 

	include('sesion.php');

	include('header.php');



	error_reporting(0);



	if ($_GET['msj'] == 1) {

		$msj = "<div class='alert alert-danger'>El Password Original No Coincide Con El que Puso...</div>";

	}

	if ($_GET['msj'] == 2) {

		$msj = "<div class='alert alert-danger'>El Password Nuevo y El Password de Confirmacion No Son Identicos....</div>";

	}

	if ($_GET['msj'] == 3) {

		$msj = "<div class='alert alert-success'>Su Cambio Fue Exitosamente</div>";

	}

	if ($_GET['msj'] == 4) {

		$msj = "<div class='alert alert-danger'>Su Cambio No Fue Exitosamente</div>";

	} 

?>

<style>

	fieldset{

		margin: 0 auto;

		text-align: center;

		width: 300px;

	}

</style>

<body>

		<!-- topbar starts -->

	<div class="navbar">

		<!-- HEADER -->

	</div>

	<!-- topbar ends -->

		<div class="container-fluid">

		<div class="row-fluid">

				

			<!-- left menu starts -->

			<div class="span2 main-menu-span">

				<?php include('menu.php'); ?>

			</div><!--/span-->

			<!-- left menu ends -->

			

			<noscript>

				<div class="alert alert-block span10">

					<h4 class="alert-heading">Warning!</h4>

					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>

				</div>

			</noscript>

			

			<div id="content" class="span10">

			<!-- content starts -->

			



			<div>

				<ul class="breadcrumb">

					<li>

						<a href="inicio.php">Inicio</a> <span class="divider">/</span>

					</li>

					<li>

						<a href="crear_pwd.php">Cambiar Password</a>

					</li>

				</ul>

			</div>

			

			<div class="row-fluid">

				<div class="box span12">

					<div class="box-header well">

						<h2><i class="icon-wrench"></i> Cambiar Contraseña</h2>

						<div class="box-icon">

							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>

						</div>

					</div>

					<div class="box-content">

						<form action="crear_pwd_proceso.php" method="POST">

							<fieldset>

								<label for="pwd_viejo">Contraseña Original:</label>

								<br>

								<input type="password" name="pwd_viejo" id="pwd_viejo" required placeholder="Contraseña Original">

								<input type="hidden" name="email" value="<?php echo $email; ?>">

								<br>

								<br>

								<label for="pwd_new">Nueva Contraseña:</label>

								<br>

								<input type="password" name="pwd_new" id="pwd_new" required  placeholder="Nueva Contraseña">

								<br>

								<br>

								<label for="pwd_confir">Confirmar Contraseña:</label>

								<br>

								<input type="password" name="pwd_confir" id="pwd_confir" required  placeholder="Confirmar Contraseña">

								<br>

								<br>

								<input type="submit" class="btn btn-primary" value="Cambiar Contraseña">

							</fieldset>

							<?php echo $msj; ?>

						</form>

						<div class="clearfix"></div>

					</div>

				</div>

			</div><!-- content ends -->

		</div><!--/#content.span10-->

		</div><!--/fluid-row-->

				

		<hr>



	</div><!--/.fluid-container-->



		<?php include('footer.php'); ?>

</body>

</html>