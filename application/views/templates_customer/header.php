<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('assets/assets_shop')?>/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Car Rental Website Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/assets_shop')?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop')?>/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop')?>/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop')?>/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Car Rental <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('customer/dashboard')?>">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('customer/data_mobil')?>">Mobil</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('customer/transaksi')?>">Transaksi</a></li>

                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('register')?>">Register</a></li>
                <li class="nav-item">
                    <?php if($this->session->userdata('nama')) { ?>
                    <a class="nav-link" href="<?php echo base_url('auth/logout')?>">Welcome <?php echo $this->session->userdata('nama')?>
                    <span class=""> | Logout</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('auth/ganti_password')?>">
                    <span class="">Ganti Password</span></a>
                    <?php } else{ ?>
                        <li><a class="nav-link" href="<?php echo base_url('auth/login')?>">Login</a></li>
                    <?php } ?>
                </li>
                        
            
            </ul>
          </div>
        </div>
      </nav>
    </header>