<?php

include("conexion.php");


$con=conectar();

$rutdni=$_GET['id'];

$sql="DELETE FROM usuario WHERE rutdni='$rutdni'";
$query= mysqli_query($con,$sql);

    if($query)
    {
        Header("Location: usuario.php");
    }

?>