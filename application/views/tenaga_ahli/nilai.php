<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center">DATA NILAI</h1>
                </div><!-- /.col -->

                <div class="col-sm-12">
                    <br>

                    <table id="nilai" class="table table-bordered display">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Kecamatan</th>
                                <th>DESA</th>
                                <th>Th <?= date('Y') - 2; ?></th>
                                <th>Th <?= date('Y') - 1; ?></th>
                                <th>Dadu <?= date('Y') - 2; ?></th>
                                <th>Dadu <?= date('Y') - 1; ?></th>
                                <th>TAHUN</th>
                                <th>PENILAI</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($nilai as $peng) : ?>
                                <tr>

                                    <td><?= $no++ ?></td>
                                    <td><?= $peng->judul ?></td>
                                    <td><?= $peng->desa ?></td>
                                    <td><?= $peng->nilai1 ?></td>
                                    <td><?= $peng->nilai2 ?></td>
                                    <td><?= $peng->dadu1 ?></td>
                                    <td><?= $peng->dadu2 ?></td>
                                    <td><?= $peng->tahun ?></td>
                                    <td><?= $peng->nama ?></td>
                                    <td>
                                        <?= anchor('tenaga_ahli/nilai/edit/' . $peng->id_nilai, '<div class="btn btn-success btn-btn-sm">
                        <i class="fa fa-edit"></i> </div>') ?>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>




                <!-- Modal -->
                <div class="modal fade" id="tambah_pengguna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Buat Pengguna</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('tenaga_ahli/pengguna/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-2 col-form-label">nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="judul" name="nama" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="keterangan" name="username" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-2 col-form-label">Password</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="password" name="password" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hakakses" class="col-sm-2 col-form-label">Hak akses</label>
                                        <div class="col-sm-10">
                                            <select type="text" class="form-control" id="hakakses" name="hakakses" required>
                                                <option value="1"> Tenaga Ahli </option>
                                                <option value="2"> Staf PMD </option>
                                                <option value="3"> Admin Kecamatan </option>
                                                <option value="4"> Admin Sekda </option>
                                                <option value="5"> Tim Penilai </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="penempatan" class="col-sm-2 col-form-label">Penempatan</label>
                                        <div class="col-sm-10">
                                            <select type="text" class="form-control" id="penempatan" name="penempatan" required>
                                                <option value="1"> Tenaga Ahli </option>
                                                <option value="2"> Staf PMD </option>
                                                <option value="3"> Admin Kecamatan </option>
                                                <option value="4"> Admin Sekda </option>
                                                <option value="5"> Tim Penilai </option>
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