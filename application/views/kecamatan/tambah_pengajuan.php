<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div> -->
                <!-- /.col -->
                <div class="col-sm-12">


                </div><!-- /.col -->

                <div class="col-sm-9">
                    <div class="card p-4">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="<?= base_url('assets/img/logo_kudus.png') ?>" alt="" width="100%" height="100%">
                                </div>
                                <div class="col-md-10">
                                    <h3 class="text-center">PEMERINTAH KABUPATEN KUDUS</h3>
                                    <?php
                                    if ($this->session->userdata('penempatan') == 'JEKULO') {
                                        echo '  <h2 class="text-center">KECAMATAN JEKULO</h2>
                                    <h5 class="text-center">JL. RAYA KUDUS - PATI KM. 10 JEKULO 598382 TELP(0291 430020</h5>
                                    <h5 class="text-center">Email : kecamatanjekulo@kuduskab.go.id</h5>';
                                    } elseif ($this->session->userdata('penempatan') == 'DAWE') {
                                        echo '  <h2 class="text-center">KECAMATAN DAWE</h2>
                                    <h5 class="text-center">Jl. Kudus-Colo No. 292 A Piji DaweKudus 598382 Telp. (0291) 433194</h5>
                                    <h5 class="text-center">Email : kec.dawe@kuduskab.go.id</h5>';
                                    } elseif ($this->session->userdata('penempatan') == 'BAE') {
                                        echo '  <h2 class="text-center">KECAMATAN BAE</h2>
                                    <h5 class="text-center">Jl. Kudus-Colo Km. 5 Kudus 59352 Telp. (0291) 430010</h5>
                                    <h5 class="text-center">Email : kec.bae@kuduskab.go.id</h5>';
                                    } elseif ($this->session->userdata('penempatan') == 'MEJOBO') {
                                        echo '  <h2 class="text-center">KECAMATAN MEJOBO</h2>
                                    <h5 class="text-center">Jl. Mejobo Telp. (0291) 439641</h5>
                                    <h5 class="text-center">Email : kecamatanmejobo@kuduskab.go.id</h5>';
                                    } elseif ($this->session->userdata('penempatan') == 'JATI') {
                                        echo '  <h2 class="text-center">KECAMATAN JATI</h2>
                                    <h5 class="text-center">Jl.Purwodadi No.93 Kudus, JATI 59345 Telp. (0291) 437565</h5>
                                    <h5 class="text-center">Email : kec.jati@yahoo.co.id</h5>';
                                    } elseif ($this->session->userdata('penempatan') == 'KALIWUNGU') {
                                        echo '  <h2 class="text-center">KECAMATAN KALIWUNGU</h2>
                                    <h5 class="text-center">Jl. Raya Kudus-JeparaKm. 5 JEKULO 598382 TELP(0291 430020</h5>
                                    <h5 class="text-center">Email : kaliwungukudus@gmail.com</h5>';
                                    } elseif ($this->session->userdata('penempatan') == 'UNDAAN') {
                                        echo '  <h2 class="text-center">KECAMATAN UNDAAN</h2>
                                    <h5 class="text-center">Jl. Raya Kudus-Purwodadi KM. 12 UNDAAN 598382 Telp.0291 433400</h5>
                                    <h5 class="text-center">Email : kecamatan.undaan@gmail.com</h5>';
                                    } elseif ($this->session->userdata('penempatan') == 'GEBOG') {
                                        echo '  <h2 class="text-center">KECAMATAN GEBOG</h2>
                                    <h5 class="text-center">Jl. Rahtawu Raya No.02 Gebog Kudus 598382 Telp. (0291) 439646</h5>
                                    <h5 class="text-center">Email : kecamatangebog@gmail.com</h5>';
                                    } elseif ($this->session->userdata('penempatan') == 'KOTA KUDUS') {
                                        echo '  <h2 class="text-center">KECAMATAN KOTA</h2>
                                    <h5 class="text-center">Jl. Jdrl Sudirman No.279 Kudus JEKULO 598382 Telp. (0291) 437449</h5>
                                    <h5 class="text-center">Email : kecamatankota@kuduskab.go.id</h5>';
                                    }

                                    ?>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <form action="<?= base_url('admin_kecamatan/pengajuan/tambah_aksi'); ?>" method="post" enctype="multipart/form-data">
                            <div class="body">

                                <h3 class="text-center"><u>SURAT KETERANGAN</u> </h3>

                                <h4 class="text-center">NOMOR : 090 / 300./ 16. / <?= date('Y') ?> </h4>

                                <br>
                                <br>
                                <h5>
                                    <p> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                        Bahwa dalam Rangka Ikut Serta kegitan Lomba Desa Tahun <?= date('Y') ?> yang diadakan oleh Dinas Pemberdayaan Masyarakat dan Desa Kabupaten Kudus Dengan ini Pemerintah Kecamatan Jekulo Mengajukan Desa
                                        <select name="kode_wilayah" id="kode_wilayah">
                                            <?php foreach ($wilayah as $wil) : ?>
                                                <option value="<?= $wil->kode_wilayah ?>"> <?= $wil->desa ?></option>
                                            <?php endforeach; ?>
                                            <?= form_error('desa', '<div class="text-danger small ml-2">', '</div>'); ?>
                                        </select>


                                        Ikut serta dalam perlombaan yang diadakan
                                        Oleh dinas Pemberdayaan Masyarakat dan desa.


                                    </p>
                                </h5>
                                <h5>
                                    <p>
                                        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                        Demikian surat pengajuan ini agar di sampaikan dengan sebaik baiknya.
                                    </p>
                                </h5>


                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="content-bottom">
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>

                                        </div>
                                    </div>

                                    <div class="col-sm-5">

                                        <div>
                                            <h4 class="text-center">Kudus, <?= longdateum_indo(date('Y-m-d')) ?> </h4>
                                            <h4 class="text-center">CAMAT <?= $this->session->userdata('penempatan') ?></h4>
                                        </div>
                                        <div class="mb-3">
                                            <br>
                                            <h4 class="text-center"></h4><br>
                                        </div>
                                        <div>
                                            <h4 class="text-center"><u><?= $this->session->userdata('nama') ?></u> </h4>
                                            <h4 class="text-center">NIP : <?= $this->session->userdata('username') ?></h4>
                                        </div>


                                    </div>
                                </div>
                            </div>
                    </div>

                </div>
                <div class="col-sm-3">

                </div>

                <div class="col-sm-9 mt-3 card">
                    <label for="surat_desa">Upload Dokumen dari desa</label>
                    <input name="file_name" class="form-control" id="surat_desa" type="file" accept="application/pdf, application/vnd.ms-excel" required />
                    <div class="mt-3"></div>
                </div>




                <div class="col-sm-12 ">
                    <!-- <h3> <i class="fas fa-edit"></i> Pengajuan Desa</h3> -->
                    <div class="for-group mb-3 d-none">
                        <label for="judul">No Daftar</label>
                        <!-- <input type="text" class="form-control" name="judul" id="judul" value="<?= $pendaftaran->judul ?>" readonly> -->
                        <input type="text" class="form-control" name="no_daftar" id="judul" value="<?= $pendaftaran->no_daftar ?>" readonly>
                    </div>
                    <!-- <div class="for-group mb-3">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" id="kecamatan" value="<?= $this->session->userdata('penempatan'); ?>" readonly>
                    </div> -->
                    <!-- <div class="for-group mb-3">
                        <label for="desa">Desa</label>
                        <select name="desa" id="desa" class="form-control">
                            <?php foreach ($wilayah as $wil) : ?>
                                <option value="<?= $wil->desa ?>"> <?= $wil->desa ?></option>
                            <?php endforeach; ?>
                            <?= form_error('desa', '<div class="text-danger small ml-2">', '</div>'); ?>
                        </select>
                    </div> -->

                    <div class="for-group mb-3 d-none">
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