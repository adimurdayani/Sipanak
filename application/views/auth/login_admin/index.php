<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-lg-5">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="col">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Login Admin</h1>
                <img src="<?= base_url('assets/')?>img/undraw_profile_1.svg" class="mb-4" width="110px" alt="">
                <?= $this->session->flashdata('message');?>
              </div>
              <form class="user" action="<?= base_url('auth/login_admin/')?>" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="usename"
                    value="<?= set_value('usename')?>" name="usename" placeholder="Username">
                  <?= form_error('usename','<div class="text-danger small" role="alert">','</div>')?>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="password" name="password"
                    placeholder="Password">
                  <?= form_error('password','<div class="text-danger small" role="alert">','</div>')?>
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
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>