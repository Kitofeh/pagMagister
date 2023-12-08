<?php
include("../../conexion.php");
$con = conectar();

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fechaInicio = $_POST['fechainicio'];
$fechaFin = $_POST['fechafin'];
$ubicacion = $_POST['ubicacion'];
$tipo = $_POST['tipo'];

$query = mysqli_query($con, "INSERT INTO `calendario_eventos`(`TITULO`, `DESCRIPCION`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO`) VALUES ('$titulo','$descripcion','$fechaInicio','$fechaFin','$ubicacion','$tipo')");

//echo $titulo,$descripcion,$fechaInicio,$fechaFin,$ubicacion,$tipo;

Header("Location: CalendarioDeEventos.php");