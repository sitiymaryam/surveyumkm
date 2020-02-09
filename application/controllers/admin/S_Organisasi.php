<?php
class S_Organisasi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('NIP') == null) {
            redirect('admin/Login/index');
        }
    }
    
    public function cetak () {
        $this->load->model('global_model');
        $data = $this->global_model->GetData('db_strukturorganisasi');
        $data = array('data' => $data);
        $this->load->view('admin/beranda');
        $this->load->view('admin/s_organisasi', $data);
    }

    public function v_tambah () {
        $this->load->view('admin/beranda');
        $this->load->view('admin/add_organisasi');
    }

    public function tambah () {
        $this->load->model('global_model');
        $data = array (
            'struktur_organisasi' => $this->input->post('struktur_organisasi'),
        );

        $data = $this->global_model->Insert('db_strukturorganisasi', $data);
        redirect('http://localhost/surveyumkm/index.php/admin/S_Organisasi/cetak');

    }

    public function delete ($id) {
        $id = array('id' => $id);
        $this->load->model('global_model');
        $this->global_model->Delete('db_strukturorganisasi', $id);
        redirect(base_url('index.php/admin/S_Organisasi/cetak'),'refresh');
    }

    public function v_edit ($id) {
        $this->load->model('global_model');
        $key = $this->global_model->GetWhere('db_strukturorganisasi', array('id' => $id));
        $data = array(
            'id' => $key[0]['id'],
            'struktur_organisasi' => $key[0]['struktur_organisasi'],
        );
        $this->load->view('admin/beranda');
        $this->load->view('admin/edit_organisasi', $data); 
    }

    public function update () {
        $id = $_POST['id'];
        $struktur_organisasi = $_POST['struktur_organisasi'];
        $data = array(
            'id' => $id,
            'struktur_organisasi' => $struktur_organisasi,
        );

        $where = array (
            'id' => $id,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('db_strukturorganisasi', $data, $where);
        if ($res>0) {
        redirect('admin/S_Organisasi/cetak','refresh');
    }
    }
}