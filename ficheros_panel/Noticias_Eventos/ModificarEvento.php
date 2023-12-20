<?php
include_once("../../conexion.php");
$con = conectar();

$id_evento = $_POST['idevento'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fechaInicio = $_POST['fechainicio'];
$fechaInicio = str_replace("T", "-", $fechaInicio);
$fechaFin = $_POST['fechafin'];
$fechaFin = str_replace("T", "-", $fechaFin);
$ubicacion = $_POST['ubicacion'];
$tipo = $_POST['tipo'];

$query = mysqli_query($con, "UPDATE `calendario_eventos` SET `TITULO`='$titulo', `DESCRIPCION`='$descripcion', `FECHA_INICIO`='$fechaInicio', `FECHA_FIN`='$fechaFin', `UBICACION`='$ubicacion', `TIPO_EVENTO`='$tipo' WHERE `ID_EVENTO` = '$id_evento'");

//echo $titulo,$descripcion,$fechaInicio,$fechaFin,$ubicacion,$tipo;

if($query){
    // Iniciar la sesión si aún no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Guardar el nombre del usuario en una variable de sesión
    $_SESSION['modificar_evento'] = $titulo;
    Header("Location: CalendarioDeEventos.php");

}else {
}
