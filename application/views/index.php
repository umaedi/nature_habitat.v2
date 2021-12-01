<!-- Main content -->
<div class="main-content-st2">
  <!-- Quick view here -->
  <div class="product-quick-view">
    <div class="product-quick-view-overlay"></div>
    <div class="product-quick-view-box">
      <section class="product-detail-v1 product-quick-view-box-inner">
        <div class="container">
          <div class="product-detail-v1-wrapper">
            <div class="row">
              <div class="col-md-6">
                <div class="product-detail-v3-image">
                  <div class="product-detail-v3-order row">
                    <div class="order2-prodetail-v3 col-md-9 col-pd-quickview">
                      <div class="slider slide-quickview-single">
                        <div class="product-detail-v3-image">
                          <img id="productDetail" data-src="<?= base_url(); ?>/assets/images/product/1633980389142.jpg" alt="Product" class="lazyload img-prev img-fluid">
                        </div>
                      </div>
                    </div>
                    <div class="order1-prodetail-v3 col-md-3 col-pd-quickview">
                      <div class="slider slide-quickview-nav">
                        <div class="product-detail-v3-image">
                          <img data-src="<?= base_url(); ?>/assets/images/product/1633980389142.jpg" alt="Product" class="lazyload img-fluid">
                        </div>
                        <div class="product-detail-v3-image">
                          <img data-src="<?= base_url(); ?>/assets/images/product/1633980389142.jpg" alt="Product" class="lazyload img-fluid">
                        </div>
                        <div class="product-detail-v3-image">
                          <img data-src="<?= base_url(); ?>/assets/images/product/1633980389142.jpg" alt="Product" class="lazyload img-fluid">
                        </div>
                        <div class="product-detail-v3-image">
                          <img data-src="<?= base_url(); ?>/assets/images/product/1634010520120.jpg" alt="Product" class="lazyload img-fluid">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="">
                  <div class="col-md-12">
                    <div class="product-detail-v1-info">
                      <h1 id="TitleProduct" class="product-detail-v1-title mb-0">Product Name</h1>
                      <div class="product-detail-v1-meta">
                        <div class="product-detail-v1-price">
                          <!-- <div class="cost">$80.00</div>
                          <div class="sale">$60.00</div> -->
                        </div>
                      </div>
                      <p class="mb-0" id="productDesc">
                        product desc
                      </p>
                      <div class="product-detail-v1-action">
                        <div class="quanlity">
                          <button type="button" class="subtraction">-</button>
                          <input type="text" class="quanlity-num" pattern="[0-9]*" value="1">
                          <button type="button" class="addition">+</button>
                        </div>
                        <?php if ($this->session->userdata('login')) { ?>
                          <div class="add-product">
                            <button class="btn-addproduct" onclick="addCart()">Add to cart</button>
                          </div>
                        <?php } else { ?>
                          <div class="add-product">
                            <button class="btn-addproduct addProduct" onclick="addCart()">Add to cart</button>
                          </div>
                        <?php } ?>
                      </div>
                      <div class="product-detail-v1-attr">
                        <p class="mb-0"><span>Categories:</span> Out Door Plant, Plant On Table, Potted.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <a href="javascript:void(0);" class="close-quick-view close-st" id="pull">
        <i class="ti-close"></i>
      </a>
    </div>
  </div>

  <!-- Category -->
  <section class="st2-categories" data-aos="fade-up" data-aos-duration="1000">
    <div class="container mt-3">
      <div class="st2-categories-inner">
        <div class="row justify-content-center">
          <?php foreach ($categoriesLimit->result_array() as $c) : ?>
            <div class="col-12 col-md-4 col-lg-5">
              <!-- categories 1 -->
              <div class="st2-categories-box-item">
                <div class="st2-categories-item">
                  <a href="<?= base_url(); ?>products" class="st2-categories-link">
                    <div class="st2-categories-thum">
                      <img data-src="<?= base_url(); ?>assets/images/icon/<?= $c['icon']; ?>" class="lazyload" alt="Category">
                    </div>
                    <div class="st2-categories-info tx-center">
                      <h4 class="st2-categories-name text-center"><?= $c['name']; ?></h4>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Navigasi -->
  <div class="menu-navigasi mt-3">
    <div class="container">
      <div class="row">
        <div class="col">
          <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="navigasi products mr-3" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Popular Products</a>
            </li>
            <li class="nav-item">
              <a class="navigasi mr-3 active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">New Arrivals</a>
            </li>
            <li class="nav-item">
              <a class="navigasi mr-3" id="pills-indoor-tab" data-toggle="pill" href="#pills-indoor" role="tab" aria-controls="pills-indoor" aria-selected="false">Indoor</a>
            </li>
            <li class="nav-item">
              <a class="navigasi mr-3" id="pills-outdoor-tab" data-toggle="pill" href="#pills-outdoor" role="tab" aria-controls="pills-outdoor" aria-selected="false">Outdoor</a>
            </li>
          </ul>
          <hr class="border-navigasi">
        </div>
      </div>
    </div>
  </div>

  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <section class="popular-product" id="hotproducts">
        <!-- modal -->
        <?php if ($best->num_rows() > 0) { ?>
          <div class="container">
            <div class="row">
              <?php foreach ($best->result_array() as $p) : ?>
                <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12">
                  <div class="box-item">
                    <div class="box-item-image">
                      <a href="<?= base_url(); ?>p/<?= $p['slug']; ?>"><img data-src="<?= base_url(); ?>assets/images/product/<?= $p['img']; ?>" class="lazyload" alt="Deal of the week"></a>
                      <!-- <div class="button-loop-action">
                        <ul class="loop-action">
                          <li class="item-action review">
                            <a href="javascript:void(0);" class="action-link review-product" data-title="<?= $p['title']; ?>" data-desc="<?= $p['description']; ?>" data-img="<?= $p['img']; ?>"><i class="icon ti-eye"></i></a>
                          </li>
                          <?php if ($this->session->userdata('login')) { ?>
                            <li class="item-action under-conturction">
                              <a href="javascript:void(0);" class="action-link addCart"><i class="icon icon-ecommerce-basket" data-id="<?= $p['productId']; ?>"></i></a>
                            </li>
                          <?php } else { ?>
                            <li class="item-action add-to-card">
                              <a class="action-link" href="javascript:void(0);" id="addCart"><i class="icon icon-ecommerce-basket"></i></a>
                            </li>
                          <?php } ?>
                        </ul>
                      </div> -->
                    </div>
                    <div class="box-item-info">
                      <h3 class="text-center"><a href="" class="item-name"><?= $p['title']; ?></a></h3>
                      <!-- <div class="item-price-rate">
                    <div class="item-price">
                      <?php if ($setting['promo'] == 1) { ?>
                        <?php if ($p['promo_price'] == 0) { ?>
                          <p class="sale">$<?= str_replace(",", ".", number_format($p['price'])); ?></p>
                        <?php } else { ?>
                          <p class="cost mb-0">$<?= str_replace(",", ".", number_format($p['price'])); ?></p>
                          <p class="sale">$<?= str_replace(",", ".", number_format($p['promo_price'])); ?></p>
                        <?php } ?>
                      <?php } else { ?>
                        <p class="sale">$<?= str_replace(",", ".", number_format($p['price'])); ?></p>
                      <?php } ?>
                    </div>
                  </div> -->
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <?php if ($allProducts->num_rows() > 4) { ?>
                  <?php if ($this->session->userdata('login')) { ?>
                    <a href="<?= base_url(); ?>products"><button class="more">View more our product</button></a>
                  <?php } else { ?>
                    <a href="<?= base_url(); ?>login?redirect=products"><button class="more">View more our product</button></a>
                  <?php } ?>
                <?php } ?>
                <hr class="border-more">
              </div>
            </div>
          </div>
      </section>
    <?php } ?>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <!-- Navigasi -->
      <section class="popular-product" id="erecentproducts">
        <div class="container">
          <div class="row">
            <?php if ($recent->num_rows() > 0) { ?>
              <?php foreach ($recent->result_array() as $p) : ?>
                <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12">
                  <div class="box-item">
                    <div class="box-item-image">
                      <a href="<?= base_url(); ?>p/<?= $p['slug']; ?>"><img data-src="<?= base_url(); ?>assets/images/product/<?= $p['img']; ?>" class="lazyload" alt="Deal of the week"></a>
                    </div>
                    <div class="box-item-info">
                      <h3 class=""><a href="" class="item-name"><?= $p['title']; ?></a></h3>
                      <!-- <div class="item-price-rate">
                    <div class="item-price">
                      <?php if ($setting['promo'] == 1) { ?>
                        <?php if ($p['promo_price'] == 0) { ?>
                          <p class="sale">$<?= str_replace(",", ".", number_format($p['price'])); ?></p>
                        <?php } else { ?>
                          <p class="cost mb-0">$<?= str_replace(",", ".", number_format($p['price'])); ?></p>
                          <p class="sale">$<?= str_replace(",", ".", number_format($p['promo_price'])); ?></p>
                        <?php } ?>
                      <?php } else { ?>
                        <p class="sale">$<?= str_replace(",", ".", number_format($p['price'])); ?></p>
                      <?php } ?>
                    </div>
                  </div> -->
                    </div>
                    <!-- <div class="button-loop-action">
                      <ul class="loop-action">
                        <li class="item-action review">
                          <a class="action-link" href="javascript:void(0);"><i class="icon ti-eye"></i></a>
                        </li>
                        <li class="item-action add-to-card">
                          <?php if ($this->session->userdata('login')) { ?>
                        <li class="item-action addCartx under-conturction">
                          <a href="javascript:void(0);" class="action-link"><i class="icon icon-ecommerce-basket" data-id="<?= $p['id']; ?>"></i></a>
                        </li>
                      <?php } else { ?>
                        <li class="item-action add-to-card">
                          <a class="action-link" href="javascript:void(0);" id="addCart"><i class="icon icon-ecommerce-basket"></i></a>
                        </li>
                      <?php } ?>
                      </li>
                      </ul>
                    </div> -->
                  </div>
                </div>
              <?php endforeach; ?>
              <div class="clearfix"></div>
            <?php } else { ?>
              <div class="alert alert-warning">Upss.. Noting products!</div>
            <?php } ?>
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <?php if ($allProducts->num_rows() > 4) { ?>
                  <?php if ($this->session->userdata('login')) { ?>
                    <a href="<?= base_url(); ?>products"><button class="more">View more our product</button></a>
                  <?php } else { ?>
                    <a href="<?= base_url(); ?>login?redirect=products"><button class="more">View more our product</button></a>
                  <?php } ?>
                <?php } ?>
                <hr class="border-more">
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>

    <!-- Menu category -->
    <div class="tab-pane fade" id="pills-indoor" role="tabpanel" aria-labelledby="pills-indoor-tab">
      <section class="popular-product">
        <div class="container">
          <div class="row">

            <?php if ($kategoriIndoor->num_rows() > 0) { ?>
              <?php foreach ($kategoriIndoor->result_array() as $p) : ?>
                <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12">
                  <div class="box-item">
                    <a href="<?= base_url(); ?>category/indoor">
                      <div class="box-item-image">
                        <img data-src="<?= base_url(); ?>assets/images/product/<?= $p['img']; ?>" class="lazyload" alt="Category">
                      </div>
                    </a>
                    <div class="box-item-info">
                      <h4 class=""><a href="" class="item-name"><?= $p['title']; ?></a></h4>
                      <!-- <div class="item-price-rate">
                    <div class="item-price">
                      <?php if ($setting['promo'] == 1) { ?>
                        <?php if ($p['promo_price'] == 0) { ?>
                          <p class="sale">$<?= str_replace(",", ".", number_format($p['price'])); ?></p>
                        <?php } else { ?>
                          <p class="cost mb-0">$<?= str_replace(",", ".", number_format($p['price'])); ?></p>
                          <p class="sale">$<?= str_replace(",", ".", number_format($p['promo_price'])); ?></p>
                        <?php } ?>
                      <?php } else { ?>
                        <p class="sale">$<?= str_replace(",", ".", number_format($p['price'])); ?></p>
                      <?php } ?>
                    </div>
                  </div> -->
                    </div>
                    <!-- <div class="button-loop-action">
                      <ul class="loop-action">
                        <li class="item-action review">
                          <a class="action-link" href="<?= base_url(); ?>p/<?= $p['slug']; ?>"><i class="icon ti-eye"></i></a>
                        </li>
                        <li class="item-action add-to-card">
                          <?php if ($this->session->userdata('login')) { ?>
                        <li class="item-action under-conturction">
                          <a href="javascript:void(0);" class="action-link addCart"><i class="icon icon-ecommerce-basket" data-id="<?= $p['productId']; ?>"></i></a>
                        </li>
                      <?php } else { ?>
                        <li class="item-action add-to-card">
                          <a class="action-link" href="javascript:void(0);" id="addCart"><i class="icon icon-ecommerce-basket"></i></a>
                        </li>
                      <?php } ?>
                      </li>
                      </ul>
                    </div> -->
                  </div>
                </div>
              <?php endforeach; ?>
              <div class="clearfix"></div>
            <?php } else { ?>
              <div class="alert alert-warning">Upss.. Noting products!</div>
            <?php } ?>
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <?php if ($allProducts->num_rows() > 4) { ?>
                  <?php if ($this->session->userdata('login')) { ?>
                    <a href="<?= base_url(); ?>products"><button class="more">View more our product</button></a>
                  <?php } else { ?>
                    <a href="<?= base_url(); ?>login?redirect=products"><button class="more">View more our product</button></a>
                  <?php } ?>
                <?php } ?>
                <hr class="border-more">
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>
    <div class="tab-pane fade" id="pills-outdoor" role="tabpanel" aria-labelledby="pills-outdoor-tab">
      <section class="popular-product">
        <div class="container">
          <div class="row">

            <?php if ($kategoriOutdoor->num_rows() > 0) { ?>
              <?php foreach ($kategoriOutdoor->result_array() as $p) : ?>
                <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 col-12">
                  <div class="box-item">
                    <a href="<?= base_url(); ?>category/outdoor">
                      <div class="box-item-image">
                        <img data-src="<?= base_url(); ?>assets/images/product/<?= $p['img']; ?>" class="lazyload" alt="Category">
                      </div>
                    </a>
                    <div class="box-item-info">
                      <h3 class=""><a href="" class="item-name"><?= $p['title']; ?></a></h3>
                      <!-- <div class="item-price-rate">
                    <div class="item-price">
                      <?php if ($setting['promo'] == 1) { ?>
                        <?php if ($p['promo_price'] == 0) { ?>
                          <p class="sale">$<?= str_replace(",", ".", number_format($p['price'])); ?></p>
                        <?php } else { ?>
                          <p class="cost mb-0">$<?= str_replace(",", ".", number_format($p['price'])); ?></p>
                          <p class="sale">$<?= str_replace(",", ".", number_format($p['promo_price'])); ?></p>
                        <?php } ?>
                      <?php } else { ?>
                        <p class="sale">$<?= str_replace(",", ".", number_format($p['price'])); ?></p>
                      <?php } ?>
                    </div>
                  </div> -->
                    </div>
                    <!-- <div class="button-loop-action">
                      <ul class="loop-action">
                        <li class="item-action review">
                          <a class="action-link" href="<?= base_url(); ?>p/<?= $p['slug']; ?>"><i class="icon ti-eye"></i></a>
                        </li>
                        <li class="item-action add-to-card">
                          <?php if ($this->session->userdata('login')) { ?>
                        <li class="item-action under-conturction">
                          <a href="javascript:void(0);" class="action-link" id="addCart"><i class="icon icon-ecommerce-basket"></i></a>
                        </li>
                      <?php } else { ?>
                        <li class="item-action add-to-card">
                          <a class="action-link" href="javascript:void(0);"><i class="icon icon-ecommerce-basket"></i></a>
                        </li>
                      <?php } ?>
                      </li>
                      </ul>
                    </div> -->
                  </div>
                </div>
              <?php endforeach; ?>
              <div class="clearfix"></div>
            <?php } else { ?>
              <div class="alert alert-warning">Upss.. Noting products!</div>
            <?php } ?>
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <?php if ($allProducts->num_rows() > 4) { ?>
                  <?php if ($this->session->userdata('login')) { ?>
                    <a href="<?= base_url(); ?>products"><button class="more">View more our product</button></a>
                  <?php } else { ?>
                    <a href="<?= base_url(); ?>login?redirect=products"><button class="more">View more our product</button></a>
                  <?php } ?>
                <?php } ?>
                <hr class="border-more">
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="explore">
          <div class="explore-img">
            <?php if ($allProducts->num_rows() > 4) { ?>
              <?php if ($this->session->userdata('login')) { ?>
                <a href="<?= base_url(); ?>products">
                <?php } else { ?>
                  <a href="<?= base_url(); ?>login?redirect=products">
                  <?php } ?>
                <?php } ?>
                <img data-src="<?= base_url(); ?>assets/images/banner/explore.jpg" class="img-fluid lazyload">
                  </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Newsletter -->
