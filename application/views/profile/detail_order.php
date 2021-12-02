<head>
    <script type="text/javascript" <?php if ($this->config->item('midtrans_production')) { ?> src="https://app.midtrans.com/snap/snap.js" <?php } else { ?> src="https://app.sandbox.midtrans.com/snap/snap.js" <?php } ?> data-client-key="<?= $this->Settings_model->general()["client_api_midtrans"]; ?>"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<?php
$id = $ord['province'];
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.rajaongkir.com/starter/province?id=$id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "key: " . $this->Settings_model->general()["api_rajaongkir"]
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $response =  json_decode($response, true);
    $province = $response['rajaongkir']['results']['province'];
}

$id = $ord['regency'];
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.rajaongkir.com/starter/city?id=$id",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "key: " . $this->Settings_model->general()["api_rajaongkir"]
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $response =  json_decode($response, true);
    $regency = $response['rajaongkir']['results']['city_name'];
}

?>
<?php echo $this->session->flashdata('success'); ?>
<form id="payment-form" method="post" action="<?= base_url() ?>snap/finish?invoice=<?= $ord['invoice_code']; ?>">
    <input type="hidden" name="result_type" id="result-type" value=""></div>
    <input type="hidden" name="result_data" id="result-data" value=""></div>
</form>
<div class="wrapper">
    <?php include 'menu.php'; ?>
    <div class="core">
        <?php if ($ord['courier'] == "cod") { ?>
            <?php if ($ord['status'] != "4") { ?>
                <h2 class="title">COD (Cash of Delivery)</h2>
                <p>This order uses the COD (Cash of Delivery) method. Please contact the seller via WhatsApp by: <a href="https://wa.me/<?= $this->Settings_model->general()["whatsappv2"]; ?>?text=Halo, I bought the product at <?= $this->Settings_model->general()["app_name"]; ?> using the COD/Cash of Delivery method with Order ID <?= $ord['invoice_code']; ?>" target="_blank" class="btn btn-success btn-sm">Click Here</a></h2>
                    <hr>
                    <hr>
                <?php } ?>
            <?php } ?>
            <?php if ($ord['status'] == 3) { ?>
                <div class="alert alert-info">If the order has arrived at its destination, please press the button below</div>
                <a href="<?= base_url(); ?>profile/finish_transaction?invoice=<?= $ord['invoice_code'] ?>&resi=<?= $ord['resi'] ?>" class="btn btn-sm btn-secondary" onclick="return confirm('Yakin sudah sampai?');">Sudah Sampai & Selesai</a>
                <hr>
                <?php if ($ord['resi'] != '0') { ?>
                    <h3 class=" lead text-info">RESI: <?= $ord['resi']; ?></h3>
                <?php } ?>
                <hr>
            <?php } else if ($ord['pay_status'] == "") { ?>
                <div class="alert alert-info">You have not selected a payment method. Please click the button below to select the desired payment method.</div>
                <button id="pay-button" class="btn btn-sm btn-secondary">Choose Payment Method</button>
                <hr>
            <?php } else if ($ord['pay_status'] == "pending") { ?>
                <div class="alert alert-info">You haven't made a payment yet. Click the button below to view the payment guide. (maximum payment limit is 1x24 hours)</div>
                <a href="<?= $ord['link_pay']; ?>" target="_blank" class="btn btn-sm btn-secondary">Payment Guide</a>
                <hr>
            <?php } ?>
            <h2 class="title">Detail Order</h2>
            <hr>
            <table class="table table-sm table-borderless">
                <tr>
                    <td>Order ID</td>
                    <td><?= $ord['invoice_code']; ?></td>
                </tr>
                <tr>
                    <td>Order Date</td>
                    <td><?= $ord['date_input']; ?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <?php if ($ord['courier'] == "cod") { ?>
                        <td>Cash of Delivery</td>
                    <?php } else { ?>
                        <?php if ($ord['pay_status'] == 'pending' || $ord['pay_status'] == '') { ?>
                            <td>Not yet paid</td>
                        <?php } else if ($ord['pay_status'] == 'settlement' && $ord['status'] == 0) { ?>
                            <td>Waiting for confirmation</td>
                        <?php } else if ($ord['status'] == 2) { ?>
                            <td>On Process</td>
                        <?php } else if ($ord['status'] == 3) { ?>
                            <td>On delivery</td>
                        <?php } else { ?>
                            <td>Finish</td>
                        <?php } ?>
                    <?php } ?>
                </tr>
                <tr>
                    <td>Total payment</td>
                    <th class="text-primary">Rp<?= number_format($ord['total_all'], 0, ",", "."); ?></th>
                </tr>
            </table>
            <hr>
            <hr>
            <h2 class="title">Shipping address</h2>
            <hr>
            <table class="table table-sm table-borderless">
                <tr>
                    <td>Recipient's name</td>
                    <td><?= $ord['name']; ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?= $ord['address']; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><?= $ord['village']; ?> - <?= $ord['district']; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><?= $regency; ?> <?= $province; ?> - <?= $ord['zipcode']; ?></td>
                </tr>
                <tr>
                    <td>Telphone</td>
                    <td><?= $ord['telp']; ?></td>
                </tr>
            </table>
            <hr>
            <hr>
            <div class="row">
                <div class="col-md-7">
                    <h2 class="title mb-3">Order Products</h2>
                    <?php foreach ($product_order->result_array() as $p) : ?>
                        <div class="item-product">
                            <img src="<?= base_url(); ?>assets/images/product/<?= $p['img']; ?>" alt="produk <?= $p['product_name']; ?>">
                            <a href="<?= base_url(); ?>p/<?= $p['slug']; ?>">
                                <h3 class="product_name mb-0"><?= $p['product_name']; ?></h3>
                            </a>
                            <p class="mb-0">Amount: <?= $p['qty']; ?></p>
                            <p class="mb-0 price">$<?= number_format($p['price'] * $p['qty'], 0, ",", "."); ?></p>
                            <div class="clearfix"></div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-md-5">
                    <h2 class="title">Payment Summary</h2>
                    <table class="table table-sm table-borderless">
                        <tr>
                            <td>Number of Products</td>
                            <td>: <?= $product_order->num_rows(); ?></td>
                        </tr>
                        <tr>
                            <td>Product Price</td>
                            <td>: $<?= number_format($ord['total_price'], 0, ",", "."); ?></td>
                        </tr>
                        <tr>
                            <td>Shipping cost</td>
                            <td>: $<?= number_format($ord['ongkir'], 0, ",", "."); ?></td>
                        </tr>
                        <tr>
                            <td>Piece</td>
                            <td>: <?= "Rp" . number_format($ord['potongan'], 0, ",", "."); ?></td>
                        </tr>
                        <tr>
                            <td>Total Shopping</td>
                            <td>: $<?= number_format($ord['total_all'], 0, ",", "."); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr>
            <?php if ($ord['courier'] != "cod") { ?>
                <hr>
                <?php
                if ($ord['pay_status'] == 'settlement' && $ord['status'] == 0) {
                    $pay_stat = 100;
                    $sedpros = 0;
                    $dalpen = 0;
                    $satuj = 0;
                } else if ($ord['status'] == 2) {
                    $pay_stat = 100;
                    $sedpros = 100;
                    $dalpen = 0;
                    $satuj = 0;
                } else if ($ord['status'] == 3) {
                    $pay_stat = 100;
                    $sedpros = 100;
                    $dalpen = 100;
                    $satuj = 0;
                } else if ($ord['status'] == 4) {
                    $pay_stat = 100;
                    $sedpros = 100;
                    $dalpen = 100;
                    $satuj = 100;
                }
                ?>
                <h2 class="title mb-3">Order Status</h2>
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-muted mb-1">Already paid</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="<?= $pay_stat; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $pay_stat; ?>%"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <p class="text-muted mb-1">Being processed</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="<?= $sedpros; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $sedpros; ?>%"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <p class="text-muted mb-1">On delivery</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="<?= $dalpen; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $dalpen; ?>%"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <p class="text-muted mb-1">Arrive at destination</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="<?= $satuj; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $satuj; ?>%"></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
    </div>
</div>
<script type="text/javascript">
    const type_order = "<?= $ord['pay_status'] ?>";
    if (type_order == "") {

        modalMidtrans();
        $("#pay-button").click(function() {
            modalMidtrans();
        })
    }

    function modalMidtrans() {
        $.ajax({
            url: '<?= base_url() ?>snap/token?invoice=<?= $ord['invoice_code']; ?>',
            cache: false,

            success: function(data) {
                //location = data;

                console.log('token = ' + data);

                var resultType = document.getElementById('result-type');
                var resultData = document.getElementById('result-data');

                function changeResult(type, data) {
                    $("#result-type").val(type);
                    $("#result-data").val(JSON.stringify(data));
                    //resultType.innerHTML = type;
                    //resultData.innerHTML = JSON.stringify(data);
                }

                snap.pay(data, {

                    onSuccess: function(result) {
                        changeResult('success', result);
                        console.log(result.status_message);
                        console.log(result);
                        $("#payment-form").submit();
                    },
                    onPending: function(result) {
                        changeResult('pending', result);
                        console.log(result.status_message);
                        $("#payment-form").submit();
                    },
                    onError: function(result) {
                        changeResult('error', result);
                        console.log(result.status_message);
                        $("#payment-form").submit();
                    }
                });
            }
        });
    }
</script>