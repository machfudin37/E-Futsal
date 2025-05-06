<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/apple-icon.png') ?>">
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png') ?>">

  <title>E-Futsal Field Web</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/'); ?>member/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script href="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.js"></script>

  <!-- Custom fonts for this template -->
  <link href="<?= base_url('assets/'); ?>member/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/'); ?>member/css/agency.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?= base_url('member'); ?>">E-Futsal Field</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= base_url('member/lapangan'); ?>">
              <i class="fa fa-futbol"></i> Lapangan</a>
          </li>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?= base_url('member/pemesanan'); ?>">
                  <i class="fa fa-shopping-bag"></i> Pemesanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?= base_url('member/about'); ?>">
                  <i class="fa fa-info-circle"></i> Tentang</a>
              </li>
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user-circle"></i>
                  <span class="mr-2 d-none d-lg-inline text-gray-700 "><?= $this->session->userdata('username') ?></span>

                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <div class="image">
                    <center><img src="<?= base_url() ?>assets/admin/images/user.jpg" width="50" height="50" alt="User" /></center>
                  </div>
                  <a class="dropdown-item" href="<?= base_url('member/profile'); ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profil
                  </a>
                  <a class="dropdown-item" href="<?= base_url('member/history'); ?>">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Riwayat
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo base_url() . 'Login/logout' ?>">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </div>
      </div>
  </nav>