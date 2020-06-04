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
                <div class="col-sm-6">
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
                                        <input type="text" class="form-control" value="<?= $nilai->judul; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="desa">Desa</label>
                                        <input type="text" class="form-control" id="desa" value="<?= $nilai->desa; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="skor">Skor</label>

                                        <input type="text" class="form-control" id="skor" name="skor" value="<?= $nilai->skor; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nilai">Nilai</label>

                                        <input type="text" class="form-control" id="nilai" name="nilai" value="<?= $nilai->nilai; ?>" required>
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