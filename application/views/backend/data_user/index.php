<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">User</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel User</h6>
    </div>
    <div class="card-body">
      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#adduser"><i class="fas fa-plus"></i>
        User</a>
      <?= form_error('nama', '<div class="alert alert-danger" role="alert">','</div>');?>
      <?= form_error('email','<div class="alert alert-danger" role="alert">','</div>');?>
      <?= form_error('usename','<div class="alert alert-danger" role="alert">','</div>');?>
      <?= form_error('password','<div class="alert alert-danger" role="alert">','</div>');?>
      <?= form_error('konf_pass','<div class="alert alert-danger" role="alert">','</div>');?>
      <?= form_error('user_active','<div class="alert alert-danger" role="alert">','</div>');?>

      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th class="text-center">Aksi</th>
              <th class="text-center">No.</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Email</th>
              <th class="text-center">Username</th>
              <th class="text-center">Tipe User</th>
              <th class="text-center">Aktivasi</th>
              <th class="text-center">Tanggal Update</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no = 1;
            foreach($user_data as $user):?>
            <tr>
              <td class="text-center">
                <a href="javascript:;" class="badge badge-warning" data-id="<?= $user['id']?>"
                  data-nama="<?= $user['nama']?>" data-username="<?= $user['usename']?>"
                  data-email="<?= $user['email']?>" data-userid="<?= $user['user_id']?>"
                  data-active="<?= $user['user_active']?>" data-update="<?= $user['user_update']?>" data-toggle="modal"
                  data-target="#updateuser"><i class="fas fa-pencil-alt" title="Edit"></i></a>
                <a href="<?= base_url('backend_admin/user/delete_data/') . $user['id'];?>" class="badge badge-danger"><i
                    class="fas fa-trash" title="Delete"></i></a>
              </td>
              <td class="text-center"><?= $no++;?></td>
              <td><?= $user['nama'];?></td>
              <td><?= $user['email'];?></td>
              <td><?= $user['usename'];?></td>
              <td class="text-center"><?= $user['tipe_user'];?></td>
              <td class="text-center">
                <div class="form-input">
                  <?php if($user['user_active'] != 1):?>
                  <input type="checkbox" class="form-checkbox" disabled>
                  <?php else:?>
                  <input type="checkbox" class="form-checkbox" checked disabled>
                  <?php endif;?>
                </div>
              </td>
              <td class="text-center"><?= $user['user_update'];?></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- Add Modal-->
<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input User</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend_admin/user/')?>" method="POST">

          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <div class="form-input">
              <input type="text" class="form-control" name="nama" id="nama">
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <div class="form-input">
              <input type="email" class="form-control" name="email" id="email">
            </div>
          </div>

          <div class="form-group">
            <label for="user_id">Pilih Tipe User</label>
            <div class="form-input">
              <select name="user_id" class="form-control" id="user_id">
                <option value="">Pilih...</option>
                <?php foreach($tipe_user as $data):?>
                <option value="<?= $data['id']?>"><?= $data['tipe_user']?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="usename">Username</label>
            <div class="form-input">
              <input type="text" class="form-control" name="usename" id="usename">
            </div>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <div class="form-input">
              <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="form-check float-right">
              <input type="checkbox" class="form-checkbox" id="check_password">
              <label for="chekc">Show Password</label>
            </div>
          </div>

          <div class="form-group">
            <label for="konf_pass">Konfirmasi Password</label>
            <div class="form-input">
              <input type="password" class="form-control" name="konf_pass" id="konf_pass">
            </div>
          </div>

          <div class="form-group">
            <label for="check">Aktivasi User</label>
            <div class="form-check">
              <input type="checkbox" class="form-checkbox" name="user_active" value="<?= $aktifasi = 1;?>" id="check">
              <label for="check">Aktif</label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Modal-->
<div class="modal fade" id="updateuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend_admin/user/update_user')?>" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <div class="form-input">
              <input type="hidden" name="id" id="id">
              <input type="text" class="form-control" name="nama" id="nama">
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <div class="form-input">
              <input type="email" class="form-control" name="email" id="email">
            </div>
          </div>

          <div class="form-group">
            <label for="user_id">Pilih Tipe User</label>
            <div class="form-input">
              <select name="user_id" class="form-control" id="user_id">
                <option value="">Pilih...</option>
                <?php foreach($tipe_user as $data):?>
                <option value="<?= $data['id']?>"><?= $data['tipe_user']?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="usename">Username</label>
            <div class="form-input">
              <input type="text" class="form-control" name="usename" id="usename">
            </div>
          </div>

          <div class="form-group">
            <label for="password">Password Baru</label>
            <div class="form-input">
              <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="form-check float-right">
              <input type="checkbox" class="form-checkbox" id="check_password2">
              <label for="chekc">Show Password</label>
            </div>
          </div>

          <div class="form-group">
            <label for="konf_pass">Konfirmasi Password</label>
            <div class="form-input">
              <input type="password" class="form-control" name="konf_pass" id="konf_pass">
            </div>
          </div>

          <div class="form-group">
            <label for="check">Aktivasi User</label>
            <div class="form-check">
              <input type="checkbox" class="form-checkbox" name="user_active" value="<?= $aktifasi = 1;?>" id="check">
              <label for="check">Aktif</label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
</div>