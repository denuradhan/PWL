
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-teal">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    </ul>
    <span class="navbar-text">
      <a href="<?php echo base_url().'Login/logout' ?>" class="btn btn-danger">Logout</a>
    </span>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-teal elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url().'admin/home' ?>" class="brand-link">
      <img src="https://www.freepnglogos.com/uploads/logo-koperasi-png/download-logo-koperasi-baru-vector-corel-12.png" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Koperasi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
           <a href="<?php echo base_url().'User' ?>" class="nav-link" id="navHome">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
           <a href="<?php echo base_url().'User/simpan' ?>" class="nav-link" id="navHome">
              <i class="fas fa-wallet nav-icon"></i>
              <p>
                Simpan
              </p>
            </a>
          </li>
          <li class="nav-item">
           <a href="<?php echo base_url().'User/pinjam' ?>" class="nav-link" id="navHome">
              <i class="fas fa-money-bill-wave nav-icon"></i>
              <p>
                Pinjam
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>