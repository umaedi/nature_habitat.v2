<?php
$order = $this->db->get_where('invoice', ['user' => $this->session->userdata('id'), 'status !=' => 4]);
$order_finish = $this->db->get_where('invoice', ['user' => $this->session->userdata('id'), 'status' => 4]);
?>
<div class="wrapper">
    <?php include 'menu.php'; ?>
    <div class="core">
        <div class="alert alert-secondary">Welcome to the Dashboard Page</div>
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-sm h-100 py-2">
                    <div class="card-body">
                        <div class="font-weight-bold text-dark text-uppercase mb-0"><?= $order->num_rows(); ?> Transaksi</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm h-100 py-2">
                    <div class="card-body">
                        <div class="font-weight-bold text-dark text-uppercase mb-0"><?= $order_finish->num_rows(); ?> Transaction History</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        If you have any questions please contact whatsapp <?= $this->Settings_model->general()["whatsapp"]; ?> or <a href="https://wa.me/<?= $this->Settings_model->general()["whatsappv2"]; ?>" target="_blank">Click here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>