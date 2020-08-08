<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katpen extends CI_Controller {

  public function __construct()
	{

		 parent::__construct();
		// untuk menload model penyakit
    $this->load->model('penyakit');
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
    // menampilkan data jenis penyakit dalam bentuk array version
    $data['jenispenyakit'] = $this->data->jenispenyakit()->result_array();
    // untuk menload modal kategori penyakit
    $data['kategoripenyakit'] = $this->penyakit->datakategoripenyakit()->result_array();
    // untuk menload view
		$this->load->view('admin/kategori_penyakit', $data);

  }

  // untuk proses menyimpan data
  public function tambahdata()
  {

    // mengambil name dari form
    $this->form_validation->set_rules('inpjenispenyakit', 'Jenis Penyakit', 'required');
    $this->form_validation->set_rules('inpkategoripenyakit', 'Kategori Penyakit', 'required');

    if ($this->form_validation->run() == FALSE) {

      // mengambil data dari session setelah masuk
      $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
      // menampilkan data jenis penyakit dalam bentuk array version
      $data['jenispenyakit'] = $this->data->jenispenyakit()->result_array();
      // untuk menload modal kategori penyakit
      $data['kategoripenyakit'] = $this->penyakit->datakategoripenyakit()->result_array();
      // untuk menload view
  		$this->load->view('admin/kategori_penyakit', $data);

    } else {

      // untuk mengubah semua inputan menjadi huruf kecil
      $kategoripenyakit = htmlspecialchars(strtolower($this->input->post('inpkategoripenyakit', TRUE)), ENT_QUOTES);

      // untuk mengambil hasil inputan
      $data = array(
        'id_jenis_penyakit' => htmlspecialchars($this->input->post('inpjenispenyakit', TRUE), ENT_QUOTES),
        'kategori_penyakit' => ucwords($kategoripenyakit)
      );
      // untuk memasukkan data kedalam tabel
      $this->db->insert('tb_kategori_penyakit', $data);
      // untuk kembali ke halaman tampilkan data
      redirect('katpen?&tambah');

    }

  }

  // untuk mengubah data
  public function formubahdata()
  {

    // mengambil id penyakit
    $idkategoripenyakit = $this->input->post('id_kategori_penyakit');
    // menampilkan data dalam bentuk array
    $data['kategoripenyakit'] = $this->penyakit->idkategoripenyakit($idkategoripenyakit)->row_array();
    // menampilkan data jenis penyakit dalam bentuk array version
    $data['jenispenyakit'] = $this->data->jenispenyakit()->result_array();
    // untuk menload view
		$this->load->view('admin/kategori_penyakit_ubah', $data);

  }

  // untuk mengubah data
  public function ubahdata()
  {

    // mengambil id pada form ubah data
    $idkategoripenyakit = $this->input->post('inpidkategoripenyakit');
    // mengambil name dari form
    $this->form_validation->set_rules('inpjenispenyakit', 'Jenis Penyakit', 'required');
    $this->form_validation->set_rules('inpkategoripenyakit', 'Kategori Penyakit', 'required');

    if ($this->form_validation->run() == FALSE) {

      // apa bila data yang ingin diubah tidak diisi
      redirect('katpen?&gagal');

    } else {

      // untuk mengubah semua inputan menjadi huruf kecil
      $kategoripenyakit = strtolower($this->input->post('inpkategoripenyakit'));

      // untuk mengambil hasil inputan
      $data = array(
        'id_jenis_penyakit' => $this->input->post('inpjenispenyakit'),
        'kategori_penyakit' => ucwords($kategoripenyakit)
      );
      // untuk memanggil data berdasarkan id jenis penyakit
      $this->db->where('id_kategori_penyakit', $idkategoripenyakit);
      // untuk mengubah data
      $this->db->update('tb_kategori_penyakit', $data);
      // untuk kembali ke halaman tampilkan data
      redirect('katpen?&ubah');

    }

  }

  // untuk menghapus data
  public function hapusdata()
  {

    // mengambil id penyakit
    $idkategoripenyakit = $this->uri->segment(3);
    // untuk memanggil data berdasarkan id jenis penyakit
    $this->db->where('id_kategori_penyakit', $idkategoripenyakit);
    // untuk menghapus data
    $this->db->delete('tb_kategori_penyakit');
    // untuk kembali ke halaman tampilkan data
    redirect('katpen?&hapus');

  }

}
