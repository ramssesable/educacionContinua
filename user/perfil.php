<?php 
	include('sesion.php');
	include('header.php');
	include('conex.php');

	error_reporting(E_ALL ^ E_NOTICE);

	$msj=$_GET['msj'];

	if ($msj == 1) {
		$msj = "<div class='alert alert-success'>Se Modifico Exitosamente!!!</div>";
	}
	if ($msj == 2) {
		$msj = "<div class='alert alert-danger'>Error Intente mas Tarde...</div>";
	}

	$perfil=mysql_query("SELECT * FROM datos_personales WHERE id_usuario=".$id);
	while ($row=mysql_fetch_assoc($perfil)) {
		$rol=$row['id_usuario'];
		$nombre=$row['nombre'];
		$paterno=$row['ap_pat'];
		$materno=$row['ap_mat'];
		$sexo=$row['sexo'];
		$email=$row['email'];
		$email_al=$row['email_alt'];
		$dir=$row['direccion'];
		$col=$row['colonia'];
		$municipio=$row['municipio'];
		$estado=$row['estado'];
		$cp=$row['cp'];
		$tel_p=$row['tel_p'];
		$tel_c=$row['tel_c'];
		$tel_t=$row['tel_t'];
	}
?>
<script>
	$(document).ready(function() {
		$("#tel_p").mask("(999)999-9999");
		$("#tel_c").mask("(999)999-9999");
		$("#tel_t").mask("(999)999-9999");
		$("#cp").mask("99999");
	});
</script>
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
						<a href="perfil.php">Perfil</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i> Perfil</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form action="perfil_proceso.php" method="POST">
							<fieldset>
								<legend>Tu Perfiel es:</legend>
								<table>
									<tr>
										<td><label for="nombre">Nombre:</label></td>
										<td><label for="paterno">Apellido Paterno:</label></td>
										<td><label for="materno">Apellido Materno:</label></td>
									</tr>
									<tr>
										<td><input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>">&nbsp;&nbsp;</td>
										<td><input type="text" name="paterno" id="paterno" value="<?php echo $paterno; ?>">&nbsp;&nbsp;</td>
										<td><input type="text" name="materno" id="materno" value="<?php echo $materno; ?>">&nbsp;&nbsp;</td>
									</tr>
									<tr>
										<td><label for="email">Email:</label></td>
										<td><label for="email_alt">Email Alterno:</label></td>
										<td><label for="direccion">Direccion:</label></td>
									</tr>
									<tr>
										<td><input type="email" name="email" id="email" readonly="true" value="<?php echo $email; ?>">&nbsp;&nbsp;</td>
										<td><input type="email" name="email_alt" id="email_alt" value="<?php echo $email_al; ?>">&nbsp;&nbsp;</td>
										<td><input type="text" name="direccion" id="direccion" value="<?php echo $dir; ?>">&nbsp;&nbsp;</td>
									</tr>
									<tr>
										<td><label for="colonia">Colonia:</label></td>
										<td><label for="municipio">Municipio:</label></td>
										<td><label for="estado">Estado:</label></td>
									</tr>
									<tr>
										<td><input type="text" name="colonia" id="colonia" value="<?php echo $col; ?>">&nbsp;&nbsp;</td>
										<td><input type="text" name="municipio" id="municipio" value="<?php echo $municipio; ?>">&nbsp;&nbsp;</td>
										<td><input type="text" name="estado" id="estado" value="<?php echo $estado; ?>">&nbsp;&nbsp;</td>
									</tr>
									<tr>
										<td><label for="cp">Codigo Poastal:</label></td>
										<td><label for="tel_p">Telefono Particular:</label></td>
										<td><label for="tel_c">Telefono Celular:</label></td>
									</tr>
									<tr>
										<td><input type="text" name="cp" id="cp" value="<?php echo $cp; ?>">&nbsp;&nbsp;</td>
										<td><input type="text" name="tel_p" id="tel_p" value="<?php echo $tel_p; ?>">&nbsp;&nbsp;</td>
										<td><input type="text" name="tel_c" id="tel_c" value="<?php echo $tel_c; ?>">&nbsp;&nbsp;</td>
									</tr>
									<tr>
										<td><label for="tel_t">Telefono Trabajo:</label></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td><input type="text" name="tel_t" id="tel_t" value="<?php echo $tel_t; ?>"></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td colspan="3" align="center"><input type="submit" class="btn btn-primary" value="Cambiar"></td>
									</tr>
								</table>
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