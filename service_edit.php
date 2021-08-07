<?php
  require 'auth_checking.php';
  require 'includes/dashboard/header.php';
  require 'includes/dashboard/menu_sidebar.php';
  require 'includes/db_connect.php';

  $id = $_GET['id'];

  $serviceEditSelect   =  "SELECT * FROM services WHERE id = $id";
  $servicedata         =  mysqli_query($db_connect, $serviceEditSelect);
  $serviceAfterAssoc   =  mysqli_fetch_assoc($servicedata);
?>
<div class="row justify-content-center">
  <div class="col-md-4">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="service.php">Services</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $serviceAfterAssoc['service_tittle']?></li>
      </ol>
    </nav>
  </div>
</div>
<div class="row justify-content-center">
<div class="col-md-4">
  <div class="card">
    <div class="card-header text-center bg-info">
      <h2>Edit Serviecs</h2>
    </div>
    <div class="card-body">
      <form action="service_update.php" method="post">
        <input type="hidden" name="service_id" value="<?= $id?>" class="form-control">
        <div class="form-group">
          <label for="exampleInputEmail1">Service icon</label>
          <input type="text" name="service_icon" value="<?= $serviceAfterAssoc['service_icon']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="icon name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Service tittle</label>
          <input type="text" name="service_tittle" value="<?= $serviceAfterAssoc['service_tittle']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tittle">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Service Description</label>
          <textarea name="service_description" rows="4" class="form-control" placeholder="Description"><?= $serviceAfterAssoc['service_description']?></textarea>
        </div>
        <div class="mt-5">
          <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium bg-info">Update</button>
        </div>
      </form>
   </div>
  </div>
 </div>
</div>
</div>
<?php
  require 'includes/dashboard/footer.php';
?>
