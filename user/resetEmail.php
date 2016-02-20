<?php  

	include('conex.php');



	$email = $_POST['email'];
	$psswd = substr( md5(microtime()), 1, 10);
	$pwd = md5($psswd);


	$search = mysql_query("SELECT email FROM datos_personales WHERE email='$email' ");

	if ($row=mysql_fetch_assoc($search)) {



		$update = mysql_query("UPDATE datos_personales SET password='$pwd' WHERE email='$email'");



		$cuerpo="Tu Password Hacido Cambiado Correctamente!! Favor de Entrar y Cambiar tu Password <br>";

		$cuerpo=$cuerpo."su Nuevo Password es:<br>";

		$cuerpo=$cuerpo.$psswd."<br>";

		$cuerpo=$cuerpo."--------------------------------------------------------------------------<br>";

		$cuerpo=$cuerpo."desde aqui puede entrar <a href='http://www.facultaddecienciasadministrativas.com/odontologia/user/index.php'>Iniciar Secion</a> para que cambie su Password<br>";

		$cuerpo=$cuerpo."Gracias!!";

		$destinatario = $email;

		$asunto = "Facultad de Odontologia";

		$headers = "MIME-Version: 1.0\r\n"; 

		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

		$headers .= "FROM: <odontologia@facultaddecienciasadministrativas.com>\r\n"; 

		 $isdone=mail($destinatario,$asunto,$cuerpo,$headers);

		 if($isdone)

	            header("Location:reset_password.php?msj=2");

	        else

	            header("Location:reset_password.php?msj=3");

	}else{

		header("Location:reset_password.php?msj=1");

	}

?>