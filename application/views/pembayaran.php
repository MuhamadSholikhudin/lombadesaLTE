<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <div >
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h2 class='btn btn-sm btn-success'>Total Belanja Anda Adalah : Rp. " . number_format($grand_total, 0, ',', '.');
                    echo "</h2>";
                

                ?>
                <br><br>
                <h3>Input Alamat Pengiriman dan Pembayaran</h3>
                <form action="<?= base_url('dashboard/proses_pesanan'); ?>" method="post">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input type="text" class="form-control" name="alamat" id="" placeholder="Alamat Lengkap Anda">
                    </div>
                    <div class="form-group">
                        <label>Nomer Telephone</label>
                        <input type="text" class="form-control" name="no_telp" id="" placeholder="Nomer Telephone Anda">
                    </div>
                    <div class="form-group">
                        <label>Jasa Pengiriman</label>
                        <select name="" id="" class="form-control">
                            <option value="JNE">JNE</option>
                            <option value="TIKI">TIKI</option>
                            <option value="POS Indonesia">POS Indonesia</option>
                            <option value="Gojek">Gojek</option>
                            <option value="Grab">Grab</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pilih Bank</label>
                        <select name="" id="" class="form-control">
                            <option value="BCA">BCA - xxxxx</option>
                            <option value="BRI">BRI - xxxx</option>
                            <option value="BNI">BNI - xxxx</option>
                            <option value="MAndiri">MAndiri - xxxx</option>
                        </select>
                    </div>
                    <button class="btn btn-sm btn-primary" type="submit">Pesan</button>
                </form>

            <?php }else {
                    echo "Belanja Anda masih Kosong";
                }?>
            </div>
        </div>


        <div class="col-md-2">

        </div>
    </div>
</div>