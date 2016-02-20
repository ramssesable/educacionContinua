<?php  
	include('sesion.php');
	include('conex.php');

	$idu=$_GET['idu'];
	$id=$_GET['id'];
	//echo $email." ".$id;
	$ver = mysql_query("SELECT * FROM datos_personales WHERE email='$idu'");
	while ($row=mysql_fetch_array($ver)) {
		$correo=$row['email'];	
		$uid=$row['id_usuario'];
	}
	//echo $correo;
	if ($correo == $idu) {
		$delete1 = mysql_query("DELETE FROM datos_personales WHERE email='$correo'");
		$delete2 = mysql_query("DELETE FROM datos_posgrado WHERE email='$correo'");
		$delete3 = mysql_query("DELETE FROM datos_laborales WHERE email='$correo'");
		$delete4 = mysql_query("DELETE FROM edu_continua WHERE email='$correo'");

		if ($delete1 && $delete2 && $delete3 && $delete4) {
			header("Location: alumnos.php?id=".$id."&msj=1");
		}else{
			header("Location: alumnos.php?id=".$id."&msj=2");
		}
	}else{
		header("Location: alumnos.php?id=".$id."&msj=3");
	}
	
?>