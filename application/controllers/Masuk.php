<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

  public function __construct()
	{

		parent::__construct();
    // untuk menload library form validation
    $this->load->library('form_validation');
    // untuk menload library session
    $this->load->library('session');

	}

  // menampilkan tampilan default pada controller
  public function index()
  {

    // untuk menload view
		$this->load->view('index');

  }

  public function masuk()
  {

    // untuk menload view
    $this->load->view('masuk');

  }

  // untuk mengecek data username dan password dari databases
  public function cekdata()
  {

    if ($this->input->post('masuk')) {

      // mengambil name dari form
      $this->form_validation->set_rules('inpusername', 'Username', 'trim|required');
      $this->form_validation->set_rules('inppassword', 'Password', 'trim|required');

      if ($this->form_validation->run() == FALSE) {
        // apa bila data yang dimasukkan kosong
        $this->load->view('masuk');
      } else {
        $this->login();
      }

    }

  }

  // untuk mengecek data dari hasil input je databases
  private function login()
  {

    $username = htmlspecialchars($this->input->post('inpusername', TRUE), ENT_QUOTES);
    $password = htmlspecialchars($this->input->post('inppassword', TRUE), ENT_QUOTES);

    // mengambil data dri databases
    $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();

    if ($user) {

      if ($user['level'] == 'admin') {

        if (password_verify($password, $user['password'])) {

          $data = [
            'username' => $user['username'],
            'level' => $user['level']
          ];
          $this->session->set_userdata($data);
          redirect('admin?&berhasil');

        } else {
          redirect('masuk/masuk?&password');
        }

      } else if ($user['level'] == 'pustu') {

        if (password_verify($password, $user['password'])) {

          $data = [
            'username' => $user['username'],
            'level' => $user['level']
          ];
          $this->session->set_userdata($data);
          redirect('pustu?&berhasil');

        } else {
          redirect('masuk/masuk?&password');
        }

      } else {
        redirect('masuk/masuk?&akun');
      }

    } else {
      redirect('masuk/masuk?&gagal');
    }

  }

  // untuk keluar
  public function logout()
  {

    $this->session->unset_userdata('username');
    $this->session->unset_userdata('level');
    // mengambil tampilan masuk
    redirect('masuk');

  }

}
