<?php
ob_start();
?>

<!-- CSS -->
<style media="screen">

.judul {
  padding: 4mm;
  text-align: center;
}

.admin {
  font-weight: bold;
}

.nama {
  text-decoration: underline;
}

</style>
<!-- CSS -->

<?php

// membuat variabel array yang akan dibungkus
$data = array();
// menampilkan nama penyakit berdasarkan tanggal agar tidak terjadi duplicate nama
$sql = $this->db->query("SELECT DISTINCT nama_penyakit FROM tb_nama_penyakit WHERE tanggal BETWEEN '$tgla' AND '$tglb' ORDER BY nama_penyakit ASC")->result_array();

foreach ($sql as $key => $value) {

  // mengambil nama penyakit
  $namapenyakit = $value['nama_penyakit'];
  // manmpilkan data berdasarkan tanggal, bulan dan tahun

  $sql1 = "SELECT SUM(nama_penyakit = '$namapenyakit') AS jumlah_penderita FROM tb_nama_penyakit WHERE tanggal BETWEEN '$tgla' AND '$tglb'";
  $result1 = $this->db->query($sql1)->result_array();

  // mangambil data yang akan ditampilkan
  $data[$key]['nama_penyakit'] = $value['nama_penyakit'];
  // mengambil jumlah penderita penyakit
  foreach ($result1 as $value1) {
    $data[$key]['jumlah_penderita'] = $value1['jumlah_penderita'];
  }

}

?>

<div class="judul">
  Pemerintah Kabupaten Bulukumba, Kecamatan Bontotiro, Desa Buhung Bundang
  <br />
  <em>Jl. Muh. Supadi No. 68 Salo Bundang Desa Buhung Bundang Kec. Bontotiro Kab. Bulukumba <br/> Email: buhungbundangdesa@gmail.com Kode Pos: 92572</em>
  <hr>
</div>

<h4 style="text-align: center;">Laporan Data Penyakit</h4>

<table border="1" align="center">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Jumlah</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $no = 1;
    foreach ($data as $row) {
      echo "<tr>";
      echo "<td align='center'>".$no++."</td>";
      echo "<td>".str_replace("_", " ", $row['nama_penyakit'])."</td>";
      echo "<td>".$row['jumlah_penderita']."</td>";
      echo "</tr>";
    }

    ?>

  </tbody>
</table>

<p>Yang bertanda tangan dibawah ini :</p>
<p class="admin">Administrator</p>
<br>
<br>
<br>
<p class="nama">Alan Saputra Lengkoan</p>

<?php

// proses untuk menampilkan file pdf
$content = ob_get_clean();
include_once "vendor/html2pdf/html2pdf.class.php";
$html2pdf = new HTML2PDF('P', 'A4', 'en', 'utf-8');
$html2pdf->WriteHTML($content);
$html2pdf->Output('Laporan Barang Masuk.pdf');

?>
