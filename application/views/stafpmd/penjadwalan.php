<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row card p-4  mb-2">
                <div class="col-sm-12">
                    <?= $this->session->flashdata('message'); ?>
                    <?php $tahunini = date('Y'); ?>
                    <h1 class="m-0 text-dark text-center">JADWAL PELAKSANAAN EVALUASI PERKEMBANGAN DESA</h1>
                    <h1 class="m-0 text-dark text-center">TINGKAT KABUPATEN KUDUS TAHUN <?= $tahunini ?></h1>


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
                                <!-- <th>Tahun</th> -->
                                
                                
                                <?php
                                ini_set('display_errors', 'off');
                                if ($jadini->status_jadwal == 0) {
                                ?>
                                    <th class="text-center">Aksi</th>

                                <?php } elseif ($jadini->status_jadwal >= 1) {
                                    echo '';
                                } ?>

                            </tr>
                        </thead>
                        <tbody>


                            <?php $no = 1; ?>
                            <?php foreach ($penjadwalan as $jadw) : ?>
                                <tr>

                                    <td><?= $no++ ?></td>
                                    <?php
                                    if ($jadw->tgl_jadwal == 0000 - 00 - 00) {
                                    ?>
                                        <td>
                                            <a href="<?= base_url('stafpmd/penjadwalan/edit/') . $jadw->no_jadwal; ?>">Isi Jadwal</a>
                                        </td>
                                        <td><?= $jadw->kecamatan ?></td>
                                        <td><?= $jadw->desa ?></td>

                                        <td>
                                            <?= anchor('stafpmd/penjadwalan/edit/' . $jadw->no_jadwal, '<div class="btn btn-success btn-btn-sm"  data-toggle="tooltip" data-placement="top" title="Edit Jadwal">
                        <i class="fa fa-edit"></i>Edit </div>') ?>
                                        </td>
                                        <!-- <td>
                                            <?= anchor('stafpmd/penjadwalan/kembalikan/' . $jadw->no_hasilajuan, '<div class="btn btn-danger btn-btn-sm" data-toggle="tooltip" data-placement="top" title="Dikembalikan">
                        <i class="fa fa-undo"></i>Kembalikan </div>') ?>

                                        </td> -->
                                        <!-- <td></td> -->

                                        <?php
                                    } else {
                                        if ($jadw->status_jadwal == 2) {
                                        ?>
                                            <td>
                                                <?= longdate_indo($jadw->tgl_jadwal) ?>
                                            </td>
                                            <td><?= $jadw->desa ?></td>
                                            <td><?= $jadw->kecamatan ?></td>
                                            <!--<td colspan="3" class="text-center">

                                                 <?= anchor('stafpmd/penjadwalan/', '<div class="btn btn-primary btn-btn-sm"  data-toggle="tooltip" data-placement="top" title="Sudah di Setujui oleh Sekda Kudus">
                                            <i class="fas fa-check-double"></i>Di Setujui
                                        </div>') ?> 
                                            </td>-->
                                        <?php
                                        } elseif ($jadw->status_jadwal == 1) {
                                        ?>
                                            <td> <?= longdate_indo($jadw->tgl_jadwal) ?></td>
                                            <td><?= $jadw->desa ?></td>
                                            <td><?= $jadw->kecamatan ?></td>
                                            <!-- <td colspan="2" class="text-center"> -->
                                            <!-- <?= anchor('stafpmd/penjadwalan/ajukan/' . $jadw->no_jadwal, '<div class="btn btn-primary btn-btn-sm"  data-toggle="tooltip" data-placement="top" title="Sudah Mengajukan tunggu acc">
                                            <i><span> </span> Diajukan</i>
                                        </div>') ?>
                                            </td>
                                            <td> -->
                                            <!-- <?= anchor('stafpmd/penjadwalan/batalkan/' . $jadw->no_jadwal, '<div class="btn btn-warning btn-btn-sm" data-toggle="tooltip" data-placement="top" title="batalkan">
                        <i class="fas fa-times"></i> </div>') ?> -->
                                            <!-- </td> -->

                                        <?php
                                        } elseif ($jadw->status_jadwal == 0) {
                                        ?>
                                            <td>
                                                <a href="<?= base_url('stafpmd/penjadwalan/edit/') . $jadw->no_jadwal; ?>" data-toggle="tooltip" data-placement="top" title="Edit Tanggal Jadwal"><?= longdate_indo($jadw->tgl_jadwal) ?>
                                            </td>
                                            <td><?= $jadw->desa ?></td>
                                            <td><?= $jadw->kecamatan ?></td>
                                            <!-- <td>

                                                <?= anchor('stafpmd/penjadwalan/ajukan/' . $jadw->no_jadwal, '<div class="btn btn-primary btn-btn-sm"  data-toggle="tooltip" data-placement="top" title="Ajukan ke Sekda Kudus">
                                            <i class="fas fa-external-link-alt"></i>
                                        </div>') ?>
                                            </td> -->
                                            <td>
                                                <?= anchor('stafpmd/penjadwalan/edit/' . $jadw->no_jadwal, '<div class="btn btn-success btn-btn-sm" data-toggle="tooltip" data-placement="top" title="Edit Jadwal">
                        <i class="fa fa-edit"></i> Edit</div>') ?>
                                            </td>
                                            <!-- <td><?= anchor('stafpmd/penjadwalan/kembalikan/' . $jadw->no_hasilajuan, '<div class="btn btn-danger btn-btn-sm" data-toggle="tooltip" data-placement="top" title="Kembalikan">
                        <i class="fa fa-undo-alt"></i> </div>') ?>
                                            </td> -->
                                    <?php
                                        }
                                    }
                                    ?>
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
                                <h5 class="text-center">
                                    <?php foreach ($tahunin as $tahu) :
                                        $numpengajua = $this->db->query("SELECT * FROM hasil_ajuan WHERE tahun = '$tahu' ");
                                        $numpengjadw = $this->db->query("SELECT * FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan WHERE tahun = '$tahu' AND jadwal_lomba.tgl_jadwal != '0000-00-00' ");
                                        $jadacc = $this->db->query("SELECT * FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan WHERE tahun = '$tahu' AND jadwal_lomba.tgl_jadwal != '0000-00-00' AND jadwal_lomba.status_jadwal = 2");
                                        $jadkirim = $this->db->query("SELECT * FROM jadwal_lomba JOIN hasil_ajuan ON jadwal_lomba.no_hasilajuan = hasil_ajuan.no_hasilajuan WHERE tahun = '$tahu' AND jadwal_lomba.tgl_jadwal != '0000-00-00' AND jadwal_lomba.status_jadwal >= 1");

                                        if ($numpengajua->num_rows() ==  $jadacc->num_rows()) { ?>
                                            Ter Tanda tangani
                                        <?php } elseif ($numpengajua->num_rows() ==  $jadkirim->num_rows()) { ?>
                                            <form action="<?= base_url('admin_sekda/jadwal_lomba/acc/') ?>" method="post" enctype="multipart/form-data">
                                                <?php foreach ($penjadwalan as $jadw) : ?>
                                                    <input type="hidden" name="no_jadwal[]" value="<?= $jadw->no_jadwal ?>">
                                                <?php endforeach; ?>
                                                <button class="btn btn-primary btn-btn-sm" type="submit" data-toggle="tooltip" data-placement="top" title="Setujui jadwal Lomba"><i class="fas fa-check"> Sudah terkirim Ke Sekda</i></button>
                                            </form>
                                        <?php } elseif ($numpengajua->num_rows() ==  $numpengjadw->num_rows()) { ?>
                                            <form action="<?= base_url('admin_sekda/jadwal_lomba/acc/') ?>" method="post" enctype="multipart/form-data">
                                                <?php foreach ($penjadwalan as $jadw) : ?>
                                                    <input type="hidden" name="no_jadwal[]" value="<?= $jadw->no_jadwal ?>">
                                                <?php endforeach; ?>
                                                <button class="btn btn-primary btn-btn-sm" type="submit" data-toggle="tooltip" data-placement="top" title="Setujui jadwal Lomba"><i class="fas fa-check">kirim sekda</i></button>
                                            </form>
                                        <?php } else { ?>
                                            <div class="btn btn-danger btn-btn-sm" data-toggle="tooltip" data-placement="top" title="Ada Jadwal lomba yang belum di buat">Jadwal lomba belum Lengkap</i></div>
                                        <?php } ?>

                                    <?php endforeach; ?>

                                </h5>
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
    <section class=" content">
        <div class="container-fluid">


            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>









<!-- <div class="container">


</div> -->