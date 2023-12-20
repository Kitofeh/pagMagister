<?php

include("../../conexion.php");
$con = conectar();

$RUT = $_REQUEST['IdEditar'];

$RUT2 = $_POST['RUT'];
$NOMBRE= $_POST["NOMBRE"];
$FECHA_NAC = $_POST["FECHA_NAC"];
$GENERO = $_POST["GENERO"];
$CORREO = $_POST["CORREO"];
$TELEFONO = $_POST["TELEFONO"];
$DIRECCION = $_POST["DIRECCION"];
$INSTITUCION = $_POST["INSTITUCION"];


$sql = "UPDATE formulario_contacto SET RUT = '$RUT2', NOMBRE = '$NOMBRE', FECHA_NAC = '$FECHA_NAC', GENERO = '$GENERO', CORREO= '$CORREO', TELEFONO='$TELEFONO' ,  DIRECCION= '$DIRECCION', INSTITUCION = '$INSTITUCION'          
WHERE RUT = $RUT";

$resultado = $con->query($sql);

if($resultado){
    // Iniciar la sesión si aún no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Guardar el nombre del usuario en una variable de sesión
    $_SESSION['modificar_contacto'] = $NOMBRE;
    Header("Location: formulario_contacto.php");

}else {
}
?>
