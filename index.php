<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Web Magister UDA</title>
</head>
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
                    <li class="px-2"><a href="#Contacto" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);">Contacto</a></li>
                    <li class="px-2"><a href="#PreguntasFrecuentes" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);">Preguntas Frecuentes</a></li>
                </ul>
            </nav>
        </section>

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

    <main><!--Cuerpo de la Web-->

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

        <section id="NoticiasYEventos" class="section-margin"><!--Noticias y Eventos-->
            <div class="d-flex justify-content-center align-items-center bg-white w-100" style="height: 150px;">
                <h2 style="box-shadow: inset 0 -2px 0 #dbca11">Noticias y Eventos</h2>
            </div>
            <div class="my-5"><!--Tarjeta Ancha-->
                <div class="card">
                    <div class="card-header">
                        Informacion mas reciente
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Sigue nuestros pasos junto a Magister UDA</h5>
                        <p class="card-text">Con la ultima informacion acerca de los procesos de Posgrado de la institucion.</p>
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
                <div class="row">
                    <div class="col"><!--Calendario-->
                        <div class="my-5">
                            <h3>Calendario de Eventos</h3>
                        </div>
                        <table class="table table-bordered">
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
                                <td class="p-5"></td>
                                <td class="p-5"></td>
                                <td class="p-5">1</td>
                                <td class="p-5">2</td>
                                <td class="p-5">3</td>
                                <td class="p-5">4</td>
                                <td class="p-5">5</td>
                                </tr>
                                <tr class="p-5">
                                <td class="p-5">6</td>
                                <td class="p-5">7</td>
                                <td class="p-5">8</td>
                                <td class="p-5">9</td>
                                <td class="p-5">10</td>
                                <td class="p-5">11</td>
                                <td class="p-5">12</td>
                                </tr>
                                <tr>
                                <td class="p-5">13</td>
                                <td class="p-5">14</td>
                                <td class="p-5">15</td>
                                <td class="p-5">16</td>
                                <td class="p-5">17</td>
                                <td class="p-5">18</td>
                                <td class="p-5">19</td>
                                </tr>
                                <tr>
                                <td class="p-5">20</td>
                                <td class="p-5">21</td>
                                <td class="p-5">22</td>
                                <td class="p-5">23</td>
                                <td class="p-5">24</td>
                                <td class="p-5">25</td>
                                <td class="p-5">26</td>
                                </tr>
                                <tr class="p-5">
                                <td class="p-5">27</td>
                                <td class="p-5">28</td>
                                <td class="p-5">29</td>
                                <td class="p-5">30</td>
                                <td class="p-5">31</td>
                                <td class="p-5"></td>
                                <td class="p-5"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section id="AcercaDelPosgrado" class="section-margin my-5" style="height:700px;"><!--Acerca del Posgrado-->
            <div class="d-flex justify-content-center align-items-center bg-white w-100" style="height: 150px;">
                <h2 style="box-shadow: inset 0 -2px 0 #dbca11">Acerca del Posgrado</h2>
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

        <section id="Academicos" class="section-margin"><!--Equipo de Academicos-->
            <div class="d-flex justify-content-center align-items-center bg-white w-100" style="height: 150px;">
                <h2 style="box-shadow: inset 0 -2px 0 #dbca11">Equipo de Academicos</h2>
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

        <section id="AreasDeInvestigacion" class="section-margin">
            <div class="section-margin mx-auto my-auto"><!--Areas de Investigacion-->
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

        <section id="AdmisionYRequisitos" class="section-margin my-5"><!--Admision-->
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

        <section id="Requisitos" class="section-margin"><!--Requisitos-->
            
        </section>

        <section id="PlanDeEstudios" class="section-margin"><!--Plan de Estudios-->
            
        </section>

        <section id="Experiencias" class="section-margin"><!--Experiencias-->
            
        </section>

        <section id="Recursos" class="section-margin"><!--Recursos-->
            
        </section>

        <section id="Contactos" class="section-margin"><!--Contacto-->
            
        </section>

        <section id="PreguntasFrecuentes" class="section-margin"><!--Preguntas mas frecuentes-->
            
        </section>

    </main>

    <section class="section-margin"><!--Footer-->
        <footer>

        </footer>
    </section>

</body>
</html>



