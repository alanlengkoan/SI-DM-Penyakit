<div class="left-sidebar-pro">
  <nav id="sidebar" class="">
    <div class="sidebar-header">
      <img src="<?= base_url() ?>assets/img/pustu.png" width="60" height="60" style="margin-top: 10px;" />
    </div>

    <div class="left-custom-menu-adp-wrap comment-scrollbar">
      <nav class="sidebar-nav left-sidebar-menu-pro">
        <ul class="metismenu" id="menu1">

          <li>
            <?php echo anchor('admin', '<i class="fa fa-home icon-wrap"></i>
            <span class="mini-click-non">Beranda</span>'); ?>
          </li>
          <li>
            <?php echo anchor('admin/getpenyakit', '<i class="fa fa-hospital-o icon-wrap"></i>
            <span class="mini-click-non">Data Penyakit</span>'); ?>
          </li>
          <li>
            <?php echo anchor('admin/nmapenyakit', '<i class="fa fa-list icon-wrap"></i>
            <span class="mini-click-non">Nama Penyakit</span>'); ?>
          </li>
          <li>
            <?php echo anchor('jenpen', '<i class="fa fa-stethoscope icon-wrap"></i>
            <span class="mini-click-non">Jenis Penyakit</span>'); ?>
          </li>
          <li>
            <?php echo anchor('katpen', '<i class="fa fa-th-large icon-wrap"></i>
            <span class="mini-click-non">Kategori Penyakit</span>'); ?>
          </li>
          <li>
            <?php echo anchor('admin/detailpenyakit', '<i class="fa fa-table icon-wrap"></i>
            <span class="mini-click-non">Detail Penyakit</span>'); ?>
          </li>
          <li>
            <?php echo anchor('cluster', '<i class="fa fa-cog icon-wrap"></i>
            <span class="mini-click-non">Proses K-Means</span>'); ?>
          </li>
          <li>
            <?php echo anchor('forlap', '<i class="fa fa-print icon-wrap"></i>
            <span class="mini-click-non">Format Laporan</span>'); ?>
          </li>
          <li>
            <?php echo anchor('lapdata', '<i class="fa fa-list-alt icon-wrap"></i>
            <span class="mini-click-non">Laporan Data Penyakit</span>'); ?>
          </li>
          <li>
            <?php echo anchor('akun', '<i class="fa fa-users icon-wrap"></i>
            <span class="mini-click-non">Data User</span>'); ?>
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
          <a href="<?= base_url() ?>admin">
             <img src="<?= base_url() ?>assets/img/pustu.png" width="44" height="44" style="margin-top: 10px; margin-bottom: 10px;" />
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
                  <h5 style="margin: 0; padding: 22px 0 22px 0; color: #fff; font-size: 13px; text-align: center;"> <marquee>IMPLEMENTASI DATA MINING K-MEANS CLUSTERING PADA PUSKESMAS PEMBANTU</marquee> </h5>
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

                        <ul role="menu" class="dropdown-header-top author-log dropdown-menu">
                          <li>
                            <?php echo anchor('admin/profil', '<span class="fa fa-user author-log-ic"></span> Profil'); ?>
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
                    <?php echo anchor('admin', '<i class="fa fa-home icon-wrap"></i>
                    <span class="mini-click-non">Beranda</span>'); ?>
                  </li>
                  <li>
                    <?php echo anchor('admin/getpenyakit', '<i class="fa fa-hospital-o icon-wrap"></i>
                    <span class="mini-click-non">Data Penyakit</span>'); ?>
                  </li>
                  <li>
                    <?php echo anchor('admin/nmapenyakit', '<i class="fa fa-list icon-wrap"></i>
                    <span class="mini-click-non">Nama Penyakit</span>'); ?>
                  </li>
                  <li>
                    <?php echo anchor('jenpen', '<i class="fa fa-stethoscope icon-wrap"></i>
                    <span class="mini-click-non">Jenis Penyakit</span>'); ?>
                  </li>
                  <li>
                    <?php echo anchor('katpen', '<i class="fa fa-th-large icon-wrap"></i>
                    <span class="mini-click-non">Kategori Penyakit</span>'); ?>
                  </li>
                  <li>
                    <?php echo anchor('admin/detailpenyakit', '<i class="fa fa-table icon-wrap"></i>
                    <span class="mini-click-non">Detail Penyakit</span>'); ?>
                  </li>
                  <li>
                    <?php echo anchor('cluster', '<i class="fa fa-cog icon-wrap"></i>
                    <span class="mini-click-non">Proses K-Means</span>'); ?>
                  </li>
                  <li>
                    <?php echo anchor('forlap', '<i class="fa fa-print icon-wrap"></i>
                    <span class="mini-click-non">Format Laporan</span>'); ?>
                  </li>
                  <li>
                    <?php echo anchor('lapdata', '<i class="fa fa-list-alt icon-wrap"></i>
                    <span class="mini-click-non">Laporan Data Penyakit</span>'); ?>
                  </li>
                  <li>
                    <?php echo anchor('akun', '<i class="fa fa-users icon-wrap"></i>
                    <span class="mini-click-non">Data User</span>'); ?>
                  </li>

                </ul>

              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- mobile menu -->
