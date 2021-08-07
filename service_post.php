<?php
  require_once 'auth_checking.php';
  require_once 'includes/db_connect.php';

  $serviceIcon        = $_POST['service_icon'];
  $serviceTittle      = $_POST['service_tittle'];
  $serviceDescription = $_POST['service_description'];

  $insertServiceQuery = "INSERT INTO services(service_icon, service_tittle, service_description) VALUES ('$serviceIcon','$serviceTittle','$serviceDescription')";
  $serviceInsertDb    = mysqli_query($db_connect, $insertServiceQuery);
  header("location: service.php");
 ?>
