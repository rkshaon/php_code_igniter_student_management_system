
    <div class="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
              <a href="<?php echo base_url();?>">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Student</li>
        </ol>
        <h1>All Student</h1>
        <hr>
        <div>
          <table class="table table-striped">
            <tr>
              <th>Name</th>
              <th>Father</th>
              <th>Mother</th>
              <th>Department</th>
              <th>Session</th>
              <th>Action</th>
            </tr>
            <?php
              foreach ($student as $row ){
            ?>
            <tr>
              <td><a href="<?php echo base_url();?>index.php/welcome/student_page?id=<?php echo $row->id;?>"><?php echo $row->name; ?></a></td>
              <td><?php echo $row->father_name; ?></td>
              <td><?php echo $row->mother_name; ?></td>
              <td><?php echo $row->dept; ?></td>
              <td><?php echo $row->session; ?></td>
              <td><a href="<?php echo base_url();?>index.php/welcome/update_student_page?id=<?php echo $row->id;?>" class="btn btn-primary">Update</a>  <a href="<?php echo base_url();?>index.php/welcome/delete_student?id=<?php echo $row->id;?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php
              }
            ?>
          </table>
          
        </div>
        <!-- Blank div to give the page height to preview the fixed vs. static navbar-->
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    