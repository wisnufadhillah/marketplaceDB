<div class="container">
    <h5>Tambah Produk</h5>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="">Kategori</label>
            <select class="form-control form-select" name="id_kategori">
                <option value="">Pilih Kategori</option>
                <?php foreach ($kategori as $k => $v) : ?>
                <option value="<?php echo $v["id_kategori"] ?>"><?php echo $v["nama_kategori"] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" name="nama_produk" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Harga</label>
            <input type="number" name="harga_produk" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Berat</label>
            <input type="number" name="berat_produk" class="form-control">
            <span class="text-muted small">Gram</span>
        </div>
        <div class="mb-3">
            <label for="">Foto</label>
            <input type="file" name="foto_produk" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Deskripsi</label>
            <textarea name="deskripsi_produk" class="form-control"></textarea>
        </div>
        <button class="btn btn-primary">Simpan</button>
    </form>
</div>