<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROYECTOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../styleFicheros.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
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
          
          
          if (isset($_SESSION['created_proyecto'])) {
            $created_proyecto = $_SESSION['created_proyecto'];
    
            echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">' .
                'El proyecto ' . $created_proyecto . ' ha sido agregado.' .
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' .
                '</div>';
    
            unset($_SESSION['created_proyecto']);


        }

        if (isset($_SESSION['modificar_proyecto'])) {
            $modificar_proyecto = $_SESSION['modificar_proyecto'];
    
            echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">' .
                'El proyecto ' . $modificar_proyecto . ' ha sido modificado.' .
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' .
                '</div>';
    
            unset($_SESSION['modificar_proyecto']);
        }
          

        if (isset($_SESSION['eliminar_proyecto'])) {
            $eliminar_proyecto = $_SESSION['eliminar_proyecto'];
    
            echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">' .
                'El proyecto ' . $eliminar_proyecto . ' ha sido eliminado.' .
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' .
                '</div>';
    
            unset($_SESSION['eliminar_proyecto']);
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


    <center>
        <h1 class ="mt-5">PROYECTOS</h1>
    </center>
 

     <!-- Modal Añadir Clase-->
     <div class="modal fade" id="AgregarEvento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">AGREGAR PROYECTO</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

             <form action ="agregar_proyecto.php" method="POST" enctype="multipart/form-data" autocomplete="off">

                          
              <div class="form-floating mb-3">
              <input type="text" class ="mb-3 form-control" name = "COD_PROYECTO" placeholder = "CÓD. ACADÉMICO">
              <label for="floatingInput">COD. PROYECTO</label>
              </div>

              <div class="form-floating mb-3">
              <input type="text" class ="mb-3 form-control" name = "AREA" placeholder = "AREA">
              <label for="floatingInput">AREA</label>
              </div>

              <div class="form-floating mb-3">
              <input type="text" class ="mb-3 form-control" name = "TITULO" placeholder = "TITULO" >
              <label for="floatingInput">TITULO</label>
              </div>

              <div class="form-floating mb-3">
              <input type="text" class ="mb-3 form-control" name = "FONDO" placeholder = "FONDO">
              <label for="floatingInput">FONDO</label>
              </div>

              <div class="form-floating mb-3">
              <input type="text" class ="mb-3 form-control" name = "ANO" placeholder = "ANO" >
              <label for="floatingInput">AÑO</label>
              </div>

              <div class="form-floating mb-3">
              <input type="text" class ="mb-3 form-control" name = "URL_PROYECTO" placeholder = "URL_PROYECTO" >
              <label for="floatingInput">LINK PROYECTO</label>
              </div>

              <div class="form-floating mb-3">
              <input type="text" class ="mb-3 form-control" name = "COD_AUTOR" placeholder = "COD_AUTOR" >
              <label for="floatingInput">COD. AUTOR</label>
              </div>

             

              </div>
              <input type="submit" class="btn btn-primary">

            

                
    
        </div>
  
                    
             
            </form>
        </div>
    </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary m-3 mt-5" data-bs-toggle="modal" data-bs-target="#AgregarEvento">
    Agregar Publicación
    </button>


    <center>
    <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col">CÓD. PROYECTO</th>
        <th scope="col">AREA</th>
        <th scope="col">TITULO</th>
        <th scope="col">FONDO</th>
        <th scope="col">AÑO</th>
        <th scope="col">URL PROYECTO</th>       
        <th scope="col">COD. AUTOR</th> 
        <th colspan ="2">ACCIONES</th>
      </tr>
    </thead>
    <tbody>


    <?php
        include("../../conexion.php");
        $con = conectar();
        $sql = "SELECT * FROM proyectos";
        $resultado = $con->query($sql);
        while($fila = $resultado->fetch_assoc()) { ?>
    <tr>
      <th scope="row"><?php echo $fila['COD_PROYECTO']?></th>
      <td ><?php echo $fila['AREA']?></td>
      <td ><?php echo $fila['TITULO']?></td>
      <td ><?php echo $fila['FONDO']?></td>
      <td><?php echo $fila['ANO']?></td>
      <td><?php echo $fila['URL_PROYECTO']?></td>
      <td><?php echo $fila['COD_AUTOR']?></td>
      <td>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModificarEvento<?php echo $fila['COD_PROYECTO']; ?>">Modificar</button></td>
      <td>
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#EliminarEvento<?php echo $fila['COD_PROYECTO']; ?>">Eliminar</button></td>
        </tr>
        <!-- Modal Modificar-->
        <div class="modal fade" id="ModificarEvento<?php echo $fila['COD_PROYECTO']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">MODIFICAR PROYECTO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


              <form action="actualizar_proyecto.php?IdEditar=<?php echo $fila["COD_PROYECTO"]?>" method="POST" autocomplete="off">

              <div class="form-floating mb-3">

              <input type="text" class ="mb-3 form-control" name = "COD_PROYECTO" placeholder = "CÓD. PROYECTO" value="<?php echo $fila["COD_PROYECTO"]?>">
                <label for="floatingInput">COD. PROYECTO</label>

              </div>

              <div class="form-floating mb-3">

              <input type="text" class ="mb-3 form-control" name = "AREA" placeholder = "AREA" value="<?php echo $fila["AREA"]?>">
                <label for="floatingInput">AREA</label>

              </div>
              

              <div class="form-floating mb-3">
              <input type="text" class ="mb-3 form-control" name = "TITULO" placeholder = "TITULO" value="<?php echo $fila["TITULO"]?>">
                <label for="floatingInput">TITULO</label>
              </div>

              <div class="form-floating mb-3">

              <input type="text" class ="mb-3 form-control" name = "FONDO" placeholder = "FONDO" value="<?php echo $fila["FONDO"]?>">
                <label for="floatingInput">FONDO</label>

              </div>

              <div class="form-floating mb-3">
              <input type="text" class ="mb-3 form-control" name = "ANO" placeholder = "AÑO" value="<?php echo $fila["ANO"]?>">
                <label for="floatingInput">AÑO</label>
              </div>

              <div class="form-floating mb-3">
              <input type="text" class ="mb-3 form-control" name = "URL_PROYECTO" placeholder = "URL_PROYECTO" value="<?php echo $fila["URL_PROYECTO"]?>">
                <label for="floatingInput">LINK PROYECTO</label>
              </div>

              <div class="form-floating mb-3">
              <input type="text" class ="mb-3 form-control" name = "COD_AUTOR" placeholder = "COD. AUTOR" value="<?php echo $fila["COD_AUTOR"]?>">
                <label for="floatingInput">COD. AUTOR</label>
              </div>

              



              </div>
              <input type="submit" class="btn btn-primary">
            

                
    
        </div>


                
                </form>
            </div>
        </div>
        </div>
        <!-- Modal Eliminar -->
        <div class="modal fade" id="EliminarEvento<?php echo $fila['COD_PROYECTO']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINAR PROYECTO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Está seguro de eliminar el proyecto seleccionado?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Volver</button>
                <a href="eliminar_proyecto.php?id=<?php echo $fila['COD_PROYECTO'] ?>" class="btn btn-danger">Eliminar</a>
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