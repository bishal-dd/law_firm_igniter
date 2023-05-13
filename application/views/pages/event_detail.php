
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

        <h2>Event Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Event Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-lg-8">
          <?php $row = $event[0]; ?>
            <article class="blog-details">

              <div class="post-img">
                <img src="<?php echo base_url();?>/<?php echo $row->Image?>" alt="" class="img-fluid">
              </div>

              <h2 class="title"><?php echo $row->Name; ?> </h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <?php echo $row->Date; ?></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                    <?php echo $row->Description?>
                </p>

               

              </div><!-- End post content -->

            

            </article><!-- End blog post -->

        
            </div><!-- End post author -->

           


          <div class="col-lg-4">

            <div class="sidebar">

              

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>
                <?php foreach(array_reverse($events) as $i):  ?>
                <div class="mt-3">

                  <div class="post-item mt-3">
                    <img src="<?php echo base_url();?>/<?php echo $i->Image; ?>" alt="">
                    <div>
                      <h4><a href="<?php echo site_url('Pages/event_detail/'. $i->Id); ?>"><?php echo $i->Name; ?></a></h4>
                      <time datetime="2020-01-01"><?php echo $i->Date; ?></time>
                    </div>
                  </div><!-- End recent post item-->

                </div>
                <?php endforeach; ?>
              </div><!-- End sidebar recent posts-->

            

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

  <?php
      $this->load->view('static/footer.php');
  ?>