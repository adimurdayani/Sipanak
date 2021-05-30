<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Profile</h1>

  <div class="row">
    <div class="col-lg-6">
      <div class="card mb-4 py-3 border-left-success">
        <div class="card-body">
          <div class="row justify-content-center">
            <img src="<?= base_url('assets/')?>img/undraw_profile_2.svg" width="200px" class="img-circle mb-1" alt="">
          </div>
          <div class="form-group">
            <div class="form-input">
              <input type="text" class="form-control" value="<?= $user_session['nama'];?>" disabled>
            </div>
          </div>

          <div class="form-group">
            <div class="form-input">
              <input type="text" class="form-control" value="<?= $user_session['email'];?>" disabled>
            </div>
          </div>

          <div class="form-group">
            <div class="form-input">
              <input type="text" class="form-control" value="<?= $user_session['usename'];?>" disabled>
            </div>
          </div>

          <div class="form-group">
            <div class="form-input">
              <input type="password" class="form-control" value="<?= $user_session['password'];?>" disabled>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>
<!-- /.container-fluid -->