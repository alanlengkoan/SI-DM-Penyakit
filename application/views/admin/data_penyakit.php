<!-- untuk menload head -->
<?php $this->load->view('admin/atribut/head'); ?>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
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
                  <h2>Data Penderita Penyakit</h2>
                  <!-- modal tambah dan import -->
                  <a href="#" class="btn btn-custon-rounded-three btn-default" data-toggle="modal" data-target="#modalTambah"><i class="fa fa-plus-circle" aria-hidden="true"></i> Data Penyakit</a>
                  <a href="#" class="btn btn-custon-rounded-three btn-default" data-toggle="modal" data-target="#modalImport"><i class="fa fa-upload" aria-hidden="true"></i> Import Data!</a>
                  <!-- modal tambah dan import -->
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
              <p><strong>Berhasil!</strong> Data Berhasil di Import</p>
            </div>
            ";
          } else if (isset($_GET['tambah'])) {
            echo "
            <div class='alert alert-success alert-success-style1'>
              <button type='button' class='close sucess-op' data-dismiss='alert' aria-label='Close'>
                <span class='icon-sc-cl' aria-hidden='true'>&times;</span>
              </button>
              <i class='fa fa-check adminpro-checked-pro admin-check-pro' aria-hidden='true'></i>
              <p><strong>Berhasil!</strong> Data Penyakit berhasil di tambah.</p>
            </div>
            ";
          } else if (isset($_GET['ubah'])) {
            echo "
            <div class='alert alert-success alert-success-style1'>
              <button type='button' class='close sucess-op' data-dismiss='alert' aria-label='Close'>
                <span class='icon-sc-cl' aria-hidden='true'>&times;</span>
              </button>
              <i class='fa fa-check adminpro-checked-pro admin-check-pro' aria-hidden='true'></i>
              <p><strong>Berhasil!</strong> Data Penyakit berhasil di ubah.</p>
            </div>
            ";
          } else if (isset($_GET['hapus'])) {
            echo "
            <div class='alert alert-danger alert-mg-b alert-success-style4'>
              <button type='button' class='close sucess-op' data-dismiss='alert' aria-label='Close'>
                <span class='icon-sc-cl' aria-hidden='true'>&times;</span>
              </button>
              <i class='fa fa-check adminpro-checked-pro admin-check-pro' aria-hidden='true'></i>
              <p><strong>Berhasil!</strong> Data Penyakit berhasil di hapus.</p>
            </div>
            ";
          }

          ?>

          <div class="table-responsive">
            <table id="example" class="table" style="width:100%">
              <thead>
                <tr>
                  <th align="center">
                    <button class="btn btn-custon-rounded-three btn-danger" type="button" name="hapus" id="hapus"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    <input type="checkbox" name="centang-semua" id="hapus-semua" />
                  </th>
                  <th>No</th>
                  <th>Id Penyakit</th>
                  <th>Nama Penderita</th>
                  <th>Jenis Kelamin</th>
                  <th>Umur</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Nama Penyakit</th>
                  <th>Jenis</th>
                  <th>Kategori</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($datamining as $row) {
                  echo "<tr>";
                    echo "<td align='center'><input type='checkbox' class='hapus-checkbox' value='".$row['id_penyakit']."' /></td>";
                    echo "<td align='center'>".$no++."</td>";
                    echo "<td>".$row['id_penyakit']."</td>";
                    echo "<td>".$row['nama_lengkap']."</td>";
                    echo "<td>".$row['jenis_kelamin']."</td>";
                    echo "<td>".$row['umur']."</td>";
                    echo "<td>".$row['tempat_lahir']."</td>";
                    echo "<td>".$row['tanggal_lahir']."</td>";
                    echo "<td>".str_replace("_", " ", $row['nama_penyakit'])."</td>";
                    echo "<td>".$row['jenis_penyakit']."</td>";
                    echo "<td>".substr($row['kategori_penyakit'], 0, 17)."..</td>";
                    echo "<td>".$row['tanggal']."</td>";
                    echo "<td width='130' align='center'>
                      <div class='btn-group btn-custom-groups btn-custom-groups-one'>
                        ".anchor('#', '<i class="fa fa-info"></i>', array('class' => 'btn btn-info', 'data-id' => $row['id_penyakit'], 'data-toggle' => 'modal', 'data-target' => '#modalDetail'))."
                        ".anchor('admin/formubahdata/'.$row['id_penyakit'], '<i class="fa fa-edit"></i>', array('class' => 'btn btn-success'))."
                        ".anchor('#', '<i class="fa fa-trash"></i>', array('class' => 'btn btn-danger', 'data-href' => 'hapusdata/'.$row['id_penyakit'], 'data-toggle' => 'modal', 'data-target' => '#modalHapus'))."
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
        <h4 class="modal-title" id="myModalLabel">Tambah Data Penyakit</h4>
      </div>
      <div class="modal-body">

        <div class="all-form-element-inner">
          <?php echo form_open('admin/tambahdata'); ?>
            <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <?php echo form_label('Id Penyakit'); ?>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <?php echo form_input('inpidpenyakit', $kodeotomatis, array('readonly' => 'readonly', 'required' => 'required', 'class' => 'form-control')); ?>
                  <div class="help-block with-errors">
                    <?php echo form_error('inpidpenyakit'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <?php echo form_label('Nama Penderita'); ?>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <?php echo form_input('inpnamapenderita', '', array('placeholder' => 'Nama Penderita', 'class' => 'form-control', 'required' => 'required')); ?>
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
                    <option value="">- Jenis Kelamin -</option>
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
                  <?php echo form_input('inptempatlahir', '', array('placeholder' => 'Tempat Lahir', 'class' => 'form-control', 'required' => 'required')); ?>
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
                  <?php echo form_input(array('type' => 'date', 'name' => 'inptanggallahir', 'class' => 'form-control', 'required' => 'required')); ?>
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
                  <?php echo form_input('inpnamapenyakit', '', array('placeholder' => 'Nama Penyakit', 'class' => 'form-control', 'id' => 'inpnamapenyakit', 'required' => 'required')); ?>
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
                  <?php echo form_input('inpjenispenyakit', '', array('placeholder' => 'Jenis Penyakit', 'class' => 'form-control', 'id' => 'inpjenispenyakit', 'required' => 'required', 'readonly' => 'readonly')); ?>
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
                  <?php echo form_input('inpkatpenyakit', '', array('placeholder' => 'Kategori Penyakit', 'class' => 'form-control', 'id' => 'inpkatpenyakit', 'required' => 'required', 'readonly' => 'readonly')); ?>
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
                  <?php echo form_input(array('type' => 'date', 'name' => 'inptanggal', 'class' => 'form-control', 'required' => 'required')); ?>
                  <div class="help-block with-errors">
                    <?php echo form_error('inptanggal'); ?>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-danger" data-dismiss="modal">
              Batal
            </button>
            <?php echo form_reset('reset', 'Kosongkan', array('class' => 'btn btn-primary')); ?>
            <?php echo form_submit('tambah', 'Simpan', array('class' => 'btn btn-success')); ?>
          <?php echo form_close(); ?>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- modal tambah -->

<!-- modal import -->
<div class="modal fade" id="modalImport" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Import Data Penyakit</h4>
      </div>
      <div class="modal-body">

        <div class="all-form-element-inner">
          <?php echo form_open_multipart('admin/previewfile'); ?>
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
          <button type="button" class="btn btn-danger" data-dismiss="modal">
            Batal
          </button>
          <?php echo form_submit('import', 'Import', array('class' => 'btn btn-success')); ?>
          <?php echo form_close(); ?>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- modal import -->

<!-- modal detail -->
<div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Detail Data Penyakit</h4>
      </div>
      <div class="modal-body">
        <div id="form-input">
          <!-- isi form ubah -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- modal detail -->

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

    $('#modalDetail').on('show.bs.modal', function (e) {
      var id_penyakit = $(e.relatedTarget).data('id');
      $.ajax({
        type: 'post',
        url: '<?php echo base_url("admin/formdetail"); ?>',
        data: {id_penyakit: id_penyakit},
        success: function (data){
          $('#form-input').html(data);
        }
      });
    });

    $('#modalHapus').on('show.bs.modal', function (e) {
       $(this).find('.btn-iya').attr('href', $(e.relatedTarget).data('href'));
    });

    // datatables
    $('#example').DataTable({
      responsive: true
    });

    // apabila dicentang semua
    $('#hapus-semua').click(function () {
      var checked = $('.hapus-checkbox');
      if (checked.prop('checked', this.checked).is(':checked')) {
        checked.closest('tr').addClass('removeRow');
      } else {
        checked.closest('tr').removeClass('removeRow');
      }
    })

    // dicentang satu2
    $('.hapus-checkbox').click(function () {
      if ($(this).is(':checked')) {
        $(this).closest('tr').addClass('removeRow');
      } else {
        $(this).closest('tr').removeClass('removeRow');
      }
    });

    $('#hapus').click(function () {
      var checkbox = $('.hapus-checkbox:checked');
      if (checkbox.length > 0) {
        // apabila data penyakit dicentang
        var checkbox_nilai = [];

        $(checkbox).each(function () {
          checkbox_nilai.push($(this).val());
        });

        $.ajax({
          url: "<?php echo base_url() ?>admin/hapusdata",
          method: 'post',
          data: {checkbox_nilai:checkbox_nilai},
          success: function () {
            $('.removeRow').fadeOut(1500);
          }
        });

      } else {
        // apabila pada data penyakit tidak ada yang dicentang
        alert('silahkan centang data penyakit yang akan dihapus!');
      }
    });

    $('#inpnamapenyakit').autocomplete({
      source: function (request, response) {
        $.ajax({
          method: 'get',
          url: '<?php echo base_url("admin/autocompletePenyakit");?>',
          dataType: 'json',
          data: {term: request.term},
          success: function (data) {
            // jika data yang dicari ada
            $('#inpjenispenyakit').val(data['jenis_penyakit']);
            $('#inpkatpenyakit').val(data['kategori_penyakit']);
          },
          error: function () {
            // jika data yang dicari tidak ada
            $('#inpjenispenyakit').val('Tidak Ada');
            $('#inpkatpenyakit').val('Tidak Ada');
          }
        });
      }
    });

  });
</script>
