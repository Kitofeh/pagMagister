<?php 

include_once("../../conexion.php");
$con = conectar();

?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE `UBICACION` = 1";
$query=mysqli_query($con,$sql);

$titulos_1 = "";
while($row=mysqli_fetch_array($query)){

    $titulos_1 .= '<center>' . $row['NOMBRE_CLASE'] . '</center>' ."\n";
    $titulos_1 .= '<center>' . $row['LUGAR_CLASE'] . '</center>' ."\n";
    $titulos_1 .= '<center>' . $row['NOMBRE_PROFESOR'] . '</center>';

}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE `UBICACION` = 2";
$query=mysqli_query($con,$sql);

$titulos_2 = "";
while($row=mysqli_fetch_array($query)){

    $titulos_2 .= '<center>' . $row['NOMBRE_CLASE'] . '</center>' ."\n";
    $titulos_2 .= '<center>' . $row['LUGAR_CLASE'] . '</center>' ."\n";
    $titulos_2 .= '<center>' . $row['NOMBRE_PROFESOR'] . '</center>';

}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE `UBICACION` = 3";
$query=mysqli_query($con,$sql);

$titulos_3 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_3 .= '<center>' . $row['NOMBRE_CLASE'] . '</center>' ."\n";
    $titulos_3 .= '<center>' . $row['LUGAR_CLASE'] . '</center>' ."\n";
    $titulos_3 .= '<center>' . $row['NOMBRE_PROFESOR'] . '</center>';
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE `UBICACION` = 4";
$query=mysqli_query($con,$sql);

$titulos_4 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_4 .= '<center>' . $row['NOMBRE_CLASE'] . '</center>' ."\n";
    $titulos_4 .= '<center>' . $row['LUGAR_CLASE'] . '</center>' ."\n";
    $titulos_4 .= '<center>' . $row['NOMBRE_PROFESOR'] . '</center>';
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE `UBICACION` = 5";
$query=mysqli_query($con,$sql);

$titulos_5 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_5 .= '<center>' . $row['NOMBRE_CLASE'] . '</center>' ."\n";
    $titulos_5 .= '<center>' . $row['LUGAR_CLASE'] . '</center>' ."\n";
    $titulos_5 .= '<center>' . $row['NOMBRE_PROFESOR'] . '</center>';
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE `UBICACION` = 6";
$query=mysqli_query($con,$sql);

$titulos_6 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_6 .= '<center>' . $row['NOMBRE_CLASE'] . '</center>' ."\n";
    $titulos_6 .= '<center>' . $row['LUGAR_CLASE'] . '</center>' ."\n";
    $titulos_6 .= '<center>' . $row['NOMBRE_PROFESOR'] . '</center>';
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE `UBICACION` = 7";
$query=mysqli_query($con,$sql);

$titulos_7 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_7 .= '<center>' . $row['NOMBRE_CLASE'] . '</center>' ."\n";
    $titulos_7 .= '<center>' . $row['LUGAR_CLASE'] . '</center>' ."\n";
    $titulos_7 .= '<center>' . $row['NOMBRE_PROFESOR'] . '</center>';
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE `UBICACION` = 8";
$query=mysqli_query($con,$sql);

$titulos_8 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_8 .= '<center>' . $row['NOMBRE_CLASE'] . '</center>' ."\n";
    $titulos_8 .= '<center>' . $row['LUGAR_CLASE'] . '</center>' ."\n";
    $titulos_8 .= '<center>' . $row['NOMBRE_PROFESOR'] . '</center>';
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE `UBICACION` = 9";
$query=mysqli_query($con,$sql);

$titulos_9 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_9 .= '<center>' . $row['NOMBRE_CLASE'] . '</center>' ."\n";
    $titulos_9 .= '<center>' . $row['LUGAR_CLASE'] . '</center>' ."\n";
    $titulos_9 .= '<center>' . $row['NOMBRE_PROFESOR'] . '</center>';
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE `UBICACION` = 10";
$query=mysqli_query($con,$sql);

$titulos_10 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_10 .= '<center>' . $row['NOMBRE_CLASE'] . '</center>' ."\n";
    $titulos_10.= '<center>' . $row['LUGAR_CLASE'] . '</center>' ."\n";
    $titulos_10 .= '<center>' . $row['NOMBRE_PROFESOR'] . '</center>';
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE `UBICACION` = 11";
$query=mysqli_query($con,$sql);

$titulos_11 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_11 .= '<center>' . $row['NOMBRE_CLASE'] . '</center>' ."\n";
    $titulos_11 .= '<center>' . $row['LUGAR_CLASE'] . '</center>' ."\n";
    $titulos_11 .= '<center>' . $row['NOMBRE_PROFESOR'] . '</center>';
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE `UBICACION` = 12";
$query=mysqli_query($con,$sql);

$titulos_12 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_12 .= '<center>' . $row['NOMBRE_CLASE'] . '</center>' ."\n";
    $titulos_12 .= '<center>' . $row['LUGAR_CLASE'] . '</center>' ."\n";
    $titulos_12 .= '<center>' . $row['NOMBRE_PROFESOR'] . '</center>';
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE `UBICACION` = 13";
$query=mysqli_query($con,$sql);

$titulos_13 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_13 .= '<center>' . $row['NOMBRE_CLASE'] . '</center>' ."\n";
    $titulos_13 .= '<center>' . $row['LUGAR_CLASE'] . '</center>' ."\n";
    $titulos_13 .= '<center>' . $row['NOMBRE_PROFESOR'] . '</center>';
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE `UBICACION` = 14";
$query=mysqli_query($con,$sql);

$titulos_14 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_14 .= '<center>' . $row['NOMBRE_CLASE'] . '</center>' ."\n";
    $titulos_14 .= '<center>' . $row['LUGAR_CLASE'] . '</center>' ."\n";
    $titulos_14 .= '<center>' . $row['NOMBRE_PROFESOR'] . '</center>';
}
?>

<?php 
$sql="SELECT `ID_CLASE`, `NOMBRE_CLASE`, `LUGAR_CLASE`, `NOMBRE_PROFESOR`, `UBICACION` FROM horario_clases WHERE `UBICACION` = 15";
$query=mysqli_query($con,$sql);

$titulos_15 = "";
while($row=mysqli_fetch_array($query)){ 
    $titulos_15 .= '<center>' . $row['NOMBRE_CLASE'] . '</center>' ."\n";
    $titulos_15 .= '<center>' . $row['LUGAR_CLASE'] . '</center>' ."\n";
    $titulos_15 .= '<center>' . $row['NOMBRE_PROFESOR'] . '</center>';
}
?>

