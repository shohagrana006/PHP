<?php
  require 'includes/header.php';
?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h2 class="text-success text-center"> This is my form </h2>
            </div>
            <div class="card-body">
              <form class="form" action="contact_post.php" method="post">
                <div class="form-group row">
                  <label for="" class="col-md-2">Name</label>
                  <input type="text" name="name" value="" class="form-control col-md-10">
                </div>
                <div class="form-group row">
                  <label for="" class="col-md-2">Email</label>
                  <input type="text" name="email" value="" class="form-control col-md-10">
                </div>
                <div class="form-group row">
                  <label for="" class="col-md-2">Massage</label>
                  <textarea class="form-control col-md-10" name="massage"></textarea>
                </div>
                <div class="form-group row">
                  <label for="" class="col-md-2"></label>
                  <input type="submit" name="btn" value="Submit" class="btn btn-success col-md-10">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
  require 'includes/footer.php';
?>
