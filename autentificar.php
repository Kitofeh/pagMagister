<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTENTIFICACIÓN</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<?php
    
    include('conexion.php');  
    $con=conectar();
    $usuario = $_POST['usuario'];  
    $contrasena = $_POST['contrasena'];  
      
        $usuario = stripcslashes($usuario);  
        $contrasena = stripcslashes($contrasena);  
        $usuario = mysqli_real_escape_string($con, $usuario);  
        $contrasena = mysqli_real_escape_string($con, $contrasena);  
      
        if ($usuario === 'admin' && $contrasena === 'admin') {
            session_start();
            echo "<h1 class ='color-blanco'><center> INICIO DE SESIÓN EXITOSO </center></h1>";  
        
            $_SESSION['loggedin'] = true;
            $_SESSION['usuario'] = $usuario;

            define('TIEMPO_EXPIRACION', 1 * 60);  // 1 minutos en segundos (SE PUEDE CAMBIAR ACÁ)

            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + TIEMPO_EXPIRACION;
        
            header('location: index.php');
        } else {
            echo "<h1 class ='color-blanco centrado align-items-center mt-5'>USUARIO Y/O CONTRASEÑA ESTÁN INCORRECTOS.</h1>";
            echo "<h1 class ='color-blanco centrado align-items-center mt-5'><a href='index.php'>VOLVER ATRÁS</a></h1>";
        }
?>



    
</body>
</html>
