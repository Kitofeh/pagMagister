<?php 
include("../../conexion.php");
$con = conectar();

$sql="SELECT * FROM calendario_eventos";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Calendario de Eventos Magister UDA</title>
</head>
<body>

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

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AgregarEvento">
    Agregar Evento
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

            <form action="AgregarEvento.php" method="POST" autocomplete="off">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="titulo" placeholder="Titulo del Evento" required>
                    <label for="floatingInput">Titulo del Evento</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="descripcion" style="height: 100px" required></textarea>
                    <label for="floatingTextarea2">Descripcion del Evento</label>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col-md">
                        <div class="form-floating">
                        <label for="fechaHora">Fecha y Hora de Inicio:</label><br>
                        <input type="datetime-local" id="fechaHora" name="fechainicio" name="FechaInicial" required><br>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <label for="fechaHora">Fecha y Hora de Fin:</label><br>
                            <input type="datetime-local" id="fechaHora" name="fechafin" required><br>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="ubicacion" placeholder="Ubicacion del Evento" required>
                    <label for="floatingInput">Ubicacion del Evento</label>
                </div>
                <div class="form-floating">
                    <select class="form-select" id="floatingSelectDisabled" name="tipo" aria-label="Floating label disabled select example" required>
                        <option selected>Open this select menu</option>
                        <option value="Conferencia">Conferencia</option>
                        <option value="Seminario">Seminario</option>
                        <option value="Taller">Taller</option>
                        <option value="Otro">Otro</option>
                    </select>
                    <label for="floatingSelectDisabled">Tipo de Evento</label>
                </div>
    
        </div>
                <div class="modal-footer">
                    <input type="submit">
                </div>
            </form>
        </div>
    </div>
    </div>
    
</body>
</html>