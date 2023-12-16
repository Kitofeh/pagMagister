<?php

include_once("../../conexion.php");
$con = conectar();

$id = $_REQUEST['id'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];
// Manejo del archivo de imagen
$img = addslashes(file_get_contents($_FILES["urlimg"]["tmp_name"]));
$visibilidad = $_POST['visibilidad'];

if (!empty($_FILES['urlimg']['tmp_name'])) {
    $img = addslashes(file_get_contents($_FILES['urlimg']['tmp_name']));
} else {
    $img = $row['urlimg'];
}


$sql = "UPDATE `noticias` SET
            `FECHA` = '$fecha',
            `TITULO` = '$titulo',
            `DESCRIPCION` = '$descripcion',
            `URL_IMG` = '$img',
            `VISIBILIDAD` = '$visibilidad'
        WHERE `ID_NOTICIA` = $id";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: PanelNoticias.php");
} else {
    echo "NO SE LOGRARON ACTUALIZAR LOS DATOS";
    echo $id,$titulo,$descripcion,$fecha;
}
?>