<div class="all-form-element-inner">
  <?php echo form_open(''); ?>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Id Penyakit'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('', $penyakit['id_penyakit'], array('readonly' => 'readonly', 'class' => 'form-control')); ?>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Nama Penderita'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('', $penyakit['nama_lengkap'], array('readonly' => 'readonly', 'class' => 'form-control')); ?>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Jenis Kelamin'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('', $penyakit['jenis_kelamin'], array('readonly' => 'readonly', 'class' => 'form-control')); ?>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Umur'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('', $penyakit['umur'], array('readonly' => 'readonly', 'class' => 'form-control')); ?>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Tempat Lahir'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('', $penyakit['tempat_lahir'], array('readonly' => 'readonly', 'class' => 'form-control')); ?>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Tanggal Lahir'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('', $penyakit['tanggal_lahir'], array('readonly' => 'readonly', 'class' => 'form-control')); ?>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Nama Penyakit'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('', $penyakit['nama_penyakit'], array('readonly' => 'readonly', 'class' => 'form-control')); ?>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Jenis Penyakit'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('', $penyakit['jenis_penyakit'], array('readonly' => 'readonly', 'class' => 'form-control')); ?>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Kategori Penyakit'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('', $penyakit['kategori_penyakit'], array('readonly' => 'readonly', 'class' => 'form-control')); ?>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Tanggal'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input(array('type' => 'date', 'name' => 'inptanggal', 'class' => 'form-control', 'value' => $penyakit['tanggal'], 'readonly' => 'readonly')); ?>
      </div>
    </div>
  </div>
  <button type="button" class="btn btn-danger" data-dismiss="modal">
    Batal
  </button>
  <?php echo form_close(); ?>
</div>
