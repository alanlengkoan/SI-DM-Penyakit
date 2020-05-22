<?php
// apabila admin belum login
if ($user['level'] != 'pustu') {
  redirect('masuk/masuk?&masuk');
}
?>
<div class="left-sidebar-pro">
  <nav id="sidebar" class="">
    <div class="sidebar-header">
      <i style="font-size:50px; margin-top:10px;" class="fa fa-plus"></i>
    </div>

    <div class="left-custom-menu-adp-wrap comment-scrollbar">
      <nav class="sidebar-nav left-sidebar-menu-pro">
        <ul class="metismenu" id="menu1">

          <li>
            <?php echo anchor('pustu', '<i class="fa fa-home icon-wrap"></i>
            <span class="mini-click-non">Beranda</span>'); ?>
          </li>
          <li>
            <?php echo anchor('pustu/datapenyakit', '<i class="fa fa-hospital-o icon-wrap"></i>
            <span class="mini-click-non">Data Penyakit</span>'); ?>
          </li>
          <li>
            <?php echo anchor('pustu/detailpenyakit', '<i class="fa fa-table icon-wrap"></i>
            <span class="mini-click-non">Detail Penyakit</span>'); ?>
          </li>
          <li>
            <?php echo anchor('pustu/download', '<i class="fa fa-download icon-wrap"></i>
            <span class="mini-click-non">Download Laporan</span>'); ?>
          </li>
          <li>
            <?php echo anchor('pustu/upload', '<i class="fa fa-upload icon-wrap"></i>
            <span class="mini-click-non">Upload Laporan</span>'); ?>
          </li>
          <li>
            <?php echo anchor('pustu/laporan', '<i class="fa fa-list-alt icon-wrap"></i>
            <span class="mini-click-non">Laporan Penyakit</span>'); ?>
          </li>

        </ul>
      </nav>
    </div>

  </nav>
</div>


<!-- isi content -->
<div class="all-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="logo-pro">
          <a href="index.html">
            <i style="font-size:50px; margin-top:10px; color: black;" class="fa fa-plus"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="header-advance-area">
    <div class="header-top-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="header-top-wraper">
              <div class="row">
                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                  <div class="menu-switcher-pro">
                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                      <i class="fa fa-bars"></i>
                    </button>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <h5 style="margin: 0; padding: 22px 0 22px 0; color: #fff; font-size: 13px; text-align: center;">IMPLEMENTASI DATA MINING K-MEANS CLUSTERING PADA PUSKESMAS PEMBANTU</h5>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                  <div class="header-right-info">
                    <ul class="nav navbar-nav mai-top-nav header-right-menu">

                      <!-- untuk icon user -->
                      <li class="nav-item">

                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                          <i class="fa fa-user"></i>
                          <span class="admin-name"><?php echo $user['nama']; ?></span>
                          <i class="fa fa-angle-down"></i>
                        </a>

                        <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                          <li>
                            <?php echo anchor('pustu/profil', '<span class="fa fa-user author-log-ic"></span> Profil'); ?>
                          </li>
                          <li>
                            <?php echo anchor('masuk/logout', '<span class="fa fa-sign-out author-log-ic"></span> Keluar'); ?>
                          </li>
                        </ul>
                      </li>
                      <!-- untuk icon user -->

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- mobile menu -->
    <div class="mobile-menu-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="mobile-menu">
              <nav id="dropdown">

                <ul class="mobile-menu-nav">
                	<li>
                		<?php echo anchor('pustu', '<i class="fa fa-home icon-wrap"></i> <span class="mini-click-non">Beranda</span>'); ?>
                	</li>
                	<li>
                		<?php echo anchor('pustu/datapenyakit', '<i class="fa fa-hospital-o icon-wrap"></i> <span class="mini-click-non">Data Penyakit</span>'); ?>
                	</li>
                	<li>
                		<?php echo anchor('pustu/detailpenyakit', '<i class="fa fa-table icon-wrap"></i> <span class="mini-click-non">Detail Penyakit</span>'); ?>
                	</li>
                	<li>
                		<?php echo anchor('pustu/download', '<i class="fa fa-download icon-wrap"></i> <span class="mini-click-non">Download Laporan</span>'); ?>
                	</li>
                	<li>
                		<?php echo anchor('pustu/upload', '<i class="fa fa-upload icon-wrap"></i> <span class="mini-click-non">Upload Laporan</span>'); ?>
                	</li>
                	<li>
                		<?php echo anchor('pustu/laporan', '<i class="fa fa-list-alt icon-wrap"></i> <span class="mini-click-non">Laporan Penyakit</span>'); ?>
                	</li>
                </ul>

              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- mobile menu -->
