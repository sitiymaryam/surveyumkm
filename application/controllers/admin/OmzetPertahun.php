<?php

class OmzetPertahun extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('NIP') == null) {
            redirect('admin/Login/index');
        }
    }

	public function cetak () {
		$this->load->model('Laporan');

        $data = $this->Laporan->get_omzet();
        $data = array('data' => $data);

        $this->load->view('admin/beranda');
        $this->load->view('admin/omzet_pertahun', $data);
	}

	public function v_tambah () {
        $this->load->view('admin/beranda');
        $this->load->view('admin/add_omzet');
    }

     public function tambah () {
        $this->load->model('global_model');
        $data = array (
            'nama' => $this->input->post('nama'),
        );

        $data = $this->global_model->Insert('omzet', $data);
        redirect('/admin/OmzetPertahun/cetak');

    }

    public function delete ($id) {
        $id = array('id' => $id);
        $this->load->model('global_model');
        $this->global_model->Delete('omzet', $id);
        redirect('admin/OmzetPertahun/cetak','refresh');
    }

    public function v_edit ($id) {
        $this->load->model('global_model');
        $key = $this->global_model->GetWhere('omzet', array('id' => $id));
        $data = array(
            'id' => $key[0]['id'],
            'nama' => $key[0]['nama'],
        );
        $this->load->view('admin/beranda');
        $this->load->view('admin/edit_omzet', $data); 
    }

    public function update () {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $data = array(
            'id' => $id,
            'nama' => $nama,
        );

        $where = array (
            'id' => $id,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('omzet', $data, $where);
        if ($res>0) {
        redirect('admin/OmzetPertahun/cetak','refresh');
    }
    }
}