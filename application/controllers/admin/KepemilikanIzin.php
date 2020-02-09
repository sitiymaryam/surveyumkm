<?php
class KepemilikanIzin extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('NIP') == null) {
            redirect('admin/Login/index');
        }
    }

	public function cetak () {
		$this->load->model('Laporan');

        $data = $this->Laporan->get_izin();
        $data = array('data' => $data);

        $this->load->view('admin/beranda');
        $this->load->view('admin/kepemilikan_izin', $data);
	}

	public function v_tambah () {
        $this->load->view('admin/beranda');
        $this->load->view('admin/add_kizin');
    }

     public function tambah () {
        $this->load->model('global_model');
        $data = array (
            'nama' => $this->input->post('nama'),
        );

        $data = $this->global_model->Insert('izin', $data);
        redirect('/admin/KepemilikanIzin/cetak');

    }

    public function delete ($id) {
        $id = array('id' => $id);
        $this->load->model('global_model');
        $this->global_model->Delete('izin', $id);
        redirect('admin/KepemilikanIzin/cetak','refresh');
    }

    public function v_edit ($id) {
        $this->load->model('global_model');
        $key = $this->global_model->GetWhere('izin', array('id' => $id));
        $data = array(
            'id' => $key[0]['id'],
            'nama' => $key[0]['nama'],
        );
        $this->load->view('admin/beranda');
        $this->load->view('admin/edit_kizin', $data); 
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
        $res = $this->global_model->Update('izin', $data, $where);
        if ($res>0) {
        redirect('admin/KepemilikanIzin/cetak','refresh');
    }
    }
}