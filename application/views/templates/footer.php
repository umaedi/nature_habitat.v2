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
    <div class="my-4">
        <div class="box-title">
            <h5 class="mx-auto box-des des-popular-product">
                <span class="des-line">We have a physical store</span>
            </h5>
            <h5 class="des-title">Find Us On Google Maps</h5>
        </div>
        <div class="container ">
            <div class="col">
                <div class="row justify-content-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.2877400570164!2d110.70024961477128!3d-6.611125395219144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e711f8fb1cae385%3A0x9b343974e16055cb!2sNature%20Habitat!5e0!3m2!1sen!2sid!4v1634011875186!5m2!1sen!2sid" width="900" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
            <h3>Stay up to date</h3>
            <?php foreach ($sosmed->result_array() as $s) : ?>
                <a href="<?= $s['link']; ?>" target="_blank" title="<?= $s['name']; ?>">
                    <i class="fab fa-2x fa-<?= $s['icon']; ?>"></i>
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
                    <h3>Stay up to date</h3>
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
                <h3 class="title">CATEGIRY</h3>
                <?php foreach ($categoriesLimit->result_array() as $c) : ?>
                    <a href="<?= base_url(); ?>c/<?= $c['slug']; ?>"><?= $c['name']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="main">
            <div class="item">
                <i class="fa fa-map-marker-alt"></i>
                <p><?= nl2br($setting['address']); ?></p>
            </div>
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
    <button id="back-to-top-btn"><i class="fas fa-angle-up"></i></button>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.2/lazysizes.min.js" async=""></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- custom js -->
<script src="<?= base_url(); ?>assets/nature/js/jquery-1.12.4.min.js"></script>
<script src="<?= base_url(); ?>assets/nature/vendors/owlcarousel/owl.carouselv2.2.min.js"></script>
<script src="<?= base_url(); ?>assets/nature/vendors/slick/slick.min.js"></script>
<script src="<?= base_url(); ?>assets/nature/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/nature/vendors/rangeslider/js/ion.rangeSlider.min.js"></script>
<script src="<?= base_url(); ?>assets/nature/js/custom.js"></script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        once: true
    });
</script>

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
        $(".fakeLoader").fadeOut("slow");
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

<script>
    const backToTopButton = document.querySelector("#back-to-top-btn");

    window.addEventListener("scroll", scrollFunction);

    function scrollFunction() {
        if (window.pageYOffset > 300) { // Show backToTopButton
            if (!backToTopButton.classList.contains("btnEntrance")) {
                backToTopButton.classList.remove("btnExit");
                backToTopButton.classList.add("btnEntrance");
                backToTopButton.style.display = "block";
            }
        } else { // Hide backToTopButton
            if (backToTopButton.classList.contains("btnEntrance")) {
                backToTopButton.classList.remove("btnEntrance");
                backToTopButton.classList.add("btnExit");
                setTimeout(function() {
                    backToTopButton.style.display = "none";
                }, 250);
            }
        }
    }

    backToTopButton.addEventListener("click", smoothScrollBackToTop);

    // function backToTop() {
    //   window.scrollTo(0, 0);
    // }

    function smoothScrollBackToTop() {
        const targetPosition = 0;
        const startPosition = window.pageYOffset;
        const distance = targetPosition - startPosition;
        const duration = 750;
        let start = null;

        window.requestAnimationFrame(step);

        function step(timestamp) {
            if (!start) start = timestamp;
            const progress = timestamp - start;
            window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
            if (progress < duration) window.requestAnimationFrame(step);
        }
    }

    function easeInOutCubic(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t * t + b;
        t -= 2;
        return c / 2 * (t * t * t + 2) + b;
    };
</script>

<script>
    $('.review-product').on('click', function() {

        const title = $(this).data('title');
        const price = $(this).data('price');
        const img = $(this).data('img');
        const desc = $(this).data('desc');

        $('#TitleProduct').html(title);
        $('#productDesc').html(desc);
        $('#productDetail').attr('src', "assets/images/product/".concat(img));
    });
</script>

</html>