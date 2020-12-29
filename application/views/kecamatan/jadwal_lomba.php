<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <a href="<?= base_url('admin_kecamatan/jadwal_lomba/cetak/'. $tahun) ?>" target="_blank" class="btn btn-warning mb-2"><i class="fas fa-print"></i> Cetak</a>
            <div class="row card p-4 mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center">JADWAL PELAKSANAAN EVALUASI PERKEMBANGAN DESA</h1>
                    <h1 class="m-0 text-dark text-center">TINGKAT KABUPATEN KUDUS TAHUN <?= $tahun ?></h1>

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
                                <!-- <th>Jadwal Lomba</th> -->
                                <!-- <th>Tahun</th> -->
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

                                        <?php
                                        if ($jadw->status_jadwal == 2) {
                                        ?>


                                            <input type="hidden" name="no_jadwal[]" value="<?= $jadw->no_jadwal ?>">
                                            <!-- <td class="text-center">
                                            <div class="btn btn-primary btn-btn-sm" data-toggle="tooltip" data-placement="top" title="Ter Acc">
                                                <i class="fas fa-check-double">&nbsp;Disetujui</i>
                                            </div>
                                        </td>
                                        <td>

                                            <?= anchor('admin_sekda/jadwal_lomba/batalkan/' . $jadw->no_jadwal, '<div class="btn btn-warning btn-btn-sm"  data-toggle="tooltip" data-placement="top" title="batalkan">
                                            <i class="fas fa-times"></i>
                                        </div>') ?>
                                        </td> -->
                                        <?php
                                        } elseif ($jadw->status_jadwal == 1) {
                                        ?>

                                            <input type="hidden" name="no_jadwal[]" value="<?= $jadw->no_jadwal ?>">

                                            <!-- 
                                        <td class="text-center">
                                            <?= anchor('admin_sekda/jadwal_lomba/acc/' . $jadw->no_jadwal, '<div class="btn btn-primary btn-btn-sm"  data-toggle="tooltip" data-placement="top" title="Setujui jadwal Lomba">
                                            <i class="fas fa-check"> Setujui</i>
                                        </div>') ?>
                                        </td>
                                        <td>
                                            <?= anchor('admin_sekda/jadwal_lomba/kembalikan/' . $jadw->no_jadwal, '<div class="btn btn-danger btn-btn-sm" data-toggle="tooltip" data-placement="top" title="Kembalikan Jadwal Lomba">
                        <i class="fas fa-undo"></i>Kembalikan </div>') ?>
                                        </td> -->
                                        <?php
                                        }
                                        ?>
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


                                <!-- <?= anchor('admin_sekda/jadwal_lomba/kembalikan/' . $jadw->no_jadwal, '<div class="btn btn-danger btn-btn-sm" data-toggle="tooltip" data-placement="top" title="Kembalikan Jadwal Lomba">
                        <i class="fas fa-undo"></i>Kembalikan </div>') ?>

                                <?= anchor('admin_sekda/jadwal_lomba/acc/', '<div class="btn btn-primary btn-btn-sm"  data-toggle="tooltip" data-placement="top" title="Setujui jadwal Lomba">
                                            <i class="fas fa-check"> Setujui</i>
                                        </div>') ?> -->
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









<!-- <div class="container">


</div> -->