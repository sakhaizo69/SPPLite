    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/dist/img/earth.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SPP Lite</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/dist/img/smkmuh1.jpg" class="brand-image img-circle elevation-3" >
            </div>
        <div class="info">
          <a href="#" class="d-block">
            SMK MUH1 YK  
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?php echo base_url('dashboard') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          <li class="nav-item">
            <a href="<?php echo base_url('Siswa') ?>" class="nav-link">
              <i class="nav-icon fas fa-child"></i>
              <p>
                Data Siswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Petugas') ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data Petugas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Kelas') ?>" class="nav-link">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Data Kelas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('SPP') ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data SPP
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Pembayaran') ?>" class="nav-link">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
                Transaksi Pembayaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('login') ?>" class="nav-link btn-danger">
              <i class="nav-icon fa fa-reply"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
