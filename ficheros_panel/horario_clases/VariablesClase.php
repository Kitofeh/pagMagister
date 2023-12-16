<?php 

include_once("../../conexion.php");
$con = conectar();

?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 1";
$query=mysqli_query($con,$sql);

$titulos_1 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_1 = $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];

}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 2";
$query=mysqli_query($con,$sql);

$titulos_2 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_2 = $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 3";
$query=mysqli_query($con,$sql);

$titulos_3 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_3 = $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 4";
$query=mysqli_query($con,$sql);

$titulos_4 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_4 .= $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 5";
$query=mysqli_query($con,$sql);

$titulos_5 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_5 .= $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 6";
$query=mysqli_query($con,$sql);

$titulos_6 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_6 .= $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 7";
$query=mysqli_query($con,$sql);

$titulos_7 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_7 .= $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 8";
$query=mysqli_query($con,$sql);

$titulos_8 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_8 .= $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 9";
$query=mysqli_query($con,$sql);

$titulos_9 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_9 .= $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 10";
$query=mysqli_query($con,$sql);

$titulos_10 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_10 .= $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 11";
$query=mysqli_query($con,$sql);

$titulos_11 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_11 .= $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 12";
$query=mysqli_query($con,$sql);

$titulos_12 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_12 .= $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 13";
$query=mysqli_query($con,$sql);

$titulos_13 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_13 .= $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 14";
$query=mysqli_query($con,$sql);

$titulos_14 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_14 .= $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 15";
$query=mysqli_query($con,$sql);

$titulos_15 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_15 .= $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 16";
$query=mysqli_query($con,$sql);

$titulos_16 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_16 .= $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
?>
}

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 17";
$query=mysqli_query($con,$sql);

$titulos_17 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_17 .= $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 18";
$query=mysqli_query($con,$sql);

$titulos_18 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_18 .= $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 19";
$query=mysqli_query($con,$sql);

$titulos_19 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_19 .= $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 20";
$query=mysqli_query($con,$sql);

$titulos_20 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_20 .= $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE SUBSTRING(`UBICACION`, 1, 1) = 21";
$query=mysqli_query($con,$sql);

$titulos_21 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_21 .= $row['NOMBRE_CLASE'] . "\n" . $row['LUGAR_CLASE'] . "\n" . $row['NOMBRE_PROFESOR'];
}
?>

