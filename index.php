<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <!--FUENTES-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <!--STYLE.CSS-->
    <link rel="stylesheet" href="style.css">
    <title>Web Magister UDA</title>
</head>

<?php
include("conexion.php");
$con = conectar();
?>

<body style="font-family: 'Montserrat', sans-serif;">
    <header>
        <section><!--Barra de navegacion-->
            <nav class="py-4 fixed-top" style="background-color: rgba(255, 255, 255, 0.1);backdrop-filter: blur(10px); box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                <ul class="my-0 mx-3">
                    <li class="pr-2"><a href="#Nosotros" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);">Nosotros</a></li>
                    <li class="px-2"><a href="#NoticiasYEventos" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);">Noticias y Eventos</a></li>
                    <li class="px-2"><a href="#AcercaDelPosgrado" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);">Acerca del Posgrado </a></li>
                    <li class="px-2"><a href="#AdmisionYRequisitos" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);">Admision y Requisitos</a></li>
                    <li class="px-2"><a href="#PlanDeEstudios" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);">Plan de estudios</a></li>
                    <li class="px-2"><a href="#Experiencias" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);">Experiencias</a></li>
                    <li class="px-2"><a href="#Recursos" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);">Recursos</a></li>
                    <li class="px-2"><a href="#Contacto" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);">Soporte</a></li>
                    <?php
                    session_start();

                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

                        echo "<li class='px-2'><p>Bienvenido, " . $_SESSION['usuario'] . "</p></li>";
                        echo "<li class='px-2'><a style='text-shadow: 2px 2px 4px rgba(0, 0, 0, 1)' href='logout.php'>CERRAR SESIÓN</a></li>";
                        echo "<li class='px-2'><a style='text-shadow: 2px 2px 4px rgba(0, 0, 0, 1)' href='panel.php'>PANEL</a></li>";

                    } else {
                        echo "<li class='px-2'><a style='text-shadow: 2px 2px 4px rgba(0, 0, 0, 1)' type='button' data-toggle='modal' data-target='#formularioLogin'>LOGIN</a></li>";
                    }
                    
                    

          

                    ?>

                    
                </ul>
            </nav>
        </section>

        <div class="modal fade" id="formularioLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">LOGIN</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div>
                                <div class="row">
                                    <div class="col-md-6 offset-lg-3">
                                        <form name="flogin" action = "autentificar.php" onsubmit = "return validation()" method="POST">
                                            <div class="form-group mb-3">
                        
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="usuario">USUARIO:</label>
                                                <input type="text" class="form-control mb-3 mt-3" name ="usuario" id="usuario" placeholder="Ingresa tu usuario">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="contrasena">CONTRASEÑA:</label>
                                                <input type="password" class="form-control mb-3 mt-3" name ="contrasena" id="contrasena" placeholder="Ingresa tu contraseña">
                                            </div>
                         
                                            
                                            <input type="submit" class="mt-3 mx-5 mb-3 btn btn-primary btn-block" value="ENVIAR"></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>




        <section class="section-margin my-0 mx-0"><!--Banner-->

            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img-banner/img-dicc-1.jpg" height="700px;" class="d-block w-100" alt="img-dicc-1">
                </div>
                <div class="carousel-item">
                <img src="img-banner/img-dicc-2.jpg" height="700px;" class="d-block w-100" alt="img-dicc-2">
                </div>
                <div class="carousel-item">
                <img src="img-banner/img-dicc-1.jpg" height="700px;" class="d-block w-100" alt="img-dicc-3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </section>

    </header>

    


        <section id="Nosotros"><!--Descripcion General-->
            <div class="d-flex justify-content-center align-items-center bg-white w-100" style="height: 150px;">

                <h2 style="box-shadow: inset 0 -2px 0 #dbca11">Acerca de Nosotros</h2>
            </div>
            <div class="w-100" style="background-color: #dbca11; height: 300px;">
                <img src="img-about-us.jpg" class="w-100 h-100" style="object-fit: cover;">
            </div>
            <div class="d-flex justify-content-center align-items-center w-100" style="background-color: #364c59; height: 300px;">
                <p class="text-white p-5 mx-5">El Departamento de Ingeniería Informática y Ciencias de la Computación ha estado ofreciendo el Magíster de Investigación desde 2013 con el objetivo de fomentar el desarrollo de habilidades avanzadas en investigación y potenciar la generación de conocimientos científicos en áreas vinculadas a las tecnologías de la información y las ciencias de la computación.</p>
            </div>
        </section>


       





        <section id="NoticiasYEventos" class="section-margin"><!--1. Noticias y Eventos-->
            <div class="d-flex justify-content-center align-items-center bg-white w-100" style="height: 150px;">
                <h2 style="box-shadow: inset 0 -2px 0 #dbca11">Noticias y Eventos</h2>
            </div>
            <div class="my-5"><!--Tarjeta Ancha-->
                <?php 
                include("../../conexion.php");
                $con = conectar();

                $sql="SELECT * FROM noticia_importante WHERE id='1'";
                $query=mysqli_query($con,$sql);

                $row=mysqli_fetch_array($query);
                ?>
                <div class="card">
                    <div class="card-header">
                        Informacion mas reciente
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['titulo']?></h5>
                        <p class="card-text"><?php echo $row['cuerpo']?></p>
                        <!--<a href="#" class="btn btn-primary">Click aqui</a>-->
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <div class="row d-flex justify-content-around my-5"><!--Tarjetas-->
                    <div class="card" style="width: 18rem;">
                        <img src="img-about-us.jpg" class="card-img-top" alt="Imagen Noticia 1">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="img-about-us.jpg" class="card-img-top" alt="Imagen Noticia 2">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <?php
                include_once("ficheros_panel/Noticias_Eventos/VariablesCalendario.php");
                ?>

                <div class="row">
                    <div class="col"><!--Calendario-->
                        <div class="my-5">
                            <h3>Calendario de Eventos <?php echo ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"][$mesActual - 1] ?></h3>
                        </div>
                        <table class="table table-bordered" style="table-layout: fixed; width: 100%;">
                            <thead>
                                <tr>
                                <th scope="col">Domingo</th>
                                <th scope="col">Lunes</th>
                                <th scope="col">Martes</th>
                                <th scope="col">Miércoles</th>
                                <th scope="col">Jueves</th>
                                <th scope="col">Viernes</th>
                                <th scope="col">Sábado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td class="text-center px-0 CeldasCalendario"></td>
                                <td class="text-center px-0 CeldasCalendario"></td>
                                <td class="text-center px-0 CeldasCalendario">1<br><br><?php echo $titulos_1?></td>
                                <td class="text-center px-0 CeldasCalendario">2<br><br><?php echo $titulos_2?></td>
                                <td class="text-center px-0 CeldasCalendario">3<br><br><?php echo $titulos_3?></td>
                                <td class="text-center px-0 CeldasCalendario">4<br><br><?php echo $titulos_4?></td>
                                <td class="text-center px-0 CeldasCalendario">5<br><br><?php echo $titulos_5?></td>
                                </tr>
                                <tr class="text-center px-0 CeldasCalendario">
                                <td class="text-center px-0 CeldasCalendario">6<br><br><?php echo $titulos_6?></td>
                                <td class="text-center px-0 CeldasCalendario">7<br><br><?php echo $titulos_7?></td>
                                <td class="text-center px-0 CeldasCalendario">8<br><br><?php echo $titulos_8?></td>
                                <td class="text-center px-0 CeldasCalendario">9<br><br><?php echo $titulos_9?></td>
                                <td class="text-center px-0 CeldasCalendario">10<br><br><?php echo $titulos_10?></td>
                                <td class="text-center px-0 CeldasCalendario">11<br><br><?php echo $titulos_11?></td>
                                <td class="text-center px-0 CeldasCalendario">12<br><br><?php echo $titulos_12?></td>
                                </tr>
                                <tr>
                                <td class="text-center px-0 CeldasCalendario">13<br><br><?php echo $titulos_13?></td>
                                <td class="text-center px-0 CeldasCalendario">14<br><br><?php echo $titulos_14?></td>
                                <td class="text-center px-0 CeldasCalendario">15<br><br><?php echo $titulos_15?></td>
                                <td class="text-center px-0 CeldasCalendario">16<br><br><?php echo $titulos_16?></td>
                                <td class="text-center px-0 CeldasCalendario">17<br><br><?php echo $titulos_17?></td>
                                <td class="text-center px-0 CeldasCalendario">18<br><br><?php echo $titulos_18?></td>
                                <td class="text-center px-0 CeldasCalendario">19<br><br><?php echo $titulos_19?></td>
                                </tr>
                                <tr>
                                <td class="text-center px-0 CeldasCalendario">20<br><br><?php echo $titulos_20?></td>
                                <td class="text-center px-0 CeldasCalendario">21<br><br><?php echo $titulos_21?></td>
                                <td class="text-center px-0 CeldasCalendario">22<br><br><?php echo $titulos_22?></td>
                                <td class="text-center px-0 CeldasCalendario">23<br><br><?php echo $titulos_23?></td>
                                <td class="text-center px-0 CeldasCalendario">24<br><br><?php echo $titulos_24?></td>
                                <td class="text-center px-0 CeldasCalendario">25<br><br><?php echo $titulos_25?></td>
                                <td class="text-center px-0 CeldasCalendario">26<br><br><?php echo $titulos_26?></td>
                                </tr>
                                <tr>
                                <td class="text-center px-0 CeldasCalendario">27<br><br><?php echo $titulos_27?></td>
                                <td class="text-center px-0 CeldasCalendario">28<br><br><?php echo $titulos_28?></td>
                                <td class="text-center px-0 CeldasCalendario">29<br><br><?php echo $titulos_29?></td>
                                <td class="text-center px-0 CeldasCalendario">30<br><br><?php echo $titulos_30?></td>
                                <td class="text-center px-0 CeldasCalendario">31<br><br><?php echo $titulos_31?></td>
                                <td class="text-center px-0 CeldasCalendario"></td>
                                <td class="text-center px-0 CeldasCalendario"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

       
        <section id="AcercaDelPosgrado" class="section-margin my-5" style="height:700px;"><!--2. Acerca del Posgrado-->
            <div class="d-flex justify-content-center align-items-center bg-white w-100" style="height: 150px;">
                <h2 style="box-shadow: inset 0 -2px 0 #dbca11">Acerca de Nosotros</h2>
            </div>
            <div class="container my-5">
                <div class="row">
                    <div class="col">
                        <div class="row my-4 text-center mx-1">
                            <div class="mt-4">
                                <h3 class="mb-5">Descripcion del Posgrado</h3>
                                <p class="border-left-custom">El Magíster de la UDA es un programa académico avanzado que equipa a los estudiantes con habilidades de investigación para contribuir al avance de su campo de estudio. Los graduados estarán preparados para roles de liderazgo en la academia, la industria o el gobierno.</p>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Objetivos
                                    </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">El Magíster busca formar académicos con habilidades de investigación avanzadas para resolver problemas complejos en sus campos de estudio.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Metas del Posgrado
                                    </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Nuestra meta es formar líderes en ciencias aplicadas, reconocidos por su excelencia académica y su contribución significativa a sus comunidades.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4">
                        <div class="container mt-4">
                            <div class="row" style="height:350px;">
                                <div class="col-6">
                                    <div class="row">
                                        <img src="img-magister-desc/img-magister-desc-1.jpg" class="img-fluid mb-1">
                                    </div>
                                    <div class="row">
                                        <img src="img-magister-desc/img-magister-desc-2.jpg" class="img-fluid mt-5">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <img src="img-magister-desc/img-magister-desc-3.jpg" class="img-fluid h-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>



        <section id="Academicos" class="section-margin"><!--2.1 Academicos-->
            <div class="d-flex justify-content-center align-items-center bg-white w-100" style="height: 150px;">
                <h2 style="box-shadow: inset 0 -2px 0 #dbca11">Academicos</h2>
            </div>
            <div class="container">
                <div class="row mb-5">
                    <div class="col">
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h4 class="text-center">Dante Carrizo</h4>
                            <p class="text-center">Profesor</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            <img src="img-academicos/eye.svg" style="margin-right: 5px; width:20px;">Ver perfil
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Perfil</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <div class="container">
                                    <div class="row align-items-start">
                                        <div class="col-4">
                                        <img src="img-academicos/Dante.jpg" class="img-fluid" alt="Tu Imagen">
                                        </div>
                                        <div class="col-8">
                                        
                                        <p><br>Nombre: Dante Carrizo<br><br>Edad: 20 anios<br><br>Rol: Profesor<br></p>
                                        </div>
                                    </div>
                                    <div class="row mt-4 mb-3">
                                        <div class="col-12">
                                        <p>Esta es una descripción adicional del perfil. Aquí se puede incluir más detalles o información relevante.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <a href="https://diicc.uda.cl/academico.php?id=3">
                                            <button type="button" class="btn btn-primary">
                                                <img src="img-academicos/user-icon.svg" style="margin-right: 5px; width:20px;">Ir a Web Personal
                                            </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h4 class="text-center">Juan Olivares Pacheco</h4>
                            <p class="text-center">Doctor en Estadistica</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <img src="img-academicos/eye.svg" style="margin-right: 5px; width:20px;">Ver perfil
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Perfil</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <div class="container">
                                    <div class="row align-items-start">
                                        <div class="col-4">
                                        <img src="img-academicos/jfolivar.png" class="img-fluid" alt="Dante">
                                        </div>
                                        <div class="col-8">
                                        
                                        <p><br>Nombre: Juan Olivares Pacheco<br><br>Edad: 20 anios<br><br>Rol: Estadisticas<br></p>
                                        </div>
                                    </div>
                                    <div class="row mt-4 mb-3">
                                        <div class="col-12">
                                        <p>Esta es una descripción adicional del perfil. Aquí se puede incluir más detalles o información relevante.</p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h4 class="text-center">Hector Cornide</h4>
                            <p class="text-center">Profesor</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                            <img src="img-academicos/eye.svg" style="margin-right: 5px; width:20px;">Ver perfil
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Perfil</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <div class="container">
                                    <div class="row align-items-start">
                                        <div class="col-4">
                                        <img src="img-academicos/hector.jpg" class="img-fluid" alt="Hector">
                                        </div>
                                        <div class="col-8">
                                        
                                        <p>Nombre: Hector Cornide<br><br>Edad: 20 anios<br><br>Rol: Profesor<br></p>
                                        </div>
                                    </div>
                                    <div class="row mt-4 mb-3">
                                        <div class="col-12">
                                        <p>Esta es una descripción adicional del perfil. Aquí se puede incluir más detalles o información relevante.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <a href="https://diicc.uda.cl/academico.php?id=4">
                                            <button type="button" class="btn btn-primary">
                                                <img src="img-academicos/user-icon.svg" style="margin-right: 5px; width:20px;">Ir a Web Personal
                                            </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h4 class="text-center">John Castro</h4>
                            <p class="text-center">Profesor</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                            <img src="img-academicos/eye.svg" style="margin-right: 5px; width:20px;">Ver perfil
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Perfil</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <div class="container">
                                    <div class="row align-items-start">
                                        <div class="col-4">
                                        <img src="img-academicos/John.jpg" class="img-fluid" alt="John">
                                        </div>
                                        <div class="col-8">
                                        
                                        <p><br>Nombre: John Castro<br><br>Edad: 20 anios<br><br>Rol: Profesor<br></p>
                                        </div>
                                    </div>
                                    <div class="row mt-4 mb-3">
                                        <div class="col-12">
                                        <p>Esta es una descripción adicional del perfil. Aquí se puede incluir más detalles o información relevante.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <a href="https://diicc.uda.cl/academico.php?id=8">
                                            <button type="button" class="btn btn-primary">
                                                <img src="img-academicos/user-icon.svg" style="margin-right: 5px; width:20px;">Ir a Web Personal
                                            </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h4 class="text-center">Vladimir Riffo</h4>
                            <p class="text-center">Director de Investigacion</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                            <img src="img-academicos/eye.svg" style="margin-right: 5px; width:20px;">Ver perfil
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Perfil</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <div class="container">
                                    <div class="row align-items-start">
                                        <div class="col-4">
                                        <img src="img-academicos/Riffo.jpg" class="img-fluid" alt="Riffo">
                                        </div>
                                        <div class="col-8">
                                        
                                        <p><br>Nombre: Vladimir Riffo<br><br>Edad: 20 anios<br><br>Rol: Director<br></p>
                                        </div>
                                    </div>
                                    <div class="row mt-4 mb-3">
                                        <div class="col-12">
                                        <p>Esta es una descripción adicional del perfil. Aquí se puede incluir más detalles o información relevante.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <a href="https://diicc.uda.cl/academico.php?id=6">
                                            <button type="button" class="btn btn-primary">
                                                <img src="img-academicos/user-icon.svg" style="margin-right: 5px; width:20px;">Ir a Web Personal
                                            </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h4 class="text-center">Wilson Castillo</h4>
                            <p class="text-center">Coordinador</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                            <img src="img-academicos/eye.svg" style="margin-right: 5px; width:20px;">Ver perfil
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Perfil</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <div class="container">
                                    <div class="row align-items-start">
                                        <div class="col-4">
                                        <img src="img-academicos/Wilson.jpg" class="img-fluid" alt="Wilson">
                                        </div>
                                        <div class="col-8">
                                        
                                        <p><br>Nombre: Wilson Castillo<br><br>Edad: 20 anios<br><br>Rol: Coordinador<br></p>
                                        </div>
                                    </div>
                                    <div class="row mt-4 mb-3">
                                        <div class="col-12">
                                        <p>Esta es una descripción adicional del perfil. Aquí se puede incluir más detalles o información relevante.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <a href="https://diicc.uda.cl/academico.php?id=9">
                                            <button type="button" class="btn btn-primary">
                                                <img src="img-academicos/user-icon.svg" style="margin-right: 5px; width:20px;">Ir a Web Personal
                                            </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="AreasDeInvestigacion" class="section-margin"><!--2.2 Areas de Investigacion-->
            <div class="section-margin mx-auto my-auto">
                <div class="d-flex justify-content-center align-items-center bg-white w-100" style="height: 150px;">
                    <h2 style="box-shadow: inset 0 -2px 0 #dbca11">Areas de Investigacion</h2>
                </div>
                <div class="row mx-auto" style="border-bottom: 2px solid #364c59; width:1200px; height: 300px;">
                    <div class="col w-25 d-flex justify-content-center">
                        <img src="img-areas-inv/img-area-inv-1.jpg" class="mx-auto my-auto rounded-circle" width="200px;">
                    </div>
                    <div class="col w-75 d-flex flex-column justify-content-left my-auto p-3">
                        <h4>Ingenieria de Software</h4>
                        <p>La Ingeniería de Software comprende procesos, metodologías, métodos, herramientas, y personas que tienen por objetivo producir un producto software de calidad. La investigación en esta área se orienta a proponer mejoras en el proceso de desarrollo y en la generación de productos que satisfagan los requerimientos cada vez más sofisticados de los usuarios. Sus líneas actuales de investigación son: Ingeniería de Requisitos, Usabilidad, Procesos Software.</p>
                    </div>
                </div>
                <div class="row mx-auto" style="border-bottom: 2px solid #364c59; width:1200px; height: 300px;">
                    <div class="col w-25 d-flex justify-content-center">
                        <img src="img-areas-inv/img-area-inv-2.jpg" class="mx-auto my-auto rounded-circle" width="200px;">
                    </div>
                    <div class="col w-75 d-flex flex-column justify-content-left my-auto p-3">
                        <h4>Gestion de Tecnologias de Informacion</h4>
                        <p>La información cada vez más valiosa en las organizaciones requiere de procesos, tecnologías y técnicas adecuadas para su procesamiento. El uso correcto de los datos y la generación de información otorga un activo relevante y diferenciador para las empresas e instituciones. Esta área tiene que ver con líneas como TICs, Dataminig, Big data, entre otros.</p>
                    </div>
                </div>
                <div class="row mx-auto" style="border-bottom: 2px solid #364c59; width:1200px; height: 300px;">
                    <div class="col w-25 d-flex justify-content-center">
                        <img src="img-areas-inv/img-area-inv-3.jpg" class="mx-auto my-auto rounded-circle" width="200px;">
                    </div>
                    <div class="col w-75 d-flex flex-column justify-content-left my-auto p-3">
                        <h4>Inteligencia de Maquinas</h4>
                        <p>La ciencia de computación ha facilitado la creación de tecnologías con capacidades de procesamiento, almacenamiento y percepción similares a las de los seres humanos. Esta área pretende realizar mejoras en estas capacidades de tal forma que generen productos transferibles al entorno y que ayuden al desarrollo económico de los países. En este momento contamos con líneas como: Redes neuronales, Procesamiento de imágenes, Visión por computador, Reconocimiento de patrones.</p>
                    </div>
                </div>
            </div>
        </section>

  <section id="AdmisionYRequisitos" class="section-margin my-5"><!--2.3Admision-->
              <div class="container my-5">
                  <div class="d-flex justify-content-center align-items-center bg-white w-100 mb-3" style="height: 150px;">
                      <h2 style="box-shadow: inset 0 -2px 0 #dbca11">Admision y Requisitos</h2>
                  </div>
                  <div style="width: 1200px; height: 700px;">
                      <div class="row primary-color h-100">
                          <div class="col h-100 p-4 d-flex flex-column">
                              <h3 class="text-white text-center mt-4 mb-5">Postulacion</h3>
                              <p class="text-white text-justify">Se inicia la convocatoria de postulación para el programa de "MAGÍSTER EN INFORMÁTICA Y CIENCIAS DE LA COMPUTACIÓN". Podrán ser postulantes todos aquellos que cumplan con los requisitos asociados.

                              "La Universidad de Atacama ofrece becas de liberación de arancel y la posibildad de una ayuda económica, otorgables de acuerdo a la exigencia del reglamento"
                              <ul class="text-white text-justify">
                              <li class="m-2">- Postulación de las bases: 17 de noviembre del 2023</li>
                              <li class="m-2">- Fin recepción documentación postulantes: 15 de diciembre del 2023</li>
                              <li class="m-2">- Entrevista a los postulantes: 18 - 22 de diciembre del 2023</li>
                              </ul>
                              </p>
                          </div>
                          <div class="col p-0 h-100">
                              <img src="img-magister-desc/img-magister-desc-3.jpg" style="width: 100%; height: 100%; object-fit: cover;">
                          </div>
                          <div class="col secondary-color h-100 p-4 d-flex flex-column">
                              <h3 class="text-center mt-4 mb-5">Requisitos</h3>
                              <p class="text-justify">1.- Estar en posesión de grado académico Licenciado en Ciencias de la Ingeniería y un título profesional universitario en el área de la computación e informática o afín, con un mínimo de cuatro años de estudio, y con nivel medio de lectura en inglés.

                              <br><br>2.-Los estudiantes del plan de la carrera de Ingeniería civil en computación e informática de la Universidad de Atacama podrán postular al programa si han cursado completamente el quinto año de la carrera.

                              <br><br>Documentación: Solicitud de postulación, carta de intensiones, certificado de grado y título (si procede), curriculum vitae, fotocopia de cédula de indentidad, certificado de notas si procede, certificado de lectura de Inglés si lo tiene.
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

       


        <section id="PlanDeEstudios" class="section-margin"><!--4. Plan de Estudios-->
        <div style="display: flex; justify-content: center; align-items: center; background-color: white; width: 100%; height: 150px;">
                <h2 style="box-shadow: inset 0 -2px 0 #dbca11">Estudios</h2>
        </div>
            <div class="layout mt-5 mb-5">
                <div class="container">
                    <div class="col-md-10 customized-text wow fadeInDown " >

                        <h2>Grado</h2>
                        <p>Magíster en Informática y Ciencias de la Computación
                        </p>
                        <h2>Objetivo</h2>
                        <p>El objetivo del programa es formar capital humano con conocimientos sólidos y avanzados
                             en computación e informática y en metodología de investigación que lo capaciten para 
                             impulsar y desarrollar investigación fundamental y aplicada en forma autónoma, y prestar
                              asesoría especializada en lo referente a la comprensión y aplicación de la computación.
                        </p>                         
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 custom-sec-img wow fadeInDown" >
               
                    <table class="table mx-5">
                    <thead >
                        <tr >
                        <th scope="col">1° semestre <br>9/9</th>
                        <th scope="col">2° semestre <br>6/6</th>
                        <th scope="col">3° semestre <br>3/12</th>
                        <th scope="col">4° semestre <br>3/12</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="col" style="background-color: #58D68D; margin-right: 30px 30px;">Asignatura fundamental <br> 3/3</th>
                        <td scope="col" style="background-color: #CD6155; margin: 30px;">Seminario de investigación <br>  3/3</td>
                        <td scope="col" style="background-color: #5DADE2; margin: 30px">Tesis de grado 1<br> 3/12</td>
                        <td scope="col" style="background-color: #5DADE2;">Tesis de grado 2<br> 3/12</td>
                        </tr>
                        <tr>
                        <th scope="col"  style="background-color: #BB8FCE ;">Tópico 1 <br>3/3</th>
                        <td scope="col" style="background-color: #BB8FCE ;">tópico 2 <br>3/3</td>                       
                        </tr>
                        <tr>
                        <th style="background-color: #CD6155; margin: 30px;">Metodologia de investigación <br>3/3</th>
                        
                        </tr>
                    </tbody>
                    </table>                    
                </div>
            </div>    
        <div class="container " id="estudioscolum">
            <div class="row">
                <div class="col">
                    <div class="perfile">
                        <h2>Perfil de egreso</h2>
                        <p>Los graduados del programa serán profesionales de alto nivel de especialización, con capacidad 
                        y autonomía para emprender proyectos de investigación fundamental y aplicada en diversas líneas 
                        de investigación de la informática y la computación. Las líneas de investigación comprenden, en
                        principio y en forma no exclusiva, inteligencia de máquinas, ingeniería de software, sistemas 
                        y tecnologías de información.
                        </p>                                 
                    </div>
                </div>
                <div class="col">
                    <div class="perfilp">
                        <h2>Perfil profesional</h2>
                        <p>El egresado del programa estará capacitado para: continuar estudios de doctorado en Ciencias de la
                        Informática o de la Computación; para incorporarse a equipos académicos de educación superior; 
                        para integrar equipos de investigación en centros de ámbito público y privado; o para realizar 
                        investigación,  innovación y transferencia tecnológica en el sector productivo.
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="duracion d-flex justify-content-center">
                        <div class="col-md-6 col-sm-6 col-xs-12 customized-text wow fadeInDown">
                                    <h2>Duración</h2>
                                    <p>4 Semestres
                                    </p>
                                    <h2>Modalidad</h2>
                                    <p>Diurna
                                    </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 customized-text wow fadeInDown">
                                    <h2>Horarios</h2>
                                    <p>Lunes a Viernes
                                    </p>
                                    <h2>Créditos</h2>
                                    <p>60 SCT (Sistema de Creditos Transferibles)/1440 Hrs.
                                    </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <div class="requisitos">
                    <h2>Requisitos de postulación</h2>
                        <p>1.- Estar en posesión del grado académico de Licenciado en Ciencias de la Ingeniería 
                            y un título profesional universitario en el área de la computación e informática o afín, 
                            con un mínimo de cuatro años de estudio, y con nivel medio de lectura en inglés.
                        </p>
                        <p>
                            2.- Los estudiantes del plan de la carrera de Ingeniería civil en computación e informática 
                            de la Universidad de Atacama podrán postular al programa si han cursado completamente el quinto 
                            año de la carrera.
                        </p>
                </div>
                </div>
                <div class="col">
                    <div class="lineaBeca">
                        <h2>Lineas de investigación</h2>
                        <p>1.- Inteligencia de Máquinas
                        </p>
                        <p>
                            2.- Gestión de Tecnologías de Información
                        </p>
                        <p>
                            3.- Ingeniería de Software
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="document">
                        <h2>Becas</h2>
                        <p>Existe la posibilidad de becas para exención de matriculas y manutención.
                        </p>
                        <h2>Documentación</h2>
                        <p>Solicitud de postulación, carta de intenciones, certificado de grado y título
                            (si procede), curriculum vitae, fotocopia cédula de identidad, certificado de
                             notas si procede, certificado de lectura de Inglés (si lo tiene).
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </section>
                      
         <section class="container" id="InvestigacionYProyectos"><!--5. Investigación y proyectos-->

        <div style="display: flex; justify-content: center; align-items: center; background-color: white; width: 100%; height: 150px;">
                <h2 style="box-shadow: inset 0 -2px 0 #dbca11">Investigación y Proyectos</h2>
            </div>

            <div class ="row">


                

                <div class ="col-3 mx-5 mb-5">
                    <div id="carrusel1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card">
                                    <img class="img-fluid" src="img-secciones/img-seccion-proyectos-investigacion/img-card1.jpg" alt="Card image 1">
                                    <div class="card-body">
                                    <p>Descubre las fronteras de la innovación en la informática con nuestras investigaciones pioneras.</p>
                                    </div>
                                </div>
                            </div>
                                
                        <div class="carousel-item">
                            <div class="card">
                                    <img class="img-fluid" src="img-secciones/img-seccion-proyectos-investigacion/img-card2.jpg" alt="Card image 2">
                                    <div class="card-body">
                                    <p>Exploramos los misterios de la inteligencia artificial y la visión por computadora en la detección de objetos peligrosos en imágenes de rayos X. .</p>
                                    </div>
                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <div class="card">
                                    <img class="img-fluid" src="img-secciones/img-seccion-proyectos-investigacion/img-card3.jpg" alt="Card image 3">
                                    <div class="card-body">
                                    <p>Sumérgete en el futuro de la informática con proyectos que van más allá de los límites convencionales.</p>
                            </div>
                            </div>
                        </div>

                    </div>

                                <a class="carousel-control-prev" href="#carrusel1" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        
                                </a>
                                <a class="carousel-control-next" href="#carrusel1" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>

                                </a>
                                </div>
                </div>







    
              
                <div class ="col-7">
                  <div style ="display: block;width: 100%;overflow-x: auto; overflow-y: auto; max-height: 200px">
                <!-- TABLAx -->
                <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Área de Investigación</th>
        <th scope="col">Investigador</th>
        <th scope="col">Título</th>
        <th scope="col">Año de Ejecución</th>
        <th scope="col">Detalles</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Ingeniería de Software</td>
        <td>Dante Carrizo</td>
        <td>Mejora del proceso de educción de requisitos software por medio de evidencia empírica (1º Parte)</td>
        <td>2010</td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#proyectoModal" data-investigador="Dante Carrizo" data-titulo="Mejora del proceso de educción de requisitos software por medio de evidencia empírica (1º Parte)" data-tipo-fondo="DIUDA2010" data-ano-ejecucion="2010">Ver Detalles</button></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Gestión de Tecnologías de Información</td>
        <td>Alejandro Cataldo</td>
        <td>Evaluación de la usabilidad de aplicaciones móviles multi-plataforma</td>
        <td>2016</td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#proyectoModal" data-investigador="Alejandro Cataldo" data-titulo="Evaluación de la usabilidad de aplicaciones móviles multi-plataforma" data-tipo-fondo="DIUDA" data-ano-ejecucion="2016">Ver Detalles</button></td>
      </tr>

    </tbody>
  </table>
