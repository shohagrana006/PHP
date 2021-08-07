<?php
require 'includes/db_connect.php';
$id            =  $_GET['id'];
$restoreQuery  =  "UPDATE contact_massages SET delete_status = 1 WHERE id = $id";
mysqli_query($db_connect, $restoreQuery);
header('location: massage_restor_view.php');
?>
