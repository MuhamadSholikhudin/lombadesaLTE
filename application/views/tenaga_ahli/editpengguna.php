<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">EDIT DATA PENGGUNA</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">


                </div><!-- /.col -->
                <div class="col-sm-6">
                    <br>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Edit Pengguna</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?= base_url('tenaga_ahli/pengguna/edit_aksi'); ?>" method="post" enctype="multipart/form-data">
                            <?php foreach ($pengguna as $pengguna) : ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="hidden" class="form-control" name="id_pengguna" value="<?= $pengguna->id_pengguna; ?>">
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $pengguna->nama; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Selesai">Username</label>
                                        <input type="text" class="form-control" id="Selesai" name="username" value="<?= $pengguna->username; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">password</label>

                                        <input type="password" class="form-control" id="password" name="password" value="<?= $pengguna->password; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="hakakses">Hak akses</label>

                                        <select type="text" class="form-control" id="hakakses" name="hakakses">
                                            <option value="<?= $pengguna->hakakses; ?>">Hak akses </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="penempatan">Penempatan</label>

                                        <select type="text" class="form-control" id="penempatan" name="penempatan">
                                            <option value="<?= $pengguna->penempatan; ?>">penempatan </option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" confirm("Press a button!\nEither OK or Cancel.");>Simpan</button>
                                </div>
                            <?php endforeach; ?>
                        </form>
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