<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center">JADWAL PENILAIAN DESA</h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <br>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Jadwal Penilaian Desa Kabupaten Kudus Tahun &nbsp; <?= date('Y'); ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">NO</th>
                                        <th>KECAMATAN</th>
                                        <th>DESA</th>
                                        <th>JADWAL</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($daftarjadwal as $jadw) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $jadw->kecamatan ?></td>
                                            <td><?= $jadw->desa ?></td>
                                            <td><?= $jadw->tgl_jadwal ?></td>
                                            <?php
                                            if ($jadw->tgl_jadwal == date('Y-m-d')) {

                                            ?>
                                                <td>
                                                    <?= anchor('tim_penilai/penilaian/form/' . $jadw->no_jadwal, '<div class="btn btn-warning btn-btn-sm  data-toggle=" tooltip" data-placement="top" title="Form Penilaian">
                                            <i class="fas fa-pencil-alt"></i>
                                        </div>') ?>
                                                </td>
                                            <?php
                                            } else{
                                            ?>
                                                <td>
                                                    <div class="btn btn-danger btn-btn-sm data-toggle=" tooltip" data-placement="top" title="Form Penilaian Belum bisa di akses">Akses tidak bisa
                        </div>
                                                </td>
                                            <?php
                                            }
                                            ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">


            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>