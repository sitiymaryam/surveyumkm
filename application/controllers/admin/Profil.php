<?php 
class Profil extends Ci_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Laporan');
		$this->load->model('global_model');
		$this->load->library('upload');
		if($this->session->userdata('NIP') == null) {
            redirect('admin/Login/index');
        }
	}

	public function index () {
		$this->load->view('admin/beranda');

		$data ['data'] = $this->Laporan->profil_admin();

		$this->load->view('admin/admin_profil', $data);

	}

	public function update_profil () {
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$email = $_POST['email'];
		$divisi = $_POST['divisi'];


		$config['upload_path']		= './icon/';
		$config['allowed_types']	= 'jpeg|jpg|png';
		$config['max_size']			= 100;
		$config['max_width']		= 1024;
		$config['max_height']		= 768;

		$this->upload->initialize($config);
		if ($this->upload->do_upload('gambar')) {
		$result1 = $this->upload->data();
		$data = array (
			"nama" => $nama,
			"no_hp" => $no_hp,
			"email" => $email,
			"divisi" => $divisi,
			"gambar" => $result1['file_name']
		);

		$where = array (
            'NIP' => $NIP,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('admin', $data, $where);
        if ($res>0) {
        redirect('admin/Profil/index','refresh');
    	}
    }

	}

}