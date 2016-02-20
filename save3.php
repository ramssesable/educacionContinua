<?php  
	include("conex.php");

	$email		= $_POST['email'];
	$pre27_1	= $_POST['pre27_1'];
	$pre27_2	= $_POST['pre27_2'];
	$pre27_3	= $_POST['pre27_3'];
	$pre27_4	= $_POST['pre27_4'];
	$pre27_5	= $_POST['pre27_5'];
	$pre27_6	= $_POST['pre27_6'];
	$pre27_7	= $_POST['pre27_7'];
	$pre27_8	= $_POST['pre27_8'];
	$pre27_9	= $_POST['pre27_9'];
	$pre27_10	= $_POST['pre27_10'];
	$pre27_11	= $_POST['pre27_11'];
	$pre27_12	= $_POST['pre27_12'];
	$pre27_13	= $_POST['pre27_13'];
	$pre27_14	= $_POST['pre27_14'];
	$pre27_15	= $_POST['pre27_15'];
	$pre27_16	= $_POST['pre27_16'];
	$pre27_17	= $_POST['pre27_17'];
	$pre27_18	= $_POST['pre27_18'];
	$pre27_19	= $_POST['pre27_19'];
	$pre27_20	= $_POST['pre27_20'];
	$pre28		= $_POST['pre28'];
	$pre29		= $_POST['pre29'];
	$pre30		= $_POST['pre30'];


	$sql = mysql_query("INSERT INTO ens_y_apren(email,pre27_1,pre27_2,pre27_3,pre27_4,pre27_5,pre27_6,pre27_7,pre27_8,pre27_9,pre27_10,pre27_11,pre27_12,pre27_13,pre27_14,pre27_15,pre27_16,pre27_17,pre27_18,pre27_19,pre27_20,pre28,pre29,pre30) 
		VALUES ('$email','$pre27_1','$pre27_2','$pre27_3','$pre27_4','$pre27_5','$pre27_6','$pre27_7','$pre27_8','$pre27_9','$pre27_10','$pre27_11','$pre27_12','$pre27_13','$pre27_14','$pre27_15','$pre27_16','$pre27_17','$pre27_18','$pre27_19','$pre27_20','$pre28','$pre29','$pre30')",$conexion);
	//print_r($sql);


	if ($sql) {
		header("Location:form4.php?email=$email");
	}
	else {
		header("Location:form4.php");
	}
?>