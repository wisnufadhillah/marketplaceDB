<div class="container">
    <h5>Edit Kategori</h5>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="">Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control" value="<?php echo set_value('nama_kategori', $kategori["nama_kategori"]) ?>">
            <span class="small text-danger"><?php echo form_error('nama_kategori') ?></span>
        </div>
        <div class="mb-3">
            <label>Foto Lama</label><br>
            <img src="<?php echo $this->config->item("url_kategori"). $kategori["foto_kategori"] ?>" alt="" width="300">
        </div>
        <div class="mb-3">
            <label for="">Ganti Foto Kategori</label>
            <input type="file" name="foto_kategori" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>