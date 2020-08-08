<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataCluster extends CI_Model {

  // memangil data dengan menggunakan SQL CodeIgniter
	public function dataPenyakit()
	{

    // menghilangkan data yang sama
    $this->db->distinct();
    // berdasarkan nama penyakit
    $this->db->select('nama_penyakit');
    // mengurutkan nama penyakit dari a - z
    $this->db->order_by('nama_penyakit', 'ASC');
    // menampilkan data
    $result = $this->db->get('tb_nama_penyakit');
    // mengembalikan data
    return $result;

	}

}
