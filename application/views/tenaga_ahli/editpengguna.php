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
                                                            echo 'TENAGA AHLI';
                                                        } elseif ($kla == 2) {
                                                            echo 'STAFF';
                                                        } elseif ($kla == 3) {
                                                            echo 'ADMIN KECAMATAN';
                                                        } elseif ($kla == 4) {
                                                            echo 'ADMIN SEKDA';
                                                        } elseif ($kla == 5) {
                                                            echo 'TIM PENILAI';
                                                        } ?>
                                                    </option>
                                                <?php else : ?>
                                                    <option value="<?= $kla; ?>">
                                                        <?php if ($kla == 1) {
                                                            echo 'TENAGA AHLI';
                                                        } elseif ($kla == 2) {
                                                            echo 'STAFF';
                                                        } elseif ($kla == 3) {
                                                            echo 'ADMIN KECAMATAN';
                                                        } elseif ($kla == 4) {
                                                            echo 'ADMIN SEKDA';
                                                        } elseif ($kla == 5) {
                                                            echo 'TIM PENILAI';
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
                                                            <?php if ($pengguna->penempatan == 'P1') {
                                                                echo 'Badan Perencanaan Pembangunan Daerah';
                                                            } elseif ($kla == 'P2') {
                                                                echo 'Badan Penanggulangan Bencana Daerah';
                                                            } elseif ($kla == 'P3') {
                                                                echo 'Satuan Pamong Praja';
                                                            } elseif ($kla == 'P4') {
                                                                echo 'Pemerintahan Desa';
                                                            } elseif ($kla == 'P5') {
                                                                echo 'Pemerintahan Masyarakat';
                                                            } elseif ($kla == 'P6') {
                                                                echo 'DINAS Kominfo';
                                                            } elseif ($kla == 'P7') {
                                                                echo 'DINAS Kebudayaan dan Pariwisata';
                                                            } elseif ($kla == 'P8') {
                                                                echo 'DINAS Tenaga Kerja';
                                                            } elseif ($kla == 'P9') {
                                                                echo 'DINAS Pendidikan Pemuda dan Olahraga';
                                                            } elseif ($kla == 'P10') {
                                                                echo 'DINAS Kesehatan';
                                                            } elseif ($kla == 'P11') {
                                                                echo 'DINAS Sosial P3AP2KB';
                                                            }
                                                            ?>
                                                        </option>
                                                    <?php else : ?>
                                                        <option value="<?= $kla; ?>">
                                                            <?php if ($kla == 'P1') {
                                                                echo 'Badan Perencanaan Pembangunan Daerah';
                                                            } elseif ($kla == 'P2') {
                                                                echo 'BPBD';
                                                            } elseif ($kla == 'P3') {
                                                                echo 'Satuan Pamong Praja';
                                                            } elseif ($kla == 'P4') {
                                                                echo 'Pemerintahan Desa';
                                                            } elseif ($kla == 'P5') {
                                                                echo 'Pemerintahan Masyarakat';
                                                            } elseif ($kla == 'P6') {
                                                                echo 'DINAS Kominfo';
                                                            } elseif ($kla == 'P7') {
                                                                echo 'DINAS Kebudayaan dan Pariwisata';
                                                            } elseif ($kla == 'P8') {
                                                                echo 'DINAS Tenaga Kerja';
                                                            } elseif ($kla == 'P9') {
                                                                echo 'DINAS Pendidikan Pemuda dan Olahraga';
                                                            } elseif ($kla == 'P10') {
                                                                echo 'DINAS Kesehatan';
                                                            } elseif ($kla == 'P11') {
                                                                echo 'DINAS Sosial P3AP2KB';
                                                            }
                                                            ?>
                                                        </option>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            <?php

                                            } elseif ($pengguna->hakakses == 3) {
                                                // echo $pengguna->penempatan;
                                            ?>
                                                <?php foreach ($klasikeca as $kla) : ?>                             
                                                    <?php if ($kla->kec == $pengguna->penempatan) : ?>
                                                        <option value="<?= $kla->kec; ?>" selected><?= $kla->kec; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $kla->kec; ?>"><?= $kla->kec; ?></option>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            <?php
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