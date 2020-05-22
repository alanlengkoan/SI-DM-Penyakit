<div class="all-form-element-inner">
  <?php echo form_open('akun/ubahuser'); ?>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Id'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('inpid', $edituser['id'], array('readonly' => 'readonly', 'class' => 'form-control')); ?>
        <div class="help-block with-errors">
          <?php echo form_error('inpid'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Nama'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('inpnama', $edituser['nama'], array('required' => 'required', 'class' => 'form-control')); ?>
        <div class="help-block with-errors">
          <?php echo form_error('inpnama'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Email'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input(array('type' => 'email', 'name' => 'inpemail', 'value' => $edituser['email'], 'required' => 'required', 'class' => 'form-control')); ?>
        <div class="help-block with-errors">
          <?php echo form_error('inpnama'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Nomor Telepon'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('inpnotlp', $edituser['no_tlp'], array('required' => 'required', 'class' => 'form-control')); ?>
        <div class="help-block with-errors">
          <?php echo form_error('inpnama'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Username'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('inpusername', $edituser['username'], array('required' => 'required', 'class' => 'form-control')); ?>
        <div class="help-block with-errors">
          <?php echo form_error('inpusername'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Password'); ?>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <?php echo form_password('inppassword', $edituser['passname'], array('required' => 'required', 'class' => 'form-control form-password')); ?>
        <div class="help-block with-errors">
          <?php echo form_error('inppassword'); ?>
        </div>
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
        <select class="form-control" name="inplevel" required="required">
          <option value=""><?php echo $edituser['level'] ?></option>
          <option value="admin">Admin</option>
          <option value="pustu">Pustu</option>
        </select>
        <div class="help-block with-errors">
          <?php echo form_error('inplevel'); ?>
        </div>
      </div>
    </div>
  </div>

  <button type="button" class="btn btn-danger" data-dismiss="modal">
    Batal
  </button>
  <?php echo form_submit('ubah', 'Ubah', array('class' => 'btn btn-success')); ?>
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
