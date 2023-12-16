<?php

include_once("../../conexion.php");
$con = conectar();

$id=$_GET['id'];

$sql="DELETE FROM noticias WHERE ID_NOTICIA='$id'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: PanelNoticias.php");
}

?>