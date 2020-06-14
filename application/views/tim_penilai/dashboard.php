<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">HALAMAN PENILAI &nbsp; 
                        <?php if($this->session->userdata('penempatan') == 'P1') {
                            echo 'DINAS Kesehatan';
                            } elseif ($this->session->userdata('penempatan') == 'P2') {
                            echo 'DINAS Pendidikan Pemuda dan Olahraga';
                            } elseif ($this->session->userdata('penempatan') == 'P3') {
                            echo 'DINAS Kominfo';
                            } elseif ($this->session->userdata('penempatan') == 'P4') {
                            echo 'DINAS Perdagangan';
                            } elseif ($this->session->userdata('penempatan') == 'P5') {
                            echo 'DINAS Kebudayaan dan Pariwisata';
                            } elseif ($this->session->userdata('penempatan') == 'P6') {
                            echo 'DINAS Pertanian dan Pangan';
                            } elseif ($this->session->userdata('penempatan') == 'P7') {
                            echo 'DINAS Tenaga Kerja';                      
                            } elseif ($this->session->userdata('penempatan') == 'P8') {
                            echo 'DINAS Sosial P3AP2KB';                       
                            } elseif ($this->session->userdata('penempatan') == 'P9') {
                            echo 'DINAS Pekerjaan Umum dan Penataan Ruang';
                            } elseif ($this->session->userdata('penempatan') == 'P10') {
                            echo 'BNPB';
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