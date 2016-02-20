<?php 
	include('sesion.php');
	include('conex.php');

	$id      = $_POST['id'];
	$nombre  = $_POST['nombre'];
	$paterno = $_POST['paterno'];
	$materno = $_POST['materno'];
	$email   = $_POST['email'];

	$perfil_update = mysql_query("UPDATE user SET nombre='$nombre', paterno='$paterno', materno='$materno', email='$email' WHERE id=".$id);

	if ($perfil_update) {
		header("Location: perfil.php?msj=1");
	}else{
		header("Location: perfil.php?msj=2");
	}
?>