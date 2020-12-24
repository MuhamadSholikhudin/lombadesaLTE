<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-12 mb-3">
                    <h1 class="m-0 text-dark">HALAMAN ADMIN KECAMATAN &nbsp; <?= $this->session->userdata('penempatan') ?></h1>
                </div><!-- /.col -->


                <div class="col-sm-7">

                    <div class="card">
                        <div class="card-header ui-sortable-handle" style="cursor: move;">
                            <h4>
                                Urutan kegiatan lomba Desa Tahun <?= date('Y') ?>
                            </h4>


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <ul class="todo-list ui-sortable" data-widget="todo-list">
                                <?php
                                $kecamatan = $this->session->userdata('username');
                                $tahunini = date('Y');
                                $sosialisasi = $this->db->query("SELECT * FROM daftar WHERE tahun = '$tahunini' ");
                                $membuatpengajuan = $this->db->query("SELECT * FROM hasil_ajuan WHERE tahun = '$tahunini' AND kecamatan = '$kecamatan' ");


                                $mengajukan = $this->db->query("SELECT * FROM hasil_ajuan WHERE tahun = '$tahunini' AND kecamatan = '$kecamatan'  AND status_ajuan > 0 ");
                                $diterima = $this->db->query("SELECT * FROM hasil_ajuan WHERE tahun = '$tahunini' AND kecamatan = '$kecamatan'  AND status_ajuan > 1 ");
                                $accjadwal = $this->db->query("SELECT tgl_jadwal FROM jadwal_lomba JOIN hasil_ajuan ON hasil_ajuan.no_hasilajuan = jadwal_lomba.no_hasilajuan WHERE hasil_ajuan.tahun = '$tahunini' AND hasil_ajuan.kecamatan = '$kecamatan'  AND jadwal_lomba.status_jadwal > 0 ");
                                // $barismem = $accjadwal->row();
                                // echo  $barismem->tgl_jadwal;
                                // $barm = $barismem->tgl_jadwal;
                                // echo  $barm;

                                // $penilaian = $this->db->query("SELECT * FROM hasil_ajuan JOIN jadwal_lomba ON hasil_ajuan.no_hasilajuan = jadwal_lomba.no_hasilajuan WHERE hasil_ajuan.tahun = '$tahunini' AND hasil_ajuan.kecamatan = '$kecamatan'  AND jadwal_lomba.tgl_jadwal = '$barm'  ");
                                $juaralomba = $this->db->query("SELECT * FROM juara_lomba WHERE tahun = '$tahunini' ");

                                ?>

                                <li class="done">
                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="todo2" id="td1" <?php if ($sosialisasi->num_rows() > 0) {
                                                                                                    echo 'checked="checked"';
                                                                                                } elseif ($sosialisasi->num_rows() < 1) {
                                                                                                    echo ' ';
                                                                                                }
                                                                                                ?> disabled>
                                        <label for="td"></label>
                                    </div>
                                    <span class="text"> <a href="http://">Sosialisasi dan pembukaan pendaftaran</a> </span>
                                </li>

                                <li class="done">

                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="todo2" id="td2" <?php if ($membuatpengajuan->num_rows() > 0) {
                                                                                                    echo 'checked="checked"';
                                                                                                } elseif ($membuatpengajuan->num_rows() < 1) {
                                                                                                    echo ' ';
                                                                                                }
                                                                                                ?> disabled>
                                        <label for="td2"></label>
                                    </div>
                                    <span class="text"> <a href="http://"> Mengisi form pengajuan peserta lomba dan berkas persyaratans</a> </span>

                                </li>
                                <li class="done">

                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="todo2" id="td3" <?php if ($mengajukan->num_rows() > 0) {
                                                                                                    echo 'checked="checked"';
                                                                                                } elseif ($mengajukan->num_rows() < 1) {
                                                                                                    echo ' ';
                                                                                                }
                                                                                                ?> disabled>
                                        <label for="td3"></label>
                                    </div>
                                    <span class="text"><a href="http://"> Mengajukan berkas pengajuan peserta lomba desa</a></span>

                                </li>
                                <li class="done">

                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="todo2" id="td4" <?php if ($diterima->num_rows() > 0) {
                                                                                                    echo 'checked="checked"';
                                                                                                } elseif ($diterima->num_rows() < 1) {
                                                                                                    echo ' ';
                                                                                                }
                                                                                                ?> disabled>
                                        <label for="td4"></label>
                                    </div>
                                    <span class="text"><a href="http://">Berkas pengajuan peserta lomba desa di terima</a> </span>

                                </li>

                                <li class="done">

                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="todo2" id="td5" <?php
                                                                                                if ($accjadwal->num_rows() > 0) {
                                                                                                    echo 'checked="checked"';
                                                                                                } elseif ($accjadwal->num_rows() < 1) {
                                                                                                    echo ' ';
                                                                                                }
                                                                                                ?> disabled>
                                        <label for="td5"></label>
                                    </div>
                                    <span class="text"><a href="http://">Jadwal lomba desa sudah dibuat </a> </span>

                                </li>
                                <li class="done">

                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="todo2" id="td6" <?php
                                                                                                // if ($barm <= date('Y-m-d')) {
                                                                                                //                                                             echo 'checked="checked"';
                                                                                                //                                                         } elseif ($barm > date('Y-m-d')) {
                                                                                                //                                                             echo ' ';
                                                                                                //                                                         }
                                                                                                ?> disabled>
                                        <label for="td6"></label>
                                    </div>
                                    <span class="text"> <a href="http://"> Process Penilaian </a></span>

                                </li>
                                <li class="done">

                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="todo2" id="td7" <?php if ($juaralomba->num_rows() > 0) {
                                                                                                    echo 'checked="checked"';
                                                                                                } elseif ($juaralomba->num_rows() < 1) {
                                                                                                    echo ' ';
                                                                                                }
                                                                                                ?> disabled>
                                        <label for="td7"></label>
                                    </div>
                                    <span class="text"><a href="http://"> Juara lomba sudah di tentukan </a></span>

                                </li>
                                <li class="done">
                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="todo2" id="td8" <?php if ($juaralomba->num_rows() > 0) {
                                                                                                    echo 'checked="checked"';
                                                                                                } elseif ($juaralomba->num_rows() < 1) {
                                                                                                    echo ' ';
                                                                                                }
                                                                                                ?> disabled>
                                        <label for="td8"></label>
                                    </div>
                                    <span class="text"><a href="http://">lomba desa tahun <?= date('Y') ?> selsai </a> </span>

                                </li>



                            </ul>
                        </div>
                        <!-- /.card-body -->


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