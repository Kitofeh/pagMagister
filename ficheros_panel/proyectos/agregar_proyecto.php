<?php
include("../../conexion.php");
$con = conectar();

$COD_PROYECTO = $_POST['COD_PROYECTO'];
$AREA = $_POST['AREA'];
$TITULO = $_POST['TITULO'];
$FONDO = $_POST['FONDO'];
$ANO = $_POST['ANO'];
$URL_PROYECTO = $_POST['URL_PROYECTO'];
$COD_AUTOR = $_POST['COD_AUTOR'];



$sql = "INSERT INTO proyectos (COD_PROYECTO, AREA, TITULO,FONDO, ANO, URL_PROYECTO, COD_AUTOR) VALUES ('$COD_PROYECTO','$AREA', '$TITULO','$FONDO', '$ANO', '$URL_PROYECTO', '$COD_AUTOR')";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: proyectos.php");
} else {
    echo "NO SE LOGRARON INSERTAR LOS DATOS. ERROR: " . $con->error;
}
?>
