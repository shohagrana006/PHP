<?php
require 'includes/db_connect.php';
$id = $_GET['id'];
$updateQuery = "UPDATE contact_massages SET status = 2 WHERE id = $id";
mysqli_query($db_connect, $updateQuery);
header('location: contact_view.php');
?>
