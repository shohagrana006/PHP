<?php
session_start();
require 'includes/db_connect.php';
$id = $_GET['id'];

$activeServiceCount   =  "SELECT count(*) AS active_count FROM services WHERE service_status = 2";
$activeServiceCountDb =  mysqli_query($db_connect, $activeServiceCount);
$totalActiveCount     = mysqli_fetch_assoc($activeServiceCountDb)['active_count'];


if ($_GET['btn'] == 'active') {
   if ($totalActiveCount < 6) {
     $serviceActiveQuery = "UPDATE services SET service_status = 2 WHERE id = $id";
   } else {
     $_SESSION['service_error'] = 'Sorry!! Service not active more than 6';
   }
} else {
  $serviceActiveQuery = "UPDATE services SET service_status = 1 WHERE id = $id";
}
mysqli_query($db_connect, $serviceActiveQuery);
header('location: service.php');
?>
