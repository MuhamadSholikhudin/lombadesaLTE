<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
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
<?php 
// $jumlahacc = $this->db
// if(){

// }elseif(){

// }

?>
                                <form action="<?= base_url('admin_sekda/jadwal_lomba/batalkan/') ?>" method="post" enctype="multipart/form-data">
                                    <?php foreach ($penjadwalan as $jadw) : ?>
                                        <input type="hidden" name="no_jadwal[]" value="<?= $jadw->no_jadwal ?>">
                                    <?php endforeach; ?>

                                    <button type="submit" class="btn btn-danger btn-btn-sm" data-toggle="tooltip" data-placement="top" title="Kembalikan Jadwal Lomba"><i class="fas fa-undo"></i>Kembalikan</button>
                                </form>
                                <form action="<?= base_url('admin_sekda/jadwal_lomba/acc/') ?>" method="post" enctype="multipart/form-data">
                                    <?php foreach ($penjadwalan as $jadw) : ?>
                                        <input type="hidden" name="no_jadwal[]" value="<?= $jadw->no_jadwal ?>">
                                    <?php endforeach; ?>

                                    <button class="btn btn-primary btn-btn-sm" type="submit" data-toggle="tooltip" data-placement="top" title="Setujui jadwal Lomba"><i class="fas fa-check"> Setujui</i></button>
                                </form>

                                <br>
                            </div>
                            <div>
                                <h5 class="text-center"><u><?= $this->session->userdata('nama') ?></u> </h5>
                                <h5 class="text-center">NIP : <?= $this->session->userdata('username') ?></h5>
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