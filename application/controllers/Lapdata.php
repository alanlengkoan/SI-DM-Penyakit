<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapdata extends CI_Controller {

  public function __construct()
	{

		parent::__construct();
    // untuk menload model data
    $this->load->model('data');
    // untuk menload library form validation
    $this->load->library('form_validation');
    // untuk menload library session
    $this->load->library('session');

	}

  public function index()
  {

    // mengambil data dari session setelah masuk
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    // mamanggil semua data penyakit
    $data['datamining'] = $this->data->dataMining()->result_array();
    // untuk menload view
		$this->load->view('admin/laporan_data_penyakit', $data);

  }

  public function laporanDataPenyakit()
  {

    if ($this->input->post('cetak')) {

      // mengambil name dari form
      $this->form_validation->set_rules('tgl_a', 'Dari Tanggal!', 'required');
      $this->form_validation->set_rules('tgl_b', 'Sampai Tanggal!', 'required');

      if ($this->form_validation->run() == FALSE) {

        // mengambil data dari session setelah masuk
    		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        // mamanggil semua data penyakit
        $data['datamining'] = $this->data->dataMining()->result_array();
        // apa bila data yang dimasukkan kosong
        $this->load->view('admin/laporan_data_penyakit', $data);

      } else {

        // mangambil tanggal
        $data['tgla'] = $this->input->post('tgl_a');
        $data['tglb'] = $this->input->post('tgl_b');
        // menampilkan data ke view
        $this->load->view('admin/laporan_data_penyakit_tglthn', $data);

      }

    } else {

      // mengambil semua data penyakit
      $sql = "SELECT * FROM tb_nama_penyakit ORDER BY id_penyakit ASC ";
      $data['datapenyakit'] = $this->db->query($sql)->result_array();
      // untuk menload view
      $this->load->view('admin/laporan_data_penyakit_semua', $data);

    }

  }

}
