<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center">DATA KRITERIA PENILAIAN</h1>
                </div><!-- /.col -->

                <div class="col-sm-12">
                    <br>
                    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_kriteria">
                        + Tambah Kriteria penilaian
                    </button>
                    <br>
                    <table id="kriteria" class="table table-bordered display">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Judul</th>
                                <th>Skor</th>
                                <th>Tahun</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($kriteria as $kriteria) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><a href="<?= base_url('tenaga_ahli/kriteria_penilaian/edit/' . $kriteria->id_kriteria) ?>"><?= $kriteria->judul ?></a></td>
                                    <td><?= $kriteria->skor ?></td>
                                    <td><?= $kriteria->tahun ?></td>
                                    <td>
                                        <?= anchor('tenaga_ahli/kriteria_penilaian/edit/' . $kriteria->id_kriteria, '<div class="btn btn-success btn-btn-sm">
                        <i class="fa fa-edit"></i> </div>') ?>
                                    </td>
                                    <td><?= anchor('tenaga_ahli/kriteria_penilaian/hapus/' . $kriteria->id_kriteria, '<div class="btn btn-danger btn-btn-sm">
                        <i class="fa fa-trash"></i> </div>') ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="tambah_kriteria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Buat Kriteria Penilaian</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('tenaga_ahli/kriteria_penilaian/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="judul" name="judul" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="skor" class="col-sm-2 col-form-label">Skor</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="skor" name="skor" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                        <div class="col-sm-10">
                                            <select type="number" class="form-control" id="kategori" name="kategori" required>
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
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="tahun" name="tahun" value="<?= date('Y'); ?>" disabled required>
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