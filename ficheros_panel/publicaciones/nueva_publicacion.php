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
        <form action ="agregar_publicacion.php" method="POST" enctype="multipart/form-data">
            <input type="number" class ="mb-3 form-control" name = "COD_PUBLICACION" placeholder = "COD. PUBLICACION">
            <input type="text" class ="mb-3 form-control" name = "AREA" placeholder = "AREA">
            <input type="number" class ="mb-3 form-control" name = "COD_AUTOR" placeholder = "COD_AUTOR">
            <input type="number" class ="mb-3 form-control" name = "COHORTE" placeholder = "COHORTE">
            <input type="number" class ="mb-3 form-control" name = "COD_ESTUDIANTE" placeholder = "COD_ESTUDIANTE">
            <input type="text" class ="mb-3 form-control" name = "TITULO" placeholder="TITULO" required>
            <input type="text" class ="mb-3 form-control" name = "INDEXACION" placeholder = "INDEXACION">
            <input type="number" class ="mb-3 form-control" name = "FECHA" placeholder = "FECHA">
            <input type="text" class ="mb-3 form-control" name = "EVENTO" placeholder = "EVENTO">

            <input type="submit" class ="btn btn-primary btn-success">
            <a class ="btn btn-dark mx-2" href="index.php">Regresar</a> 
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>