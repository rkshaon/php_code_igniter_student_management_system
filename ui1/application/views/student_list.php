<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Student List</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Name</th>
            <th>Father</th>
            <th>Mother</th>
            <th>Dept</th>
            <th>Session</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Name</th>
            <th>Father</th>
            <th>Mother</th>
            <th>Dept</th>
            <th>Session</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
            foreach($student as $row){
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
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->