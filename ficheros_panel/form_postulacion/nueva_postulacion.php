<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>    
    <div class="container m-5">
        <form action ="agregar_postulacion.php" method="POST" enctype="multipart/form-data">
            <input type="text" class ="mb-3 form-control" name = "RUT" placeholder = "RUT" required>
            <input type="text" class ="mb-3 form-control" name = "NOMBRE" placeholder = "NOMBRE" required>
            <input type="date" class ="mb-3 form-control" name = "FECHA_NAC" placeholder = "FECHA NACIMIENTO">
            <input type="text" class ="mb-3 form-control"  name = "GENERO" placeholder = "GENERO">
            <input type="email" class ="mb-3 form-control" name = "CORREO" placeholder = "CORREO" required>
            <input type="text" class ="mb-3 form-control" name = "TELEFONO" placeholder="TELÉFONO">
            <input type="text" class ="mb-3 form-control" name = "DIRECCION" placeholder = "DIRECCIÓN">
            <input type="text" class ="mb-3 form-control" name = "INSTITUCION" placeholder = "INSTITUCIÓN">
            <input type="text" class ="mb-3 form-control" name = "GRADO" placeholder = "GRADO" >    
            <input type="text" class ="mb-3 form-control" name = "ANO_GRADUACION" placeholder = "AÑO GRADUACIÓN" >    
            <input type="text" class ="mb-3 form-control" name = "CAMPO_ESTUDIO" placeholder = "CAMPO DE ESTUDIO" >      
            <input type="submit" class ="btn btn-primary btn-success">
            <a class ="btn btn-dark mx-2" href="index.php">Regresar</a> 
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>