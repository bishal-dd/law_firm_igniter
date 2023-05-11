<?php
      $this->load->view('static/head.php');
  ?>



<?php
      $this->load->view('static/navbar.php');
  ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('https://ishr.ch/wp-content/uploads/2021/12/law_flickr_3.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Events</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Events</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
      <!-- ======= Blog Section ======= -->
      <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 posts-list">
        <?php foreach(array_reverse($events) as $i=>$event): ?>
          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="<?php echo base_url();?>/<?php echo $event->Image;?>" class="img-fluid" alt="">
                <span class="post-date"><?php echo $event->Date?></span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title"><?php echo $event->Name?>  </h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>
                  </div>
                  <span class="px-3 text-black-50">/sss</span>
                  
                </div>

                <p>
                <?php echo $event->Description?>                </p>

                <hr>

                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->

          <?php endforeach; ?>

        </div><!-- End blog posts list -->

       

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <?php
      $this->load->view('static/footer.php');
  ?>