<?php


include("../../conexion.php");
$con = conectar();

$COD_PROYECTO = $_REQUEST['IdEditar'];

$COD_PROYECTO2 = $_POST['COD_PROYECTO'];
$AREA =  $_POST['AREA'];
$TITULO = $_POST['TITULO'];
$FONDO = $_POST['FONDO'];
$ANO = $_POST['ANO'];
$URL_PROYECTO = $_POST['URL_PROYECTO'];
$COD_AUTOR = $_POST['COD_AUTOR'];


$sql = "UPDATE proyectos SET
            COD_PROYECTO = '$COD_PROYECTO2',
            AREA = '$AREA',
            TITULO = '$TITULO',
            FONDO = '$FONDO',
            ANO = '$ANO',
            URL_PROYECTO = '$URL_PROYECTO',
            COD_AUTOR = '$COD_AUTOR'
        WHERE COD_PROYECTO = $COD_PROYECTO";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: proyectos.php");
} else {
    echo "NO SE LOGRARON ACTUALIZAR LOS DATOS" . $con->error;
}
?>
