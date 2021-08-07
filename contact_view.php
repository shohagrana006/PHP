<?php
  require 'auth_checking.php';
  $title = "Contact";
  require 'includes/dashboard/header.php';
  require 'includes/dashboard/menu_sidebar.php';
  require 'includes/db_connect.php';

  $read_query         =  "SELECT * FROM contact_massages WHERE delete_status = 1";
  $datas              =  mysqli_query($db_connect, $read_query);

  $totalCountQuery    =  'SELECT COUNT(*) AS total_massage FROM contact_massages';
  $totalCountFromDb   =  mysqli_query($db_connect, $totalCountQuery);
  $showTotalMassage   =  mysqli_fetch_assoc($totalCountFromDb);

  $UnreadCountQuery   =  'SELECT COUNT(*) AS Unread_massage FROM contact_massages WHERE status = 1';
  $UnreadCountFromDb  =  mysqli_query($db_connect, $UnreadCountQuery);
  $showUnreadMassage  =  mysqli_fetch_assoc($UnreadCountFromDb);

  $deleteCountQuery   =  'SELECT COUNT(*) AS delete_massage FROM contact_massages WHERE delete_status = 2';
  $deleteCountFromDb  =  mysqli_query($db_connect, $deleteCountQuery);
  $showDeleteMassage  =  mysqli_fetch_assoc($deleteCountFromDb);
?>
  <div class="row my-4">
    <div class="col-md-3">
      <h2>Total: <?= $showTotalMassage['total_massage'];?> </h2>
    </div>
    <div class="col-md-3">
      <h2>Unread: <?= $showUnreadMassage['Unread_massage'];?> </h2>
    </div>
    <div class="col-md-3">
      <h2>Read: <?= $showTotalMassage['total_massage'] - $showUnreadMassage['Unread_massage'];?> </h2>
    </div>
    <div class="col-md-3">
      <a href="massage_restor_view.php"><h2>Delete: <?= $showDeleteMassage['delete_massage'];?></h2></a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header text-center bg-success">
          <h2>View list</h2>
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
              <tr class="
                <?php
                  if ($data['status'] == 1) {
                    echo "bg-info";
                  }
                 ?>
              ">
                <td><?= $serial++ ?></td>
                <td><?= $data['id']?></td>
                <td><?= $data['name']?></td>
                <td><?= $data['email']?></td>
                <td><?= $data['massage']?></td>
                <td>
                  <?php if ($data['status'] == 1): ?>
                    <a href="contact_read.php?id=<?= $data['id']?>" name="button" class="btn btn-success btn-sm">Read as mark</a>
                  <?php endif; ?>
                  <a href="contact_delete.php?id=<?= $data['id']?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
              <?php
                endforeach;
                if ($datas->num_rows == 0):
              ?>
                <tr>
                  <td colspan="50" class="text-center text-danger">Nothing to show</td>
                </tr>
              <?php
                endif;
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php
  require 'includes/dashboard/footer.php';
?>
