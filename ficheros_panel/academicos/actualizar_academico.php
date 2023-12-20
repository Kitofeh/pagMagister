<?php
// ...

include("../../conexion.php");
$con = conectar();

$COD_ACADEMICO = $_REQUEST['IdEditar'];

$COD_ACADEMICO2 = $_POST['COD_ACADEMICO'];
$NOMBRE = $_POST['NOMBRE'];
$CORREO = $_POST['CORREO'];
$CARGO = $_POST['CARGO'];
$GRADO = $_POST['GRADO'];

// Verifica si se ha subido un nuevo archivo
$IMG_ACADEMICO = "";
if ($_FILES['IMG_ACADEMICO']['size'] > 0) {
    $IMG_ACADEMICO = addslashes(file_get_contents($_FILES['IMG_ACADEMICO']['tmp_name']));
}

// Construye la consulta SQL
$sql = "UPDATE academicos SET
            COD_ACADEMICO = '$COD_ACADEMICO2',
            NOMBRE = '$NOMBRE',
            CORREO = '$CORREO',
            CARGO = '$CARGO',
            GRADO = '$GRADO'";

// Agrega la actualización de la imagen solo si se ha subido un nuevo archivo
if ($IMG_ACADEMICO !== "") {
    $sql .= ", IMG_ACADEMICO = '$IMG_ACADEMICO'";
}

$sql .= " WHERE COD_ACADEMICO = $COD_ACADEMICO";

// Ejecuta la consulta
$resultado = $con->query($sql);

if($resultado){
    // Iniciar la sesión si aún no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Guardar el nombre del usuario en una variable de sesión
    $_SESSION['modificar_academico'] = $NOMBRE;
    Header("Location: academicos.php");

}else {
}
?>