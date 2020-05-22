<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenpen extends CI_Controller {

  public function __construct()
	{

		 parent::__construct();
		// untuk menload model data
    $this->load->model('penyakit');
    // untuk menload library form validation
    $this->load->library('form_validation');
    // untuk menload library session
    $this->load->library('session');

	}

  public function index()
  {

    // mengambil data dari session setelah masuk
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    // menampilkan data dalam bentuk array
    $data['jenispenyakit'] = $this->penyakit->datapenyakit()->result_array();
    // untuk menload view
		$this->load->view('admin/jenis_penyakit', $data);

  }

  // untuk proses menyimpan data
  public function tambahdata()
  {

    // mengambil name dari form
    $this->form_validation->set_rules('inpjenispenyakit', 'Jenis Penyakit', 'required');

    if ($this->form_validation->run() == FALSE) {

      // mengambil data dari session setelah masuk
      $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
      // menampilkan data dalam bentuk array
      $data['jenispenyakit'] = $this->penyakit->datapenyakit()->result_array();
      // apa bila data yang dimasukkan kosong
      $this->load->view('admin/jenis_penyakit', $data);

    } else {

      // untuk mengambil hasil inputan
      $data = array(
        'jenis_penyakit' => htmlspecialchars($this->input->post('inpjenispenyakit', TRUE), ENT_QUOTES)
      );
      // untuk memasukkan data kedalam tabel
      $this->db->insert('tb_jenis_penyakit', $data);
      // untuk kembali ke halaman tampilkan data
      redirect('jenpen?&tambah');

    }

  }

  // untuk mengubah data
  public function formubahdata()
  {

    // mengambil id penyakit
    $id_jenis_penyakit = $this->input->post('id_jenis_penyakit');
    // menampilkan data dalam bentuk array
    $data['editpenyakit'] = $this->penyakit->idjenispenyakit($id_jenis_penyakit)->row_array();
    // untuk menload view
		$this->load->view('admin/jenis_penyakit_ubah', $data);

  }

  // untuk mengubah data
  public function ubahdata()
  {

    // mengambil id pada form ubah data
    $id_jenis_penyakit = $this->input->post('inpidjenispenyakit');
    // mengambil name dari form
    $this->form_validation->set_rules('inpjenispenyakit', 'Jenis Penyakit', 'required');

    if ($this->form_validation->run() == FALSE) {

      // apa bila data yang ingin diubah tidak diisi
      redirect('jenpen?&gagal');

    } else {

      // untuk mengambil hasil inputan
      $data = array(
        'jenis_penyakit' => htmlspecialchars($this->input->post('inpjenispenyakit', TRUE), ENT_QUOTES)
      );
      // untuk memanggil data berdasarkan id jenis penyakit
      $this->db->where('id_jenis_penyakit', $id_jenis_penyakit);
      // untuk mengubah data
      $this->db->update('tb_jenis_penyakit', $data);
      // untuk kembali ke halaman tampilkan data
      redirect('jenpen?&ubah');

    }

  }

  // untuk menghapus data
  public function hapusdata()
  {

    // mengambil id penyakit
    $id_jenis_penyakit = $this->uri->segment(3);
    // untuk memanggil data berdasarkan id jenis penyakit
    $this->db->where('id_jenis_penyakit', $id_jenis_penyakit);
    // untuk menghapus data
    $this->db->delete('tb_jenis_penyakit');
    // untuk kembali ke halaman tampilkan data
    redirect('jenpen?&hapus');

  }

}
