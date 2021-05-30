<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Diagnosa</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Diagnosa Penyakit</h6>
    </div>
    <div class="card-body">
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>

      <div class="table-responsive">
        <form action="<?= base_url('backend_user/diagnosa/hasil_diagnosa/')?>" method="POST">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Kode Gejala</th>
                <th class="text-center">Nama Gejala</th>
                <th class="text-center">Tipe</th>
                <th class="text-center">Ya</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; foreach($data_gejala as $data) :?>
              <tr>

                <td class="text-center"><?= $no++;?></td>
                <td class="text-center"><?= $data['kode_id'];?></td>
                <td><?= $data['nama'];?></td>
                <td class="text-center"><?= $data['tipe'];?></td>
                <td>
                  <div class="form-check">
                    <input type="checkbox" class="form-checkbox align-center" name="kode_id[]"
                      value="<?= $data['kode_id']?>">
                  </div>
                  <?= form_error('id_kode','<div class="alert alert-danger" role="alert">','</div>');?>
                </td>

              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
          <button type="submit" class="btn btn-success mt-2 mb-2">Submit</button>
        </form>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->