<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">PENILAIAN
                        <?php if ($this->session->userdata('penempatan') == "P1") {
                            echo 'Badan Perencanaan Pembangunan Daerah';
                        } elseif ($this->session->userdata('penempatan') === 'P2') {
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
                        } else {
                            echo $this->session->userdata('penempatan');
                        }
                        ?>
                    </h1>
                    <?= $this->session->flashdata('message'); ?>

                    <br>
                    <div class="callout callout-success alert-danger ">
                        <h5>Perhatian !</h5>
                        <p>
                            Data Dukung yang dipakai adalah data berkas selama dua tahun ke belakang yaitu berkas tahun <?php echo date('Y') - 1; ?>  dan <?php echo date('Y') - 2; ?>.
                        </p>
                    </div>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Form Penilaian Desa&nbsp;<?php foreach ($namadesa as $de) : echo $de->desa;
                                                                            endforeach; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body p-0">
                            <form action="<?= base_url('tim_penilai/penilaian/edit_aksi/') ?>" enctype="multipart/form-data" method="POST">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">NO</th>
                                            <th>Judul Kriterian Penilaia</th>
                                            <th>Nilai maks</th>
                                            <th>Th <?= date('Y') - 2; ?></th>
                                            <th>Dadu <?= date('Y') - 2; ?></th>
                                            <th>Th <?= date('Y') - 1; ?></th>
                                            <th>Dadu <?= date('Y') - 1; ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($njadwal as $njd) : ?>
                                            <input class="form-control" type="hidden" name="no_jadwal" value="<?= $njd->no_jadwal; ?>">
                                        <?php endforeach; ?>
                                        <?php $no = 1; ?>
                                        <?php foreach ($nilai as $nil) : ?>
                                            <tr>
                                                <td style="width: 5px"><?= $no; ?></td>
                                                <td><?= $nil->judul; ?></td>
                                                <td><?= $nil->nilai_maks; ?></td>
                                                <td class="d-none">
                                                    <input class="form-control" type="hidden" name="id_nilai[]" value="<?= $nil->id_nilai; ?>">
                                                </td>
                                                <td style="width: 70px">
                                                    <input class="form-control" type="number" name="nilai1[]" min="1" max="<?= $nil->nilai_maks; ?>" value="<?= $nil->nilai1; ?>">
                                                </td>
                                                <td style="width: 70px">
                                                    <input class="form-control" type="number" name="dadu1[]" min="1" max="5" value="<?= $nil->dadu1; ?>" data-toggle="tooltip" data-html="true" title="Isi dengan angka, bilamana data dukung</br>1 : Sangat tidak menyakinkan</br>2 : Tidak Menyakinkan</br>3 : Ragu-ragu</br>4 : Menyakinkan</br>5 : Sangat Menyakinkan">
                                                </td>
                                                <td style="width: 70px">
                                                    <input class="form-control" type="number" name="nilai2[]" min="1" max="<?= $nil->nilai_maks; ?>" value="<?= $nil->nilai2; ?>">
                                                </td>
                                                <td style="width: 80px">
                                                    <input class="form-control" type="number" name="dadu2[]" min="1" max="5" value="<?= $nil->dadu2; ?>" data-toggle="tooltip" data-html="true" title="Isi dengan angka, bilamana data dukung</br>1 : Sangat tidak menyakinkan</br>2 : Tidak Menyakinkan</br>3 : Ragu-ragu</br>4 : Menyakinkan</br>5 : Sangat Menyakinkan">
                                                </td>
                                            </tr>
                                            <?php $no++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                                </div>
                            </form>
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
</div>