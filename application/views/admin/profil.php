<!-- untuk menload head -->
<?php $this->load->view('admin/atribut/head'); ?>

<!-- untuk menload menu -->
<?php $this->load->view('admin/atribut/menu'); ?>

<!-- isi bagian kanan -->
<div class="breadcome-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcome-list">
          <div class="row">

            <div class="col-lg-12">
              <div class="breadcomb-wp">

                <div class="breadcomb-icon">
                  <i class="fa fa-user"></i>
                </div>

                <div class="breadcomb-ctn">
                  <h2>Profil</h2>
                  <p>
                    Untuk petugas posyandu apabila memiliki kesalahan penulisan atau data silahkan melapor / menghubungi pada Admin / Operator Desa.
                  </p>
                  <br>
                  <div class="all-form-element-inner">
                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <b>Nama</b>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                          <?php echo $user['nama']; ?>
                        </div>
                      </div>
                    </div>
                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <b>Email</b>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                          <?php echo $user['email']; ?>
                        </div>
                      </div>
                    </div>
                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <b>Nomor Telepon</b>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                          <?php echo $user['no_tlp']; ?>
                        </div>
                      </div>
                    </div>
                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <b>Level</b>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                          <?php echo $user['level']; ?>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

<div class="footer-copyright-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="footer-copy-right">
          <p>Copyright © 2019 Alan Saputra Lengkoan - 2015020007.</p>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
<!-- isi content -->

<?php $this->load->view('admin/atribut/foot'); ?>
