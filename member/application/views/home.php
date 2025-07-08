<div class="container">
    <h5>Selamat datang <?php echo $this->session->userdata('nama_member') ?></h5>
    <p class="lead">
        Melalui panel ini Anda dapat mengelola produk yang anda jual dan juga yang anda beli
    </p>



    <div class="row">
        <div class="col-md-3">
            <div class="card text-bg-primary mb-3">
                <div class="card-header">Produk</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo count($produk) ?></h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-bg-secondary mb-3">
                <div class="card-header">Pembelian</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo count($beli) ?></h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-bg-success mb-3">
                <div class="card-header">Penjualan</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo count($jual) ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>