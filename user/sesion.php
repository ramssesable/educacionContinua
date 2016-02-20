<?php
//Inicializar una sesion de PHP
session_start();

//Validar que el usuario este logueado y exista un UID
if ( ! ($_SESSION['autenticado'] == 'SI' && isset($_SESSION['uid'])) )
{
    //En caso de que el usuario no este autenticado, crear un formulario y redireccionar a la 
    //pantalla de login, enviando un codigo de error
?>
        <form name="formulario" method="post" action="index.php">
            <input type="hidden" name="msg_error" value="2">
        </form>
        <script type="text/javascript"> 
            document.formulario.submit();
        </script>
<?php
}

    //Conectar BD
    include("conex.php");

    //Sacar datos del usuario que ha iniciado sesion
    $sql = "SELECT  nombre,ap_pat,ap_mat,email,id_usuario
            FROM datos_personales
            WHERE id_usuario = '".$_SESSION['uid']."'";         
    $result = mysql_query($sql); 

    $nombreUsuario = "";

    //Formar el nombre completo del usuario
    if( $fila = mysql_fetch_array($result) ){
        $Usuario = $fila['nombre']." ".$fila['ap_pat'];
        $id = $fila['id_usuario'];
        $email = $fila['email'];
    }
    
//Cerrrar conexion a la BD
mysql_close($conexion);
?>