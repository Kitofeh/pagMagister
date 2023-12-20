<?php
include_once("../../conexion.php");
$con = conectar();

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_1 = 'MS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalMS_1 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_1 = 'S'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalS_1 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_1 = 'C'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalC_1 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_1 = 'PS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalPS_1 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_1 = 'NS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalNS_1 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_2 = 'MS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalMS_2 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_2 = 'S'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalS_2 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_2 = 'C'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalC_2 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_2 = 'PS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalPS_2 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_2 = 'NS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalNS_2 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_3 = 'MS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalMS_3 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_3 = 'S'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalS_3 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_3 = 'C'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalC_3 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_3 = 'PS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalPS_3 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_3 = 'NS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalNS_3 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_4 = 'MS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalMS_4 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_4 = 'S'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalS_4 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_4 = 'C'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalC_4 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_4 = 'PS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalPS_4 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_4 = 'NS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalNS_4 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_5 = 'IDS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalIDS_5 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_5 = 'GDTDI'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalGDTDI_5 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_5 = 'IDM'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalIDM_5 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_5 = 'None'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalNone_5 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_6 = 'MS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalMS_6 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_6 = 'S'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalS_6 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_6 = 'C'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalC_6 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_6 = 'PS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalPS_6 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_6 = 'NS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalNS_6 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_7 = 'MS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalMS_7 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_7 = 'S'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalS_7 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_7 = 'C'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalC_7 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_7 = 'PS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalPS_7 = $row['total'];
?>

<?php

$sql = "SELECT COUNT(*) as total FROM feedback WHERE PREGUNTA_7 = 'NS'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$totalNS_7 = $row['total'];
?>

<?php

// Query para obtener el numero total de filas
$sql = "SELECT COUNT(*) as total FROM feedback";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$totalRows = $row['total'];

$sql = "SELECT PREGUNTA_1, COUNT(PREGUNTA_1) AS VMR
        FROM feedback
        GROUP BY PREGUNTA_1
        ORDER BY VMR DESC
        LIMIT 1";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$VMR_1 = $row['PREGUNTA_1'];
$NVMR_1 = $row['VMR'];


$totalp1 = $totalMS_1 + $totalS_1 + $totalC_1 + $totalPS_1 + $totalNS_1;
$maxp1 = max($totalMS_1, $totalS_1, $totalC_1, $totalPS_1, $totalNS_1);
$minp1 = min($totalMS_1, $totalS_1, $totalC_1, $totalPS_1, $totalNS_1);

$totalp2 = $totalMS_2 + $totalS_2 + $totalC_2 + $totalPS_2 + $totalNS_2;
$maxp2 = max($totalMS_2, $totalS_2, $totalC_2, $totalPS_2, $totalNS_2);
$minp2 = min($totalMS_2, $totalS_2, $totalC_2, $totalPS_2, $totalNS_2);

$totalp3 = $totalMS_3 + $totalS_3 + $totalC_3 + $totalPS_3 + $totalNS_3;
$maxp3 = max($totalMS_3, $totalS_3, $totalC_3, $totalPS_3, $totalNS_3);
$minp3 = min($totalMS_3, $totalS_3, $totalC_3, $totalPS_3, $totalNS_3);

$totalp4 = $totalMS_4 + $totalS_4 + $totalC_4 + $totalPS_4 + $totalNS_4;
$maxp4 = max($totalMS_4, $totalS_4, $totalC_4, $totalPS_4, $totalNS_4);
$minp4 = min($totalMS_4, $totalS_4, $totalC_4, $totalPS_4, $totalNS_4);

$totalp5 = $totalMS_5 + $totalS_5 + $totalC_5 + $totalPS_5 + $totalNS_5;
$maxp5 = max($totalMS_5, $totalS_5, $totalC_5, $totalPS_5, $totalNS_5);
$minp5 = min($totalMS_5, $totalS_5, $totalC_5, $totalPS_5, $totalNS_5);

$totalp6 = $totalMS_6 + $totalS_6 + $totalC_6 + $totalPS_6 + $totalNS_6;
$maxp6 = max($totalMS_6, $totalS_6, $totalC_6, $totalPS_6, $totalNS_6);
$minp6 = min($totalMS_6, $totalS_6, $totalC_6, $totalPS_6, $totalNS_6);

$totalp7 = $totalMS_7 + $totalS_7 + $totalC_7 + $totalPS_7 + $totalNS_7;
$maxp7 = max($totalMS_7, $totalS_7, $totalC_7, $totalPS_7, $totalNS_7);
$minp7 = min($totalMS_7, $totalS_7, $totalC_7, $totalPS_7, $totalNS_7);

?>
