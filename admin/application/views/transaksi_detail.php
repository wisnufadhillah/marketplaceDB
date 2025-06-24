<div class="container">
    <div class="row mb-5">
        <div class="col-md-3">
            <h5>Transaksi</h5>
            <p>ID: <?php echo $transaksi["id_transaksi"] ?></p>
            <p><?php echo date("d M Y H:i", strtotime($transaksi["tanggal_transaksi"])) ?></p>
            <span class="badge bg-primary"><?php echo $transaksi["status_transaksi"] ?></span>
        </div>
        <div class="col-md-3">
            <h5>Pengirim</h5>
            <p><?php echo $transaksi["nama_pengirim"] ?>, <?php echo $transaksi["wa_pengirim"] ?></p>
            <p><?php echo $transaksi["alamat_pengirim"] ?>, <?php echo $transaksi["distrik_pengirim"] ?></p>
        </div>
        <div class="col-md-3">
            <h5>Penerima</h5>
            <p><?php echo $transaksi["nama_penerima"] ?>, <?php echo $transaksi["wa_penerima"] ?></p>
            <p><?php echo $transaksi["alamat_penerima"] ?>, <?php echo $transaksi["distrik_penerima"] ?></p>
        </div>
        <div class="col-md-3">
            <h5>Ekspedisi</h5>
            <p><?php echo $transaksi["nama_ekspedisi"] ?>, <?php echo $transaksi["layanan_ekspedisi"] ?></p>
            <p><?php echo $transaksi["estimasi_ekspedisi"] ?>, <?php echo $transaksi["berat_ekspedisi"] ?> Gr</p>
        </div>
    </div>

    <h5>Produk</h5>
    <table class="table">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transaksi_detail as $k => $v) : ?>
                <tr>
                    <td><?php echo $v["nama_beli"] ?></td>
                    <td><?php echo $v["harga_beli"] ?></td>
                    <td><?php echo number_format($v["jumlah_beli"]) ?></td>
                    <td><?php echo number_format($v["harga_beli"] * $v["jumlah_beli"]) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Total Belanja</td>
                <th><?php echo number_format($transaksi["belanja_transaksi"])?></th>
            </tr>
            <tr>
                <td colspan="3">Ongkos Kirim</td>
                <th><?php echo number_format($transaksi["ongkir_transaksi"])?></th>
            </tr>
            <tr>
                <td colspan="3">Total Harus dibayar</td>
                <th><?php echo number_format($transaksi["total_transaksi"])?></th>
            </tr>
        </tfoot>
    </table>
</div>