<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">EDIT DATA BERITA</h1>
                </div><!-- /.col -->

                <div class="col-sm-12">
                    <br>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Edit Berita</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?= base_url('stafpmd/berita/edit_aksi'); ?>" method="post" enctype="multipart/form-data">
                            <?php foreach ($berita as $berita) : ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="1Judul">Judul</label>
                                        <input type="hidden" class="form-control" name="id_berita" value="<?= $berita->id_berita; ?>">
                                        <input type="text" class="form-control" id="1Judul" name="judul" value="<?= $berita->judul; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Selesai">Paragraf 1</label>
                                        <textarea type="date" class="form-control" id="Selesai" name="paragraf1"> <?= $berita->paragraf1; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="Selesai2">Paragraf 2</label>
                                        <textarea type="date" class="form-control" id="Selesai2" name="paragraf2"><?= $berita->paragraf2; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar">Gambar lama</label>
                                        <div class="text-center">
                                            <img id="gambar" src="<?= base_url('uploads/') . $berita->gambar; ?>" class="rounded" alt="...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gambar" class="col-sm-2 col-form-label">Upload Gambar baru</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="gambar" name="gambar">
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