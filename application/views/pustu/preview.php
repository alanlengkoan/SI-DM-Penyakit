<?php

// untuk menampikan pemberitahuan
if (isset($_GET['berhasil'])) {
  echo "Data Berhasil di Import";
}

?>

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
                  <h2>Hasil Preview</h2>
                  <?php echo form_open('pustu/importdata'); ?>
                  <?php echo form_input(array('type' => 'hidden', 'name' => 'filepath', 'value' => $filepath, 'readonly' => 'readonly')); ?>
                  <?php echo form_submit('import', 'Import Data!', array('class' => 'btn btn-custon-rounded-three btn-default')); ?>
                  <?php echo anchor('admin/getpenyakit', 'Kosongkan!', array('class' => 'btn btn-custon-rounded-three btn-default')); ?>
                  <?php echo form_close(); ?>
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

                function hitung_umur($tanggallahir)
                {
                  list($tahun, $bulan, $hari) = explode("-", $tanggallahir);
                  $tahun_diff = date("Y") - $tahun;
                  $bulan_diff = date("m") - $bulan;
                  $hari_diff  = date("d") - $hari;

                  if ($bulan_diff < 0) {
                    $tahun_diff--;
                  } else if (($bulan_diff == 0) && ($hari_diff < 0)) {
                    $tahun_diff--;
                  }

                  return $tahun_diff;
                }

                $no = 1;
                for ($row = 2; $row <= $baris; $row++){

                  //  Read a row of data into an array
                  $rowData          = $sheet->rangeToArray('A' . $row . ':' . $kolom . $row, NULL, TRUE, FALSE);
                  $namapenderita    = strtolower($rowData[0][0]);
                  $jeniskelamin     = $rowData[0][1];
                  $tempatlahir      = strtolower($rowData[0][2]);
                  $tanggallahir     = strtotime(PHPExcel_Style_NumberFormat::toFormattedString($rowData[0][3], 'YYYY-MM-DD'));;
                  $namapenyakit     = strtolower($rowData[0][4]);
                  $jenispenyakit    = $rowData[0][5];
                  $kategoripenyakit = $rowData[0][6];
                  $tanggal          = strtotime(PHPExcel_Style_NumberFormat::toFormattedString($rowData[0][7], 'YYYY-MM-DD'));

                  echo "<tr>";
                  echo "<td>".$no++."</td>";
                  echo "<td>".ucwords($namapenderita)."</td>";
                  echo "<td>".$jeniskelamin."</td>";
                  echo "<td>".hitung_umur(date("Y-m-d", $tanggallahir))."</td>";
                  echo "<td>".ucwords($tempatlahir)."</td>";
                  echo "<td>".date("Y-m-d", $tanggallahir)."</td>";
                  echo "<td>".ucwords($namapenyakit)."</td>";
                  echo "<td>".$jenispenyakit."</td>";
                  echo "<td>".$kategoripenyakit."</td>";
                  echo "<td>".date("Y-m-d", $tanggal)."</td>";
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
<?php $this->load->view('pustu/atribut/foot'); ?>

<script type="text/javascript">
  $(document).ready(function () {

    // datatables
    $('#example').DataTable({
      responsive: true
    });

  });
</script>
