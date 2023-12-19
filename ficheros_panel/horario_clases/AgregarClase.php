<?php
include_once("../../conexion.php");
$con = conectar();


$NOMBRE_CLASE = $_POST['NOMBRE_CLASE'];
$LUGAR_CLASE = $_POST['LUGAR_CLASE'];
$NOMBRE_PROFESOR = $_POST['NOMBRE_PROFESOR'];
$UBICACION = $_POST['UBICACION'];

$query = mysqli_query($con, "INSERT INTO `horario_clases`(`NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`,`UBICACION`) VALUES ('$NOMBRE_CLASE','$LUGAR_CLASE','$NOMBRE_PROFESOR','$UBICACION')");

//echo $NOMBRE_CLASE,$LUGAR,$NOMBRE_PROFESOR;

Header("Location: HorarioClases.php");