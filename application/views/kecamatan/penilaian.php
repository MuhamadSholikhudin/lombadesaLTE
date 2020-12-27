<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <!-- <h1 class="m-0 text-dark">HALAMAN </h1> -->
                </div><!-- /.col -->

                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DATA PENILAIN LOMBA</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class=" table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px" rowspan="2">#</th>
                                        <th rowspan="2">Bidang</th>
                                        <?php foreach ($pengajuan as $peng) :
                                        ?>
                                            <th colspan="4"><?= $peng->desa ?></th>
                                        <?php endforeach;     ?>
                                    </tr>

                                    <tr>
                                        
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