<section class="newsletter padding-section">
  <div class="newsletter-top">
    <h2 class="newsletter-title">Join Our Newsletter</h2>
    <p class="newsletter-des">Enter your email address for our mailing list to keep your self update</p>
  </div>
  <form action="<?= base_url(); ?>subscribe-email" class="newsletter-form">
    <div class="newsletter-form-inner">
      <input type="email" name="email" class="newsletter-form-inp" placeholder="Enter your email">
      <button type="submit" class="newsletter-form-submit st2-btn-submit">
        <span class="newsletter-submit-text st2-submit-text">Subscribe</span>
        <span class="newsletter-submit-icon st2-submit-icon">
          <i class="lnr lnr-arrow-right"></i>
        </span>
      </button>
    </div>
  </form>
</section>

<!-- Instagram -->
<div class="row">
  <div class="box-title">
    <h5 class="mx-auto box-des des-popular-product">
      <span class="des-line">Perfect for growing plants</span>
    </h5>
    <h3 class="des-title">Our Event</h3>
  </div>
</div>
<section class="instagram">
  <a href="https://instagram.com/naturehabitat_furniture">
    <div class="instagram-btn">
      <h4 class="icon-itgr mb-0">
        <i class="ti-instagram"></i>Habitat Nature _ Store
      </h4>
    </div>
  </a>
</section>
<!-- end test -->
</div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
  $(function() {
    $('#addCart').on('click', function() {
      console.log('ok');
    });
  });
</script>