<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- <div class="col-sm-12">
                    <h1 class="m-0 text-dark">PERLOMBAAN DESA </h1>
                </div> -->
                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-text-width"></i>
                                Perlombaan Desa Pada Kecamatan <?= $this->session->userdata('penempatan') ?>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <dl class="row">
                                <?php foreach ($pengajuan as $pe) : ?>

                                    <dt class="col-sm-4">Desa yang diajukan</dt>
                                    <dd class="col-sm-8"><?= $pe->desa; ?></dd>
                                    <dt class="col-sm-4">Status Pengajuan</dt>

                                    <dd class="col-sm-8"><?php if($pe->status_ajuan == 2){ echo 'Pengajuan Diterima';}  ?></dd>
                                <?php endforeach; ?>
                                <dt class="col-sm-4">Jadwal Pelaksanaan</dt>
                                <?php if ($numjadwal > 0) {
                                    foreach($jadwal as $jadwal):
                                    if ($jadwal->tgl_jadwal == 00 - 00 - 0000) {
                                ?><dd class="col-sm-8"><?= $jadwal->tgl_jadwal; ?> &nbsp;Belum disetujui Sekda</dd><?php
                                    } else if ($jadwal->tgl_jadwal != 00 - 00 - 0000) {
                                    ?><dd class="col-sm-8"><?= longdate_indo($jadwal->tgl_jadwal); ?></dd><?php
                                    }
                                endforeach;
                                } else if ($numjadwal < 1) { ?>
                                    <dd class="col-sm-8">Jadwal Belum Di Buat</dd>
                                <?php
                                } ?>
                                <dt class="col-sm-4">Urutan Skor Desa</dt>
                                <dd class="col-sm-8">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Kecamatan</th>
                                                <th>Desa</th>
                                                <th>Total Nilai</th>
                                                <th>Total Dadu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($urujuara as $jur) : ?>
                                                <tr>
                                                    <td><?= $jur->kecamatan; ?></td>
                                                    <td><?= $jur->desa; ?></td>
                                                    <td><?= $jur->total; ?></td>
                                                    <td><?= $jur->total_dadu; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </dd>
                            </dl>
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