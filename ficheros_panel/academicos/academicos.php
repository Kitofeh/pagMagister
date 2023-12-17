<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../styleFicheros.css">
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top" style="background-color: #364c59;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="../../logos/logo-corp-diic-txtblanco.png"  width="150px"  height="50px">
        </a>
        <a class="navbar-brand" href="../../index.php">
          Inicio
        </a>

        <a class="navbar-brand" href="../../index.php" id="cerrar">
        <?php
          session_start();
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo "<a  href='../../logout.php'>Cerrar sesión</a>";            
          } else {
            echo "<li class='px-2'><a  type='button' data-toggle='modal' data-target='#formularioLogin'>LOGIN</a></li>";
          }                
        ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="offcanvas offcanvas-end text-bg-dark" style="background-color: #364c59;" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <a class="navbar-brand" href="#">
                <img src="../../logos/logo-corp-diic-txtblanco.png"  width="150px" height="50px">
              </a>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/academicos/academicos.php">Académicos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/Noticias_Eventos/CalendarioDeEventos.php">Calendario eventos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/Noticias_Eventos/NoticiaImportante.php">Noticias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/proyectos/proyectos.php">Proyectos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/publicaciones/publicaciones.php">Publicaciones</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/form_contacto/formulario_contacto.php">Form contacto</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/form_postulacion/formulario_postulacion.php">Form postulación</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/horario_clases/HorarioClases.php">Horario de clases</a>
                </li>
              </ul>            
            </div>
          </div>
        </div>
    </nav>
    <div class="container">

    <center>
        <h1 class ="mt-5">ACADÉMICOS</h1>
    </center>
    <br>   
      <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary m-3 mt-5" data-bs-toggle="modal" data-bs-target="#AgregarEvento">
    Agregar académico
    </button>

  </div>
        

    <!-- Modal Añadir Clase-->
    <div class="modal fade" id="AgregarEvento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">AGREGAR ACADÉMICO</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <form action ="agregar_academico.php" method="POST" enctype="multipart/form-data" autocomplete="off">


                          
              <div class="form-floating mb-3">

                  <input type="text" class ="form-control" name = "COD_ACADEMICO" placeholder = "CÓD. ACADÉMICO">
                  <label for="floatingInput">COD. ACADÉMICO</label>

              </div>

              <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="NOMBRE"  placeholder="NOMBRE ACADÉMICO" required>
                  <label for="floatingInput">NOMBRE ACADÉMICO</label>
              </div>

              <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" name="CORREO" placeholder="CORREO ACADÉMICO" required>
                  <label for="floatingInput">CORREO DEL PROFESOR</label>
              </div>

              <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" name="CARGO" placeholder="CARGO DEL ACADÉMICO" required>
              <label for="floatingInput">CARGO DEL ACADÉMICO</label>
              </div>

              <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" name="GRADO" placeholder="GRADO DEL ACADÉMICO" required>
              <label for="floatingInput">GRADO DEL ACADÉMICO</label>
              </div>

    
              <div class="form-floating mb-3">
              <input type="file" class ="mb-3 form-control" name = "IMG_ACADEMICO" accept=".jpg , .jpeg, .png" required>
              </div>

              </div>
              <input type="submit" class="btn btn-primary">
            

                
    
        </div>
  
                    
             
            </form>
        </div>
    </div>
    </div>


    <center>
    <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col">CÓD. ACADÉMICO</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">CORREO</th>
        <th scope="col">CARGO</th>       
        <th scope="col">GRADO ACADÉMICO</th> 
        <th scope="col">IMG. ACADÉMICO</th>
        <th scope="col" COLSPAN="2">ACCIONES</th>
        
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

      <td style="width:200px;"><?php echo $fila['CARGO']?></td>
      <td ><?php echo $fila['GRADO']?></td>
      <td style="width: 250px; height: 250px;"><img style="width:200px; height:200px;" src="data:image/jpg;base64,<?php echo base64_encode($fila['IMG_ACADEMICO'])?>" alt=""></td>
      <td>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModificarEvento<?php echo $fila['COD_ACADEMICO']; ?>">Modificar</button></td>
        <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#EliminarEvento<?php echo $fila['COD_ACADEMICO']; ?>">Eliminar</button></td>
        </tr>
        <!-- Modal Modificar-->
        <div class="modal fade" id="ModificarEvento<?php echo $fila['COD_ACADEMICO']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">MODIFICAR ACADEMICO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="actualizar_academico.php?IdEditar=<?php echo $fila["COD_ACADEMICO"]?>" method="POST" autocomplete="off">

                <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="COD_ACADEMICO" value="<?php echo $fila['COD_ACADEMICO']; ?>" placeholder="CÓD. ACADÉMICO" required>
                        <label for="floatingInput">COD. ACADÉMICO</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="NOMBRE" value="<?php echo $fila['NOMBRE']; ?>" placeholder="NOMBRE ACADÉMICO" required>
                        <label for="floatingInput">NOMBRE ACADÉMICO</label>
                    </div>  

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="CORREO" value="<?php echo $fila['CORREO']; ?>" placeholder="CORREO ACADÉMICO" required>
                        <label for="floatingInput">CORREO ACADÉMICO</label>
                    </div>  

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="CARGO" value="<?php echo $fila['CARGO']; ?>" placeholder="CARGO DEL ACADÉMICO" required>
                        <label for="floatingInput">CARGO ACADÉMICO</label>
                    </div>  


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="GRADO" value="<?php echo $fila['GRADO']; ?>" placeholder="GRADO DEL ACADÉMICO" required>
                        <label for="floatingInput">GRADO DEL ACADÉMICO</label>
                    </div>


                    <div class="form-floating mb-3">
                    <input type="file" class ="mb-3 form-control" name = "IMG_ACADEMICO" accept=".jpg , .jpeg, .png">
                    </div>  

                </div>
                <input type="submit" class="btn btn-primary">

                </form>
            </div>
        </div>
        </div>
        <!-- Modal Eliminar -->
        <div class="modal fade" id="EliminarEvento<?php echo $fila['COD_ACADEMICO']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINAR ACADÉMICO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Está seguro de eliminar el academico seleccionado?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Volver</button>
                <a href="eliminar_academico.php?id=<?php echo $fila['COD_ACADEMICO'] ?>" class="btn btn-danger">Eliminar</a>
            </div>
            </div>
        </div>
        </div>
        <?php } ?>
    </tbody>
    </table>
    
        </center>

    
  
    











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>