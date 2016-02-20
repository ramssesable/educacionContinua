<?php

	include("conex.php");  

	//error_reporting(E_ALL);
	//ini_set('display_errors', '1');
		

	$usr = $_POST['email'];

	$pw = $_POST['password'];

	$pw_enc = md5($pw);

	

	$sql = "SELECT id_usuario FROM datos_personales WHERE email = '".$usr."' AND password = '".$pw_enc."' ";	
	
	$result	= mysql_query($sql, $conexion)or die(mysql_error()); 

	$uid = "";

	if( $fila=mysql_fetch_array($result) )

	{			

		$uid = $fila['id_usuario'];

		session_start();

		$_SESSION['autenticado']    = 'SI';

		$_SESSION['uid']       		= $uid;

?>

		<form name="formulario" method="post" action="inicio.php">

			<input type="hidden" name="idUsr" value='<?php echo $uid ?>' />

		</form>

<?php

	}

	else {

?>

		<form name="formulario" method="post" action="index.php">

			<input type="hidden" name="msg_error" value="1">

		</form>

<?php

	}

?>

					

<script type="text/javascript"> 

	document.formulario.submit();

</script>