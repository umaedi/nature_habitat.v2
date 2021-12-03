<div class="wrapper">
    <div class="title-head">
        <?php if ($titleHead == "") { ?>
            <h2 class="title">Kategori <?= $nameCat ?></h2>
        <?php } else { ?>
            <h2 class="title">Kategori <?= $nameCat ?> > <?= $titleHead ?></h2>
        <?php } ?>
    </div>
    <div class="dropdown filter-for-mobile">
        <a class="btn btn-secondary btn-sm mt-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Filter
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a href="<?= base_url(); ?>c/<?= $slug ?>?ob=latest" class="dropdown-item">Terbaru</a>
            <a href="<?= base_url(); ?>c/<?= $slug ?>?ob=az" class="dropdown-item">A-Z</a>
            <a href="<?= base_url(); ?>c/<?= $slug ?>?ob=za" class="dropdown-item">Z-A</a>
            <a href="<?= base_url(); ?>c/<?= $slug ?>?ob=pmin" class="dropdown-item">Harga Terendah</a>
            <a href="<?= base_url(); ?>c/<?= $slug ?>?ob=pmax" class="dropdown-item">Harga Tertinggi</a>
            <a href="<?= base_url(); ?>c/<?= $slug ?>?promo=true" class="dropdown-item">Promo</a>
            <a href="<?= base_url(); ?>c/<?= $slug ?>?condition=1" class="dropdown-item">Baru</a>
            <a href="<?= base_url(); ?>c/<?= $slug ?>?condition=2" class="dropdown-item">Bekas</a>
            <a href="<?= base_url(); ?>c/<?= $slug ?>" class="btn dropdown-item btn-danger text-danger">Reset Filter</a>
        </div>
    </div>
    <div class="core">
        <div class="filter">
            <div class="filter-main">
                <div class="top">
                    <p>Filter</p>
                </div>
                <div class="bodf">
                    <p class="title">
                        Sort
                    </p>
                    <a href="<?= base_url(); ?>c/<?= $slug ?>?ob=latest">Latest</a>
                    <a href="<?= base_url(); ?>c/<?= $slug ?>?ob=az">A-Z</a>
                    <a href="<?= base_url(); ?>c/<?= $slug ?>?ob=za">Z-A</a>
                    <a href="<?= base_url(); ?>c/<?= $slug ?>?ob=pmin">Lowest Price</a>
                    <a href="<?= base_url(); ?>c/<?= $slug ?>?ob=pmax">Highest Price</a>
                    <hr>
                    <p class="title">
                        Price
                    </p>
                    <small class="text-muted">Write without separator, eg: 34000</small>
                    <form action="<?= base_url(); ?>c/<?= $slug ?>" method="get">
                        <input type="number" placeholder="Minimum Price" name="minprice" class="form-control">
                        <input type="number" placeholder="Maximum Price" name="maxprice" class="form-control mt-2">
                        <button type="submit" class="btn btn-terapkan btn-block btn-sm mt-2">Apply</button>
                    </form>
                    <hr>
                    <p class="title">
                        Offer
                    </p>
                    <a href="<?= base_url(); ?>c/<?= $slug ?>?promo=true">Promo</a>
                    <hr>
                    <p class="title">
                        Condition
                    </p>
                    <a href="<?= base_url(); ?>c/<?= $slug ?>?condition=1">New</a>
                    <a href="<?= base_url(); ?>c/<?= $slug ?>?condition=2">Second</a>
                    <hr>
                    <a href="<?= base_url(); ?>c/<?= $slug ?>" class="btn btn-dark text-light btn-sm">Reset Filter</a>
                </div>
            </div>
        </div>
        <?php $setting = $this->db->get('settings')->row_array(); ?>
        <div class="main-product">
            <?php if ($products->num_rows() > 0) { ?>
                <?php foreach ($products->result_array() as $p) : ?>
                    <a href="<?= base_url(); ?>p/<?= $p['slug']; ?>">
                        <div class="card">
                            <img src="<?= base_url(); ?>assets/images/product/<?= $p['img']; ?>" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text-prduct text-center px2"><?= $p['title']; ?></p>
                                <!-- <?php if ($setting['promo'] == 1) { ?>
                                    <?php if ($p['promo_price'] == 0) { ?>
                                        <p class="newPrice">$<?= str_replace(",", ".", number_format($p['price'])); ?></p>
                                    <?php } else { ?>
                                        <p class="oldPrice mb-0">$<?= str_replace(",", ".", number_format($p['price'])); ?></p>
                                        <p class="newPrice">Rp <?= str_replace(",", ".", number_format($p['promo_price'])); ?></p>
                                    <?php } ?>
                                <?php } else { ?>
                                    <p class="newPrice">$<?= str_replace(",", ".", number_format($p['price'])); ?></p>
                                <?php } ?> -->
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
                <div class="clearfix"></div>
            <?php } else { ?>
                <div class="alert alert-warning">Oops... No products to display</div>
            <?php } ?>
        </div>
    </div>
</div>