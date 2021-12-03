<div class="wrapper">
    <div class="title-head">
        <h2 class="title">Hasil Pencarian: <?= $q ?> <?= $titleHead ?></h2>
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
                    <a href="<?= base_url(); ?>search?q=<?= $q; ?>&ob=latest">Terbaru</a>
                    <a href="<?= base_url(); ?>search?q=<?= $q; ?>&ob=az">A-Z</a>
                    <a href="<?= base_url(); ?>search?q=<?= $q; ?>&ob=za">Z-A</a>
                    <a href="<?= base_url(); ?>search?q=<?= $q; ?>&ob=pmin">Lowest Price</a>
                    <a href="<?= base_url(); ?>search?q=<?= $q; ?>&ob=pmax">Highest Price</a>
                    <hr>
                    <p class="title">
                        Offer
                    </p>
                    <a href="<?= base_url(); ?>search?q=<?= $q; ?>&promo=true">Promo</a>
                    <hr>
                    <p class="title">
                        Kondisi
                    </p>
                    <a href="<?= base_url(); ?>search?q=<?= $q; ?>&condition=1">New</a>
                    <a href="<?= base_url(); ?>search?q=<?= $q; ?>&condition=2">Second</a>
                    <hr>
                    <a href="<?= base_url(); ?>search?q=<?= $q; ?>" class="btn btn-dark text-light btn-sm">Reset Filter</a>
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
                                <p class="card-text mb-0"><?= $p['title']; ?></p>
                                <?php if ($setting['promo'] == 1) { ?>
                                    <?php if ($p['promo_price'] == 0) { ?>
                                        <p class="newPrice">$<?= str_replace(",", ".", number_format($p['price'])); ?></p>
                                    <?php } else { ?>
                                        <p class="oldPrice mb-0">$<?= str_replace(",", ".", number_format($p['price'])); ?></p>
                                        <p class="newPrice">$<?= str_replace(",", ".", number_format($p['promo_price'])); ?></p>
                                    <?php } ?>
                                <?php } else { ?>
                                    <p class="newPrice">$<?= str_replace(",", ".", number_format($p['price'])); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
                <div class="clearfix"></div>
            <?php } else { ?>
                <div style="align-self: flex-start" class="alert alert-warning">Oops... No products to display</div>
            <?php } ?>
        </div>
    </div>
</div>