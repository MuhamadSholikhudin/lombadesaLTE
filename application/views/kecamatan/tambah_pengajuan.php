<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">


                </div><!-- /.col -->
                <div class="col-sm-12">



                    <h3> <i class="fas fa-edit"></i> Pengajuan Desa</h3>


                    <form action="<?= base_url('admin_kecamatan/pengajuan/tambah_aksi'); ?>" method="post">
                        <div class="for-group mb-3">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" name="judul" id="judul" value="<?= $pendaftaran->judul ?>" readonly>
                            <input type="hidden" class="form-control" name="no_daftar" id="judul" value="<?= $pendaftaran->no_daftar ?>" readonly>
                        </div>
                        <div class="for-group mb-3">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" class="form-control" name="kecamatan" id="kecamatan" value="<?= $this->session->userdata('penempatan'); ?>" readonly>
                        </div>
                        <div class="for-group mb-3">
                            <label for="desa">Desa</label>
                            <select name="desa" id="desa" class="form-control">
                                <?php foreach ($wilayah as $wil) : ?>
                                    <option value="<?= $wil->desa ?>"> <?= $wil->desa ?></option>
                                <?php endforeach; ?>
                                <?= form_error('desa', '<div class="text-danger small ml-2">', '</div>'); ?>

                            </select>
                        </div>

                        <div class="for-group mb-3">
                            <label for="tahun">Tahun</label>
                            <input type="text" class="form-control" name="tahun" id="tahun" value="<?= date('Y'); ?>" readonly>
                        </div>
                        <button class="btn btn-primary btn--sm mt-3" type="submit">Simpan</button>
                    </form>

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