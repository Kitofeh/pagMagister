<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--FUENTES-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <!--STYLE.CSS-->
    <title>Panel Principal</title>
 
</head>

<body>

        

<div class="col-md-8 m-5">
    <table class="table">
        <thead class="table-success table-striped">
            <tr>
                <th>LUNES</th>
                <th>MARTES</th>
                <th>MIERCOLES</th>
                <th>JUEVES</th>
                <th>VIERNES</th>
                <th>SABADO</th>
                <th>DOMINGO</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("../../conexion.php");
            $con = conectar();

            $sql = "SELECT * FROM horario_clases";
            $query = mysqli_query($con, $sql);

            // Creamos un array para almacenar las clases por día
            $clases_por_dia = array(
                "LUNES" => array(),
                "MARTES" => array(),
                "MIERCOLES" => array(),
                "JUEVES" => array(),
                "VIERNES" => array(),
                "SABADO" => array(),
                "DOMINGO" => array()
            );

            // Organizamos las clases por día
            while ($row = mysqli_fetch_array($query)) {
                $dia = strtoupper($row['dia']); // Convertimos a mayúsculas para asegurarnos
                $clases_por_dia[$dia][] = $row;
            }

            // Imprimimos las filas de la tabla
            foreach ($clases_por_dia as $dia => $clases) {
                echo "<tr>";
                foreach ($clases as $clase) {
                    echo "<td>";
                    echo '<button class="open-modal btn btn-link" data-toggle="modal" data-target="#claseModal" data-dia="' . $dia . '" data-id_clase="' . $clase['ID_CLASE'] . '">' . $clase['nombre'] . "<br>" . $clase['hora_inicio'] . " - " . $clase['hora_fin'] . '</button>';
                    echo "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Modal para guardar/modificar/eliminar -->
<div class="modal fade" id="claseModal" tabindex="-1" role="dialog" aria-labelledby="claseModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Contenido del formulario -->
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).on('click', '.open-modal', function () {
        var dia = $(this).data('dia');
        var id_clase = $(this).data('id_clase');
        var modal = $('#claseModal');
        modal.find('.modal-content').load('formulario.php?dia=' + dia + '&id_clase=' + id_clase, function () {
            modal.modal('show');
        });
    });
</script>

<script src="
https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js
"
></script>


</body>
</html>