<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
    <br>
    <center>
        <h1>ACADÉMICOS</h1>
    </center>
    <br>
    <div class="container">
        <a href="nuevo_academico.php" class="btn btn-dark">Agregar</a>
        <hr>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">CÓD. ACADÉMICO</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">CORREO</th>
      <th scope="col">CARGO</th>
      <th scope="col">GRADO</th>
      <th scope="col">IMG. ACADÉMICO</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody>

    <?php

        include("../../conexion.php");
        $con = conectar();

        $sql = "SELECT * FROM academicos";
        $resultado = $con->query($sql);

        while($fila = $resultado->fetch_assoc()) { ?>




    <tr>
      <th scope="row"><?php echo $fila['COD_ACADEMICO']?></th>
      <td><?php echo $fila['NOMBRE']?></td>
      <td><?php echo $fila['CORREO']?></td>
      <td><?php echo $fila['CARGO']?></td>
      <td><?php echo $fila['GRADO']?></td>
      <td><img style="width:200px;"src="data:image/jpg;base64,<?php echo base64_encode($fila['IMG_ACADEMICO'])?>" alt=""></td>
        <td>
            <a href="modificar_academico.php?COD_ACADEMICO=<?php echo $fila["COD_ACADEMICO"]; ?>" class="btn btn-warning">EDITAR</a>
            <a href="eliminar_academico.php?COD_ACADEMICO=<?php echo $fila["COD_ACADEMICO"]; ?>" class="btn btn-danger">ELIMINAR</a>



        </td>
    </tr>

  </tbody>

  <?php } ?>


</table>















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>




  </body>
</html>