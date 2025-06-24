<div class="container">
    <h5>Edit Slider</h5>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="">Caption slider</label>
            <textarea name="caption_slider" id="editorku"
                class="form-control"><?php echo set_value('caption_slider', $slider["caption_slider"]) ?></textarea>
            <span class="small text-danger"><?php echo form_error('caption_slider') ?></span>
        </div>
        <div class="mb-3">
            <label>Foto Lama</label><br>
            <img src="<?php echo $this->config->item("url_slider") . $slider["foto_slider"] ?>" alt="" width="300">
        </div>
        <div class="mb-3">
            <label for="">Ganti Foto slider</label>
            <input type="file" name="foto_slider" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>