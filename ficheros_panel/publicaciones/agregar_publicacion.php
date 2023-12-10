<?php
include("../../conexion.php");
$con = conectar();

$COD_PUBLICACION = $_POST["COD_PUBLICACION"];
$AREA = $_POST["AREA"];
$COD_AUTOR = $_POST["COD_AUTOR"];
$COHORTE = $_POST["COHORTE"];
$COD_ESTUDIANTE = $_POST["COD_ESTUDIANTE"];
$TITULO = $_POST["TITULO"];
$INDEXACION = $_POST["INDEXACION"];
$FECHA = $_POST["FECHA"];
$EVENTO = $_POST["EVENTO"];


$sql = "INSERT INTO publicaciones (COD_PUBLICACION, AREA, COD_AUTOR, COHORTE, COD_ESTUDIANTE, TITULO, INDEXACION, FECHA, EVENTO) VALUES ('$COD_PUBLICACION', '$AREA', '$COD_AUTOR', '$COHORTE', '$COD_ESTUDIANTE', '$TITULO', '$INDEXACION', '$FECHA', '$EVENTO')";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: publicaciones.php");
} else {
    echo "NO SE LOGRARON INSERTAR LOS DATOS";
}
?>
