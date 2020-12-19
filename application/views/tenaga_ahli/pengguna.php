<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center">DATA PENGGUNA</h1>
                    <?= $this->session->flashdata('message'); ?>

                </div><!-- /.col -->
                <div class="col-sm-12">
                    <br>
                    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_pengguna">
                        + Tambah Pengguna
                    </button>

                    <br>
                    <table id="pengguna" class="table table-bordered display">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Hak Akses</th>
                                <th>Penempatan</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($pengguna as $peng) : ?>
                                <tr>

                                    <td><?= $no++ ?></td>
                                    <td><?= $peng->nama ?></td>
                                    <td><?= $peng->username ?></td>
                                    <td><?= $peng->password ?></td>

                                    <td>


                                        <?php if ($peng->hakakses == 1) {
                                            echo 'Tenaga Ahli PMD';
                                        } elseif ($peng->hakakses == 2) {
                                            echo 'STAF PMD';
                                        } elseif ($peng->hakakses == 3) {
                                            echo 'Admin Kecamatan';
                                        } elseif ($peng->hakakses == 4) {
                                            echo 'Admin Sekda';
                                        } elseif ($peng->hakakses == 5) {
                                            echo 'Penilai';
                                        }
                                        ?>
                                    </td>

                                    <td>
                                        <?php if ($peng->penempatan == "P1") {
                                            echo 'Badan Perencanaan Pembangunan Daerah';
                                        } elseif ($peng->penempatan === 'P2') {
                                            echo 'Badan Penanggulangan Bencana Daerah';
                                        } elseif ($peng->penempatan == 'P3') {
                                            echo 'Satuan Pamong Praja';
                                        } elseif ($peng->penempatan == 'P4') {
                                            echo 'Pemerintahan Desa';
                                        } elseif ($peng->penempatan == 'P5') {
                                            echo 'Pemerintahan Masyarakat';
                                        } elseif ($peng->penempatan == 'P6') {
                                            echo 'DINAS Komunikasi dan Informasi';
                                        } elseif ($peng->penempatan == 'P7') {
                                            echo 'DINAS Kebudayaan dan Pariwisata<';
                                        } elseif ($peng->penempatan == 'P8') {
                                            echo 'DINAS Tenaga Kerja';
                                        } elseif ($peng->penempatan == 'P9') {
                                            echo 'DINAS Pendidikan Pemuda dan Olahraga';
                                        } elseif ($peng->penempatan == 'P10') {
                                            echo 'DINAS Kesehatan';
                                        } elseif ($peng->penempatan == 'P11') {
                                            echo 'DINAS Sosial P3AP2KB';
                                        } else {
                                            echo $peng->penempatan;
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?= anchor('tenaga_ahli/pengguna/edit/' . $peng->id_pengguna, '<div class="btn btn-success btn-btn-sm">
                        <i class="fa fa-edit"></i> Edit </div>') ?>
                                    </td>
                                    <td><?= anchor('tenaga_ahli/pengguna/hapus/' . $peng->id_pengguna, '<div class="btn btn-danger btn-btn-sm">
                        <i class="fa fa-trash"></i> Hapus </div>') ?>
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
                                                <option value="" selected> Pilih </option>
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

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <select type="text" class="form-control" id="status" name="status" required>
                                                <option value="Aktif" selected> Aktif </option>
                                                <option value="Tidak-Aktif"> Tidak-Aktif </option>

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