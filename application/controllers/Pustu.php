<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pustu extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		// untuk menload model data
    $this->load->model('data');
		// untuk menload model data
    $this->load->model('datacluster');
		// untuk menload library form validation
    $this->load->library('form_validation');
		// untuk menload library session
    $this->load->library('session');


	}

	// untuk menampilkan tampilan default
	public function index()
	{

		// mengambil data dari session setelah masuk
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		// untuk menload view
		$this->load->view('pustu/index', $data);

	}

	// untuk menampilkan profil pustu
	public function profil()
	{

		// mengambil data dari session setelah masuk
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		// untuk menload head
    $this->load->view('pustu/profil', $data);

	}

	// untuk menampilkan data penyakit
	public function datapenyakit()
	{

		// mengambil data dari session setelah masuk
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		// untuk menampilkan kode otomatis
		$data['kodeotomatis']  = $this->data->kodeoto();
		// menampilkan data jenis penyakit dalam bentuk array version
		$data['jenispenyakit'] = $this->data->jenispenyakit()->result_array();
    // menampilkan data dalam bentuk array version
    $data['datamining'] = $this->data->dataMining()->result_array();
    // untuk menload view
		$this->load->view('pustu/data_penyakit', $data);

	}

	public function detailpenyakit()
	{

		// mengambil data dari session setelah masuk
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		// untuk menload view
		$this->load->view('pustu/data_detail_penyakit', $data);

	}

	public function tahun()
	{

		if (empty($this->input->post('inptahun'))) {

			// mengambil data dari session setelah masuk
			$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
			// apbila field tahun kosong
			$data['kosong'] = "Masukkan Tahun!";
	    // untuk menload view
			$this->load->view('pustu/data_detail_penyakit', $data);

		} else {

			// mengambil data dari session setelah masuk
			$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
			// menampilkan data dalam bentuk array version
	    $data['jenispenyakit'] = $this->datacluster->dataPenyakit()->result_array();
			// mengambil tahun
			$data['tahun'] = htmlspecialchars($this->input->post('inptahun', TRUE), ENT_QUOTES);
	    // untuk menload view
			$this->load->view('pustu/data_detail_penyakit', $data);

		}

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
        $this->load->view('pustu/laporan_data_penyakit', $data);

      } else {

        // mangambil tanggal
        $data['tgla'] = $this->input->post('tgl_a');
        $data['tglb'] = $this->input->post('tgl_b');
        // menampilkan data ke view
        $this->load->view('pustu/laporan_data_penyakit_tglthn', $data);

      }

    } else {

      // mengambil semua data penyakit
      $sql = "SELECT * FROM tb_nama_penyakit ORDER BY id_penyakit ASC ";
      $data['datapenyakit'] = $this->db->query($sql)->result_array();
      // untuk menload view
      $this->load->view('pustu/laporan_data_penyakit_semua', $data);

    }

  }

	// untuk menampilkan form ubah data
	public function formdetail()
	{

		// mengambil id penyakit
		$idpenyakit = $this->input->post('id_penyakit');
		// untuk mengambil fungsi id penyakit dari model data
		$data['penyakit'] = $this->data->idpenyakit($idpenyakit)->row_array();
		// menampilkan data jenis penyakit dalam bentuk array version
    $data['jenispenyakit'] = $this->data->jenispenyakit()->result_array();
		// untuk menload head
		$this->load->view('pustu/atribut/head');
		// untuk menload halaman import data
		$this->load->view('pustu/data_penyakit_detail', $data);

	}

	// untuk menampilkan form ubah data
	public function formubahdata()
	{

		// mengambil data dari session setelah masuk
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		// mengambil id penyakit
		$idpenyakit = $this->uri->segment(3);
		// untuk mengambil fungsi id penyakit dari model data
		$data['penyakit'] = $this->data->idpenyakit($idpenyakit)->row_array();
		// menampilkan data jenis penyakit dalam bentuk array version
    $data['jenispenyakit'] = $this->data->jenispenyakit()->result_array();
		// untuk menload halaman import data
		$this->load->view('pustu/data_penyakit_ubah', $data);

	}

	// fungsi untuk menghitung umur otomatis
	public function hitung_umur($tanggallahir)
	{
		list($tahun, $bulan, $hari) = explode("-", $tanggallahir);
		$tahun_diff = date("Y") - $tahun;
		$bulan_diff = date("m") - $bulan;
		$hari_diff  = date("d") - $hari;

		if ($bulan_diff < 0) {
			$tahun_diff--;
		} else if (($bulan_diff == 0) && ($hari_diff < 0)) {
			$tahun_diff--;
		}

		return $tahun_diff;
	}

	// untuk tambah data penyakit
	public function tambahdata()
	{

		// untuk validasi error apa bile pengguna tidak mengisi form
		$this->form_validation->set_rules('inpidpenyakit', 'Id Penyakit', 'required');
		$this->form_validation->set_rules('inpnamapenderita', 'Nama Penderita', 'required');
		$this->form_validation->set_rules('inpjeniskelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('inptempatlahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('inptanggallahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('inpnamapenyakit', 'Nama Penyakit', 'required');
		$this->form_validation->set_rules('inpjenispenyakit', 'Jenis Penyakit', 'required');
		$this->form_validation->set_rules('inpkatpenyakit', 'Kategori Penyakit', 'required');
		$this->form_validation->set_rules('inptanggal', 'Tanggal', 'required');

		if ($this->form_validation->run() == FALSE) {

			// mengambil data dari session setelah masuk
			$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
			// untuk menampilkan kode otomatis
			$data['kodeotomatis']  = $this->data->kodeoto();
			// menampilkan data jenis penyakit dalam bentuk array version
			$data['jenispenyakit'] = $this->data->jenispenyakit()->result_array();
	    // menampilkan data dalam bentuk array version
	    $data['datamining'] = $this->data->dataMining()->result_array();
			// untuk menload view
			$this->load->view('pustu/data_penyakit', $data);

    } else {

			// untuk mengubah semua inputan menjadi huruf kecil
			$namapenderita = htmlspecialchars(strtolower($this->input->post('inpnamapenderita', TRUE)), ENT_QUOTES);
			$tempatlahir   = htmlspecialchars(strtolower($this->input->post('inptempatlahir', TRUE)), ENT_QUOTES);
			$namapenyakit  = htmlspecialchars(strtolower(str_replace(" ", "_", $this->input->post('inpnamapenyakit', TRUE))), ENT_QUOTES);

      // untuk mengambil hasil inputan
      $data = array(
				'id_penyakit'        => htmlspecialchars($this->input->post('inpidpenyakit', TRUE), ENT_QUOTES),
				'nama_lengkap'       => ucwords($namapenderita),
				'jenis_kelamin'      => htmlspecialchars($this->input->post('inpjeniskelamin', TRUE), ENT_QUOTES),
				'umur'               => htmlspecialchars($this->hitung_umur($this->input->post('inptanggallahir', TRUE)), ENT_QUOTES),
				'tempat_lahir'       => ucwords($tempatlahir),
				'tanggal_lahir'      => htmlspecialchars($this->input->post('inptanggallahir', TRUE), ENT_QUOTES),
				'nama_penyakit'      => ucwords($namapenyakit),
        'jenis_penyakit'     => htmlspecialchars($this->input->post('inpjenispenyakit', TRUE), ENT_QUOTES),
				'kategori_penyakit'  => htmlspecialchars($this->input->post('inpkatpenyakit', TRUE), ENT_QUOTES),
				'tanggal'            => htmlspecialchars($this->input->post('inptanggal', TRUE), ENT_QUOTES)
      );
      // untuk memasukkan data kedalam tabel
      $this->db->insert('tb_nama_penyakit', $data);
      // untuk kembali ke halaman tampilkan data
      redirect('pustu/datapenyakit?&tambah');

    }

	}

	// untuk mengubah data
	public function ubahdata()
	{

		// untuk mengambil id penyakit yang akan diubah
		$idpenyakit = $this->input->post('inpidpenyakit');
		// untuk validasi error apa bile pengguna tidak mengisi form
		$this->form_validation->set_rules('inpnamapenderita', 'Nama Penderita', 'required');
		$this->form_validation->set_rules('inpjeniskelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('inptempatlahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('inptanggallahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('inpnamapenyakit', 'Nama Penyakit', 'required');
		$this->form_validation->set_rules('inpjenispenyakit', 'Jenis Penyakit', 'required');
		$this->form_validation->set_rules('inpkatpenyakit', 'Kategori Penyakit', 'required');
		$this->form_validation->set_rules('inptanggal', 'Tanggal', 'required');

		if ($this->form_validation->run() == FALSE) {

			// mengambil data dari session setelah masuk
			$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
			// untuk mengambil fungsi id penyakit dari model data
			$data['penyakit'] = $this->data->idpenyakit($idpenyakit)->row_array();
      // menampilkan data jenis penyakit dalam bentuk array version
      $data['jenispenyakit'] = $this->data->jenispenyakit()->result_array();
			// untuk menload head
			$this->load->view('pustu/atribut/head');
      // apa bila data yang dimasukkan kosong
      $this->load->view('pustu/data_penyakit_ubah', $data);

    } else {

			// untuk mengubah semua inputan menjadi huruf kecil
			$namapenderita = strtolower($this->input->post('inpnamapenderita', TRUE));
			$tempatlahir   = strtolower($this->input->post('inptempatlahir', TRUE));
			$namapenyakit  = strtolower(str_replace(" ", "_", $this->input->post('inpnamapenyakit', TRUE)));

      // untuk mengambil hasil inputan
      $data = array(
				'nama_lengkap'       => ucwords($namapenderita),
				'jenis_kelamin'      => $this->input->post('inpjeniskelamin', TRUE),
				'umur'               => $this->hitung_umur($this->input->post('inptanggallahir', TRUE)),
				'tempat_lahir'       => ucwords($tempatlahir),
				'tanggal_lahir'      => $this->input->post('inptanggallahir', TRUE),
        'nama_penyakit'      => ucwords($namapenyakit),
        'jenis_penyakit'     => $this->input->post('inpjenispenyakit', TRUE),
				'kategori_penyakit'  => $this->input->post('inpkatpenyakit', TRUE),
				'tanggal'            => $this->input->post('inptanggal', TRUE)
      );
			// memanggil data berdasarkan id oenyakit
			$this->db->where('id_penyakit', $idpenyakit);
      // untuk mengubah data kedalam tabel
      $this->db->update('tb_nama_penyakit', $data);
      // untuk kembali ke halaman tampilkan data
      redirect('pustu/datapenyakit?&ubah');

    }

	}

	public function hapusdata()
	{

		if ($this->input->post('checkbox_nilai')) {

			$idpenyakit = $this->input->post('checkbox_nilai');
			for ($i = 0; $i < count($idpenyakit); $i++) {
				// mengambil id penyakit
				$this->db->where('id_penyakit', $idpenyakit[$i]);
				// untuk mengubah data kedalam tabel
				$this->db->delete('tb_nama_penyakit');
			}

		} else {

			// mengambil id penyakit
			$idpenyakit = $this->uri->segment(3);
			// memanggil data berdasarkan id oenyakit
			$this->db->where('id_penyakit', $idpenyakit);
			// untuk mengubah data kedalam tabel
			$this->db->delete('tb_nama_penyakit');
			// untuk kembali ke halaman tampilkan data
			redirect('pustu/datapenyakit?&hapus');

		}

	}

	// untuk download laporan
	public function download()
	{

		// mengambil data dari session setelah masuk
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		// mengambil data laporan dari databases
		$sql = "SELECT * FROM tb_format_laporan WHERE id_upload = '4'";
		$data['forlap'] = $this->db->query($sql)->row_array();
		// untuk menload view
		$this->load->view('pustu/laporan_download', $data);

	}

	public function upload()
	{

		// mengambil data dari session setelah masuk
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		// untuk menload view
		$this->load->view('pustu/laporan_upload', $data);

	}

	public function laporan()
	{

		// mengambil data dari session setelah masuk
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
		// mamanggil semua data penyakit
		$data['datapenderitapenyakit'] = $this->data->dataMining()->result_array();
		// apa bila data yang dimasukkan kosong
		$this->load->view('pustu/laporan_data_penyakit', $data);

	}

	public function laporanpenderitapenyakit()
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
        $this->load->view('pustu/laporan_data_penyakit', $data);

      } else {

        // mangambil tanggal
        $data['tgla'] = $this->input->post('tgl_a');
        $data['tglb'] = $this->input->post('tgl_b');
        // menampilkan data ke view
        $this->load->view('pustu/laporan_data_penyakit_tglthn', $data);

      }

    } else {

      // mengambil semua data penyakit
      $sql = "SELECT * FROM tb_nama_penyakit ORDER BY id_penyakit ASC ";
      $data['datapenyakit'] = $this->db->query($sql)->result_array();
      // untuk menload view
      $this->load->view('pustu/laporan_data_penyakit_semua', $data);

    }

  }

	// untuk proses upload dan preview data yang akan diupload
	public function previewfile()
	{

		// untuk menload library upload
    $this->load->library('upload');

		// format file yang akan di import
		$inputFileName = $_FILES['inpformatfile']['name'];
		$config['upload_path']   = './file/importdata/';
		$config['allowed_types'] = 'xls|xlsx|csv';
		$config['max_size']      = '2048';
		$config['file_name']     = $inputFileName;
		// untuk meginisialisasi
		$this->upload->initialize($config);
		// untuk melakukan upload
		$this->upload->do_upload('inpformatfile');
		// untuk mengambil format file excel
		$filePath = $this->upload->data('full_path');

		if (!$inputFileName) {

			// mengambil data dari session setelah masuk
			$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
			// menampilkan data jenis penyakit dalam bentuk array version
			$data['jenispenyakit'] = $this->data->jenispenyakit()->result_array();
	    // menampilkan data dalam bentuk array version
	    $data['datamining'] = $this->data->dataMining()->result_array();
			// apabila terjadi kesalahan
			$data['error'] = "Error loading file ".pathinfo($filePath, PATHINFO_BASENAME);
			// untuk menload head
			$this->load->view('pustu/atribut/head');
			// untuk menload view
			$this->load->view('pustu/laporan_upload', $data);

		} else {

			// apabile file yang diugganh benar
			$inputFileType = PHPExcel_IOFactory::identify($filePath);
			$objReader     = PHPExcel_IOFactory::createReader($inputFileType);
			$objPHPExcel   = $objReader->load($filePath);
			// get worksheet dimensions
			$sheet         = $objPHPExcel->getSheet(0);
			// menghitung jumlah baris
			$highestRow    = $sheet->getHighestRow();
			// menghitung jumlah kolom
			$highestColumn = $sheet->getHighestColumn();
			// mengambil datanya
			$data['sheet'] = $sheet;
			$data['baris'] = $highestRow;
			$data['kolom'] = $highestColumn;
			$data['filepath'] = $filePath;
			// mengambil data dari session setelah masuk
		$data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
			// untuk menload head
			$this->load->view('pustu/atribut/head');
			// untuk menload dan menampilkan halaman import data
			$this->load->view('pustu/preview', $data);

		}

	}

	// untuk import data
	public function importdata()
	{

		// untuk mengambil nama file
		$filePath = $this->input->post('filepath');
		// apabile file yang diugganh benar
		$inputFileType = PHPExcel_IOFactory::identify($filePath);
		$objReader     = PHPExcel_IOFactory::createReader($inputFileType);
		$objPHPExcel   = $objReader->load($filePath);
		// get worksheet dimensions
		$sheet         = $objPHPExcel->getSheet(0);
		// menghitung jumlah baris
		$highestRow    = $sheet->getHighestRow();
		// menghitung jumlah kolom
		$highestColumn = $sheet->getHighestColumn();
		// proses import data
		for ($row = 2; $row <= $highestRow; $row++){

			$sql1        = "SELECT MAX(id_penyakit) AS maxkode FROM tb_nama_penyakit";
			$result1     = $this->db->query($sql1)->row_array();
			$id_penyakit = $result1['maxkode'];
			$no_urut     = substr($id_penyakit, 5, 7);
			$no_urut += $row;
			$kodeoto = "PNYKT".sprintf("%03s", $no_urut);

			$rowData          = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
			$namapenderita    = strtolower($rowData[0][0]);
			$jeniskelamin     = $rowData[0][1];
			$tempatlahir      = strtolower($rowData[0][2]);
			$tanggallahir     = strtotime(PHPExcel_Style_NumberFormat::toFormattedString($rowData[0][3], 'YYYY-MM-DD'));;
			$namapenyakit     = strtolower(str_replace(" ", "_", $rowData[0][4]));
			$jenispenyakit    = $rowData[0][5];
			$kategoripenyakit = $rowData[0][6];
			$tanggal          = strtotime(PHPExcel_Style_NumberFormat::toFormattedString($rowData[0][7], 'YYYY-MM-DD'));

			$datapenyakit[] = array(
				'id_penyakit'       => $kodeoto,
				'nama_lengkap'      => ucwords($namapenderita),
				'jenis_kelamin'     => $jeniskelamin,
				'umur'              => $this->hitung_umur(date("Y-m-d", $tanggallahir)),
				'tempat_lahir'      => ucwords($tempatlahir),
				'tanggal_lahir'     => date("Y-m-d", $tanggallahir),
				'nama_penyakit'     => ucwords($namapenyakit),
				'jenis_penyakit'    => $jenispenyakit,
				'kategori_penyakit' => $kategoripenyakit,
				'tanggal'           => date("Y-m-d", $tanggal)
			);

		}

		// untuk memilih fungsi insert data
		// insert batch digunakan untuk menginput data dalam array
		$this->db->insert_batch('tb_nama_penyakit', $datapenyakit);
		redirect('pustu/datapenyakit?&berhasil');

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

}
