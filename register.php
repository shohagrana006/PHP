<?php
  require 'includes\dashboard\header.php';
 ?>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth">
          <div class="row w-100">
            <div class="col-lg-8 mx-auto">
              <div class="row">
                <div class="col-lg-6 bg-white">
                  <div class="auth-form-light text-left p-5">
                    <h2>Register</h2>
                    <h4 class="font-weight-light">Hello! let's get started</h4>
                    <form class="pt-4" action="register_post.php" method="post">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                          <i class="mdi mdi-account"></i>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" name="user_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                          <i class="mdi mdi-email"></i>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          <i class="mdi mdi-eye"></i>
                        </div>
                        <div class="mt-5">
                          <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium">Register</button>
                        </div>
                        <div class="mt-2 w-75 mx-auto">
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                              I accept terms and conditions
                            </label>
                          </div>
                        </div>
                        <div class="mt-2 text-center">
                          <a href="login.php" class="auth-link text-black">Already have an account? <span class="font-weight-medium">Sign in</span></a>
                        </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 register-half-bg d-flex flex-row">
                  <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
  require 'includes\dashboard\footer.php';
 ?>
