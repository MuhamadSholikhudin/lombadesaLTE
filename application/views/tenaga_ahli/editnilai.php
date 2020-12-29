<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">EDIT DATA NILAI</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">


                </div><!-- /.col -->
                <div class="col-sm-12">
                    <br>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Edit Nilai</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?= base_url('tenaga_ahli/nilai/edit_aksi'); ?>" method="post" enctype="multipart/form-data">
                            <?php foreach ($nilai as $nilai) : ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama">Judul</label>
                                        <input type="hidden" class="form-control" name="id_nilai" value="<?= $nilai->id_nilai; ?>">
                                        <textarea class="form-control" disabled><?= $nilai->judul; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="desa">Desa</label>
                                        <div class="form-control" disabled><?= $nilai->desa; ?></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="skor">Nilai maks</label>
                                        <div class="form-control" disabled><?= $nilai->nilai_maks ?></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nilai">Th <?= date('Y') - 2; ?></label>
                                        <input type="number" class="form-control" id="nilai1" name="nilai1" min="0" max="<?= $nilai->nilai_maks ?>" value="<?= $nilai->nilai1; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nilai">Th <?= date('Y') - 1; ?></label>
                                        <input type="number" class="form-control" id="nilai2" name="nilai2" min="0" max="<?= $nilai->nilai_maks ?>" value="<?= $nilai->nilai2; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nilai">Dadu <?= date('Y') - 2; ?></label>
                                        <input type="number" class="form-control" id="nilai1" name="dadu1" min="0" max="5" value="<?= $nilai->dadu1 ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nilai">Dadu <?= date('Y') - 1; ?></label>
                                        <input type="number" class="form-control" id="nilai1" name="dadu2" min="0" max="5" value="<?= $nilai->dadu2 ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Penilai</label>
                                        <div class="form-control" required><?= $nilai->nama ?>
                                        </div>
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