<?php
  require 'includes/header.php';
  require 'includes/db_connect.php';
  $read_query  = "SELECT * FROM contact_massages WHERE delete_status = 2";
  $datas       = mysqli_query($db_connect, $read_query);
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header text-center bg-success">
          <h2>Restore View list</h2>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Serial no.</th>
                <th>Id no.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Massage</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $serial = 1;
                foreach ($datas as $data):
               ?>
              <tr>
                <td><?= $serial++ ?></td>
                <td><?= $data['id']?></td>
                <td><?= $data['name']?></td>
                <td><?= $data['email']?></td>
                <td><?= $data['massage']?></td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="massage_restore.php?id=<?= $data['id']?>" type="button" class="btn btn-success">Restore</a>
                    <a href="massage_parmanent_delete.php?id=<?= $data['id']?>" type="button" class="btn btn-danger">Delete</a>
                  </div>
                </td>
              </tr>
              <?php
                endforeach;
               ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  require 'includes/footer.php';
?>
