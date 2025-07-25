<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h5>Regitrasi Member Baru</h5>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email_member" id="" class="form-control"
                        value="<?php echo set_value('email_member') ?>">
                    <span class="text-muted"><?php echo form_error('email_member') ?></span>
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" name="password_member" id="" class="form-control"
                        value="<?php echo set_value('password_member') ?>">
                    <span class="text-muted"><?php echo form_error('password_member') ?></span>
                </div>
                <div class="mb-3">
                    <label for="">Nama</label>
                    <input type="text" name="nama_member" id="" class="form-control"
                        value="<?php echo set_value('nama_member') ?>">
                    <span class="text-muted"><?php echo form_error('nama_member') ?></span>
                </div>
                <div class="mb-3">
                    <label for="">WA</label>
                    <input type="text" name="wa_member" id="" class="form-control"
                        value="<?php echo set_value('wa_member') ?>">
                    <span class="text-muted"><?php echo form_error('wa_member') ?></span>
                </div>


                <div class="mb-3">
                    <label for="">Alamat</label>
                    <span class="text-muted"><?php echo form_error('alamat_member') ?></span>
                    <textarea name="alamat_member"
                        class="form-control"><?php echo set_value('alamat_member') ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Cari Kelurahan Kecamatan Kabupaten</label>
                    <div class="input-group">
                        <input type="text" class="form-control cari"
                            placeholder="Ketik nama kelurahan/kecamatan/kabupaten">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-primary btn-cari">Cari</button>
                        </div>
                    </div>
                </div>


                <div class="mb-3">
                    <label>Kota/Kabupaten</label>
                    <select name="kode_distrik_member" class="form-control form-select" required></select>
                    <span class="text-muted"><?php echo form_error('kode_distrik_member') ?></span>
                </div>
                <input type="hidden" name="nama_distrik_member" required>
                <button class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $(document).on('click', '.btn-cari', function(e) {
            e.preventDefault();
            var keyword = $('.cari').val();
            $.ajax({
                type: 'post',
                data: 'keyword=' + keyword,
                url: '<?php echo base_url('register/cari_distrik') ?>',
                success: function(hasil) {
                    console.log(hasil);
                    $("select[name=kode_distrik_member]").html(hasil);
                }
            })
        })

        $(document).on("change", "select[name='kode_distrik_member']", function() {
            var terpilih = $("option:selected", this).html();

            $("input[name=nama_distrik_member]").val(terpilih);
        });

    })
    </script>