<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Daftar Jadwal Pelaksanan Lomba Desa Berdasarkan Tahun</h1>
                </div><!-- /.col -->

                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Data Jadwal Pelaksanan Perlombaan Desa Berdasarkan tahun</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <td>NO</td>
                                            <th>Keterangan </th>
                                            <th>Tahun</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($pertahun as $tah) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td>Data Jadwal pelaksanan lomba desa tahun</td>
                                                <td><?= $tah->tahun ?></td>
                                                <td><a href="<?= base_url('admin_sekda/jadwal_lomba/index_pertahun/' . $tah->tahun) ?>">
                                                        <span class="badge badge-success">
                                                            Lihat
                                                        </span></a>
                                                </td>
                                                
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
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