<?php
include("../../conexion.php");
$con = conectar();

$COD_PROYECTO = $_POST['COD_PROYECTO'];
$TITULO = $_POST['TITULO'];
$ANO = $_POST['ANO'];
$URL_PROYECTO = $_POST['URL_PROYECTO'];
$COD_AUTOR = $_POST['COD_AUTOR'];



$sql = "INSERT INTO proyectos (COD_PROYECTO, TITULO, ANO, URL_PROYECTO, COD_AUTOR) VALUES ('$COD_PROYECTO', '$TITULO', '$ANO', '$URL_PROYECTO', '$COD_AUTOR')";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: proyectos.php");
} else {
    echo "NO SE LOGRARON INSERTAR LOS DATOS. ERROR: " . $con->error;
}
?>