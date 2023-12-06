<?php 
include("../../conexion.php");
$con = conectar();

$sql="SELECT * FROM noticia_importante WHERE id='1'";
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Pagina de Administracion Magister UDA</title>
</head>
<body>

    <div class="d-flex flex-column justify-content-center" style="margin: 300px 50px;">
        <form action="ActualizarNoticiaImportante.php" method="POST">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titulo de la noticia</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="titulo" value="<?php echo $row['titulo']?>">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Cuerpo de la noticia</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="cuerpo" rows="3"><?php echo $row['cuerpo']?></textarea>
            </div>
            <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </form>
    </div>

</body>
</html>
