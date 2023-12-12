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

$sql = "INSERT INTO form_ (COD_PUBLICACION, AREA, COD_AUTOR, COHORTE, COD_ESTUDIANTE, TITULO, INDEXACION, FECHA, EVENTO) 
VALUES ('$COD_PUBLICACION', '$AREA', '$COD_AUTOR', '$COHORTE', '$COD_ESTUDIANTE', '$TITULO', '$INDEXACION', '$FECHA', '$EVENTO')";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: publicaciones.php");
} else {
    echo "NO SE LOGRARON INSERTAR LOS DATOS";
}
?>
