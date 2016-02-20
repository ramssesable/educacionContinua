<?php  
	include('sesion.php');
	include('conex.php');

	$id         = $_POST['id'];
	$pass       = $_POST['pwd_orig'];
	$nvo_pwd    = $_POST['nvo_pwd'];
	$confir_pwd = $_POST['confir_pwd'];

	$password    = md5($pass);
	$nvo_pass    = md5($nvo_pwd);
	$confir_pass = md5($confir_pwd);

	$consulta=mysql_query("SELECT password FROM user WHERE id=".$id);
	while ($row=mysql_fetch_assoc($consulta)) {
		$pwd_viejo=$row['password'];
	}
	//echo $pwd_viejo;
	if ($pwd_viejo == $password) {

		if ($nvo_pass == $confir_pass) {

			$pass_update = mysql_query("UPDATE user SET password='$nvo_pass' WHERE id=".$id);

			if ($pass_update) {

				header("Location: logout.php");

			}else{

				header("Location: crear_pwd.php?msj=4");

			}
		}else{

			header("Location:crear_pwd.php?msj=2");

		}
		
	}else{

		header("Location:crear_pwd.php?msj=1");

	}

?>