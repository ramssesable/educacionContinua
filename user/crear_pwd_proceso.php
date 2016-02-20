<?php  

	include('sesion.php');

	include('conex.php');



	$email      = $_POST['email'];

	$pass       = $_POST['pwd_viejo'];

	$nvo_pwd    = $_POST['pwd_new'];

	$confir_pwd = $_POST['pwd_confir'];



	$password    = md5($pass);

	$nvo_pass    = md5($nvo_pwd);

	$confir_pass = md5($confir_pwd);



	$consulta=mysql_query("SELECT password FROM datos_personales WHERE email='$email'");

	while ($row=mysql_fetch_assoc($consulta)) {

		$pwd_viejo=$row['password'];

	}
	//print_r($password);
	
	if ($pwd_viejo == $password) {



		if ($nvo_pass == $confir_pass) {



			$pass_update = mysql_query("UPDATE datos_personales SET password='$nvo_pass' WHERE email='$email'");



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