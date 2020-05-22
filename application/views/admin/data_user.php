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
                  <i class="fa fa-users"></i>
                </div>


                <div class="breadcomb-ctn">
                  <h2>Data User</h2>
                  <!-- modal tambah dan import -->
                  <a href="#" class="btn btn-custon-rounded-three btn-default" data-toggle="modal" data-target="#modalTambah"><i class="fa fa-plus-circle" aria-hidden="true"></i> User</a>
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
          if (isset($_GET['tambah'])) {
            echo "
            <div class='alert alert-success alert-success-style1'>
              <button type='button' class='close sucess-op' data-dismiss='alert' aria-label='Close'>
                <span class='icon-sc-cl' aria-hidden='true'>&times;</span>
              </button>
              <i class='fa fa-check adminpro-checked-pro admin-check-pro' aria-hidden='true'></i>
              <p><strong>Berhasil!</strong> Data User berhasil di tambah.</p>
            </div>
            ";
          } else if (isset($_GET['ubah'])) {
            echo "
            <div class='alert alert-success alert-success-style1'>
              <button type='button' class='close sucess-op' data-dismiss='alert' aria-label='Close'>
                <span class='icon-sc-cl' aria-hidden='true'>&times;</span>
              </button>
              <i class='fa fa-check adminpro-checked-pro admin-check-pro' aria-hidden='true'></i>
              <p><strong>Berhasil!</strong> Data User berhasil di ubah.</p>
            </div>
            ";
          } else if (isset($_GET['hapus'])) {
            echo "
            <div class='alert alert-danger alert-mg-b alert-success-style4'>
              <button type='button' class='close sucess-op' data-dismiss='alert' aria-label='Close'>
                <span class='icon-sc-cl' aria-hidden='true'>&times;</span>
              </button>
              <i class='fa fa-check adminpro-checked-pro admin-check-pro' aria-hidden='true'></i>
              <p><strong>Berhasil!</strong> Data User berhasil di hapus.</p>
            </div>
            ";
          } else if (isset($_GET['gagal'])) {
            echo "
            <div class='alert alert-danger alert-mg-b alert-success-style4'>
              <button type='button' class='close sucess-op' data-dismiss='alert' aria-label='Close'>
                <span class='icon-sc-cl' aria-hidden='true'>&times;</span>
              </button>
              <i class='fa fa-check adminpro-checked-pro admin-check-pro' aria-hidden='true'></i>
              <p><strong>Gagal!</strong> Mengubah Data User.</p>
            </div>
            ";
          }

          ?>

          <div class="table-responsive">
            <table id="example" class="table table-hover" style="width:100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No Telepon</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Level</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($datauser as $row) {
                  echo "<tr>";
                    echo "<td align='center'>".$no++."</td>";
                    echo "<td>".$row['nama']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['no_tlp']."</td>";
                    echo "<td>".$row['username']."</td>";
                    echo "<td>".substr($row['password'], 0, 10)."</td>";
                    echo "<td>".$row['level']."</td>";
                    echo "<td width='130' align='center'>
                      <div class='btn-group btn-custom-groups btn-custom-groups-one'>
                        ".anchor('#', '<i class="fa fa-info"></i>', array('class' => 'btn btn-info', 'data-id' => $row['id'], 'data-toggle' => 'modal', 'data-target' => '#modalDetail'))."
                        ".anchor('#', '<i class="fa fa-edit"></i>', array('class' => 'btn btn-success', 'data-id' => $row['id'], 'data-toggle' => 'modal', 'data-target' => '#modalUbah'))."
                        ".anchor('#', '<i class="fa fa-trash"></i>', array('class' => 'btn btn-danger', 'data-href' => 'akun/hapususer/'.$row['id'], 'data-toggle' => 'modal', 'data-target' => '#modalHapus'))."
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
        <h4 class="modal-title" id="myModalLabel">Tambah User</h4>
      </div>
      <div class="modal-body">

        <div class="all-form-element-inner">
          <?php echo form_open('akun/tambahuser'); ?>
            <div class="form-group-inner">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <?php echo form_label('Nama'); ?>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <?php echo form_input('inpnama', '', array('required' => 'required', 'placeholder' => 'Nama', 'class' => 'form-control')); ?>
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
                  <?php echo form_input(array('type' => 'email', 'name' => 'inpemail', 'placeholder' => 'Email', 'required' => 'required', 'class' => 'form-control')); ?>
                  <div class="help-block with-errors">
                    <?php echo form_error('inpemail'); ?>
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
                  <?php echo form_input('inpnotlp', '', array('required' => 'required', 'placeholder' => 'Nomor Telepon', 'class' => 'form-control')); ?>
                  <div class="help-block with-errors">
                    <?php echo form_error('inpnotlp'); ?>
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
                  <?php echo form_input('inpusername', '', array('required' => 'required', 'placeholder' => 'Username', 'class' => 'form-control')); ?>
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
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <?php echo form_input('inppassword', '', array('required' => 'required', 'placeholder' => 'Password', 'class' => 'form-control')); ?>
                  <div class="help-block with-errors">
                    <?php echo form_error('inppassword'); ?>
                  </div>
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
                    <option value="">- Level -</option>
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
            <?php echo form_reset('reset', 'Kosongkan', array('class' => 'btn btn-primary')); ?>
            <?php echo form_submit('tambah', 'Simpan', array('class' => 'btn btn-success')); ?>
          <?php echo form_close(); ?>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- modal tambah -->

<!-- modal ubah -->
<div class="modal fade" id="modalUbah" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Ubah Data User</h4>
      </div>
      <div class="modal-body">
        <div id="form-input">
          <!-- isi form ubah -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- modal ubah -->

<!-- modal detail -->
<div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Detail Data User</h4>
      </div>
      <div class="modal-body">
        <div id="form-inputt">
          <!-- isi form detail -->
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
        Apakah Anda Yakin Ingin menghapus data user ini?
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

    $('#modalUbah').on('show.bs.modal', function (e) {
      var id = $(e.relatedTarget).data('id');

      $.ajax({
        type: 'post',
        url: '<?php echo base_url("akun/formubahdata"); ?>',
        data: {id: id},
        success: function (data){
          $('#form-input').html(data);
        }
      });
    });

    $('#modalDetail').on('show.bs.modal', function (e) {
      var id = $(e.relatedTarget).data('id');

      $.ajax({
        type: 'post',
        url: '<?php echo base_url("akun/formdetail"); ?>',
        data: {id: id},
        success: function (data){
          $('#form-inputt').html(data);
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

  });
</script>
