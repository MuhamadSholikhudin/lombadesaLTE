<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-12 mb-3">
                    <h1 class="m-0 text-dark">HALAMAN ADMIN KECAMATAN &nbsp; <?= $this->session->userdata('penempatan') ?></h1>
                </div><!-- /.col -->

                <div class="ccol-sm-12">
                    <div class="card p-4">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="<?= base_url('assets/img/logo_kudus.png') ?>" alt="" width="100%" height="180px">
                                </div>
                                <div class="col-md-10">
                                    <h3 class="text-center">PEMERINTAH KABUPATEN KUDUS</h3>
                                    <h3 class="text-center">DINAS TENAGA KERJA, PERINDUSTRIAN,KOPERASI,</h3>
                                    <h3 class="text-center">USAHA KECIL DAN MENENGAH</h3>
                                    <h5 class="text-center">Jln. Conge Ngembalrejo No.99 Telp. .(0291) 438691, 431470, Fax (0291) 438691</h5>
                                    <h3 class="text-center">KUDUS 59322</h3>
                                </div>
                            </div>

                        </div>
                        <div class="body">

                            <h3 class="text-center"><u>SURAT PERINTAH TUGAS</u> </h3>
                           
                                <h4 class="text-center">NOMOR : 090 / 300./ 16.06 / <?= date('Y') ?></h4>
                            
                            <br>
                            <br>

                            <div class="col-sm-2 lead">Dasar &nbsp;&nbsp;&nbsp;&nbsp; : 1.</div>
                            <div class="col-sm-10 lead"> Dokumen Pelaksanaan Perubahan Anggaran No. 2.01.2.01.01.18.06 tanggal 28 Januari 2019.</div>
                            <div class="col-sm-2 lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.</div>
                            <div class="col-sm-10 lead"> Surat Perintah Kerja Kepala Dinas Tenaga Kerja, Perindustrian, Koperasi, Usaha Kecil dan Menengah Kabupaten Kudus, tanggal 1 Februari 2019.</div>

                            <br>
                            <br>
                            <br>
                            <h3 class="text-center">MEMERINTAHKAN </h3>
                            <div class="col-sm-1 lead">Kepada :</div>
                            <div class="col-sm-11 lead">
                               
                                
                                    <div class="col-sm-4 lead">. &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; NAMA</div>
                                    <div class="col-sm-8 lead">: </div>
                                    <div class="col-sm-4 lead"> &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Jabatan</div>
                                    <div class="col-sm-8 lead">:</div>
                                    <div class="col-sm-4 lead">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Unit Kerja</div>
                                    <div class="col-sm-8 lead">: Dinas Naker Perinkop UKM Kab Kudus</div>
                                
                            </div>

                            <div class="col-sm-2 lead">Untuk &nbsp;&nbsp;&nbsp;&nbsp; : </div>
                            <div class="col-sm-10 lead"> Melaksanakan tugas sebagai pendamping Alumni UPTD BLK dan Kelompok Wirausaha baru di wilayah Kecamatan <strong></strong>.</div>

                            <div class="row">
                                <div class="col-sm-8">
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
                                        <a href="<?= base_url('kadin/surat') ?>" class="btn btn-success">Kembali </a>

                                    </div>
                                </div>

                                <div class="col-sm-4">
                                   
                                        <div>
                                            <h4 class="text-center">Kudus, <?= date('d-m-Y') ?> </h4>
                                            <h4 class="text-center">Kepala Dinas BLK Kudus</h4>
                                        </div>
                                        <div class="mb-3">
                                            <br>
                                            <h4 class="text-center">Telah Disetujui</h4><br>
                                        </div>
                                        <div>
                                            <h4 class="text-center"><u></u> </h4>
                                            <h4 class="text-center">NIP :</h4>
                                        </div>
                                    

                                </div>
                            </div>
                        </div>
                    </div>

                </div>


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
                                    <span class="text">Sosialisasi dan pembukaan pendaftaran</span>
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
                                    <span class="text">Mengisi form pengajuan peserta lomba dan berkas persyaratans</span>

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
                                    <span class="text">Mengajukan berkas pengajuan peserta lomba desa</span>

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
                                    <span class="text">Berkas pengajuan peserta lomba desa di terima</span>

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
                                    <span class="text">Jadwal lomba desa sudah dibuat</span>

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
                                    <span class="text">Process Penilaian </span>

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
                                    <span class="text">Juara lomba sudah di tentukan </span>

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
                                    <span class="text">lomba desa tahun <?= date('Y') ?> selsai</span>

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