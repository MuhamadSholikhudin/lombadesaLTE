<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SISTEM LOMBA DESA</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="<?= base_url('assets/'); ?>css/fonts.css" rel="stylesheet">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/jquery.dataTables.min.css">

    <!-- JQUERY AJAX -->
    <script src="<?= base_url('assets/'); ?>js/jqueryt.min.js"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="container-fluid">

        <div class="row card p-4 mb-2">
            <div class="col-sm-12">
                <h1 class="m-0 text-dark text-center">JADWAL PELAKSANAAN EVALUASI PERKEMBANGAN DESA</h1>
                <h1 class="m-0 text-dark text-center">TINGKAT KABUPATEN KUDUS TAHUN 2020</h1>

            </div><!-- /.col -->

            <div class="col-sm-12">

                <br>
                <table class="table table-bordered">
                    <thead>

                        <tr>
                            <th>NO</th>
                            <th>HARI / TANGGAL</th>
                            <th>DESA</th>
                            <th>KECAMATAN</th>

                        </tr>
                    </thead>
                    <tbody>


                        <?php $no = 1; ?>
                        <?php foreach ($penjadwalan as $jadw) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= longdate_indo($jadw->tgl_jadwal) ?></td>
                                <td><?= $jadw->desa ?></td>
                                <td><?= $jadw->kecamatan ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="content-bottom">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div>
                            <h5 class="text-center">An , BUPATI KUDUS </h5>
                            <h5 class="text-center">Sekretaris Daerah</h5>
                        </div>
                        <div class="mb-3 text-center">
                            <br>
                            <h5 class="text-center"></h5>
                            Tertanda Tangani
                            <br>
                        </div>
                        <div>
                            <h5 class="text-center"><u><?= $sekda->nama ?></u> </h5>
                            <h5 class="text-center">NIP : <?= $sekda->username ?></h5>
                        </div>

                    </div>
                </div>
            </div>

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">


            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->









    <!-- <div class="container">


</div> -->

    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


    <script>
        window.print()
    </script>

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



    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>


</body>

</html>