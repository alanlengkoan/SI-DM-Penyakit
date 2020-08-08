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
                  <i class="fa fa-cog"></i>
                </div>

                <div class="breadcomb-ctn">
                  <h2>Data Cluster dan Proses K-Means Clustering</h2>

                  <!-- form untuk memasukkan jenis tahun yang akan di proses -->
                  <div class="all-form-element-inner">
                    <?php echo form_open('cluster/tahun'); ?>
                    <p>Masuk 3 Tahun terakhir yang akan di olah.</p>
                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <label class="login2"><?php echo form_label('Tahun 1'); ?></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                          <?php echo form_input('inptahun1', '', array('placeholder' => 'Tahun 1', 'class' => 'form-control', 'required' => 'required')); ?>
                        </div>
                      </div>
                    </div>
                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <label class="login2"><?php echo form_label('Tahun 2'); ?></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                          <?php echo form_input('inptahun2', '', array('placeholder' => 'Tahun 2', 'class' => 'form-control', 'required' => 'required')); ?>
                        </div>
                      </div>
                    </div>
                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <label class="login2"><?php echo form_label('Tahun 3'); ?></label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                          <?php echo form_input('inptahun3', '', array('placeholder' => 'Tahun 3', 'class' => 'form-control', 'required' => 'required')); ?>
                        </div>
                      </div>
                    </div>
                    <?php echo form_submit('proses', 'Proses', array('class' => 'btn btn-success')); ?>
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

