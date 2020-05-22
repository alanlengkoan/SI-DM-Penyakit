<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sistem Informasi Data Mining</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap/css/bootstrap.min.css">
  <!-- font-awesome CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/font-awesome.min.css">
  <!-- style CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/login.css">
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">

</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading text-center">
            <h3>Masuk</h3>
          </div>
          <div class="panel-body">

            <?php

            // untuk menampikan pemberitahuan
            if (isset($_GET['gagal'])) {
              echo "
              <div class='alert alert-danger alert-dismissible' role='alert'>
                <button type='button' class='close' data-dismiss=alert aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Gagal!</strong> Username yang Anda masukkan tidak terdaftar!
              </div>";
            } else if (isset($_GET['akun'])) {
              echo "
              <div class='alert alert-warning alert-dismissible' role='alert'>
                <button type='button' class='close' data-dismiss=alert aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Gagal!</strong> Maaf Anda belum terdaftar!
              </div>";
            } else if (isset($_GET['password'])) {
              echo "
              <div class='alert alert-danger alert-dismissible' role='alert'>
                <button type='button' class='close' data-dismiss=alert aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Gagal!</strong> Maaf password yang Anda masukkan salah!
              </div>";
            } else if (isset($_GET['masuk'])) {
              echo "
              <div class='alert alert-info alert-dismissible' role='alert'>
                <button type='button' class='close' data-dismiss=alert aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Gagal!</strong> Maaf Anda harus Login terlebih dahulu!
              </div>";
            }

            ?>

            <?php echo form_open('masuk/cekdata', array('data-toggle' => 'validator', 'role' => 'form')); ?>
              <div class="form-group">
                <?php echo form_label('Username', 'inputUsername'); ?> </td>
                <div class="input-group">
                  <div class="input-group-addon"> <i class="fa fa-user"></i> </div>
                  <?php echo form_input('inpusername', '', array('id' => 'inputUsername', 'class' => 'form-control', 'placeholder' => 'Username', 'required' => 'required')); ?>
                </div>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
                <?php echo form_label('Password', 'inputPassword'); ?>
                <div class="input-group">
                  <div class="input-group-addon"> <i class="fa fa-key"></i> </div>
                  <?php echo form_password('inppassword', '', array('id' => 'inputPassword', 'class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required')); ?>
                </div>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
                <?php echo form_reset('reset', 'Kosongkan', array('class' => 'btn btn-primary btn-block')); ?>
                <?php echo form_submit('masuk', 'Masuk', array('class' => 'btn btn-success btn-block')); ?>
              </div>
            </form>
            <?php echo form_close(); ?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jquery -->
  <script src="<?php echo base_url() ?>/assets/js/jquery/jquery.min.js" charset="utf-8"></script>
  <!-- Bootstrap JS -->
  <script src="<?php echo base_url() ?>/assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- validator js -->
  <script src="<?php echo base_url() ?>/assets/js/validator/validator.min.js"></script>

</body>
</html>
