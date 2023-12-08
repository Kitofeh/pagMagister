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

$COD_ACADEMICO = $_REQUEST['COD_ACADEMICO'];

$sql = "SELECT * FROM academicos WHERE COD_ACADEMICO = $COD_ACADEMICO";
$resultado = $con->query($sql);


$fila = $resultado->fetch_assoc();

 ?>


    <br>
    <center>
      <h1>MODIFICAR ACADÉMICOS</h1>
    </center>

    <div class="container m-5">

  <form action ="actualizar_academico.php?IdEditar=<?php echo $fila["COD_ACADEMICO"]?>" method="POST" enctype="multipart/form-data">
 
                                <input type="text" class ="mb-3 form-control" name = "COD_ACADEMICO" placeholder = "CÓD. ACADÉMICO" value="<?php echo $fila["COD_ACADEMICO"]?>">
                                <input type="text" class ="mb-3 form-control" name = "NOMBRE" placeholder = "NOMBRE" value="<?php echo $fila["NOMBRE"]?>">
                                <input type="email" class ="mb-3 form-control" name = "CORREO" placeholder = "CORREO" value="<?php echo $fila["CORREO"]?>">
                                <input type="text" class ="mb-3 form-control" name = "CARGO" placeholder = "CARGO" value="<?php echo $fila["CARGO"]?>">
                                <input type="text" class ="mb-3 form-control" name = "GRADO" placeholder = "GRADO" value="<?php echo $fila["GRADO"]?>">
                                <img class ="m-5" style="width:200px;"src="data:image/jpg;base64,<?php echo base64_encode($fila['IMG_ACADEMICO'])?>" alt="">
                                <input type="file" class ="mb-3 form-control" name = "IMG_ACADEMICO">
         

                                <input type="submit" class ="btn btn-primary btn-success">
                                <a class ="btn btn-dark mx-2" href="academicos.php">Regresar</a> 

</form>



</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>