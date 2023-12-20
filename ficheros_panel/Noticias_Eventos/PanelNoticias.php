<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de Noticias</title>
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
            echo "<script>
            alert('NO ESTÁS LOGUEADO. ESTÁS VOLVIENDO AL MENÚ PRINCIPAL.');
            window.location.href = '../../index.php';
           </script>";
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Noticias y Eventos
                    </a>
                    <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-white" href="NoticiaImportante.php">Noticia Importante</a></li>
                        <li><a class="dropdown-item text-white" href="CalendarioDeEventos.php">Calendario de Eventos</a></li>
                        <li><a class="dropdown-item text-white" href="PanelNoticias.php">Tarjeta de Noticias</a></li>
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

    <div class="container" style="margin-top:100px;">

    <center>
        <h1 class ="mt-5 mb-3">NOTICIAS</h1>
    </center>  

    <center>
        <h2 class ="mt-5 mb-5">NOTICIAS VISIBLES</h2>
    </center>

    <div>
      <table class="table">
      <thead>
        <tr>
          <th scope="col">ID NOTICIA</th>
          <th scope="col">FECHA</th>
          <th scope="col">TITULO</th>
          <th scope="col">VISIBLE</th>
          <th></th>
        </tr>
      </thead>
      <tbody>


      <?php
          include_once("../../conexion.php");
          $con = conectar();
          $sql = "SELECT * FROM noticias WHERE VISIBILIDAD = 'SI'";
          $resultado = $con->query($sql);
          while($row = $resultado->fetch_assoc()) { ?>
      <tr>
        <th scope="row" class="text-center"><?php echo $row['ID_NOTICIA']?></th>
        <td class="text-center"><?php echo $row['FECHA']?></td>
        <td class="text-center"><?php echo $row['TITULO']?></td>
        <td class="text-center"><?php echo $row['VISIBILIDAD']?></td>
        <td class="text-center"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#OcultarNoticia<?php echo $row['ID_NOTICIA']; ?>">Ocultar</button></td>
        <!-- Modal Ocultar -->
        <div class="modal fade" id="OcultarNoticia<?php echo $row['ID_NOTICIA']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ocultar Noticia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Estas seguro que deseas ocultar la noticia de ID <?php echo $row['ID_NOTICIA']; ?> de la pagina principal?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                <a href="OcultarNoticia.php?id=<?php echo $row['ID_NOTICIA'] ?>" class="btn btn-danger">Ocultar</a>
            </div>
            </div>
        </div>
        </div>
      </tr>
    </tbody>
    <?php } ?>
    </table>
    </div>

    <div class="d-flex justify-content-center my-4">  
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AgregarNoticia">
          Agregar Noticia
          </button>
    </div>

    <center>
        <h2 class ="mt-5 mb-5">LISTA DE NOTICIAS</h2>
    </center>

        <!-- Modal -->
        <div class="modal fade" id="AgregarNoticia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Noticia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="AgregarNoticia.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="titulo" placeholder="Titulo de la Noticia" required>
                        <label for="floatingInput">Titulo de la Noticia</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="descripcion" style="height: 100px" required></textarea>
                        <label for="floatingTextarea2">Descripcion</label>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                            <label for="fechaHora">Fecha</label><br>
                            <input type="date" id="fechaHora" name="fecha" required><br>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="file" class ="form-control" name = "urlimg" accept=".jpg , .jpeg, .png" required>
                        <label for="floatingInput">Imagen de la Noticia</label>
                    </div>
                    <?php
                    include_once("../../conexion.php");
                    $con = conectar();
                    $sql = "SELECT COUNT(*) AS count FROM noticias WHERE VISIBILIDAD = 'SI'";
                    $result = $con->query($sql);
                    ?>
                    <div class="form-floating mb-3">
                      <select class="form-select" id="floatingSelect" name="visibilidad" aria-label="Floating label select example" required <?php if ($result->fetch_assoc()["count"] >= 4) echo "disabled"; ?>>
                        <option></option>
                        <option value="SI">SI</option>
                        <option value="NO" <?php if ($result->fetch_assoc()["count"] >= 4) echo "selected"; ?>>NO</option>
                      </select>
                      <label for="floatingSelect">Visibilidad</label>
                    </div>

            </div>
                    <div class="modal-footer">
                        <input type="submit">
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>

    <center>
    <table class="table">
    <thead>
      <tr>
        <th scope="col">ID NOTICIA</th>
        <th scope="col">FECHA</th>
        <th scope="col">TITULO</th>
        <th scope="col">DESCRIPCION</th>       
        <th scope="col">URL IMAGEN</th>
        <th scope="col">VISIBLE</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>


    <?php
        include_once("../../conexion.php");
        $con = conectar();
        $sql = "SELECT * FROM noticias";
        $resultado = $con->query($sql);
        while($row = $resultado->fetch_assoc()) { ?>
    <tr>
      <th scope="row" class="text-center"><?php echo $row['ID_NOTICIA']?></th>
      <td class="text-center"><?php echo $row['FECHA']?></td>
      <td class="text-center"><?php echo $row['TITULO']?></td>
      <td class="text-center" style="width:200px;"><?php echo $row['DESCRIPCION']?></td>
      <td style="width: 250px;"><img style="width:200px;"src="data:image/jpg;base64,<?php echo base64_encode($row['URL_IMG'])?>" alt=""></td>
      <td><?php echo $row['VISIBILIDAD']?></td>
      <td class="text-center"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModificarNoticia<?php echo $row['ID_NOTICIA']; ?>">Modificar</button></td>
      <td class="text-center"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#EliminarNoticia<?php echo $row['ID_NOTICIA']; ?>">Eliminar</button></td>
      <!-- Modal Modificar -->
      <div class="modal fade" id="ModificarNoticia<?php echo $row['ID_NOTICIA']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Noticia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="ModificarNoticia.php?id=<?php echo $row['ID_NOTICIA']; ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="hidden" id="floatingInput" name="idnoticia" value="<?php echo $row['ID_NOTICIA']; ?>">
                        <input type="text" class="form-control" id="floatingInput" name="titulo" value="<?php echo $row['TITULO']; ?>" placeholder="Titulo de la Noticia" required>
                        <label for="floatingInput">Titulo de la Noticia</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="descripcion" style="height: 100px" required><?php echo $row['DESCRIPCION']; ?></textarea>
                        <label for="floatingTextarea2">Descripcion</label>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                            <label for="fechaHora">Fecha</label><br>
                            <input type="date" id="fechaHora" name="fecha" value="<?php echo $row['FECHA']; ?>" required><br>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <img class ="m-5" style="width:200px;"src="data:image/jpg;base64,<?php echo base64_encode($row['URL_IMG'])?>" alt="">
                        <input type="file" class ="form-control" name = "urlimg" accept=".jpg , .jpeg, .png">
                        <label for="floatingInput">Imagen de la Noticia</label>
                    </div>
                    <?php
                    include_once("../../conexion.php");
                    $con = conectar();
                    $sql = "SELECT COUNT(*) AS count FROM noticias WHERE VISIBILIDAD = 'SI'";
                    $result = $con->query($sql);
                    ?>
                    <div class="form-floating mb-3">
                      <select class="form-select" id="floatingSelect" name="visibilidad" aria-label="Floating label select example" required <?php if ($result->fetch_assoc()["count"] >= 4) echo "disabled"; ?>>
                        <option></option>
                        <option value="SI" <?php if ($row['VISIBILIDAD'] == 'SI') echo "selected";?>>SI</option>
                        <option value="NO" <?php if ($result->fetch_assoc()["count"] >= 4) echo "selected"; if ($row['VISIBILIDAD'] == 'NO') echo "selected";?>>NO</option>
                      </select>
                      <label for="floatingSelect">Visibilidad</label>
                    </div>

            </div>
                    <div class="modal-footer">
                        <input type="submit">
                    </div>
                </form>
            </div>
        </div>
        </div>
        <!-- Modal Eliminar -->
        <div class="modal fade" id="EliminarNoticia<?php echo $row['ID_NOTICIA']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Noticia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Estas seguro que deseas eliminar la noticia de ID <?php echo $row['ID_NOTICIA']; ?>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                <a href="EliminarNoticia.php?id=<?php echo $row['ID_NOTICIA'] ?>" class="btn btn-danger">Eliminar</a>
            </div>
            </div>
        </div>
        </div>
    </tr>
  </tbody>
  <?php } ?>
  </table>

        </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>