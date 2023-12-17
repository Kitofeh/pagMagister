<?php
include("../../conexion.php");
$con = conectar();

$COD_INVESTIGACION = $_POST["COD_INVESTIGACION"];
$DESCRIPCION = $_POST["DESCRIPCION"];
$URL_INVESTIGACION = $_POST["URL_INVESTIGACION"];
$IMG_INVESTIGACION = addslashes(file_get_contents($_FILES["IMG_INVESTIGACION"]["tmp_name"]));

$sql = "INSERT INTO investigaciones (COD_INVESTIGACION, DESCRIPCION, URL_INVESTIGACION, IMG_INVESTIGACION) VALUES ('$COD_INVESTIGACION', '$DESCRIPCION', '$URL_INVESTIGACION', '$IMG_INVESTIGACION')";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: investigaciones.php");
} else {
    echo "NO SE LOGRARON INSERTAR LOS DATOS";
}
?>
