<?php
      $this->load->view('static/head.php');
  ?>
  <?php
      $this->load->view('static/navbar.php');
  ?>

<div class="breadcrumbs d-flex align-items-center" style="background-image: url('https://ishr.ch/wp-content/uploads/2021/12/law_flickr_3.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>About</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>About</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

<section class="vh-100" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem; background-color:grey">
          <div class="row g-0 justify-content-center">
            
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
              <?php if(isset($error)): ?>
                   <p style="background-color:red" class="p-2 rounded-3"><?php echo $error; ?></p>
              <?php endif; ?>
             
                <form method="post" action="<?php echo site_url('LoginController/login'); ?>" enctype="multipart/form-data">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="email" name="email"  id="email" class="form-control form-control-lg" value="<?= set_value('email') ?>" required/>
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="password"  name="password"  class="form-control form-control-lg" value=" <?= set_value('password')?>"required />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                  </div>

                 
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
