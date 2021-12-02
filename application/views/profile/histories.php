<?php echo $this->session->flashdata('success'); ?>
<div class="wrapper">
    <?php include 'menu.php'; ?>
    <div class="core">
        <h2 class="title">Transaction History</h2>
        <hr>
        <?php if ($finish->num_rows() > 0) { ?>
            <table class="table table-bordered">
                <tr>
                    <th>Order ID</th>
                    <th>Order Date</th>
                    <th>Total payment</th>
                    <th>#</th>
                </tr>
                <?php foreach ($finish->result_array() as $d) : ?>
                    <tr>
                        <td><?= $d['invoice_code']; ?></td>
                        <td><?= $d['date_input']; ?></td>
                        <td>Rp<?= number_format($d['total_all'], 0, ",", "."); ?></td>
                        <td><small><a href="<?= base_url(); ?>profile/transaction/<?= $d['invoice_code']; ?>" class="text-info">Detail</a></small></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php } else { ?>
            <div class="alert alert-warning">No orders. Let's go shopping.</div>
        <?php } ?>
    </div>
</div>