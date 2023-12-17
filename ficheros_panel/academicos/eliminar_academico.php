<?php
include("../../conexion.php");
$con = conectar();

$COD_ACADEMICO = $_REQUEST['id'];

$sql = "DELETE FROM academicos WHERE COD_ACADEMICO = $COD_ACADEMICO";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: academicos.php");
} else {
    echo "NO SE ELIMINÓ EL DATO";
}
?>
