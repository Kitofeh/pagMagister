<?php 

include_once("../../conexion.php");
$con = conectar();

?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '01'";
$query=mysqli_query($con,$sql);

$titulos_1 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_1 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '02'";
$query=mysqli_query($con,$sql);

$titulos_2 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_2 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '03'";
$query=mysqli_query($con,$sql);

$titulos_4 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_3 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '04'";
$query=mysqli_query($con,$sql);

$titulos_5 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_4 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '05'";
$query=mysqli_query($con,$sql);

$titulos_5 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_5 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '06'";
$query=mysqli_query($con,$sql);

$titulos_6 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_6 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '07'";
$query=mysqli_query($con,$sql);

$titulos_7 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_7 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '08'";
$query=mysqli_query($con,$sql);

$titulos_8 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_8 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '09'";
$query=mysqli_query($con,$sql);

$titulos_9 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_9 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '10'";
$query=mysqli_query($con,$sql);

$titulos_10 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_10 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '11'";
$query=mysqli_query($con,$sql);

$titulos_11 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_11 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '12'";
$query=mysqli_query($con,$sql);

$titulos_12 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_12 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '13'";
$query=mysqli_query($con,$sql);

$titulos_13 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_13 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '14'";
$query=mysqli_query($con,$sql);

$titulos_14 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_14 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '15'";
$query=mysqli_query($con,$sql);

$titulos_15 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_15 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '16'";
$query=mysqli_query($con,$sql);

$titulos_16 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_16 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '17'";
$query=mysqli_query($con,$sql);

$titulos_17 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_17 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '18'";
$query=mysqli_query($con,$sql);

$titulos_18 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_18 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '19'";
$query=mysqli_query($con,$sql);

$titulos_19 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_19 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '20'";
$query=mysqli_query($con,$sql);

$titulos_20 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_20 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '21'";
$query=mysqli_query($con,$sql);

$titulos_21 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_21 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '22'";
$query=mysqli_query($con,$sql);

$titulos_22 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_22 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '23'";
$query=mysqli_query($con,$sql);

$titulos_23 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_23 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '24'";
$query=mysqli_query($con,$sql);

$titulos_24 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_24 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '25'";
$query=mysqli_query($con,$sql);

$titulos_25 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_25 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '26'";
$query=mysqli_query($con,$sql);

$titulos_26 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_26 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '27'";
$query=mysqli_query($con,$sql);

$titulos_27 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_27 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '28'";
$query=mysqli_query($con,$sql);

$titulos_28 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_28 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '29'";
$query=mysqli_query($con,$sql);

$titulos_29 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_29 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '30'";
$query=mysqli_query($con,$sql);

$titulos_30 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_30 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>

<?php 
$sql="SELECT `ID_EVENTO`, `TITULO`, `FECHA_INICIO`, `FECHA_FIN`, `UBICACION`, `TIPO_EVENTO` FROM calendario_eventos WHERE SUBSTRING(`FECHA_INICIO`, 9, 2) = '31'";
$query=mysqli_query($con,$sql);

$titulos_31 = "";
while($row=mysqli_fetch_array($query)){
    $titulos_31 .= "Título: " . $row['TITULO']  . ", Tipo: " .$row['TIPO_EVENTO']. ", Duracion: " .$row['FECHA_INICIO']. " hasta " .$row['FECHA_FIN']. ", Ubicacion: " .$row['UBICACION']. "<br> ------- <br>";
}
?>