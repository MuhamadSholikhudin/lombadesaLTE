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
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $pengguna->nama; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Selesai">Username</label>
                                        <input type="text" class="form-control" id="Selesai" name="username" value="<?= $pengguna->username; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">password</label>

                                        <input type="password" class="form-control" id="password" name="password" value="<?= $pengguna->password; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="hakakses">Hak akses</label>

                                        <select class="form-control" id="hakakses" name="hakakses" required>
                                            <?php foreach ($klasi as $kla) : ?>
                                                <?php if ($kla == $pengguna->hakakses) : ?>
                                                    <option value="<?= $kla; ?>" selected>
                                                        <?php if ($kla == 1) {
                                                            echo 'Tenaga Ahli';
                                                        } elseif ($kla == 2) {
                                                            echo 'Staf PMD';
                                                        } elseif ($kla == 3) {
                                                            echo 'Admin Kecamatan';
                                                        } elseif ($kla == 4) {
                                                            echo 'Admin Sekda';
                                                        } elseif ($kla == 5) {
                                                            echo 'Tim Penilai';
                                                        } ?>
                                                    </option>
                                                <?php else : ?>
                                                    <option value="<?= $kla; ?>">
                                                        <?php if ($kla == 1) {
                                                            echo 'Tenaga Ahli';
                                                        } elseif ($kla == 2) {
                                                            echo 'Staf PMD';
                                                        } elseif ($kla == 3) {
                                                            echo 'Admin Kecamatan';
                                                        } elseif ($kla == 4) {
                                                            echo 'Admin Sekda';
                                                        } elseif ($kla == 5) {
                                                            echo 'Tim Penilai';
                                                        } ?>
                                                    </option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="penempatan">Penempatan</label>
                                        <select class="form-control" id="penempatan" name="penempatan" required>
                                            <?php if ($pengguna->hakakses == 1) {
                                            ?>
                                                <option value='<?= $pengguna->penempatan ?>'> <?= $pengguna->penempatan  ?></option>
                                            <?php } elseif ($pengguna->hakakses == 2) {
                                            ?><option value='<?= $pengguna->penempatan ?>'> <?= $pengguna->penempatan  ?></option>
                                            <?php
                                            } elseif ($pengguna->hakakses == 4) {
                                            ?><option value='<?= $pengguna->penempatan ?>'> <?= $pengguna->penempatan  ?></option>
                                            <?php
                                            } elseif ($pengguna->hakakses == 5) {
                                                // echo $pengguna->penempatan;
                                            ?>
                                                <?php foreach ($klasitim as $kla) : ?>
                                                    <?php if ($kla == $pengguna->penempatan) : ?>
                                                        <option value="<?= $kla ?>" selected>
                                                            <?php if ($kla == 'P1') {
                                                            
                                                                echo 'DINAS KESEHATAN';
                                                            
                                                            } elseif ($kla == 'P2') {
                                                                echo 'DINAS Pendidikan Pemuda dan Olahraga';
                                                            } elseif ($kla == 'P3') {
                                                                echo 'DINAS Kominfo';
                                                            } elseif ($kla == 'P4') {
                                                                echo 'DINAS Perdagangan';
                                                            } elseif ($kla == 'P5') {
                                                                echo 'Tim Penilai';
                                                            } elseif ($kla == 'P6') {
                                                                echo 'Tim Penilai';
                                                            } elseif ($kla == 'P7') {
                                                                echo 'Tim Penilai';
                                                            } elseif ($kla == 'P8') {
                                                                echo 'Tim Penilai';
                                                            } elseif ($kla == 'P9') {
                                                                echo 'Tim Penilai';
                                                            } elseif ($kla == 'P10') {
                                                                echo 'Tim Penilai';
                                                            }
                                                            ?>
                                                        </option>
                                                    <?php else : ?>
                                                        <option value="<?= $kla; ?>">
                                                            <?php if ($kla == 'P1') {
                                                                echo 'Tenaga Ahli';
                                                            } elseif ($kla == 'P2') {
                                                                echo 'Staf PMD';
                                                            } elseif ($kla == 'P3') {
                                                                echo 'Admin Kecamatan';
                                                            } elseif ($kla == 'P4') {
                                                                echo 'Admin Sekda';
                                                            } elseif ($kla == 'P5') {
                                                                echo 'Tim Penilai';
                                                            } elseif ($kla == 'P6') {
                                                                echo 'Tim Penilai';
                                                            } elseif ($kla == 'P7') {
                                                                echo 'Tim Penilai';
                                                            } elseif ($kla == 'P8') {
                                                                echo 'Tim Penilai';
                                                            } elseif ($kla == 'P9') {
                                                                echo 'Tim Penilai';
                                                            } elseif ($kla == 'P10') {
                                                                echo 'Tim Penilai';
                                                            }
                                                            ?>
                                                        </option>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            <?php

                                            } elseif ($pengguna->hakakses == 3) {
                                                echo $pengguna->penempatan;
                                            } ?>

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
