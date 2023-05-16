<?php $this->load->view('admin/head.php') ?>
<?php $this->load->view("admin/header.php") ?>

<div class="container mt-5">
    <div class="row justify-content-center mt-5">

    <div class="col-md-5 mt-5">
        <div class="text-center"><h2>Edit user</h2></div>
        <?php $row = $users[0]; ?>


    <form action="<?php echo site_url('AdminController/edit_admin/'.$row->Id); ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" id="exampleInputName" class="form-control" placeholder="<?php echo $row->Name; ?>" name="name" id="name" value="<?php echo $row->Name; ?> <?= set_value('name')?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmailId">Email ID</label>
            <input type="text" id="exampleInputEmailId" class="form-control" placeholder="Enter Your Email ID" name="email" id="email" value="<?php echo $row->Email; ?> <?= set_value('email')?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPhone">Phone number</label>
            <input type="tel" id="exampleInputPhone" class="form-control" placeholder="Insert phone number" name="phone" id="phone" value="<?php echo $row->Phone; ?> <?= set_value('phone')?>">
          </div>
         
        <div class="text-center"><button type="submit" class="btn btn-primary">Edit</button></div>
        </form>
       
    </div>
   

    </div>
       
      
      </div>