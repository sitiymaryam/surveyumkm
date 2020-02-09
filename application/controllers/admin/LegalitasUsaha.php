<?php
class LegalitasUsaha extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('NIP') == null) {
            redirect('admin/Login/index');
        }
    }

	public function cetak () {
		$this->load->model('global_model');
        $data = $this->global_model->GetData('db_legalitasusaha');
        $data = array('data' => $data);
		$this->load->view('admin/beranda');
		$this->load->view('admin/legalitas', $data);
	}

	public function v_tambah () {
		$this->load->view('admin/beranda');
		$this->load->view('admin/add_legalitas');
	}

	public function tambah () {
		$this->load->model('global_model');
		$data = array (
			'legalitas_usaha' => $this->input->post('legalitas_usaha'),
		);

		$data = $this->global_model->Insert('db_legalitasusaha', $data);
		redirect('http://localhost/surveyumkm/index.php/admin/LegalitasUsaha/cetak');

	}

	public function delete ($id) {
		$id = array('id' => $id);
   		$this->load->model('global_model');
	    $this->global_model->Delete('db_legalitasusaha', $id);
	    redirect(base_url('index.php/admin/LegalitasUsaha/cetak'),'refresh');
	}

	public function v_edit ($id) {
		$this->load->model('global_model');
	    $key = $this->global_model->GetWhere('db_legalitasusaha', array('id' => $id));
	    $data = array(
	        'id' => $key[0]['id'],
	        'legalitas_usaha' => $key[0]['legalitas_usaha'],
        );
	    $this->load->view('admin/beranda');
	    $this->load->view('admin/edit_legalitas', $data); 
	}

	public function update () {
		$id = $_POST['id'];
        $legalitas_usaha = $_POST['legalitas_usaha'];
        $data = array(
            'id' => $id,
            'legalitas_usaha' => $legalitas_usaha,
        );

        $where = array (
            'id' => $id,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('db_legalitasusaha', $data, $where);
        if ($res>0) {
        redirect('admin/LegalitasUsaha/cetak','refresh');
    }
	}
}