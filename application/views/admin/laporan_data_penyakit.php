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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="breadcomb-wp">

                <div class="breadcomb-icon">
                  <i class="fa fa-list-alt"></i>
                </div>

                <div class="breadcomb-ctn">
                  <h2>Laporan Data Penyakit</h2>

                  <!-- form untuk memasukkan jenis tahun yang akan di proses -->
                  <div class="all-form-element-inner">
                    <?php echo form_open('lapdata/laporanDataPenyakit', array('target' => '_blank')); ?>
                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <label class="login2"><?php echo form_label('Dari Tanggal'); ?></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                          <?php echo form_input(array('type' => 'date', 'name' => 'tgl_a', 'class' => 'form-control', 'required' => 'required')); ?>
                          <div class="help-block with-errors" style="color: white;">
                            <?php echo form_error('tgl_a'); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <label class="login2"><?php echo form_label('Sampai Tanggal'); ?></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                          <?php echo form_input(array('type' => 'date', 'name' => 'tgl_b', 'class' => 'form-control', 'required' => 'required')); ?>
                          <div class="help-block with-errors" style="color: white;">
                            <?php echo form_error('tgl_b'); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php echo form_submit('cetak', 'Cetak Tanggal!', array('class' => 'btn-custon-rounded-three btn btn-success')); ?>
                    <a href="lapdata/laporanDataPenyakit" class="btn btn-custon-rounded-three btn-default" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Cetak Semua!</a>
                    <?php echo form_close(); ?>
                  </div>
                  <!-- form untuk memasukkan jenis tahun yang akan di proses -->
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

<!-- untuk menload bagin foot/bawah -->
<?php $this->load->view('admin/atribut/foot'); ?>

<script type="text/javascript">
  $(document).ready(function () {

    // datatables
    $('#example').DataTable({
      responsive: true
    });

  });
</script>
