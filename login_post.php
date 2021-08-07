<?php
session_start();
require_once 'includes/db_connect.php';

  $userEmail  =  $_POST['user_email'];
  $password   =  md5($_POST['password']);

  $checkLoginQuery     = "SELECT * FROM users WHERE user_email = '$userEmail' AND password = '$password'";
  $checkLoginQuery     = "SELECT * FROM users WHERE user_email = '$userEmail' AND password = '$password'";
  $cheecingSameAdderss = mysqli_query($db_connect, $checkLoginQuery);

  if ($cheecingSameAdderss->num_rows == 1) {
    $_SESSION['login']      =  'Login successfully';
    $_SESSION['user_name']  =  $userEmail;
    header("location: dashboard.php");
  } else {
    $_SESSION['error']      =  'Your inpur is invalided';
    header("location: login.php");
  }

 ?>
