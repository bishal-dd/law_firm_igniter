<?php $this->load->view('admin/head.php') ?>
<?php $this->load->view("admin/header.php") ?>

<!-- Start wrapper-->
<div id="wrapper" class="row mt-5 justify-content-end">
  <div class="card card-authentication1 mx-auto my-4 mt-5">
    
     
        <button type="button" class="btn btn-light btn-block waves-effect waves-light" data-toggle="modal" data-target="#addUserModal">Add User</button>
    
    </div>
  </div>
</div>

<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
    <!--Start Dashboard Content-->
    <div class="row">
      <div class="col-12 col-lg-12">
        <div class="card">
          <div class="card-header">Users
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
                  <th>Email</th>
                  <th>Phone No.</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($users as $user):?>
                <tr>
                  <td><?php echo $user->Name; ?> </td>
                  <td><?php echo $user->Email; ?></td>
                  <td><?php echo $user->Phone; ?></td>
                  <td>
                  <a href="<?php echo site_url('AdminController/load_edit_users/'.$user->Id) ?>" class="btn btn-success">Edit </a>
                  <a href="<?php echo site_url('AdminController/delete_user/'.$user->Id) ?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div><!--End Row-->
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="addUserModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('AdminController/add_admin'); ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" id="exampleInputName" class="form-control" placeholder="Enter Your Name" name="name" id="name" vlaue="<?= set_value('name')?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmailId">Email ID</label>
            <input type="text" id="exampleInputEmailId" class="form-control" placeholder="Enter Your Email ID" name="email" id="email" vlaue="<?= set_value('email')?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPhone">Phone number</label>
            <input type="tel" id="exampleInputPhone" class="form-control" placeholder="Insert phone number" name="phone" id="phone" vlaue="<?= set_value('phone')?>">
          </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>
