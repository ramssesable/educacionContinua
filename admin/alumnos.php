<?php 
	include('sesion.php');
	include('header.php'); 
	error_reporting(E_ALL ^ E_NOTICE);
	$id=$_GET['id'];
	$msj=$_GET['msj'];

	if ($msj == 1) {
		$msj = "<div class='alert alert-success'>Se Borro Exitosamente</div>";
	}
	if ($msj == 2) {
		$msj = "<div class='alert alert-danger'>Error Intente Luego!!!</div>";
	}
	if ($msj == 3) {
		$msj = "<div class='alert alert-success'>Su Cambio Fue Exitosamente</div>";
	}

	if ($id==2) {
		$posgrado="Especialidad en Endodoncia";
	}
	if ($id==3) {
		$posgrado="Especialidad en Ortodoncia";
	}
	if ($id==4) {
		$posgrado="Especialidad en Periodoncia";
	}
	if ($id==5) {
		$posgrado="Especialidad en Prostodoncia";
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
						<h2><i class="icon-user"></i> Alumnos de <?php echo $posgrado; ?></h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
							  	  <th>No</th>
								  <th>Nombre</th>
								  <th>Correo</th>
								  <th>Municipio</th>
								  <th>Telefono Personal</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  <?php 
						  	include('conex.php');
						  	$no=0;
						  	$ver = mysql_query("SELECT * FROM datos_personales a, datos_posgrado b WHERE a.email=b.email AND b.posgrado=".$id);
						  	while ($row=mysql_fetch_assoc($ver)) {
						  		$idu=$row['id_usuario'];
						  		$no++;
						  		echo "<tr>";
						  		echo "<td class='center'>".$no."</td>";
						  		echo "<td>".$row['nombre']." ".$row['ap_pat']." ".$row['ap_mat']."</td>";
						  		echo "<td class='center'>".$row['email']."</td>";
						  		echo "<td class='center'>".$row['municipio']."</td>";
						  		echo "<td class='center'>".$row['tel_p']."</td>";
						  		echo "<td class='center'>
						  				<a class='btn btn-success' href='show.php?idu=".$row['email']."&id=".$id."'><i class='icon-zoom-in icon-white'></i>  
											Ver
						  				</a>
										<a class='btn btn-danger' href='delete_alu.php?idu=".$row['email']."&id=".$id."'><i class='icon-trash icon-white'></i> 
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
