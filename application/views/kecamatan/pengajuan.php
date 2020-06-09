<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 ">
                    <h1 class="text-dark text-center">PENGAJUAN DESA KECAMATAN &nbsp; <?= $this->session->userdata('penempatan') ?></h1>
                </div><!-- /.col -->

                <div class="col-sm-12">
                    <br>
                    <table class="table table-border">
                        <tr>
                            <th>NO</th>
                            <th>Judul</th>
                            <th>Tanggal dibuat</th>
                            <th>Tanggal Selesai Pendaftaran</th>
                            <th>Nama desa</th>
                            <th>Tahun</th>
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

                                        <td><?= $pendaftaran->no_daftar ?></td>
                                        <td><a href="<?= base_url('admin_kecamatan/pengajuan/tambah') ?>"><?= $pendaftaran->judul ?></a></td>
                                        <td><?= $pendaftaran->status_daftar ?></td>
                                        <td><?= $pendaftaran->tgl_selesai ?></td>

                                        <td> - </td>
                                        <td><?= $pendaftaran->tahun ?></td>
                                        <td>
                                            <div class="btn btn-primary btn-btn-sm">
                                                Belum Memilih Desa</i>
                                            </div>

                                        </td>

                                    </tr>
                                    <?php } elseif ($pengajuannum > 0) {
                                    if ($pengajuan->status_ajuan == 2) { ?>
                                        <tr>
                                            <td><?= $pendaftaran->no_daftar ?></td>
                                            <td><?= $pendaftaran->judul ?></td>
                                            <td><?= $pengajuan->tgl_ajuan ?></td>
                                            <td><?= $pendaftaran->tgl_selesai ?></td>

                                            <td><?= $pengajuan->desa ?></td>
                                            <td><?= $pendaftaran->tahun ?></td>
                                            <td>
                                                <?= anchor('admin_kecamatan/pengajuan/lihat/' . $pengajuan->no_hasilajuan, '<div class="btn btn-primary btn-btn-sm" title="Pengajuan Di Terima">
                        <i class="fas fa-check-double"></i> </div>') ?>
                                            </td>


                                        </tr>
                                    <?php } elseif ($pengajuan->status_ajuan == 1) { ?>
                                        <tr>
                                            <td><?= $pendaftaran->no_daftar ?></td>
                                            <td><?= $pendaftaran->judul ?></td>
                                            <td><?= $pengajuan->tgl_ajuan ?></td>
                                            <td><?= $pendaftaran->tgl_selesai ?></td>

                                            <td><?= $pengajuan->desa ?></td>
                                            <td><?= $pendaftaran->tahun ?></td>
                                            <td><?= anchor('admin_kecamatan/pengajuan/batal/' . $pengajuan->no_hasilajuan, '<div class="btn btn-warning btn-btn-sm" title="Batalkan Ajuan">
                        <i class="fas fa-window-close"></i> </div>') ?>
                                            </td>

                                        </tr>
                                    <?php } elseif ($pengajuan->status_ajuan == 0) { ?>
                                        <tr>
                                            <td><?= $pendaftaran->no_daftar ?></td>
                                            <td><?= $pendaftaran->judul ?></td>
                                            <td><?= $pengajuan->tgl_ajuan ?></td>
                                            <td><?= $pendaftaran->tgl_selesai ?></td>

                                            <td><?= $pengajuan->desa ?></td>
                                            <td><?= $pendaftaran->tahun ?></td>
                                            <td>
                                                <?= anchor('admin_kecamatan/pengajuan/ajukan/' . $pengajuan->no_hasilajuan, '<div class="btn btn-primary btn-btn-sm"  data-toggle="tooltip" data-placement="top" title="Ajukan">
                        <i class="fas fa-check" ></i> </div>') ?>
                                            </td>
                                            <td>
                                                <?= anchor('admin_kecamatan/pengajuan/editdesa/' . $pengajuan->no_hasilajuan, '<div class="btn btn-success btn-btn-sm"  data-toggle="tooltip" data-placement="top" title="Edit Desa">
                        <i class="fa fa-edit" ></i> </div>') ?>
                                            </td>
                                            <td><?= anchor('admin_kecamatan/pengajuan/hapus/' . $pengajuan->no_hasilajuan, '<div class="btn btn-danger btn-btn-sm"  data-toggle="tooltip" data-placement="top" title="Hapus Desa">
                        <i class="fa fa-trash" ></i> </div>') ?>
                                            </td>

                                        </tr>
                                <?php }
                                }
                                ?>
                            <?php } elseif ($tgl_sls > $tgl_now) { ?>
                                <tr>
                                    <td><?= $pendaftaran->no_daftar ?></td>
                                    <td><?= $pendaftaran->judul ?></td>
                                    <td><?= $pendaftaran->status_daftar ?></td>
                                    <td><?= $pendaftaran->tgl_selesai ?></td>

                                    <td><?= 'Desa Kosong' ?></td>
                                    <td><?= $pendaftaran->tahun ?></td>
                                    <td>
                                        <div class="btn btn-primary btn-btn-sm">
                                            <i class="fas fa-check"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <?= anchor('admin/data_barang/edit/' . $pendaftaran->no_daftar, '<div class="btn btn-success btn-btn-sm">
                        <i class="fa fa-edit"></i> </div>') ?>
                                    </td>
                                    <td><?= anchor('admin/data_barang/hapus/' . $pendaftaran->no_daftar, '<div class="btn btn-success btn-btn-sm">
                        <i class="fa fa-trash"></i> </div>') ?>
                                    </td>

                                </tr>

                        <?php    }
                        } elseif ($pendaftarannum < 1) {
                            echo '<tr>
                <td colspan="5" class="text-center"> Maaf Pengajuan pendaftaran lomba desa belum tersedia</td>
            </tr>';
                        }
                        ?>
                    </table>
                </div>




                <!-- Modal -->
                <div class="modal fade" id="tambah_pendaftaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Buat Pendaftaran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admin/data_barang/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-2 col-form-label">Juduk</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nama" name="nama_brg">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keterangan" class="col-sm-2 col-form-label">Tanggal Berakhir</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="keterangan" name="keterangan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kategori" class="col-sm-2 col-form-label">Tahun</label>

                                        <div class="col-sm-10">
                                            <select class="form-control" name="kategori" id="kategori">
                                                <option value="Pakaian Pria">Pakaian Pria</option>
                                                <option value="Pakaian wanita">Pakaian Wanita</option>
                                                <option value="Pakaian Anak">Pakaian Anak</option>
                                                <option value="Peralatan Olahraga">Peralatan Olahraga</option>
                                            </select>

                                        </div>
                                    </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </form>
                        </div>
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