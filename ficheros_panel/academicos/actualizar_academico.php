<?php


include("../../conexion.php");
$con = conectar();

$COD_ACADEMICO = $_REQUEST['IdEditar'];

$COD_ACADEMICO2 = $_POST['COD_ACADEMICO'];
$NOMBRE = $_POST['NOMBRE'];
$CORREO = $_POST['CORREO'];
$CARGO = $_POST['CARGO'];
$GRADO = $_POST['GRADO'];
$IMG_ACADEMICO = addslashes(file_get_contents($_FILES['IMG_ACADEMICO']['tmp_name']));


if (!empty($_FILES['IMG_ACADEMICO']['tmp_name'])) {
    $IMG_ACADEMICO = addslashes(file_get_contents($_FILES['IMG_ACADEMICO']['tmp_name']));
} else {
    $IMG_ACADEMICO = $fila['IMG_ACADEMICO'];
}

$sql = "UPDATE academicos SET
            COD_ACADEMICO = '$COD_ACADEMICO2',
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
