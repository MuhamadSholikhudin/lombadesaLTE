  <!-- /.content-wrapper -->
  <footer class="main-footer text-center">
    <strong>Copyright &copy; Muhamad Sholikhudin </strong>
    2020.
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

  <!-- jQuery -->
  <script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url('assets/'); ?>plugins/jquery-ui/jquery-ui.min.js"></script>

  <!-- DataTables -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

  <!-- JQUERY AJAX -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {


      $("#hakakses").on('change', function() {
        var hakakses = $(this).val();
        // alert(id_kec);
        if (hakakses == '') {
          $('#penempatan').prop('disabled', true);
        } else if (hakakses == 1) {
          $("#penempatan option").remove();
          $('#penempatan').append("<option value='Tenaga Ahli'>TENAGA AHLI DINAS PMD</option>");
        } else if (hakakses == 2) {
          $("#penempatan option").remove();
          $('#penempatan').append("<option value='Staff Pmd'>STAFF DINAS PMD</option>");
        } else if (hakakses == 4) {
          $("#penempatan option").remove();
          $('#penempatan').append("<option value='Admin Sekda'>Sekda Kudus</option>");
        } else if (hakakses == 5) {
          $('#penempatan').append("<option value='P1'>DINAS Kesehatan</option>");
          $('#penempatan').append("<option value='P2'>DINAS Pendidikan Pemuda dan Olahraga</option>");
          $('#penempatan').append("<option value='P3'>DINAS Kominfo</option>");
          $('#penempatan').append("<option value='P4'>DINAS Perdagangan</option>");
          $('#penempatan').append("<option value='P5'>DINAS Kebudayaan dan Pariwisata</option>");
          $('#penempatan').append("<option value='P6'>DINAS Pertanian dan Pangan</option>");
          $('#penempatan').append("<option value='P7'>DINAS Tenaga Kerja</option>");
          $('#penempatan').append("<option value='P8'>DINAS Sosial P3AP2KB</option>");
          $('#penempatan').append("<option value='P9'>DINAS Pekerjaan Umum dan Penataan Ruang</option>");
          $('#penempatan').append("<option value='P10'>BNPB</option>");
        } else if (hakakses == 3) {
          // $('#penempatan').prop('disabled', false);
          $.ajax({
            url: "<?= base_url('data/get_subkategori'); ?>",
            type: "GET",
            // data: {
            //   'hakakses': hakakses
            // },
            dataType: 'json',
            success: function(data) {
              $('#penempatan').html(data);
            },
            error: function() {
              alert('penempatan');
            }
          });

        }
      })


      $('#daftar').DataTable();
      $('#kriteria').DataTable();
      $('#pengguna').DataTable();
      $('#wilayah').DataTable();
      $('#berita').DataTable();
      var table = $('#nilai').DataTable({
        data: rows,
        destroy: true,
        columns: columns
      });


      // SELECT DESA



      // $("#hakakses").on('change', function() {
      //   var hakakses = $(this).val();
      //   // alert(id_kec);
      //   if (hakakses == '') {
      //     $('#penempatan').prop('disabled', true);
      //   } else if (hakakses == 1) {
      //     $('#penempatan').append("<option value='P1'>DINAS Kesehatan</option>");
      //   } else if (hakakses == 2) {
      //     $('#penempatan').val('STAFF Dinas PMD');
      //   } else if (hakakses == 4) {
      //     $('#penempatan').val('ADMIN SEKDA KUDUS');
      //   } else if (hakakses == 5) {
      //     $('#penempatan').append("<option value='P1'>DINAS Kesehatan</option>");
      //     $('#penempatan').append("<option value='P2'>DINAS Pendidikan Pemuda dan Olahraga</option>");
      //     $('#penempatan').append("<option value='P3'>DINAS Kominfo</option>");
      //     $('#penempatan').append("<option value='P4'>DINAS Perdagangan</option>");
      //     $('#penempatan').append("<option value='P5'>DINAS Kebudayaan dan Pariwisata</option>");
      //     $('#penempatan').append("<option value='P6'>DINAS Pertanian dan Pangan</option>");
      //     $('#penempatan').append("<option value='P7'>DINAS Tenaga Kerja</option>");
      //     $('#penempatan').append("<option value='P8'>DINAS Sosial P3AP2KB</option>");
      //     $('#penempatan').append("<option value='P9'>DINAS Pekerjaan Umum dan Penataan Ruang</option>");
      //     $('#penempatan').append("<option value='P10'>BNPB</option>");
      //   } else if (hakakses == 3) {
      //     // $('#penempatan').prop('disabled', false);
      //     $.ajax({
      //       url: "<?= base_url('data/get_subkategori'); ?>",
      //       type: "POST",
      //       data: {
      //         'hakakses': hakakses
      //       },
      //       dataType: 'json',
      //       success: function(data) {
      //         $('#penempatan').html(data);
      //       },
      //       error: function() {
      //         alert('penempatan');
      //       }
      //     });

      //   }
      // });


    });
    $.widget.bridge('uibutton', $.ui.button)
  </script>




  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?= base_url('assets/'); ?>plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?= base_url('assets/'); ?>plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?= base_url('assets/'); ?>plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= base_url('assets/'); ?>plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?= base_url('assets/'); ?>plugins/moment/moment.min.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?= base_url('assets/'); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?= base_url('assets/'); ?>plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url('assets/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/'); ?>dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= base_url('assets/'); ?>dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('assets/'); ?>dist/js/demo.js"></script>
  </body>

  </html>