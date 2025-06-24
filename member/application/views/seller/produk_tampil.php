<div class="container">
    <h5>Produk Jual <?php echo $this->session->userdata("nama_member") ?></h5>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Produk</th>
                <th>Harga</th>
                <th>Berat</th>
                <th>Foto</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produk as $k => $v) : ?>
            <tr>
                <td><?php echo $k+1?></td>
                <td><?php echo $v['nama_produk']?></td>
                <td><?php echo $v['harga_produk']?></td>
                <td><?php echo $v['berat_produk']?></td>
                <td>
                    <img src="<?php echo $this->config->item("url_produk").$v["foto_produk"]?>" alt="" width="200">
                </td>
                <td>
                    <a href="<?php echo base_url("seller/produk/edit/".$v["id_produk"])?>"
                        class="btn btn-warning">Edit</a>
                    <a href="<?php echo base_url("seller/produk/hapus/".$v["id_produk"])?>"
                        class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?php echo base_url("seller/produk/tambah")    ?>" class="btn btn-primary">Tambah</a>
</div>