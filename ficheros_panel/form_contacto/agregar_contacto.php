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

if ($resultado) {
    header("Location: formulario_contacto.php");
} else {
    echo "NO SE LOGRARON INSERTAR LOS DATOS";
}
?>
