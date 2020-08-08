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
                  <i class="fa fa-hospital-o"></i>
                </div>


                <div class="breadcomb-ctn">
                  <h2>Data Penderita Penyakit</h2>
                  <!-- modal tambah dan import -->
                  <a href="#" class="btn btn-custon-rounded-three btn-default" data-toggle="modal" data-target="#modalTambah"><i class="fa fa-plus-circle" aria-hidden="true"></i> Data Penyakit</a>
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
            <table id="example" class="table table-hover" style="width:100%">
              <thead>
                <tr>
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
                    echo "<td align='center'>".$no++."</td>";
                    echo "<td>".$row['id_penyakit']."</td>";
                    echo "<td>".$row['nama_lengkap']."</td>";
                    echo "<td>".$row['jenis_kelamin']."</td>";
                    echo "<td>".$row['umur']."</td>";
                    echo "<td>".$row['tempat_lahir']."</td>";
                    echo "<td>".$row['tanggal_lahir']."</td>";
                    echo "<td>".str_replace("_", " ", $row['nama_penyakit'])."</td>";
                    echo "<td>".$row['jenis_penyakit']."</td>";
                    echo "<td>".$row['kategori_penyakit']."</td>";
                    echo "<td>".$row['tanggal']."</td>";
                    echo "<td width='130' align='center'>
                      <div class='btn-group btn-custom-groups btn-custom-groups-one'>
                        ".anchor('#', '<i class="fa fa-info"></i>', array('class' => 'btn btn-info', 'data-id' => $row['id_penyakit'], 'data-toggle' => 'modal', 'data-target' => '#modalDetail'))."
                        ".anchor('pustu/formubahdata/'.$row['id_penyakit'], '<i class="fa fa-edit"></i>', array('class' => 'btn btn-success'))."
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
          <?php echo form_open('pustu/tambahdata'); ?>
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
                  <?php echo form_input('inpnamapenyakit', '', array('placeholder' => 'Nama Penyakit', 'class' => 'form-control', 'required' => 'required')); ?>
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
                    <option value="">- Jenis Penyakit -</option>
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
                    <option value="">- Kategori Penyakit -</option>
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
<?php $this->load->view('pustu/atribut/foot'); ?>

<script type="text/javascript">
  $(document).ready(function () {

    $('#modalDetail').on('show.bs.modal', function (e) {
      var id_penyakit = $(e.relatedTarget).data('id');
      $.ajax({
        type: 'post',
        url: '<?php echo base_url("pustu/formdetail"); ?>',
        data: {id_penyakit: id_penyakit},
        success: function (data){
          $('#form-input').html(data);
        }
      });
    });

    $('#modalHapus').on('show.bs.modal', function (e) {
       $(this).find('.btn-iya').attr('href', $(e.relatedTarget).data('href'));
    });

    // untuk mengambil data jeni penyakit dan kategori penyakit
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

    // datatables
    $('#example').DataTable({
      responsive: true
    });

  });
</script>
