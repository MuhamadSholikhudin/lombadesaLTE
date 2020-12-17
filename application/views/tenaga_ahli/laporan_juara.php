<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center">Laporan data Juara Lomba Desa Kabupaten Kudus</h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <a href="<?= base_url('tenaga_ahli/laporan/cetakjuara'); ?>" target="_blank" class="btn btn-warning"><i class="fas fa-print"></i> Cetak</a>
                </div><!-- /.col -->

                <div class="col-sm-12">
                    <br>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Laporan Pendaftar Juara Desa Kabupaten Kudus </h4>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 40px">NO</th>
                                        <th>Kecamatan</th>
                                        <th>Desa</th>
                                        <th style="width: 100px">juara</th>
                                        <th style="width: 100px">Tahun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($juara as $jur) : ?>
                                        <tr>
                                            <td>
                                                <?= $no;  ?>
                                            </td>
                                            <td>
                                                <?= $jur->kecamatan ?>
                                            </td>
                                            <td>

                                                <a href="<?= base_url('tenaga_ahli/laporan/nilai/' . $jur->tahun) ?>" target="_blank" rel="noopener noreferrer"><?= $jur->desa ?></a>
                                            </td>
                                            <td>
                                                <?= $jur->juara ?>
                                            </td>
                                            <td><?= $jur->tahun  ?>
                                        </tr>
                                        <?php $no++; ?>
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