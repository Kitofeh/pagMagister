<?php 

include_once("../../conexion.php");
$con = conectar();

?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 1";
$query=mysqli_query($con,$sql);

$titulos_1 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_1 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'] ;

}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 2";
$query=mysqli_query($con,$sql);

$titulos_2 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_2 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 3";
$query=mysqli_query($con,$sql);

$titulos_3 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_3 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 4";
$query=mysqli_query($con,$sql);

$titulos_4 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_4 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 5";
$query=mysqli_query($con,$sql);

$titulos_5 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_5 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 6";
$query=mysqli_query($con,$sql);

$titulos_6 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_6 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'] ;
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 7";
$query=mysqli_query($con,$sql);

$titulos_7 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_7 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'] ;
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 8";
$query=mysqli_query($con,$sql);

$titulos_8 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_8 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'] ;
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 9";
$query=mysqli_query($con,$sql);

$titulos_9 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_9 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'] ;
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 10";
$query=mysqli_query($con,$sql);

$titulos_10 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_10 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'] ;
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 11";
$query=mysqli_query($con,$sql);

$titulos_11 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_11 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'] ;
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 12";
$query=mysqli_query($con,$sql);

$titulos_12 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_12 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 13";
$query=mysqli_query($con,$sql);

$titulos_13 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_13 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 14";
$query=mysqli_query($con,$sql);

$titulos_14 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_14 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 15";
$query=mysqli_query($con,$sql);

$titulos_15 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_15 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'] ;
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 16";
$query=mysqli_query($con,$sql);

$titulos_16 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_16 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'] ;
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 17";
$query=mysqli_query($con,$sql);

$titulos_17 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_17 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'] ;
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 18";
$query=mysqli_query($con,$sql);

$titulos_18 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_18 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'] ;
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 19";
$query=mysqli_query($con,$sql);

$titulos_19 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_19 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 20";
$query=mysqli_query($con,$sql);

$titulos_20 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_20 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'] ;
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 21";
$query=mysqli_query($con,$sql);

$titulos_21 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_21 .= "NOMBRE: " . $row['NOMBRE_CLASE'] . ", LUGAR: " . $row['LUGAR_CLASE'] . ", NOMBRE PROFESOR: " . $row['NOMBRE_PROFESOR'] . ", UBICACION:" . $row['UBICACION'] ;
}
?>

