<?php
include("../../conexion.php");
$con = conectar();

$COD_INVESTIGACION = $_REQUEST['id'];

$sql = "DELETE FROM investigaciones WHERE COD_INVESTIGACION = $COD_INVESTIGACION";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: investigaciones.php");
} else {
    echo "NO SE ELIMINÓ EL DATO";
}
?>
