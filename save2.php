<?php  

	include("conex.php");



	$email 		= $_POST['email'];
	$posgrado 	= $_POST['posgrado'];
	$pre6 		= $_POST['pre6'];
	if ($pre6 == 1) {
		$pre7 	= $_POST['pre7'];
		$pre8 	= $_POST['pre8'];
		$pre9 	= "no";
		$pre90 	= "no";
		$pre10 	= "no";
		$pre11 	= "no";
	}else if ($pre6 == 0){
		$pre9 	= $_POST['pre9'];
		if ($pre9 == 13)
			{$pre90 	= $_POST['pre90'];}
		else
			{$pre90 	= "no";}
		$pre10 	= $_POST['pre10'];
		$pre11 	= $_POST['pre11'];
		$pre7 	= "no";
		$pre8 	= "no";
	}
	$pre12 		= $_POST['pre12'];
	$pre13 		= $_POST['pre13'];
	$pre14 		= $_POST['pre14'];
	if ($pre14 == 1){
		$pre14_area	= $_POST['pre14_area'];
		if ($pre14_area == 8)
			{$pre14_area0= $_POST['pre14_area0'];}
		else
			{$pre14_area0= "no";}
		$pre14_inst = $_POST['pre14_inst'];
	}else {
		$pre14_area = "no";
		$pre14_area0= "no";
		$pre14_inst = "no";
	}
	$pre15 		= $_POST['pre15'];
	$pre16 		= $_POST['pre16'];
	$pre17 		= $_POST['pre17'];
	if ($pre17 == 6)
		$pre170 = $_POST['pre170'];
	else
		$pre170 = "no";
	$pre18 		= $_POST['pre18'];
	$pre19 		= $_POST['pre19'];
	$pre20 		= $_POST['pre20'];
	$pre21 		= $_POST['pre21'];
	$pre22 		= $_POST['pre22'];
	$pre23 		= $_POST['pre23'];
	$pre24_1	= $_POST['pre24_1'];
	$pre24_2	= $_POST['pre24_2'];
	$pre24_3	= $_POST['pre24_3'];
	$pre24_4	= $_POST['pre24_4'];
	$pre24_5	= $_POST['pre24_5'];
	$pre24_6	= $_POST['pre24_6'];
	$pre24_7	= $_POST['pre24_7'];
	$pre24_8	= $_POST['pre24_8'];
	$pre24_9	= $_POST['pre24_9'];
	$pre25_1	= $_POST['pre25_1'];
	$pre25_2	= $_POST['pre25_2'];
	$pre25_3	= $_POST['pre25_3'];
	$pre26 		= $_POST['pre26'];

	$sql = mysql_query("INSERT INTO datos_posgrado(email,posgrado,pre6,pre7,pre8,pre9,pre90,pre10,pre11,pre12,pre13,pre14,pre14_area,pre14_area0,pre14_inst,pre15,pre16,pre17,pre170,pre18,pre19,pre20,pre21,pre22,pre23,pre24_1,pre24_2,pre24_3,pre24_4,pre24_5,pre24_6,pre24_7,pre24_8,pre24_9,pre25_1,pre25_2,pre25_3,pre26) 

		VALUES ('$email','$posgrado','$pre6','$pre7','$pre8','$pre9','$pre90','$pre10','$pre11','$pre12','$pre13','$pre14','$pre14_area','$pre14_area0','$pre14_inst','$pre15','$pre16','$pre17','$pre170','$pre18','$pre19','$pre20','$pre21','$pre22','$pre23','$pre24_1','$pre24_2','$pre24_3','$pre24_4','$pre24_5','$pre24_6','$pre24_7','$pre24_8','$pre24_9','$pre25_1','$pre25_2','$pre25_3','$pre26')",$conexion);



	if ($sql) {

		header("Location:form3.php?email=$email");

	}

	else {

		header("Location:form3.php");

	}

?>