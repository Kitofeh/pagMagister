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
    $COD_PUBLICACION = $_REQUEST['COD_PUBLICACION'];
    $sql = "SELECT * FROM publicaciones WHERE COD_PUBLICACION = $COD_PUBLICACION";
    $resultado = $con->query($sql);
    $fila = $resultado->fetch_assoc();
    ?>
    <br>
    <center>
      <h1>MODIFICAR PUBLICACION</h1>
    </center>
    <div class="container m-5">
    <form action ="actualizar_publicacion.php?IdEditar=<?php echo $fila["COD_PUBLICACION"]?>" method="POST" enctype="multipart/form-data">
      <input type="text" class ="mb-3 form-control" name = "COD_PUBLICACION" placeholder = "AREA" value="<?php echo $fila["COD_PUBLICACION"]?>">
      <input type="text" class ="mb-3 form-control" name = "AREA" placeholder = "AREA" value="<?php echo $fila["AREA"]?>">
      <input type="number" class ="mb-3 form-control" name = "COD_AUTOR" placeholder = "COD_AUTOR" value="<?php echo $fila["COD_AUTOR"]?>">
      <input type="number" class ="mb-3 form-control" name = "COHORTE"  min="1900" max="2300" placeholder = "COHORTE" value="<?php echo $fila["COHORTE"]?>">
      <input type="number" class ="mb-3 form-control" name = "COD_ESTUDIANTE" placeholder = "COD_ESTUDIANTE" value="<?php echo $fila["COD_ESTUDIANTE"]?>">
      <input type="text" class ="mb-3 form-control" name = "TITULO" placeholder="TITULO" required value="<?php echo $fila["TITULO"]?>">
      <input type="text" class ="mb-3 form-control" name = "INDEXACION" placeholder = "INDEXACION" value="<?php echo $fila["INDEXACION"]?>">
      <input type="number" class ="mb-3 form-control" name = "FECHA" min="1900" max="2300" placeholder = "FECHA" value="<?php echo $fila["FECHA"]?>">
      <input type="text" class ="mb-3 form-control" name = "EVENTO" placeholder = "EVENTO" value="<?php echo $fila["EVENTO"]?>">
      <input type="submit" class ="btn btn-primary btn-success">
      <a class ="btn btn-dark mx-2" href="index.php">Regresar</a>  
    </form>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>