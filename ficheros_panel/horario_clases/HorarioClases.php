<?php 
include ("VariablesClase.php");

include_once("../../conexion.php");
$con = conectar();

$sql="SELECT * FROM horario_clases";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../styleFicheros.css">
    <title>Horario de Clases MAGISTER UDA</title>
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


    <!-- Modal -->
    <div class="modal fade" id="CalendarioDeEventos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>

    <div class="mx-auto my-auto">
        <div class="row mx-auto my-auto">
            <div class="col"><!--Calendario-->
                <div class="my-5">
                    <h3>Horario de Clases</h3>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">HORAS</th>
                        <th scope="col">Lunes</th>
                        <th scope="col">Martes</th>
                        <th scope="col">Miércoles</th>
                        <th scope="col">Jueves</th>
                        <th scope="col">Viernes</th>
                        <th scope="col">Sábado</th>
                        <th scope="col">Domingo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>8:00 - 9:30</td>
                        
                        <td class="p-2">1<br><br><?php echo $titulos_1?></td>
                        <td class="p-2">2<br><br><?php echo $titulos_2?></td>
                        <td class="p-2">3<br><br><?php echo $titulos_3?></td>
                        <td class="p-2">4<br><br><?php echo $titulos_4?></td>
                        <td class="p-2">5<br><br><?php echo $titulos_5?></td>
                        <td class="p-2">6<br><br><?php echo $titulos_6?></td>
                        <td class="p-2">7<br><br><?php echo $titulos_7?></td>
                        </tr>
                        <tr class="p-5">
                        <td>9:40 - 11:10</td>
                        <td class="p-2">8<br><br><?php echo $titulos_8?></td>
                        <td class="p-2">9<br><br><?php echo $titulos_9?></td>
                        <td class="p-2">10<br><br><?php echo $titulos_10?></td>
                        <td class="p-2">11<br><br><?php echo $titulos_11?></td>
                        <td class="p-2">12<br><br><?php echo $titulos_12?></td>
                        <td class="p-2">13<br><br><?php echo $titulos_13?></td>
                        <td class="p-2">14<br><br><?php echo $titulos_14?></td>
                        </tr>
                        <tr>
                        <td>11:20 - 12:50</td>
                        <td class="p-2">15<br><br><?php echo $titulos_15?></td>
                        <td class="p-2">16<br><br><?php echo $titulos_16?></td>
                        <td class="p-2">17<br><br><?php echo $titulos_17?></td>
                        <td class="p-2">18<br><br><?php echo $titulos_18?></td>
                        <td class="p-2">19<br><br><?php echo $titulos_19?></td>
                        <td class="p-2">20<br><br><?php echo $titulos_20?></td>
                        <td class="p-2">21<br><br><?php echo $titulos_21?></td>
                        </tr>
                 
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AgregarEvento">
    Agregar clase
    </button>

    <!-- Modal -->
    <div class="modal fade" id="AgregarEvento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="AgregarClase.php" method="POST" autocomplete="off">


            <div class="form-floating mb-3">
                        <input type="hidden" name="ID_CLASE">

                        <input type="text" class="form-control" id="floatingInput" name="NOMBRE_CLASE"  placeholder="NOMBRE DE LA CLASE" required>
                        <label for="floatingInput">Nombre Clase</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput2" name="LUGAR_CLASE"  placeholder="LUGAR DE LA CLASE" required>
                        <label for="floatingInput2">LUGAR DE LA CLASE</label>
                    </div>
                    
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput3" name="NOMBRE_PROFESOR" placeholder="NOMBRE DEL PROFESOR" required>
                        <label for="floatingInput3">NOMBRE DEL PROFESOR</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput4" name="UBICACION" placeholder="Ubicacion del Evento" required>
                    <label for="floatingInput4">UBICACION</label>
                    </div>
                    <input type="submit">


                
    
        </div>
  
                    
             
            </form>
        </div>
    </div>
    </div>

    <!-- Crear la tabla con Bootstrap -->
    <table class="table table-bordered">
    <!-- Crear las cabeceras de la tabla -->
    <thead>
        <tr>
        <th scope="col">ID_CLASE</th>
        <th scope="col">NOMBRE CLASE</th>
        <th scope="col">LUGAR</th>
        <th scope="col">NOMBRE PROFESOR</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
        </tr>
    </thead>

    <!-- Rellenar la tabla con los datos -->
    <tbody>
        <?php
            $sql="SELECT * FROM horario_clases";
            $query=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($query)){
        ?>
        
        <tr>
        <td><?php echo $row['ID_CLASE']; ?></td>
        <td><?php echo $row['NOMBRE_CLASE']; ?></td>
        <td><?php echo $row['LUGAR']; ?></td>
        <td><?php echo $row['NOMBRE_PROFESOR']; ?></td>
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModificarEvento<?php echo $row['ID_CLASE']; ?>">Modificar</button></td>
        <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#EliminarEvento<?php echo $row['ID_CLASE']; ?>">Eliminar</button></td>
        </tr>
        <!-- Modal Modificar-->
        <div class="modal fade" id="ModificarEvento<?php echo $row['ID_CLASE']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="ModificarClase.php" method="POST" autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="hidden" id="floatingInput" name="idevento" value="<?php echo $row['ID_CLASE']; ?>">
                        <input type="text" class="form-control" id="floatingInput" name="titulo" value="<?php echo $row['NOMBRE_CLASE']; ?>" placeholder="NOMBRE DE LA CLASE" required>
                        <label for="floatingInput">Nombre Clase</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput2" name="NOMBRE_PROFESOR" value="<?php echo $row['LUGAR_CLASE']; ?>" placeholder="LUGAR CLASE" required>
                        <label for="floatingInput2">LUGAR CLASE DEL PROFESOR</label>
                    </div>
                
                    
        
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput3" name="NOMBRE_PROFESOR" value="<?php echo $row['NOMBRE_PROFESOR']; ?>" placeholder="NOMBRE DEL PROFESOR" required>
                        <label for="floatingInput3">NOMBRE DEL PROFESOR</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput4" name="UBICACION" value="<?php echo $row['UBICACION']; ?>" placeholder="UBICACION" required>
                        <label for="floatingInput4">ubicacion</label>
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
        <div class="modal fade" id="EliminarEvento<?php echo $row['ID_CLASE']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Estas seguro que deseas eliminar el evento ID <?php echo $row['ID_CLASE']; ?>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                <a href="EliminarClase.php?id=<?php echo $row['ID_CLASE'] ?>" class="btn btn-danger">Eliminar</a>
            </div>
            </div>
        </div>
        </div>
        <?php } ?>
    </tbody>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>