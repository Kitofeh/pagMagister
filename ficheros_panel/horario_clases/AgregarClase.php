<?php
include_once("../../conexion.php");
$con = conectar();


$NOMBRE_CLASE = $_POST['NOMBRE_CLASE'];
$LUGAR_CLASE = $_POST['LUGAR_CLASE'];
$NOMBRE_PROFESOR = $_POST['NOMBRE_PROFESOR'];
$UBICACION = $_POST['UBICACION'];

$query = mysqli_query($con, "INSERT INTO `horario_clases`(`NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`,`UBICACION`) VALUES ('$NOMBRE_CLASE','$LUGAR_CLASE','$NOMBRE_PROFESOR','$UBICACION')");

if($query){
    // Iniciar la sesión si aún no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Guardar el nombre del usuario en una variable de sesión
    $_SESSION['created_clase'] = $NOMBRE_CLASE;
    Header("Location: HorarioClases.php");

}else {
}

?>