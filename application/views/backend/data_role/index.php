<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">User Role</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel User Role</h6>
    </div>
    <div class="card-body">
      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#adduserrole"><i class="fas fa-plus"></i>
        Role</a>
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th class="text-center">Aksi</th>
              <th class="text-center">No.</th>
              <th class="text-center">Tipe User</th>
              <th class="text-center">Tanggal Update</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no = 1;
            foreach($user_role as $user):?>
            <tr>
              <td class="text-center">
                <a href="javascript:;" class="badge badge-warning" data-id="<?= $user['id']?>"
                  data-tipe="<?= $user['tipe_user']?>" data-update="<?= $user['updated_at']?>" data-toggle="modal"
                  data-target="#updateuserrole"><i class="fas fa-pencil-alt" title="Edit"></i></a>
                <a href="<?= base_url('backend_admin/user_role/delete_data/') . $user['id'];?>"
                  class="badge badge-danger"><i class="fas fa-trash" title="Delete"></i></a>
              </td>
              <td class="text-center"><?= $no++;?></td>
              <td class="text-center"><?= $user['tipe_user'];?></td>
              <td class="text-center"><?= $user['updated_at'];?></td>
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
<div class="modal fade" id="adduserrole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input User Role</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend_admin/user_role/')?>" method="POST">

          <div class="form-group">
            <label for="tipe_user">Tipe User</label>
            <div class="form-input">
              <input type="text" class="form-control" name="tipe_user" id="tipe_user">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Modal-->
<div class="modal fade" id="updateuserrole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update User Role</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend_admin/user_role/update_data/')?>" method="POST">

          <div class="form-group">
            <label for="tipe_user">Tipe User</label>
            <div class="form-input">
              <input type="hidden" name="id" id="id">
              <input type="text" class="form-control" name="tipe_user" id="tipe_user">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
</div>