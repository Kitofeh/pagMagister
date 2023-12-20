<?php
include("../../conexion.php");
$con = conectar();

$COD_PROYECTO = $_REQUEST['id'];

$sql = "DELETE FROM proyectos WHERE COD_PROYECTO = $COD_PROYECTO";

$resultado = $con->query($sql);

if($resultado){
    // Iniciar la sesión si aún no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Guardar el nombre del usuario en una variable de sesión
    $_SESSION['eliminar_proyecto'] = "";
    Header("Location: proyectos.php");

}else {
}
?>
