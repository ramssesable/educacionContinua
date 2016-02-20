<?php 
	include('sesion.php');
	include('header.php'); 

	if ($rol == 2) {
		$roles = "Especialidad en Endodoncia";
	}
	if ($rol == 3) {
		$roles = "Especialidad en Ortodoncia";
	}
	if ($rol == 4) {
		$roles = "Especialidad en Periodoncia";
	}
	if ($rol == 5) {
		$roles = "Especialidad en Prostodoncia";
	}
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
						<a href="alumno.php">Alumnos</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Alumnos</h2>
					</div>
					<div class="box-content">
						<?php  
							if ($rol == 1) {
						?>
								<a href="alumnos.php?id=2" class="btn btn-primary">Especialidad en Endodoncia</a><br><br>
					           	<a href="alumnos.php?id=3" class="btn btn-primary">Especialidad en Ortodoncia</a><br><br>
					           	<a href="alumnos.php?id=4" class="btn btn-primary">Especialidad en Periodoncia</a><br><br>
					           	<a href="alumnos.php?id=5" class="btn btn-primary">Especialidad en Prostodoncia</a> 
						<?php
							}else{
						?>
								<a href="alumnos.php?id=<?php echo $rol; ?>" class="btn btn-primary"><?php echo $roles; ?></a>
						<?php
							}
						?>
						          
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
    
					<!-- content ends -->
			</div><!--/#content.span10-->
			</div><!--/fluid-row-->
				
		<hr>
		
	</div><!--/.fluid-container-->

	<?php include('footer.php'); ?>
	
</body>
</html>