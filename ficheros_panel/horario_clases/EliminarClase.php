<?php

include_once("../../conexion.php");
$con = conectar();

$id=$_GET['id'];

$sql="DELETE FROM horario_clases WHERE ID_CLASE='$id'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: HorarioClases.php");
}

?>