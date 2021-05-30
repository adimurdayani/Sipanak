<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Data Penyakit</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Penyakit</h6>
    </div>
    <div class="card-body">
      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addpenyakit"><i class="fas fa-plus"></i>
        Penyakit</a>
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
              <th class="text-center">Kode Penyakit</th>
              <th class="text-center">Nama Penyakit</th>
              <th class="text-center">Tipe</th>
              <th class="text-center">Solusi</th>
              <th class="text-center">Tanggal Update</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no = 1;
            foreach($data_penyakit as $data):?>
            <tr>
              <td class="text-center">
                <a href="javascript:;" class="badge badge-warning" data-id="<?= $data['id']?>"
                  data-nama="<?= $data['nama']?>" data-kode="<?= $data['kode_id']?>" data-solusi="<?= $data['solusi']?>"
                  data-tipe="<?= $data['tipe']?>" data-updatedat="<?= $data['updated_at']?>" data-toggle="modal"
                  data-target="#updatepenyakit"><i class="fas fa-pencil-alt" title="Edit"></i></a>
                <a href="<?= base_url('backend_admin/penyakit/delete_data/') . $data['id'];?>"
                  class="badge badge-danger"><i class="fas fa-trash" title="Delete"></i></a>
              </td>
              <td class="text-center"><?= $no++;?></td>
              <td class="text-center"><?= $data['kode_id'];?></td>
              <td><?= $data['nama'];?></td>
              <td class="text-center"><?= $data['tipe'];?></td>
              <td><?= $data['solusi'];?></td>
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
<div class="modal fade" id="addpenyakit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Penyakit</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('backend_admin/penyakit/')?>" method="POST">

          <div class="form-group">
            <label for="kode_id">Kode Penyakit</label>
            <div class="form-input">
              <select name="kode_id" class="form-control" id="kode_id">
                <option value="">Pilih...</option>
                <?php foreach($data_kode as $data):?>
                <option value="<?= $data['kode_penyakit']; ?>"><?= $data['kode_penyakit'];?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="tipe">Tipe</label>
            <div class="form-input">
              <select name="tipe" class="form-control" id="tipe">
                <option value="">Pilih...</option>
                <?php foreach($data_tipe as $data):?>
                <option value="<?= $data['tipe']; ?>"><?= $data['tipe'];?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="nama">Nama Penyakit</label>
            <div class="form-input">
              <input type="text" class="form-control" name="nama" id="nama">
            </div>
          </div>

          <div class="form-group">
            <label for="solusi">Solusi</label>
            <div class="form-input">
              <textarea name="solusi" id="solusi" class="form-control" cols="30" rows="5"></textarea>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Modal-->
<div class="modal fade" id="updatepenyakit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
        <form action="<?= base_url('backend_admin/penyakit/update_data/')?>" method="POST">

          <div class="form-group">
            <label for="kode_id">Kode Penyakit</label>
            <div class="form-input">
              <input type="hidden" name="id" id="id">
              <select name="kode_id" class="form-control" id="kode_id">
                <option value="">Pilih...</option>
                <?php foreach($data_kode as $data):?>
                <option value="<?= $data['kode_penyakit']; ?>"><?= $data['kode_penyakit'];?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="tipe">Tipe</label>
            <div class="form-input">
              <select name="tipe" class="form-control" id="tipe">
                <option value="">Pilih...</option>
                <?php foreach($data_tipe as $data):?>
                <option value="<?= $data['tipe']; ?>"><?= $data['tipe'];?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="nama">Nama Penyakit</label>
            <div class="form-input">
              <input type="text" class="form-control" name="nama" id="nama">
            </div>
          </div>

          <div class="form-group">
            <label for="solusi">Solusi</label>
            <div class="form-input">
              <textarea name="solusi" id="solusi" class="form-control" cols="30" rows="5"></textarea>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
</div>