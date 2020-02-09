<?php 
class Profil extends Ci_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Laporan');
		$this->load->model('global_model');
		$this->load->library('upload');
		if($this->session->userdata('username') == null) {
            redirect('http://localhost/surveyumkm/');
        }
	}

	public function index () {
		$this->load->view('user/header_beranda');

		$data ['data'] = $this->Laporan->profile();
		$data ['data1'] = $this->global_model->get_sektor();
		$data['data2'] = $this->global_model->get_produk();
        $data['data3'] = $this->global_model->get_kategori();

		$this->load->view('user/user_profil', $data);

	}

	public function update_profil () {
		$username = $_POST['username'];

		$config['upload_path']		= './icon/';
		$config['allowed_types']	= 'jpeg|jpg|png';
		$config['max_size']			= 100;
		$config['max_width']		= 1024;
		$config['max_height']		= 768;

		$this->upload->initialize($config);
		if ($this->upload->do_upload('gambar')) {
		$result1 = $this->upload->data();
		$data = array (
			"email" => $this->input->post("email"),
			"nama_umkm" => $this->input->post("nama_umkm"),
			"nama_pemilik" => $this->input->post("nama_pemilik"),
			"kategori_umkm" => $this->input->post("kategori_umkm"),
			"tahun_mulai" => $this->input->post("tahun_mulai"),
			"bulan_mulai" => $this->input->post("bulan_mulai"),
			"tahun_fasilitas" => $this->input->post("tahun_fasilitas"),
			"triwulan_fasilitas" => $this->input->post("triwulan_fasilitas"),
			"nomor_ktp" => $this->input->post("nomor_ktp"),
			"no_npwp" => $this->input->post("no_npwp"),
			"no_hp" => $this->input->post("no_hp"),
			"alamat" => $this->input->post("alamat"),
			"kabupaten" => $this->input->post("kabupaten"),
			"provinsi" => $this->input->post("provinsi"),
			"jumlah_sdm" => $this->input->post("jumlah_sdm"),
			"sektor_ekonomi" => $this->input->post("sektor_ekonomi"),
			"produk_utama" => $this->input->post("produk_utama"),
			"produk_lainnya" => $this->input->post("produk_lainnya"),
			"total_aset" => $this->input->post("total_aset"),
			"gambar" => $result1['file_name']
		);

		$where = array (
            'username' => $username,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('registrasi', $data, $where);
        if ($res>0) {
        redirect('user/Profil/index','refresh');
    	}
    }

	}

	public function index_upload () {
		$this->load->view('user/v_upload');
	}
	public function aksi_upload() {
		$this->load->helper(array('form', 'url'));

		$config['upload_path']		= './gambar/';
		$config['allowed_types']	= 'gif|jpg|png';
		$config['max_size']			= 100;
		$config['max_width']		= 1024;
		$config['max_height']		= 768;

		$this->load->library('upload', $config);

		if (! $this->upload->do_upload('berkas')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('user/v_upload', $error);
		} else {
			$data = array ('upload_data' => $this->upload->data());
			$this->load->view('user/v_upload', $data);
		}
	}

	public function save_image() {
		$post = $this->input->post();
		$this->product_id = uniqid();
		$this->name = $post["name"];
		$this->price = $post["price"];
		$this->image = $this->aksi_upload();
		$this->description = $post["description"];

	}
}