<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormatLaporan extends CI_Model {

	public function getformatlaporan()
	{

		// memanggil data jenis penyakit
		$query = $this->db->get('tb_format_laporan');
		return $query;

	}

}
