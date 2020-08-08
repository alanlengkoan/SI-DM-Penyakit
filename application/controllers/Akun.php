<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		// untuk menload model data
    $this->load->model('user');
		// untuk menload library form validation
    $this->load->library('form_validation');
		// untuk menload library session
    $this->load->library('session');


	}

	public function index()
	{

		// mengambil data dari session setelah masuk
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    // menampilkan data dalam bentuk array version
    $data['datauser'] = $this->user->datauser()->result_array();
		// untuk menload view
		$this->load->view('admin/data_user', $data);

	}

  // fungsi untuk tambah user
  public function tambahuser()
  {

    // untuk validasi error apabila field kosong
    $this->form_validation->set_rules('inpnama', 'Nama Lengkap User', 'required');
		$this->form_validation->set_rules('inpemail', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('inpnotlp', 'Nomor Telepon', 'required');
    $this->form_validation->set_rules('inpusername', 'Username', 'required');
    $this->form_validation->set_rules('inppassword', 'Password', 'required');
    $this->form_validation->set_rules('inplevel', 'Level', 'required');

    if ($this->form_validation->run() == FALSE) {

			// mengambil data dari session setelah masuk
			$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
      // menampilkan data dalam bentuk array version
      $data['datauser'] = $this->user->datauser()->result_array();
			// untuk menload view
			$this->load->view('admin/data_user', $data);

    } else {

      // untuk mengambil hasil inputan
      $data = array(
        'nama'     => htmlspecialchars($this->input->post('inpnama', TRUE), ENT_QUOTES),
				'email'    => htmlspecialchars($this->input->post('inpemail', TRUE), ENT_QUOTES),
				'no_tlp'   => htmlspecialchars($this->input->post('inpnotlp', TRUE), ENT_QUOTES),
        'username' => htmlspecialchars($this->input->post('inpusername', TRUE), ENT_QUOTES),
        'passname' => htmlspecialchars($this->input->post('inppassword', TRUE), ENT_QUOTES),
				'password' => htmlspecialchars(password_hash($this->input->post('inppassword', TRUE), PASSWORD_DEFAULT), ENT_QUOTES),
				'level'    => htmlspecialchars($this->input->post('inplevel', TRUE), ENT_QUOTES)
      );
      // untuk memasukkan data kedalam tabel
      $this->db->insert('tb_user', $data);
      // untuk kembali ke halaman tampilkan data
      redirect('akun?&tambah');

    }

  }

	// untuk menampilkan form ubah data
	public function formdetail()
	{

    // mengambil id penyakit
    $id = $this->input->post('id');
    // menampilkan data dalam bentuk array
    $data['detailuser'] = $this->user->id_user($id)->row_array();
    // untuk menload view
		$this->load->view('admin/data_user_detail', $data);

	}

  // untuk menampilkan form ubah data
	public function formubahdata()
	{

    // mengambil id penyakit
    $id = $this->input->post('id');
    // menampilkan data dalam bentuk array
    $data['edituser'] = $this->user->id_user($id)->row_array();
    // untuk menload view
		$this->load->view('admin/data_user_ubah', $data);

	}

  // untuk ubah user
  public function ubahuser()
  {

    // untuk mengambil id penyakit yang akan diubah
		$id = $this->input->post('inpid');
    // untuk validasi error apabila field kosong
    $this->form_validation->set_rules('inpnama', 'Nama Lengkap User', 'required');
		$this->form_validation->set_rules('inpemail', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('inpnotlp', 'Nomor Telepon', 'required');
    $this->form_validation->set_rules('inpusername', 'Username', 'required');
    $this->form_validation->set_rules('inppassword', 'Password', 'required');
    $this->form_validation->set_rules('inplevel', 'Level', 'required');

    if ($this->form_validation->run() == FALSE) {

      // apa bila data yang ingin diubah tidak diisi
      redirect('akun?&gagal');

    } else {

      // untuk mengambil hasil inputan
      $data = array(
        'nama'     => htmlspecialchars($this->input->post('inpnama', TRUE), ENT_QUOTES),
				'email'    => htmlspecialchars($this->input->post('inpemail', TRUE), ENT_QUOTES),
				'no_tlp'   => htmlspecialchars($this->input->post('inpnotlp', TRUE), ENT_QUOTES),
        'username' => htmlspecialchars($this->input->post('inpusername', TRUE), ENT_QUOTES),
        'passname' => htmlspecialchars($this->input->post('inppassword', TRUE), ENT_QUOTES),
				'password' => htmlspecialchars(password_hash($this->input->post('inppassword', TRUE), PASSWORD_DEFAULT), ENT_QUOTES),
				'level'    => htmlspecialchars($this->input->post('inplevel', TRUE), ENT_QUOTES)
      );
      // untuk memanggil data berdasarkan id jenis penyakit
      $this->db->where('id', $id);
      // untuk mengubah data
      $this->db->update('tb_user', $data);
      // untuk kembali ke halaman tampilkan data
      redirect('akun?&ubah');

    }

  }

  // fungsi untuk menghapus data user
  public function hapususer()
  {

    // mengambil id penyakit
    $iduser = $this->uri->segment(3);
    // memanggil data berdasarkan id oenyakit
    $this->db->where('id', $iduser);
    // untuk mengubah data kedalam tabel
    $this->db->delete('tb_user');
    // untuk kembali ke halaman tampilkan data
    redirect('akun?&hapus');

  }

}