<?php if (isset($kosong)) { ?>
<!-- // berhasil -->
<div class="mg-b-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="alert alert-danger alert-mg-b alert-success-style4">
					<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
						<span class="icon-sc-cl" aria-hidden="true">&times;</span>
					</button>
					<i class="fa fa-close adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
					<p><?= $kosong ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>

<?php
if (isset($jenispenyakit) || isset($tahun1) || isset($tahun2) || isset($tahun3)) {
  // untuk menghilangkan error
  error_reporting(0);
  // berhasil
  $datacluster = array();
  foreach ($jenispenyakit as $key => $value) {

    // mengambil semua jenis penyakit yang diderita
    $namapenyakit = $value['nama_penyakit'];
    // menampilkan data berdasarkan tahun
    $sql1 = "SELECT SUM(nama_penyakit = '$namapenyakit') AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun1'";
    $result1 = $this->db->query($sql1)->result_array();

    $sql2 = "SELECT SUM(nama_penyakit = '$namapenyakit') AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun2'";
    $result2 = $this->db->query($sql2)->result_array();

    $sql3 = "SELECT SUM(nama_penyakit = '$namapenyakit') AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun3'";
    $result3 = $this->db->query($sql3)->result_array();

    // mengambil nama penyakit
    $datacluster[$key]['nama_penyakit'] = $value['nama_penyakit'];
    // mengambil jumlah penderita
    foreach ($result1 as $value1) {
      $datacluster[$key]['jumlah_penderita1'] = $value1['jumlah_penderita'];
    }
    foreach ($result2 as $value2) {
      $datacluster[$key]['jumlah_penderita2'] = $value2['jumlah_penderita'];
    }
    foreach ($result3 as $value3) {
      $datacluster[$key]['jumlah_penderita3'] = $value3['jumlah_penderita'];
    }

  }

  $data = [];

  foreach ($datacluster as $key => $value) {

    $hasil = [
    'nama_penyakit' => $value['nama_penyakit'],
    $value['jumlah_penderita1'],
    $value['jumlah_penderita2'],
    $value['jumlah_penderita3'],
    ];

    array_push($data, $hasil);
  }

  // mengambil file kmeans buatanku
  include_once "vendor/kmeans/kmeans.php";
  // untuk menload class proses
  $proses = new Proses;
  ?>

<!-- isi bagian kanan -->
<div class="mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

        <div class="single-product-pr">

            <div class="table-responsive">
              <table id="example" class="table table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Nama Penyakit</th>
                    <th colspan="3">Jumlah Penyakit Berdasarkan Tahun</th>
                  </tr>
                  <tr>
                    <th><?php echo $tahun1 ?></th>
                    <th><?php echo $tahun2 ?></th>
                    <th><?php echo $tahun3 ?></th>
                  </tr>
                </thead>
                <tbody align="center">
                  <?php
                  $no = 1;
                  foreach ($datacluster as $key => $value) {

                    echo "<tr>";
                    echo "<td>".$no++."</td>";
                    echo "<td>".str_replace("_", " ", $value['nama_penyakit'])."</td>";
                    echo "<td>".$value['jumlah_penderita1']."</td>";
                    echo "<td>".$value['jumlah_penderita2']."</td>";
                    echo "<td>".$value['jumlah_penderita3']."</td>";
                    echo "</tr>";

                  }
                  ?>
                  </tbody>
                </table>
              </div>

              <h2>Inisialisasi atau Penentuan Centroid</h2>
              <!-- untuk penentuan centroid atau inisialisasi -->
              <div class="table-responsive">
                <table id="example" class="table table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>Centroid</th>
                      <th><?php echo $tahun1 ?></th>
                      <th><?php echo $tahun2 ?></th>
                      <th><?php echo $tahun3 ?></th>
                    </tr>
                  </thead>
                  <tbody align="center">
                    <?php

                    /*
                    fungsi untuk menentukan berapa jumlah centroid awal
                    dan proses pengambilannya secara acak
                    */
                    $centroid = $proses->CentroidAwal($data, 3);
                    $c = 1;

                    foreach ($centroid as $key => $value) {
                      echo "<tr>";
                        echo "<td>c".$c++."</td>";
                        for ($i = 0; $i < count($value); $i++) {
                          echo "<td>".$value[$i]."</td>";
                        }
                        echo "</tr>";
                      }

                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- untuk penentuan centroid atau inisialisasi -->

                <?php

                $iterasi = 1;
                while (true) {

                  // variabel untuk menentukan masuk pada kelompok apa
                  $cluster1 = 1;
                  $cluster2 = 2;
                  $cluster3 = 3;

                  /* cara ini untuk mengubah data menjadi array atau mengambil data secara berurut pada kolom
                  */
                  // variabel array untuk jumlah kolom yang ada pada himpunan data
                  $k1 = [];
                  $k2 = [];
                  $k3 = [];

                  // variabel array untuk jumlah centroid
                  $cnt1 = [];
                  $cnt2 = [];
                  $cnt3 = [];

                  // mengambil hasil dari perhitungan persamaan ED dan mangambil hasil perhitungan
                  $hasil_iterasi = $proses->RumusPersamaanED($data, $centroid);

                  // untuk mengambil data dari himpunan data
                  foreach ($data as $key1 => $value1) {
                    $k1[] = $value1[0];
                    $k2[] = $value1[1];
                    $k3[] = $value1[2];
                  }

                  // hasil dari proses perhitungan
                  foreach ($hasil_iterasi as $key2 => $value2) {
                    $cnt1[] = $value2[0];
                    $cnt2[] = $value2[1];
                    $cnt3[] = $value2[2];
                  }

                  // mengubah data menjadi array hasil centroid
                  $cluster = [$cnt1, $cnt2, $cnt3];

                  // untuk mengambil hasil dari cluster
                  $cls = [];

                  // manampilkan data pada hasil iterasi
                  for ($i=0; $i < count($data); $i++) {
                    // untuk proses pembagian cluster
                    if ($cnt1[$i] < $cnt2[$i] && $cnt1[$i] < $cnt3[$i]) {
                      $cls[] = $cluster1;
                    } else if ($cnt2[$i] < $cnt1[$i] && $cnt2[$i] < $cnt3[$i]) {
                      $cls[] = $cluster2;
                    } else if ($cnt3[$i] < $cnt1[$i] && $cnt3[$i] < $cnt2[$i]) {
                      $cls[] = $cluster3;
                    }
                  }

                  // mengambil hasil untuk menentukan nilai terkecil atau jarak terdekat pada hasil cluster
                  $hasil_minimal = $proses->NilaiTerkecil($cluster, $data);

                  // untuk mengeksekusi apa bila terdapat nilai 0 pada index pertam
                  if (!$k1[0] != 0) {
                    $k1[0] = sprintf("%02d", 0);
                  }

                  if (!$k2[0] != 0) {
                    $k2[0] = sprintf("%02d", 0);
                  }

                  if (!$k3[0] != 0) {
                    $k3[0] = sprintf("%02d", 0);
                  }

                  /* mulai proses pencarian nilai rata - rata dari hasil pengelompokan untuk mengambil nilai yang masuk pada cluster */
                  // kolom a
                  $c1 = [];
                  $c2 = [];
                  $c3 = [];
                  // kolom b
                  $d1 = [];
                  $d2 = [];
                  $d3 = [];
                  // kolom c
                  $e1 = [];
                  $e2 = [];
                  $e3 = [];

                  // untuk menentukan apa bila ada nilai yang memiliki cluster yang sama pada saat pembagian cluster
                  for ($j=0; $j < count($cls); $j++) {

                    // menampilkan data menjadi 1
                    for ($i=0; $i < 1; $i++) {

                      // kolom 1 pada a
                      if ($k1[$i] AND $cls[$j] == 1) {
                        $c1[] = $k1[$j];
                      } else if ($k1[$i] AND $cls[$j] == 2) {
                        $c2[] = $k1[$j];
                      } else if ($k1[$i] AND $cls[$j] == 3) {
                        $c3[] = $k1[$j];
                      }

                      // kolom 2 pada b
                      if ($k2[$i] AND $cls[$j] == 1) {
                        $d1[] = $k2[$j];
                      } else if ($k2[$i] AND $cls[$j] == 2) {
                        $d2[] = $k2[$j];
                      } else if ($k2[$i] AND $cls[$j] == 3) {
                        $d3[] = $k2[$j];
                      }

                      // kolom 3 pada c
                      if ($k3[$i] AND $cls[$j] == 1) {
                        $e1[] = $k3[$j];
                      } else if ($k3[$i] AND $cls[$j] == 2) {
                        $e2[] = $k3[$j];
                      } else if ($k3[$i] AND $cls[$j] == 3) {
                        $e3[] = $k3[$j];
                      }

                    }
                    // menampilkan data menjadi 1

                  }

                  // hasil penyamaan atara cluster dan data
                  $cluster = [
                  [$c1, $c2, $c3],
                  [$d1, $d2, $d3],
                  [$e1, $e2, $e3]
                  ];

                  // untuk mengambil hasil nilai rata rata
                  $nilai_rata = $proses->NilaiRatarata($cluster);

                  $nilrat1 = [];
                  $nilrat2 = [];
                  $nilrat3 = [];

                  foreach ($nilai_rata as $key => $value) {
                    $nilrat1[] = $value[0];
                    $nilrat2[] = $value[1];
                    $nilrat3[] = $value[2];
                  }

                  // hasil centroid baru
                  $centroid_baru = [$nilrat1, $nilrat2, $nilrat3];

                  // untuk mengambil hasil centroid baru
                  $centroid = $proses->CentroidBaru($centroid_baru);

                  $hasil_baru = [];
                  $tabel_iterasi = array();

                  // untuk mengambil nama penyakit
                  foreach ($datacluster as $key => $value) {
                    $tabel_iterasi[$key]['nama_penyakit'] = str_replace("_", " ", $value['nama_penyakit']);
                  }

                  // untuk mengambil data
                  foreach ($data as $key => $value) {
                    // untuk mengambil data berdasarkan baris
                    $tabel_iterasi[$key]['data'] = $value;
                  }

                  // untuk mengambil hasil centroid c1, c2, c3
                  foreach ($hasil_iterasi as $key => $value) {
                    // untuk mengambil jarak centroid
                    $tabel_iterasi[$key]['jarak_centroid'] = $value;
                  }

                  // untuk mengambil nilai terkecil atau jarak terdekat
                  foreach ($hasil_minimal as $key => $value) {
                    // untuk mengambil jarak centroid
                    $tabel_iterasi[$key]['jarak_terdekat'] = $value;
                  }

                  // untuk mengambil cluster
                  foreach ($cls as $key => $value) {
                    // untuk mengambil clustering
                    $tabel_iterasi[$key]['cluster'] = $value;
                  }

                  // untuk menghitung berapa jumlah penyakit setiap claster
                  $pemb_clus = [];
                  foreach ($tabel_iterasi as $key1 => $value1) {
                    for ($i = 1; $i <= count($centroid); $i++) {
                      if ($value1['cluster'] == $i) {
                        $pemb_clus['cls'.$i][] = $value1['cluster'];
                      }
                    }
                  }

                  // untuk mengambil pembagian class pada penyakit
                  $hasil_class = array();
                  foreach ($tabel_iterasi as $key => $value) {
                    for ($i = 1; $i <= count($centroid); $i++) {
                      if ($value['data']['nama_penyakit'] AND $value['cluster'] == $i) {
                        $hasil_class[$key]["class".$i] = $value['data']['nama_penyakit'];
                      }
                    }
                  }

                  // untuk menggabungkan kedua array
                  array_push($hasil_baru, $tabel_iterasi);

                  ?>

                  <!-- untuk menampikan data -->
                  <?php foreach ($hasil_baru as $key => $value): ?>

                    <h2>Iterasi Ke-<?php echo $iterasi++ ?></h2>
                    <!-- menampilkan hasil iterasi -->
                    <div class="table-responsive">
                      <table id="example" class="table table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th rowspan="2">Obyek</th>
                            <th rowspan="2">Nama Penyakit</th>
                            <th rowspan="2" width="50"><?php echo $tahun1 ?></th>
                            <th rowspan="2" width="50"><?php echo $tahun2 ?></th>
                            <th rowspan="2" width="50"><?php echo $tahun3 ?></th>
                            <th colspan="3">Jarak Terdekat</th>
                            <th rowspan="2">Nilai Terkecil</th>
                            <th rowspan="2">Cluster</th>
                          </tr>
                          <tr>
                            <th>C1</th>
                            <th>C2</th>
                            <th>C3</th>
                          </tr>
                        </thead>
                        <tbody align="center">
                          <?php $no = 1 ?>

                          <?php foreach ($value as $key1 => $value1): ?>
                            <tr>
                              <td width="30" align="center"><?php echo $no++; ?></td>
                              <td width="195"><?php echo str_replace("_", " ", $value1['data']['nama_penyakit']); ?></td>
                              <td width="30" align="center"><?php echo $value1['data'][0]; ?></td>
                              <td width="30" align="center"><?php echo $value1['data'][1]; ?></td>
                              <td width="30" align="center"><?php echo $value1['data'][2]; ?></td>
                              <td width="30" align="center"><?php echo $value1['jarak_centroid'][0]; ?></td>
                              <td width="30" align="center"><?php echo $value1['jarak_centroid'][1]; ?></td>
                              <td width="30" align="center"><?php echo $value1['jarak_centroid'][2]; ?></td>
                              <td width="30" align="center"><?php echo $value1['jarak_terdekat']; ?></td>
                              <td width="30" align="center"><?php echo $value1['cluster']; ?></td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- untuk menampilkan tabel -->

                  <?php endforeach; ?>

                  <h2>Mencari Nilai Rata - rata</h2>
                  <!-- tabel untuk mencari nilai rata -->
                  <div class="table-responsive">
                    <table id="example" class="table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Centroid</th>
                          <th><?php echo $tahun1 ?></th>
                          <th><?php echo $tahun2 ?></th>
                          <th><?php echo $tahun3 ?></th>
                        </tr>
                      </thead>
                      <tbody align="center">
                        <?php
                        $c = 1;
                        foreach ($centroid_baru as $key => $value) {
                          echo "<tr>";
                          echo "<td>c".$c++."</td>";
                          for ($i = 0; $i < count($centroid_baru); $i++) {
                            echo "<td>".$value[$i]."</td>";
                          }
                          echo "<tr>";
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- tabel untuk mencari nilai rata -->

                  <?php

                  // memanggil function cluster baru
                  $cluster_baru = $proses->ClusterBaru($cls, $iterasi);

                  if (!$cluster_baru) {
                    // berhenti
                    break;
                  }
                }
              ?>

              <h2>Pembagian Cluster Penyakit</h2>
              <!-- tabal untuk pembagian cluster penyakit -->
              <div class="table-responsive">
                <table id="example" class="table table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <?php
                      for ($i = 1; $i <= count($centroid); $i++) {
                        echo "<th>C".$i."</th>";
                      }
                      ?>
                    </tr>
                  </thead>
                  <tbody align="center">
                    <?php
                    $no = 1;
                    foreach ($hasil_class as $key => $value) {

                      echo "<tr>";
                      echo "<td>".$no++."</td>";
                      for ($i = 1; $i <= count($centroid); $i++) {
                        echo empty($value["class".$i]) ? "<td align='center'> - </td>" : "<td>".str_replace("_", " ", $value["class".$i])."</td>";
                      }
                      echo "<tr>";

                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- pembagian untuk cluster pembagian penyakit -->

              <!-- untuk menampikan grafik dari hasil cluster -->
              <h2>Grafik Clustering</h2>
              <div id="container"></div>
              <!-- untuk menampikan grafik dari hasil cluster -->

              <!-- untuk menampilkan kesimpulan -->
              <br />
              <div class="panel panel-default">
                <div class="panel-body" style="color: black">
                  <h2>Kesimpulan</h2>
                  Berdasarkan dari hasil Clustering yang telah dibagi menjadi 3 Cluss yaitu :
                  <ul>
                    <li>- Penderita Penyakit Terbanyak</li>
                    <li>- Penderita Penyakit Sedang</li>
                    <li>- Penderita Penyakit Sedikit</li>
                  </ul>
                  Terdapat :
                  <ul>
                    <li>- <b><?php echo count($pemb_clus['cls1']); ?></b> Jenis Penyakit dengan jumlah Penderita Penyakit Terbanyak</li>
                    <li>- <b><?php echo count($pemb_clus['cls2']); ?></b> Jenis Penyakit dengan jumlah Penderita Penyakit Sedang</li>
                    <li>- <b><?php echo count($pemb_clus['cls3']); ?></b> Jenis Penyakit dengan jumlah Penderita Penyakit Sedikit</li>
                  </ul>
                  Yang selanjutnya <b><?php echo count($pemb_clus['cls1']); ?></b> Jenis Penyakit tersebut akan dilakukan tindakan oleh <b> <i>Dinas Kesehatan</i> </b> untuk mengatasi agar penyakit tersebut dilakukan upaya Pencegahan dan Penanggulangan.
                </div>
                <div class="panel-footer">
                    <form action="<?=base_url()?>cluster/cetak_kesimpulan" method="post" target="_blank">
                      <input type="hidden" name="cls1" value="<?=count($pemb_clus['cls1'])?>" />
                      <input type="hidden" name="cls2" value="<?=count($pemb_clus['cls2'])?>" />
                      <input type="hidden" name="cls3" value="<?=count($pemb_clus['cls3'])?>" />
                      <button type="submit" class="btn btn-success"><i class="fa fa-print"></i> Cetak</button>
                    </form>
                </div>
              </div>
              <!-- untuk menampilkan kesimpulan -->
  

              <?php } ?>

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
              <p>© Copyright 2019 Alan Saputra Lengkoan - 2015020007.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- isi content -->

  <!-- untuk menload bagin foot/bawah -->
  <?php $this->load->view('admin/atribut/foot'); ?>

  <script>
  // Create the chart
  Highcharts.chart('container', {
    chart: {
      type: 'column'
    },
    title: {
      text: 'Jumlah Penderita Penyakit Terbanyak, Sedang dan Sedikit'
    },
    subtitle: {
      text: 'Source: Alan Saputra Lengkoan  2019'
    },
    xAxis: {
      type: 'category'
    },
    yAxis: {
      title: {
        text: 'Total Jumlah Jenis Penderita Penyakit'
      }
    },
    legend: {
      enabled: false
    },
    plotOptions: {
      series: {
        borderWidth: 0,
        dataLabels: {
          enabled: true,
          format: '{point.y:.f}'
        }
      }
    },

    tooltip: {
      headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
      pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.f}</b> of total<br/>'
    },

    series: [
      {
        name: "Browsers",
        colorByPoint: true,
        data: [
          {
            name: "Penderita Penyakit Terbanyak",
            y: <?php echo count($pemb_clus['cls1']); ?>,
            drilldown: "Chrome"
          },
          {
            name: "Penderita Penyakit Sedang",
            y: <?php echo count($pemb_clus['cls2']); ?>,
            drilldown: "Firefox"
          },
          {
            name: "Penderita Penyakit Sedikit",
            y: <?php echo count($pemb_clus['cls3']); ?>,
            drilldown: "Internet Explorer"
          }
        ]
      }
    ]
  });
  </script>
