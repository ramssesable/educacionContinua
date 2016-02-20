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
		if ($status == 1) {
			$update=mysql_query("UPDATE user SET status='2' WHERE id=".$id);

			if ($update) {
				header("Location: usuarios.php?msj=1");
			}else{
				header("Location: usuarios.php?msj=2");
			}
		}else{
			$update=mysql_query("UPDATE user SET status='1' WHERE id=".$id);

			if ($update) {
				header("Location: usuarios.php?msj=1");
			}else{
				header("Location: usuarios.php?msj=2");
			}			
		}
	}else{
		header("Location: usuarios.php?msj=2");
	}

?>