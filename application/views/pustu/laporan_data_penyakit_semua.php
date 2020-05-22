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
      <th>Id Penyakit</th>
      <th>Nama</th>
      <th>Jenis</th>
      <th>Kategori</th>
      <th>Tanggal</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $no = 1;
    foreach ($datapenyakit as $row) {
      echo "<tr>";
      echo "<td align='center'>".$no++."</td>";
      echo "<td>".$row['id_penyakit']."</td>";
      echo "<td>".str_replace("_", " ", $row['nama_penyakit'])."</td>";
      echo "<td>".$row['jenis_penyakit']."</td>";
      echo "<td>".$row['kategori_penyakit']."</td>";
      echo "<td>".$row['tanggal']."</td>";
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
