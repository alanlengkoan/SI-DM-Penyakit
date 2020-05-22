<div id="cetak-kesimpulan">
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

		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
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

	<div class="judul">
		<table align="center">
			<tr>
				<td>
					<img src="<?php echo base_url() ?>assets/img/logo.png" alt="Logo Kabupaten Bulukumba"
						style="width: 70p; height: 70px;">
				</td>
				<td width="600" align="center">
					<h3>Pemerintah Kabupaten Bulukumba, Kecamatan Bontotiro, Desa Buhung Bundang</h3>
					<em>Jl. Muh. Supadi No. 68 Salo Bundang Desa Buhung Bundang Kec. Bontotiro Kab. Bulukumba <br />
						Email: buhungbundangdesa@gmail.com Kode Pos: 92572</em>
				</td>
			</tr>
		</table>
		<hr>
	</div>

	<h3 style="text-align: center;">Laporan Data Penyakit Hasil Clustering</h3>

	<br />

	<table align="center">
		<tr>
			<td width="700">
				Berdasarkan dari hasil Clustering yang telah dibagi menjadi 3 Cluss yaitu :
				<ul>
					<li>Penderita Penyakit Terbanyak</li>
					<li>Penderita Penyakit Sedang</li>
					<li>Penderita Penyakit Sedikit</li>
				</ul>
				Terdapat :
				<ul>
					<li><b><?=$hasil_cluster[0]?></b> Jenis Penyakit dengan jumlah Penderita Penyakit Terbanyak</li>
					<li><b><?=$hasil_cluster[1]?></b> Jenis Penyakit dengan jumlah Penderita Penyakit Sedang</li>
					<li><b><?=$hasil_cluster[2]?></b> Jenis Penyakit dengan jumlah Penderita Penyakit Sedikit</li>
				</ul>
				Yang selanjutnya <b><?=$hasil_cluster[0]?></b> Jenis Penyakit tersebut akan dilakukan tindakan oleh
				<b> <i>Dinas Kesehatan</i> </b> untuk mengatasi agar penyakit tersebut dilakukan upaya Pencegahan dan
				Penanggulangan.
			</td>
		</tr>
	</table>

	<br /><br />

	<table align="center">
		<tr>
			<td width="460"></td>
			<td align="center">
				<p>Yang bertanda tangan dibawah ini :</p>
				<br />
				<br />
				<br />
				<br />
				<p class="nama">Kepala Desa Buhung Bundang</p>
			</td>
		</tr>
	</table>

</div>

<button type="button" onclick="cetakContent('cetak-kesimpulan');" >Cetak</button>

<!-- untuk cetak kesimpulan -->
<script>
function cetakContent(bagian) {
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(bagian).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>