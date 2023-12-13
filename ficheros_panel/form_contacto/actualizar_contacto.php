<?php

include("../../conexion.php");
$con = conectar();

$RUT = $_REQUEST['IdEditar'];
$NOMBRE= $_POST["NOMBRE"];
$FECHA_NAC = $_POST["FECHA_NAC"];
$GENERO = $_POST["GENERO"];
$CORREO = $_POST["CORREO"];
$TELEFONO = $_POST["TELEFONO"];
$DIRECCION = $_POST["DIRECCION"];
$INSTITUCION = $_POST["INSTITUCION"];

$sql = "UPDATE formulario_contacto SET NOMBRE = '$NOMBRE', FECHA_NAC = '$FECHA_NAC', GENERO = '$GENERO', CORREO= '$CORREO', TELEFONO='$TELEFONO' ,  DIRECCION= '$DIRECCION', INSTITUCION = '$INSTITUCION'          
WHERE RUT = $RUT";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: formulario_contacto.php");
} else {
    echo "NO SE LOGRARON ACTUALIZAR LOS DATOS";
}
?>
