<?php

include_once("../../conexion.php");
$con = conectar();

$id=$_GET['id'];

$sql = "UPDATE `noticias` SET
            `VISIBILIDAD` = 'NO'
        WHERE `ID_NOTICIA` = $id";

$query=mysqli_query($con,$sql);

if($query){
    Header("Location: PanelNoticias.php");
}

?>