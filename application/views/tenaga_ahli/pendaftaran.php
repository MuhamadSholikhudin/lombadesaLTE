<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center">DATA PENDAFTARAN</h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <?= $this->session->flashdata('message'); ?>

                </div>
                <div class="col-sm-12">
                    <br>
                    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_pendaftaran">
                        + Tambah Pendaftaran
                    </button>
                    <br>
                    <table id="daftar" class="table table-bordered display">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Judul</th>
                                <th>Tanggal Buat</th>
                                <th>Tanggal selesai daftar</th>
                                <th>Jumlah Desa</th>
                                <th>Tahun</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($pendaftaran as $pendf) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $pendf->judul ?></td>
                                    <td><?= $pendf->tgl_buat ?></td>
                                    <td><?= $pendf->tgl_selesai ?></td>
                                    <td><?= 'Jumlah Desa' ?></td>
                                    <td><?= $pendf->tahun ?></td>
                                    <td>
                                        <?= anchor('tenaga_ahli/pendaftaran/edit/' . $pendf->no_daftar, '<div class="btn btn-success btn-btn-sm">
                        <i class="fa fa-edit"></i> </div>') ?>
                                    </td>
                                    <td><?= anchor('tenaga_ahli/pendaftaran/hapus/' . $pendf->no_daftar, '<div class="btn btn-success btn-btn-sm">
                        <i class="fa fa-trash"></i> </div>') ?>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
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
                                <form action="<?= base_url('tenaga_ahli/pendaftaran/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="judul" class="col-sm-2 col-form-label">Juduk</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="judul" name="judul" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keterangan" class="col-sm-2 col-form-label">Tanggal Berakhir</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="keterangan" name="tgl_selesai" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kategori" class="col-sm-2 col-form-label">Tahun</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="kategori" name="tahun" value="<?= date('Y'); ?>" readonly required>
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