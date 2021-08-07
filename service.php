<?php
  require 'auth_checking.php';
  $title = "Services";
  require 'includes/dashboard/header.php';
  require 'includes/dashboard/menu_sidebar.php';
  require 'includes/db_connect.php';

  $serviceSelect   =  "SELECT * FROM services";
  $servicedata     =  mysqli_query($db_connect, $serviceSelect);

  $activeServiceCount   =  "SELECT count(*) AS active_count FROM services WHERE service_status = 2";
  $activeServiceCountDb =  mysqli_query($db_connect, $activeServiceCount);
  $totalActiveCount     = mysqli_fetch_assoc($activeServiceCountDb)['active_count'];

?>
<link rel="stylesheet" href="/AntLand-Dev/includes/frontend/css/fontawesome-all.min.css">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center bg-success">
          <h2>Serviecs list (Active: <?= $totalActiveCount ?>)</h2>
        </div>
        <div class="card-body">
          <?php if (isset($_SESSION['service_error'])): ?>
            <div class="alert alert-danger">
              <?= $_SESSION['service_error']; ?>
            </div>
          <?php
            endif;
            unset($_SESSION['service_error']);
          ?>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Serial no:</th>
                <th>Service Icon</th>
                <th>Service Tittle</th>
                <th>Service Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $serial = 1;
                foreach ($servicedata as $data):
              ?>
              <tr>
                <td><?= $serial++ ?></td>
                <td>
                  <i class="<?= $data['service_icon']?>"></i>
                </td>
                <td><?= $data['service_tittle']?></td>
                <td><?= $data['service_description']?></td>
                <td>
                  <?php if ($data['service_status'] == 1): ?>
                    <a href="service_active.php?id=<?= $data['id']?>&btn=active" name="button" class="btn btn-success btn-xs mb-1">active</a>
                  <?php else: ?>
                    <a href="service_active.php?id=<?= $data['id']?>&btn=deactive" name="button" class="btn btn-warning btn-xs mb-1">Deactive</a>
                  <?php endif; ?>
                    <a href="service_edit.php?id=<?= $data['id']?>" name="button" class="btn btn-info btn-xs mb-1">Edit</a>
                    <a href="service_delete.php?id=<?= $data['id']?>" name="button" class="btn btn-danger btn-xs">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header text-center bg-info">
          <h2>Serviecs add</h2>
        </div>
        <div class="card-body">
          <form action="service_post.php" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Service icon</label>
              <input type="text" name="service_icon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="icon name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Service tittle</label>
              <input type="text" name="service_tittle" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tittle">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Service Description</label>
              <textarea name="service_description" rows="4" class="form-control" placeholder="Description"></textarea>
            </div>
            <div class="mt-5">
              <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium bg-info">Insert</button>
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
