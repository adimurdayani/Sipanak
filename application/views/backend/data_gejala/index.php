<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Data Gejala</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Gejala</h6>
    </div>
    <div class="card-body">
      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addgejala"><i class="fas fa-plus"></i>
        Gejala</a>
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
      <?= form_error('kode_id', '<div class="alert alert-danger" role="alert">','</div>');?>
      <?= form_error('nama', '<div class="alert alert-danger" role="alert">','</div>');?>
      <?= form_error('tipe', '<div class="alert alert-danger" role="alert">','</div>');?>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th class="text-center">Aksi</th>
              <th class="text-center">No.</th>
              <th class="text-center">Kode Gejala</th>
              <th class="text-center">Tipe</th>
              <th class="text-center">Nama Gejala</th>
              <th class="text-center">Tanggal Update</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach($data_gejala as $data):?>
            <tr>
              <td class="text-center">
                <a href="javascript:;" data-id="<?= $data['id']?>" data-kode="<?= $data['kode_id']?>"
                  data-nama="<?= $data['nama']?>" data-updatedat="<?= $data['updated_at']?>" class="badge badge-warning"
                  data-toggle="modal" data-target="#updategejala"><i class="fas fa-pencil-alt"></i></a>
                <a href="<?= base_url('backend_admin/gejala/delete_data/') . $data['id']?>"
                  class="badge badge-danger"><i class="fas fa-trash"></i></a>
              </td>
              <td class="text-center"><?= $no++;?></td>
              <td class="text-center"><?= $data['kode_id']?></td>
              <td class="text-center"><?= $data['tipe']?></td>
              <td class="text-center"><?= $data['nama']?></td>
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
<div class="modal fade" id="addgejala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Gejala</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend_admin/gejala/')?>" method="POST">

          <div class="form-group">
            <label for="kode_id">Kode Gejala</label>
            <div class="form-input">
              <select name="kode_id" class="form-control" id="kode_id">
                <option value="">Pilih...</option>
                <?php foreach($kode_gejala as $data):?>
                <option value="<?= $data['kode_gejala']?>"><?= $data['kode_gejala'] ?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="tipe">Tipe</label>
            <div class="form-input">
              <select name="tipe" class="form-control" id="tipe">
                <option value="">Pilih...</option>
                <?php foreach($tipe as $data):?>
                <option value="<?= $data['tipe']?>"><?= $data['tipe'] ?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="nama">Nama Gejala</label>
            <div class="form-input">
              <input type="text" class="form-control" name="nama" id="nama">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Modal-->
<div class="modal fade" id="updategejala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Gejala</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend_admin/gejala/update_data/')?>" method="POST">

          <div class="form-group">
            <label for="kode_id">Kode Gejala</label>
            <div class="form-input">
              <input type="hidden" name="id" id="id">
              <select name="kode_id" class="form-control" id="kode_id">
                <option value="">Pilih...</option>
                <?php foreach($kode_gejala as $data):?>
                <option value="<?= $data['kode_gejala']?>"><?= $data['kode_gejala'] ?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="tipe">Tipe</label>
            <div class="form-input">
              <select name="tipe" class="form-control" id="tipe">
                <option value="">Pilih...</option>
                <?php foreach($tipe as $data):?>
                <option value="<?= $data['tipe']?>"><?= $data['tipe'] ?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="nama">Nama Gejala</label>
            <div class="form-input">
              <input type="text" class="form-control" name="nama" id="nama">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
</div>