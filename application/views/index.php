<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Informasi Data Mining</title>

  <!-- bootstrap css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap/css/bootstrap.min.css">
  <!-- font-awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/font-awesome.min.css">
  <!-- menu sidebar navigation -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/sidebarNavigation.css">
  <!-- master css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/master.css">

</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top sidebarNavigation" data-sidebarClass="navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle left-navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url('masuk'); ?>">Buhung Bundang</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#">Beranda</a></li>
          <li><a href="#">Tentang Kami</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><?php echo anchor('masuk/masuk', '<span class="fa fa-sign-in"></span> Login'); ?></li>
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div class="banner-info">
    </div>
  </header>

  <section class="tes1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <img class="img-responsive" src="<?php echo base_url() ?>/assets/img/tes1.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <h3 class="text-center">Tes</h3>
          <hr class="garis">
          <p class="keterangan">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="tes2">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="text-center">Tes</h3>
          <hr class="garis">
          <p class="keterangan">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-lg-6">
          <img class="img-responsive" src="<?php echo base_url() ?>/assets/img/tes2.jpeg" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="tes3">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <img class="img-responsive" src="<?php echo base_url() ?>/assets/img/tes3.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <h3 class="text-center">Tes</h3>
          <hr class="garis">
          <p class="keterangan">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </section>

  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">About Us</h4>
            </div>
            <div class="info-sec">
              <p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Quick Links</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="index.html"><i class="fa fa-circle"></i>Home</a></li>
                <li><a href="#service"><i class="fa fa-circle"></i>Service</a></li>
                <li><a href="#contact"><i class="fa fa-circle"></i>Appointment</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Follow us</h4>
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                <li class="bgred"><i class="fa fa-google-plus"></i></li>
                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            © Copyright Alan Saputra Lengkoan - 2015020007
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- jquery js -->
  <script src="<?php echo base_url() ?>/assets/js/jquery/jquery.min.js" charset="utf-8"></script>
  <!-- bootstrap js -->
  <script src="<?php echo base_url() ?>/assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- menu sidebar navigation js -->
  <script src="<?php echo base_url() ?>/assets/js/sidebarNavigation.js" charset="utf-8"></script>

</body>

</html>