</div>
</div>

<!-- MODAL -->
<div class="modal fade" id="proyectoModal" tabindex="-1" role="dialog" aria-labelledby="proyectoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="proyectoModalLabel">DETALLES</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- CONTENIDO QUE VA CAMBIANDO DEL MODAL -->
        <p id="investigador"></p>
        <p id="titulo"></p>
        <p id="tipo-fondo"></p>
        <p id="ano-ejecucion"></p>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>

            </div>


            </div>



        </section>
                      
        <section id="Experiencias" class="section-margin"><!--6. Experiencias estudiantiles-->                   
        <div style="display: flex; justify-content: center; align-items: center; background-color: white; width: 100%; height: 150px;">
                <h2 style="box-shadow: inset 0 -2px 0 #dbca11">Experiencias estudiantiles</h2>
        </div>
    <article>     
        <div class="container text-center"> 
            <div class="row " id="custom-cards">  
                                        
                <div class="col">
                    <div class="custom-card d-flex flex-column">
                        <img src="profesores\Andres.jpg" class="custom-card-img-top" style="width: 220px;" alt="">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">Andrés Alfaro</h5>
                            <em class="custom-card-text">
                                Este programa me equipó con habilidades sólidas en Gestión de Tecnologías de Información.
                                La conexión teoría-práctica es evidente, y la capacidad de asesorar en computación es invaluable.
                                Es fundamental para mi éxito profesional.
                            </em>
                            <p class="custom-card-text" id="custom-small">Graduado</p>                                      
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="custom-card d-flex flex-column">
                        <img src="profesores\incognito.png" class="custom-card-img-top" alt="...">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">Jacqueline Manríquez</h5>
                            <em class="custom-card-text">
                                El magíster en Inteligencia de Máquinas fue desafiante pero gratificante. Ahora, como graduada, me siento preparada para liderar proyectos de investigación gracias a la sólida base construida en este programa.
                            </em> 
                            <p class="custom-card-text" id="custom-small">Graduada</p>                                       
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="custom-card d-flex flex-column">
                        <img src="profesores\incognito.png" class="custom-card-img-top" alt="...">
                        <div class="custom-card-body">
                            <h5 class="custom-card-title">Jorge Rojas</h5>
                            <em class="custom-card-text">
                                Este magíster ha sido un viaje inspirador. La línea de Ingeniería de Software y la metodología de investigación práctica me han moldeado como profesional. Ahora, como graduado, me siento capacitado para liderar proyectos con una perspectiva integral.
                            </em>  
                            <p class="custom-card-text" id="custom-small">Graduado</p>                                      
                        </div>
                    </div>
                </div> 
            </div>
        </div>     
    </article>
