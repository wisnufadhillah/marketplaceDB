<style>
.stars a {
    display: inline-block;
    padding-right: 4px;
    text-decoration: none;
    margin: 0;
}

.stars a:after {
    position: relative;
    font-size: 18px;
    font-family: 'FontAwesome', serif;
    display: block;
    content: "\f005";
    color: #9e9e9e;
}

span {
    font-size: 0;
}

.stars a:hover~a:after {
    color: #9e9e9e !important;
}

span.active a.active~a:after {
    color: #9e9e9e;
}

span:hover a:after {
    color: blue !important;
}

span.active a:after,
.stars a.active:after {
    color: blue;
}
</style>

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
            <p><?php echo $transaksi["estimasi_ekspedisi"] ?>, <?php echo $transaksi["berat_ekspedisi"] ?> Gram</p>
            <h6>Resi : <?php echo $transaksi["resi_ekspedisi"] ?></h6>
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
                <th><?php echo number_format($transaksi["belanja_transaksi"]) ?></th>
            </tr>
            <tr>
                <td colspan="3">Ongkos Kirim</td>
                <th><?php echo number_format($transaksi["ongkir_transaksi"]) ?></th>
            </tr>
            <tr>
                <td colspan="3">Total Harus dibayar</td>
                <th><?php echo number_format($transaksi["total_transaksi"]) ?></th>
            </tr>
        </tfoot>
    </table>
    <?php if (!empty($cekmidtrans)): ?>
    <div class="row">
        <div class="col-md-4">
            <table class="table table-sm">
                <tr>
                    <td>Total Tagihan</td>
                    <td><?php echo $cekmidtrans['gross_amount']; ?></td>
                </tr>
                <tr>
                    <td>Tipe Pembayaran</td>
                    <td><?php echo $cekmidtrans['payment_type']; ?></td>
                </tr>
                <tr>
                    <td>Status Pembayaran</td>
                    <td>
                        <?php echo $cekmidtrans['transaction_status']; ?> <br>
                        <?php if ($cekmidtrans['transaction_status'] == "pending"): ?>
                        Segera Lakukan Pembayaran Sebelum Waktu Habis
                        <?php endif ?>
                    </td>
                </tr>
                <tr>
                    <td>Nomor VA</td>
                    <td><?php echo $cekmidtrans['bill_key']; ?></td>
                </tr>
                <tr>
                    <td>Kode VA</td>
                    <td><?php echo $cekmidtrans['biller_code']; ?></td>
                </tr>
                <tr>
                    <td>Waktu Transaksi</td>
                    <td><?php echo $cekmidtrans['transaction_time']; ?></td>
                </tr>
                <tr>
                    <td>Batas Akhir Pembayaran</td>
                    <td><?php echo $cekmidtrans['expiry_time']; ?></td>
                </tr>

            </table>
        </div>
    </div>

    <?php endif ?>

</div>

<?php if (!empty($snapToken)): ?>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-W0jX0zkaIzPZPCKY"></script>
<script type="text/javascript">
$(document).ready(function() {
    snap.pay('<?php echo $snapToken ?>', {
        onSuccess: function(result) {
            window.location.href =
                "<?php echo base_url('transaksi/detail/' . $transaksi['id_transaksi']) ?>"
            //document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        },
        onPending: function(result) {
            window.location.href =
                "<?php echo base_url('transaksi/detail/' . $transaksi['id_transaksi']) ?>"
            // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        },
        onError: function(result) {
            window.location.href =
                "<?php echo base_url('transaksi/detail/' . $transaksi['id_transaksi']) ?>"
            // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        }
    });
})
</script>
<?php endif ?>



<?php if ($transaksi['status_transaksi'] == "lunas"): ?>
<form action="" method="post">
    <div class="container">
        <h6 class="mt-5 mb-3">Beri Ulasan!</h6>

        <?php $belumdiisi = 0; ?>
        <?php foreach ($transaksi_detail as $k => $v) : ?>
        <?php if (empty($v['jumlah_rating'])): ?>
        <?php $belumdiisi++ ?>
        <div>
            <h6 class="mb-2">
                <?php echo $v['nama_beli'] ?>
            </h6>
            <p class="stars" k="<?php echo $k ?>">
                <span k="<?php echo $k ?>">
                    <a k="<?php echo $k ?>" class=" star-1" href="#">1</a>
                    <a k="<?php echo $k ?>" class="star-2" href="#">2</a>
                    <a k="<?php echo $k ?>" class="star-3" href="#">3</a>
                    <a k="<?php echo $k ?>" class="star-4" href="#">4</a>
                    <a k="<?php echo $k ?>" class="star-5" href="#">5</a>
                </span>
            </p>
            <input type="hidden" name="id_transaksi_detail[]" value="<?php echo $v['id_transaksi_detail'] ?>">
            <input type="hidden" class="jrt" name="jumlah_rating[]" id="" k="<?php echo $k ?>">
            <textarea name="ulasan_rating[]" id="" class="form-control"></textarea>
        </div>
        <hr>
        <?php endif ?>

        <?php if (!empty($v['jumlah_rating'])): ?>
        <h6><?php echo $v['nama_beli'] ?></h6>

        <?php foreach (range(1, $v['jumlah_rating']) as $kuy => $jum): ?>
        <i class="bi bi-star-fill text-warning"></i>
        <?php endforeach ?>

        <div class="bg-light small text-muted">
            <?php echo $v['ulasan_rating'] ?>
        </div>
        <hr>
        <?php endif ?>

        <?php endforeach ?>
        <?php if ($belumdiisi > 0): ?>
        <button class="btn btn-primary">Kirim</button>
        <?php endif ?>
    </div>
</form>
<?php endif ?>

<script>
$('.stars a').on('click', function(e) {
    e.preventDefault();
    k = $(this).attr('k');
    $('.stars span[k="' + k + '"], .stars a[k="' + k + '"]').removeClass('active');

    $(this).addClass('active');
    $('.stars span[k="' + k + '"]').addClass('active');
    $('.jrt[k="' + k + '"]').val($(this).text());
});
</script>