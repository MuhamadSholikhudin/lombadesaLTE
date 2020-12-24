<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center">DATA PENGAJUAN DESA PESERTA LOMBA DESA</h1>
                    <?= $this->session->flashdata('message'); ?>

                </div><!-- /.col -->

                <div class="col-sm-12">
                    <br>
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Kecamatan</th>
                                <th>Desa</th>
                                <th>Status</th>
                                <th>Tahun</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($pengajuan as $penga) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>

                                    <form action="<?= base_url('stafpmd/pengajuan/diterima/' . $penga->no_hasilajuan) ?>" method="post">
                                        <input type="hidden" name="no_hasilajuan" id="" value="<?= $penga->no_hasilajuan ?>">
                                        <input type="hidden" name="kecamatan" id="" value="<?= $penga->kecamatan ?>">
                                        <input type="hidden" name="desa" id="" value="<?= $penga->desa ?>">
                                        <input type="hidden" name="tahun" id="" value="<?= $penga->tahun ?>">

                                        <td><?= $penga->kecamatan ?></td>
                                        <td><?= $penga->desa ?></td>
                                        <?php
                                        if ($penga->status_ajuan == 3) {
                                        ?>
                                            <td><?php if ($penga->status_ajuan == 3) {
                                                    echo 'Di Terima';
                                                } ?>
                                            </td>
                                            <td><?= $penga->tahun ?></td>
                                            <td class="text-center">
                                                <?= anchor('stafpmd/pengajuan/editajuanjadwal/' . $penga->no_hasilajuan, '<div class="btn btn-warning btn-btn-sm" data-toggle="tooltip" data-placement="top" title="Batalkan">
                        <i class="fas fa-window-close"></i> Batalkan</div>') ?>
                                            </td>
                                        <?php   } elseif ($penga->status_ajuan > 0 && $penga->status_ajuan == 2) {
                                        ?>
                                            <td><?php if ($penga->status_ajuan == 2) {
                                                    echo 'Belum Di cek';
                                                } ?>
                                            </td>
                                            <td><?= $penga->tahun ?></td>

                                            <td class="text-center">
                                                <!-- <?= anchor('stafpmd/pengajuan/diterima/' . $penga->no_hasilajuan, '<button type="submit"  class="btn btn-primary btn-btn-sm" data-toggle="tooltip" data-placement="top" title="Diterima">                        <i class="fas fa-clipboard-check"></i> Terima </button>') ?> -->
                                                <!-- <?= anchor('stafpmd/pengajuan/lihat_berkas/' . $penga->no_hasilajuan, '<button type="submit"  class="btn btn-info btn-btn-sm" data-toggle="tooltip" data-placement="top" title="Lihat Berkas">                        <i class="fas fa-eye"></i> Lihat </button>') ?> -->
                                                <a href="<?= base_url('stafpmd/pengajuan/lihat_pengajuan/') . $penga->no_hasilajuan ?>" class="btn btn-info btn-btn-sm" data-toggle="tooltip" data-placement="top" title="Lihat Berkas"><i class="fas fa-eye"></i> Lihat</a>
                                            </td>
                                            <td class="text-center">
                                                <?= anchor('stafpmd/pengajuan/dikembalikan/' . $penga->no_hasilajuan, '<div class="btn btn-success btn-btn-sm" data-toggle="tooltip" data-placement="top" title="Dikembalikan">                        <i class="fas fa-undo"></i> Kembalikan </div>') ?>
                                            </td>
                                        <?php   }  ?>
                                    </form>
                                </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>


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