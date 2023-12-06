<?php


include("../../conexion.php");
$con = conectar();

$COD_ACADEMICO = $_REQUEST['IdEditar'];

$NOMBRE = $_POST['NOMBRE'];
$CORREO = $_POST['CORREO'];
$CARGO = $_POST['CARGO'];
$GRADO = $_POST['GRADO'];
$IMG_ACADEMICO = addslashes(file_get_contents($_FILES['IMG_ACADEMICO']['tmp_name']));

// Verifica si se ha cargado una nueva imagen
if (!empty($_FILES['IMG_ACADEMICO']['tmp_name'])) {
    // Se cargó una nueva imagen
    $IMG_ACADEMICO = addslashes(file_get_contents($_FILES['IMG_ACADEMICO']['tmp_name']));
} else {
    // No se cargó una nueva imagen, mantén la existente
    $IMG_ACADEMICO = $fila['IMG_ACADEMICO'];
}

$sql = "UPDATE academicos SET 
            NOMBRE = '$NOMBRE',
            CORREO = '$CORREO',
            CARGO = '$CARGO',
            GRADO = '$GRADO',
            IMG_ACADEMICO = '$IMG_ACADEMICO'
        WHERE COD_ACADEMICO = $COD_ACADEMICO";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: academicos.php");
} else {
    echo "NO SE LOGRARON ACTUALIZAR LOS DATOS";
}
?>
