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
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="breadcomb-wp">

                <div class="breadcomb-icon">
                  <i class="fa fa-hospital-o"></i>
                </div>

                <div class="breadcomb-ctn">
                  <h2>Ubah Data Penyakit</h2>
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

<div class="mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

        <div class="single-product-pr">

          <div class="all-form-element-inner">
            <?php echo form_open('admin/ubahdata'); ?>
            <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <?php echo form_label('Id Penyakit'); ?>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <?php echo form_input('inpidpenyakit', $penyakit['id_penyakit'], array('readonly' => 'readonly', 'required' => 'required', 'class' => 'form-control')); ?>
                </div>
              </div>
            </div>
            <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <?php echo form_label('Nama Penderita'); ?>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <?php echo form_input('inpnamapenderita', $penyakit['nama_lengkap'], array('class' => 'form-control', 'required' => 'required')); ?>
                  <div class="help-block with-errors">
                    <?php echo form_error('inpnamapenderita'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <?php echo form_label('Jenis Kelamin'); ?>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <select class="form-control" name="inpjeniskelamin" required="required">
                    <option value="<?php echo $penyakit['jenis_kelamin'] ?>"><?php echo $penyakit['jenis_kelamin'] ?></option>
                    <option value="L">Laki - laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                  <div class="help-block with-errors">
                    <?php echo form_error('inpjeniskelamin'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <?php echo form_label('Tempat Lahir'); ?>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <?php echo form_input('inptempatlahir', $penyakit['tempat_lahir'], array('class' => 'form-control', 'required' => 'required')); ?>
                  <div class="help-block with-errors">
                    <?php echo form_error('inptempatlahir'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <?php echo form_label('Tanggal Lahir'); ?>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <?php echo form_input(array('type' => 'date', 'name' => 'inptanggallahir', 'value' => $penyakit['tanggal_lahir'], 'class' => 'form-control', 'required' => 'required')); ?>
                  <div class="help-block with-errors">
                    <?php echo form_error('inptanggallahir'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <?php echo form_label('Nama Penyakit'); ?>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <?php echo form_input('inpnamapenyakit', $penyakit['nama_penyakit'], array('class' => 'form-control', 'required' => 'required')); ?>
                  <div class="help-block with-errors">
                    <?php echo form_error('inpnamapenyakit'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <?php echo form_label('Jenis Penyakit'); ?>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <select class="form-control" name="inpjenispenyakit" id="jenispenyakit" required="required">
                    <option value="<?php echo $penyakit['jenis_penyakit'] ?>"><?php echo $penyakit['jenis_penyakit'] ?></option>
                    <?php

                    foreach ($jenispenyakit as $row) {
                      echo "<option value='".$row['id_jenis_penyakit']."'>".$row['jenis_penyakit']."</option>";
                    }

                    ?>
                  </select>
                  <div class="help-block with-errors">
                    <?php echo form_error('inpjenispenyakit'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <?php echo form_label('Kategori Penyakit'); ?>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <select class="form-control" name="inpkatpenyakit" id="kategoripenyakit" required="required">
                    <option value="<?php echo $penyakit['kategori_penyakit']; ?>"><?php echo $penyakit['kategori_penyakit']; ?></option>
                  </select>
                  <div class="help-block with-errors">
                    <?php echo form_error('inpkatpenyakit'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <?php echo form_label('Tanggal'); ?>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <?php echo form_input(array('type' => 'date', 'name' => 'inptanggal', 'class' => 'form-control', 'value' => $penyakit['tanggal'], 'required' => 'required')); ?>
                  <div class="help-block with-errors">
                    <?php echo form_error('inptanggal'); ?>
                  </div>
                </div>
              </div>
            </div>
            <?php echo anchor('admin/getpenyakit', 'Batal', array('class' => 'btn btn-danger')) ?>
            <?php echo form_submit('ubah', 'Ubah', array('class' => 'btn btn-success')); ?>
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

<!-- untuk menload bagin foot/bawah -->
<?php $this->load->view('admin/atribut/foot'); ?>

<!-- untuk souece code javascript -->
<script type="text/javascript">
  // jquey code
  $(document).ready(function () {
    $('#jenispenyakit').change(function () {
      // ajax code
      $.ajax({
        type: 'POST',
        // untuk url yang akan diambil datanya
        url: '<?php echo base_url("admin/listkategoripenyakit"); ?>',
        // untuk mengambil id_penyakit
        data: {id_penyakit: $('#jenispenyakit').val()},
        success: function (tampil) {
          // tampilkan kategori penyakit yang telah dipilih
          $('#kategoripenyakit').html(tampil).show();
        },
        error: function (xhr, ajaxOptions, thrownError) {
          // jika terjadi error
          alert(xhr.status + '\n' + xhr.responseText + '\n' + thrownError);
        }
      });

    });
  });
</script>
