<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Fill up fields to Register New Student</h1>
              </div>
              <form class="user" method="POST" action="<?php echo base_url();?>index.php/welcome/new_student">
                <label>Academic Info</label>
                <div class="form-group">                  
                  <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName" placeholder="Student Full Name">
                </div>
                <div class="form-group">                  
                  <input type="text" name="dept" class="form-control form-control-user" id="exampleFirstName" placeholder="Department">
                </div>
                <div class="form-group">                  
                  <input type="text" name="session" class="form-control form-control-user" id="exampleFirstName" placeholder="Session">
                </div>
                <div class="form-group">                  
                  <input type="text" name="ssc" class="form-control form-control-user" id="exampleFirstName" placeholder="SSC Result">
                </div>
                <div class="form-group">                  
                  <input type="text" name="hsc" class="form-control form-control-user" id="exampleFirstName" placeholder="HSC Result">
                </div>
                <label>Personal Info</label>
                <div class="form-group">
                  <input type="text" name="father_name" class="form-control form-control-user" id="exampleFirstName" placeholder="Student Father's Name">
                </div>
                <div class="form-group">    
                  <input type="text" name="mother_name" class="form-control form-control-user" id="exampleFirstName" placeholder="Student Mother's Name">
                </div>
                <div class="form-group">    
                  <input type="text" name="present_address" class="form-control form-control-user" id="exampleFirstName" placeholder="Present Addres">
                </div>
                <div class="form-group">
                  <input type="text" name="permanent_address" class="form-control form-control-user" id="exampleFirstName" placeholder="Permanent Address">
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                </div>
                <button class="btn btn-primary btn-user btn-block">Register Student</button>
                <hr>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>