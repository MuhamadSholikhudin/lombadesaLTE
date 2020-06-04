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
                        <div class="card-header text-center">
                            <h3 class="card-title ">Juara Lomba Desa Kabupaten Kudus Tahun <?= date('Y'); ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">NO</th>
                                        <th class="text-center">Kecamatan</th>
                                        <th class="text-center">Desa</th>
                                        <th style="width: 100px">Juara Ke</th>
                                        <th style="width: 100px">Total Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($juara->num_rows() > 2) {
                                    ?>
                                        <?php $no = 1; ?>
                                        <?php foreach ($juara as $jur) : ?>
                                            <tr>
                                                <form action="<?= base_url('tenaga_ahli/acc_juara/batalkan') ?>" enctype="multipart/form-data" method="POST">
                                                    <input type="hidden" name="id_jadwal<?= $no; ?>" value="<?= $jur->no_jadwal ?>">
                                                    <td>
                                                        <?= $no;  ?>
                                                    </td>
                                                    <td>
                                                        <?= $jur->kecamatan ?>
                                                        <input type="hidden" name="kecamatan<?= $no; ?>" value="<?= $jur->kecamatan ?>">
                                                    </td>
                                                    <td>
                                                        <?= $jur->desa ?>
                                                        <input type="hidden" name="desa<?= $no; ?>" value="<?= $jur->desa ?>">
                                                    </td>
                                                    <td><?= $jur->juara;  ?>
                                                        <input type="hidden" name="juara<?= $no; ?>" value="<?= $juara; ?>">
                                                    </td>
                                                    <td><?= $jur->total_nilai  ?>

                                                        <input type="hidden" name="total_nilai<?= $no; ?>" value="<?= $jur->total_nilai; ?>"></td>
                                            </tr>
                                            <?php $no++; ?>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button type="submit" class="btn badge bg-primary">
                                                    <i class="fas fa-times"></i> &nbsp;Batalkan
                                                </button>
                                            </td>
                                        </tr>
                                        </form>
                                        <?php

                                    } elseif ($juara->num_rows() < 1) {
                                        if ($juaraini->num_rows() < 4) {
                                        ?>
                                            <tr>
                                                <td colspan="4" class="text-center">
                                                    Data Belum Ada
                                                </td>
                                            </tr>
                                        <?php
                                        } elseif ($juaraini->num_rows() == 3) {
                                        ?>

                                            <?php $no = 1; ?>
                                            <form action="<?= base_url('tenaga_ahli/acc_juara/acc') ?>" enctype="multipart/form-data" method="POST">
                                                <?php foreach ($juarabaru as $jur) : ?>

                                                    <tr>
                                                        <td>
                                                            <?= $no;  ?>
                                                        </td>
                                                        <input type="hidden" name="no_jadwal<?= $no; ?>" value="<?= $jur->no_jadwal ?>">
                                                        <td>
                                                            <?= $jur->kecamatan ?>
                                                            <input type="hidden" name="kecamatan<?= $no; ?>" value="<?= $jur->kecamatan ?>">
                                                        </td>
                                                        <td>
                                                            <?= $jur->desa ?>
                                                            <input type="hidden" name="desa<?= $no; ?>" value="<?= $jur->desa ?>">
                                                        </td>
                                                        <td><span class="badge bg-success"><?= $no;  ?></span>
                                                            <input type="hidden" name="juara<?= $no; ?>" value="<?= $no; ?>">
                                                        </td>
                                                        <td><?= $jur->total  ?>

                                                            <input type="hidden" name="total_nilai<?= $no; ?>" value="<?= $jur->total; ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <button type="submit" class="btn badge bg-primary">
                                                                <i class="fas fa-check"></i> &nbsp;ACC
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <?php $no++; ?>
                                                <?php endforeach; ?>
                                            </form>
                                        <?php
                                        }
                                        ?>
                                    <?php
                                    }
                                    ?>
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
                                        <th style="width: 10px">NO</th>
                                        <th class="text-center">Kecamatan</th>
                                        <th class="text-center">Desa</th>
                                        <th style="width: 100px">Juara Ke</th>
                                        <th style="width: 100px">Total Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($juaralama as $jur) : ?>
                                        <tr>
                                            <td>
                                                <?= $no;  ?>
                                            </td>
                                            <td>
                                                <?= $jur->kecamatan ?>
                                            </td>
                                            <td>
                                                <?= $jur->desa ?>

                                            </td>
                                            <td>
                                                <?= $jur->juara ?>
                                            </td>
                                            <td><?= $jur->total_nilai  ?>

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