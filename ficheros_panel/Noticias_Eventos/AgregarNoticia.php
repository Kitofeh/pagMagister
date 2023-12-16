<?php
include_once("../../conexion.php");
$con = conectar();

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];
// Manejo del archivo de imagen
$img = addslashes(file_get_contents($_FILES["urlimg"]["tmp_name"]));

$query = mysqli_query($con, "INSERT INTO `noticias`(`FECHA`, `TITULO`, `DESCRIPCION`, `URL_IMG`) VALUES ('$fecha','$titulo','$descripcion','$img')");

Header("Location: PanelNoticias.php");