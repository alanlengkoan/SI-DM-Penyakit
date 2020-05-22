<div class="all-form-element-inner">
  <?php echo form_open('katpen/ubahdata'); ?>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Id Kategori Peenyakit'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('inpidkategoripenyakit', $kategoripenyakit['id_kategori_penyakit'], array('class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly')); ?>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Jenis Penyakit'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <select class="form-control" name="inpjenispenyakit" id="jenispenyakit">
          <option value="<?php echo $kategoripenyakit['id_jenis_penyakit']; ?>"><?php echo $kategoripenyakit['id_jenis_penyakit']; ?></option>
          <?php

          foreach ($jenispenyakit as $row) {
            echo "<option value='".$row['id_jenis_penyakit']."'>".$row['jenis_penyakit']."</option>";
          }

          ?>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group-inner">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php echo form_label('Kategori Penyakit'); ?>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?php echo form_input('inpkategoripenyakit', $kategoripenyakit['kategori_penyakit'], array('required' => 'required', 'class' => 'form-control')); ?>
        <div class="help-block with-errors">
          <?php echo form_error('inpkategoripenyakit'); ?>
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
