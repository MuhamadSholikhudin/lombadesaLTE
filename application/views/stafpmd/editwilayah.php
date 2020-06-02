<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">EDIT DATA WILAYAH</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">


                </div><!-- /.col -->
                <div class="col-sm-6">
                    <br>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Edit</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?= base_url('stafpmd/wilayah/edit_aksi'); ?>" method="post">
                            <?php foreach ($wilayah as $wil) : ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="1Judul">kecamatan</label>
                                        <input type="hidden" class="form-control" name="kode_wilayah" value="<?= $wil->kode_wilayah; ?>">
                                        <input type="text" class="form-control" id="1Judul" name="kecamatan" value="<?= $wil->kecamatan; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Selesai">Tanggal Selesai Pendafataran</label>
                                        <input type="text" class="form-control" id="Selesai" name="desa" value="<?= $wil->desa; ?>">
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