<?php
class BahanBaku extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('ussername') == null) {
            redirect('admin/Login/index');
        }
    }

	public function cetak () {
		$this->load->model('Laporan');

        $data = $this->Laporan->get_bahanbaku();
        $data = array('data' => $data);

        $this->load->view('admin/beranda');
        $this->load->view('admin/bahan_baku', $data);
	}

	public function v_tambah () {
        $this->load->view('admin/beranda');
        $this->load->view('admin/add_bahanbaku');
    }

     public function tambah () {
        $this->load->model('global_model');
        $data = array (
            'nama' => $this->input->post('nama'),
        );

        $data = $this->global_model->Insert('bahan_baku', $data);
        redirect('/admin/BahanBaku/cetak');

    }

    public function delete ($id) {
        $id = array('id' => $id);
        $this->load->model('global_model');
        $this->global_model->Delete('bahan_baku', $id);
        redirect('admin/BahanBaku/cetak','refresh');
    }

    public function v_edit ($id) {
        $this->load->model('global_model');
        $key = $this->global_model->GetWhere('bahan_baku', array('id' => $id));
        $data = array(
            'id' => $key[0]['id'],
            'nama' => $key[0]['nama'],
        );
        $this->load->view('admin/beranda');
        $this->load->view('admin/edit_bahanbaku', $data); 
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
        $res = $this->global_model->Update('bahan_baku', $data, $where);
        if ($res>0) {
        redirect('admin/BahanBaku/cetak','refresh');
    }
    }
}