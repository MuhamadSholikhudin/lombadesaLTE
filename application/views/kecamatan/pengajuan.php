<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 ">
                    <h1 class="text-dark text-center">PENGAJUAN DESA KECAMATAN &nbsp; <?= $this->session->userdata('penempatan') ?></h1>
                </div><!-- /.col -->
                <?= $this->session->flashdata('message'); ?>

                <div class="card card-primary col-sm-12">
                    <div class="card-header">
                        <h3 class="card-title">Informasi</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        Jangan sampai terlambat mengajukan desa, Jika terlambat mengajukan desa maka akan didiskualifikasi dan tidak ikut dalam berlombaan
                    </div>
                    <!-- /.card-body -->
                </div>


                <div class="col-sm-12 card">

                    <table class="table table-bordered mt-2">
                        <tr>
                            <th>Keterangan</th>
                            <th>Tanggal buat pendaftaran</th>
                            <th>Tanggal Terakhir Pendaftaran</th>
                            <th>Desa</th>
                            <th>Tahun</th>
                            <th>Status</th>
                            <th colspan="3" class="text-center">Aksi</th>
                        </tr>
                        <?php
                        // echo strtotime('2019');

                        // Code SElisih
                        $tgl1    = "2018-01-23"; //menentukan tanggal awal
                        $tgl2    = date('Y-m-d', strtotime('+7 days', strtotime($tgl1))); // penjumlahan tanggal sebanyak 7 hari
                        // echo $tgl2; // cetak tanggal
                        ?>

                        <?php
                        // LOGIKA
                        if ($pendaftarannum > 0) {
                            $tgl_sls = strtotime($pendaftaran->tgl_selesai);
                            $tgl_now = strtotime(date('Y-m-d'));
                            if ($tgl_sls > $tgl_now) {
                                if ($pengajuannum < 1) { ?>
                                    <tr>
                                        <td><a href="<?= base_url('admin_kecamatan/pengajuan/tambah') ?>"><?= $pendaftaran->judul ?></a></td>
                                        <td><?= longdate_indo($pendaftaran->tgl_buat) ?></td>
                                        <td><?= longdate_indo($pendaftaran->tgl_selesai) ?></td>
                                        <td> - </td>
                                        <td><?= $pendaftaran->tahun ?></td>
                                        <td>
                                            <div class="btn btn-primary btn-btn-sm">
                                                Belum Memilih Desa</i>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('admin_kecamatan/pengajuan/tambah') ?>">

                                            </a>
                                        </td>
                                    </tr>
                                    <?php } elseif ($pengajuannum > 0) {
                                    if ($pengajuan->status_ajuan == 3) { ?>
                                        <tr>
                                            <td><a href="<?= base_url('admin_kecamatan/pengajuan/lihat_surat/') ?>"></a><?= $pendaftaran->judul ?></td>
                                            <td><?= longdate_indo($pendaftaran->tgl_buat) ?></td>
                                            <td><?= longdate_indo($pendaftaran->tgl_selesai) ?></td>
                                            <td><?= $pengajuan->desa ?></td>
                                            <td><?= $pendaftaran->tahun ?></td>
                                            <td>Diterima</td>
                                            <td>
                                                <?= anchor('admin_kecamatan/pengajuan/lihat/' . $pengajuan->no_hasilajuan, '<div class="btn btn-primary btn-btn-sm" title="Pengajuan Di Terima">
                                                <i class="fas fa-check-double"></i>Disetujui </div>') ?>
                                            </td>
                                        </tr>
                                    <?php } elseif ($pengajuan->status_ajuan == 2) { ?>
                                        <tr>
                                            <td><a href="<?= base_url('admin_kecamatan/pengajuan/lihat_surat/') ?>"></a>
                                                <?= $pendaftaran->judul ?>
                                            </td>
                                            <td><?= longdate_indo($pendaftaran->tgl_buat) ?></td>
                                            <td><?= longdate_indo($pendaftaran->tgl_selesai) ?></td>
                                            <td><?= $pengajuan->desa ?></td>
                                            <td><?= $pendaftaran->tahun ?></td>
                                            <td>Mengajukan</td>
                                            <td>
                                                <!-- <?= anchor('admin_kecamatan/pengajuan/batal/' . $pengajuan->no_hasilajuan, '<div class="btn btn-warning btn-btn-sm" title="Batalkan Ajuan">
                                                <i class="fas fa-window-close"></i> Batalkan </div>') ?> -->

                                                <?= anchor('admin_kecamatan/pengajuan/lihat/' . $pengajuan->no_hasilajuan, '<div class="btn btn-secondary btn-btn-sm" title="Lihat Ajuan">
                                                <i class="fas fa-eye"></i> Lihat </div>') ?>
                                            </td>
                                        </tr>
                                    <?php } elseif ($pengajuan->status_ajuan == 1) { ?>
                                        <tr>
                                            <td><a href="<?= base_url('admin_kecamatan/pengajuan/lihat_surat/') ?>"></a><?= $pendaftaran->judul ?></td>
                                            <td><?= longdate_indo($pendaftaran->tgl_buat) ?></td>
                                            <td><?= longdate_indo($pendaftaran->tgl_selesai) ?></td>
                                            <td><?= $pengajuan->desa ?></td>
                                            <td><?= $pendaftaran->tahun ?></td>
                                            <td>
                                                Dikembalkan
                                            </td>
                                            <td>
                                                <?= anchor('admin_kecamatan/pengajuan/ajukan/' . $pengajuan->no_hasilajuan . '/' . $pengajuan->tahun, '<div class="btn btn-primary btn-btn-sm"  data-toggle="tooltip" data-placement="top" title="Ajukan">
                                                <i class="fas fa-check" ></i> Ajukan </div>') ?>
                                                <?= anchor('admin_kecamatan/pengajuan/editdesa/' . $pengajuan->no_hasilajuan, '<div class="btn btn-success btn-btn-sm"  data-toggle="tooltip" data-placement="top" title="Edit Desa">
                                                <i class="fa fa-edit" ></i>Edit </div>') ?>

                                                <!-- <?= anchor('admin_kecamatan/pengajuan/batal/' . $pengajuan->no_hasilajuan, '<div class="btn btn-warning btn-btn-sm" title="Batalkan Ajuan">
                                                <i class="fas fa-window-close"></i> DiKembalikan </div>') ?> -->
                                            </td>
                                        </tr>
                                    <?php } elseif ($pengajuan->status_ajuan == 0) { ?>
                                        <tr>
                                            <td><a href="<?= base_url('admin_kecamatan/pengajuan/lihat_surat/') ?>"><?= $pendaftaran->judul ?></a></td>
                                            <td><?= longdate_indo($pendaftaran->tgl_buat) ?></td>
                                            <td><?= longdate_indo($pendaftaran->tgl_selesai) ?></td>
                                            <td><?= $pengajuan->desa ?></td>
                                            <td><?= $pendaftaran->tahun ?></td>
                                            <td>
                                                belum mengajukan
                                            </td>
                                            <td>
                                                <?= anchor('admin_kecamatan/pengajuan/ajukan/' . $pengajuan->no_hasilajuan . '/' . $pengajuan->tahun, '<div class="btn btn-primary btn-btn-sm"  data-toggle="tooltip" data-placement="top" title="Ajukan">
                                                <i class="fas fa-check" ></i> Ajukan </div>') ?>
                                                <?= anchor('admin_kecamatan/pengajuan/editdesa/' . $pengajuan->no_hasilajuan, '<div class="btn btn-success btn-btn-sm"  data-toggle="tooltip" data-placement="top" title="Edit Desa">
                                                <i class="fa fa-edit" ></i>Edit </div>') ?>
                                                <?= anchor('admin_kecamatan/pengajuan/hapus/' . $pengajuan->no_hasilajuan, '<div class="btn btn-danger btn-btn-sm"  data-toggle="tooltip" data-placement="top" title="Hapus Desa">
                                                <i class="fa fa-trash" ></i> Hapus </div>') ?>
                                            </td>
                                        </tr>
                                <?php }
                                }
                                ?>


                            <?php } elseif ($tgl_sls < $tgl_now) { ?>

                                <?php if ($pengajuannum < 1) { ?>
                                    <tr>
                                        <td>
                                            <?= $pendaftaran->judul ?></td>
                                        <td><?= longdate_indo($pendaftaran->tgl_buat) ?></td>
                                        <td><?= longdate_indo($pendaftaran->tgl_selesai) ?></td>
                                        <td>-</td>
                                        <td><?= $pendaftaran->tahun ?></td>
                                        <td>
                                            Tidak mengajukan Desa
                                        </td>
                                        <td>
                                            <div class="btn btn-secondary btn-btn-sm">
                                                <i class="fas fa-eye"></i> Lihat
                                            </div>
                                        </td>

                                    </tr>

                                    <?php } elseif ($pengajuannum > 0) {
                                    if ($pengajuan->status_ajuan == 3) { ?>
                                        <tr>
                                            <td><a href="<?= base_url('admin_kecamatan/pengajuan/lihat_surat/') ?>"></a><?= $pendaftaran->judul ?></td>
                                            <td><?= longdate_indo($pendaftaran->tgl_buat) ?></td>
                                            <td><?= longdate_indo($pendaftaran->tgl_selesai) ?></td>
                                            <td><?= $pengajuan->desa ?></td>
                                            <td><?= $pendaftaran->tahun ?></td>
                                            <td>Diterima</td>
                                            <td>
                                                <a href="<?= base_url('admin_kecamatan/pengajuan/lihat_pengajuan/') . $pengajuan->no_hasilajuan ?>">
                                                    <div class="btn btn-secondary btn-btn-sm">
                                                        <i class="fas fa-eye"></i> Lihat
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } elseif ($pengajuan->status_ajuan == 2) { ?>
                                        <tr>
                                            <td><a href="<?= base_url('admin_kecamatan/pengajuan/lihat_surat') ?>"></a><?= $pendaftaran->judul ?></td>
                                            <td><?= longdate_indo($pendaftaran->tgl_buat) ?></td>
                                            <td><?= longdate_indo($pendaftaran->tgl_selesai) ?></td>
                                            <td><?= $pengajuan->desa ?></td>
                                            <td><?= $pendaftaran->tahun ?></td>
                                            <td>Mengajukan</td>
                                            <td>
                                                <a href="<?= base_url('admin_kecamatan/pengajuan/lihat_pengajuan/') . $pengajuan->no_hasilajuan ?>">
                                                    <div class="btn btn-secondary btn-btn-sm">
                                                        <i class="fas fa-eye"></i> Lihat
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } elseif ($pengajuan->status_ajuan == 1) { ?>
                                        <tr>
                                            <td><a href="<?= base_url('admin_kecamatan/pengajuan/lihat_surat') ?>"></a><?= $pendaftaran->judul ?></td>
                                            <td><?= longdate_indo($pendaftaran->tgl_buat) ?></td>
                                            <td><?= longdate_indo($pendaftaran->tgl_selesai) ?></td>
                                            <td><?= $pengajuan->desa ?></td>
                                            <td><?= $pendaftaran->tahun ?></td>
                                            <td>
                                                Dikembalkan
                                            </td>
                                            <td>
                                                <a href="<?= base_url('admin_kecamatan/pengajuan/lihat_pengajuan/') . $pengajuan->no_hasilajuan ?>">
                                                    <div class="btn btn-secondary btn-btn-sm">
                                                        <i class="fas fa-eye"></i> Lihat
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } elseif ($pengajuan->status_ajuan == 0) { ?>
                                        <tr>
                                            <td><a href="<?= base_url('admin_kecamatan/pengajuan/lihat_surat') ?>"></a><?= $pendaftaran->judul ?></td>
                                            <td><?= longdate_indo($pendaftaran->tgl_buat) ?></td>
                                            <td><?= longdate_indo($pendaftaran->tgl_selesai) ?></td>
                                            <td><?= $pengajuan->desa ?></td>
                                            <td><?= $pendaftaran->tahun ?></td>
                                            <td>
                                                belum mengajukan
                                            </td>
                                            <td>
                                                <a href="<?= base_url('admin_kecamatan/pengajuan/lihat_pengajuan/') . $pengajuan->no_hasilajuan ?>"></a>
                                                <div class="btn btn-secondary btn-btn-sm">
                                                    <i class="fas fa-eye"></i> Lihat
                                                </div>

                                            </td>
                                        </tr>
                                    <?php } ?>



                                <?php } ?>

                        <?php    }
                        } elseif ($pendaftarannum < 1) {
                            echo '<tr>
                                    <td colspan="5" class="text-center"> Maaf Pengajuan pendaftaran lomba desa belum tersedia</td>
                                </tr>';
                        }
                        ?>
                    </table>
                </div>


                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Surat Sosisialisasi perlombaan desa tahun <?= $pendaftaran->tahun ?></h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <iframe src="<?= base_url('uploads/files/') . $pendaftaran->surat_sosialisasi ?>" width="100%" height="700"></iframe>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
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