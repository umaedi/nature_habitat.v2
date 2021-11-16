<?php if ($this->session->userdata('login')) { ?>
  <?php
  $user = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
  $cart = $this->db->get_where('cart', ['user' => $this->session->userdata('id')]);
  $order = $this->db->get_where('invoice', ['user' => $this->session->userdata('id'), 'status !=' => 4]);
  ?>
<?php } ?>
<?php
$menu = $this->db->get('menu');
$settingss = $this->db->get('settings')->row_array();
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="background-color: <?= $this->Settings_model->general()["navbar_color"]; ?> !important">
  <div class="container">
    <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/images/logo/<?= $settingss['logo']; ?>" class="navbar-brand mr-5 lazyload" alt=" logo" width="150"></a>

    <div class="collapse navbar-collapse ml-3 justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <?php foreach ($menu->result_array() as $m) : ?>
          <?php
          if (substr($m['link'], 0, 4) == "http" || substr($m['link'], 0, 3) == "www") {
            $newlink1 = $m['link'];
          } else {
            $newlink1 = base_url() . $m['link'];
          }
          ?>
          <?php if ($this->Settings_model->getSubMenu($m['id'])->num_rows() > 0) { ?>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $m['title']; ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownCategories<?= $m['id'] ?>">
                <?php foreach ($this->Settings_model->getSubMenu($m['id'])->result_array() as $cat) : ?>
                  <?php
                  if (substr($cat['link'], 0, 4) == "http" || substr($cat['link'], 0, 3) == "www") {
                    $newlink = $cat['link'];
                  } else {
                    $newlink = base_url() . $cat['link'];
                  }
                  ?>
                  <div class="row">
                    <div class="col-6">

                    </div>
                  </div>
                  <a class="dropdown-item" href="<?= $newlink; ?>"><?= $cat['name']; ?></a>
                <?php endforeach; ?>
              </div>
            </li>
          <?php } else { ?>
            <li class="nav-item active">
              <a class="nav-link" href="<?= $newlink1; ?>"><?= $m['title']; ?></a>
            </li>
          <?php } ?>
        <?php endforeach; ?>
      </ul>
      <br>
      <div>
      </div>
    </div>
    <?php if ($this->session->userdata('login')) { ?>
      <a href="<?= base_url(); ?>cart" class="text-light navbar-cart-inform btn btn-sm btn-outline-light">
        <i class="fas fa-shopping-basket"></i>
        <?php if ($cart->num_rows() > 0) { ?>
          Cart(<?= $cart->num_rows(); ?>)
        <?php } else { ?>
          Cart
        <?php } ?>
      </a>
      <br>
      <br>
      <br>
    <?php } ?>

    <?php if (!$this->session->userdata('login')) { ?>
      <div class="for-hidden">
        <i class="btn btn-sm btn-outline-light ml-2" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-search"></i></i>
        <a href="<?= base_url(); ?>login" class="btn btn-sm btn-outline-light ml-2"><i class="fas fa-user"></i></a>
      </div>
    <?php } else { ?>
      <div>
        <i class="btn btn-sm btn-outline-light ml-2" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-search"></i></i>
        <img src="<?= base_url(); ?>assets/images/profile/<?= $user['photo_profile']; ?>" class="photo-profile-mobile" alt="Photo Profile <?= $user['name']; ?>" class="photo" data-toggle="dropdown" id="dropdownPhotoProfileNavbarMobile" aria-haspopup="true" aria-expanded="false">
        <div class="dropdown-menu dropdownPhotoProfileNavbarMobile" aria-labelledby="dropdownPhotoProfileNavbarMobile">
          <a class="dropdown-item" href="<?= base_url(); ?>profile">Dashboard</a>
          <a class="dropdown-item" href="<?= base_url(); ?>cart">
            <?php if ($cart->num_rows() > 0) { ?>
              Cart(<?= $cart->num_rows(); ?>)
            <?php } else { ?>
              Cart
            <?php } ?>
          </a>
          <?php if ($order->num_rows() > 0) { ?>
            <a class="dropdown-item" href="<?= base_url(); ?>profile/transaction">Transaction <small class="badge badge-sm badge-info"><?= $order->num_rows(); ?></small></a>
          <?php } else { ?>
            <a class="dropdown-item" href="<?= base_url(); ?>profile/transaction">Transaction</a>
          <?php } ?>
          <a class="dropdown-item" href="<?= base_url(); ?>profile/histories">Transaction History</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url(); ?>profile/edit-profile">Edit Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url(); ?>logout">Log out</a>
        </div>
      </div>
    <?php } ?>

    <div>
      <a href="#"><i class="fa search-mobile text-light mr-3 fa-search" data-toggle="modal" data-target="#exampleModal"></i></a>
      <i class="fa fa-bars btn-for-dropdown"></i>
    </div>

  </div>
