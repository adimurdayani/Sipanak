<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-5 justify-content-center">
              <img src="<?= base_url('assets/')?>img/bg_login.jpg" height="500px"
                style="background-position: center;  background-size: cover;" alt="">
            </div>
            <div class="col-lg-7">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  <?= $this->session->flashdata('message');?>
                </div>
                <form class="user" action="<?= base_url('login_user/')?>" method="POST">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="usename"
                      value="<?= set_value('username')?>" name="usename" placeholder="Username">
                    <?= form_error('usename','<div class="text-danger small" role="alert">','</div>')?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password"
                      placeholder="Password">
                    <?= form_error('username','<div class="text-danger small" role="alert">','</div>')?>
                  </div>
                  <div class="form-group float-right">
                    <div class="custom-control custom-checkbox small">
                      <input type="checkbox" class="custom-control-input" id="customCheck">
                      <label class="custom-control-label" for="customCheck">Show Password</label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success btn-user btn-block">
                    Login
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="<?= base_url('auth/register_user')?>">Create an Account!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>