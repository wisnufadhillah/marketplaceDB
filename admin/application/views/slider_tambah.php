<div class="container">
    <h5>Tambah Slider</h5>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="">Caption slider</label>
            <textarea type="text" id="editorku" name="caption_slider"
                class="form-control"><?php echo set_value('caption_slider') ?></textarea>
            <span class="small text-danger">
                <?php echo form_error('caption_slider') ?>
            </span>
        </div>
        <div class="mb-3">
            <label for="">Foto slider</label>
            <input type="file" name="foto_slider" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>