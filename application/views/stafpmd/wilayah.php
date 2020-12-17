<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center">DATA WILAYAH</h1>
                    <?= $this->session->flashdata('message'); ?>

                </div><!-- /.col -->

                <div class="col-sm-12">
                    <br>
                    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_wilayah">
                        + Tambah Wilayah
                    </button>
                    <br>
                    <table id="daftar" class="table table-bordered display">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>KODE_WILAYAH</th>
                                <th>Kecamatan</th>
                                <th>Desa</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($wilayahan as $wil) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $wil->kode_wilayah ?></td>
                                    <td><?= $wil->kecamatan ?></td>
                                    <td><?= $wil->desa ?></td>
                                    <td>
                                        <?= anchor('stafpmd/wilayah/edit/' . $wil->kode_wilayah, '<div class="btn btn-success btn-btn-sm">
                        <i class="fa fa-edit"></i>Edit </div>') ?>
                                    </td>
                                    <td><?= anchor('stafpmd/wilayah/hapus/' . $wil->kode_wilayah, '<div class="btn btn-danger btn-btn-sm">
                        <i class="fa fa-trash"></i>Hapus </div>') ?>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>




                <!-- Modal -->
                <div class="modal fade" id="tambah_wilayah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Wilayah</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('stafpmd/wilayah/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="judul" class="col-sm-2 col-form-label">Kecamatan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keterangan" class="col-sm-2 col-form-label">Desa</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="desa" name="desa" required>
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