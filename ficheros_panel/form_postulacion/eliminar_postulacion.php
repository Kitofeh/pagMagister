<?php
include("../../conexion.php");
$con = conectar();

$RUT = $_REQUEST['id'];

$sql = "DELETE FROM formulario_postulacion WHERE RUT = $RUT";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: formulario_postulacion.php");
} else {
    echo "NO SE ELIMINÓ EL DATO";
}
?>
