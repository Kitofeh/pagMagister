<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <?php
    include("../../conexion.php");
    $con = conectar();
    $RUT = $_REQUEST['RUT'];
    $sql = "SELECT * FROM formulario_postulacion WHERE RUT = $RUT";
    $resultado = $con->query($sql);
    $fila = $resultado->fetch_assoc();
    ?>
    <br>
    <center>
      <h1>MODIFICAR FORMULARIO DE CONTACTO</h1>
    </center>
    <div class="container m-5">
    <form action ="actualizar_postulacion.php?IdEditar=<?php echo $fila["RUT"]?>" method="POST" enctype="multipart/form-data">
      <input type="text" class ="mb-3 form-control" name = "RUT" placeholder = "RUT" value="<?php echo $fila["RUT"]?>" readonly> <!-- readonly muestra el dato pero no deja que se modifique -->
      <input type="text" class ="mb-3 form-control" name = "NOMBRE" placeholder = "NOMBRE" value="<?php echo $fila["NOMBRE"]?>" required> 
      <input type="date" class ="mb-3 form-control" name = "FECHA_NAC" placeholder = "FECHA_NAC" value="<?php echo $fila["FECHA_NAC"]?>">
      <input type="text" class ="mb-3 form-control"  name = "GENERO" placeholder = "GENERO" value="<?php echo $fila["GENERO"]?>">
      <input type="email" class ="mb-3 form-control" name = "CORREO" placeholder = "CORREO" value="<?php echo $fila["CORREO"]?>" required>
      <input type="text" class ="mb-3 form-control" name = "TELEFONO" placeholder="TELEFONO" value="<?php echo $fila["TELEFONO"]?>">
      <input type="text" class ="mb-3 form-control" name = "DIRECCION" placeholder = "DIRECCION" value="<?php echo $fila["DIRECCION"]?>">
      <input type="text" class ="mb-3 form-control" name = "INSTITUCION" placeholder = "INSTITUCION" value="<?php echo $fila["INSTITUCION"]?>">    
      <input type="text" class ="mb-3 form-control" name = "GRADO" placeholder = "GRADO" value="<?php echo $fila["GRADO"]?>">    
      <input type="text" class ="mb-3 form-control" name = "ANO_GRADUACION" placeholder = "ANO_GRADUACION" value="<?php echo $fila["ANO_GRADUACION"]?>">    
      <input type="text" class ="mb-3 form-control" name = "CAMPO_ESTUDIO" placeholder = "CAMPO_ESTUDIO" value="<?php echo $fila["CAMPO_ESTUDIO"]?>">    
      <input type="submit" class ="btn btn-primary btn-success">
      <a class ="btn btn-dark mx-2" href="index.php">Regresar</a>  
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>