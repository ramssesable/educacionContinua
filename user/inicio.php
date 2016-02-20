<?php 

	include('sesion.php');

	include('header.php');

?>



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

				</ul>

			</div>



			<div class="sortable row-fluid">



				<a data-rel="tooltip" title="Perfil de <?php echo $Usuario?>" class="well span3 top-block" href="perfil.php">

					<span class="icon32 icon-color icon-profile"></span>

					<div>Perfil</div>

					<div><span class="icon icon-color icon-gear"></div>

				</a>



				<a data-rel="tooltip" title="Cambiar Password de <?php echo $Usuario?>" class="well span3 top-block" href="crear_pwd.php">

					<span class="icon32 icon-color icon-key"></span>

					<div>Cambiar Contraseña</div>

					<div><span class="icon icon-color icon-gear"></div>

				</a>



			</div>

			

			<div class="row-fluid">

				<div class="box span12">

					<div class="box-header well">

						<h2><i class="icon-info-sign"></i> Bienvenido</h2>

						<div class="box-icon">

							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>

						</div>

					</div>

					<div class="box-content">

						<h1>Charisma <small>free, premium quality, responsive, multiple skin admin template.</small></h1>

						<p>Its a live demo of the template. I have created Charisma to ease the repeat work I have to do on my projects. Now I re-use Charisma as a base for my admin panel work and I am sharing it with you :)</p>

						<p><b>All pages in the menu are functional, take a look at all, please share this with your followers.</b></p>

						

						<p class="center">

							<h5>Bienvenido</h5>

						</p>

						<div class="clearfix"></div>

					</div>

				</div>

			</div><!-- content ends -->

		</div><!--/#content.span10-->

		</div><!--/fluid-row-->

				

		<hr>

		

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

	</script>

	<script type="text/javascript"> 

    	reset();

		alertify.success("Bienvenido <?php echo $Usuario; ?>.");

		return false;

  	</script>

		<?php include('footer.php'); ?>

</body>

</html>