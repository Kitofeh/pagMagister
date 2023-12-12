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
$GRADO= $_POST["GRADO"];
$ANO_GRADUACION= $_POST["ANO_GRADUACION"];
$CAMPO_ESTUDIO= $_POST["CAMPO_ESTUDIO"];


$sql = "UPDATE formulario_postulacion SET NOMBRE = '$NOMBRE', FECHA_NAC = '$FECHA_NAC', GENERO = '$GENERO', CORREO= '$CORREO', TELEFONO='$TELEFONO' ,  DIRECCION= '$DIRECCION', INSTITUCION = '$INSTITUCION' , GRADO ='$GRADO', ANO_GRADUACION='$ANO_GRADUACION', CAMPO_ESTUDIO= '$CAMPO_ESTUDIO'        
WHERE RUT = $RUT ";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: formulario_postulacion.php");
} else {
    echo "NO SE LOGRARON ACTUALIZAR LOS DATOS";
}
?>
