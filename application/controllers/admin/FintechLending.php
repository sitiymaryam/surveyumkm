<?php
class FintechLending extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');

		if($this->session->userdata('NIP') == null) {
            redirect('admin/Login/index');
        }
	}

	public function cetak_k () {
		$this->load->model('Laporan');

		$data = $this->Laporan->get_fintechK();
		$data = array('data' => $data);

		$this->load->view('admin/beranda');
        $this->load->view('admin/fintech_K', $data);
	}

	public function v_tambah_k () {
		$this->load->view('admin/beranda');
		$this->load->view('admin/add_fintechK');
	}

	public function tambah_K () {
		$this->load->model('global_model');
		$data = array (
			'id_pnontradisional' => $this->input->post('id_pnontradisional'),
			'name' => $this->input->post('name'),
		);

		$data = $this->global_model->Insert('pnontradisional_sub', $data);
		redirect('http://localhost/surveyumkm/index.php/admin/FintechLending/cetak_k');
	}

	public function delete_k ($id) {
		$id = array('id' => $id);
   		$this->load->model('global_model');
	    $this->global_model->Delete('pnontradisional_sub', $id);
	    redirect(base_url('index.php/admin/FintechLending/cetak_k'),'refresh');
	}

	public function v_edit_k ($id) {
        $this->load->model('global_model');
        $key = $this->global_model->GetWhere('pnontradisional_sub', array('id' => $id));
        $data = array(
            'id' => $key[0]['id'],
            'name' => $key[0]['name'],
        );
        $this->load->view('admin/beranda');
        $this->load->view('admin/edit_fintechK', $data); 
    }

    public function update_k () {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $data = array(
            'id' => $id,
            'name' => $name,
        );

        $where = array (
            'id' => $id,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('pnontradisional_sub', $data, $where);
        if ($res>0) {
        redirect('admin/FintechLending/cetak_k','refresh');
    }
    }

    public function cetak_l () {
		$this->load->model('Laporan');

		$data = $this->Laporan->get_fintechL();
		$data = array('data' => $data);

		$this->load->view('admin/beranda');
        $this->load->view('admin/fintech_L', $data);
	}

	public function v_tambah_l () {
		$this->load->view('admin/beranda');
		$this->load->view('admin/add_fintechL');
	}

	public function tambah_L () {
		$this->load->model('global_model');
		$data = array (
			'id_pnontradisional' => $this->input->post('id_pnontradisional'),
			'name' => $this->input->post('name'),
		);

		$data = $this->global_model->Insert('pnontradisional_sub', $data);
		redirect('http://localhost/surveyumkm/index.php/admin/FintechLending/cetak_l');
	}

	public function delete_l ($id) {
		$id = array('id' => $id);
   		$this->load->model('global_model');
	    $this->global_model->Delete('pnontradisional_sub', $id);
	    redirect(base_url('index.php/admin/FintechLending/cetak_l'),'refresh');
	}

	public function v_edit_l ($id) {
        $this->load->model('global_model');
        $key = $this->global_model->GetWhere('pnontradisional_sub', array('id' => $id));
        $data = array(
            'id' => $key[0]['id'],
            'name' => $key[0]['name'],
        );
        $this->load->view('admin/beranda');
        $this->load->view('admin/edit_fintechL', $data); 
    }

	public function update_l () {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $data = array(
            'id' => $id,
            'name' => $name,
        );

        $where = array (
            'id' => $id,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('pnontradisional_sub', $data, $where);
        if ($res>0) {
        redirect('admin/FintechLending/cetak_l','refresh');
    }
    }
}