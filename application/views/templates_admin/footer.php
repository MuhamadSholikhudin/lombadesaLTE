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
  <script src="<?= base_url('assets/'); ?>js/jquery-3.5.1.js"></script>
  <script src="<?= base_url('assets/'); ?>js/jquery.dataTables.min.js"></script>

  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

  <!-- JQUERY AJAX -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script>
    $(document).ready(function() {

      $("#hakakses").on('change', function() {
        var hakakses = $(this).val();
        // alert(id_kec);
        if (hakakses == '') {
          $("#penempatan option").remove();
          $('#penempatan').prop('disabled', true);
          $('#penempatan').append("<option value=''>Pilih</option>");

        } else if (hakakses == 1) {
          $("#penempatan option").remove();
          $('#penempatan').prop('disabled', false);
          $('#penempatan').append("<option value='DINAS PEMBERDAYAAN MASYARAKAT DAN DESA'>DINAS PEMBERDAYAAN MASYARAKAT DAN DESA</option>");
        } else if (hakakses == 2) {
          $("#penempatan option").remove();
          $('#penempatan').prop('disabled', false);
          $('#penempatan').append("<option value='DINAS PEMBERDAYAAN MASYARAKAT DAN DESA'>DINAS PEMBERDAYAAN MASYARAKAT DAN DESA</option>");
        } else if (hakakses == 4) {
          $("#penempatan option").remove();
          $('#penempatan').prop('disabled', false);
          $('#penempatan').append("<option value='SEKDA KUDUS'>SEKDA KUDUS</option>");
        } else if (hakakses == 5) {
          $("#penempatan option").remove();
          $('#penempatan').prop('disabled', false);
          $('#penempatan').append("<option value='P1'>Badan Perencanaan Pembangunan Daerah</option>");
          $('#penempatan').append("<option value='P2'>Badan Penanggulangan Bencana Daerah</option>");
          $('#penempatan').append("<option value='P3'>Satuan Pamong Praja</option>");
          $('#penempatan').append("<option value='P4'>Pemerintahan Desa</option>");
          $('#penempatan').append("<option value='P5'>Pemerintahan Masyarakat</option>");
          $('#penempatan').append("<option value='P6'>DINAS Komunikasi dan Informasi</option>");
          $('#penempatan').append("<option value='P7'>DINAS Kebudayaan dan Pariwisata</option>");
          $('#penempatan').append("<option value='P8'>DINAS Tenaga Kerja</option>");
          $('#penempatan').append("<option value='P9'>DINAS Pendidikan Pemuda dan Olahraga</option>");
          $('#penempatan').append("<option value='P10'>DINAS Kesehatan</option>");
          $('#penempatan').append("<option value='P11'>DINAS Sosial P3AP2KB</option>");
        } else if (hakakses == 3) {
          // $('#penempatan').prop('disabled', false);

          $.ajax({
            url: "<?= base_url('tenaga_ahli/pengguna/get_subkategori'); ?>",
            type: "GET",
            // data: {
            //   'hakakses': hakakses
            // },
            dataType: 'json',
            success: function(data) {
              $("#penempatan option").remove();
              // $('#penempatan').prop('disabled', false);
              $('#penempatan').html(data);
              // console.log(data);
            },
            error: function() {
              alert('ERROR !');
            }
          });

        }
      })

      $('#daftar').DataTable();
      $('#kriteria').DataTable();
      $('#pengguna').DataTable();
      $('#wilayah').DataTable();
      $('#berita').DataTable();
      $('#nilai').DataTable();
      // var table = $('#nilai').DataTable({
      //   data: rows,
      //   destroy: true,
      //   columns: columns
      // });
    });
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script>
    $(function() {
      $('[data-toggle="tooltip"]').tooltip();
    });
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