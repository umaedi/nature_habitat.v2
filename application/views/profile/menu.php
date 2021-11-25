<?php
$order = $this->db->get_where('invoice', ['user' => $this->session->userdata('id'), 'status !=' => 4]);
?>

<div class="list-group">
  <a href="<?= base_url(); ?>profile" class="list-group-item list-group-item-action">Dashboard</a>
  <?php if ($order->num_rows() > 0) { ?>
    <a href="<?= base_url(); ?>profile/transaction" class="list-group-item list-group-item-action">Transaction <span class="badge badge-info"><?= $order->num_rows(); ?></span></a>
  <?php } else { ?>
    <a href="<?= base_url(); ?>profile/transaction" class="list-group-item list-group-item-action">Transaction</a>
  <?php } ?>
  <a href="<?= base_url(); ?>profile/histories" class="list-group-item list-group-item-action">Transaction History</a>
  <a href="<?= base_url(); ?>profile/edit-profile" class="list-group-item list-group-item-action">Edit Profile</a>
  <a href="<?= base_url(); ?>profile/change-password" class="list-group-item list-group-item-action">Change Password</a>
  <a href="#" data-toggle="modal" data-target="#logoutModal" class="list-group-item list-group-item-action">Logout</a>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-sm btn-info" href="<?= base_url(); ?>logout">Logout</a>
      </div>
    </div>
  </div>
</div>