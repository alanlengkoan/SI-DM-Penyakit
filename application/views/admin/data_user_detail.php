<div class="all-form-element-inner">
  <?php echo form_open(''); ?>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Id'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('', $detailuser['id'], array('readonly' => 'readonly', 'class' => 'form-control')); ?>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Nama'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('', $detailuser['nama'], array('readonly' => 'readonly', 'class' => 'form-control')); ?>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Nama'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('', $detailuser['email'], array('readonly' => 'readonly', 'class' => 'form-control')); ?>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Nama'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('', $detailuser['no_tlp'], array('readonly' => 'readonly', 'class' => 'form-control')); ?>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Username'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('', $detailuser['username'], array('readonly' => 'readonly', 'class' => 'form-control')); ?>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Password'); ?>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <?php echo form_password('', $detailuser['passname'], array('readonly' => 'readonly', 'class' => 'form-control form-password')); ?>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <label><?php echo form_input(array('type' => 'checkbox', 'class' => 'form-checkbox')); ?> Lihat Password</label>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Level'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('', $detailuser['level'], array('readonly' => 'readonly', 'class' => 'form-control')); ?>
      </div>
    </div>
  </div>

  <button type="button" class="btn btn-primary" data-dismiss="modal">
    Kembali
  </button>
  <?php echo form_close(); ?>
</div>

<!-- jquery -->
<script src="<?php echo base_url() ?>/assets/js/jquery/jquery.min.js" charset="utf-8"></script>

<script type="text/javascript">
  $(document).ready(function () {

    $('.form-checkbox').click(function () {
      if ($(this).is(':checked')) {
        $('.form-password').attr('type', 'text');
      } else {
        $('.form-password').attr('type', 'password')
      }
    });

  });
</script>
