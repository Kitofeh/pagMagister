<?php
include("../../conexion.php");
$con = conectar();

$titulo = $_POST['titulo'];
$cuerpo = $_POST['cuerpo'];

$query = mysqli_query($con, "UPDATE noticia_importante SET titulo='$titulo', cuerpo='$cuerpo' WHERE id='1'");

Header("Location: ../../index.php");

