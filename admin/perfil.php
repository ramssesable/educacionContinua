<?php 
	include('sesion.php');
	include('header.php'); 
	error_reporting(0);
	if ($_GET['msj'] == 1) {
		$msj = "<div class='alert alert-success'>Su Cambio Fue Exitosamente</div>";
	}
	if ($_GET['msj'] == 2) {
		$msj = "<div class='alert alert-danger'>Su Cambio No Fue Exitosamente</div>";
	}

	if ($rol == 1) {$roles = 'Administrador';}
	if ($rol == 2) {$roles = 'Maestro';}
	if ($rol == 3) {$roles = 'Alumno';}

	include('conex.php');
	$ver = mysql_query("SELECT * FROM user WHERE id=".$id);
	while ($row=mysql_fetch_assoc($ver)) {
		$id=$row['id'];
		$nombre=$row['nombre'];
		$paterno=$row['paterno'];
		$materno=$row['materno'];
		$emails=$row['email'];
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
						<a href="perfil.php">Perfil</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Perfil</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="perfil_proceso.php" method="POST">
						  <fieldset>
							<legend>Cambiar Perfil</legend>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Nombre:</label>
							  <div class="controls">
								<input type="text" name="nombre" class="span6 typeahead" id="typeahead" value="<?php echo $nombre; ?>"  data-provide="typeahead" data-items="4" data-source='[]'>
								<input type="hidden" name="id" value="<?php echo $id; ?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Apellido Paterno:</label>
							  <div class="controls">
								<input type="text" name="paterno" class="span6 typeahead" id="typeahead" value="<?php echo $paterno; ?>"  data-provide="typeahead" data-items="4" data-source='[]'>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Apellido Materno:</label>
							  <div class="controls">
								<input type="text" name="materno" class="span6 typeahead" id="typeahead" value="<?php echo $materno; ?>"  data-provide="typeahead" data-items="4" data-source='[]'>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Email:</label>
							  <div class="controls">
								<input type="text" name="email" class="span6 typeahead" id="typeahead" value="<?php echo $emails; ?>"  data-provide="typeahead" data-items="4" data-source='[]'>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Aceptar</button>
							  <a href="crear_pwd.php" class="btn btn-warning">Cambiar Password</a>
							</div>
						  </fieldset>
						  <?php echo $msj; ?>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

			</div><!--/#content.span10-->
			</div><!--/fluid-row-->
				
		<hr>
	</div><!--/.fluid-container-->

	<?php include('footer.php'); ?>
	
</body>
</html>
