<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Data User</h1>

    <!-- DataTales Example -->
    <?php echo $this->session->flashdata('failed'); ?>
    <div class="row">
        <div class="col-md-3">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <img src="<?= base_url(); ?>assets/images/profile/<?= $user['photo_profile']; ?>" width="100%">
                    <hr>
                    <h2 class="text-center"><?= $user['name']; ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-gray-800" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Contact Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-gray-800" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Business Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-gray-800" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">How can we help you</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="form-group row">
                                <label for="brand" class="col-sm-2 col-form-label">Brand</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['brand']; ?>">
                                </div>
                                <label for="brand" class="col-sm-2 col-form-label">Company</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['brand']; ?>">
                                </div>
                                <label for="brand" class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['country']; ?>">
                                </div>
                                <label for="brand" class="col-sm-2 col-form-label">CP</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['contact']; ?>">
                                </div>
                                <label for="brand" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['phone']; ?>">
                                </div>
                                <label for="brand" class="col-sm-2 col-form-label">WhatsApp</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['whatsapp']; ?>">
                                </div>
                                <label for="brand" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['email']; ?>">
                                </div>
                                <label for="brand" class="col-sm-2 col-form-label">Website</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['website']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="form-group row">
                                <label for="brand" class="col-sm-3 col-form-label">Type of business </label>
                                <div class="col-sm-9">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['busines']; ?>">
                                </div>
                                <label for="brand" class="col-sm-3 col-form-label">Your product mostly sale in which region (max 3)</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['region1']; ?>">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['region2']; ?>">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['region3']; ?>">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['region4']; ?>">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['region5']; ?>">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['region6']; ?>">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['region7']; ?>">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['region8']; ?>">
                                </div>
                                <label for="brand" class="col-sm-3 col-form-label">Your Flashship store / your main product distribution in which city. (max 5) </label>
                                <div class="col-sm-9">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['flashop_store']; ?>">
                                </div>
                                <label for="brand" class="col-sm-3 col-form-label">Your interested in product :</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['indoor']; ?>">
                                    <input type="text" readonly class="form-control-plaintext" id="brand" value=": <?= $user['outdoor']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <label for="brand" class="col-sm-12 col-form-label">How can we help you</label>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">For any inquires please fill the form below, we will contact you as soon as we can</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $user['help']; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->