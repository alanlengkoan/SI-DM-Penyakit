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
  $sql1 = "SELECT SUM(nama_penyakit = '$namapenyakit') AS jumlah_penderita FROM tb_nama_penyakit WHERE YEAR(tanggal) = '$tahun'";
  $result1 = $this->db->query($sql1)->result_array();

  $hasil[$key]['nama_penyakit'] = $value['nama_penyakit'];
  foreach ($result1 as $value1) {
    $hasil[$key]['jumlah_penderita'] = $value1['jumlah_penderita'];
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

<h4 style="text-align: center;">Jumlah Penderita Penyakit Pada Tahun <?php echo $tahun; ?></h4>

<table border="1" align="center">
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
$html2pdf->Output('Laporan Data Nama Penyakit.pdf');

?>
