<?php 

	include('sesion.php');

	include('header.php'); 

?>

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

				</ul>

			</div>

			<?php 

				include('conex.php');

				$No=0;

				$contar=mysql_query("SELECT * FROM user");

				while ($row=mysql_fetch_row($contar)) {

					$No++;

				}

			?>

			<div class="sortable row-fluid">

			<?php if($rol == 1){  ?>

				<a data-rel="tooltip" title="Total Usuarios" class="well span3 top-block" href="usuarios.php">

					<span class="icon32 icon-red icon-users"></span>

					<div>Total Usuarios</div>

					<div><?php echo $No; ?></div>

					<span class="notification"><?php echo $No; ?></span>

				</a>

			<?php 

			}

				include('conex.php');

				$NoA=0;

				if ($rol == 1) {

					$contar=mysql_query("SELECT * FROM datos_personales");

				}else{

					$contar=mysql_query("SELECT * FROM datos_personales a, datos_posgrado b WHERE posgrado='$rol' AND a.email=b.email");

				}

				

				while ($row=mysql_fetch_row($contar)) {

					$NoA++;

				}



				if ($rol == 1) {

			?>

				<a data-rel="tooltip" title="Alumnos que contestaron la encuesta" class="well span3 top-block" href="alumno.php">

			<?php

				}else{

			?>

				<a data-rel="tooltip" title="Alumnos que contestaron la encuesta" class="well span3 top-block" href="alumnos.php?id=<?php echo $rol; ?>">

			<?php

				}

			?>

					<span class="icon32 icon-color icon-user"></span>

					<div>Total Alumnos</div>

					<div><?php echo $NoA; ?></div>

					<span class="notification green"><?php echo $NoA; ?></span>

				</a>



				<a data-rel="tooltip" title="Reporte Graficas" class="well span3 top-block" href="graficas.php">

					<span class="icon32 icon-color icon-image"></span>

					<div>Reporte Graficas</div>

					<div><span class="icon icon-color icon-info"></div>

					<span class="notification red"><span class="icon icon-darkgray icon-image"></span>

				</a>

				<?php if($rol == 1){ ?>

				<a data-rel="tooltip" title="Crear Cuentas" class="well span3 top-block" href="crear_cuenta.php">

					<span class="icon32 icon-color icon-profile"></span>

					<div>Crear Cuentas</div>

					<div><span class="icon icon-color icon-gear"></div>

					<span class="notification yellow"><span class="icon icon-color icon-check"></span>

				</a>

				<?php } ?>

			</div>

			

			<div class="row-fluid">

				<div class="box span12">

					<div class="box-header well">

						<h2><i class="icon-info-sign"></i> Bienvenido</h2>

					</div>

					<div class="box-content">

						<h1>Sistema de Posgrado<small>Donde se haran reportes, alta de usuarios y seguir a los alumnos de posgrado</small></h1>

						<p>Its a live demo of the template. I have created Charisma to ease the repeat work I have to do on my projects. Now I re-use Charisma as a base for my admin panel work and I am sharing it with you :)</p>

						<p><b>All pages in the menu are functional, take a look at all, please share this with your followers.</b></p>

						



						<div class="clearfix"></div>

					</div>

				</div>

			</div>

				<!-- content ends -->

		</div><!--/#content.span10-->

		</div><!--/fluid-row-->

				

		<hr>



		<div class="modal hide fade" id="myModal">

			<div class="modal-header">

				<button type="button" class="close" data-dismiss="modal">×</button>

				<h3>Settings</h3>

			</div>

			<div class="modal-body">

				<p>Here settings can be configured...</p>

			</div>

			<div class="modal-footer">

				<a href="#" class="btn" data-dismiss="modal">Close</a>

				<a href="#" class="btn btn-primary">Save changes</a>

			</div>

		</div>



		

	</div><!--/.fluid-container-->



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

    	reset();

		alertify.success("Bienvenido <?php echo $Usuario; ?>.");

		return false;

  	</script>



	<?php include('footer.php'); ?>

		

</body>

</html>