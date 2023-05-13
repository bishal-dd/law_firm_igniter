<?php $this->load->view('admin/head.php') ?>
<?php $this->load->view("admin/header.php") ?>


<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->
	
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Events
		  <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
             
              </div>
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>Name</th>
                     <th>Photo</th>
                     <th>Description</th>
                     <th>Date</th>
                     <th>Actions</th>
                   </tr>
                   </thead>
                   <tbody>
                   <?php foreach(array_reverse($events) as $i=>$event): ?>
                      <tr>
                        <td><?php echo $event->Name;?></td>
                        <td><img src="<?php echo base_url();?>/<?php echo $event->Image;?>" class="product-img" alt="product img" style="width:100%; height:auto"></td>
                        <td><?php echo $event->Description?></td>
                        <td><?php echo $event->Date?></td>
                        <td><a href="<?php echo site_url('AdminController/edit_page_event/'.$event->Id) ?>" class="btn btn-success">Edit </a> <a href="<?php echo site_url('AdminController/delete_event/'.$event->Id) ?>" class="btn btn-danger">Delete</a></td>
                      </tr>
                    <?php endforeach; ?>

                   

                 </tbody></table>
               </div>
	   </div>
	 </div>
	</div><!--End Row-->

  
</body>
</html>
