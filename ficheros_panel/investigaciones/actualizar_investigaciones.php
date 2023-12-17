<?php


include("../../conexion.php");
$con = conectar();

$COD_INVESTIGACION = $_REQUEST['IdEditar'];

$COD_INVESTIGACION2 = $_POST['COD_INVESTIGACION'];
$DESCRIPCION = $_POST['DESCRIPCION'];
$URL_INVESTIGACION = $_POST['URL_INVESTIGACION'];
$IMG_INVESTIGACION = addslashes(file_get_contents($_FILES['IMG_INVESTIGACION']['tmp_name']));


if (!empty($_FILES['IMG_INVESTIGACION']['tmp_name'])) {
    $IMG_INVESTIGACION = addslashes(file_get_contents($_FILES['IMG_INVESTIGACION']['tmp_name']));
} else {
    $IMG_INVESTIGACION = $fila['IMG_INVESTIGACION'];
}

$sql = "UPDATE investigaciones SET
            COD_INVESTIGACION = '$COD_INVESTIGACION2',
            DESCRIPCION = '$DESCRIPCION',
            URL_INVESTIGACION = '$URL_INVESTIGACION',
            IMG_INVESTIGACION = '$IMG_INVESTIGACION'
        WHERE COD_INVESTIGACION = $COD_INVESTIGACION";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: investigaciones.php");
} else {
    echo "NO SE LOGRARON ACTUALIZAR LOS DATOS";
}
?>
