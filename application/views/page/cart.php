<div class="wrapper">
    <div class="navigation">
        <a href="<?= base_url(); ?>">Home</a>
        <i class="fa fa-caret-right"></i>
        <a>Cart</a>
    </div>
    <div class="core mt-4">
        <div class="product">
            <?php if ($cart->num_rows() > 0) { ?>
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
            <?php } ?>
        </div>
        <?php
        $totalall = 0;
        $totalitem = 0;
        foreach ($cart->result_array() as $c) {
            $totalall += intval($c['price']) * intval($c['qty']);
            $totalitem += intval($c['qty']);
        }
        ?>
        <div class="total shadow">
            <h2 class="title">Shopping Summary</h2>
            <hr>
            <div class="list">
                <p>Total Number of Items</p>
                <p><?= $totalitem; ?></p>
            </div>
            <div class="list">
                <p>Total Item Price</p>
                <p>Rp <?= number_format($totalall, 0, ",", "."); ?></p>
            </div>
            <?php if ($cart->num_rows() > 0) { ?>
                <a href="<?= base_url(); ?>payment">
                    <button class="btn btn-pembayaran btn btn-block mt-2">Continue to Payment</button>
                </a>
            <?php } else { ?>
                <a href="<?= base_url(); ?>">
                    <button class="btn btn-pembayaran btn btn-block mt-2">Shop First</button>
                </a>
            <?php } ?>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalEditDescription" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add Description</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="bodyModalEditKet">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnEditKetProduct" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalAddDescription" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add Description</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="bodyModalAddKet">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnSaveKetProduct" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    function showModalAddKet(id) {
        $("#bodyModalAddKet").html(`<div class="form-group">
            <textarea name="ket_product" id="ket_product" class="form-control form-control-sm" placeholder="Model, ukuran, warna, dll."></textarea>
            <input type="hidden" id="rowid_pro" value=${id}>
        </div>`);
    }

    function showModalEditKet(id) {
        $.ajax({
            url: "<?= base_url(); ?>cart/get_item",
            type: "post",
            dataType: "json",
            data: {
                id: id
            },
            success: function(res) {
                $("#bodyModalEditKet").html(`<div class="form-group">
                    <textarea name="ket_product" id="ket_product_edit" class="form-control form-control-sm" placeholder="Model, ukuran, warna, dll.">${res.ket}</textarea>
                    <input type="hidden" id="rowid_pro_edit" value=${id}>
                </div>`);
            }
        })
    }

    $("#btnSaveKetProduct").on('click', function() {
        const rowid = $("#rowid_pro").val();
        const ket = $("#ket_product").val();
        $.ajax({
            url: "<?= base_url(); ?>cart/add_ket",
            type: "post",
            data: {
                rowid: rowid,
                ket: ket
            },
            success: function() {
                $("small.desc_product_" + rowid).html("ket: " + ket + ` <a href="#" class="text-dark" data-toggle="modal" data-target="#modalEditDescription" onclick="showModalEditKet('${rowid}')"><i class="fa text-info fa-edit"></i></a>`);
            }
        })
    })

    $("#btnEditKetProduct").on('click', function() {
        const rowid = $("#rowid_pro_edit").val();
        const ket = $("#ket_product_edit").val();
        $.ajax({
            url: "<?= base_url(); ?>cart/add_ket",
            type: "post",
            data: {
                rowid: rowid,
                ket: ket
            },
            success: function() {
                $("small.desc_product_" + rowid).html("ket: " + ket + ` <a href="#" class="text-dark" data-toggle="modal" data-target="#modalEditDescription" onclick="showModalEditKet('${rowid}')"><i class="fa text-info fa-edit"></i></a>`);
            }
        })
    })
</script>