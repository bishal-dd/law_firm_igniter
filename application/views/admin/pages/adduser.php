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
          <div class="card-header">Slider
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
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <a href="#" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
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
        <form>
          <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" id="exampleInputName" class="form-control" placeholder="Enter Your Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmailId">Email ID</label>
            <input type="text" id="exampleInputEmailId" class="form-control" placeholder="Enter Your Email ID">
          </div>
          <div class="form-group">
            <label for="exampleInputPhone">Phone number</label>
            <input type="text" id="exampleInputPhone" class="form-control" placeholder="Insert phone number">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
