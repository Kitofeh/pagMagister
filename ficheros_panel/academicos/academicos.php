<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styleAcademicos.css">
  </head>
  <body>
    <header>
    <nav class="navbar navbar-dark fixed-top" style="background-color: #364c59;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="../../logos/logo-corp-diic-txtblanco.png"  width="132px"  height="50px">
        </a>
        <a class="navbar-brand" href="../../index.php">
          Inicio
        </a>
        <a class="navbar-brand" id="sesion" href="../../index.php">
        <?php
          session_start();
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo "<a class='navbar-brand' href='pagMagister/logout.php'>Cerrar sesión</a>";            
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
                <img src="../../logos/logo-corp-diic-txtblanco.png"  width="132px" height="50px">
              </a>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/academicos/academicos.php">Académicos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Calendario eventos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Ex-alumnos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/Noticias_Eventos/NoticiaImportante.php">Noticias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Proyectos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Publicaciones</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/formulario_contacto/formulario_contacto.php">Form contacto</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Form postulación</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/horario_clases/horario_clases.php">Horario de clases</a>
                </li>
              </ul>            
            </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="container">
    <br>
    <center>
        <h1>ACADÉMICOS</h1>
    </center>   
    <a href="nuevo_academico.php" class="btn btn-dark">Agregar</a>
    </div>
    <table class="table">
    <thead>
      <tr>
        <th scope="col">CÓD. ACADÉMICO</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">CORREO</th>
        <th scope="col">CARGO</th>       
        <th scope="col">GRADO</th> 
        <th scope="col"> ACADÉMICO</th>
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
      <td style="width:200px;"><?php echo $fila['CARGO']?></td>
      <td  colspan="2"><?php echo $fila['GRADO']?></td>
      <td style="width: 250px;"><img style="width:200px;"src="data:image/jpg;base64,<?php echo base64_encode($fila['IMG_ACADEMICO'])?>" alt=""></td>
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