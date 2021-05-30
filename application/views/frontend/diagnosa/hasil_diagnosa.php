<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Hasil Diagnosa</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Diagnosa Penyakit</h6>
    </div>
    <div class="card-body">
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th class="text-center">No.</th>
              <th class="text-center">Kode Penyakit</th>
              <th class="text-center">Nama Penyakit</th>
              <th class="text-center">Solusi</th>
              <th class="text-center">Detail</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach($hasil_diagnosa as $data):?>
            <tr>

              <td class="text-center"><?= $no++;?></td>
              <td class="text-center"><?= $data['kode_id'];?></td>
              <td><?= $data['nama'];?></td>
              <td><?= $data['solusi'];?></td>
              <td class="text-center">
                <a href="<?= base_url('backend_user/diagnosa/detail/') . $data['kode_id']?>"
                  class="badge badge-success"><i class="fas fa-eye"></i></a>
              </td>

            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->