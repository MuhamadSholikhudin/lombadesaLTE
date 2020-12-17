<div class="container">

    <br>
    <table class="table table-border">
        <tr>
            <th>NO</th>
            <th>Id_pendaftaran</th>
            <th>Kecamatan</th>
            <th>Desa</th>
            <th>Status</th>
            <th>Tahun</th>
            <th colspan="2" class="text-center">Aksi</th>
        </tr>


        <?php $no = 1; ?>
        <?php foreach ($penjadwalan as $penja) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $penja->no_daftar ?></td>
                <td><?= $penja->kecamatan ?></td>
                <td><?= $penja->desa ?></td>
                <td><?= $penja->status_penjadwalan ?></td>
                <td><?= $penja->tahun ?></td>
                <?php
                if ($penja->tgl_jadwal != 0000 - 00 - 00) {
                ?>
                    <td><?= $penja->tgl_jadwal ?></td>
                    <td class="text-center">
                        <?= anchor('stafpmd/pendaftaran/edit/' . $penja->no_hasilajuan, '<div class="btn btn-warning btn-btn-sm" data-toggle="tooltip" data-placement="top" title="Dikembalikan">
                        <i class="fas fa-window-close"></i>Kembalikan </div>') ?>
                    </td>

                <?php   } elseif ($penja->tgl_jadwal == 0000 - 00 - 00) {
                ?>
                    <td class="text-center">
                        <a href="<?= base_url('stafpmd/penjadwalan/updatejadwal/' . $penja->no_jadwal)?>">Update Tanggal</a>
                    </td>
                    <td class="text-center">
                        <?= anchor('stafpmd/penjadwalan/hapusjadwal/' . $penja->no_hasilajuan, '<button  class="btn btn-danger btn-btn-sm" data-toggle="tooltip" data-placement="top" title="hapus ajuan">
                        <i class="fas fa-trash"></i>Hapus </button>') ?>
                    </td>
                <?php   }

                ?>


            </tr>
        <?php endforeach; ?>
    </table>
</div>