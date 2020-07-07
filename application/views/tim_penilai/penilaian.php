<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">PENILAIAN</h1>
                </div><!-- /.col -->
                <div class="col-sm-12">

                    <br>
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Form Penilaian Desa</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body p-0">
                            <form action="<?= base_url('tim_penilai/penilaian/edit_aksi/') ?>" enctype="multipart/form-data" method="POST">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">NO</th>
                                            <th>Judul</th>
                                            <th>Skor</th>
                                            <th>Nilai</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($njadwal as $njd) : ?>

                                            <input class="form-control" type="hidden" name="no_jadwal" value="<?= $njd->no_jadwal; ?>">
                                        <?php endforeach; ?>

                                        <?php $no = 1; ?>
                                        <?php foreach ($nilai as $nil) : ?>
                                            <tr>
                                                <th style="width: 10px"><?= $no; ?></th>
                                                <th><?= $nil->judul; ?></th>
                                                <th><?= $nil->skor; ?></th>

                                                <th style="width: 100px">
                                                    <input class="form-control" type="hidden" name="id_nilai[]" value="<?= $nil->id_nilai; ?>">
                                                    <input class="form-control" type="hidden" name="skor[]" value="<?= $nil->skor; ?>">
                                                    <input class="form-control" type="number" name="nilai[]" min="1" max="<?= $nil->skor; ?>" value="<?= $nil->nilai; ?>">
                                                </th>

                                                <th><?= $nil->jumlah; ?></th>
                                            </tr>
                                            <?php $no++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                                </div>
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
</div>