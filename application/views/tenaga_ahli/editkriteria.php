<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">EDIT DATA KRITERIA PENILAIAN</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <br>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Edit Kriteria Penilaian</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?= base_url('tenaga_ahli/kriteria_penilaian/edit_aksi'); ?>" method="post">
                            <?php foreach ($kriteria as $kriteria) : ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="hidden" class="form-control" name="id_kriteria" value="<?= $kriteria->id_kriteria; ?>">
                                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $kriteria->judul; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Selesai">Skor</label>
                                        <input type="number" class="form-control" id="Selesai" name="skor" value="<?= $kriteria->skor; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun">Tahun</label>
                                        <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $kriteria->tahun; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori">Kategori<?= $kriteria->kategori; ?></label>
                                        <select type="number" class="form-control" id="kategori" name="kategori" required>
                                            <option value="<?= $kriteria->kategori; ?>">

                                                <?php $kategori = $kriteria->kategori; ?>
                                                <?php
                                                if ($kategori == 'P1') {
                                                    echo "DINAS Kesehatan";
                                                } elseif ($kategori == 'P2') {
                                                    echo "DINAS Pendidikan Pemuda dan Olahraga";
                                                } elseif ($kategori == 'P3') {
                                                    echo "DINAS Kominfo";
                                                } elseif ($kategori == 'P4') {
                                                    echo "DINAS Perdagangan";
                                                } elseif ($kategori == 'P5') {
                                                    echo "DINAS Kebudayaan dan Pariwisata";
                                                } elseif ($kategori == 'P6') {
                                                    echo "DINAS Pertanian dan Pangan";
                                                } elseif ($kriteria == 'P7') {
                                                    echo "DINAS Tenaga Kerja";
                                                } elseif ($kategori == 'P8') {
                                                    echo "DINAS Sosial P3AP2KB";
                                                } elseif ($kategori == 'P9') {
                                                    echo "DINAS Pekerjaan Umum dan Penataan Ruang";
                                                } elseif ($kategori == 'P10') {
                                                    echo "BNPB";
                                                }
                                                ?>
                                            </option>
                                            <option value='P1'>DINAS Kesehatan</option>
                                            <option value='P2'>DINAS Pendidikan Pemuda dan Olahraga</option>
                                            <option value='P3'>DINAS Kominfo</option>
                                            <option value='P4'>DINAS Perdagangan</option>
                                            <option value='P5'>DINAS Kebudayaan dan Pariwisata</option>
                                            <option value='P6'>DINAS Pertanian dan Pangan</option>
                                            <option value='P7'>DINAS Tenaga Kerja</option>
                                            <option value='P8'>DINAS Sosial P3AP2KB</option>
                                            <option value='P9'>DINAS Pekerjaan Umum dan Penataan Ruang</option>
                                            <option value='P10'>BNPB</option>
                                        </select> </div>

                                </div>
                                <!-- /.card-body -->

                                <div class=" card-footer">
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