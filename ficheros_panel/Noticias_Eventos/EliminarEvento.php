<?php

include_once("../../conexion.php");
$con = conectar();

$id=$_GET['id'];

$sql="DELETE FROM calendario_eventos WHERE ID_EVENTO='$id'";
$query=mysqli_query($con,$sql);



if($query){
    // Iniciar la sesión si aún no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Guardar el nombre del usuario en una variable de sesión
    $_SESSION['eliminar_evento'] = "";
    Header("Location: CalendarioDeEventos.php");

}else {
}

?>