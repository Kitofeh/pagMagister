<?php
include("../../conexion.php");
$con = conectar();

$COD_PROYECTO = $_POST['COD_PROYECTO'];
$AREA = $_POST['AREA'];
$TITULO = $_POST['TITULO'];
$FONDO = $_POST['FONDO'];
$ANO = $_POST['ANO'];
$URL_PROYECTO = $_POST['URL_PROYECTO'];
$COD_AUTOR = $_POST['COD_AUTOR'];



$sql = "INSERT INTO proyectos (COD_PROYECTO, AREA, TITULO,FONDO, ANO, URL_PROYECTO, COD_AUTOR) VALUES ('$COD_PROYECTO','$AREA', '$TITULO','$FONDO', '$ANO', '$URL_PROYECTO', '$COD_AUTOR')";

$resultado = $con->query($sql);

if($resultado){
    // Iniciar la sesión si aún no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Guardar el nombre del usuario en una variable de sesión
    $_SESSION['created_proyecto'] = $TITULO;
    Header("Location: proyectos.php");

}else {
}
?>
