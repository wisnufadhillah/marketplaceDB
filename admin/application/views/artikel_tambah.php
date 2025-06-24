<div class="container">
    <h5>Tambah Artikel</h5>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="">Judul Artikel</label>
            <input type="text" name="judul_artikel" class="form-control"
                value="<?php echo set_value('judul_artikel') ?>">
            <span class="small text-danger">
                <?php echo form_error('judul_artikel') ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="">Isi Artikel</label>
            <textarea type="text" id="editorku" name="isi_artikel"
                class="form-control"><?php echo set_value('isi_artikel') ?></textarea>
            <span class="small text-danger">
                <?php echo form_error('isi_artikel') ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="">Foto Artikel</label>
            <input type="file" name="foto_artikel" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>