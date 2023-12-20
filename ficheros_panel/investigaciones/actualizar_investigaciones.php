<?php


include("../../conexion.php");
$con = conectar();

$COD_INVESTIGACION = $_REQUEST['IdEditar'];

$COD_INVESTIGACION2 = $_POST['COD_INVESTIGACION'];
$DESCRIPCION = $_POST['DESCRIPCION'];
$URL_INVESTIGACION = $_POST['URL_INVESTIGACION'];



// Verifica si se ha subido un nuevo archivo
$IMG_INVESTIGACION = "";
if ($_FILES['IMG_INVESTIGACION']['size'] > 0) {
    $IMG_INVESTIGACION = addslashes(file_get_contents($_FILES['IMG_INVESTIGACION']['tmp_name']));
}

$sql = "UPDATE investigaciones SET
            COD_INVESTIGACION = '$COD_INVESTIGACION2',
            DESCRIPCION = '$DESCRIPCION',
            URL_INVESTIGACION = '$URL_INVESTIGACION'";

// Agrega la actualización de la imagen solo si se ha subido un nuevo archivo
if ($IMG_INVESTIGACION !== "") {
    $sql .= ", IMG_INVESTIGACION = '$IMG_INVESTIGACION'";
}

$sql .= " WHERE COD_INVESTIGACION = $COD_INVESTIGACION";


// Ejecuta la consulta
$resultado = $con->query($sql);

// Verifica el resultado y redirige
if($resultado){
    // Iniciar la sesión si aún no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Guardar el nombre del usuario en una variable de sesión
    $_SESSION['modificar_investigacion'] = $COD_INVESTIGACION2;
    Header("Location: investigaciones.php");

}else {
}


?>
