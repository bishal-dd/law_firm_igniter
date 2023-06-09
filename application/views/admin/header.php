<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="<?php echo base_url();?>assets/logo.jpg" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Mee Pham Drimed Law</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="<?php echo site_url('AdminController/index'); ?>">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li>
        <a href="<?php echo site_url('AdminController/load_add_events'); ?>">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Add Events and Image</span>
        </a>
      </li>
      <li>
        <a href="<?php echo site_url('AdminController/load_silder_images'); ?>">
          <i class="zmdi zmdi-book-image"></i> <span>Slider Images</span>
        </a>
      </li>
      <li>
        <a href="<?php echo site_url('AdminController/load_add_admin'); ?>">
          <i class="zmdi zmdi-book-image"></i> <span>Add user</span>
        </a>
      </li>

       
    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
   
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
   
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?php echo $this->session->userdata('email');?></h6>
            </div>
           </div>
          </a>
        </li>
        
        <li class="dropdown-item"><a href="<?php echo site_url('LoginController/logout'); ?>"><i class="icon-power mr-2"></i>Logout</a></li>
      </ul>
    </li>
  </ul>
</nav>
</header>