<!DOCTYPE html>
<html lang="en" style="height: auto;" class="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SILOMDES DINPMD</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">


</head>

<body class="layout-top-nav " style="height: auto; background: #e9ecef;">
  <div class="wrapper ">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light bg-gradient-secondary">
      <div class="container ">
        <a href="<?= base_url('index/beranda/'); ?>" class="navbar-brand">
          <img src="<?= base_url('assets/'); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light text-light">SISTEM INFORMASI LOMBA DESA</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="<?= base_url('index/beranda/'); ?>" class="nav-link text-light">Beranda</a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('index/beranda/profile'); ?>" class="nav-link text-light">Profile</a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('index/beranda/contact'); ?>" class="nav-link text-light">Kontak</a>
            </li>

          </ul>
          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto fixed-right">

            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
              <a class="nav-link text-light" data-toggle="dropdown" href="#">
                <i class="far fa-user"> &nbsp;USER</i>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <?php if ($this->session->userdata('username')) { ?>
                  <?php if ($this->session->userdata('hakakses') == 1) {
                  ?>
                    <a href="<?= base_url('tenaga_ahli/dashboard') ?>">
                      <button class="dropdown-item "> <i class="fas fa-home"></i> &nbsp;Home</button>
                    </a>
                  <?php
                  } elseif ($this->session->userdata('hakakses') == 2) {
                  ?><a href="<?= base_url('stafpmd/dashboard_stafpmd') ?>">
                      <button class="dropdown-item "> <i class="fas fa-home"></i> &nbsp;Home</button>
                    </a> <?php
                        } elseif ($this->session->userdata('hakakses') == 3) {
                          ?>
                    <a href="<?= base_url('admin_kecamatan/dashboard_kecamatan') ?>">
                      <button class="dropdown-item "> <i class="fas fa-home"></i> &nbsp;Home</button>
                    </a>
                  <?php
                        } elseif ($this->session->userdata('hakakses') == 4) {
                  ?>
                    <a href="<?= base_url('admin_sekda/dashboard_sekda') ?>">
                      <button class="dropdown-item "> <i class="fas fa-sign-out-alt">
                        </i> &nbsp;Home</button>
                    </a>
                  <?php
                        } elseif ($this->session->userdata('hakakses') == 5) {
                  ?>
                    <a href="<?= base_url('tim_penilai/dashboard') ?>">
                      <button class="dropdown-item "> <i class="fas fa-sign-out-alt">
                        </i> &nbsp;Home</button>
                    </a>
                  <?php
                        }
                  ?>
                  <a href="<?= base_url('auth/logout') ?>">
                    <button class="dropdown-item "> <i class="fas fa-sign-out-alt">
                      </i> &nbsp;Sign Out</button>
                  </a>
                <?php } else {
                ?>
                  <a href="<?= base_url('auth/login'); ?>">
                    <button class="dropdown-item "> <i class="fas fa-sign-in-alt">
                      </i>&nbsp; Sign In</button>
                  </a>
                <?php
                } ?>
              </div>
            </li>

          </ul>

        </div>


      </div>
    </nav>
    <!-- /.navbar -->