<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forlap extends CI_Controller {

	public function __construct()
	{

		 parent::__construct();
		// untuk menload model data
    $this->load->model('FormatLaporan');
		// untuk menload library form validation
    $this->load->library('form_validation');
		// untuk menload library session
    $this->load->library('session');

	}

	public function index()
	{

		// untuk menload helper date
		$this->load->helper('date');
		// mengambil data dari session setelah masuk
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		// mengambil data laporan dari databases
    $data['formatlaporan'] = $this->FormatLaporan->getformatlaporan()->result_array();
    // untuk mengambil tanggal sekarang
    date_default_timezone_set('Asia/Jakarta');
    $data['waktu'] = date(DATE_RFC850, time());
		// untuk menload halaman format laporan
		$this->load->view('admin/format_laporan', $data);

	}

  // untuk proses menyimpan data ke dalam database
  public function tambahdata()
  {

    // untuk menload library upload
    $this->load->library('upload');
    // validasi untuk form
    $this->form_validation->set_rules('inpketerangan', 'Keterangan', 'required');
    $this->form_validation->set_rules('inpwaktu', 'Waktu', 'required');
    // untuk mengecek apa bila data yang dimasukkan salah
    if (empty($_FILES['inpformat']['name'])) {
      // untuk validasi file
      $this->form_validation->set_rules('inpformat', 'Format Laporan', 'required');
    }

    if ($this->form_validation->run() == FALSE) {

			// mengambil data dari session setelah masuk
			$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
      // apa bila gagal
      $data['waktu'] = date(DATE_RFC850, time());
			// mengambil data dari session setelah masuk
			$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
			// mengambil data laporan dari databases
	    $data['formatlaporan'] = $this->FormatLaporan->getformatlaporan()->result_array();
			// untuk menload halaman format laporan
			$this->load->view('admin/format_laporan', $data);

    } else {

      $namafile = $_FILES['inpformat']['name'];
      $config['upload_path']   = './file/';
      $config['allowed_types'] = 'xls|xlsx|csv';
      $config['max_size']      = '2048';
      $config['file_name']     = $namafile;
      // untuk meginisialisasi
      $this->upload->initialize($config);
      // untuk melakukan upload
      $this->upload->do_upload('inpformat');
      // untuk mengambil hasil inputan
      $data = array(
        'nama_file'  => str_replace(' ', '_', $namafile),
        'keterangan' => $this->input->post('inpketerangan'),
        'tgl_upload' => $this->input->post('inpwaktu')
      );
      // untuk memasukkan data kedalam tabel
      $this->db->insert('tb_format_laporan', $data);
      // untuk kembali ke halaman tampilkan data
      redirect('forlap?&berhasil');

    }

  }

	// untuk mengunduh format laporan dalam bentuk excel
	public function unduhlaporan()
	{

		// untuk menload helper download
		$this->load->helper('download');
    // mengambil nama file laporan
		$namafile = 'file/'.$this->uri->segment(3);
		// untuk mendownload format laporan yang akan di import
		force_download($namafile, NULL);

	}

  // untuk menghapus data
  public function hapusdata()
  {

    // mengambil id upload file laporan
		$idupload = $this->uri->segment(3);
    // memanggil data berdasarkan id oenyakit
		$this->db->where('id_upload', $idupload);
		// untuk mengubah data kedalam tabel
		$this->db->delete('tb_format_laporan');
		// untuk kembali ke halaman tampilkan data
		redirect('forlap?&hapus');

  }

}
