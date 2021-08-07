<?php
  require 'auth_checking.php';
  $title = "Portfolio";
  require 'includes/dashboard/header.php';
  require 'includes/dashboard/menu_sidebar.php';
  require 'includes/db_connect.php';

  $portfolioSelect   =  "SELECT * FROM portfolios";
  $portfolioData     =  mysqli_query($db_connect, $portfolioSelect);

?>
<link rel="stylesheet" href="/AntLand-Dev/includes/frontend/css/fontawesome-all.min.css">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center bg-success">
          <h2>Serviecs list</h2>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Serial no:</th>
                <th>Portfolio Name</th>
                <th>Portfolio Description</th>
                <th>Portfolio Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php
                  $serial = 1;
                  foreach ($portfolioData as $portfolio):
                 ?>
                <tr>
                  <td><?= $serial++ ?></td>
                  <td><?= ucwords(strtolower($portfolio['portfolio_name']))?></td>
                  <td><?= $portfolio['portfolio_description']?></td>
                  <td>
                    <img src="/AntLand-Dev/uploads/portfolio/<?= $portfolio['portfolio_image']?>" alt="<?= $portfolio['portfolio_image']?>">
                  </td>
                  <td>---</td>
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
          <form action="portfolio_post.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Portfolio Name</label>
              <input type="text" name="portfolio_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">portfolio Description</label>
              <textarea name="portfolio_description" class="form-control" rows="4" placeholder="description"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Portfolio Image</label>
              <input type="file" name="portfolio_image" class="form-control">
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
