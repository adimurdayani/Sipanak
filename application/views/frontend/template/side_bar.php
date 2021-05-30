<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center"
    href="<?= base_url('backend_user/dashboard/')?>">
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
    <a class="nav-link" href="<?= base_url('backend_user/dashboard/')?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <?php if('Diagnosa' != $judul):?>
  <li class="nav-item">
    <?php else:?>
  <li class="nav-item active">
    <?php endif;?>
    <a class="nav-link" href="<?= base_url('backend_user/diagnosa/')?>">
      <i class="fas fa-fw fa-paper-plane"></i>
      <span>Diagnosa</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutUser">
      <i class="fas fa-fw fa-sign-out-alt"></i>
      <span>Logout</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

</ul>
<!-- End of Sidebar -->