</nav>
<div class="dropdown-mobile-menu" style="background-color: <?= $this->Settings_model->general()["navbar_color"]; ?> !important">
  <?php foreach ($menu->result_array() as $m) : ?>
    <?php if ($this->Settings_model->getSubMenu($m['id'])->num_rows() > 0) { ?>
      <div class="dropdown">
        <a class="dropdown-toggle text-light" id="dropdownMenuButton<?= $m['id'] ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?= $m['title']; ?></a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton<?= $m['id'] ?>">
          <?php foreach ($this->Settings_model->getSubMenu($m['id'])->result_array() as $cat) : ?>
            <?php
            if (substr($cat['link'], 0, 4) == "http" || substr($cat['link'], 0, 3) == "www") {
              $newlink = $cat['link'];
            } else {
              $newlink = base_url() . $cat['link'];
            }
            ?>
            <a class="dropdown-item" href="<?= $newlink; ?>"><?= $cat['name']; ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    <?php } else { ?>
      <?php
      if (substr($m['link'], 0, 4) == "http" || substr($m['link'], 0, 3) == "www") {
        $newlink1 = $m['link'];
      } else {
        $newlink1 = base_url() . $m['link'];
      }
      ?>
      <a href="<?= $newlink1 ?>" class="text-light"><?= $m['title']; ?></a>
    <?php } ?>
  <?php endforeach; ?>
  <div class="mt-3"></div>
  <?php if ($this->session->userdata('login')) { ?>
    <a href="<?= base_url(); ?>profile" class="text-light"><i class="fa fa-user"></i> <?= $user['name']; ?></a>
    <a href="" class="text-light">
      <i class="fa fa-shopping-cart"></i>
      <?php if ($cart->num_rows() > 0) { ?>
        Keranjang(<?= $cart->num_rows(); ?>)
      <?php } else { ?>
        Keranjang
      <?php } ?>
    </a>
    <?php if ($order->num_rows() > 0) { ?>
      <a class="text-light" href="<?= base_url(); ?>profile/transaction">Transaction <small class="badge badge-sm badge-info"><?= $order->num_rows(); ?></small></a>
    <?php } else { ?>
      <a class="text-light" href="<?= base_url(); ?>profile/transaction">Transaction</a>
    <?php } ?>
    <a class="text-light" href="<?= base_url(); ?>logout">Log out</a>
  <?php } else { ?>
    <a href="<?= base_url(); ?>login" class="text-light"><i class="fa fa-sign-in-alt"></i> Login</a>
    <a href="<?= base_url(); ?>register" class="text-light"><i class="fa fa-user"></i> Rgister</a>
  <?php } ?>
</div>
<div class="search-form">
  <i class="fa fa-times"></i>
  <form action="<?= base_url(); ?>search" method="get">
    <input type="text" placeholder="Cari produk" autocomplete="off" name="q">
    <!--
    --><button type="submit">Serach</i></button>
  </form>
</div>
<div class="top-nav"></div>

<!-- Modal -->
<form action="<?= base_url(); ?>search" method="get">
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <h5 class="ml-3 mt-3">Form Search</h5>
        <div class="modal-body">
          <input type="text" class="form-control" autofocus autocomplete="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-keluar" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-cari">Search</button>
        </div>
      </div>
    </div>
  </div>
</form>