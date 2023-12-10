<?php

include("../../conexion.php");
$con = conectar();

$COD_PUBLICACION = $_REQUEST['IdEditar'];
$AREA = $_POST["AREA"];
$COD_AUTOR = $_POST["COD_AUTOR"];
$COHORTE = $_POST["COHORTE"];
$COD_ESTUDIANTE = $_POST["COD_ESTUDIANTE"];
$TITULO = $_POST["TITULO"];
$INDEXACION = $_POST["INDEXACION"];
$FECHA = $_POST["FECHA"];
$EVENTO = $_POST["EVENTO"];

$sql = "UPDATE publicaciones SET AREA = '$AREA', COD_AUTOR = '$COD_AUTOR', COHORTE = '$COHORTE', COD_ESTUDIANTE= '$COD_ESTUDIANTE', TITULO='$TITULO' ,  INDEXACION= '$INDEXACION', FECHA = '$FECHA',  EVENTO= '$EVENTO',           
WHERE COD_PUBLICACION = $COD_PUBLICACION";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: publicaciones.php");
} else {
    echo "NO SE LOGRARON ACTUALIZAR LOS DATOS";
}
?>
