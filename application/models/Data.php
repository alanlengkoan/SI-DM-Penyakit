<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Model {

	public function dataMining()
	{

    // memangil data dengan menggunakan SQL
    $query = $this->db->query('SELECT * FROM tb_nama_penyakit ORDER BY id_penyakit ASC');
    return $query;

	}

	public function jenispenyakit()
	{

		// memanggil data jenis penyakit
		$query = $this->db->get('tb_jenis_penyakit');
		return $query;

	}

	public function namaPenyakit()
	{

		$query = $this->db->get('tb_penyakit');
		return $query;

	}

	// untuk menampilkan id jenis penyakit data dari tabel kategori
	public function idjenispenyakit($id_jenis_penyakit)
	{

		// menampilkan data berdasarkan id jenis penyakit pada tabel jenis penyakit
		$this->db->where('id_jenis_penyakit', $id_jenis_penyakit);
		$query = $this->db->get('tb_kategori_penyakit')->result_array();
		return $query;

	}

	// untuk mengambil data berdasarkan id penyakit
	public function idpenyakit($idpenyakit)
	{

		// memanggil data dengan id jenis penyakit
		$result = $this->db->get_where('tb_nama_penyakit', array('id_penyakit' => $idpenyakit));
		return $result;

	}

	// untuk mengambil data berdasarkan id penyakit
	public function idnamapenyakit($idpenyakit)
	{

		// memanggil data dengan id jenis penyakit
		$result = $this->db->get_where('tb_penyakit', array('id_penyakit' => $idpenyakit));
		return $result;

	}


	// untuk mengambil kode otomatis
	public function kodeoto()
	{

		$this->db->select('RIGHT(tb_nama_penyakit.id_penyakit, 3) AS id_oto', FALSE);
		$this->db->order_by('id_penyakit', 'DESC');
		$this->db->limit(1);
		$result = $this->db->get('tb_nama_penyakit');
		if ($result->num_rows() <> 0) {
			$data = $result->row();
			$kode = intval($data->id_oto) + 1;
		} else {
			$kode = 1;
		}

		$batas   = str_pad($kode, 3, "0", STR_PAD_LEFT);
		$kodeoto = "PNYKT".$batas; // pemberian kode penyakit
		return $kodeoto;

	}

}
