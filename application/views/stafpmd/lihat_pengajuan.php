<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- <div class="col-sm-3">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div> -->
                <!-- /.col -->
                <!-- <div class="col-sm-3">


                </div> -->
                <!-- /.col -->


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
                                    if ($pengajuan->kecamatan == 'JEKULO') {
                                        echo '  <h2 class="text-center">KECAMATAN JEKULO</h2>
                                    <h5 class="text-center">JL. RAYA KUDUS - PATI KM. 10 JEKULO 598382 TELP(0291 430020</h5>
                                    <h5 class="text-center">Email : kecamatanjekulo@kuduskab.go.id</h5>';
                                    } elseif ($pengajuan->kecamatan == 'DAWE') {
                                        echo '  <h2 class="text-center">KECAMATAN DAWE</h2>
                                    <h5 class="text-center">Jl. Kudus-Colo No. 292 A Piji DaweKudus 598382 Telp. (0291) 433194</h5>
                                    <h5 class="text-center">Email : kec.dawe@kuduskab.go.id</h5>';
                                    } elseif ($pengajuan->kecamatan == 'BAE') {
                                        echo '  <h2 class="text-center">KECAMATAN BAE</h2>
                                    <h5 class="text-center">Jl. Kudus-Colo Km. 5 Kudus 59352 Telp. (0291) 430010</h5>
                                    <h5 class="text-center">Email : kec.bae@kuduskab.go.id</h5>';
                                    } elseif ($pengajuan->kecamatan == 'MEJOBO') {
                                        echo '  <h2 class="text-center">KECAMATAN MEJOBO</h2>
                                    <h5 class="text-center">Jl. Mejobo Telp. (0291) 439641</h5>
                                    <h5 class="text-center">Email : kecamatanmejobo@kuduskab.go.id</h5>';
                                    } elseif ($pengajuan->kecamatan == 'JATI') {
                                        echo '  <h2 class="text-center">KECAMATAN JATI</h2>
                                    <h5 class="text-center">Jl.Purwodadi No.93 Kudus, JATI 59345 Telp. (0291) 437565</h5>
                                    <h5 class="text-center">Email : kec.jati@yahoo.co.id</h5>';
                                    } elseif ($pengajuan->kecamatan == 'KALIWUNGU') {
                                        echo '  <h2 class="text-center">KECAMATAN KALIWUNGU</h2>
                                    <h5 class="text-center">Jl. Raya Kudus-JeparaKm. 5 JEKULO 598382 TELP(0291 430020</h5>
                                    <h5 class="text-center">Email : kaliwungukudus@gmail.com</h5>';
                                    } elseif ($pengajuan->kecamatan == 'UNDAAN') {
                                        echo '  <h2 class="text-center">KECAMATAN UNDAAN</h2>
                                    <h5 class="text-center">Jl. Raya Kudus-Purwodadi KM. 12 UNDAAN 598382 Telp.0291 433400</h5>
                                    <h5 class="text-center">Email : kecamatan.undaan@gmail.com</h5>';
                                    } elseif ($pengajuan->kecamatan == 'GEBOG') {
                                        echo '  <h2 class="text-center">KECAMATAN GEBOG</h2>
                                    <h5 class="text-center">Jl. Rahtawu Raya No.02 Gebog Kudus 598382 Telp. (0291) 439646</h5>
                                    <h5 class="text-center">Email : kecamatangebog@gmail.com</h5>';
                                    } elseif ($pengajuan->kecamatan == 'KOTA KUDUS') {
                                        echo '  <h2 class="text-center">KECAMATAN KOTA</h2>
                                    <h5 class="text-center">Jl. Jdrl Sudirman No.279 Kudus JEKULO 598382 Telp. (0291) 437449</h5>
                                    <h5 class="text-center">Email : kecamatankota@kuduskab.go.id</h5>';
                                    }

                                    ?>

                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="body">

                            <h3 class="text-center"><u>SURAT KETERANGAN</u> </h3>

                            <h4 class="text-center">NOMOR : 090 / 300./ 16.<?= $pengajuan->no_hasilajuan ?> / <?= $pengajuan->tahun ?></h4>

                            <br>
                            <br>
                            <h5>
                                <p> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                    Bahwa dalam Rangka Ikut Serta kegitan Lomba Desa Tahun <?= $pengajuan->tahun ?>
                                    yang diadakan oleh Dinas Pemberdayaan Masyarakat dan Desa Kabupaten Kudus Dengan ini
                                    Pemerintah Kecamatan Jekulo Mengajukan Desa <?= $pengajuan->desa ?>


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
                            <br>
                            <br>

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
                                        <h5 class="text-center">Kudus, <?= longdateum_indo($pengajuan->tgl_ajuan) ?> </h5>
                                        <h5 class="text-center">CAMAT <?= $pengajuan->kecamatan ?></h5>
                                    </div>
                                    <div>
                                        <br>
                                        <h5 class="text-center">TERTANDA TANGANI</h5>
                                        <br>
                                    </div>
                                    <div>
                                        <?php foreach ($pengguna as $peg) : ?>
                                            <h5 class="text-center"><u><?= $peg->nama ?></u> </h5>
                                            <h5 class="text-center">NIP : <?= $peg->username ?></h5>

                                        <?php endforeach; ?>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-3">


                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Surat Pengajuan dari Kecamatan</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('stafpmd/pengajuan/cekpengajuan/'); ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- checkbox -->
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="1" name="cekpengajuan[]">
                                                <label for="customCheckbox1" class="custom-control-label">Sudah benar</label>
                                            </div>
                                            <input class="" type="hidden" id="" value="<?= $pengajuan->no_hasilajuan ?>" name="no_hasilajuan">

                                        </div>
                                    </div>

                                </div>

                        </div>
                    </div>

                </div>
                <div class="col-sm-9">
                    <!-- <object type="application/pdf" data="<?= base_url('uploads/files/') ?><?= $pengajuan->surat_balasan_desa ?>" width="300" height="350"> -->
                    <iframe src="<?= base_url('uploads/files/') ?><?= $pengajuan->surat_balasan_desa ?>" width="100%" height="600"></iframe>
                    <!-- <embed type="application/pdf" src="<?= base_url('uploads/files/') ?><?= $pengajuan->surat_balasan_desa ?>" width="600" height="400"></embed> -->
                </div>
                <div class="col-sm-3">


                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Surat Balasan dari Desa</h3>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- checkbox -->
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="2" name="cekpengajuan[]">
                                            <label for="customCheckbox2" class="custom-control-label">Sudah benar</label>
                                        </div>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-sm-9">
                    <input name="file_lama" type="hidden" value="<?= $pengajuan->surat_balasan_desa ?> " />

                </div>
                <div class="col-sm-3">

                </div>

                <div class="col-sm-6">

                    <button href="<?= base_url('admin_kecamatan/pengajuan/index/'); ?>" class="btn btn-success btn--sm mt-3">kembali</button>
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