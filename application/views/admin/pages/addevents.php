<?php $this->load->view('admin/head.php') ?>
<?php $this->load->view("admin/header.php") ?>
<!--End topbar header-->
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3 justify-content-center">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Add Event</div>
           <hr>
            <form action="<?php echo site_url('AdminController/add_events'); ?>" method="post" enctype="multipart/form-data">
           <div class="form-group">
            <label for="input-1">Name</label>
            <input type="text" class="form-control" id="input-1" placeholder="Enter Your Name" value="<?= set_value('name') ?>" name="name" required>
           </div>
           <div class="form-group">
            <label for="input-2">Image</label>
            <input type="file" class="form-control" id="input-2" placeholder="Choose your Image" name="image" vlaue="<?= set_value('image')?>"required>
           </div>
           
          
           <div class="form-group">
            <label for="input-5">Description</label><br>
            <textarea cols="50" rows="5" name="description" value="<?= set_value('description')?>" required></textarea>
           </div>
          
           </div>
           <div class="form-group text-center">
            <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Add</button>
          </div>
          </form>
         </div>
         </div>

         <!-- Slider -->
         <div class="card">
           <div class="card-body">
           <div class="card-title">Add Slider Image</div>
           <hr>
            <form action="<?php echo site_url('AdminController/add_slider'); ?>" method="post" enctype="multipart/form-data">
          
           <div class="form-group">
            <label for="input-2">Image</label>
            <input type="file" class="form-control" id="input-2" placeholder="Choose your Image" name="image" vlaue="<?= set_value('image')?>"required>
           </div>
          
           </div>
           <div class="form-group text-center">
            <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Add</button>
          </div>
          </form>
         </div>
         </div>
      </div>
      

     
    
    </div><!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2023 Mee Pham Drimed Law
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->



	