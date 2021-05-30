<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Data Kode Penyakit</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Kode Penyakit</h6>
    </div>
    <div class="card-body">
      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addkodepenyakit"><i
          class="fas fa-plus"></i>
        Kode</a>
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
      <?= form_error('kode_penyakit','<div class="alert alert-danger" role="alert">','</div>');?>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th class="text-center">Aksi</th>
              <th class="text-center">No.</th>
              <th class="text-center">Kode Penyakit</th>
              <th class="text-center">Tanggal Update</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach($data_kode as $data):?>
            <tr>
              <td class="text-center">
                <a href="javascript:;" class="badge badge-warning" data-id="<?= $data['id'];?>"
                  data-penyakit="<?= $data['kode_penyakit']?>" data-toggle="modal" data-target="#updatekodepenyakit"><i
                    class="fas fa-pencil-alt" title="Update"></i></a>
                <a href="<?= base_url('backend_admin/kode_penyakit/delete_data/') . $data['id']?>"
                  class="badge badge-danger"><i class="fas fa-trash" title="Delete"></i></a>
              </td>
              <td class="text-center"><?= $no++;?></td>
              <td class="text-center"><?= $data['kode_penyakit']?></td>
              <td class="text-center"><?= $data['updated_at']?></td>
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
<div class="modal fade" id="addkodepenyakit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Kode Penyakit</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend_admin/kode_penyakit/')?>" method="POST">

          <div class="form-group">
            <label for="kode_penyakit">Kode Penyakit</label>
            <div class="form-input">
              <input type="text" class="form-control" name="kode_penyakit" id="kode_penyakit">

            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Modal-->
<div class="modal fade" id="updatekodepenyakit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Kode Penyakit</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend_admin/kode_penyakit/update_data/')?>" method="POST">

          <div class="form-group">
            <label for="kode_penyakit">Kode Penyakit</label>
            <div class="form-input">
              <input type="hidden" name="id" id="id">
              <input type="text" class="form-control" name="kode_penyakit" id="kode_penyakit">

            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
</div>