<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Model {

	/*
	| untuk mengambil data jenis penyakit
	*/
	// untuk mengambil semua data
	public function datapenyakit()
	{

    // memangil data dengan menggunakan SQL
    $result = $this->db->get('tb_jenis_penyakit');
    return $result;

	}

	// untuk mengambil data berdasarkan id penyakit
	public function idjenispenyakit($idpenyakit)
	{

		// memanggil data dengan id jenis penyakit
		$result = $this->db->get_where('tb_jenis_penyakit', array('id_jenis_penyakit' => $idpenyakit));
		return $result;

	}
	/*
	| untuk mengambil data jenis penyakit
	*/

	/*
	| untuk mengambil data kategori penyakit
	*/
	// untuk mengambil semua data
	public function datakategoripenyakit()
	{

		// memanggil semua data kategori penyakit
		$result = $this->db->get('tb_kategori_penyakit');
		return $result;

	}

	// untuk mengambil data berdasarkan id kategori penyakit
	public function idkategoripenyakit($idkategoripenyakit)
	{

		// memanggil data dengan id jenis penyakit
		$result = $this->db->get_where('tb_kategori_penyakit', array('id_kategori_penyakit' => $idkategoripenyakit));
		return $result;

	}
	/*
	| untuk mengambil data kategori penyakit
	*/

}
