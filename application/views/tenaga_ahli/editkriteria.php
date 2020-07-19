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
                                        <label for="Selesai">Nilai Maksimal</label>
                                        <input type="number" class="form-control" id="Selesai" name="nilai_maks" value="<?= $kriteria->nilai_maks; ?>">
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
                                                    echo "Badan Perencanaan Pembangunan Daerah";
                                                } elseif ($kategori == 'P2') {
                                                    echo "BPBD";
                                                } elseif ($kategori == 'P3') {
                                                    echo "Satuan Pamong Praja";
                                                } elseif ($kategori == 'P4') {
                                                    echo "Pemerintahan Desa";
                                                } elseif ($kategori == 'P5') {
                                                    echo "Pemerintahan Masyarakat";
                                                } elseif ($kategori == 'P6') {
                                                    echo "DINAS Kominfo";
                                                } elseif ($kriteria == 'P7') {
                                                    echo "DINAS Kebudayaan dan Pariwisata";
                                                } elseif ($kategori == 'P8') {
                                                    echo "DINAS Tenaga Kerja";
                                                } elseif ($kategori == 'P9') {
                                                    echo "DINAS Pendidikan Pemuda dan Olahraga";
                                                } elseif ($kategori == 'P10') {
                                                    echo "DINAS Kesehatan";
                                                } elseif ($kategori == 'P11') {
                                                    echo "DINAS Sosial P3AP2KB";
                                                }
                                                ?>
                                            <option value='P1'>Badan Perencanaan Pembangunan Daerah</option>
                                            <option value='P2'>BPBD</option>
                                            <option value='P3'>Satuan Pamong Praja</option>
                                            <option value='P4'>Pemerintahan Desa</option>
                                            <option value='P5'>Pemerintahan Masyarakat</option>
                                            <option value='P6'>DINAS Kominfo</option>
                                            <option value='P7'>DINAS Kebudayaan dan Pariwisata</option>a
                                            <option value='P8'>DINAS Tenaga Kerja</option>
                                            <option value='P9'>DINAS Pendidikan Pemuda dan Olahraga</option>
                                            <option value='P10'>DINAS Kesehatan</option>
                                            <option value='P11'>DINAS Sosial P3AP2KB</option>
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