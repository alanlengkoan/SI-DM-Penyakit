<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	/*
	| untuk mengambil data jenis penyakit
	*/
	// untuk mengambil semua data
	public function datauser()
	{

    // memangil data dengan menggunakan SQL
    $result = $this->db->get('tb_user');
    return $result;

	}

	// untuk mengambil data berdasarkan id penyakit
	public function id_user($id_user)
	{

		// memanggil data dengan id jenis penyakit
		$result = $this->db->get_where('tb_user', array('id' => $id_user));
		return $result;

	}

}
