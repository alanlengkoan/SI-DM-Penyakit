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

            <div class="col-lg-12">
              <div class="breadcomb-wp">

                <div class="breadcomb-icon">
                  <i class="fa fa-table"></i>
                </div>

                <div class="breadcomb-ctn">
                  <h2>Detail Penyakit</h2>
                  <p>Untuk mengetahui lebih detail Jumlah Penderita Penyakit. Masuk Tahun Untuk Melihat Hasil Detail Jumlah Penderita Penyakit.</p>

                  <!-- form untuk memasukkan jenis tahun yang akan di proses -->
                  <div class="all-form-element-inner">
                    <?php echo form_open('admin/tahun'); ?>
                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2">
                          <label class="login2"><?php echo form_label('Masukkan Tahun'); ?></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                          <?php echo form_input('inptahun', '', array('placeholder' => 'Masukkan Tahun', 'class' => 'form-control', 'required' => 'required')); ?>
                        </div>
                      </div>
                    </div>
                    <?php echo form_submit('tampil', 'Tampil', array('class' => 'btn btn-success')); ?>
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

<?php

if (!isset($kosong)) {
  // gagal
} else {
  // berhasil
  echo "
  <div class='mg-b-15'>
    <div class='container-fluid'>
      <div class='row'>
        <div class='col-lg-12'>
          <div class='alert alert-danger alert-mg-b alert-success-style4'>
            <button type='button' class='close sucess-op' data-dismiss='alert' aria-label='Close'>
              <span class='icon-sc-cl' aria-hidden='true'>&times;</span>
            </button>
            <i class='fa fa-close adminpro-checked-pro admin-check-pro' aria-hidden='true'></i>
            <p>".$kosong."</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
}

