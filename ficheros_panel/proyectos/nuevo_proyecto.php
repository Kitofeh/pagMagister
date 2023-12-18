<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>



<div class="container m-5">

  <form action ="agregar_proyecto.php" method="POST" enctype="multipart/form-data">
 
                                <input type="text" class ="mb-3 form-control" name = "COD_PROYECTO" placeholder = "CÓD. ACADÉMICO" value="<?php echo $fila["COD_PROYECTO"]?>">
                                <input type="text" class ="mb-3 form-control" name = "TITULO" placeholder = "TITULO" value="<?php echo $fila["TITULO"]?>">
                                <input type="text" class ="mb-3 form-control" name = "ANO" placeholder = "ANO" value="<?php echo $fila["ANO"]?>">
                                <input type="text" class ="mb-3 form-control" name = "URL_PROYECTO" placeholder = "URL_PROYECTO" value="<?php echo $fila["URL_PROYECTO"]?>">
                                <select class="mb-3 form-control" name="COD_AUTOR">
                                <?php

                                include("../../conexion.php");
                                $con = conectar();
                                
                                $query_academicos = "SELECT COD_ACADEMICO FROM academicos";
                                $result_academicos = $con->query($query_academicos);

                                while ($fila = $result_academicos->fetch_assoc()) {
                                    echo "<option value='" . $fila['COD_ACADEMICO'] . "'>" . $fila['COD_ACADEMICO'] . "</option>";
                                }
                                ?>
                                </select>

                                <input type="submit" class ="btn btn-primary btn-success">
                                <a class ="btn btn-dark mx-2" href="proyectos.php">Regresar</a>


</form>



</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>