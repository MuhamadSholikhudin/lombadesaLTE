<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center">DATA JUARA LOMBA</h1>
                </div><!-- /.col -->

                <div class="col-sm-12">
                    <br>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Juara Lomba Desa Kabupaten Kudus Tahun <?= date('Y'); ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Kecamatan</th>
                                        <th>Desa</th>
                                        <th style="width: 100px">Juara Ke</th>
                                        <th style="width: 100px">Total Nilai</th>
                                        <th colspan="2" style="width: 100px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($juara as $jur) : ?>

                                        <tr>
                                            <form action="<?= base_url('tenaga_ahli/acc_juara/acc') ?>" enctype="multipart/form-data" method="POST">
                                                <input type="hidden" name="no_jadwal" value="<?= $jur->no_jadwal ?>">
                                                <td>
                                                    <?= $jur->kecamatan ?>
                                                    <input type="hidden" name="kecamatan" value="<?= $jur->kecamatan ?>">
                                                </td>
                                                <td>
                                                    <?= $jur->desa ?>
                                                    <input type="hidden" name="desa" value="<?= $jur->desa ?>">
                                                </td>
                                                <td><span class="badge bg-success"><?= $no;  ?></span>
                                                    <input type="hidden" name="juara_ke" value="<?= $no; ?>">
                                                </td>
                                                <td><span class="badge bg-grey"><?= $jur->total  ?>
                                                    </span>
                                                    <input type="hidden" name="total_nilai" value="<?= $jur->total; ?>"></td>
                                                <td>
                                                    <button type="submit" class="btn badge bg-primary">
                                                        ACC
                                                    </button>
                                                </td>
                                            </form>
                                            <form action="<?= base_url('tenaga_ahli/acc_juara/batalkan') ?>" enctype="multipart/form-data" method="POST">
                                                <input type="hidden" name="tahun" value="<?= date('Y'); ?>">

                                                <td>
                                                    <button type="submit" class="btn badge bg-primary">
                                                        batalkan
                                                    </button>
                                                </td>
                                            </form>
                                        </tr>
                                        <?php $no++; ?>

                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div><!-- /.col -->

                <div class="col-sm-12">
                    <br>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Juara Lomba Desa Kabupaten Kudus </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Kecamatan</th>
                                        <th>Desa</th>
                                        <th style="width: 100px">Total Nilai</th>
                                        <th style="width: 100px">Juara Ke</th>
                                        <th style="width: 100px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($juarakemarin as $jur) : ?>
                                        <tr>

                                            <td>
                                                <?= $jur->kecamatan ?>
                                                <input type="hidden" name="kecamatan" value="<?= $jur->kecamatan ?>">
                                            </td>
                                            <td>
                                                <?= $jur->desa ?>

                                            </td>
                                            <td><span class="badge bg-success"><?= $no;  ?></span>

                                            </td>
                                            <td><span class="badge bg-grey"><?= $jur->total  ?>
                                                </span>

                                            <td>
                                                <a href="" class="btn badge bg-primary">
                                                    ACC
                                                </a>
                                            </td>


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