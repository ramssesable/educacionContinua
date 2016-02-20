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
		$msj = "<div class='alert alert-danger'>Se Borro Cuenta Existosamente!!</div>";
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
						<a href="usuarios.php">Usuarios</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Usuarios</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Nombre</th>
								  <th>Correo</th>
								  <th>Role</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  <?php 
						  	include('conex.php');

						  	$ver = mysql_query("SELECT * FROM user");
						  	while ($row=mysql_fetch_assoc($ver)) {
						  		if ($row['id_rol'] == 1) {
						  			$roles = 'Administrador';
						  		}
						  		if ($row['id_rol'] == 2) {
						  			$roles = 'Especialidad en Endodoncia';
						  		}
						  		if ($row['id_rol'] == 3) {
						  			$roles = 'Especialidad en Ortodoncia';
						  		}
						  		if ($row['id_rol'] == 4) {
						  			$roles = 'Especialidad en Periodoncia';
						  		}
						  		if ($row['id_rol'] == 5) {
						  			$roles = 'Especialidad en Prostodoncia';
						  		}
						  		if ($row['status'] == 1) {
						  			$status = '<span class="label label-success">Activo</span';
						  		}
						  		if ($row['status'] == 2) {
						  			$status = '<span class="label label-important">Inactivo</span';
						  		}
						  		echo "<tr>";
						  		echo "<td>".$row['nombre']." ".$row['paterno']." ".$row['materno']."</td>";
						  		echo "<td class='center'>".$row['email']."</td>";
						  		echo "<td class='center'>".$roles."</td>";
						  		echo "<td class='center'>".$status."</td>";
						  		echo "<td class='center'>
						  				<a class='btn btn-primary' href='edit.php?id=".$row['id']."'>
										<i class='icon-edit icon-white'></i>  
											Cambiar Status                                            
										</a>
										<a class='btn btn-danger' href='delete.php?id=".$row['id']."'>
											<i class='icon-trash icon-white'></i> 
											Eliminar
										</a>
						  				</td>";
						  		echo "</tr>";
						  	}
						  ?>
						  </tbody>
					  </table>   
					  <?php echo $msj; ?>         
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
