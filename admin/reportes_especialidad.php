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
					<li>
						<a href="reportes_especialidad.php">Reportes Especialidad</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i> Reportes por Especialidad</h2>
					</div>
					<div class="box-content">
						<iframe src="reportes/especialidad.php" width="1070" height="700" frameborder="0"></iframe>
					</div>
				</div>
			</div><!--/row-->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		<hr>
	</div><!--/.fluid-container-->

	<?php include('footer.php'); ?>
	
</body>
</html>