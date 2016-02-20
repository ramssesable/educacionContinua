<?php  
	include('sesion.php');
	include('conex.php');

	$id=$_GET['id'];

	$ver = mysql_query("SELECT * FROM user WHERE id=".$id);
	while ($row=mysql_fetch_assoc($ver)) {
		$ids=$row['id'];
		$status=$row['status'];
	}

	if ($ids == $id) {
		$delete=mysql_query("DELETE FROM user WHERE id=".$id);

		if ($delete) {
			header("Location: usuarios.php?msj=3");
		}else{
			header("Location: usuarios.php?msj=2");
		}
	}else{
		header("Location: usuarios.php?msj=2");
	}

?>