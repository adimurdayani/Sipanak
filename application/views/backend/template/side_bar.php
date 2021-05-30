<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center"
    href="<?= base_url('backend_admin/dashboard/')?>">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-truck-loading"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SIPA</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <?php if('Dashboard' != $judul):?>
  <li class="nav-item">
    <?php else:?>
  <li class="nav-item active">
    <?php endif;?>
    <a class="nav-link" href="<?= base_url('backend_admin/dashboard/')?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Heading -->
  <div class="sidebar-heading">
    Data
  </div>

  <!-- Nav Item - data penyakit -->
  <?php if('Data Penyakit' != $judul):?>
  <li class="nav-item">
    <?php else:?>
  <li class="nav-item active">
    <?php endif;?>
    <a class="nav-link" href="<?= base_url('backend_admin/penyakit/')?>">
      <i class="fas fa-fw fa-database"></i>
      <span>Data Penyakit</span></a>
  </li>

  <!-- Nav Item - data penyakit -->
  <?php if('Data Gejala' != $judul):?>
  <li class="nav-item">
    <?php else:?>
  <li class="nav-item active">
    <?php endif;?>
    <a class="nav-link" href="<?= base_url('backend_admin/gejala/')?>">
      <i class="fas fa-fw fa-database"></i>
      <span>Data Gejala</span></a>
  </li>

  <!-- Heading -->
  <div class="sidebar-heading">
    Referensi
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <?php if('Kode Penyakit' != $judul && 'Kode Gejala' != $judul && 'Data Kode' != $judul):?>
  <li class="nav-item">
    <?php else:?>
  <li class="nav-item active">
    <?php endif;?>
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsekode" aria-expanded="true"
      aria-controls="collapsePages">
      <i class="fas fa-fw fa-table"></i>
      <span>Data Kode</span>
    </a>
    <?php if('Kode Penyakit' != $judul && 'Kode Gejala' != $judul && 'Data Kode' != $judul):?>
    <div id="collapsekode" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <?php else:?>
      <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <?php endif;?>
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Kode Referensi:</h6>

          <?php if('Data Kode' != $judul):?>
          <a class="collapse-item" href="<?= base_url('backend_admin/data_kode/')?>">Data Kode</a>
          <?php else:?>
          <a class="collapse-item active" href="<?= base_url('backend_admin/data_kode/')?>">Data Kode</a>
          <?php endif;?>

          <?php if('Kode Penyakit' != $judul):?>
          <a class="collapse-item" href="<?= base_url('backend_admin/kode_penyakit/')?>">Kode Penyakit</a>
          <?php else:?>
          <a class="collapse-item active" href="<?= base_url('backend_admin/kode_penyakit/')?>">Kode Penyakit</a>
          <?php endif;?>

          <?php if('Kode Gejala' != $judul):?>
          <a class="collapse-item" href="<?= base_url('backend_admin/kode_gejala/')?>">Kode Gejala</a>
          <?php else:?>
          <a class="collapse-item active" href="<?= base_url('backend_admin/kode_gejala/')?>">Kode Gejala</a>
          <?php endif;?>
        </div>
      </div>
  </li>

  <!-- Heading -->
  <div class="sidebar-heading">
    Setting
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <?php if('User' != $judul && 'Tipe' != $judul):?>
  <li class="nav-item">
    <?php else:?>
  <li class="nav-item active">
    <?php endif;?>
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
      aria-controls="collapsePages">
      <i class="fas fa-fw fa-users"></i>
      <span>Users Management</span>
    </a>
    <?php if('User' != $judul && 'Tipe' != $judul):?>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <?php else:?>
      <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <?php endif;?>
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Users management:</h6>
          <?php if('User' != $judul):?>
          <a class="collapse-item" href="<?= base_url('backend_admin/user/')?>">Data User</a>
          <?php else:?>
          <a class="collapse-item active" href="<?= base_url('backend_admin/user/')?>">Data User</a>
          <?php endif;?>

          <?php if('Tipe' != $judul):?>
          <a class="collapse-item" href="<?= base_url('backend_admin/user_role/')?>">Data User Role</a>
          <?php else:?>
          <a class="collapse-item active" href="<?= base_url('backend_admin/user_role/')?>">Data User Role</a>
          <?php endif;?>
        </div>
      </div>
  </li>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
      <i class="fas fa-fw fa-sign-out-alt"></i>
      <span>Logout</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

</ul>
<!-- End of Sidebar -->