<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>" class="brand-link">
      <img src="<?= base_url(); ?>assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Siakad Sekolah</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url(); ?>assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= ucfirst($this->fungsi->user_login()->nama);?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <?php if ($this->session->userdata('level') == 'admin' | $this->session->userdata('level')=='guru'):?>
          <li class="nav-item">
            <a href="<?= site_url('dashboard');?>" class="nav-link">
             <i class="fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('ppdb');?>" class="nav-link">
             <i class="fas fa-tachometer-alt"></i>
              <p>
                Ppdb
              </p>
            </a>
          </li>          
          <li class="nav-item">
            <a href="<?= site_url('siswa');?>" class="nav-link">
             <i class="fas fa-tachometer-alt"></i>
              <p>
                Siswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('siswa/siswamutasi');?>" class="nav-link">
             <i class="fas fa-calendar-day"></i>
              <p>
                Siswa mutasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('siswa/alumni');?>" class="nav-link">
             <i class="fas fa-calendar-day"></i>
              <p>
                Alumni
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="<?= site_url('kelas');?>" class="nav-link">
             <i class="fas fa-calendar-day"></i>
              <p>
                Kelas
              </p>
            </a>
          </li>
        <?php endif; ?>
          <?php if ($this->session->userdata('level') == 'admin') :?>
            <li class="nav-header">Users</li>
          <li class="nav-item">
            <a href="<?= site_url('user');?>" class="nav-link">
             <i class="fas fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <?php endif;?>
          <li class="nav-item">
            <a href="<?= site_url('profile');?>" class="nav-link">
              <i class="fas fa-id-card"></i>
            <p>
                Profile
              </p>
            </a>
          </li>
            <li class="nav-header">Sign Out</li>

          <li class="nav-item">
            <a href="<?= site_url('auth/logout');?>" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>  
            <p>
                Keluar
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
