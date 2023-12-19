<?php
include_once("../../conexion.php");
$con = conectar();

$ID_CLASE = $_POST['ID_CLASE'];
$NOMBRE_CLASE = $_POST['NOMBRE_CLASE'];
$LUGAR_CLASE = $_POST['LUGAR_CLASE'];
$NOMBRE_PROFESOR = $_POST['NOMBRE_PROFESOR'];
$UBICACION = $_POST['UBICACION'];

$consultaUbicacion = mysqli_query($con, "SELECT COUNT(*) as total FROM `horario_clases` WHERE `UBICACION`='$UBICACION' AND `ID_CLASE` != '$ID_CLASE'");
$resultadoUbicacion = mysqli_fetch_assoc($consultaUbicacion);
$ubicacionOcupada = $resultadoUbicacion['total'] > 0;


if ($ubicacionOcupada) {
    echo "<script>
            alert('La ubicación $UBICACION ya está ocupada. No se puede mover la clase.');
            window.location.href = 'HorarioClases.php';
          </script>";
} else {
    $query = mysqli_query($con, "UPDATE `horario_clases` SET `NOMBRE_CLASE`='$NOMBRE_CLASE', `LUGAR_CLASE`='$LUGAR_CLASE', `NOMBRE_PROFESOR`='$NOMBRE_PROFESOR', `UBICACION`='$UBICACION' WHERE `ID_CLASE` = '$ID_CLASE'");
    
    Header("Location: HorarioClases.php");
}




