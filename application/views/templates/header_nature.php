<?php
$setting = $this->db->get('settings')->row_array();
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php if ($product) { ?>
    <meta name="description" content="<?= strip_tags(substr($product['description'], 0, 150)); ?>" />

    <meta property="og:type" content="product" />
    <meta property="og:title" content="<?= $product['title']; ?>" />
    <meta property="og:description" content="<?= strip_tags(substr($product['description'], 0, 150)); ?>" />
    <meta property="og:site_name" content="<?= $product['title']; ?>" />
    <meta property="og:image" content="<?= base_url(); ?>assets/images/product/<?= $product['img']; ?>" />
    <meta property="og:image:secure_url" content="<?= base_url(); ?>assets/images/product/<?= $product['img']; ?>" />

    <meta property="article:published_time" content="<?= $product['date_submit']; ?>" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?= $product['title']; ?>" />
    <meta name="twitter:description" content="<?= strip_tags(substr($product['description'], 0, 150)); ?>" />
    <meta name="twitter:image" content="<?= base_url(); ?>assets/images/product/<?= $product['img']; ?>" />
  <?php } else { ?>
    <meta name="description" content="<?= $this->Settings_model->getSetting()['short_desc']; ?>" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $this->Settings_model->general()['app_name']; ?>" />
    <meta property="og:description" content="<?= $this->Settings_model->getSetting()['short_desc']; ?>" />
    <meta property="og:url" content="<?= base_url(); ?>" />
    <meta property="og:site_name" content="<?= $this->Settings_model->general()['app_name']; ?>" />
    <meta property="og:image" content="<?= base_url(); ?>assets/images/logo/<?= $this->Settings_model->getSetting()['favicon']; ?>" />
    <meta property="og:image:secure_url" content="<?= base_url(); ?>assets/images/logo/<?= $this->Settings_model->getSetting()['favicon']; ?>" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?= $this->Settings_model->general()['app_name']; ?>" />
    <meta name="twitter:description" content="<?= $this->Settings_model->getSetting()['short_desc']; ?>" />
    <meta name="twitter:image" content="<?= base_url(); ?>assets/images/logo/<?= $this->Settings_model->getSetting()['favicon']; ?>" />
  <?php } ?>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/nature/fonts/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/nature/fonts/linearicons/style.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/nature/fonts/linea/styles.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/nature/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/nature/css/style.css">

  <!-- Cutom css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/app.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();  ?>assets/css/app-responsive.css">

  <link rel="shortcut icon" href="<?= base_url();  ?>assets/images/logo/<?= $setting['favicon']; ?>" type="image/x-icon" />

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/2baad1d54e.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="<?= base_url();  ?>assets/icofont/icofont.min.css">

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link rel="stylesheet" href="<?= base_url(); ?>assets/select2-4.0.6-rc.1/dist/css/select2.min.css">

  <link rel="stylesheet" href="<?= base_url(); ?>assets/lightbox2-2.11.1/dist/css/lightbox.css">

  <title><?= $title ?></title>
</head>

<body>

  <?php
  $setting = $this->db->get('settings')->row_array();
  $dateNow = date('Y-m-d H:i');
  $dateDB = $setting['promo_time'];
  $dateDBNew = str_replace("T", " ", $dateDB);
  if ($dateNow >= $dateDBNew) {
    $this->db->set('promo', 0);
    $this->db->update('settings');
  }
  ?>