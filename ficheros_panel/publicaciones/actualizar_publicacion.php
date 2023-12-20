<?php
include("../../conexion.php");
$con = conectar();

$COD_PUBLICACION = $_REQUEST['IdEditar'];
$COD_PUBLICACION2 = $_POST["COD_PUBLICACION"];
$AREA = $_POST["AREA"];
$COD_AUTOR = $_POST["COD_AUTOR"];
$COHORTE = $_POST["COHORTE"];
$COD_ESTUDIANTE = $_POST["COD_ESTUDIANTE"];
$TITULO = $_POST["TITULO"];
$INDEXACION = $_POST["INDEXACION"];
$FECHA = $_POST["FECHA"];
$EVENTO = $_POST["EVENTO"];

// Verificar si el COD_PUBLICACION ha cambiado antes de realizar la verificación
if ($COD_PUBLICACION != $COD_PUBLICACION2) {
    $verificacionSql = "SELECT COUNT(*) as cantidad FROM publicaciones WHERE COD_PUBLICACION = '$COD_PUBLICACION2'";
    $verificacionResultado = $con->query($verificacionSql);
    $verificacionFila = $verificacionResultado->fetch_assoc();

    if ($verificacionFila['cantidad'] > 0) {
        echo "Error: Ya existe una publicación con el COD_PUBLICACION '$COD_PUBLICACION2'";
        exit(); // Salir para evitar que se ejecute el resto del código
    }
}

// Continuar con el proceso de actualización
$sql = "UPDATE publicaciones SET COD_PUBLICACION = '$COD_PUBLICACION2', AREA = '$AREA', COD_AUTOR = '$COD_AUTOR', COHORTE = '$COHORTE', COD_ESTUDIANTE= '$COD_ESTUDIANTE', TITULO='$TITULO' ,  INDEXACION= '$INDEXACION', FECHA = '$FECHA',  EVENTO= '$EVENTO' WHERE COD_PUBLICACION = $COD_PUBLICACION";

$resultado = $con->query($sql);

if($resultado){
    // Iniciar la sesión si aún no se ha iniciado
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Guardar el nombre del usuario en una variable de sesión
    $_SESSION['modificar_publicacion'] = $TITULO;
    Header("Location: publicaciones.php");

}else {
}
?>