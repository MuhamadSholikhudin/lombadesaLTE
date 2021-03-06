<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">EDIT DATA PENDAFTARAN</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <br>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Edit Pendaftaran</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?= base_url('tenaga_ahli/pendaftaran/edit_aksi'); ?>" method="post">
                            <?php foreach ($daftar as $daftar) : ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="1Judul">Judul</label>
                                        <input type="hidden" class="form-control" name="no_daftar" value="<?= $daftar->no_daftar; ?>">
                                        <input type="text" class="form-control" id="1Judul" name="judul" value="<?= $daftar->judul; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Selesai">Tanggal Selesai Pendafataran</label>
                                        <input type="date" class="form-control" id="Selesai" name="tgl_selesai" value="<?= $daftar->tgl_selesai ?>">
                                    </div>


                                    <div class="form-group">
                                        <label for="gambar">Upload file baru</label>
                                        <input type="file" class="form-control" id="gambar" name="file_name" accept="application/pdf, application/vnd.ms-excel">

                                    </div>
                                </div>


                                <!-- /.card-body -->


                            <?php endforeach; ?>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" confirm("Press a button!\nEither OK or Cancel.");>Simpan</button>
                            </div>
                        </form>

                    </div>

                </div>

                <div class="col-sm-6">
                    <!-- <object id="gambar1" type="application/pdf" data="<?= base_url('uploads/files/CAMSC.pdf') ?>" width="100%" height="700px"> -->
                    <iframe src="<?= base_url('uploads/files/') ?><?= $daftar->surat_sosialisasi ?>" width="100%" height="600"></iframe>

                </div>
                <!-- /.col -->
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