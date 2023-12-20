<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
          
          if (isset($_SESSION['created_publicacion'])) {
            $created_publicacion = $_SESSION['created_publicacion'];
    
            echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">' .
                'La publicacion ' . $created_publicacion . ' ha sido agregada.' .
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' .
                '</div>';
    
            unset($_SESSION['created_publicacion']);


        }

        if (isset($_SESSION['modificar_publicacion'])) {
            $modificar_publicacion = $_SESSION['modificar_publicacion'];
    
            echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">' .
                'La publicacion  ' . $modificar_publicacion . ' ha sido modificada.' .
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' .
                '</div>';
    
            unset($_SESSION['modificar_publicacion']);
        }
          

        if (isset($_SESSION['eliminar_publicacion'])) {
            $eliminar_publicacion = $_SESSION['eliminar_publicacion'];
    
            echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">' .
                'La publicacion ' . $eliminar_publicacion . ' ha sido eliminada.' .
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' .
                '</div>';
    
            unset($_SESSION['eliminar_publicacion']);
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
            <h1 class="modal-title fs-5" id="exampleModalLabel">AGREGAR PUBLICACIÓN</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <form action ="agregar_publicacion.php" method="POST" enctype="multipart/form-data" autocomplete="off">


                          
              <div class="form-floating mb-3">

                <input type="number" class ="form-control" name = "COD_PUBLICACION" placeholder = "COD. PUBLICACION">
                <label for="floatingInput">COD. PUBLICACIÓN</label>

              </div>

              <div class="form-floating mb-3">
                <input type="text" class ="mb-3 form-control" name = "AREA" placeholder = "AREA">
                <label for="floatingInput">AREA</label>
              </div>

              <div class="form-floating mb-3">
                <input type="number" class ="mb-3 form-control" name = "COD_AUTOR" placeholder = "COD_AUTOR">
                <label for="floatingInput">COD. AUTOR</label>
              </div>

              <div class="form-floating mb-3">
                <input type="number" class ="mb-3 form-control"  min="1900" max="2300" name = "COHORTE" placeholder = "COHORTE">
                <label for="floatingInput">COHORTE</label>
              </div>

              <div class="form-floating mb-3">
              <input type="number" class ="mb-3 form-control" name = "COD_ESTUDIANTE" placeholder = "COD_ESTUDIANTE">
              <label for="floatingInput">COD. ESTUDIANTE</label>
              </div>

    
              <div class="form-floating mb-3">
                <input type="text" class ="mb-3 form-control" name = "TITULO" placeholder="TITULO" required>
                <label for="floatingInput">TÍTULO</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class ="mb-3 form-control" name = "INDEXACION" placeholder = "INDEXACION">
                <label for="floatingInput">INDEXACIÓN</label>
              </div>

              <div class="form-floating mb-3">
                <input type="number" class ="mb-3 form-control"  min="1900" max="2300" name = "FECHA" placeholder = "FECHA">
                <label for="floatingInput">FECHA(AÑO)</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class ="mb-3 form-control" name = "EVENTO" placeholder = "EVENTO">
                <label for="floatingInput">EVENTO</label>
              </div>

              </div>
              <input type="submit" class="btn btn-primary">
            

                
    
        </div>
  
                    
             
            </form>
        </div>
    </div>
    </div>

    


    <center>
        <h1 class ="mt-5">PUBLICACIONES</h1>
    </center>
           <!-- Button trigger modal -->
    
           <button type="button" class="btn btn-primary m-3 mt-5" data-bs-toggle="modal" data-bs-target="#AgregarEvento">
    Agregar Publicación
    </button>
    </div>
    <center>
    <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col" style="max-width: 50px; overflow: hidden; text-overflow: ellipsis;" title="CÓD. PUBLICACIÓN">COD_PUBLICACION</th>
        <th scope="col">AREA</th>
        <th scope="col" style="max-width: 50px; overflow: hidden; text-overflow: ellipsis;" title="CÓD. TUTOR">COD_TUTOR</th>
        <th scope="col">TUTOR</th>
        <th scope="col">COHORTE</th>       
        <th scope="col" style="max-width: 50px; overflow: hidden; text-overflow: ellipsis;" title="CÓD. ESTUDIANTE">COD_ESTUDIANTE</th> 
        <th scope="col">ESTUDIANTE</th> 
        <th scope="col"> TITULO</th>
        <th scope="col">INDEXACION</th>
        <th scope="col">FECHA</th>
        <th scope="col">EVENTO</th>
        <th colspan="2">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
    <?php
        include("../../conexion.php");
        $con = conectar();
        $sql = "SELECT p.*, a.NOMBRE as nombre_autor, e.NOMBRE as nombre_estudiante
        FROM publicaciones p
        LEFT JOIN academicos a ON p.COD_AUTOR = a.COD_ACADEMICO
        LEFT JOIN exalumnos e ON p.COD_ESTUDIANTE = e.ID_EXLAUMNO";

        $resultado = $con->query($sql);
        while($fila = $resultado->fetch_assoc()) { ?>
    <tr>
      <th scope="row"><?php echo $fila['COD_PUBLICACION']?></th>
      <td><?php echo $fila['AREA']?></td>
      <td ><?php echo $fila['COD_AUTOR']?></td>
      <td><?php echo $fila['nombre_autor']?></td>
      <td><?php echo $fila['COHORTE']?></td>
      <td><?php echo $fila['COD_ESTUDIANTE']?></td>
      <td><?php echo $fila['nombre_estudiante']?></td>
      <td><?php echo $fila['TITULO']?></td>
      <td><?php echo $fila['INDEXACION']?></td>
      <td><?php echo $fila['FECHA']?></td>
      <td><?php echo $fila['EVENTO']?></td>


      <td>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModificarEvento<?php echo $fila['COD_PUBLICACION']; ?>">Modificar</button></td>
      <td>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#EliminarEvento<?php echo $fila['COD_PUBLICACION']; ?>">Eliminar</button></td>
        </tr>
        <!-- Modal Modificar-->
        <div class="modal fade" id="ModificarEvento<?php echo $fila['COD_PUBLICACION']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">MODIFICAR PUBLICACIÓN</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <form action="actualizar_publicacion.php?IdEditar=<?php echo $fila["COD_PUBLICACION"]?>" method="POST" autocomplete="off">

                  <div class="form-floating mb-3">

                  <input type="number" class ="form-control" name = "COD_PUBLICACION" placeholder = "COD. PUBLICACION" value="<?php echo $fila['COD_PUBLICACION']; ?>">
                  <label for="floatingInput">COD. PUBLICACIÓN</label>

                  </div>

                  <div class="form-floating mb-3">
                  <input type="text" class ="mb-3 form-control" name = "AREA" placeholder = "AREA" value="<?php echo $fila['AREA']; ?>">
                  <label for="floatingInput">AREA</label>
                  </div>

                  <div class="form-floating mb-3">

                  <select class="mb-3 form-control" name="COD_AUTOR" id="floatingInput3">
                    <option value=""></option> <!-- Primer valor vacío -->

                    <?php
                    $query_academicos = "SELECT * FROM academicos";
                    $result_academicos = $con->query($query_academicos);

                    while ($fila_academicos = $result_academicos->fetch_assoc()) {
                        echo "<option value='" . $fila_academicos['COD_ACADEMICO'] . "'>" . $fila_academicos['COD_ACADEMICO'] . " - " . $fila_academicos['NOMBRE'] . "</option>";
                    }
                    ?>
                </select>
        
                  </div>

                  <div class="form-floating mb-3">
                  <input type="number" class ="mb-3 form-control"  min="1900" max="2300" name = "COHORTE" placeholder = "COHORTE" value="<?php echo $fila['COHORTE']; ?>">
                  <label for="floatingInput">COHORTE</label>
                  </div>

                  <div class="form-floating mb-3">
                  <input type="number" class ="mb-3 form-control" name = "COD_ESTUDIANTE" placeholder = "COD_ESTUDIANTE" value="<?php echo $fila['COD_ESTUDIANTE']; ?>">
                  <label for="floatingInput">COD. ESTUDIANTE</label>
                  </div>


                  <div class="form-floating mb-3">
                  <input type="text" class ="mb-3 form-control" name = "TITULO" placeholder="TITULO" required value="<?php echo $fila['TITULO']; ?>">
                  <label for="floatingInput">TÍTULO</label>
                  </div>

                  <div class="form-floating mb-3">
                  <input type="text" class ="mb-3 form-control" name = "INDEXACION" placeholder = "INDEXACION" value="<?php echo $fila['INDEXACION']; ?>">
                  <label for="floatingInput">INDEXACIÓN</label>
                  </div>

                  <div class="form-floating mb-3">
                  <input type="number" class ="mb-3 form-control"  min="1900" max="2300" name = "FECHA" placeholder = "FECHA" value="<?php echo $fila['FECHA']; ?>">
                  <label for="floatingInput">FECHA(AÑO)</label>
                  </div>

                  <div class="form-floating mb-3">
                  <input type="text" class ="mb-3 form-control" name = "EVENTO" placeholder = "EVENTO" value="<?php echo $fila['EVENTO']; ?>">
                  <label for="floatingInput">EVENTO</label>
                  </div>

                  </div>
                  <input type="submit" class="btn btn-primary">




                  </div>


                
                </form>
            </div>
        </div>
        </div>
        <!-- Modal Eliminar -->
        <div class="modal fade" id="EliminarEvento<?php echo $fila['COD_PUBLICACION']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINAR PUBLICACIÓN</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Está seguro de eliminar la publicación seleccionada?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Volver</button>
                <a href="eliminar_publicacion.php?id=<?php echo $fila['COD_PUBLICACION'] ?>" class="btn btn-danger">Eliminar</a>
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