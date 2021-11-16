<div class="container-fluid">

    <h4 class="mb-2">Tambah kupon</h4>

    <div class="card shadow">
        <div class="card-body">
            <?php echo $this->session->flashdata('failed'); ?>
            <form action="<?= base_url(); ?>administrator/coupon/add" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" autocomplete="off" id="name" required>
                        </div>  
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="code">Kode Kupon</label>
                            <input type="text" class="form-control" name="code" autocomplete="off" id="code" required>
                        </div>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="date">Masa Berlaku</label>
                            <input type="date" class="form-control" name="dated" autocomplete="off" id="date" required>
                        </div>  
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="min">Minimal Order</label>
                            <input type="number" placeholder="Misal: 30000" class="form-control" name="min" autocomplete="off" id="min" required>
                        </div>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="type">Limit per User</label>
                            <input type="number" class="form-control" name="limit_user" autocomplete="off" id="limit_user" required>
                        </div>  
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="discount">Nilai Diskon</label>
                            <input type="number" class="form-control" name="discount" autocomplete="off" id="discount" required>
                        </div>  
                    </div>
                </div>
                <button type="submit" class="btn mr-2 btn-primary px-4">SIMPAN</button>
                <a href="<?= base_url(); ?>administrator/coupon" class="btn btn-danger px-4">BATAL</a>
            </form>
        </div>
    </div>
</div>