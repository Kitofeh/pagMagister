<?php
include("../../conexion.php");
$con = conectar();

$COD_PUBLICACION = $_REQUEST['id'];

$sql = "DELETE FROM publicaciones WHERE COD_PUBLICACION = $COD_PUBLICACION";

$resultado = $con->query($sql);

if($resultado){
    // Iniciar la sesión si aún no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Guardar el nombre del usuario en una variable de sesión
    $_SESSION['eliminar_publicacion'] = "";
    Header("Location: publicaciones.php");

}else {
}
?>
