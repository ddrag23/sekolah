  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2050 <a href="http://adminlte.io">Arch Family Project</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 0.1
    </div>
  </footer>


  <!-- js -->
<script src="<?= base_url();?>assets/adminlte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<!-- <script src="<? = base_url();?>assets/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script> -->
<!-- <script src="<?= base_url();?>assets/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<script src="<?= base_url();?>assets/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url();?>assets/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url();?>assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url();?>assets/adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->

<!-- daterangepicker -->
<script src="<?= base_url();?>assets/adminlte/plugins/moment/moment.min.js"></script>
<script src="<?= base_url();?>assets/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url();?>assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url();?>assets/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url();?>assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>assets/adminlte/dist/js/adminlte.js"></script>
  <script src="<?=base_url(); ?>assets/adminlte/plugins/sparklines/sparkline.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?= base_url();?>assets/adminlte/dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url();?>assets/adminlte/dist/js/demo.js"></script>
<script src="<?= base_url()?>assets/adminlte/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url()?>assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script >
   $(function () {
    $('.datatables').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
    });
  });
</script>


</body>
</html>
