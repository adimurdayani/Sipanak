<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Data Kode</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Kode</h6>
    </div>
    <div class="card-body">
      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addkode"><i class="fas fa-plus"></i>
        Kode</a>
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
      <?= form_error('kode_gejala','<div class="alert alert-danger" role="alert">','</div>');?>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th class="text-center">Aksi</th>
              <th class="text-center">No.</th>
              <th class="text-center">Kode Penyakit</th>
              <th class="text-center">Kode Gejala</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach($data_kode as $data):?>
            <tr>
              <td class="text-center">
                <a href="javascript:;" class="badge badge-warning" data-id="<?= $data['id'];?>"
                  data-penyakit="<?= $data['kode_penyakit']?>" data-gejala="<?= $data['kode_gejala']?>"
                  data-toggle="modal" data-target="#updatekode"><i class="fas fa-pencil-alt" title="Update"></i></a>
                <a href="<?= base_url('backend_admin/data_kode/delete_data/') . $data['id']?>"
                  class="badge badge-danger"><i class="fas fa-trash" title="Delete"></i></a>
              </td>
              <td class="text-center"><?= $no++;?></td>
              <td class="text-center"><?= $data['kode_penyakit']?></td>
              <td class="text-center"><?= $data['kode_gejala']?></td>
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
<div class="modal fade" id="addkode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Kode Gejala</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend_admin/data_kode/')?>" method="POST">

          <div class="form-group">
            <label for="kode_penyakit">Kode Penyakit</label>
            <div class="form-input">
              <select name="kode_penyakit" id="kode_penyakit" class="form-control">
                <option value="">Pilih...</option>
                <?php foreach($kode_penyakit as $data):?>
                <option value="<?= $data['kode_penyakit']?>"><?= $data['kode_penyakit']?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="kode_gejala">Kode Gejala</label>
            <div class="form-input">
              <select name="kode_gejala" id="kode_gejala" class="form-control">
                <option value="">Pilih...</option>
                <?php foreach($kode_gejala as $data):?>
                <option value="<?= $data['kode_gejala']?>"><?= $data['kode_gejala']?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Modal-->
<div class="modal fade" id="updatekode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Kode Gejala</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend_admin/data_kode/update_data/')?>" method="POST">

          <div class="form-group">
            <label for="kode_penyakit">Kode Penyakit</label>
            <div class="form-input">
              <input type="hidden" name="id" id="id">
              <select name="kode_penyakit" id="kode_penyakit" class="form-control">
                <option value="">Pilih...</option>
                <?php foreach($kode_penyakit as $data):?>
                <option value="<?= $data['kode_penyakit']?>"><?= $data['kode_penyakit']?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="kode_gejala">Kode Gejala</label>
            <div class="form-input">
              <select name="kode_gejala" id="kode_gejala" class="form-control">
                <option value="">Pilih...</option>
                <?php foreach($kode_gejala as $data):?>
                <option value="<?= $data['kode_gejala']?>"><?= $data['kode_gejala']?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
</div>