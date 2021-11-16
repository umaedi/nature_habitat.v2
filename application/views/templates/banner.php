<!-- Slide -->
<?php $banner = $this->Settings_model->getBanner(); ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php
    foreach ($banner->result_array() as $key => $value) {
      $active = ($key == 0) ? 'active' : '';
      echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $key . '" class="' . $active . '"></li>';
    }
    ?>
  </ol>
  <section class="slide-page2">
    <div class="slide-wrapper">
      <div class="slide-bg">
        <div class="carousel-inner">
          <?php
          foreach ($banner->result_array() as $key => $value) {
            $active = ($key == 0) ? 'active' : '';
            echo '<div class="carousel-item ' . $active . '">
            <a href="' . $value['url'] . '"><img data-src="' . base_url() . 'assets/images/banner/' . $value['img'] . '" class="lazyload"></a>
        </div>';
          }
          ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <div class="overlay">
          <div class="st2-slide-content">
            <h2 class="st2-slide-title">New Arrival <br>Summer New Collection</h2>
            <p class="st2-slide-des">Bring Freshness To Your Architecture</p>
            <button class="st2-btn-submit st2-submit-slide">
              <span class="st2-submit-text">Shop Now</span>
              <span class="st2-submit-icon"><i class="lnr lnr-arrow-right"></i></span>
            </button>
          </div>
        </div>
      </div>
    </div>
</div>