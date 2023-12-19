<?php
include("../../conexion.php");
$con = conectar();

$RUT = $_REQUEST['RUT'];

$sql = "DELETE FROM formulario_contacto WHERE RUT = $RUT";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: formulario_contacto.php");
} else {
    echo "NO SE ELIMINÓ EL DATO";
}
?>
