<?php
require "includes/db_connect.php";
// print_r($_POST);
// echo $_POST['name'];
// print_r(empty($_POST['name']));
if (empty($_POST['name'])) {
  echo "Please enter your Name !!";
}
else if (empty($_POST['email'])) {
  echo "Please enter your Email !!";
}
else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  echo "Please enter valid email !!";
}
else if (empty($_POST['massage'])) {
  echo "Please enter your Massage !!";
}
else {
  $name    =  $_POST['name'];
  $email   =  $_POST['email'];
  $massage =  $_POST['massage'];

  $insert_query = "INSERT INTO contact_massages (name, email, massage) VALUES ('$name', '$email', '$massage')";
  mysqli_query($db_connect, $insert_query);
  header("location: about.php");
}

 ?>
