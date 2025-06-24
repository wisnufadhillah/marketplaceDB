<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('welcome') ?>" method="post">
                    <div class="mb-3">
                        <label for="">Username</label>
                        <input type="text" name="email_member" class="form-control"
                            value="<?php echo set_value('email_member') ?>">
                        <div class="text-danger small">
                            <?php echo form_error('email_member') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password_member" class="form-control"
                            value="<?php echo set_value('password_member') ?>">
                        <div class="text-danger small">
                            <?php echo form_error('password_member') ?>
                        </div>
                    </div>
                    <button class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>


<footer class="bg-light text-center py-3 mt-5">
    <div class="">copyright &copy; 2024. Amikom</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>
<script>
new DataTable('#tabelku');
</script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php if ($this->session->flashdata('pesan_sukses')) : ?>
<script>
swal("Sukses!", "<?php echo $this->session->flashdata('pesan_sukses'); ?>", "success");
</script>
<?php endif; ?>
<?php if ($this->session->flashdata('pesan_gagal')) : ?>
<script>
swal("Gagal !", "<?php echo $this->session->flashdata('pesan_gagal'); ?>", "error");
</script>
<?php endif; ?>
</body>

</html>