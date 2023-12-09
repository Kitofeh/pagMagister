<?php

include_once("../../conexion.php");
$con = conectar();

$id=$_GET['id'];

$sql="DELETE FROM calendario_eventos WHERE ID_EVENTO='$id'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: CalendarioDeEventos.php");
}

?>