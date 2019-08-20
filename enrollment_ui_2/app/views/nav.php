<!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url();?>">INYEK</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">

      <ul class="navbar-nav navbar-sidenav components" id="exampleAccordion">
        <li class="" data-toggle="tooltip" data-placement="right" title="" data-original-title="Dashboard">
          <a class="nav-link" href="<?php echo base_url()?>index.php/welcome/new_student_page">
            <i class="fa fa"></i>
            <span class="nav-link-text">New Student</span>
          </a>
        </li>
        <li class="" data-toggle="tooltip" data-placement="right" title="" data-original-title="Dashboard">
          <a class="nav-link" href="<?php echo base_url()?>index.php/welcome/list_student_page">
            <i class="fa fa"></i>
            <span class="nav-link-text">Student List</span>
          </a>
        </li>
        <li style="margin-bottom: 40px;"></li>
      </ul>      
      <ul class="navbar-nav ml-auto">        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="<?php echo base_url();?>index.php/admin/logout">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>