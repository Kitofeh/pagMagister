<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="stylepostulacion.css">
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
          
          
          if (isset($_SESSION['created_postulacion'])) {
            $created_postulacion = $_SESSION['created_postulacion'];
    
            echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">' .
                'La postulacion de ' . $created_postulacion . ' ha sido agregada.' .
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' .
                '</div>';
    
            unset($_SESSION['created_postulacion']);


        }

        if (isset($_SESSION['modificar_postulacion'])) {
            $modificar_postulacion = $_SESSION['modificar_postulacion'];
    
            echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">' .
                'La postulacion de  ' . $modificar_postulacion . ' ha sido modificada.' .
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' .
                '</div>';
    
            unset($_SESSION['modificar_postulacion']);
        }
          

        if (isset($_SESSION['eliminar_postulacion'])) {
            $eliminar_postulacion = $_SESSION['eliminar_postulacion'];
    
            echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">' .
                'La postulacion ' . $eliminar_postulacion . ' ha sido eliminada.' .
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' .
                '</div>';
    
            unset($_SESSION['eliminar_postulacion']);
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
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/fichero_feedback/PanelFeedback.php">Estadisticas</a>
                </li>
              </ul>            
            </div>
          </div>
        </div>
    </nav>
 
    <h1 class ="mt-5">FORMULARIO DE POSTULACION</h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary m-3 mt-5" data-bs-toggle="modal" data-bs-target="#AgregarEvento">
    Agregar postulación
    </button>

  </div>
        

    <!-- Modal Añadir Clase-->
    <div class="modal fade" id="AgregarEvento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">AGREGAR POSTULACIÓN</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <form action ="agregar_postulacion.php" method="POST" enctype="multipart/form-data" autocomplete="off">


                          
              <div class="form-floating mb-3">

                  <input type="text" class ="form-control" name = "RUT" placeholder = "RUT" required>
                  <label for="floatingInput">RUT</label>

              </div>

              <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="NOMBRE"  placeholder="NOMBRE" required>
                  <label for="floatingInput">NOMBRE</label>
              </div>

              <div class="form-floating mb-3">
                  <input type="date" class="form-control" id="floatingInput" name="FECHA_NAC" placeholder="FECHA NACIMIENTO" required>
                  <label for="floatingInput">FECHA NACIMIENTO</label>
              </div>

              <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" name="GENERO" placeholder="GÉNERO" required>
              <label for="floatingInput">GÉNERO</label>
              </div>

              <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" name="CORREO" placeholder="CORREO" required>
              <label for="floatingInput">CORREO</label>
              </div>

              <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" name="TELEFONO" placeholder="TELEFONO" required>
              <label for="floatingInput">TELEFONO</label>
              </div>

              <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" name="DIRECCION" placeholder="DIRECCION" required>
              <label for="floatingInput">DIRECCION</label>
              </div>

              <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" name="INSTITUCION" placeholder="INSTITUCION" required>
              <label for="floatingInput">INSTITUCION</label>
              </div>
              
              <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" name="GRADO" placeholder="GRADO" required>
              <label for="floatingInput">GRADO</label>
              </div>

              <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" name="ANO_GRADUACION" placeholder="ANO_GRADUACION" required>
              <label for="floatingInput">AÑO GRADUACIÓN</label>
              </div>

              <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" name="CAMPO_ESTUDIO" placeholder="CAMPO_ESTUDIO" required>
              <label for="floatingInput">CAMPO ESTUDIO</label>
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
        <th scope="col">RUT</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">FECHA DE NACIMINETO</th>
        <th scope="col">GENERO</th>       
        <th scope="col">CORREO</th> 
        <th scope="col"> TELÉFONO</th>
        <th scope="col">DIRECCIÓN</th>
        <th scope="col">INSTITUCIÓN</th>
        <th scope="col">GRADO</th>
        <th scope="col">AÑO DE GRADUACIÓN</th>
        <th scope="col">CAMPO DE ESTUDIO</th>
        <th colspan="2">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
    <?php
        include("../../conexion.php");
        $con = conectar();
        $sql = "SELECT * FROM  formulario_postulacion";
        $resultado = $con->query($sql);
        while($fila = $resultado->fetch_assoc()) { ?>
    <tr>
      <th scope="row"><?php echo $fila['RUT']?></th>
      <td><?php echo $fila['NOMBRE']?></td>
      <td><?php echo $fila['FECHA_NAC']?></td>
      <td><?php echo $fila['GENERO']?></td>
      <td><?php echo $fila['CORREO']?></td>
      <td><?php echo $fila['TELEFONO']?></td>
      <td><?php echo $fila['DIRECCION']?></td>
      <td><?php echo $fila['INSTITUCION']?></td>
      <td><?php echo $fila['GRADO']?></td>
      <td><?php echo $fila['ANO_GRADUACION']?></td>
      <td><?php echo $fila['CAMPO_ESTUDIO']?></td>
      <td>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModificarEvento<?php echo $fila['RUT'];?>">Modificar</button></td>
        <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#EliminarEvento<?php echo $fila['RUT']; ?>">Eliminar</button></td>
        </tr>
        <!-- Modal Modificar-->
        <div class="modal fade" id="ModificarEvento<?php echo $fila['RUT']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">MODIFICAR POSTULACION</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="actualizar_postulacion.php?IdEditar=<?php echo $fila["RUT"]?>" method="POST" autocomplete="off">

                  
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="RUT" value="<?php echo $fila['RUT']; ?>" placeholder="RUT" required>
                        <label for="floatingInput">RUT</label>
                    </div>

                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="NOMBRE"  value="<?php echo $fila['NOMBRE']; ?>" placeholder="NOMBRE" required>
                    <label for="floatingInput">NOMBRE</label>
                    </div>

                    <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="floatingInput" name="FECHA_NAC" value="<?php echo $fila['FECHA_NAC']; ?>"placeholder="FECHA NACIMIENTO" required>
                    <label for="floatingInput">FECHA NACIMIENTO</label>
                    </div>

                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="GENERO" value="<?php echo $fila['GENERO']; ?>" placeholder="GÉNERO" required>
                    <label for="floatingInput">GÉNERO</label>
                    </div>

                    <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="CORREO"value="<?php echo $fila['CORREO']; ?>" placeholder="CORREO" required>
                    <label for="floatingInput">CORREO</label>
                    </div>

                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="TELEFONO" value="<?php echo $fila['TELEFONO']; ?>"placeholder="TELEFONO" required>
                    <label for="floatingInput">TELEFONO</label>
                    </div>

                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="DIRECCION" value="<?php echo $fila['DIRECCION']; ?>"placeholder="DIRECCION" required>
                    <label for="floatingInput">DIRECCION</label>
                    </div>

                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="INSTITUCION" value="<?php echo $fila['INSTITUCION']; ?>"placeholder="INSTITUCION" required>
                    <label for="floatingInput">INSTITUCION</label>
                    </div>

                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="GRADO" value="<?php echo $fila['GRADO']; ?>"placeholder="GRADO" required>
                    <label for="floatingInput">GRADO</label>
                    </div>


                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="ANO_GRADUACION" value="<?php echo $fila['ANO_GRADUACION']; ?>"placeholder="ANO_GRADUACION" required>
                    <label for="floatingInput">AÑO GRADUACIÓN</label>
                    </div>

                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="CAMPO_ESTUDIO" value="<?php echo $fila['CAMPO_ESTUDIO']; ?>"placeholder="CAMPO_ESTUDIO" required>
                    <label for="floatingInput">CAMPO ESTUDIO</label>
                    </div>


        



                    </div>
                    <input type="submit" class="btn btn-primary">


                </form>
            </div>
        </div>
        </div>
        <!-- Modal Eliminar -->
        <div class="modal fade" id="EliminarEvento<?php echo $fila['RUT']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINAR POSTULACIÓN</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Está seguro de eliminar la postulación seleccionada?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Volver</button>
                <a href="eliminar_postulacion.php?id=<?php echo $fila['RUT'] ?>" class="btn btn-danger">Eliminar</a>
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