</section>


        <section id="Recursos" class="section-margin"><!--7. Recursos academicos-->       
        <div style="display: flex; justify-content: center; align-items: center; background-color: white; width: 100%; height: 150px;">
                <h2 style="box-shadow: inset 0 -2px 0 #dbca11">Recursos Académicos</h2>
        </div>       
            <div class="container">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col" style="width: 500px; margin-top: 40px;">
                            <div id="carouselExampleCaptions" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="Recursos_academicos\Auditorio.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Auditorio</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="Recursos_academicos\Conectividad_y_redes.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Laboratorio de Conectividad y Redes</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="Recursos_academicos\DIICC2(sala_multimedia.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Sala multimedia</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="Recursos_academicos\Magister.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Magister</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="Recursos_academicos\Melquiades.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Laboratorio Melquíades</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="Recursos_academicos\Olimpo.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Laboratorio Olimpo</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="Recursos_academicos\Robotica1.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Laboratorio de Robótica</h5>                                           
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="Recursos_academicos\Salas.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Sala de estudio</h5>                                          
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="Recursos_academicos\SalaEstudio.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Sala de clases</h5>                                          
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="container">
                                <p style="text-align: left; margin-top: 40px;">
                                El Departamento de Ingeniería Civil en Computación e Informática ofrece una completa infraestructura académica. 
                                Destacan el Auditorio Dra. Karina Carvajal Cuello y la Sala Multimedia para eventos y aprendizaje interactivo. 
                                Para el estudio, cuentan con la Sala de Estudios y Sala Modular de Estudios. Además, tres aulas bien equipadas. 
                                Cuatro laboratorios especializados (Robótica, Conectividad y Redes, y dos de Computación) brindan experiencias prácticas en áreas clave. 
                                Estos recursos enriquecen la formación de los estudiantes al aplicar conocimientos en un entorno avanzado.
                                </p><br>                              
                            </div>
                        </div>                                             
                    </div>
                </div>             
                <div class="col" style="margin-top: 40px;">                           
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Auditorio y sala multimedia
                                    </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    Destacan los recursos como el Auditorio Dra. Karina Carvajal Cuello, un espacio multifuncional para 
                                    conferencias y presentaciones. La Sala Multimedia proporciona herramientas audiovisuales avanzadas, 
                                    facilitando el aprendizaje interactivo.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Estudio
                                    </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    Para el estudio individual y en grupo, la institución dispone de una Sala de Estudios y una Sala Modular de Estudios, ambas 
                                    equipadas con recursos necesarios para 
                                    la investigación y el trabajo colaborativo. Tres aulas bien equipadas ofrecen un ambiente propicio para la enseñanza.                                 </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       Laboratorios
                                    </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    El departamento cuenta con cuatro especializados: el Laboratorio de Robótica, el Laboratorio de Conectividad y Redes, y 
                                    dos Laboratorios de Computación. Estos espacios están diseñados para brindar a los estudiantes experiencias prácticas en 
                                    áreas clave de la ingeniería informática, desde el desarrollo de software hasta la implementación de redes y la exploración 
                                    en el campo de la robótica.                                    </div>
                                    </div>
                                </div>                               
                            </div>
                </div>
            </div>
        </section>
        <section  id="Contacto" class="container-fluid"><!--8. Formulario de Contacto y FAQ-->
        <div style="display: flex; justify-content: center; align-items: center; background-color: white; width: 100%; height: 150px;">
                <h2 style="box-shadow: inset 0 -2px 0 #dbca11">Contacto y FAQ</h2>
        </div>


            <div class ="row mx-5 mb-5">


                    

                <div class="col-4 mx-5">

                <img src="img-secciones/img-seccion-contacto-faq/image1.png" alt="Tu Imagen" class="rounded-circle">

                </div>

                <div class="col-5">

                <div id="carrusel2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <div class="card">
                            <div class="card-header">
                            <h5 class="card-title">FAQ</h5>
                            </div>
                            <div class="card-body">
                            <strong> ¿Cuáles son los requisitos de admisión para el Magíster en Informática en su universidad?</strong>
                            <p class ="mt-2" >Los requisitos de admisión incluyen poseer un título universitario en informática o un campo relacionado, una carta de motivación, cartas de recomendación y, en algunos casos, la realización de una entrevista.</p>
                            </div>
                        </div>
                        </div>

                        <div class="carousel-item">
                        <div class="card">
                            <div class="card-header">
                            <h5 class="card-title">FAQ</h5>
                            </div>
                            <div class="card-body">
                            <strong> ¿Cuáles son las áreas de especialización disponibles dentro del programa de Magíster en Informática?</strong>
                            <p class ="mt-2">El programa ofrece diversas áreas de especialización, como inteligencia artificial, seguridad informática, sistemas distribuidos y desarrollo de software avanzado. Los estudiantes pueden elegir la especialización que mejor se alinee con sus intereses y objetivos profesionales.</p>
                            </div>
                        </div>
                        </div>

                        <div class="carousel-item">
                        <div class="card">
                            <div class="card-header">
                            <h5 class="card-title">FAQ</h5>
                            </div>
                            <div class="card-body">
                            <strong>¿Cómo se estructura el plan de estudios del Magíster en Informática y cuánto tiempo dura el programa?</strong>
                            <p class ="mt-2">El plan de estudios se organiza en módulos que cubren aspectos fundamentales y avanzados de la informática. El programa suele tener una duración de dos años, con la posibilidad de realizar proyectos de investigación o prácticas profesionales. La flexibilidad del plan de estudios permite a los estudiantes adaptar su aprendizaje a sus metas específicas.</p>
                            </div>
                        </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carrusel2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            
                    </a>
                    <a class="carousel-control-next" href="#carrusel2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
            
                    </a>
                    </div>

                    
                    
                    


                </div>
                
                <div class="col-2 justify-content-center d-flex mx-5 mb-5 mt-5">

                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formularioContacto">FORMULARIO</button>
                    
              

                </div>




                </div>

                <!-- Modal Contacto -->
                <div class="modal fade" id="formularioContacto" tabindex="-1" role="dialog" aria-labelledby="modalContactoCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">FORMULARIO CONTACTO</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div>
                                <div class="row">
                                    <div class="col-md-6 offset-lg-3">
                                        <form >
                                            <div class="form-group mb-3">
                                                <label for="nombre">RUT:</label>
                                                <input type="text" class="form-control mb-3 mt-3" name ="rut" id="rut" placeholder="Ingresa tu RUT">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="nombre">NOMBRE:</label>
                                                <input type="text" class="form-control mb-3 mt-3" name ="nombre" id="nombre" placeholder="Ingresa tu nombre">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="nombre">FECHA NACIMIENTO:</label>
                                                <input type="text" class="form-control mb-3 mt-3" name ="fecha_nac" id="fecha_nac" placeholder="Ingresa tu fecha de nacimiento">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="nombre">GENERO:</label>
                                                <input type="text" class="form-control mb-3 mt-3" name ="genero" id="genero" placeholder="Ingresa tu género">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="nombre">CORREO:</label>
                                                <input type="email" class="form-control mb-3 mt-3" name ="email" id="email" placeholder="Ingresa tu e-mail">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="nombre">TELEFONO:</label>
                                                <input type="text" class="form-control mb-3 mt-3" name ="telefono" id="telefono" placeholder="Ingresa tu teléfono">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="nombre">DIRECCION:</label>
                                                <input type="text" class="form-control mb-3 mt-3" name ="direccion" id="direccion" placeholder="Ingresa tu dirección">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="nombre">INSTITUCIÓN:</label>
                                                <input type="text" class="form-control mb-3 mt-3" name ="institucion" id="institucion" placeholder="Ingresa tu institución">
                                            </div>
                                            
                                            <input type="submit" class="mt-3 mx-5 mb-3 btn btn-primary btn-block" value="ENVIAR"></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    


          
            
        </section>


    <section><!--9. Footer-->
    <footer class="bg-dark text-light py-3">
    <div>
      <div class="row">

        <div class="col-md-4">
          <strong class ="text-center text-md-left mx-5"> Últimas noticias </strong>
          <p class="text-center text-md-left">Se abren las postulaciones a Magíster 2024</p>
        </div>

        <div class="col-md-3 text-center">
          <img src="logos\logo-corp-diic-lineablanca.png" alt="Logo" class="img-fluid">
        </div>

        <div class="col-md-5 text-center text-md-right">
          <a href="#" ><i class="fab fa-facebook fa-3x mt-4 mx-2"></i></a>
          <a href="#"><i class="fab fa-twitter fa-3x mx-2"></i></a>
          <a href="#"><i class="fab fa-instagram fa-3x mx-2"></i></a>
        </div>
      </div>
    </div>
  </footer>
    </section>

</body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>  
            function validation()  
            {  
                var user=document.flogin.usuario.value;  
                var pass=document.flogin.contrasena.value;  
                if(user.length=="" && pass.length=="") {  
                    alert("Usuario y contraseña están vacíos.");  
                    return false;  
                }  
                else  
                {  
                    if(user.length=="") {  
                        alert("El campo de usuario está vacío.");  
                        return false;  
                    }   
                    if (pass.length=="") {  
                    alert("El campo de contraseña está vacío.");  
                    return false;  
                    }  
                }                             
            }  
        </script>


</html>



