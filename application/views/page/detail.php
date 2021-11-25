<div class="wrapper">
    <div class="navigation">
        <a href="<?= base_url(); ?>">Home</a>
        <i class="fa fa-caret-right"></i>
        <a href="<?= base_url(); ?>c/<?= $product['slug']; ?>"><?= $product['name']; ?></a>
        <i class="fa fa-caret-right"></i>
        <a><?= $product['title']; ?></a>
    </div>
    <?php $setting = $this->db->get('settings')->row_array(); ?>
    <div class="top">
        <div class="main-top">
            <div class="img">
                <a href="<?= base_url(); ?>assets/images/product/<?= $product['img']; ?>" data-lightbox="img-1">
                    <img src="<?= base_url(); ?>assets/images/product/<?= $product['img']; ?>" alt="produk" class="jumbo-thumb">
                </a>
                <div class="img-slider">
                    <img src="<?= base_url(); ?>assets/images/product/<?= $product['img']; ?>" alt="gambar" class="thumb">
                    <?php foreach ($img->result_array() as $d) : ?>
                        <img src="<?= base_url(); ?>assets/images/product/<?= $d['img']; ?>" alt="gambar" class="thumb">
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="ket">
                <h1 class="title"><?= $product['title']; ?></h1>
                <!-- <p class="subtitle">Sold <?= $product['transaction']; ?> Product &bull; <?= $product['viewer']; ?>x View</p> -->
                <p class="subtitle"><?= $product['viewer']; ?>x View</p>
                <hr>
                <table>
                    <!-- <?php if ($setting['promo'] == 1) { ?>
                        <?php if ($product['promo_price'] == 0) { ?>
                            <tr>
                                <td class="t">Price</td>
                                <td class="price">$<?= str_replace(",", ".", number_format($product['price'])); ?></td>
                            </tr>
                        <?php } else { ?>
                            <tr>
                                <td class="t">Price</td>
                                <td class="oldPrice">$<?= str_replace(",", ".", number_format($product['price'])); ?></td>
                            </tr>
                            <tr class="newPrice">
                                <td></td>
                                <td class="price">$<?= str_replace(",", ".", number_format($product['promo_price'])); ?></td>
                            </tr>
                        <?php } ?>
                    <?php } else { ?>
                        <tr> -->
                    <!-- <td class="t">Price</td> -->
                    <!-- <td class="price">$<?= str_replace(",", ".", number_format($product['price'])); ?></td> -->
                    </tr>
                <?php } ?>
                <tr>
                    <td class="t">Size</td>
                    <td>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option><?= $product['size']; ?></option>
                            <option><?= $product['size1']; ?></option>
                            <option><?= $product['size2']; ?></option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="t">Condition</td>
                    <?php if ($product['condit'] == 1) { ?>
                        <td>New</td>
                    <?php } else { ?>
                        <td>Second</td>
                    <?php } ?>
                </tr>
                <tr>
                    <td class="t">Heavy</td>
                    <td><?= $product['weight']; ?> grams</td>
                </tr>
                <tr>
                    <td class="t">Stock</td>
                    <td><?= $product['stock']; ?> product</td>
                </tr>
                <tr>
                    <?php if ($setting['promo'] == 1) { ?>
                        <?php if ($product['promo_price'] == 0) { ?>
                            <?php $priceP = $product['price']; ?>
                        <?php } else { ?>
                            <?php $priceP = $product['promo_price']; ?>
                        <?php } ?>
                    <?php } else { ?>
                        <?php $priceP = $product['price']; ?>
                    <?php } ?>
                    <td class="t">Amount</td>
                    <td>
                        <button onclick="minusProduct(<?= $priceP; ?>)">-</button>
                        <!--
                        --><input disabled type="text" value="1" id="qtyProduct" class="valueJml">
                        <!--
                        --><?php if ($cart->num_rows() >= 10) { ?>
                            <button class="addCartMax">+</button>
                        <?php } else { ?>
                            <button onclick="plusProduct(<?= $priceP; ?>, <?= $product['stock']; ?>)">+</button>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td class="t">Total</td>
                    <!-- <td>$<span id="detailTotalPrice"><?= str_replace(",", ".", number_format($priceP)); ?></span></td> -->
                </tr>
                </table>
                <hr>
                <?php if ($this->session->userdata('login')) { ?>
                    <button class="btn btn-beli pl-5 pr-5" onclick="buy()">Buy</button>
                    <?php if ($cart->num_rows() >= 10) { ?>
                        <button class="btn btn-keranjang addCartMax">Add to cart</button>
                    <?php } else { ?>
                        <button class="btn btn-keranjang" onclick="addCart()">Add to cart</button>
                    <?php } ?>
                <?php } else { ?>
                    <a href="<?= base_url(); ?>login" class="btn btn-login">Buy</a>
                <?php } ?>
            </div>
        </div>
    </div>
    <hr>
    <div class="description">
        <div class="top-desc">
            <h4 class="title-desc">Deksription</h4>
            <button class="share">
                <i class="fa fa-share-alt"></i> Share
            </button>
            <div class="share-dd">
                <a href="https://www.facebook.com/share.php?u=<?= base_url(); ?>p/<?= $product['slugP']; ?>" target="_blank" style="color: #3b5998">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://web.whatsapp.com/send?text=<?= base_url(); ?>p/<?= $product['slugP']; ?>" target="_blank" style="color: #128c7e">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?url=<?= base_url(); ?>p/<?= $product['slugP']; ?>" target="_blank" style="color: #1da1f2">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
        <hr>
        <?= nl2br($product['description']); ?>
    </div>
    <hr>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    function plusProduct(price, stock) {
        let inputJml = 10;
        inputJml = parseInt($("input.valueJml").val());
        inputJml = inputJml + 1;
        if (inputJml > 10) {
            swal({
                text: "Sorry, you can't add more than 10 products to cart",
                icon: 'warning'
            });
            inputJml = inputJml - 1;
        }
        if (inputJml <= stock) {
            $.ajax({
                url: `<?= base_url(); ?>products/getgrosir?product=<?= $product['productId']; ?>&stock=${inputJml}`,
                type: "get",
                async: true,
                success: function(response) {
                    if (response) {
                        $("input.valueJml").val(inputJml);
                        $("td.price").html("$ " + number_format(response).split(",").join(".") + " <small style='font-size: 13px; font-weight: normal' class='badge badge-info'>grosir</small>");
                        const newPrice = inputJml * response;
                        const rpFormat = number_format(newPrice);
                        $("#detailTotalPrice").text(rpFormat.split(",").join("."));
                    } else {
                        $("input.valueJml").val(inputJml);
                        $("td.price").html("$ " + number_format(price).split(",").join("."));
                        const newPrice = inputJml * price;
                        const rpFormat = number_format(newPrice);
                        $("#detailTotalPrice").text(rpFormat.split(",").join("."));
                    }
                }
            })
        }
    }

    function minusProduct(price) {
        let inputJml;
        inputJml = parseInt($("input.valueJml").val());
        inputJml = inputJml - 1;
        if (inputJml >= 1) {
            $.ajax({
                url: `<?= base_url(); ?>products/getgrosir?product=<?= $product['productId']; ?>&stock=${inputJml}`,
                type: "get",
                async: true,
                success: function(response) {
                    if (response) {
                        $("input.valueJml").val(inputJml);
                        $("td.price").html("Rp " + number_format(response).split(",").join(".") + " <small style='font-size: 13px; font-weight: normal' class='badge badge-info'>grosir</small>");
                        const newPrice = inputJml * response;
                        const rpFormat = number_format(newPrice);
                        $("#detailTotalPrice").text(rpFormat.split(",").join("."));
                    } else {
                        $("input.valueJml").val(inputJml);
                        $("td.price").html("Rp " + number_format(price).split(",").join("."));
                        const newPrice = inputJml * price;
                        const rpFormat = number_format(newPrice);
                        $("#detailTotalPrice").text(rpFormat.split(",").join("."));
                    }
                }
            })
        }
    }

    function number_format(number, decimals, decPoint, thousandsSep) {
        number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
        var n = !isFinite(+number) ? 0 : +number
        var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
        var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
        var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
        var s = ''

        var toFixedFix = function(n, prec) {
            var k = Math.pow(10, prec)
            return '' + (Math.round(n * k) / k)
                .toFixed(prec)
        }

        // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || ''
            s[1] += new Array(prec - s[1].length + 1).join('0')
        }

        return s.join(dec)
    }

    function buy() {
        $.ajax({
            url: "<?= base_url(); ?>cart/add_to_cart",
            type: "post",
            data: {
                id: <?= $product['productId']; ?>,
                qty: $("#qtyProduct").val()
            },
            success: function(data) {
                location.href = "<?= base_url(); ?>cart"
            }
        })
    }

    function addCart() {
        $.ajax({
            url: "<?= base_url(); ?>cart/add_to_cart",
            type: "post",
            data: {
                id: <?= $product['productId']; ?>,
                qty: $("#qtyProduct").val()
            },
            success: function(data) {
                $(".navbar-cart-inform").html(`<i class="fa fa-shopping-cart"></i> Keranjang(<?= count($this->cart->contents()) + 1; ?>)`);
                swal({
                        title: "Successfully Added to Cart",
                        text: `<?= $product['title']; ?>`,
                        icon: "success",
                        buttons: true,
                        buttons: ["Continue Shopping", "View Cart"],
                    })
                    .then((cart) => {
                        if (cart) {
                            location.href = "<?= base_url(); ?>cart"
                        }
                    });
            }
        })
    }

    //MaxAddToCart
    $('.addCartMax').on('click', function() {
        swal({
            text: "Sorry, you can't add more than 10 products to cart",
            icon: 'warning'
        });
    })

    // slider product
    const containerImgProduct = document.querySelector("div.wrapper div.top div.main-top div.img");
    const jumboImgProduct = document.querySelector("div.wrapper div.top div.main-top div.img img.jumbo-thumb");
    const jumboHrefImgProduct = document.querySelector("div.wrapper div.top div.main-top div.img a");
    const thumbsImgProduct = document.querySelectorAll("div.wrapper div.top div.main-top div.img div.img-slider img.thumb");

    containerImgProduct.addEventListener('click', function(e) {
        if (e.target.className == 'thumb') {
            jumboImgProduct.src = e.target.src;
            jumboHrefImgProduct.href = e.target.src;

            thumbsImgProduct.forEach(function(thumb) {
                thumb.className = 'thumb';
            })
        }
    })
</script>