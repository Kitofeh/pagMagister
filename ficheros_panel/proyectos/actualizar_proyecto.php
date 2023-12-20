<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<?php


include("../../conexion.php");
$con = conectar();

$COD_PROYECTO = $_REQUEST['IdEditar'];

$COD_PROYECTO2 = $_POST['COD_PROYECTO'];
$AREA =  $_POST['AREA'];
$TITULO = $_POST['TITULO'];
$FONDO = $_POST['FONDO'];
$ANO = $_POST['ANO'];
$URL_PROYECTO = $_POST['URL_PROYECTO'];
$COD_AUTOR = $_POST['COD_AUTOR'];


$sql = "UPDATE proyectos SET
            COD_PROYECTO = '$COD_PROYECTO2',
            AREA = '$AREA',
            TITULO = '$TITULO',
            FONDO = '$FONDO',
            ANO = '$ANO',
            URL_PROYECTO = '$URL_PROYECTO',
            COD_AUTOR = '$COD_AUTOR'
        WHERE COD_PROYECTO = $COD_PROYECTO";

$resultado = $con->query($sql);

if($resultado){
    // Iniciar la sesión si aún no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Guardar el nombre del usuario en una variable de sesión
    $_SESSION['modificar_proyecto'] = $TITULO;
    Header("Location: proyectos.php");

}else {
}
?>
