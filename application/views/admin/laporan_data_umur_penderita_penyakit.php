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

<h4 style="text-align: center;">Penderita Penyakit Berdasarkan Umur Pada Tahun <?php echo $tahun; ?></h4>

<table border="1" align="center">
  <thead>
    <tr>
      <th>Nama Penyakit</th>
      <th>0 - 4</th>
      <th>5 - 9</th>
      <th>10 - 14</th>
      <th>15 - 19</th>
      <th>20 - 24</th>
      <th>25 - 29</th>
      <th>30 - 34</th>
      <th>35 - 39</th>
      <th>40 - 44</th>
      <th>45 - 49</th>
      <th>50 - 54</th>
      <th>55 - 59</th>
      <th>60 - 64</th>
      <th>65 - 69</th>
      <th>70 - 74</th>
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
$html2pdf = new HTML2PDF('L', 'Legal', 'en', 'utf-8');
$html2pdf->WriteHTML($content);
$html2pdf->Output('Laporan Data Umur Penderita Penyakit.pdf');

?>
