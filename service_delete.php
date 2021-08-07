<?php
require 'includes/db_connect.php';

$id           =  $_GET['id'];
$deleteQuery  =  "DELETE FROM services WHERE id = $id";
mysqli_query($db_connect, $deleteQuery);
header('location: service.php');
?>
