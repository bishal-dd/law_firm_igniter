
<?php
      $this->load->view('static/head.php');
  ?>
  <!-- ======= Header ======= -->
<?php $this->load->view('static/navbar.php')?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome to <span>Mee Pham Drimed Law Office</span></h2>
           
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <?php foreach($slider as $i=>$image):?>
      <div class="carousel-item active" style="background-image: url(<?php echo base_url();?>/<?php echo $image->Image;?>)"></div>
      <?php endforeach; ?>
     

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">



 

    <!-- ======= Services Section ======= -->
   

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-3">
          <div class="col-lg-5  img-bg"  style="background-image: url(https://res.cloudinary.com/dnmtsuwhc/image/upload/v1681099329/WhatsApp_Image_2023-04-10_at_9.46.13_AM_1_uvsuop.jpg); height: 700px" data-aos="zoom-in" data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            
            <p>Attorney Thinley Yuden holds a degree of B. Com LL.B from the North Bengal University (Indian Institute of Legal Studies). She graduated in the year 2019 and did her Post Graduate Diploma in National Law from Royal Institute of Management, Bhutan in the year of 2020 and passed the prestigious Bar Council Examination of Bhutan in the year of 2021. She received awards for the Academic Excellence in her degree of Law School (1st, 2nd, 3rd, 4th and 5th year). She also served as the College Representative from the year of 2016 till 2017. She is a Certified practitioner in the Dispute Resolution and Mediation Skills and also a member of the Bar Council Committee of Bhutan, the Jabmi Tshogdey. She has the expertise in:</p>

              <ul>

              <li> <h4><a href="" class="stretched-link " style="color:grey">Intellectual Property Rights</a></h4></li>
              <li> <h4><a href="" class="stretched-link" style="color:grey">Contract Act</a></h4></li>
              <li> <h4><a href="" class="stretched-link" style="color:grey">FinTech</a></h4></li>
              <li><h4><a href="" class="stretched-link" style="color:grey">Securities Exchange</a></h4></li>
              <li><h4><a href="" class="stretched-link" style="color:grey">Bankruptcy</a></h4></li>
              <li><h4><a href="" class="stretched-link" style="color:grey">Foreign Direct Investment (FDI)</a></h4></li>
              <li> <h4><a href="" class="stretched-link" style="color:grey">Banking Laws</a></h4></li>
              </ul>
              
             
               
          
       

          
              
         

           
               
            

          
                
            
		
                
             
                
             
              
            
               
             
           
          </div>
        </div>

      </div>
    </section><!-- End Alt Services Section -->

	<section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Services</h2>
          
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3>Provide Legal Due Diligence (Legal Vetting) in all areas of legal practices.</h3>
             
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Provide client need based legal advice, drafting or representation.</h3>
             
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-compass-drafting"></i>
              </div>
              <h3>Provide Mediation Services with professional competence.</h3>
              
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-trowel-bricks"></i>
              </div>
              <h3>Provide Consultancy services to the local and international companies, businesses, walk-in clients.</h3>
             
            </div>
          </div><!-- End Service Item -->

       

        </div>

      </div>
    </section><!-- End Services Section -->



   

  </main><!-- End #main -->

  <?php
      $this->load->view('static/footer.php');
  ?>