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
	if ($_GET['msj'] == 3) {
		$msj = "<div class='alert alert-danger'>Su Cambio No Fue Exitosamente</div>";
	}

	include('conex.php');
	$ver = mysql_query("SELECT * FROM user WHERE id_rol=".$rol);
	while ($row=mysql_fetch_assoc($ver)) {
		$id=$row['id'];
		$nombre=$row['nombre'];
		$paterno=$row['paterno'];
		$materno=$row['materno'];
		$emails=$row['email'];
	}
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
					<li>
						<a href="crear_cuenta.php">Crear Cuenta</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Crear Cuenta</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="crear_cuenta_proceso.php" method="POST">
						  <fieldset>
							<legend>Crear Nuevo Usuario</legend>
							<div class="control-group">
							  <label class="control-label" for="nombre">Nombre:</label>
							  <div class="controls">
								<input type="text" name="nombre" required class="span6 typeahead" id="nombre"  data-provide="typeahead" data-items="4" data-source='[]'>
								<input type="hidden" name="id" value="<?php echo $id; ?>">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="paterno">Apellido Paterno:</label>
							  <div class="controls">
								<input type="text" name="paterno" required class="span6 typeahead" id="paterno"  data-provide="typeahead" data-items="4" data-source='[]'>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="materno">Apellido Materno:</label>
							  <div class="controls">
								<input type="text" name="materno" required class="span6 typeahead" id="materno"  data-provide="typeahead" data-items="4" data-source='[]'>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="email">Email:</label>
							  <div class="controls">
								<input type="email" name="email" required class="span6 typeahead" id="email"  data-provide="typeahead" data-items="4" data-source='[]'>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="password">Password:</label>
							  <div class="controls">
								<input type="password" name="password" required class="span6 typeahead" id="password"  data-provide="typeahead" data-items="4" data-source='[]'>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="rol">Rol:</label>
							  <div class="controls">
								<select name="rol" id="rol" required class="span6 typeahead">
									<option value="">-- Selecciona --</option>
							<?php  
								include('conex.php');
								$ver=mysql_query("SELECT * FROM roles");
								while ($row=mysql_fetch_assoc($ver)) {
									echo "<option value=".$row['id_rol'].">".$row['nombre']."</option>";
								}
							?>
								</select>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="status">Status:</label>
							  <div class="controls">
								<select name="status" id="status" required class="span6 typeahead">
									<option value="">-- Selecciona --</option>
									<option value="1">Activo</option>
									<option value="2">Inactivo</option>
								</select>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Grabar</button>
							  <button type="reset" class="btn">Cancel</button>
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
