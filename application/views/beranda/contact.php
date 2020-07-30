<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper bcgd" style="min-height: 251px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <marquee>
                        <h1 class="m-0 text-dark" target="blink" style="font-family: Comic Sans;"> SELAMAT DATANG DI WEBSITE LOMBA DESA KAB KUDUS</h1>

                    </marquee>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 bg-white mb-3">
                    <div class="container-fluid bg-light mb-3">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <p></p>
                                <h2><strong>KONTAK KAMI</strong></h2>
                            </div>
                            <div class="col-sm-12 text-center mb-2">
                                DINAS PEMBERDAYAAN MASYARAKAT DAN DESA KAB. KUDUS <br>
                                Alamat: Kompleks Perkantoran Jl. Mejobo No. 45 Kudus
                            </div>
                            <div class="col-sm-6 text-center">
                                Telepon: (0291) 438 177 <br>
                                <i class="fas fa-envelope"></i>&nbsp; E-mail: -
                                <p></p>
                            </div>
                            <div class="col-sm-6 text-center">
                                SOCIAL MEDIA <br>
                                <i class="fab fa-twitter"></i>&nbsp; DPMD Kab. Kudus <br>
                                <i class="fab fa-facebook-square"></i>&nbsp; DPMD Kab. Kudus
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6278674302725!2d110.85686931406744!3d-6.815035795074456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c51f6d786ab5%3A0x44106375ba5d7a61!2sDinas%20Pemberdayaan%20Masyarakat%20dan%20Desa%20Kabupaten%20Kudus!5e0!3m2!1sid!2sid!4v1591672300660!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>

                </div>
                <!-- /.col-md-6 -->



                <div class="col-lg-3">
                    <div class="card card-primary card-outline bg-light">
                        <div class="card-header">
                            <h5 class="card-title m-0">Berita</h5>
                        </div>
                        <div class="card-body">
                            <nav class="nav flex-column">
                                <?php foreach ($listberita as $ber) : ?>
                                    <a class="nav-link active" href="<?= base_url('index/beranda/berita/') . $ber->id_berita; ?>"><?= $ber->judul; ?></a>

                                <?php endforeach; ?>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->