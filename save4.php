<?php  
	include("conex.php");

	$email		= $_POST['email'];
	$pre31		= $_POST['pre31'];
	$pre32		= $_POST['pre32'];
	$pre33_1	= $_POST['pre33_1'];
	$pre33_2	= $_POST['pre33_2'];
	$pre33_3	= $_POST['pre33_3'];
	$pre33_4	= $_POST['pre33_4'];
	$pre33_5	= $_POST['pre33_5'];


	$sql = mysql_query("INSERT INTO actividades(email,pre31,pre32,pre33_1,pre33_2,pre33_3,pre33_4,pre33_5) 
		VALUES ('$email','$pre31','$pre32','$pre33_1','$pre33_2','$pre33_3','$pre33_4','$pre33_5')",$conexion);
	//print_r($sql);


	if ($sql) {
		header("Location:form4.php?email=$email");
	}
	else {
		header("Location:form4.php");
	}
?>