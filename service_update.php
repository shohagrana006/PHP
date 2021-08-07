<?php
require 'includes/db_connect.php';

$serviceId          = $_POST['service_id'];
$serviceIcon        = $_POST['service_icon'];
$serviceTittle      = $_POST['service_tittle'];
$serviceDescription = $_POST['service_description'];


$serviceUpdateQuery = "UPDATE services SET service_icon='$serviceIcon', service_tittle='$serviceTittle', service_description='$serviceDescription' WHERE id = '$serviceId'";
mysqli_query($db_connect, $serviceUpdateQuery);
header('location: service.php');
?>
