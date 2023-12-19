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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Noticias y Eventos
                    </a>
                    <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-white" href="../../ficheros_panel/Noticias_Eventos/NoticiaImportante.php">Noticia Importante</a></li>
                        <li><a class="dropdown-item text-white" href="../../ficheros_panel/Noticias_Eventos/CalendarioDeEventos.php">Calendario de Eventos</a></li>
                        <li><a class="dropdown-item text-white" href="../../ficheros_panel/Noticias_Eventos/PanelNoticias.php">Tarjeta de Noticias</a></li>
                    </ul>
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
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/investigaciones/investigaciones.php">Investigaciones</a>
                </li>
              </ul>            
            </div>
          </div>
        </div>
    </nav>


    
    <!-- Modal Añadir Clase-->
    <div class="modal fade" id="AgregarEvento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">AGREGAR INVESTIGACIÓN</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <form action ="agregar_investigacion.php" method="POST" enctype="multipart/form-data" autocomplete="off">

                          
        <div class="form-floating mb-3">

        <input type="text" class ="form-control" name = "COD_INVESTIGACION" placeholder = "CÓD. INVESTIGACIÓN">
        <label for="floatingInput">COD. INVESTIGACIÓN</label>

        </div>

        <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="DESCRIPCION"  placeholder="DESCRIPCION" required>
        <label for="floatingInput">DESCRIPCION</label>
        </div>

        <div class="form-floating mb-3">
        <input type="text" class ="mb-3 form-control" name = "URL_INVESTIGACION" placeholder = "LINK INVESTIGACIÓN">
        <label for="floatingInput">LINK INVESTIGACIÓN</label>
        </div>


        <div class="form-floating mb-3">
        <input type="file" class ="mb-3 form-control" name = "IMG_INVESTIGACION" accept=".jpg , .jpeg, .png" required>
        </div>

        </div>
        <input type="submit" class="btn btn-primary">




        </div>
                    
             
            </form>
        </div>
    </div>
    </div>





    <center>
        <h1 class ="mt-5">INVESTIGACIONES</h1>
    </center>


    <button type="button" class="btn btn-primary m-3 mt-5" data-bs-toggle="modal" data-bs-target="#AgregarEvento">
    Agregar Investigación
    </button>

  

    <center>
    <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col">CÓD. INVESTIGACIÓN</th>
        <th  scope="col">DESCRIPCIÓN</th>
        <th scope="col">LINK INVESTIGACIÓN</th>
        <th scope="col">FOTO INVESTIGACIÓN</th>       
        <th colspan="2">ACCIONES</th>
      </tr>
    </thead>
    <tbody>


    <?php
        include("../../conexion.php");
        $con = conectar();
        $sql = "SELECT * FROM investigaciones";
        $resultado = $con->query($sql);
        while($fila = $resultado->fetch_assoc()) { ?>
    <tr>
      <th scope="row"><?php echo $fila['COD_INVESTIGACION']?></th>
      <td style="max-width:150px; word-wrap: break-word;"><?php echo $fila['DESCRIPCION']?></td>
      <td ><?php echo $fila['URL_INVESTIGACION']?></td>
      <td><img style="width:200px;"src="data:image/jpg;base64,<?php echo base64_encode($fila['IMG_INVESTIGACION'])?>" alt=""></td>
      <td>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModificarEvento<?php echo $fila['COD_INVESTIGACION']; ?>">Modificar</button></td>
        <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#EliminarEvento<?php echo $fila['COD_INVESTIGACION']; ?>">Eliminar</button></td>
        </tr>
        <!-- Modal Modificar-->
        <div class="modal fade" id="ModificarEvento<?php echo $fila['COD_INVESTIGACION']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">MODIFICAR INVESTIGACIÓN</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="actualizar_investigaciones.php?IdEditar=<?php echo $fila["COD_INVESTIGACION"]?>"  enctype="multipart/form-data" method="POST" autocomplete="off">


         

                <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="COD_INVESTIGACION" value="<?php echo $fila['COD_INVESTIGACION']; ?>" placeholder="CÓD. ACADÉMICO" required>
                        <label for="floatingInput">COD. INVESTIGACION</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="DESCRIPCION" value="<?php echo $fila['DESCRIPCION']; ?>" placeholder="DESCRIPCION" required>
                        <label for="floatingInput">DESCRIPCION</label>
                    </div>  

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="URL_INVESTIGACION" value="<?php echo $fila['URL_INVESTIGACION']; ?>" placeholder="URL_INVESTIGACION" required>
                        <label for="floatingInput">URL_INVESTIGACION</label>
                    </div>  

                    <div class="form-floating mb-3">
                          <img class ="m-5" style="width:200px;"src="data:image/jpg;base64,<?php echo base64_encode($fila['IMG_INVESTIGACION'])?>" alt="">
                          <input type="file" class ="mb-3 form-control" name = "IMG_INVESTIGACION">
                    </div>  

                </div>
                <input type="submit" class="btn btn-primary">


                </form>
            </div>
        </div>
        </div>
        <!-- Modal Eliminar -->
        <div class="modal fade" id="EliminarEvento<?php echo $fila['COD_INVESTIGACION']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINAR INVESTIGACIÓN</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Está seguro de eliminar la investigación seleccionada?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Volver</button>
                <a href="eliminar_investigacion.php?id=<?php echo $fila['COD_INVESTIGACION'] ?>" class="btn btn-danger">Eliminar</a>
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