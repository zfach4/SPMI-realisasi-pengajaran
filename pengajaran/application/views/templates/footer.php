  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <a href="http://facebook.com/zulfi.ajj">Zulfi Fachrurrozi</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Tambahan -->
<script src="<?= base_url('assets/bootstrap/jquery/') . 'jquery3.js'; ?>"></script>
<script src="<?= base_url('assets/bootstrap/popper/') . 'popper.js'; ?>"></script>
<script src="<?= base_url('assets/bootstrap/js/') . 'bootstrap.js'; ?>"></script>
<script src="<?= base_url('assets/summernote/') . 'summernote-bs4.js'; ?>"></script>
<!-- jQuery -->
<script src="<?php echo base_url('') ?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('') ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('') ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('') ?>/assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('') ?>/assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url('') ?>/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url('') ?>/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('') ?>/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('') ?>/assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url('') ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('') ?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url('') ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('') ?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('') ?>/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('') ?>/assets/ist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('') ?>/assets/dist/js/demo.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>

<script>
  $(document).ready(function() {
    $('.summernote').summernote({
      height: "300px",
      styleWithSpan: false
    });
    $('.datepicker').datepicker({
        format: 'yyyy/mm/dd',
        autoclose: true,
        todayHighlight: true,
    });
  }); 
</script>
