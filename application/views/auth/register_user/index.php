<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-lg-7">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Register</h1>
                  <?= $this->session->flashdata('message');?>
                </div>
                <form class="user" action="<?= base_url('auth/register_user/')?>" method="POST">
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" name="nama" id="exampleFirstName"
                        placeholder="Nama Lengkap">
                      <?= form_error('nama','<div class="text-danger small" role="alert">','</div>')?>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" name="usename" id="exampleLastName"
                        placeholder="Username">
                      <?= form_error('usename','<div class="text-danger small" role="alert">','</div>')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail"
                      placeholder="Email">
                    <?= form_error('email','<div class="text-danger small" role="alert">','</div>')?>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" class="form-control form-control-user" name="password"
                        id="exampleInputPassword" placeholder="Password">
                      <?= form_error('password','<div class="text-danger small" role="alert">','</div>')?>
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" name="konf_pass"
                        id="exampleRepeatPassword" placeholder="Konfirmasi Password">
                      <?= form_error('konf_pass','<div class="text-danger small" role="alert">','</div>')?>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success btn-user btn-block">
                    Register Account
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="<?= base_url()?>">Already have an account? Login!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>