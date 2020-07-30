<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper bcgd" style="min-height: 251px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row">
                <!-- <div class="col-sm-6">
                    <h1 class="m-0 text-dark"> Top Navigation <small>Example 3.0</small></h1>
                </div> -->
                <!-- /.col -->
                <!-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Layout</a></li>
                        <li class="breadcrumb-item active">Top Navigation</li>
                    </ol> -->
                <!-- </div>
                /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">

                <div class="col-lg-9">
                    <?php foreach ($berita as $ber) :  ?>
                        <div class="card mb-3">
                            <img src="<?= base_url('uploads/') . $ber->gambar; ?>" class="card-img-top" alt="<?= $ber->gambar; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $ber->judul; ?></h5>
                                <p class="card-text"><?= $ber->paragraf1; ?></p>
                                <p class="card-text"><?= $ber->paragraf2; ?></p>
                                <p class="card-text"><small class="text-muted">Last updated &nbsp;<?= $ber->tgl_buat; ?> </small></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-3">

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0">Berita lainnya</h5>
                        </div>
                        <div class="card-body">
                            <nav class="nav flex-column">
                                <?php foreach ($listberita as $ber) :  ?>

                                    <a class="nav-link active" href="<?= base_url('index/beranda/berita/') . $ber->id_berita; ?>"><?= $ber->judul; ?></a>
                                <?php endforeach ?>

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
