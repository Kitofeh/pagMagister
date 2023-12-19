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

if ($resultado) {
    header("Location: academicos.php");
} else {
    echo "NO SE LOGRARON INSERTAR LOS DATOS";
}
?>
