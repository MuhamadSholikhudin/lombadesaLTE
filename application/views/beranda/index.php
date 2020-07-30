<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper bcgd" style="min-height: 251px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row">
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
            <div class="row ">
                <div class="col-lg-9 shadow-lg bg-light">
                    <div class="col-lg-12">
                        <div id="carouselExampleInterval" class="card carousel slide " data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-interval="10000">
                                    <img src="<?= base_url('assets/img/download.jpg') ?>" class="d-block w-100" alt="<?= base_url('assets/img/download.jpg') ?>">
                                </div>
                                <div class="carousel-item" data-interval="2000">
                                    <img src="<?= base_url('assets/img/informasi.jpg') ?>" class="d-block w-100" alt="<?= base_url('assets/img/informasi.jpg') ?>">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>


                        <div class="card mt-4">
                            <div class="card-body">
                                <h4 class=" text-center">
                                    <strong>
                                        Selayang Pandang Dinas Pemberdayaan Masyarakat dan Desa kabupaten Kudus
                                    </strong>
                                </h4><br>
                                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                                <p class="card-text text-center">Puji Syukur kita panjatkan kehadirat Tuhan Yang Maha Esa, yang dengan rahmat-Nya telah mengantarkan Dinas Pemberdayaan Masyarakat dan Desa ini menjadi sebuah Institusi yang semakin eksis sesuai dengan visi dan misi Kabupaten Kudus "Mewujudkan Masyarakat Kudus yang Semakin Sejahtera" menghadapi tantangan zaman, terutama menghadapi penyelenggaraan pemerintahan dalam rangka pelayanan kepada masyarakat.</p>
                                <p class="card-text text-center">Sebagai pusat informasi kepada masyarakat sehubungan dengan telah dibangunnya website resmi Dinas Pemberdayaan Masyarakat Desa Kabupaten Kudus, Kami berharap kedepan agar masyarakat memahami tentang keberadaan Dinas Pemberdayaan Masyarakat dan Desa Kabupaten Kudus yang telah membuat beberapa kebijakan, kegiatan, program serta rencana strategis yang disusun sesuai dengan kebutuhan untuk masyarakat di bidang Pemberdayaan Masyarakat untuk Pelayanan di bidang Teknologi Informasi dalam rangka pengembangan dan penerapan e-Government sebagai bagian dari Kebijakan dan Strategi Nasional Pemerintah guna mewujudkan kepemerintahan yang baik (good governance).</p>
                                <p class="card-text text-center">Kini Dinas Pemberdayaan Masyarakat dan Desa Kabupaten Kudus siap melangkah bersama dengan semangat baru yang diwarnai dengan inovasi, integritas, optimisme serta komitmen untuk memberikan yang terbaik bagi Pemerintah dan masyarakat Kabupaten Kudus. Oleh karena itu, kritik dan saran yang positif dan membangun sangatlah kami harapkan, agar kita dapat mencapai apa yang telah direncanakan dan kita cita-citakan bersama, guna membangun daerah yang kita cintai ini agar lebih baik dan berkembang sebagaimana harapan kita bersama.</p>
                                <!-- <a href="#" class="card-link">Card link</a>
                                  <a href="#" class="card-link">Another link</a> -->
                            </div>
                        </div>
                    </div>


                </div>

                <!-- /.col-md-6 -->
                <div class="col-lg-3">
                    <div class="card card-primary card-outline bg-light">
                        <div class="card-header">
                            <h5 class="card-title m-0">Berita Terupdate</h5>
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


                <?php foreach ($listberitalama as $ber) : ?>
                    <div class="col-lg-3">
                        <div class="card border">
                            <img src="<?= base_url('uploads/') . $ber->gambar; ?>" class="card-img-top" alt="<?= base_url('uploads/') . $ber->gambar; ?>" width="100%" height="200px">
                            <div class="card-body" style="height: 100px">
                                <a href="<?= base_url('index/beranda/berita/') . $ber->id_berita; ?>" class="card-title"><?= $ber->judul; ?></a>
                                <p class="card-text"><small class="text-muted">Last update &nbsp; <?= $ber->tgl_buat; ?></small></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
           
            </div>


            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->