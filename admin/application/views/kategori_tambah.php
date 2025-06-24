<div class="container">
    <h5>Tambah Kategori</h5>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="">Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control" value="<?php echo set_value('nama_kategori') ?>">
            <span class="small text-danger">
                <?php echo form_error('nama_kategori') ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="">Foto Kategori</label>
            <input type="file" name="foto_kategori" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>