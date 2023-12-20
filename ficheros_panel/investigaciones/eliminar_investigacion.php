<?php
include("../../conexion.php");
$con = conectar();

$COD_INVESTIGACION = $_REQUEST['id'];

$sql = "DELETE FROM investigaciones WHERE COD_INVESTIGACION = $COD_INVESTIGACION";

$resultado = $con->query($sql);

if($resultado){
    // Iniciar la sesión si aún no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Guardar el nombre del usuario en una variable de sesión
    $_SESSION['eliminar_investigacion'] = "";
    Header("Location: investigaciones.php");

}else {
}
?>
