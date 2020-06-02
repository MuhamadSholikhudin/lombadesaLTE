<div class="container">

    <br>
    <table class="table table-border">
        <tr>
            <th>NO</th>
            <th>Id_pendaftaran</th>
            <th>Judul</th>
            <th>Kecamatan</th>
            <th>Desa</th>
            <th>Status</th>
            <th>Tahun</th>
            <th colspan="2" class="text-center">Aksi</th>
        </tr>


        <?php $no = 1; ?>
        <?php foreach ($pengajuan as $penga) : ?>


            <tr>

                <td><?= $no++ ?></td>

                <td>
                    <form action="<?= base_url('stafpmd/pendaftaran/diterima/' . $penga->no_hasilajuan) ?>" method="post">
                        <input type="hidden" name="no_hasilajuan" id="" value="<?= $penga->no_hasilajuan ?>">
                        <input type="hidden" name="kecamatan" id="" value="<?= $penga->kecamatan ?>">
                        <input type="hidden" name="desa" id="" value="<?= $penga->desa ?>">
                        <input type="hidden" name="tahun" id="" value="<?= $penga->tahun ?>">
                </td>
                <td><?= $penga->judul ?></a></td>
                <td><?= $penga->kecamatan ?></td>
                <td><?= $penga->desa ?></td>
                <?php
                if ($penga->status_ajuan == 2) {
                ?>
                    <td><?= $penga->status_ajuan ?></td>
                    <td><?= $penga->tahun ?></td>
                    <td class="text-center">
                        <?= anchor('stafpmd/pendaftaran/edit/' . $penga->no_hasilajuan, '<div class="btn btn-warning btn-btn-sm" data-toggle="tooltip" data-placement="top" title="Dikembalikan">
                        <i class="fas fa-window-close"></i> </div>') ?>
                    </td>

                <?php   } elseif ($penga->status_ajuan == 1) {
                ?>
                    <td><?= $penga->status_ajuan ?></td>
                    <td><?= $penga->tahun ?></td>
                    <td class="text-center">

                        <?= anchor('stafpmd/pendaftaran/diterima/' . $penga->no_hasilajuan, '<div class="btn btn-primary btn-btn-sm"  data-toggle="tooltip" data-placement="top" title="Diterima">
                        <i class="fas fa-check" ></i> </div>') ?>
                    </td>
                    <td class="text-center">
                        <?= anchor('stafpmd/pendaftaran/dikembalikan/' . $penga->no_hasilajuan, '<button type="submit" class="btn btn-success btn-btn-sm" data-toggle="tooltip" data-placement="top" title="Dikembalikan">
                        <i class="fas fa-undo"></i> </button>') ?>
                    </td>
                <?php   }

                ?>
                </form>

            </tr>
        <?php endforeach; ?>
    </table>
</div>