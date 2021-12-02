<div class="container">
  <div class="row">
    <div class="col">
    </div>
  </div>
  <a href="<?= base_url(); ?>">
    <h2 class="brand-name"><?= $this->Settings_model->general()["app_name"]; ?></h2>
  </a>
  <p class="subtitle">For more update design, price & product inquiries, special order, hotel & restaurant furniture project and other inquiries please provide us your contact & business details so we can un derstand you better.</p>
  <div class="form-outer">
    <form action="" <?= base_url(); ?>register" method="post">
      <div class="page slide-page">
        <div class="row">
          <div class="col-12">
            <div class="title">Contact Details</div>
          </div>
          <div class="col-lg-6">
            <div class="field">
              <div class="label">Brand*</div>
              <input type="text" name="brand" required>
            </div>
            <div class="field">
              <div class="label">Company</div>
              <input type="text" name="company">
            </div>
            <div class="field">
              <div class="label">Country</div>
              <input type="text" name="country">
            </div>
            <div class="field">
              <div class="label">Contact Person</div>
              <input type="text" name="contact">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="field">
              <div class="label">Phone No*</div>
              <input type="text" name="phone">
            </div>
            <div class="field">
              <div class="label">WhatsApp No</div>
              <input type="text" name="whatsapp">
            </div>
            <div class="field">
              <div class="label">Email Address</div>
              <input type="email" name="email">
            </div>
            <div class="field">
              <div class="label">Website</div>
              <input type="text" name="website">
            </div>
            <div class="field">
              <button class="firstNext next">Next</button>
            </div>
          </div>
        </div>
      </div>

      <div class="page">
        <div class="row">
          <div class="col-12">
            <div class="title">Business Information (have to choose at least 1)</div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <p class="type-of">Type Of Busines</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value=" Furniture Shops / Retails" id="defaultCheck1" name="type1">
              <label class="form-check-label" for="defaultCheck1">
                Furniture Shops / Retails
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Furniture Wholeseller" id="defaultCheck1" name="type2">
              <label class="form-check-label" for="defaultCheck1">
                Furniture Wholeseller
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Furniture for projects (hotels & restaurants)" id="defaultCheck1" name="type3">
              <label class="form-check-label" for="defaultCheck1">
                Furniture for projects (hotels & restaurants)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value=" Online Retails" id="defaultCheck1" name="type4">
              <label class="form-check-label" for="defaultCheck1">
                Online Retails
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Exterior Design" id="defaultCheck1" name="type5">
              <label class="form-check-label" for="defaultCheck1">
                Exterior Design
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Buying Agent" id="defaultCheck1" name="type6">
              <label class="form-check-label" for="defaultCheck1">
                Buying Agent
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Furniture Start Up" id="defaultCheck1" name="type7">
              <label class="form-check-label" for="defaultCheck1">
                Furniture Start Up
              </label>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Other, please explain</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="type-other"></textarea>
            </div>
            <div class="form-group">
              <label class="type-of" for="exampleFormControlInput1">Your Flashship store / your main product distribution in which city. (max 5)</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Alphabet country ( example : US, ID, UK, IN, dll)" name="flashop_store">
            </div>
            <p class="type-of">Your interested in product :</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Indoor" id="defaultCheck1" name="indoor">
              <label class="form-check-label" for="defaultCheck1">
                Indoor
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Outdoor" id="defaultCheck1" name="outdoor">
              <label class="form-check-label" for="defaultCheck1">
                Outdoor
              </label>
            </div>
            <p class="type-of">If you buy from us you will :</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Choose our product" id="defaultCheck1" name="buy_form1">
              <label class="form-check-label" for="defaultCheck1">
                Choose our product
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Develop your own design" id="defaultCheck1" name="buy_form2">
              <label class="form-check-label" for="defaultCheck1">
                Develop your own design
              </label>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <p class="type-of">Your product mostly sale in which region (max 3)</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Europe" id="defaultCheck1" name="region1">
              <label class="form-check-label" for="defaultCheck1">
                Europe
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="East Europe" id="defaultCheck1" name="region2">
              <label class="form-check-label" for="defaultCheck1">
                East Europe
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="USA" id="defaultCheck1" name="region3">
              <label class="form-check-label" for="defaultCheck1">
                USA
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="South America" id="defaultCheck1" name="region4">
              <label class="form-check-label" for="defaultCheck1">
                South America
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Australia" id="defaultCheck1" name="region5">
              <label class="form-check-label" for="defaultCheck1">
                Australia
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Asia" id="defaultCheck1" name="region6">
              <label class="form-check-label" for="defaultCheck1">
                Asia
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Middle East" id="defaultCheck1" name="region7">
              <label class="form-check-label" for="defaultCheck1">
                Middle East
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Africa" id="defaultCheck1" name="region8">
              <label class="form-check-label" for="defaultCheck1">
                Africa
              </label>
            </div>
            <div class="field btns">
              <button class="prev-1 prev">Previous</button>
              <button class="next-1 next">Next</button>
            </div>
          </div>
        </div>
      </div>

      <div class="page">
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-6  col-sm-12">
            <div class="title">How can we help you</div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">For any inquires please fill the form below, we will contact you as soon as we can</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="help"></textarea>
            </div>
            <div class="field btns">
              <button class="prev-2 prev">Previous</button>
              <button type="submit" class="next-2 next">Next</button>
            </div>
          </div>
        </div>
      </div>
      <div class="page">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="form-group">
              <div class="title">Create Your Account</div>
              <label for="exampleFormControlInput1">Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
              <small class="form-text text-danger pl-1"><?php echo form_error('name'); ?></small>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Password</label>
              <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
              <small class="form-text text-danger pl-1"><?php echo form_error('password'); ?></small>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Confirm Password</label>
              <input type="password" class="form-control" id="exampleFormControlInput1" name="password1">
              <small class="form-text text-danger pl-1"><?php echo form_error('password1'); ?></small>
            </div>
            <small class="text-muted">I have read and agree <a href="<?= base_url(); ?>terms" target="_blank">Terms and Conditions</a> and <a href="<?= base_url(); ?>privacy-policy" target="_blank">Privacy Policy</a> <?= $this->Settings_model->general()["app_name"]; ?></small>
            <div class="row justify-content-center">
              <div class="field btns">
                <button class="prev-3 prev">Previous</button>
                <button class="submit">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<?php if ($this->session->flashdata('success')) { ?>
  <div class="modal fade" id="modalRegisterSuccess" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="width: 400px">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Registrasi Berhasil</h5>
        </div>
        <div class="modal-body">
          <p class="text-center h1"><i class="fa text-dark fa-envelope-open-text"></i></p>
          <p class="text-muted">We have sent an account verification email to your email. Please check your inbox or spam.</p>
          <a href="<?= base_url(); ?>login" class="btn btn-block btn-dark">Go to login page</a>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<script>
  const slidePage = document.querySelector(".slide-page");
  const nextBtnFirst = document.querySelector(".firstNext");
  const prevBtnSec = document.querySelector(".prev-1");
  const nextBtnSec = document.querySelector(".next-1");
  const prevBtnThird = document.querySelector(".prev-2");
  const nextBtnThird = document.querySelector(".next-2");
  const prevBtnFourth = document.querySelector(".prev-3");
  // const submitBtn = document.querySelector(".submit");
  const progressText = document.querySelectorAll(".step p");
  const progressCheck = document.querySelectorAll(".step .check");
  const bullet = document.querySelectorAll(".step .bullet");
  let current = 1;

  nextBtnFirst.addEventListener("click", function(event) {
    event.preventDefault();
    slidePage.style.marginLeft = "-25%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
  });
  nextBtnSec.addEventListener("click", function(event) {
    event.preventDefault();
    slidePage.style.marginLeft = "-50%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
  });
  nextBtnThird.addEventListener("click", function(event) {
    event.preventDefault();
    slidePage.style.marginLeft = "-75%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
  });

  prevBtnSec.addEventListener("click", function(event) {
    event.preventDefault();
    slidePage.style.marginLeft = "0%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    current -= 1;
  });
  prevBtnThird.addEventListener("click", function(event) {
    event.preventDefault();
    slidePage.style.marginLeft = "-25%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    current -= 1;
  });
  prevBtnFourth.addEventListener("click", function(event) {
    event.preventDefault();
    slidePage.style.marginLeft = "-50%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    current -= 1;
  });
</script>