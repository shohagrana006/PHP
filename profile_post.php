<?php
session_start();
require 'includes/db_connect.php';
$newPassword = md5($_POST['new_password']);

if (empty($_POST['old_password']) || empty($_POST['new_password']) || empty($_POST['confirm_password'])) {
  echo "please fillup form properly";

} else if ($_POST['new_password'] == $_POST['old_password']) {
  echo "your new password cannot be your old password ";

} else if ($_POST['new_password'] == $_POST['confirm_password']) {

  $oldPassword = md5($_POST['old_password']);
  $userEmail   = $_SESSION['user_name'];

  $checkQuery  = "SELECT count(*) AS total FROM users WHERE user_email = '$userEmail' AND password = '$oldPassword'";
  $fromDb      = mysqli_query($db_connect, $checkQuery);

  if (mysqli_fetch_assoc($fromDb)['total'] == 1) {
    $updatePasswordQuery = "UPDATE users SET password = '$newPassword' WHERE user_email = '$userEmail'";
    mysqli_query($db_connect, $updatePasswordQuery);
    header("location: login.php");
  } else {
    echo "your old password is invalid";
  }
} else {
  echo "you confirm password is not match";
}


 ?>
