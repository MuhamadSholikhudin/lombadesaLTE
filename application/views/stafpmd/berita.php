<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">DATA BERITA</h1>
                </div><!-- /.col -->

                <div class="col-sm-12">
                    <br>
                    <a href="<?= base_url('tenaga_ahli/berita/tambah'); ?>">
                        <button class="btn btn-sm btn-primary mb-3" data-toggle="modal">
                            + Tambah Berita
                        </button>
                    </a>
                    <br>
                    <table id="daftar" class="table table-bordered display">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Tanggal Buat</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($beritaan as $wil) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $wil->judul ?></td>
                                    <td>
                                        <img src="<?= base_url('uploads/') . $wil->gambar ?>" alt="Gambar tidak ditemukan" class="img-thumbnail"></td>
                                    <td><?= $wil->tgl_buat ?></td>
                                    <td>
                                        <?= anchor('stafpmd/berita/edit/' . $wil->id_berita, '<div class="btn btn-success btn-btn-sm">
                        <i class="fa fa-edit"></i> </div>') ?>
                                    </td>
                                    <td><?= anchor('stafpmd/berita/hapus/' . $wil->id_berita, '<div class="btn btn-danger btn-btn-sm">
                        <i class="fa fa-trash"></i> </div>') ?>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>




                <!-- Modal -->
                <div class="modal fade" id="tambah_berita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Wilayah</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('stafpmd/berita/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="judul" name="judul" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Paragraf1" class="col-sm-2 col-form-label">Paragraf 1</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="Paragraf" name="paragraf1" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="paragraf2" class="col-sm-2 col-form-label">Paragraf 2</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="paragraf2" name="paragraf2" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="gambar" name="gambar">
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