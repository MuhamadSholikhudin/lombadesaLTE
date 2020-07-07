
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper bcgd" style="min-height: 251px;">
          <!-- Content Header (Page header) -->
          <div class="content-header">
              <div class="container">
                  <div class="row mb-2">
                      <div class="col-sm-12">
                          <h1 class="m-0 text-dark"> SELAMAT DATANG DI WEBSITE LOMBA DESA KAB KUDUS</h1>
                      </div><!-- /.col -->
                      <!-- /.col -->
                  </div><!-- /.row -->
              </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->

          <!-- Main content -->
          <div class="content">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-8 bg-white mb-3">
                          <strong>
<h3>

    Sekilas Tentang DPMD Kab. Kudus
</h3>
                          </strong>
                          <hr>
                          <p>
                              DINAS PEMBERDAYAAN MASYARAKAT DAN DESA Kabupaten Kudus, Pemberdayaan (empowerment) masyarakat mengandung dua makna pokok, yaitu To give power or authority to artinya : Memberi kekuasaan atau mendelegasikan kewenangan kepada masyarakat, agar masyarakat memiliki kemandirian dalam pengambilan keputusan untuk membangun diri dan lingkungannya secara mandiri. To give ability or enable artinya : Meningkatkan kemampuan masyarakat melalui pelaksanaan berbagai program pembangunan, agar kondisi kehidupan masyarakat mencapai tingkat kemampuan yang diharapkan.
                              <br>
                              ( Priyono dan Prananka, 1996)

                          </p>
                          <p>

                              Pemberdayaan Masyarakat berarti menampakkan dan memandirikan masyarakat.
                          </p>

                          <p>

                              Harus dilakukan melalui 3 aspek pokok, yaitu : <br>
                              Menciptakan suasana atau iklim yang memungkinkan berkembangnya potensi atau daya yang dimiliki masyarakat
                          </p>

                          Memperkuat potensi atau daya yang dimiliki masyarakat melalui pemberian input

                          Melindungi masyarakat melalui pemihakan kepada masyarakat yang lemah untuk mencegah persaingan yang tidak seimbang oleh karena kekurangberdayaan menghadapi yang kuat
                          <p>
                              ( Kartasasmita, 1995 )

                          </p>

                          Pemberdayaan Masyarakat pada prinsipnya merupakan upaya penguatan masyarakat untuk dapat berpartisipasi dalam proses pengambilan keputusan yang mempengaruhi masa depannya, penguatan masyarakat untuk dapat memperoleh faktor-faktor produksi dan penguatan masyarakat untuk dapat menentukan pilihan masa depannya.
                          <p>
                              ( hutomo, 2000 )

                          </p>
                      </div>
                      <!-- /.col-md-6 -->
                      <div class="col-lg-4">

                          <div class="card card-primary card-outline">
                              <div class="card-header">
                                  <h5 class="card-title m-0">Berita</h5>
                              </div>
                              <div class="card-body">
                                  <nav class="nav flex-column">
                                      <?php foreach ($listberita as $ber) : ?>
                                          <a class="nav-link active" href="<?= base_url('index/beranda/berita/') . $ber->id_berita; ?>"><?= $ber->judul; ?></a>

                                      <?php endforeach; ?></nav>
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