if (!isset($jenispenyakit) || !isset($tahun)) {
  // gagal
} else {
  // berhasi
  ?>

  <div class="mg-b-15">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="single-product-pr">

            <ul class="nav nav-tabs">
              <li role="presentation" class="active"> <a href="#">Data Detail</a> </li>
              <li role="presentation"> <?php echo anchor('admin/detailgrafik', 'Data Grafik'); ?> </li>
            </ul>

            <br />

            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <?php

                $sql1 = "SELECT SUM(jenis_kelamin = 'L') AS laki_laki, COUNT(IF(umur BETWEEN 0 and 4, 1, NULL)) AS '0 - 4', COUNT(IF(umur BETWEEN 5 and 9, 1, NULL)) AS '5 - 9', COUNT(IF(umur BETWEEN 10 and 14, 1, NULL)) AS '10 - 14', COUNT(IF(umur BETWEEN 15 and 19, 1, NULL)) AS '15 - 19', COUNT(IF(umur BETWEEN 20 and 24, 1, NULL)) AS '20 - 24', COUNT(IF(umur BETWEEN 25 and 29, 1, NULL)) AS '25 - 29', COUNT(IF(umur BETWEEN 30 and 34, 1, NULL)) AS '30 - 34', COUNT(IF(umur BETWEEN 35 and 39, 1, NULL)) AS '35 - 39', COUNT(IF(umur BETWEEN 40 and 44, 1, NULL)) AS '40 - 44', COUNT(IF(umur BETWEEN 45 and 49, 1, NULL)) AS '45 - 49', COUNT(IF(umur BETWEEN 50 and 54, 1, NULL)) AS '50 - 54', COUNT(IF(umur BETWEEN 55 and 59, 1, NULL)) AS '55 - 59', COUNT(IF(umur BETWEEN 60 and 64, 1, NULL)) AS '60 - 64', COUNT(IF(umur BETWEEN 65 and 69, 1, NULL)) AS '65 - 69', COUNT(IF(umur BETWEEN 70 and 74, 1, NULL)) AS '70 - 74', COUNT(IF(umur >= 75, 1, NULL)) AS '75 +' FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' AND jenis_kelamin = 'L'";
                $result1 = $this->db->query($sql1)->result_array();

                $sql2 = "SELECT SUM(jenis_kelamin = 'P') AS perempuan, COUNT(IF(umur BETWEEN 0 and 4, 1, NULL)) AS '0 - 4', COUNT(IF(umur BETWEEN 5 and 9, 1, NULL)) AS '5 - 9', COUNT(IF(umur BETWEEN 10 and 14, 1, NULL)) AS '10 - 14', COUNT(IF(umur BETWEEN 15 and 19, 1, NULL)) AS '15 - 19', COUNT(IF(umur BETWEEN 20 and 24, 1, NULL)) AS '20 - 24', COUNT(IF(umur BETWEEN 25 and 29, 1, NULL)) AS '25 - 29', COUNT(IF(umur BETWEEN 30 and 34, 1, NULL)) AS '30 - 34', COUNT(IF(umur BETWEEN 35 and 39, 1, NULL)) AS '35 - 39', COUNT(IF(umur BETWEEN 40 and 44, 1, NULL)) AS '40 - 44', COUNT(IF(umur BETWEEN 45 and 49, 1, NULL)) AS '45 - 49', COUNT(IF(umur BETWEEN 50 and 54, 1, NULL)) AS '50 - 54', COUNT(IF(umur BETWEEN 55 and 59, 1, NULL)) AS '55 - 59', COUNT(IF(umur BETWEEN 60 and 64, 1, NULL)) AS '60 - 64', COUNT(IF(umur BETWEEN 65 and 69, 1, NULL)) AS '65 - 69', COUNT(IF(umur BETWEEN 70 and 74, 1, NULL)) AS '70 - 74', COUNT(IF(umur >= 75, 1, NULL)) AS '75 +' FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' AND jenis_kelamin = 'P'";
                $result2 = $this->db->query($sql2)->result_array();

                $hasil = array();
                foreach ($result1 as $key => $value) {
                  $hasil[$key]['umur'] = [
                  "0 - 4",
                  "5 - 9",
                  "10 - 14",
                  "15 - 19",
                  "20 - 24",
                  "25 - 29",
                  "30 - 34",
                  "35 - 39",
                  "40 - 44",
                  "45 - 49",
                  "50 - 54",
                  "55 - 59",
                  "60 - 64",
                  "65 - 69",
                  "70 - 74",
                  "75 +",
                  "total" => "Total"
                  ];

                  $hasil[$key]['L'] = [
                  $value['0 - 4'],
                  $value['5 - 9'],
                  $value['10 - 14'],
                  $value['15 - 19'],
                  $value['20 - 24'],
                  $value['25 - 29'],
                  $value['30 - 34'],
                  $value['35 - 39'],
                  $value['40 - 44'],
                  $value['45 - 49'],
                  $value['50 - 54'],
                  $value['55 - 59'],
                  $value['60 - 64'],
                  $value['65 - 69'],
                  $value['70 - 74'],
                  $value['75 +'],
                  "L" => $value['laki_laki']
                  ];
                }
                foreach ($result2 as $key => $value) {
                  $hasil[$key]['P'] = [
                  $value['0 - 4'],
                  $value['5 - 9'],
                  $value['10 - 14'],
                  $value['15 - 19'],
                  $value['20 - 24'],
                  $value['25 - 29'],
                  $value['30 - 34'],
                  $value['35 - 39'],
                  $value['40 - 44'],
                  $value['45 - 49'],
                  $value['50 - 54'],
                  $value['55 - 59'],
                  $value['60 - 64'],
                  $value['65 - 69'],
                  $value['70 - 74'],
                  $value['75 +'],
                  "P" => $value['perempuan']
                  ];
                }

                ?>

                <h4>Jumlah Umur Berdasarkan Laki - laki dan Perempuan Pada Tahun <?php echo $tahun; ?></h4>

                <div class="table-responsive">
                  <table class="table table-hover" style="width:100%">
                    <thead>
                      <tr>
                        <th>Umur</th>
                        <th>Laki - laki</th>
                        <th>Perempuan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      foreach ($hasil as $value) {
                        for ($i = 0; $i < 15; $i++) {
                          echo "<tr>";
                            echo "<td>".$value['umur'][$i]."</td>";
                            echo "<td>".$value['L'][$i]."</td>";
                            echo "<td>".$value['P'][$i]."</td>";
                            echo "</tr>";
                          }
                          echo "<tr>";
                            echo "<td>".$value['umur']['total']."</td>";
                            echo "<td>".$value['L']['L']."</td>";
                            echo "<td>".$value['P']['P']."</td>";
                            echo "</tr>";
                          }

                          ?>
                        </tbody>
                      </table>
                    </div>

                    <?php echo form_open('admin/umurpenderita', array('target' => '_blank')); ?>
                    <?php echo form_input(array('type' => 'hidden', 'value' => $tahun, 'name' => 'inptahun', 'readonly' => 'readonly')); ?>
                    <?php echo form_submit('cetak', 'Cetak!', array('class' => 'btn-custon-rounded-three btn btn-success')); ?>
                    <?php echo form_close(); ?>

                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <?php

                    $sql1 = "SELECT DISTINCT nama_penyakit FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' ORDER BY nama_penyakit ASC";
                    $result1 = $this->db->query($sql1)->result_array();

                    $hasil = array();
                    foreach ($result1 as $key => $value) {
                      $namapenyakit = $value['nama_penyakit'];
                      $sql1 = "SELECT SUM(nama_penyakit = '$namapenyakit') AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun'";
                      $result1 = $this->db->query($sql1)->result_array();

                      $hasil[$key]['nama_penyakit'] = $value['nama_penyakit'];
                      foreach ($result1 as $value1) {
                        $hasil[$key]['jumlah_penderita'] = $value1['jumlah_penderita'];
                      }

                    }

                    ?>

                    <h4>Jumlah Penderita Penyakit Pada Tahun <?php echo $tahun; ?></h4>

                    <div class="table-responsive">
                      <table class="table table-hover" style="width:100%">
                        <thead>
                          <tr>
                            <th>Nama Penyakit</th>
                            <th>Jumlah</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php

                          foreach ($hasil as $key => $value) {
                            echo "<tr>";
                              echo "<td>".str_replace("_", " ", $value['nama_penyakit'])."</td>";
                              echo "<td>".$value['jumlah_penderita']."</td>";
                              echo "</tr>";
                            }

                            ?>
                          </tbody>
                        </table>
                      </div>

                      <?php echo form_open('admin/namapenyakit', array('target' => '_blank')); ?>
                      <?php echo form_input(array('type' => 'hidden', 'value' => $tahun, 'name' => 'inptahun', 'readonly' => 'readonly')); ?>
                      <?php echo form_submit('cetak', 'Cetak!', array('class' => 'btn-custon-rounded-three btn btn-success')); ?>
                      <?php echo form_close(); ?>

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">

                      <?php
                      $sql1 = "SELECT DISTINCT nama_penyakit FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' ORDER BY nama_penyakit ASC";
                      $result1 = $this->db->query($sql1)->result_array();

                      $hasil = array();
                      foreach ($result1 as $key => $value) {

                        $namapenyakit = $value['nama_penyakit'];

                        // untuk menampilkan penyakit berdasarkan umur
                        $umur1 = "SELECT COUNT(IF(nama_penyakit = '$namapenyakit', 1, NULL)) AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' AND umur BETWEEN 0 and 4";
                        $result1 = $this->db->query($umur1)->result_array();

                        $umur2 = "SELECT COUNT(IF(nama_penyakit = '$namapenyakit', 1, NULL)) AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' AND umur BETWEEN 5 and 9";
                        $result2 = $this->db->query($umur2)->result_array();

                        $umur3 = "SELECT COUNT(IF(nama_penyakit = '$namapenyakit', 1, NULL)) AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' AND umur BETWEEN 10 and 14";
                        $result3 = $this->db->query($umur3)->result_array();

                        $umur4 = "SELECT COUNT(IF(nama_penyakit = '$namapenyakit', 1, NULL)) AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' AND umur BETWEEN 15 and 19";
                        $result4 = $this->db->query($umur4)->result_array();

                        $umur5 = "SELECT COUNT(IF(nama_penyakit = '$namapenyakit', 1, NULL)) AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' AND umur BETWEEN 20 and 24";
                        $result5 = $this->db->query($umur5)->result_array();

                        $umur6 = "SELECT COUNT(IF(nama_penyakit = '$namapenyakit', 1, NULL)) AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' AND umur BETWEEN 25 and 29";
                        $result6 = $this->db->query($umur6)->result_array();

                        $umur7 = "SELECT COUNT(IF(nama_penyakit = '$namapenyakit', 1, NULL)) AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' AND umur BETWEEN 30 and 34";
                        $result7 = $this->db->query($umur7)->result_array();

                        $umur8 = "SELECT COUNT(IF(nama_penyakit = '$namapenyakit', 1, NULL)) AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' AND umur BETWEEN 35 and 39";
                        $result8 = $this->db->query($umur8)->result_array();

                        $umur9 = "SELECT COUNT(IF(nama_penyakit = '$namapenyakit', 1, NULL)) AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' AND umur BETWEEN 40 and 44";
                        $result9 = $this->db->query($umur9)->result_array();

                        $umur10 = "SELECT COUNT(IF(nama_penyakit = '$namapenyakit', 1, NULL)) AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' AND umur BETWEEN 45 and 49";
                        $result10 = $this->db->query($umur10)->result_array();

                        $umur11 = "SELECT COUNT(IF(nama_penyakit = '$namapenyakit', 1, NULL)) AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' AND umur BETWEEN 50 and 54";
                        $result11 = $this->db->query($umur11)->result_array();

                        $umur12 = "SELECT COUNT(IF(nama_penyakit = '$namapenyakit', 1, NULL)) AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' AND umur BETWEEN 55 and 59";
                        $result12 = $this->db->query($umur12)->result_array();

                        $umur13 = "SELECT COUNT(IF(nama_penyakit = '$namapenyakit', 1, NULL)) AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' AND umur BETWEEN 60 and 64";
                        $result13 = $this->db->query($umur13)->result_array();

                        $umur14 = "SELECT COUNT(IF(nama_penyakit = '$namapenyakit', 1, NULL)) AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' AND umur BETWEEN 65 and 69";
                        $result14 = $this->db->query($umur14)->result_array();

                        $umur15 = "SELECT COUNT(IF(nama_penyakit = '$namapenyakit', 1, NULL)) AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' AND umur BETWEEN 70 and 74";
                        $result15 = $this->db->query($umur15)->result_array();

                        $umur16 = "SELECT COUNT(IF(nama_penyakit = '$namapenyakit', 1, NULL)) AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun' AND umur >= 75";
                        $result16 = $this->db->query($umur16)->result_array();

                        // mengambil hasil dari setiap hasil
                        $hasil[$key]['nama_penyakit'] = $value['nama_penyakit'];
                        foreach ($result1 as $value) {
                          $hasil[$key]['0 - 4'] = $value['jumlah_penderita'];
                        }
                        foreach ($result2 as $value) {
                          $hasil[$key]['5 - 9'] = $value['jumlah_penderita'];
                        }
                        foreach ($result3 as $value) {
                          $hasil[$key]['10 - 14'] = $value['jumlah_penderita'];
                        }
                        foreach ($result4 as $value) {
                          $hasil[$key]['15 - 19'] = $value['jumlah_penderita'];
                        }
                        foreach ($result5 as $value) {
                          $hasil[$key]['20 - 24'] = $value['jumlah_penderita'];
                        }
                        foreach ($result6 as $value) {
                          $hasil[$key]['25 - 29'] = $value['jumlah_penderita'];
                        }
                        foreach ($result7 as $value) {
                          $hasil[$key]['30 - 34'] = $value['jumlah_penderita'];
                        }
                        foreach ($result8 as $value) {
                          $hasil[$key]['35 - 39'] = $value['jumlah_penderita'];
                        }
                        foreach ($result9 as $value) {
                          $hasil[$key]['40 - 44'] = $value['jumlah_penderita'];
                        }
                        foreach ($result10 as $value) {
                          $hasil[$key]['45 - 49'] = $value['jumlah_penderita'];
                        }
                        foreach ($result11 as $value) {
                          $hasil[$key]['50 - 54'] = $value['jumlah_penderita'];
                        }
                        foreach ($result12 as $value) {
                          $hasil[$key]['55 - 59'] = $value['jumlah_penderita'];
                        }
                        foreach ($result13 as $value) {
                          $hasil[$key]['60 - 64'] = $value['jumlah_penderita'];
                        }
                        foreach ($result14 as $value) {
                          $hasil[$key]['65 - 69'] = $value['jumlah_penderita'];
                        }
                        foreach ($result15 as $value) {
                          $hasil[$key]['70 - 74'] = $value['jumlah_penderita'];
                        }
                        foreach ($result16 as $value) {
                          $hasil[$key]['75 +'] = $value['jumlah_penderita'];
                        }

                      }

                      ?>


                      <h4>Penderita Penyakit Berdasarkan Umur Pada Tahun <?php echo $tahun; ?></h4>

                      <div class="table-responsive">
                        <table class="table table-hover" style="width:100%">
                          <thead>
                            <tr>
                              <th>Nama Penyakit</th>
                              <th>0-4</th>
                              <th>5-9</th>
                              <th>10-14</th>
                              <th>15-19</th>
                              <th>20-24</th>
                              <th>25-29</th>
                              <th>30-34</th>
                              <th>35-39</th>
                              <th>40-44</th>
                              <th>45-49</th>
                              <th>50-54</th>
                              <th>55-59</th>
                              <th>60-64</th>
                              <th>65-69</th>
                              <th>70-74</th>
                              <th>75 +</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php

                            foreach ($hasil as $key => $value) {

                              echo "<tr>";
                                echo "<td>".str_replace("_", " ", $value['nama_penyakit'])."</td>";
                                echo "<td>".$value['0 - 4']."</td>";
                                echo "<td>".$value['5 - 9']."</td>";
                                echo "<td>".$value['10 - 14']."</td>";
                                echo "<td>".$value['15 - 19']."</td>";
                                echo "<td>".$value['20 - 24']."</td>";
                                echo "<td>".$value['25 - 29']."</td>";
                                echo "<td>".$value['30 - 34']."</td>";
                                echo "<td>".$value['35 - 39']."</td>";
                                echo "<td>".$value['40 - 44']."</td>";
                                echo "<td>".$value['45 - 49']."</td>";
                                echo "<td>".$value['50 - 54']."</td>";
                                echo "<td>".$value['55 - 59']."</td>";
                                echo "<td>".$value['60 - 64']."</td>";
                                echo "<td>".$value['65 - 69']."</td>";
                                echo "<td>".$value['70 - 74']."</td>";
                                echo "<td>".$value['75 +']."</td>";
                                echo "</tr>";

                              }

                              ?>
                            </tbody>
                          </table>
                        </div>

                        <?php echo form_open('admin/umurpenderitapenyakit', array('target' => '_blank')); ?>
                        <?php echo form_input(array('type' => 'hidden', 'value' => $tahun, 'name' => 'inptahun', 'readonly' => 'readonly')); ?>
                        <?php echo form_submit('cetak', 'Cetak!', array('class' => 'btn-custon-rounded-three btn btn-success')); ?>
                        <?php echo form_close(); ?>


                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php } ?>

        <div class="footer-copyright-area">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="footer-copy-right">
                  <p>© Copyright 2019 Alan Saputra Lengkoan - 2015020007.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- isi content -->

      <?php $this->load->view('admin/atribut/foot'); ?>
