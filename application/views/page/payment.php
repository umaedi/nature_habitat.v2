<form action="<?= base_url(); ?>payment/succesfully" method="post">
    <div class="wrapper">
        <div class="core">
            <?php if ($cart->num_rows() > 0) { ?>
                <div class="products">
                    <table class="table">
                        <tr>
                            <th>Product</th>
                            <th>Amount</th>
                            <th>Desc</th>
                            <th>Price</th>
                        </tr>
                        <?php foreach ($cart->result_array() as $item) : ?>
                            <tr>
                                <td># <?= $item['product_name']; ?></td>
                                <td class="text-center"><?= $item['qty']; ?></td>
                                <?php if ($item['ket'] == "") { ?>
                                    <td>-</td>
                                <?php } else { ?>
                                    <td><?= $item['ket']; ?></td>
                                <?php } ?>
                                <td>Rp<?= number_format($item['price'] * $item['qty'], 0, ",", "."); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <div class="line"></div>
                <div class="address">
                    <h2 class="title">Shipping address</h2>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="label">Address As</label>
                                <input type="text" id="label" autocomplete="off" class="form-control" placeholder="Example: Home, Office, Boarding House, etc" required name="label">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Recipient's name</label>
                                <input type="text" id="name" autocomplete="off" class="form-control" required name="name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="telp">Phone number</label>
                                <input type="number" id="telp" autocomplete="off" class="form-control" required name="telp">
                                <small class="text-muted">Example: 081234567890</small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="zipcode">Postal code</label>
                                <input type="number" id="zipcode" autocomplete="off" class="form-control" required name="zipcode">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="paymentSelectProvinces">Province</label>
                                <select name="paymentSelectProvinces" id="paymentSelectProvinces" class="form-control" required>
                                    <option></option>
                                    <?php foreach ($provinces as $p) : ?>
                                        <option value="<?= $p['province_id']; ?>"><?= $p['province']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="paymentSelectRegencies">County/City</label>
                                <select name="paymentSelectRegencies" id="paymentSelectRegencies" class="form-control" required>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="district">Districts</label>
                                <input type="text" class="form-control" autocomplete="off" id="district" name="district" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="village">Village/Village</label>
                                <input type="text" class="form-control" autocomplete="off" id="village" name="village" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" class="form-control" placeholder="Fill in the street name, house number, building name, etc." required></textarea>
                        </div>
                    </div>
                </div>
                <div class="line mt-4"></div>
                <div class="send">
                    <h2 class="title">Shipping Method</h2>
                    <small class="text-danger" id="paymentTextNotSupportDelivery" style="display: none;">The delivery method is not yet available for your place.</small>
                    <div class="form-group mt-3" id="groupPaymentSelectKurir">
                        <select name="paymentSelectKurir" id="paymentSelectKurir" class="form-control" required>
                            <option></option>
                        </select>
                    </div>
                </div>
            <?php } else { ?>
                <div class="alert alert-warning">Oops. You don't have any purchases yet. Let's go shopping first.</div>
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
        <input type="hidden" id="paymentPriceTotalAll" value="<?= $totalall; ?>">
        <div class="total shadow">
            <h2 class="title">Shopping Summary</h2>
            <hr>
            <div class="list">
                <p>Total Shopping</p>
                <p>Rp<?= number_format($totalall, 0, ",", "."); ?></p>
            </div>
            <div class="list">
                <p>Shipping costs</p>
                <p id="paymentSendingPrice">$0</p>
            </div>
            <div class="list">
                <p>Piece</p>
                <p id="potonganCouponCheckoutPageShow">$0</p>
            </div>
            <div class="list">
                <p>Total bill</p>
                <p id="paymentTotalAll">$<?= number_format($totalall, 0, ",", "."); ?></p>
            </div>
            <hr>
            <input type="hidden" name="potongan" id="potonganCouponCheckoutPageValue" value="0">
            <input type="hidden" name="id_coupon" id="idCouponCheckoutPage" value="0">
            <input type="hidden" name="ongkir" value="0" id="ongkirValueOrder">
            <div class="form-group mt-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="ENTER COUPON" autocomplete="off" id="inputCouponCheckoutPage">
                    <div class="input-group-append">
                        <button class="btn btn-kupon text-light btn-apply-coupon" type="button" id="btnForApplyCouponCheckoutPage">APPLY</button>
                    </div>
                </div>
                <small class="text-danger" id="msgDangerCouponWrongCheckoutPage"></small>
                <small class="text-success mt-1" id="msgSuccessCouponCheckout" style="display: none;">Coupon successfully used</small>
            </div>
            <?php if ($cart->num_rows() > 0) { ?>
                <button class="btn btn-bayar btn btn-block mt-2" id="btnPaymentNow" type="submit">Pay Now</button>
            <?php } else { ?>
                <div class="alert mt-2 alert-warning">Your basket is still empty.</div>
                <a href="<?= base_url(); ?>">
                    <button class="btn btn-dark btn btn-block mt-2">Shop First</button>
                </a>
            <?php } ?>
        </div>
    </div>
</form>