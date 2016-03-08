<?php
	include("conex.php");

	$email         = $_POST['email'];

	$pre43Col = "";
	$pre43Val = "";
	if(isset($_POST['pre43'])){
		foreach($_POST['pre43'] as $pre43){
			$pre43Col .= ", pre43_$pre43";
			$pre43Val .= ", 1";
		}
	}
	$pre44Col = "";
	$pre44Val = "";
	if(isset($_POST['pre44'])){
		foreach($_POST['pre44'] as $pre44){
			$pre44Col .= ", pre44_$pre44";
			$pre44Val .= ", 1";
		}
	}

	$pre45      = $_POST['pre45'];
	$pre46      = $_POST['pre46'];
	$pre47      = $_POST['pre47'];
	$pre48      = $_POST['pre48'];
	$pre49      = $_POST['pre49'];

	$sql = mysql_query("INSERT INTO impactoyproductividad(
		email
		$pre43Col$pre44Col,
		pre45,pre46,pre47,pre48,pre49) 
		VALUES ('$email'
				$pre43Val$pre44Val
				'$pre45','$pre46','$pre47','$pre48','$pre49')",$conexion);
	print_r($sql);
		$psswd = substr( md5(microtime()), 1, 10);
		$pwd = md5($psswd);

	//$sql2=mysql_query("UPDATE datos_personales SET password='$pwd' WHERE email='$email'");
//		if ($sql) 
	/*if ($sql) {
		$cuerpo="Tu datos se han guardado Exitosamente <br>";
		$cuerpo=$cuerpo."Su Usuario es:<br>";
		$cuerpo=$cuerpo.$email."<br>";
		$cuerpo=$cuerpo."y su Password es:<br>";
		$cuerpo=$cuerpo.$psswd."<br>";
		$cuerpo=$cuerpo."--------------------------------------------------------------------------<br>";
		$cuerpo=$cuerpo."Estimado Alumno gracias por contestar la encuesta su informacion esta segura con nosotros";
		$cuerpo=$cuerpo."Por favor de <a href='http://www.facultaddecienciasadministrativas.com/odontologia/user/index.php'>Iniciar Secion</a> para que cambie su Password<br>";
		$cuerpo=$cuerpo."Gracias por su Atencion";
		




		$destinatario = $email;
		$asunto = "Facultad de Odontologia";
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		$headers .= "FROM: <odontologia@facultaddecienciasadministrativas.com>\r\n"; 
		 $isdone=mail($destinatario,$asunto,$cuerpo,$headers);
		 if($isdone)
	            header("Location:index.php?msj=1&email='$email'");
	        else
	            header("Location:index.php?msj=2");*/
	
/*	else {
		header("Location:form6.php");
	}*/
?>