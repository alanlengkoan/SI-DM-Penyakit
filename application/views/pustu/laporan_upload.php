<!-- untuk menload head -->
<?php $this->load->view('pustu/atribut/head'); ?>
<!-- untuk menload menu -->
<?php $this->load->view('pustu/atribut/menu'); ?>

<!-- isi bagian kanan -->
<div class="breadcome-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcome-list">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="breadcomb-wp">

                <div class="breadcomb-icon">
                  <i class="fa fa-upload"></i>
                </div>


                <div class="breadcomb-ctn">
                  <h2>Upload Laporan</h2>
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

<!-- isi bagian kanan -->
<div class="mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

        <div class="single-product-pr">

          <div class="all-form-element-inner">
            <?php echo form_open_multipart('pustu/previewfile'); ?>
            <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                  <?php echo form_label('Format Laporan.') ?>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                  <div class="file-upload-inner ts-forms">
                    <div class="input prepend-small-btn">
                      <div class="file-button">
                        Cari
                        <input type="file" name="inpformatfile" onchange="document.getElementById('prepend-small-btn').value = this.value;">
                      </div>
                      <input type="text" id="prepend-small-btn" class="form-control" placeholder="belum ada file yang dipilih" readonly="readonly">
                      <div class="help-block with-errors">
                        <?php
                        if (isset($error)) { echo $error; }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php echo form_submit('preview', 'Preview', array('class' => 'btn btn-success')); ?>
            <?php echo form_close(); ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- isi bagian kanan -->

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

<!-- untuk menload foot -->
<?php $this->load->view('pustu/atribut/foot'); ?>
