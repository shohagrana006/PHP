<?php
  require 'auth_checking.php';
  $title = "profile";
  require 'includes/dashboard/header.php';
  require 'includes/dashboard/menu_sidebar.php';
  require 'includes/db_connect.php';

  $portfolioSelect   =  "SELECT * FROM portfolios";
  $portfolioData     =  mysqli_query($db_connect, $portfolioSelect);
?>

<div class="row justify-content-center">
  <div class="col-md-6">
      <div class="text-center py-3 bg-info">
        <h2>Serviecs add</h2>
      </div>
      <div class="form mt-4">
        <form action="profile_post.php" method="post">
          <div class="form-group ml-2">
            <label for="exampleInputEmail1">Old password</label>
            <input type="password" name="old_password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="old password">
          </div>
          <div class="form-group ml-2">
            <label for="exampleInputEmail1">New password</label>
            <input type="password" name="new_password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="new password">
          </div>
          <div class="form-group ml-2">
            <label for="exampleInputEmail1">Confirm password</label>
            <input type="password" name="confirm_password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="confirm password">
          </div>
          <div class="mt-3">
            <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium bg-info">Change Your Password</button>
          </div>
        </form>
      </div>
   </div>
 </div>

 <?php
   require 'includes/dashboard/footer.php';
 ?>
