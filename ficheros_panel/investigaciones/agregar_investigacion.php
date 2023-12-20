<?php
include("../../conexion.php");
$con = conectar();

$COD_INVESTIGACION = $_POST["COD_INVESTIGACION"];
$DESCRIPCION = $_POST["DESCRIPCION"];
$URL_INVESTIGACION = $_POST["URL_INVESTIGACION"];
$IMG_INVESTIGACION = addslashes(file_get_contents($_FILES["IMG_INVESTIGACION"]["tmp_name"]));

$sql = "INSERT INTO investigaciones (COD_INVESTIGACION, DESCRIPCION, URL_INVESTIGACION, IMG_INVESTIGACION) VALUES ('$COD_INVESTIGACION', '$DESCRIPCION', '$URL_INVESTIGACION', '$IMG_INVESTIGACION')";

$resultado = $con->query($sql);

if($resultado){
    // Iniciar la sesión si aún no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Guardar el nombre del usuario en una variable de sesión
    $_SESSION['created_investigacion'] = $COD_INVESTIGACION;
    Header("Location: investigaciones.php");

}else {
}
?>
