<?php
include_once("conexion.php");
$con = conectar();

$pregunta1 = $_POST['pregunta1'];
$pregunta2 = $_POST['pregunta2'];
$pregunta3 = $_POST['pregunta3'];
$pregunta4 = $_POST['pregunta4'];
$pregunta5 = $_POST['pregunta5'];
$pregunta6 = $_POST['pregunta6'];
$pregunta7 = $_POST['pregunta7'];


$query = mysqli_query($con, "INSERT INTO `feedback`(`PREGUNTA_1`, `PREGUNTA_2`, `PREGUNTA_3`, `PREGUNTA_4`, `PREGUNTA_5`, `PREGUNTA_6`, `PREGUNTA_7`) VALUES ('$pregunta1','$pregunta2','$pregunta3','$pregunta4','$pregunta5','$pregunta6','$pregunta7')");

Header("Location: index.php");