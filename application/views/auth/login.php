<?php echo $this->session->flashdata('verification'); ?>
<div class="container">
    <a href="<?= base_url(); ?>">
        <h2 class="brand-name"><?= $this->Settings_model->general()["app_name"]; ?></h2>
    </a>
    <p class="subtitle">Please login to the account now</p>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php echo $this->session->flashdata('failed'); ?>
            <form action="<?= base_url(); ?>login?redirect=<?= $redirect; ?>" method="post">
                <div class="form-group">
                    <input type="email" placeholder="Email" name="email" class="form-control" autocomplete="off" value="<?php echo set_value('email'); ?>">
                    <small class="form-text text-danger pl-1"><?php echo form_error('email'); ?></small>
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" name="password" class="form-control" autocomplete="off">
                    <small class="form-text text-danger pl-1"><?php echo form_error('password'); ?></small>
                </div>
                <div class="custom-control custom-checkbox mr-sm-2">
                    <input type="checkbox" name="remember" class="custom-control-input" id="remember">
                    <label class="custom-control-label" for="remember">Remember me</label>
                </div>
                <button type="submit" class="btn btn-block bg-login mt-3 mb-1">Login</button>
                <a href="<?= base_url(); ?>reset-password">Forgot the password?</a>
                <hr>
                <p class="text-lead">Or don't have an account yet? <a href="<?= base_url(); ?>register">Register</a> now</p>
            </form>
        </div>
    </div>
</div>