<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Fill up fields to Update Student Profile</h1>
              </div>
              <form class="user" method="POST" action="<?php echo base_url();?>index.php/welcome/update_student">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <input type="hidden" name="id" value="<?php echo $profile->id; ?>">
                  <tr>
                    <th>Name</th>
                    <td>
                      <div class="form-group">                  
                        <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $profile->name;?>">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Department</th>
                    <td>
                      <div class="form-group">                  
                        <input type="text" name="dept" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $profile->dept;?>">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Session</th>
                    <td>
                      <div class="form-group">                  
                        <input type="text" name="session" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $profile->session;?>">
                      </div>
                    </td>
                  </tr>                  
                  <tr>
                    <th>SSC GPA</th>
                    <td>
                      <div class="form-group">                  
                        <input type="text" name="ssc" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $profile->ssc;?>">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>HSC GPA</th>
                    <td>
                      <div class="form-group">                  
                        <input type="text" name="hsc" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $profile->hsc;?>">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Father's Name</th>
                    <td>
                      <div class="form-group">
                        <input type="text" name="father_name" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $profile->father_name;?>">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Mother's Name</th>
                    <td>
                      <div class="form-group">    
                        <input type="text" name="mother_name" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $profile->mother_name;?>">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Present Address</th>
                    <td>
                      <div class="form-group">    
                        <input type="text" name="present_address" class="form-control form-control-user" id="exampleFirstName"value="<?php echo $profile->present_address;?>">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Permanent Address</th>
                    <td>
                      <div class="form-group">
                        <input type="text" name="permanent_address" class="form-control form-control-user" id="exampleFirstName" value="<?php echo $profile->permanent_address;?>">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>E-mail</th>
                    <td>
                      <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" value="<?php echo $profile->email;?>">
                      </div>
                    </td>
                  </tr>
              </table>
              <button class="btn btn-primary btn-user btn-block">Update Student</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>