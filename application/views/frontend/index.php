<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <?= $this->session->flashdata('message');?>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Data Penyakit</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_penyakit;?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Data Gejala</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_gejala;?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url('assets/')?>img/bg_1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Alergi</h5>
          <p>Alergi merupakan reaksi sistem kekebalan tubuh terhadap suatu zat asing yang sebenarnya tidak berbahaya,
            namun dianggap sebagai ancaman oleh tubuh penderita. Zat pemicu alergi ini disebut alergen, dan alergen pada
            penderita yang satu belum tentu sama dengan alergen pada penderita yang lain.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/')?>img/bg_2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Jenis Alergi Kulit pada Anak</h5>
          <p>reaksi alergi kulit bisa timbul bila anak terpapar zat pemicu alergi (alergen). Paparan alergen ini tidak
            harus langsung pada kulit, tapi bisa juga masuk lewat saluran pencernaan atau pernapasannya.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/')?>img/bg_3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Mekanisme Terjadinya Alergi</h5>
          <p>Alergi terjadi saat sistem imunitas tubuh bereaksi terhadap benda asing, yang mungkin bagi orang lain tidak
            berbahaya. Saat benda asing masuk, tubuh memproduksi antibodi agar benda asing tersebut tidak menyebabkan
            penyakit. Pada orang dengan alergi, antibodi diproduksi meski benda asing itu tidak berbahaya. Saat terjadi
            kontak dengan alergen (bahan yang menyebabkan alergi), tubuh akan bereaksi dengan membuat kulit meradang,
            juga menimbulkan gangguan sinus, pernafasan, atau pencernaan.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>
<!-- /.container-fluid -->