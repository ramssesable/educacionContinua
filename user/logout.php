<?php



session_start();

// Destruye todas las variables de la sesion

session_unset();

// Finalmente, destruye la sesion

session_destroy();



//Redireccionar a la pagina de login

//header ("Location: inicio.php");



?>

<form name="formulario" method="post" action="index.php">

    <input type="hidden" name="msg_error" value="3">

</form>

<script type="text/javascript"> 

    document.formulario.submit();

</script>