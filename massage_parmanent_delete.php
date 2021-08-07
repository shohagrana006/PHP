<?php
require 'includes/db_connect.php';
$id           =  $_GET['id'];
$deleteQuery  =  "DELETE FROM contact_massages WHERE id = $id";
mysqli_query($db_connect, $deleteQuery);
header('location: massage_restor_view.php');
?>
