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
                  <i class="fa fa-download"></i>
                </div>


                <div class="breadcomb-ctn">
                  <h2>Download Laporan</h2>
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
            <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <b>Nama File</b>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <?php echo str_replace("_", " ", $forlap['nama_file']); ?>
                </div>
              </div>
            </div>
            <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <b>Tanggal Upload</b>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <?php echo $forlap['tgl_upload']; ?>
                </div>
              </div>
            </div>
            <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <b>Keterangan</b>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <?php echo $forlap['keterangan']; ?>
                </div>
              </div>
            </div>
            <?php echo anchor('pustu/unduhlaporan/'.$forlap['nama_file'], '<i class="fa fa-download"></i> Download', array('class' => 'btn btn-info')); ?>
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

<!-- modal tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data Penyakit</h4>
      </div>
      <div class="modal-body">

        <div class="all-form-element-inner">
          <?php echo form_open_multipart('forlap/tambahdata'); ?>
          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <?php echo form_label('Format Laporan'); ?>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <?php echo form_upload('inpformat', '', array('class' => 'form-control', 'required' => 'required')); ?>
                <div class="help-block with-errors">
                  <?php echo form_error('inpformat'); ?>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <?php echo form_label('Keterangan') ?>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <?php echo form_textarea('inpketerangan', '', array('class' => 'form-control', 'required' => 'required')); ?>
                <div class="help-block with-errors">
                  <?php echo form_error('inpketerangan'); ?>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group-inner">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <?php echo form_label('Waktu') ?>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <?php echo form_input('inpwaktu', $waktu, array('class' => 'form-control', 'readonly' => 'readonly', 'required' => 'required')); ?>
                <div class="help-block with-errors">
                  <?php echo form_error('inpwaktu'); ?>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-danger" data-dismiss="modal">
            Batal
          </button>
          <?php echo form_submit('tambah', 'Simpan', array('class' => 'btn btn-success')); ?>
          <?php echo form_close(); ?>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- modal tambah -->

<!-- modal hapus -->
<div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus Data Penyakit!</h4>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin Ingin menghapus data penyakit ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">
          Tidak
        </button>
        <?php echo anchor('#', 'Iya', array('class' => 'btn btn-danger btn-iya')); ?>
      </div>
    </div>
  </div>
</div>
<!-- modal hapus -->

<!-- untuk menload bagin foot/bawah -->
<?php $this->load->view('pustu/atribut/foot'); ?>

<script type="text/javascript">
  $(document).ready(function () {

    $('#modalHapus').on('show.bs.modal', function (e) {
      $(this).find('.btn-iya').attr('href', $(e.relatedTarget).data('href'));
    });

  });
</script>
