<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center">DATA JADWAL LOMBA DESA</h1>
                    <?= $this->session->flashdata('message'); ?>

                </div><!-- /.col -->

                <div class="col-sm-12">

                    <br>
                    <table class="table table-border">
                        <thead>

                            <tr>
                                <th>NO</th>
                                <th>KECAMATAN</th>
                                <th>DESA</th>
                                <th>Jadwal Lomba</th>
                                <th>Tahun</th>
                                <th colspan="2" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php $no = 1; ?>
                            <?php foreach ($penjadwalan as $jadw) : ?>
                                <tr>

                                    <td><?= $no++ ?></td>
                                    <td><?= $jadw->kecamatan ?></td>
                                    <td><?= $jadw->desa ?></td>

                                    <?php
                                    if ($jadw->status_jadwal == 2) {
                                    ?>
                                        <td>
                                            <?= $jadw->tgl_jadwal ?>
                                        </td>
                                        <td><?= $jadw->tahun ?></td>
                                        <td class="text-center">
                                            <div class="btn btn-primary btn-btn-sm  data-toggle=" tooltip" data-placement="top" title="Ter Acc">
                                                <i class="fas fa-check-double">&nbsp;Disetujui</i>
                                            </div>
                                        </td>
                                        <td>

                                            <?= anchor('admin_sekda/jadwal_lomba/batalkan/' . $jadw->no_jadwal, '<div class="btn btn-warning btn-btn-sm  data-toggle=" tooltip" data-placement="top" title="batalkan">
                                            <i class="fas fa-times"></i>
                                        </div>') ?>
                                        </td>
                                    <?php
                                    } elseif ($jadw->status_jadwal == 1) {
                                    ?>
                                        <td> <?= $jadw->tgl_jadwal ?></td>
                                        <td><?= $jadw->tahun ?></td>
                                        <td class="text-center">
                                            <?= anchor('admin_sekda/jadwal_lomba/acc/' . $jadw->no_jadwal, '<div class="btn btn-primary btn-btn-sm  data-toggle=" tooltip" data-placement="top" title="Setujui jadwal Lomba">
                                            <i class="fas fa-check"></i>
                                        </div>') ?>
                                        </td>
                                        <td>
                                            <?= anchor('admin_sekda/jadwal_lomba/kembalikan/' . $jadw->no_jadwal, '<div class="btn btn-danger btn-btn-sm data-toggle=" tooltip" data-placement="top" title="Kembalikan Jadwal Lomba">
                        <i class="fas fa-undo"></i> </div>') ?>
                                        </td>
                                    <?php
                                    }
                                    ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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