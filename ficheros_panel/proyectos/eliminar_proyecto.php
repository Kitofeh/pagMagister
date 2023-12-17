<?php
include("../../conexion.php");
$con = conectar();

$COD_PROYECTO = $_REQUEST['COD_PROYECTO'];

$sql = "DELETE FROM proyectos WHERE COD_PROYECTO = $COD_PROYECTO";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: proyectos.php");
} else {
    echo "NO SE ELIMINÓ EL DATO";
}
?>
