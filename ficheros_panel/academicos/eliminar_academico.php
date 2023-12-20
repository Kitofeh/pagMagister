<?php
include("../../conexion.php");
$con = conectar();

$COD_ACADEMICO = $_REQUEST['id'];

$sql = "DELETE FROM academicos WHERE COD_ACADEMICO = $COD_ACADEMICO";

$resultado = $con->query($sql);

if($resultado){
    // Iniciar la sesión si aún no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Guardar el nombre del usuario en una variable de sesión
    $_SESSION['eliminar_academico'] = "";
    Header("Location: academicos.php");

}else {
}


?>
