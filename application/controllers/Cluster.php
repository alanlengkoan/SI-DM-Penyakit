<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cluster extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// untuk menload model data
		$this->load->model('datacluster');
		// untuk menload library form validation
		$this->load->library('form_validation');
		// untuk menload library session
		$this->load->library('session');

	}

	public function index()
	{

		// mengambil data dari session setelah masuk
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		// untuk menload view
		$this->load->view('admin/data_cluster', $data);

	}

	public function tahun()
	{

		if (empty($this->input->post('inptahun1')) || empty($this->input->post('inptahun2')) || empty($this->input->post('inptahun3'))) {

			// mengambil data dari session setelah masuk
			$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
			// apbila field tahun kosong
			$data['kosong'] = "Masukkan Tahun!";
			// untuk menload view
			$this->load->view('admin/data_cluster', $data);

		} else {

			// mengambil data dari session setelah masuk
			$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
			// menampilkan data dalam bentuk array version
			$data['jenispenyakit'] = $this->datacluster->dataPenyakit()->result_array();
			// mengambil tahun
			$data['tahun1'] = htmlspecialchars($this->input->post('inptahun1', TRUE), ENT_QUOTES);
			$data['tahun2'] = htmlspecialchars($this->input->post('inptahun2', TRUE), ENT_QUOTES);
			$data['tahun3'] = htmlspecialchars($this->input->post('inptahun3', TRUE), ENT_QUOTES);
			// untuk menload view
			$this->load->view('admin/data_cluster', $data);

		}

	}

	public function cetak_kesimpulan()
	{
		$data['hasil_cluster'] = array(
			$this->input->post('cls1'),
			$this->input->post('cls2'),
			$this->input->post('cls3'),
		);
		$this->load->view('admin/laporan_kesimpulan', $data);
	}

}
