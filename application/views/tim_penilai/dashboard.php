<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">HALAMAN PENILAI 
                        <?php if($this->session->userdata('penempatan') == 'P1') {
                            echo 'Badan Perencanaan Pembangunan Daerah';
                            } elseif ($this->session->userdata('penempatan') == 'P2') {
                            echo 'Badan Penanggulangan Bencana Daerah';
                            } elseif ($this->session->userdata('penempatan') == 'P3') {
                            echo 'Satuan Pamong Praja';
                            } elseif ($this->session->userdata('penempatan') == 'P4') {
                            echo 'Pemerintahan Desa';
                            } elseif ($this->session->userdata('penempatan') == 'P5') {
                            echo 'Pemerintahan Masyarakat';
                            } elseif ($this->session->userdata('penempatan') == 'P6') {
                            echo 'DINAS Komunikasi dan Informasi';
                            } elseif ($this->session->userdata('penempatan') == 'P7') {
                            echo 'DINAS Kebudayaan dan Pariwisata<';                      
                            } elseif ($this->session->userdata('penempatan') == 'P8') {
                            echo 'DINAS Tenaga Kerja';                       
                            } elseif ($this->session->userdata('penempatan') == 'P9') {
                            echo 'DINAS Pendidikan Pemuda dan Olahraga';
                            } elseif ($this->session->userdata('penempatan') == 'P10') {
                            echo 'DINAS Kesehatan';
                        } elseif ($this->session->userdata('penempatan') == 'P11') {
                            echo 'DINAS Sosial P3AP2KB';
                        }
                        ?>
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">


                </div><!-- /.col -->
                <div class="col-sm-6">


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