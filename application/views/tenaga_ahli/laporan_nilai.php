<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Laporan Nilai Lomba Desa </h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DATA PENILAIN LOMBA</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Bidang</th>
                                        <?php foreach ($pengajuan as $peng) :
                                        ?>
                                            <th colspan="4"><?= $peng->desa ?></th>
                                        <?php endforeach;     ?>
                                    </tr>

                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Bidang</th>
                                        <?php foreach ($pengajuan as $peng) :
                                        ?>
                                            <th>N1</th>
                                            <th>D1</th>
                                            <th>N2</th>
                                            <th>D2</th>

                                        <?php endforeach;     ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($penilai as $peni) : ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td>
                                                <?php if ($peni->penempatan == 'P1') {
                                                    echo 'Badan Perencanaan Pembangunan Daerah';
                                                } elseif ($peni->penempatan == 'P2') {
                                                    echo 'BPBD';
                                                } elseif ($peni->penempatan == 'P3') {
                                                    echo 'Satuan Pamong Praja';
                                                } elseif ($peni->penempatan == 'P4') {
                                                    echo 'Pemerintahan Desa';
                                                } elseif ($peni->penempatan == 'P5') {
                                                    echo 'Pemerintahan Masyarakat';
                                                } elseif ($peni->penempatan == 'P6') {
                                                    echo 'DINAS Kominfo';
                                                } elseif ($peni->penempatan == 'P7') {
                                                    echo 'DINAS Kebudayaan dan Pariwisata';
                                                } elseif ($peni->penempatan == 'P8') {
                                                    echo 'DINAS Tenaga Kerja';
                                                } elseif ($peni->penempatan == 'P9') {
                                                    echo 'DINAS Pendidikan Pemuda dan Olahraga';
                                                } elseif ($peni->penempatan == 'P10') {
                                                    echo 'DINAS Kesehatan';
                                                } elseif ($peni->penempatan == 'P11') {
                                                    echo 'DINAS Sosial P3AP2KB';
                                                }
                                                ?>
                                            </td>
                                            <?php foreach ($jadwal as $jad) : ?>
                                                <td>
                                                    <?php
                                                    $nilai = $this->db->query("SELECT SUM(nilai1) as nilai1, SUM(dadu1) as dadu1, SUM(nilai2) as nilai2, SUM(dadu2) as dadu2 FROM nilai WHERE nama='$peni->nama' AND no_jadwal = '$jad->no_jadwal' AND tahun= 2020 ");
                                                    $trans = $nilai->row();
                                                    echo   $trans->nilai1;

                                                    ?>
                                                </td>
                                                <td><?= $trans->dadu1; ?></td>
                                                <td><?= $trans->nilai2; ?></td>
                                                <td><?= $trans->dadu2; ?></td>
                                            <?php endforeach; ?>
                                        </tr>
                                    <?php $no++;
                                    endforeach;     ?>
                                    <tr>
                                        <td></td>
                                        <td>Jumlah</td>
                                        <?php foreach ($jadwal as $jad) : ?>
                                            <td>
                                                <?php
                                                $nilai = $this->db->query("SELECT SUM(nilai1) as nilai1, SUM(dadu1) as dadu1, SUM(nilai2) as nilai2, SUM(dadu2) as dadu2 FROM nilai WHERE no_jadwal = '$jad->no_jadwal' AND tahun= 2020 ");
                                                $trans = $nilai->row();
                                                echo   $trans->nilai1;
                                                ?>
                                            </td>
                                            <td><?= $trans->dadu1; ?></td>
                                            <td><?= $trans->nilai2; ?></td>
                                            <td><?= $trans->dadu2; ?></td>
                                        <?php endforeach; ?>

                                    </tr>

                                    <tr>

                                        <td></td>
                                        <td>Total</td>
                                        <?php foreach ($jadwal as $jad) : ?>
                                            <?php
                                            $nilai = $this->db->query("SELECT SUM(nilai1 + nilai2) as nilai12, SUM(dadu1 + dadu2) as dadu12 FROM nilai WHERE no_jadwal = '$jad->no_jadwal' AND tahun= 2020 ");
                                            $trans = $nilai->row();

                                            ?>
                                            <td colspan="2">Nilai : <?= $trans->nilai12; ?> </td>
                                            <td colspan="2">Dadu : <?= $trans->dadu12; ?></td>

                                        <?php endforeach; ?>

                                    </tr>




                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                    </div>




                    <!--    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Bordered Table</h3>
                        </div>
                       
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Kriteria</th>
                                        <th style="width: 40px">Nilai 1</th>
                                        <th style="width: 40px">Dadu 1</th>
                                        <th style="width: 40px">Nilai 2</th>
                                        <th style="width: 40px">Dadu 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Update software</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-danger">55%</span></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Clean database</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" style="width: 70%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-warning">70%</span></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Cron job running</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-primary" style="width: 30%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary">30%</span></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Fix and squish bugs</td>
                                        <td>
                                            <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-success" style="width: 90%"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success">90%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            -->


                    <div class="row">
                        <div class="col-2">
                            <div class="list-group" id="list-tab" role="tablist">
                                <?php foreach ($jadwal as $jad) : ?>
                                    <a class="list-group-item list-group-item-action" id="list-<?= $jad->no_jadwal ?>-list" data-toggle="list" href="#list-<?= $jad->no_jadwal ?>" role="tab" aria-controls="<?= $jad->no_jadwal ?>"><?= $jad->desa ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="tab-content" id="nav-tabContent">
                                <?php foreach ($jadwal as $jad) : ?>
                                    <div class="tab-pane fade" id="list-<?= $jad->no_jadwal ?>" role="tabpanel" aria-labelledby="list-<?= $jad->no_jadwal ?>-list">
                                        <div class="card">
                                            <div class="card-header text-center">
                                                <h3 class="card-title ">LAPORAN NILAI DESA <?= $jad->desa ?></h3>
                                            </div>
                                            <br>
                                            <?php
                                            $pengg = $this->db->query("SELECT * FROM pengguna WHERE hakakses = 5 ")->result();
                                            ?>
                                            
                                            <?php foreach ($pengg as $pe) : ?>
                                                <div class="card-header border">
                                                    <h3 class="card-title">
                                                        <?php if ($pe->penempatan == 'P1') {
                                                            echo 'Badan Perencanaan Pembangunan Daerah';
                                                        } elseif ($pe->penempatan == 'P2') {
                                                            echo 'BPBD';
                                                        } elseif ($pe->penempatan == 'P3') {
                                                            echo 'Satuan Pamong Praja';
                                                        } elseif ($pe->penempatan == 'P4') {
                                                            echo 'Pemerintahan Desa';
                                                        } elseif ($pe->penempatan == 'P5') {
                                                            echo 'Pemerintahan Masyarakat';
                                                        } elseif ($pe->penempatan == 'P6') {
                                                            echo 'DINAS Kominfo';
                                                        } elseif ($pe->penempatan == 'P7') {
                                                            echo 'DINAS Kebudayaan dan Pariwisata';
                                                        } elseif ($pe->penempatan == 'P8') {
                                                            echo 'DINAS Tenaga Kerja';
                                                        } elseif ($pe->penempatan == 'P9') {
                                                            echo 'DINAS Pendidikan Pemuda dan Olahraga';
                                                        } elseif ($pe->penempatan == 'P10') {
                                                            echo 'DINAS Kesehatan';
                                                        } elseif ($pe->penempatan == 'P11') {
                                                            echo 'DINAS Sosial P3AP2KB';
                                                        }
                                                        ?>
                                                    </h3>
                                                </div>


                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 10px">#</th>
                                                                <th>Kriteria</th>
                                                                <th style="width: 40px">Nilai 1</th>
                                                                <th style="width: 40px">Dadu 1</th>
                                                                <th style="width: 40px">Nilai 2</th>
                                                                <th style="width: 40px">Dadu 2</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $krinilai = $this->db->query("SELECT * FROM nilai JOIN kriteria_penilaian ON nilai.id_kriteria = kriteria_penilaian.id_kriteria WHERE nilai.no_jadwal = $jad->no_jadwal AND kriteria_penilaian.kategori = '$pe->penempatan'")->result();
                                                            ?>
                                                            <?php $no = 1;
                                                            foreach ($krinilai as $ki) : ?>
                                                                <tr>
                                                                    <td style="width: 10px"><?= $no++ ?></td>
                                                                    <td><?= $ki->judul ?></td>
                                                                    <td><?= $ki->nilai1 ?></td>
                                                                    <td><?= $ki->dadu1 ?></td>
                                                                    <td><?= $ki->nilai2 ?></td>
                                                                    <td><?= $ki->dadu2 ?></td>
                                                                </tr>
                                                            <?php endforeach; ?>

                                                            <tr>
                                                                <?php
                                                                $jumnilai = $this->db->query("SELECT SUM(nilai1) as nilai1, SUM(dadu1) as dadu1, SUM(nilai2) as nilai2, SUM(dadu2) as dadu2 FROM nilai JOIN kriteria_penilaian ON nilai.id_kriteria = kriteria_penilaian.id_kriteria WHERE nilai.no_jadwal = $jad->no_jadwal AND kriteria_penilaian.kategori = '$pe->penempatan'");
                                                                $jumnil = $jumnilai->row();

                                                                ?>
                                                                <td style="width: 10px"></td>
                                                                <td>Jumlah</td>
                                                                <td><?= $jumnil->nilai1; ?></td>
                                                                <td><?= $jumnil->dadu1; ?></td>
                                                                <td><?= $jumnil->nilai2; ?></td>
                                                                <td><?= $jumnil->dadu2; ?></td>
                                                            </tr>
                                                            <tr>

                                                                <?php
                                                                $totnilai = $this->db->query("SELECT SUM(nilai.nilai1 + nilai.nilai2) as nilai12, SUM(nilai.dadu1 + nilai.dadu2) as dadu12 FROM nilai JOIN kriteria_penilaian ON nilai.id_kriteria = kriteria_penilaian.id_kriteria WHERE nilai.no_jadwal = $jad->no_jadwal AND kriteria_penilaian.kategori = '$pe->penempatan'");
                                                                $totnil = $totnilai->row();

                                                                ?>
                                                                <td style="width: 10px"></td>
                                                                <td>Total</td>
                                                                <td colspan="2"> Nilai : <?= $totnil->nilai12; ?></td>
                                                                <td colspan="2"> Dadu : <?= $totnil->dadu12; ?></td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <br><br>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
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