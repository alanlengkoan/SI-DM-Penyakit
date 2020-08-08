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
                  <i class="fa fa-print"></i>
                </div>


                <div class="breadcomb-ctn">
                  <h2>Format Laporan</h2>
                  <!-- modal tambah -->
                  <a href="#" class="btn btn-custon-rounded-three btn-default" data-toggle="modal" data-target="#modalTambah"><i class="fa fa-plus-circle" aria-hidden="true"></i> Format Laporan</a>
                  <!-- modal tambah -->
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

          <?php

          // untuk menampikan pemberitahuan
          if (isset($_GET['berhasil'])) {
            echo "
            <div class='alert alert-success alert-success-style1'>
              <button type='button' class='close sucess-op' data-dismiss='alert' aria-label='Close'>
                <span class='icon-sc-cl' aria-hidden='true'>&times;</span>
              </button>
              <i class='fa fa-check adminpro-checked-pro admin-check-pro' aria-hidden='true'></i>
              <p><strong>Berhasil!</strong> Format Laporan Berhasil di Tambah.</p>
            </div>
            ";
          } else if (isset($_GET['hapus'])) {
            echo "
            <div class='alert alert-danger alert-mg-b alert-success-style4'>
              <button type='button' class='close sucess-op' data-dismiss='alert' aria-label='Close'>
                <span class='icon-sc-cl' aria-hidden='true'>&times;</span>
              </button>
              <i class='fa fa-check adminpro-checked-pro admin-check-pro' aria-hidden='true'></i>
              <p><strong>Berhasil!</strong> Format Laporan Berhasil di Hapus.</p>
            </div>
            ";
          }

          ?>

          <div class="table-responsive">
            <table id="example" class="table table-hover" style="width:100%">
              <thead>
                <tr>
                  <th>Id Upload</th>
                  <th>Nama File</th>
                  <th>Keterangan</th>
                  <th>Tanggal Upload</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php

                foreach ($formatlaporan as $row) {
                  echo "<tr>";
                  echo "<td>".$row['id_upload']."</td>";
                  echo "<td>".$row['nama_file']."</td>";
                  echo "<td>".$row['keterangan']."</td>";
                  echo "<td>".$row['tgl_upload']."</td>";
                  echo "
                  <td width='130' align='center'>
                    <div class='btn-group btn-custom-groups btn-custom-groups-one'>
                      ".anchor('forlap/unduhlaporan/'.$row['nama_file'], '<i class="fa fa-download"></i>', array('class' => 'btn btn-info'))."
                      ".anchor('#', '<i class="fa fa-trash"></i>', array('class' => 'btn btn-danger', 'data-href' => 'forlap/hapusdata/'.$row['id_upload'], 'data-toggle' => 'modal', 'data-target' => '#modalHapus'))."
                    </div>
                  </td>";
                  echo "</tr>";

                }

                ?>
                </tbody>
              </table>
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

<!-- modal tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Tambah Format Laporan</h4>
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
<?php $this->load->view('admin/atribut/foot'); ?>

<script type="text/javascript">
  $(document).ready(function () {

    $('#modalHapus').on('show.bs.modal', function (e) {
       $(this).find('.btn-iya').attr('href', $(e.relatedTarget).data('href'));
    });

  });
</script>
