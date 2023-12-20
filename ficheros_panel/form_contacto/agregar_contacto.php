<?php
include("../../conexion.php");
$con = conectar();

$RUT = $_POST["RUT"];
$NOMBRE= $_POST["NOMBRE"];
$FECHA_NAC = $_POST["FECHA_NAC"];
$GENERO = $_POST["GENERO"];
$CORREO = $_POST["CORREO"];
$TELEFONO = $_POST["TELEFONO"];
$DIRECCION = $_POST["DIRECCION"];
$INSTITUCION = $_POST["INSTITUCION"];

$sql = "INSERT INTO formulario_contacto (RUT, NOMBRE, FECHA_NAC, GENERO, CORREO, TELEFONO, DIRECCION, INSTITUCION) 
VALUES ('$RUT', '$NOMBRE', '$FECHA_NAC', '$GENERO', '$CORREO', '$TELEFONO', '$DIRECCION', '$INSTITUCION')";

$resultado = $con->query($sql);

if($resultado){
    // Iniciar la sesión si aún no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Guardar el nombre del usuario en una variable de sesión
    $_SESSION['created_contacto'] = $NOMBRE;
    Header("Location: formulario_contacto.php");

}else {
}
?>
