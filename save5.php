<?php  
	include("conex.php");

	$email		= $_POST['email'];
	$pre34		= $_POST['pre34'];
	if ($pre34 == "si")
		$pre34_cual	= $_POST['pre34_cual'];
	else
		$pre34_cual = "0";
	$pre35		= $_POST['pre35'];
	if ($pre35 == "Si")
		$pre36		= $_POST['pre36'];
	else
		$pre36		= 0;
	$pre37_1	= $_POST['pre37_1'];
	$pre37_2	= $_POST['pre37_2'];
	$pre37_3	= $_POST['pre37_3'];
	$pre38		= $_POST['pre38'];
	$pre39_1	= $_POST['pre39_1'];
	$pre39_2	= $_POST['pre39_2'];
	$pre39_3	= $_POST['pre39_3'];
	$pre39_4	= $_POST['pre39_4'];
	$pre40		= $_POST['pre40'];
	$pre41		= $_POST['pre41'];
	$pre42		= $_POST['pre42'];


	$sql = mysql_query("INSERT INTO compromisoytutoria(email,pre34,pre34_cual,pre35,pre36,pre37_1,pre37_2,pre37_3,pre38,pre39_1,pre39_2,pre39_3,pre39_4,pre40,pre41,pre42) 
		VALUES ('$email','$pre34','$pre34_cual','$pre35','$pre36',$pre37_1,$pre37_2,$pre37_3,'$pre38',$pre39_1,$pre39_2,$pre39_3,$pre39_4,'$pre40','$pre41',$pre42)",$conexion);
	//print_r($sql);


	if ($sql) {
		header("Location:form6.php?email=$email");
	}
	else {
		header("Location:form6.php?");
	}
?>