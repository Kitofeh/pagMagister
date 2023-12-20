<?php
include("../../conexion.php");
$con = conectar();

$COD_ACADEMICO = $_POST["COD_ACADEMICO"];
$NOMBRE = $_POST["NOMBRE"];
$CORREO = $_POST["CORREO"];
$CARGO = $_POST["CARGO"];
$GRADO = $_POST["GRADO"];

// Manejo del archivo de imagen
$IMG_ACADEMICO = addslashes(file_get_contents($_FILES["IMG_ACADEMICO"]["tmp_name"]));

$sql = "INSERT INTO academicos (COD_ACADEMICO, NOMBRE, CORREO, CARGO, GRADO, IMG_ACADEMICO) VALUES ('$COD_ACADEMICO', '$NOMBRE', '$CORREO', '$CARGO', '$GRADO', '$IMG_ACADEMICO')";

$resultado = $con->query($sql);

if($resultado){
    // Iniciar la sesión si aún no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Guardar el nombre del usuario en una variable de sesión
    $_SESSION['created_academico'] = $NOMBRE;
    Header("Location: academicos.php");

}else {
}
?>
