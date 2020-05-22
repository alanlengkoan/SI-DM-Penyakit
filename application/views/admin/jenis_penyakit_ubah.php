<div class="all-form-element-inner">
  <?php echo form_open('jenpen/ubahdata'); ?>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('ID Jenis Penyakit'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('inpidjenispenyakit', $editpenyakit['id_jenis_penyakit'], array('readonly' => 'readonly', 'class' => 'form-control')); ?>
      </div>
    </div>
  </div>
    <div class="form-group-inner">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <?php echo form_label('Jenis Penyakit'); ?>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
          <?php echo form_input('inpjenispenyakit', $editpenyakit['jenis_penyakit'], array('class' => 'form-control', 'required' => 'required')); ?>
          <div class="help-block with-errors">
            <?php echo form_error('inpjenispenyakit'); ?>
          </div>
        </div>
      </div>
    </div>
    <button type="button" class="btn btn-danger" data-dismiss="modal">
      Batal
    </button>
    <?php echo form_reset('reset', 'Kosongkan', array('class' => 'btn btn-primary')); ?>
    <?php echo form_submit('ubah', 'Ubah', array('class' => 'btn btn-success')); ?>
  <?php echo form_close(); ?>
</div>
