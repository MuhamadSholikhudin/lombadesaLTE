<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">JADWAL LOMBA DESA</h1>
                    <?= $this->session->flashdata('message'); ?>

                </div><!-- /.col -->
                <div class="col-sm-6">


                </div><!-- /.col -->
                <div class="col-sm-6">
                    <br>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Jadwal</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?= base_url('stafpmd/penjadwalan/edit_aksi'); ?>" method="post">
                            <?php foreach ($jadwal as $jadw) : ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="1Judul">Desa</label>
                                        <input type="hidden" class="form-control" name="no_jadwal" value="<?= $jadw->no_jadwal; ?>">
                                        <input type="hidden" class="form-control" name="tahun" value="<?= $jadw->tahun; ?>">
                                        <input type="text" class="form-control" id="1Judul" value="<?= $jadw->desa; ?>" readonly disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="Selesai">Tanggal Lomba</label>
                                        <input type="date" class="form-control" id="Selesai" name="tgl_jadwal" value="<?= $jadw->tgl_jadwal; ?>">
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