<?php
ob_start();
?>

<!-- CSS -->
<style media="screen">

.judul {
  padding: 4mm;
  text-align: center;
}

.nama {
  text-decoration: underline;
  font-weight: bold;
}

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 5px;
}

h3 {
  font-family: times;
}

p {
  font-family: times;
  margin: 0;
}

</style>
<!-- CSS -->

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

<div class="judul">
  <table align="center">
    <tr>
      <td>
        <img src="<?php echo base_url() ?>assets/img/logo.png" alt="Logo Kabupaten Bulukumba" style="width: 70p; height: 70px;">
      </td>
      <td width="600" align="center">
        <h3>Pemerintah Kabupaten Bulukumba, Kecamatan Bontotiro, Desa Buhung Bundang</h3>
        <em>Jl. Muh. Supadi No. 68 Salo Bundang Desa Buhung Bundang Kec. Bontotiro Kab. Bulukumba <br/> Email: buhungbundangdesa@gmail.com Kode Pos: 92572</em>        
      </td>
    </tr>
  </table>
  <hr>
</div>

<h4 style="text-align: center;">Jumlah Umur Berdasarkan Laki - laki dan Perempuan Pada Tahun <?php echo $tahun; ?></h4>

<table border="1" align="center">
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

<br />
<br />

<table>
  <tr>
    <td width="460"></td>
    <td>
      <p>Yang bertanda tangan dibawah ini :</p>
      <br />
      <br />
      <br />
      <br />
      <p class="nama">Kepala Desa Buhung Bundang</p>
    </td>
  </tr>
</table>

<?php

// proses untuk menampilkan file pdf
$content = ob_get_clean();
include_once "vendor/html2pdf/html2pdf.class.php";
$html2pdf = new HTML2PDF('P', 'A4', 'en', 'utf-8');
$html2pdf->WriteHTML($content);
$html2pdf->Output('Laporan Data Umur Pendarita.pdf');

?>
