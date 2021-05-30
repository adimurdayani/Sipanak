</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; SIPA Penyakit Alergi Anak <?= date("Y")?></span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin keluar?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Pilih "Logout" jika anda ingin keluar dari halaman ini.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?= base_url('auth/login_admin/logout/')?>">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/')?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/')?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/')?>vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/')?>js/demo/chart-area-demo.js"></script>
<script src="<?= base_url('assets/')?>js/demo/chart-pie-demo.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/')?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/')?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/')?>js/demo/datatables-demo.js"></script>


<script src="<?= base_url('assets/') ?>sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/') ?>sweetalert2/myscript.js"></script>

<script>
$(document).ready(function() {
  $('#check_password').click(function() {
    if ($(this).is(':checked')) {
      $('#password').attr('type', 'text');
    } else {
      $('#password').attr('type', 'password');
    }
  });
});

$(document).ready(function() {
  $('#check_password2').click(function() {
    if ($(this).is(':checked')) {
      $('#password').attr('type', 'text');
    } else {
      $('#password').attr('type', 'password');
    }
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updatepenyakit').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#solusi').attr("value", div.data('solusi'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updatekode').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#kode_gejala').attr("value", div.data('gejala'));
    modal.find('#kode_penyakit').attr("value", div.data('penyakit'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updategejala').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#updated_at').attr("value", div.data('updatedat'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updatekodepenyakit').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#kode_penyakit').attr("value", div.data('penyakit'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updatekodegejala').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#kode_gejala').attr("value", div.data('gejala'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updateuser').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#nama').attr("value", div.data('nama'));
    modal.find('#email').attr("value", div.data('email'));
    modal.find('#username').attr("value", div.data('username'));
  });
});

$(document).ready(function() {
  // Untuk sunting
  $('#updateuserrole').on('show.bs.modal', function(event) {
    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)
    // Isi nilai pada field
    modal.find('#id').attr("value", div.data('id'));
    modal.find('#tipe_user').attr("value", div.data('tipe'));
  });
});
</script>

</body>

</html>