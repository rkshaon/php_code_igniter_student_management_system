
    <div class="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
              <a href="">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Student</li>
        </ol>
        <h1>New Student</h1>
        <hr>
        <div>
            <div>
              <form action="<?php echo base_url();?>index.php/welcome/new_student" method="POST">
                <table class="table table-borderless">
                  <tr>
                    <td>Student Name </td>
                    <td><input type="text" name="name"  class="form-control" style="width: auto; float: left;"></td>
                  </tr>
                  <tr>
                    <td>Department </td>
                    <td><input type="text" name="dept"  class="form-control" style="width: auto; float: left;"></td>
                  </tr>
                  <tr>
                    <td>Session </td>
                    <td><input type="text" name="session"  class="form-control" style="width: auto; float: left;"></td>
                  </tr>
                  <tr>
                    <td>SSC Result </td>
                    <td><input type="text" name="ssc"  class="form-control" style="width: auto; float: left;"></td>
                  </tr>
                  <tr>
                    <td>HSC Result </td>
                    <td><input type="text" name="hsc"  class="form-control" style="width: auto; float: left;"></td>
                  </tr>
                  <tr>
                    <td>Father Name </td>
                    <td><input type="text" name="father_name"  class="form-control" style="width: auto; float: left;"></td>
                  </tr>
                  <tr>
                    <td>Mother Name </td>
                    <td><input type="text" name="mother_name"  class="form-control" style="width: auto; float: left;"></td>
                  </tr>
                  <tr>
                    <td>Present Address </td>
                    <td><input type="text" name="present_address"  class="form-control" style="width: auto; float: left;"></td>
                  </tr>
                  <tr>
                    <td>Permanent Address </td>
                    <td><input type="text" name="permanent_address"  class="form-control" style="width: auto; float: left;"></td>
                  </tr>
                  <tr>
                    <td>E-mail </td>
                    <td><input type="text" name="email"  class="form-control" style="width: auto; float: left;"></td>
                  </tr>
                </table>
                <br>
                <button  class="form-control btn btn-primary" style="width: auto; float: left; margin-bottom: 5px;">Add Student</button>
              </form>
            </div>
        </div>
        <!-- Blank div to give the page height to preview the fixed vs. static navbar-->
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    