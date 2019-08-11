<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><?php echo $profile->name;?></h1>
              </div>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
                    <th>Name</th>
                    <td><?php echo $profile->name;?></td>
                  </tr>
                  <tr>
                    <th>Department</th>
                    <td><?php echo $profile->dept;?></td>
                  </tr>
                  <tr>
                    <th>Session</th>
                    <td><?php echo $profile->session;?></td>
                  </tr>
                  <tr>
                    <th>Present Address</th>
                    <td><?php echo $profile->present_address;?></td>
                  </tr>
                  <tr>
                    <th>Permanent Address</th>
                    <td><?php echo $profile->permanent_address;?></td>
                  </tr>
                </table>
                <hr>
                <form class="user" method="POST" action="<?php echo base_url();?>index.php/welcome/update_student_page?id=<?php echo $profile->id;?>">
                  <button class="btn btn-primary btn-user btn-block">Update Profile</button>
                </form>
                <hr>
                <form class="user" method="POST" action="<?php echo base_url();?>index.php/welcome/delete_student?id=<?php echo $profile->id;?>">
                  <button class="btn btn-danger btn-user btn-block">Delete Profile</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>