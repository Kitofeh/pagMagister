<?php
include_once("../../conexion.php");
$con = conectar();

$ID_CLASE = $_POST['ID_CLASE'];
$NOMBRE_CLASE = $_POST['NOMBRE_CLASE'];
$LUGAR_CLASE = $_POST['LUGAR_CLASE'];
$NOMBRE_PROFESOR = $_POST['NOMBRE_PROFESOR'];
$UBICACION = $_POST['UBICACION'];

$query = mysqli_query($con, "UPDATE `horario_clases` SET `NOMBRE_CLASE`='$NOMBRE_CLASE', `LUGAR_CLASE`='$LUGAR_CLASE', `NOMBRE_PROFESOR`='$NOMBRE_PROFESOR', `UBICACION`='$UBICACION' WHERE `ID_CLASE` = '$ID_CLASE'");

//echo $NOMBRE_CLASE,$LUGAR,$NOMBRE_PROFESOR;

Header("Location: HorarioClases.php");