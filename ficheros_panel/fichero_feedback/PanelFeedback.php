<?php
include_once("../../conexion.php");
include_once("VariablesFeedback.php");
$con = conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styleFicheros.css">
    <title>Estadisticas Feedback Magister UDA</title>
</head>

<style>
.dropdown-item:hover {
    background-color: #343a40 !important;
    color: white !important;
}
</style>

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
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/fichero_feedback/PanelFeedback.php">Estadisticas</a>
                </li>
              </ul>            
            </div>
          </div>
        </div>
    </nav>

    <div class="d-flex justify-content-center mt-5 pt-5">
        <h1>ESTADISTICAS</h1>
    </div>

    <div class="d-flex justify-content-around my-5 mx-auto">
        <div class="border text-center d-flex flex-column justify-content-around" style="width:300px;height:200px;">
            <h1 class="mx-3"><?php echo number_format((($totalMS_4 + $totalS_4)/$totalRows)*100, 2) ?>%</h1>
            <p class="mx-3">de las personas valoran de manera positiva la descripcion de los academicos.</p>
        </div>
        <div class="border text-center d-flex flex-column justify-content-around" style="width:300px;height:200px;">
            <h1 class="mx-3"><?php echo number_format((($totalMS_1 + $totalS_1)/$totalRows)*100, 2) ?>%</h1>
            <p class="mx-3">de las personas valoran de manera positiva la descripcion del magister.</p>
        </div>
        <div class="border text-center d-flex flex-column justify-content-around" style="width:300px;height:200px;">
            <h1 class="mx-3"><?php echo number_format((($totalMS_7 + $totalS_7)/$totalRows)*100, 2) ?>%</h1>
            <p class="mx-3">de las personas valoran de manera positiva los bloques de horario de clases.</p>
        </div>
    </div>

    <div class="d-flex justify-content-around my-5 pt-5 mx-auto">
        <h2>Areas de Investigacion valuadas por los usuarios</h2>
    </div>

    <div class="row mx-auto" style="width:1000px; height: 300px;">
        <div class="col w-25 d-flex justify-content-center">
            <img src="../../img-areas-inv/img-area-inv-2.jpg" class="mx-auto my-auto rounded-circle" width="200px;">
        </div>
        <div class="col w-75 d-flex flex-column justify-content-left my-auto p-3">
            <h4>Gestion de Tecnologias de Informacion</h4>
            <h5 class="text-justify"><?php echo number_format((($totalGDTDI_5)/$totalRows)*100, 2) ?>%</h5>
        </div>
    </div>

    <div class="row mx-auto" style="width:1000px; height: 300px;">
        <div class="col w-25 d-flex justify-content-center">
            <img src="../../img-areas-inv/img-area-inv-1.jpg" class="mx-auto my-auto rounded-circle" width="200px;">
        </div>
        <div class="col w-75 d-flex flex-column justify-content-left my-auto p-3">
            <h4>Ingenieria de Software</h4>
            <h5 class="text-justify"><?php echo number_format((($totalIDS_5)/$totalRows)*100, 2) ?>%</h5>
        </div>
    </div>

    <div class="row mx-auto" style="width:1000px; height: 300px;">
        <div class="col w-25 d-flex justify-content-center">
            <img src="../../img-areas-inv/img-area-inv-3.jpg" class="mx-auto my-auto rounded-circle" width="200px;">
        </div>
        <div class="col w-75 d-flex flex-column justify-content-left my-auto p-3">
            <h4>Inteligencia de Maquinas</h4>
            <h5 class="text-justify"><?php echo number_format((($totalIDM_5)/$totalRows)*100, 2) ?>%</h5>
        </div>
    </div>

    <div class="d-flex justify-content-around my-5 pt-5 mx-auto">
        <h2>Otras metricas</h2>
    </div>

    <div class="d-flex justify-content-around" style="gap: 10px;">
        <div class="bg-success text-dark p-2 text-center" style="width: 200px;">Muy satisfactorio</div>
        <div class="bg-primary text-dark p-2 text-center" style="width: 200px;">Satisfactorio</div>
        <div class="bg-info text-dark p-2 text-center" style="width: 200px;">Cumple</div>
        <div class="bg-warning text-dark p-2 text-center" style="width: 200px;">Poco Satisfactorio</div>
        <div class="bg-danger text-dark p-2 text-center" style="width: 200px;">Nada Satisfactorio</div>
    </div>

    <div class="mx-5 my-5">
        <h5>La descripcion al inicio de la pagina comunica correctamente su proposito?</h5>
        <div class="progress-stacked">
        <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalMS_1)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-success"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalS_1)/$totalRows)*100 ?>%">
            <div class="progress-bar"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalC_1)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-info"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalPS_1)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-warning"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalNS_1)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-danger"></div>
        </div>
        </div>
    </div>

    <div class="mx-5 my-5">
        <h5>Que tan bueno le parecio el formato de la seccion noticias?</h5>
        <div class="progress-stacked">
        <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalMS_2)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-success"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalS_2)/$totalRows)*100 ?>%">
            <div class="progress-bar"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalC_2)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-info"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalPS_2)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-warning"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalNS_2)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-danger"></div>
        </div>
        </div>
    </div>

    <div class="mx-5 my-5">
        <h5>La informacion de los eventos fue suficiente?</h5>
        <div class="progress-stacked">
        <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalMS_3)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-success"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalS_3)/$totalRows)*100 ?>%">
            <div class="progress-bar"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalC_3)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-info"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalPS_3)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-warning"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalNS_3)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-danger"></div>
        </div>
        </div>
    </div>

    <div class="mx-5 my-5">
        <h5>Como valora la descripcion de los academicos que imparten el magister?</h5>
        <div class="progress-stacked">
        <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalMS_4)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-success"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalS_4)/$totalRows)*100 ?>%">
            <div class="progress-bar"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalC_4)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-info"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalPS_4)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-warning"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalNS_4)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-danger"></div>
        </div>
        </div>
    </div>

    <div class="mx-5 my-5">
        <h5>Que tan adecuados le parecen los requisitos para postular al magister?</h5>
        <div class="progress-stacked">
        <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalMS_6)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-success"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalS_6)/$totalRows)*100 ?>%">
            <div class="progress-bar"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalC_6)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-info"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalPS_6)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-warning"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalNS_6)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-danger"></div>
        </div>
        </div>
    </div>

    <div class="mx-5 my-5">
        <h5>Esta conforme con los bloques de horario de clases actuales del magister?</h5>
        <div class="progress-stacked">
        <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalMS_7)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-success"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalS_7)/$totalRows)*100 ?>%">
            <div class="progress-bar"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalC_7)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-info"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalPS_7)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-warning"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo (($totalNS_7)/$totalRows)*100 ?>%">
            <div class="progress-bar bg-danger"></div>
        </div>
        </div>
    </div>
    
</body>
</html>