<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Detail Produk
        </div>
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img class="card-img-top" src="<?= base_url('uploads/') . $brg->gambar ?>" alt="" srcset="">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Barang</td>
                                <td><strong><?= $brg->nama_brg; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?= $brg->keterangan; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><strong><?= $brg->kategori; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><strong><?= $brg->stok; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><strong>Rp. <?= number_format($brg->harga, 0, ',', '.'); ?></strong></td>
                            </tr>
                        </table>
                        <?= anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">+ Keranjang</div>'); ?>
                        <?= anchor('dashboard/index', '<div class="btn btn-sm btn-danger">Kembali</div>'); ?>

                    </div>
                <?php endforeach; ?>
                </div>

        </div>
    </div>
</div>