<?php  
	include('sesion.php');
	include('conex.php');

	$rol 		= $_POST['id_usuario'];
	$nombre 	= strtoupper($_POST['nombre']);
	$paterno 	= strtoupper($_POST['paterno']);
	$materno 	= strtoupper($_POST['materno']);
	$sexo 		= $_POST['sexo'];
	$email 		= $_POST['email'];
	$email_al 	= $_POST['email_alt'];
	$dir 		= strtoupper($_POST['direccion']);
	$col 		= strtoupper($_POST['colonia']);
	$municipio 	= strtoupper($_POST['municipio']);
	$estado 	= strtoupper($_POST['estado']);
	$cp 		= $_POST['cp'];
	$tel_p 		= $_POST['tel_p'];
	$tel_c 		= $_POST['tel_c'];
	$tel_t 		= $_POST['tel_t'];

	$ver = mysql_query("SELECT email FROM datos_personales WHERE email='$email'");
	while ($row=mysql_fetch_assoc($ver)) {
		$correo=$row['email'];
	}

	if ($correo == $email) {
		$update = mysql_query("UPDATE datos_personales 
			SET nombre='$nombre',ap_pat='$paterno',ap_mat='$materno',email_alt='$email_al',direccion='$dir',colonia='$col',
			municipio='$municipio',estado='$estado',cp='$cp',tel_p='$tel_p',tel_c='$tel_c',tel_t='$tel_t' WHERE email='$email'");

		if ($update) {
			header("Location:perfil.php?msj=1");
		}
		else{
			header("Location:perfil.php?msj=2");
		}
	}
	else{
		header("Location:perfil.php?msj=2");
	}

?>