
<?php
require 'includes/db_connect.php';
$id = $_GET['id'];
$softDeleteQuery = "UPDATE contact_massages SET delete_status = 2 WHERE id = $id";
mysqli_query($db_connect, $softDeleteQuery);
header('location: contact_view.php');
?>
