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
<!-- Header -->
<header>

  <!-- Top header -->
  <div class="header-topbar">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="st2-info-header">
            <ul class="st2-info-header-list">
              <li class="st2-info-li st2-info-phone">
                <?php if (!$this->session->userdata('login')) { ?>
                  <span>Require login for view more products</span>
                <?php } else { ?>
                  <span>You are logged in as <?= $user['name']; ?></span>
                <?php } ?>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="st2-info-myacount">
            <ul class="st2-myacount-list">
              <?php if (!$this->session->userdata('login')) { ?>
                <li class="st2-myacount-li st2-myacount"><a class="st2-myacount-link" href="<?= base_url(); ?>login">My Account</a></li>
              <?php } else { ?>
                <li class="st2-myacount-li st2-myacount"><a class="st2-myacount-link" href="<?= base_url(); ?>profile">My Account</a></li>
                <li class="st2-myacount-li st2-shopping-cart"><a class="st2-myacount-link" href="<?= base_url(); ?>cart">Shopping Cart</a></li>
                <li class="st2-myacount-li st2-checkout"><a class="st2-myacount-link" href="<?= base_url(); ?>payment">Checkout</a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Header bottom -->
  <div class="header-bottom">
    <div class="header-bottom-st2-wrapper">
      <div class="header-bottom-st2-inner">
        <div class="container">
          <div class="row js-compare">
            <div class="ml-3">
              <div class="st2-header-logo">
                <img src="<?= base_url(); ?>/assets/images/logo/nature_logo.png" alt="Logo">
              </div>
            </div>
            <div class="col-lg-8 hide-reponsive js-dad">
              <!-- Menu -->
              <div class="st2-hamadryad-menu">
                <nav>
                  <ul class="st2-menu-primary">
                    <li class="st2-li-primary">
                      <a class="st2-item-link" href="<?= base_url(); ?>">Home</a>
                    </li>
                    <li class="st2-li-primary">
                      <a class="st2-item-link" href="#">Products Collections</a>
                      <!-- submenu home -->
                      <div class="st2-hamadryad-megamenu megamenu-home js-dropmenu megamenu-bg-active1">
                        <section class="st2-hamadryad-megamenu-modal home">
                          <div class="container-fluid">
                            <div class="st2-hamadryad-submenu-wrapper">
                              <div class="row">
                                <div class="col-md-6">
                                  <h2 class="text-custom text-center">Indoor</h2>
                                  <hr>
                                </div>
                                <div class="col-md-6">
                                  <h2 class="text-custom text-center">Outdoor</h2>
                                  <hr>
                                </div>
                                <div class="col-md-3">
                                  <div class="st2-submenu-list-item">
                                    <div class="submenu-custom">
                                      <ul class="st2-submenu-item-ul">
                                        <li class="st2-submenu-item-li">
                                          <a href="<?= base_url(); ?>c/sofa-deep-seating" class="st2-submenu-item-link">Sofa & Deep Seating</a>
                                        </li>
                                        <li class="st2-submenu-item-li">
                                          <a href="<?= base_url(); ?>c/dining-table" class="st2-submenu-item-link">Dining Table</a>
                                        </li>
                                        <li class="st2-submenu-item-li">
                                          <a href="<?= base_url(); ?>c/coffee-table" class="st2-submenu-item-link">Coffee Table</a>
                                        </li>
                                        <li class="st2-submenu-item-li">
                                          <a href="<?= base_url(); ?>c/chairs" class="st2-submenu-item-link">Chairs</a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="st2-submenu-list-item">
                                    <div class="submenu-custom">
                                      <ul class="st2-submenu-item-ul">
                                        <li class="st2-submenu-item-li">
                                          <a href="<?= base_url(); ?>c/dresser-cabinet" class="st2-submenu-item-link">Dresser Cabinet</a>
                                        </li>
                                        <li class="st2-submenu-item-li">
                                          <a href="<?= base_url(); ?>c/bed-bedside" class="st2-submenu-item-link">Bed & Bedside</a>
                                        </li>
                                        <li class="st2-submenu-item-li">
                                          <a href="<?= base_url(); ?>c/bookrack" class="st2-submenu-item-link">Bookrack</a>
                                        </li>
                                        <li class="st2-submenu-item-li">
                                          <a href="<?= base_url(); ?>c/entertainment-tv-unit" class="st2-submenu-item-link">Entertainment TV Unit</a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="st2-submenu-list-item">
                                    <div class="submenu-custom">
                                      <ul class="st2-submenu-item-ul">
                                        <li class="st2-submenu-item-li">
                                          <a href="<?= base_url(); ?>c/sofa-deep-seating" class="st2-submenu-item-link">Sofa & Deep Seating</a>
                                        </li>
                                        <li class="st2-submenu-item-li">
                                          <a href="<?= base_url(); ?>c/dining-table" class="st2-submenu-item-link">Dining Table</a>
                                        </li>
                                        <li class="st2-submenu-item-li">
                                          <a href="<?= base_url(); ?>c/bar-table" class="st2-submenu-item-link">Bar Table</a>
                                        </li>
                                        <li class="st2-submenu-item-li">
                                          <a href="<?= base_url(); ?>c/bar-chair" class="st2-submenu-item-link">Bar Chair</a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="st2-submenu-list-item">
                                    <div class="submenu-custom">
                                      <ul class="st2-submenu-item-ul">
                                        <li class="st2-submenu-item-li">
                                          <a href="<?= base_url(); ?>c/chairs" class="st2-submenu-item-link">Chairs</a>
                                        </li>
                                        <li class="st2-submenu-item-li">
                                          <a href="<?= base_url(); ?>c/loungers-and-sunbed" class="st2-submenu-item-link">Loungers and Sunbed</a>
                                        </li>
                                        <li class="st2-submenu-item-li">
                                          <a href="<?= base_url(); ?>c/benches" class="st2-submenu-item-link">Benches</a>
                                        </li>
                                        <li class="st2-submenu-item-li">
                                          <a href="<?= base_url(); ?>c/parasol" class="st2-submenu-item-link">Parasol</a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
                      <!-- end submenu home -->
                    </li>
                    <li class="st2-li-primary"><a class="st2-item-link" href="<?= base_url(); ?>contact">How to buy</a></li>
                    <li class="st2-li-primary"><a class="st2-item-link" href="<?= base_url(); ?>products">Shop</a></li>
                    <li class="st2-li-primary"><a class="st2-item-link" href="<?= base_url(); ?>about">About</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="st2-control-right">
              <div class="st2-control">
                <!-- search mobie -->
                <div class="search-mobie" data-toggle="collapse" data-target="#showSearch">
                  <span class="lnr lnr-magnifier"></span>
                </div>
                <!-- search -->
                <div class="st2-search-box st2-control-block hide-reponsive">
                  <div class="st2-search-block">
                    <form method="get" class="st2-search-form" action="<?= base_url(); ?>search">
                      <div class="at2-search-fields">
                        <div class="st2-search-input">
                          <input type="search" class="st2-search-field" placeholder="Search ..." value="" name="s">
                          <button type="submit" class="st2-search-submit">
                            <span class="lnr lnr-magnifier"></span>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- cart -->
                <div class="st2-cart-block st2-control-block js-click-cart">
                  <div class="st2-cart-icon">
                    <span class="icon-ecommerce-basket"></span>
                    <?php if ($this->session->userdata('login')) { ?>
                      <?php if ($cart->num_rows() > 0) { ?>
                        <span class="st2-cart-number"><?= $cart->num_rows(); ?></span>
                      <?php } else { ?>
                      <?php } ?>
                    <?php } ?>
                  </div>
                </div>
                <div class="st2-cart-block st2-control-block">
                  <div class="st2-cart-icon">
                    <?php if (!$this->session->userdata('login')) { ?>
                      <a href="<?= base_url(); ?>login" span class="lnr lnr-user" style="color: #222"></a>
                    <?php } else { ?>
                      <a href="<?= base_url(); ?>profile" span class="lnr lnr-user" style="color: #222"></a>
                    <?php } ?>
                  </div>
                </div>
                <!-- mega menu -->
                <div class="st2-megamenu-block st2-control-block js-click-megamenu">
                  <div class="st2-megamenu-icon">
                    <span class="lnr lnr-menu"></span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Form search -->
            <form method="get" class="search-form collapse" action="/search" id="showSearch">
              <div class="search-fields">
                <div class="search-input">
                  <span class="reset-instant-search-wrap"></span>
                  <input type="search" class="search-field" placeholder="Instant search ..." value="" name="s">
                  <button type="submit" class="search-submit">
                    <span class="lnr lnr-magnifier"></span>
                  </button>
                </div>
              </div>
            </form>
            <!-- End Form search -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mini cart -->
  <div class="hamadryad-minicart">
    <div class="hamadryad-minicart-content">
      <h3 class="hamadryad-minicart-title">Your cart</h3>
      <?php if ($this->session->userdata('login')) { ?>
        <?php if ($cart->num_rows() > 0) { ?>
          <span class="hamadryad-minicart-number"><?= $cart->num_rows(); ?></span>
        <?php } else { ?>
          Cart
        <?php } ?>
      <?php } ?>
      <div class="hamadryad-minicart-close">
        <i class="lnr lnr-cross"></i>
      </div>
      <div class="hamadryad-minicart-list-item">
        <div class="list-item">
          <ol class="hamadryad-minicart-items">

            <!-- <?php if ($cart->num_rows() > 0) { ?>
              <?php foreach ($cart->result_array() as $item) : ?>
                <div class="item">
                  <div class="item-main">
                    <img src="<?= base_url(); ?>assets/images/product/<?= $item['img']; ?>" alt="<?= $item['product_name']; ?>">
                    <a href="<?= base_url(); ?>p/<?= $item['slug']; ?>">
                      <h2 class="title mb-0"><?= $item['product_name']; ?></h2>
                    </a>
                    <small class="text-muted">Amount: <?= $item['qty']; ?></small>
                    <h3 class="price mt-0 mb-0">$<?= number_format($item['price'] * $item['qty'], 0, ",", "."); ?></h3>
                    <?php if ($item['ket'] == '') { ?>
                      <small class="desc_product_<?= $item['id']; ?>"><a href="#" class="text-dark" data-toggle="modal" data-target="#modalAddDescription" onclick="showModalAddKet('<?= $item['id']; ?>')">Add description</a></small>
                    <?php } else { ?>
                      <small class="desc_product_<?= $item['id']; ?>">Ket: <?= $item['ket']; ?> <a href="#" class="text-dark" data-toggle="modal" data-target="#modalEditDescription" onclick="showModalEditKet('<?= $item['id']; ?>')"><i class="fa text-info fa-edit"></i></a></small>
                    <?php } ?>
                    <div class="clearfix"></div>
                  </div>
                  <a href="<?= base_url(); ?>cart/delete/<?= $item['id']; ?>" onclick="return confirm('Are you sure you want to remove this product from the cart?')"><i class="fa fa-trash"></i></a>
                </div>
                <hr>
              <?php endforeach; ?>
              <a href="<?= base_url(); ?>cart/delete_cart" onclick="return confirm('Are you sure you want to empty the Cart?')"><button class="btn btn-outline-dark">Empty Cart</button></a>
            <?php } else { ?>
              <div class="alert alert-warning">Oops. Cart is still empty. Let's go shopping first..</div>
              <br><br><br>
            <?php } ?> -->

            <?php foreach ($cart->result_array() as $item) : ?>
              <li class="product-cart">
                <a href="<?= base_url(); ?>p/<?= $item['slug']; ?>" class="product-cart-thumb"><img src="<?= base_url(); ?>assets/images/product/<?= $item['img']; ?>" alt="<?= $item['product_name']; ?>"></a>
                <div class="product-detail">
                  <div class="product-name"><a href="<?= base_url(); ?>p/<?= $item['slug']; ?>"><?= $item['product_name']; ?></a></div>
                  <div class="product-detail-info">
                    <div class="product-quality">QTY : <?= $item['qty']; ?></div>
                    <div class="product-cost">$<?= number_format($item['price'] * $item['qty'], 0, ",", "."); ?></div>
                  </div>
                </div>
                <div class="product-remove">
                  <a href="<?= base_url(); ?>cart/delete/<?= $item['id']; ?>"><i class="lnr lnr-cross"></i></a>
                </div>
              </li>
            <?php endforeach; ?>

          </ol>
        </div>
      </div>

      <?php
      $totalall = 0;
      $totalitem = 0;
      foreach ($cart->result_array() as $c) {
        $totalall += intval($c['price']) * intval($c['qty']);
        $totalitem += intval($c['qty']);
      }
      ?>
      <div class="subtotal">
        <span class="total-title">Total:</span>
        <span class="total-price">$<?= number_format($totalall, 0, ",", "."); ?></span>
      </div>
      <div class="hamadryad-minicart-action">
        <div class="btn-action-minicart viewcart"><a href="<?= base_url(); ?>cart">Viewcart</a></div>
        <div class="btn-action-minicart checkout"><a href="<?= base_url(); ?>payment">Checkout</a></div>
      </div>
    </div>
  </div>
  <div class="minicart-bg-overlay" style="display: none;"></div>

  <!-- Menu mobie -->
  <div class="box-mobile-menu">
    <span class="box-title">Menu</span>
    <a href="#" class="close-menu" id="pull-closemenu">
      <i class="lnr lnr-cross"></i>
    </a>
    <div class="menu-clone">
      <ul class="main-menu">
        <li class="menu-item menu-item-has-children">
          <a href="Homepage01.html">Home</a>
        </li>
        <li class="menu-item menu-item-has-children">
          <a href="List_ShopPageFullWidth.html">Shop</a>
          <span class="toggle-submenu"></span>
          <div class="submenu">
            <div class="col-12 col-md-12 custom-col">
              <div class="col-inner">
                <div class="col-wrapper-item">
                  <h2 class="widget-title">Indoor</h2>
                  <ul class="menu-shop-style">
                    <li class="style-item"><a class="afont200" href="List_ShopPageFullWidth.html">Sofa & Deep Seating</a></li>
                    <li class="style-item"><a class="afont200" href="List_Shop_Sidebar-Left.html">Dining Table</a></li>
                    <li class="style-item"><a class="afont200" href="List_ShopPageFullWidth.html">Sofa & Deep Seating</a></li>
                    <li class="style-item"><a class="afont200" href="List_Shop_Sidebar-Left.html">Coffee Table</a></li>
                    <li class="style-item"><a class="afont200" href="List_ShopPageFullWidth.html">Chairs</a></li>
                    <li class="style-item"><a class="afont200" href="List_Shop_Sidebar-Left.html">Dresser Cabinet</a></li>
                    <li class="style-item"><a class="afont200" href="List_ShopPageFullWidth.html">Bed & Bedside</a></li>
                    <li class="style-item"><a class="afont200" href="List_Shop_Sidebar-Left.html">Bookrack</a></li>
                    <li class="style-item"><a class="afont200" href="List_Shop_Sidebar-Left.html">Entertainment TV Unit</a></li>
                  </ul>
                </div>
                <div class="col-wrapper-item">
                  <h2 class="widget-title">Outdoor</h2>
                  <ul class="menu-shop-style">
                    <li class="style-item"><a class="afont200" href="List_ShopPageFullWidth.html">Sofa & Deep Seating</a></li>
                    <li class="style-item"><a class="afont200" href="List_Shop_Sidebar-Left.html">Dining Table</a></li>
                    <li class="style-item"><a class="afont200" href="List_ShopPageFullWidth.html">Bar Table</a></li>
                    <li class="style-item"><a class="afont200" href="List_Shop_Sidebar-Left.html">Bar Chair</a></li>
                    <li class="style-item"><a class="afont200" href="List_ShopPageFullWidth.html">Chairs</a></li>
                    <li class="style-item"><a class="afont200" href="List_Shop_Sidebar-Left.html">Loungers and Sunbed</a></li>
                    <li class="style-item"><a class="afont200" href="List_ShopPageFullWidth.html">Benches</a></li>
                    <li class="style-item"><a class="afont200" href="List_Shop_Sidebar-Left.html">Parasol</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="menu-item menu-item-has-children"><a href="">How to buy</a></li>
        <li class="menu-item menu-item-has-children"><a href="">About</a></li>
        <li class="menu-item menu-item-has-children"><a href="">My Acount</a></li>
      </ul>
    </div>
  </div>
  <div class="menu-overlay"></div>
</header>