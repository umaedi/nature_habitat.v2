<?php
$categoriesLimit = $this->Categories_model->getCategoriesLimit();
$setting = $this->Settings_model->getSetting();
$sosmed = $this->Settings_model->getSosmed();
$footerhelp = $this->Settings_model->getFooterHelp();
$footerinfo = $this->Settings_model->getFooterInfo();
$rekening = $this->db->get('rekening');
?>
<?php echo $this->session->flashdata('subscriber'); ?>
<footer>
    <div class="my-5">
        <div class="box-title">
            <h5 class="mx-auto box-des des-popular-product">
                <span class="des-line">We have a physical store</span>
            </h5>
            <h5 class="des-title">Find Us On Google Maps</h5>
        </div>
        <div class="container">
            <div class="col embed-responsive">
                <div class="row">
                    <div class="google-maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.2877400570164!2d110.70024961477128!3d-6.611125395219144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e711f8fb1cae385%3A0x9b343974e16055cb!2sNature%20Habitat!5e0!3m2!1sen!2sid!4v1634011875186!5m2!1sen!2sid" width="900" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-for-mobile">
        <h2 class="brand-footer"><?= $this->Settings_model->general()["app_name"]; ?></h2>
        <p>
            <?= $setting['short_desc']; ?>
        </p>
        <div class="sosmed">
            <h3>Temukan kami di</h3>
            <?php foreach ($sosmed->result_array() as $s) : ?>
                <a href="<?= $s['link']; ?>" target="_blank" title="<?= $s['name']; ?>">
                    <i class="fab fa-<?= $s['icon']; ?>"></i>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="information">
        <div class="main">
            <div class="about about-hide">
                <h2 class="brand-footer"><?= $this->Settings_model->general()["app_name"]; ?></h2>
                <p>
                    <?= $setting['short_desc']; ?>
                </p>
                <div class="sosmed">
                    <h3>Stay Up to date </h3>
                    <?php foreach ($sosmed->result_array() as $s) : ?>
                        <a href="<?= $s['link']; ?>" target="_blank" title="<?= $s['name']; ?>">
                            <i class="fab fa-2x fa-<?= $s['icon']; ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="item item-hide">
                <h3 class="title">CATEGORY</h3>
                <?php foreach ($categoriesLimit->result_array() as $c) : ?>
                    <a href="<?= base_url(); ?>c/<?= $c['slug']; ?>"><?= $c['name']; ?></a>
                <?php endforeach; ?>
            </div>
            <div class="item">
                <h3 class="title">INFO <?= strtoupper($this->Settings_model->general()["app_name"]); ?></h3>
                <?php foreach ($footerinfo->result_array() as $f) : ?>
                    <a href="<?= base_url(); ?><?= $f['slug']; ?>"><?= $f['title']; ?></a>
                <?php endforeach; ?>
            </div>
            <div class="item">
                <h3 class="title">HELP</h3>
                <?php foreach ($footerhelp->result_array() as $f) : ?>
                    <a href="<?= base_url(); ?><?= $f['slug']; ?>"><?= $f['title']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="information information-for-mobile">
        <div class="main">
            <div class="item">
                <h3 class="title">CATEGORY</h3>
                <?php foreach ($categoriesLimit->result_array() as $c) : ?>
                    <a href="<?= base_url(); ?>c/<?= $c['slug']; ?>"><?= $c['name']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="main">
            <a href="https://goo.gl/maps/k2M8pHuKBkKw17m17">
                <div class="item">
                    <i class="fa fa-map-marker-alt"></i>
                    <p><?= nl2br($setting['address']); ?></p>
                </div>
            </a>
            <a href="https://api.whatsapp.com/send/?phone=62816850103&text&app_absent=0">
                <div class="item">
                    <i class="fa fa-phone"></i>
                    <p><?= $this->Settings_model->general()["whatsapp"]; ?></p>
                </div>
            </a>
            <a href="https://mail.google.com/mail/u/0/?tab=rm#inbox?compose=CllgCJlHmlWFwpjpSTjbKxdCKvcVrgQWpnKzJktJXRDhtFMwkDmXJJNXLFJrwFgRdkDTDrZNtkg">
                <div class="item">
                    <i class="fa fa-envelope"></i>
                    <p><?= $this->Settings_model->general()["email_contact"]; ?></p>
                </div>
            </a>
        </div>
    </div>
    <div class="copyright">
        <p class="mb-0">Copyright &copy; <span id="footer-cr-years"></span> <?= $this->Settings_model->general()["app_name"]; ?>. All Right Reserved. Developed by Last Pictures</p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>assets/js/jquery.countdown.min.js"></script>
<script>
    $("i.icon-search-navbar").on('click', function() {
        $("div.search-form").slideDown('fast');
        $("div.search-form input").focus();
    })

    $("div.search-form i").on('click', function() {
        $("div.search-form").slideUp('fast');
    })

    $("i.fa-bars").on('click', function() {
        $("div.dropdown-mobile-menu").slideToggle('fast');
    })

    const years = new Date().getFullYear();
    $("#footer-cr-years").text(years);

    $("#countdownPromo").countdown({
        date: "<?= $setting['promo_time']; ?>",
        render: function(data) {
            var el = $(this.el);
            el.empty()
                .append(
                    this.leadingZeros(data.days, 2) + " : "
                )
                .append(
                    this.leadingZeros(data.hours, 2) + " : "
                )
                .append(
                    this.leadingZeros(data.min, 2) + " : "
                )
                .append(
                    this.leadingZeros(data.sec, 2)
                );
        },
    });

    //loading screen
    $(window).ready(function() {
        $(".loading-animation-screen").fadeOut("slow");
    })

    // detail
    $("#detailBtnPlusJml").click(function() {
        var val = parseInt($(this).prev('input').val());
        $(this).prev('input').val(val + 1).change();
        return false;
    })

    $("#detailBtnMinusJml").click(function() {
        var val = parseInt($(this).next('input').val());
        if (val !== 1) {
            $(this).next('input').val(val - 1).change();
        }
        return false;
    })
</script>

</html>