
    <div class="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
              <a href="<?php echo base_url();?>">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Student</li>
        </ol>
        <h1>Student Profile</h1>
        <hr>
        <div>
          <table class="table table-striped">
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
        </div>
        <!-- Blank div to give the page height to preview the fixed vs. static navbar-->
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    