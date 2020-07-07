<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center">DATA JADWAL LOMBA DESA</h1>
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
                                <th colspan="3" class="text-center">Aksi</th>
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
                                    if ($jadw->tgl_jadwal == 0000 - 00 - 00) {
                                    ?>
                                        <td>
                                            <a href="<?= base_url('tenaga_ahli/penjadwalan/edit/') . $jadw->no_jadwal; ?>">Isi Jadwal</a>
                                        </td>
                                        <td><?= $jadw->tahun ?></td>

                                        <td>
                                            <?= anchor('tenaga_ahli/penjadwalan/edit/' . $jadw->no_jadwal, '<div class="btn btn-success btn-btn-sm">
                        <i class="fa fa-edit"></i> </div>') ?>
                                        </td>
                                        <td><?= anchor('tenaga_ahli/penjadwalan/kembalikan/' . $jadw->no_hasilajuan, '<div class="btn btn-danger btn-btn-sm">
                        <i class="fa fa-undo"></i> </div>') ?>
                                        </td>

                                        <?php
                                    } else {
                                        if ($jadw->status_jadwal == 2) {
                                        ?>
                                            <td>
                                                <?= $jadw->tgl_jadwal ?>
                                            </td>
                                            <td><?= $jadw->tahun ?></td>
                                            <td colspan="3" class="text-center">

                                                <?= anchor('tenaga_ahli/penjadwalan/ajukan/' . $jadw->no_jadwal, '<div class="btn btn-primary btn-btn-sm  data-toggle=" tooltip" data-placement="top" title="Ajukan">
                                            <i class="fas fa-check-double"></i>
                                        </div>') ?>
                                            </td>
                                        <?php
                                        } elseif ($jadw->status_jadwal == 1) {
                                        ?>
                                            <td> <?= $jadw->tgl_jadwal ?></td>
                                            <td><?= $jadw->tahun ?></td>
                                            <td colspan="2" class="text-center">
                                                <?= anchor('tenaga_ahli/penjadwalan/ajukan/' . $jadw->no_jadwal, '<div class="btn btn-primary btn-btn-sm  data-toggle=" tooltip" data-placement="top" title="Sufah Mengajukan tunggu acc">
                                            <i><span> </span> Diajukan</i>
                                        </div>') ?>
                                            </td>
                                            <td>
                                                <?= anchor('tenaga_ahli/penjadwalan/batalkan/' . $jadw->no_jadwal, '<div class="btn btn-warning btn-btn-sm data-toggle=" tooltip" data-placement="top" title="batalkan">
                        <i class="fas fa-times"></i> </div>') ?>
                                            </td>
                                        <?php
                                        } elseif ($jadw->status_jadwal == 0) {
                                        ?>
                                            <td>
                                                <a href="<?= base_url('tenaga_ahli/penjadwalan/edit/') . $jadw->no_jadwal; ?>"><?= $jadw->tgl_jadwal ?>
                                            </td>
                                            <td><?= $jadw->tahun ?></td>
                                            <td>

                                                <?= anchor('tenaga_ahli/penjadwalan/ajukan/' . $jadw->no_jadwal, '<div class="btn btn-primary btn-btn-sm  data-toggle=" tooltip" data-placement="top" title="Ajukan">
                                            <i class="fas fa-external-link-alt"></i>
                                        </div>') ?>
                                            </td>
                                            <td>
                                                <?= anchor('tenaga_ahli/penjadwalan/edit/' . $jadw->no_jadwal, '<div class="btn btn-success btn-btn-sm data-toggle=" tooltip" data-placement="top" title="Edit">
                        <i class="fa fa-edit"></i> </div>') ?>
                                            </td>
                                            <td><?= anchor('tenaga_ahli/penjadwalan/kembalikan/' . $jadw->no_hasilajuan, '<div class="btn btn-danger btn-btn-sm data-toggle=" tooltip" data-placement="top" title="Kembalikan">
                        <i class="fa fa-undo-alt"></i> </div>') ?>
                                            </td>
                                    <?php
                                        }
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