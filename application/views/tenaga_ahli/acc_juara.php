<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center">DATA JUARA LOMBA</h1>
                    <?= $this->session->flashdata('message'); ?>

                </div><!-- /.col -->
                <div class="col-sm-12">
                    <br>
                    <div class="card">
                        <div class="card-header text-center">
                            <h3 class="card-title ">Juara Lomba Desa Kabupaten Kudus Tahun <?= date('Y') ?></h3>
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
                                        <th style="width: 110px">Total Dadu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($numjuara->num_rows() == 6) {
                                    ?>

                                        <?php $no = 1; ?>
                                        <?php foreach ($juara as $jur) : ?>
                                            <tr>
                                                <form action="<?= base_url('tenaga_ahli/acc_juara/batalkan') ?>" enctype="multipart/form-data" method="POST">
                                                    <td class="text-center">
                                                        <?= $no;  ?>
                                                        <input type="hidden" name="id_juara[]" value="<?= $jur->id_juara ?>">
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $jur->kecamatan ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $jur->desa ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $jur->juara;  ?>
                                                        <?php if ($jur->juara == 4) {
                                                            echo 'Juara Harapan 1';
                                                        } elseif ($jur->juara == 5) {
                                                            echo 'Juara Harapan 2';
                                                        } elseif ($jur->juara == 6) {
                                                            echo 'Juara Harapan 3';
                                                        }

                                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $jur->total_nilai  ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $jur->total_dadu  ?>
                                                    </td>
                                            </tr>
                                            <?php $no++; ?>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
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
                                    } elseif ($numjuara->num_rows() < 1) {
                                        if ($juaraini->num_rows() < 1) {
                                        ?>

                                            <tr>
                                                <td colspan="4" class="text-center">
                                                    Data Belum Ada
                                                </td>
                                            </tr>
                                        <?php
                                        } elseif ($juaraini->num_rows() >= 1 and $juaraini->num_rows() <= 4) {
                                        ?>
                                            <?php $no = 1; ?>
                                            <?php foreach ($juarabaru as $jur) : ?>
                                                <tr class="text-center ">
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
                                                    <td><span class="badge bg-success" data-togle="tooltip" <?php if ($no == 1) {
                                                                                                                echo "title='Juara Sementara'";
                                                                                                            } else {
                                                                                                                echo "title=''";
                                                                                                            } ?>><?= $no;  ?></span>
                                                        <input type="hidden" name="juara<?= $no; ?>" value="<?= $no; ?>">
                                                    </td>
                                                    <td>
                                                        <?= $jur->total ?>
                                                    </td>
                                                    <td>
                                                        <?= $jur->total_dadu ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <?php $no++; ?>
                                                <?php endforeach; ?>

                                            <?php
                                        } elseif ($juaraini->num_rows() >= 6) {
                                            ?>


                                                <form action="<?= base_url('tenaga_ahli/acc_juara/acc') ?>" enctype="multipart/form-data" method="POST">
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($juarabaru as $jur) : ?>
                                                <tr class="text-center">
                                                    <td>
                                                        <?= $no;  ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $jur->kecamatan ?>
                                                        <input type="hidden" name="kecamatan[]" value="<?= $jur->kecamatan ?>">
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $jur->desa ?>
                                                        <input type="hidden" name="desa[]" value="<?= $jur->desa ?>">
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="badge bg-primary">
                                                            <?= $no  ?>
                                                            <?php if ($no == 4) {
                                                                echo 'Juara Harapan 1';
                                                            } elseif ($no == 5) {
                                                                echo 'Juara Harapan 2';
                                                            } elseif ($no == 6) {
                                                                echo 'Juara Harapan 3';
                                                            }

                                                            ?>
                                                        </span>
                                                        <input type="hidden" name="juara[]" value="<?= $no; ?>">
                                                    </td>
                                                    <td class="text-center"><?= $jur->total  ?>
                                                        <input type="hidden" name="total_nilai[]" value="<?= $jur->total; ?>">
                                                    </td>
                                                    <td class="text-center"><?= $jur->total_dadu  ?>
                                                        <input type="hidden" name="total_dadu[]" value="<?= $jur->total_dadu; ?>">
                                                    </td>
                                                </tr>
                                                <?php $no++; ?>
                                            <?php endforeach; ?>

                                            <?php $no = 7; ?>
                                            <?php foreach ($tidakjuara as $jur) : ?>
                                                <tr class="text-center">
                                                    <td>
                                                        <?= $no;  ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $jur->kecamatan ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $jur->desa ?>
                                                    </td>
                                                    <td class="text-center"><span class="badge bg-success"><?= $no;  ?></span>
                                                    </td>
                                                    <td class="text-center"><?= $jur->total  ?>
                                                    </td>
                                                    <td class="text-center"><?= $jur->total_dadu  ?>
                                                    </td>
                                                </tr>
                                                <?php $no++; ?>
                                            <?php endforeach; ?>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <button type="submit" class="btn badge bg-primary">
                                                        <i class="fas fa-check"></i> &nbsp;ACC
                                                    </button>
                                                </td>
                                                <td></td>
                                            </tr>

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
                                    <tr class="text-center">
                                        <th style="width: 10px">NO</th>
                                        <th class="text-center">Kecamatan</th>
                                        <th class="text-center">Desa</th>
                                        <th style="width: 100px">Juara Ke</th>
                                        <th style="width: 120px">Total Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($juaralama as $jur) : ?>
                                        <tr class="text-center">
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