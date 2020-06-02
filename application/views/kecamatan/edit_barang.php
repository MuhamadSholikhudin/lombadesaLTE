<div class="container-fluid">



        <h3> <i class="fas fa-edit"></i> Edit Data Barang</h3>

        <?php foreach ($barang as $brg) : ?>
            <form action="<?= base_url('admin/data_barang/update'); ?>" method="post">
                <div class="for-group">
                    <label for="nama_brg"></label>
                    <input type="text" class="form-control" name="nama_brg" id="nama_brg" value="<?= $brg->nama_brg ?>">
                    <input type="hidden"  name="id_brg" id="nama_brg" value="<?= $brg->id_brg ?>">
                </div>
                <div class="for-group">
                    <label for="keterangan"></label>
                    <input type="text" class="form-control" name="keterangan" id="keterangan" value="<?= $brg->keterangan ?>">
                </div>
                <div class="for-group">
                    <label for="kategori"></label>
                    <input type="text" class="form-control" name="kategori" id="kategori" value="<?= $brg->kategori ?>">
                </div>
                <div class="for-group">
                    <label for="harga"></label>
                    <input type="text" class="form-control" name="harga" id="harga" value="<?= $brg->harga ?>">
                </div>
                <div class="for-group">
                    <label for="stok"></label>
                    <input type="text" class="form-control" name="stok" id="stok" value="<?= $brg->stok ?>">
                </div>
                <button class="btn btn-primary btn--sm mt-3" type="submit">Simpan</button>
            </form>

        <?php endforeach; ?>

</div>