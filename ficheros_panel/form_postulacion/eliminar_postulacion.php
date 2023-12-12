<?php
include("../../conexion.php");
$con = conectar();

$COD_PUBLICACION = $_REQUEST['COD_PUBLICACION'];

$sql = "DELETE FROM publicaciones WHERE COD_PUBLICACION = $COD_PUBLICACION";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: publicaciones.php");
} else {
    echo "NO SE ELIMINÓ EL DATO";
}
?>
