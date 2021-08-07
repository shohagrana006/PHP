<?php
  require "includes/db_connect.php";

  $name     =  $_POST['user_name'];
  $email    =  $_POST['user_email'];
  $password =  md5($_POST['password']);

  $checkQuery = "SELECT * FROM users WHERE user_email = '$email'";
  $checkEmailDb = mysqli_query($db_connect, $checkQuery);
  if ($checkEmailDb->num_rows == 1) {
    echo "This email already rocoded";
  } else {
  $insertQuery = "INSERT INTO users (user_name, user_email, password) VALUES ('$name', '$email', '$password')";
  mysqli_query($db_connect, $insertQuery);
  header("location: register.php");
}

 ?>
