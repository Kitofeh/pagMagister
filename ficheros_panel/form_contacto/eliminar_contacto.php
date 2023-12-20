<?php
include("../../conexion.php");
$con = conectar();

$RUT = $_REQUEST['id'];

$sql = "DELETE FROM formulario_contacto WHERE RUT = $RUT";

$resultado = $con->query($sql);

if($resultado){
    // Iniciar la sesión si aún no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Guardar el nombre del usuario en una variable de sesión
    $_SESSION['eliminar_contacto'] = "";
    Header("Location: formulario_contacto.php");

}else {
}
?>
