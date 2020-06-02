<div class="container-fluid">
    <h4>keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>

        <?php
        $no = 1;
        foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $items['name']; ?></td>
                <td><?= $items['qty']; ?></td>
                <td>Rp:- <?= number_format($items['price'], 0, ',', '.'); ?>,00</td>
                <td>Rp:- <?= number_format($items['subtotal'], 0, ',', '.'); ?>,00</td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3"></td>
            <td>Total</td>

            <td>Rp:- <?= number_format($this->cart->total(), 0, ',', '.'); ?>,00</td>
        </tr>
    </table>
    <div class="text-right">
        <a class="btn btn-sm btn-danger" href="<?= base_url('dashboard/hapus_keranjang') ?>">Hapus Keranjang</a>
        <a class="btn btn-sm btn-primary" href="<?= base_url('welcome') ?>">Lanjutkan Belanja</a>
        <a class="btn btn-sm btn-success" href="<?= base_url('dashboard/pembayaran') ?>">Pembayaran</a>
    </div>
</div>