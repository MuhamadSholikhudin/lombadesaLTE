<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Beranda</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Profil</a>
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

    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-user"></i>
        <span class="badge badge-warning navbar-badge">15</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <?php if ($this->session->userdata('username')) { ?>
          <span class="dropdown-item dropdown-header"><?= $this->session->userdata('username'); ?></span>
          <a href="<?= base_url('auth/logout'); ?>">
            <button class="dropdown-item dropdown-header">Logout</button>
          </a>
        <?php } ?>
      </div>
    </li>

  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?= base_url('assets/'); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('assets/'); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <?php if ($this->session->userdata('username')) { ?>

          <a href="#" class="d-block"><?= $this->session->userdata('username'); ?></a>

        <?php } ?>

      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <?php if ($this->session->userdata('hakakses') == 1) { ?>

          <li class="nav-item">
            <a href="<?= base_url('tenaga_ahli/dashboard'); ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('tenaga_ahli/penjadwlan'); ?>" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Penjadwalan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('tenaga_ahli/acc_juara'); ?>" class="nav-link">
              <i class="nav-icon far fa-check-square"></i>
              <p>
                Juara Lomba
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Kelola data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('tenaga_ahli/pendaftaran'); ?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('tenaga_ahli/kriteria_penilaian'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kriteria Penilaian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('tenaga_ahli/berita'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('tenaga_ahli/wilayah'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wilayah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('tenaga_ahli/nilai'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('tenaga_ahli/pengguna'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengguna</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-header">Laporan</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-file-alt"></i>
              <p>
                Laporan Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('tenaga_ahli/pendaftar'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendaftar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('tenaga_ahli/juaralomba'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Juara Lomba</p>
                </a>
              </li>
            </ul>
          </li>

        <?php } elseif ($this->session->userdata('hakakses') == 2) { ?>

          <li class="nav-item">
            <a href="<?= base_url('stafpmd/dashboard_stafpmd'); ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('stafpmd/pengajuan'); ?>" class="nav-link">
              <i class="nav-icon fas fa-mail-bulk"></i>
              <p>
                Pengajuan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('stafpmd/penjadwalan'); ?>" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Penjadwalan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Kelola data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('stafpmd/pendaftaran'); ?>" class=" nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('stafpmd/wilayah'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wilayah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('stafpmd/berita'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-header">Laporan</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-file-alt"></i>
              <p>
                Laporan Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendaftar</p>
                </a>
              </li>
            </ul>
          </li>

        <?php } elseif ($this->session->userdata('hakakses') == 3) { ?>
          <li class="nav-item">
            <a href="<?= base_url('admin_kecamatan/dashboard_kecamatan'); ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin_kecamatan/pengajuan'); ?>" class="nav-link">
              <i class="nav-icon fas fa-mail-bulk"></i>
              <p>
                Pengajuan
              </p>
            </a>
          </li>

        <?php } elseif ($this->session->userdata('hakakses') == 4) { ?>
          <li class="nav-item">
            <a href="<?= base_url('admin_sekda/dashboard_sekda'); ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin_sekda/jadwal_lomba'); ?>" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Jadwal Lomba
              </p>
            </a>
          </li>

        <?php } elseif ($this->session->userdata('hakakses') == 5) { ?>
          <li class="nav-item">
            <a href="<?= base_url('tim_penilai/dashboard'); ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('tim_penilai/penilaian'); ?>" class="nav-link">
              <i class="nav-icon fas fa-pencil-alt"></i>
              <p>
                Penilaian
              </p>
            </a>
          </li>

        <?php } ?>

      </ul>

    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>