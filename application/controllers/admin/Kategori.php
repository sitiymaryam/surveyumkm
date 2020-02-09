<?php
class Kategori extends Ci_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('NIP') == null) {
            redirect('admin/Login/index');
        }
    }
	public function cetak () {
		$this->load->model('global_model');
        $data = $this->global_model->GetData('db_kategori');
        $data = array('data' => $data);
		$this->load->view('admin/beranda');
		$this->load->view('admin/kategori', $data);
	}

	public function v_tambah () {
		$this->load->view('admin/beranda');
		$this->load->view('admin/add_kategori');
	}

	public function tambah () {
		$this->load->model('global_model');
		$data = array (
			'nama_kategori' => $this->input->post('nama_kategori'),
		);

		$data = $this->global_model->Insert('db_kategori', $data);
		redirect('http://localhost/surveyumkm/index.php/admin/Kategori/cetak');

	}

	public function delete ($id) {
		$id = array('id' => $id);
   		$this->load->model('global_model');
	    $this->global_model->Delete('db_kategori', $id);
	    redirect(base_url('index.php/admin/Kategori/cetak'),'refresh');
	}

	public function v_edit ($id) {
		$this->load->model('global_model');
	    $key = $this->global_model->GetWhere('db_kategori', array('id' => $id));
	    $data = array(
	        'id' => $key[0]['id'],
	        'nama_kategori' => $key[0]['nama_kategori'],
        );
	    $this->load->view('admin/beranda');
	    $this->load->view('admin/edit_kategori', $data); 
	}

	public function update () {
		$id = $_POST['id'];
        $nama_kategori = $_POST['nama_kategori'];
        $data = array(
            'id' => $id,
            'nama_kategori' => $nama_kategori,
        );

        $where = array (
            'id' => $id,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('db_kategori', $data, $where);
        if ($res>0) {
        redirect('admin/Kategori/cetak','refresh');
    }
	}
}