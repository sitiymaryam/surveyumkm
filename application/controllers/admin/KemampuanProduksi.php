<?php
class KemampuanProduksi extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('NIP') == null) {
            redirect('admin/Login/index');
        }
    }

    public function cetak () {
        $this->load->model('Laporan');

        $data = $this->Laporan->get_kproduksi();
        $data = array('data' => $data);

        $this->load->view('admin/beranda');
        $this->load->view('admin/kemampuan_produksi', $data);
    }

    public function v_tambah () {
        $this->load->view('admin/beranda');
        $this->load->view('admin/add_kproduksi');
    }

     public function tambah () {
        $this->load->model('global_model');
        $data = array (
            'nama' => $this->input->post('nama'),
        );

        $data = $this->global_model->Insert('k_produksi', $data);
        redirect('/admin/KemampuanProduksi/cetak');

    }

    public function delete ($id) {
        $id = array('id' => $id);
        $this->load->model('global_model');
        $this->global_model->Delete('k_produksi', $id);
        redirect('admin/KemampuanProduksi/cetak','refresh');
    }

    public function v_edit ($id) {
        $this->load->model('global_model');
        $key = $this->global_model->GetWhere('k_produksi', array('id' => $id));
        $data = array(
            'id' => $key[0]['id'],
            'nama' => $key[0]['nama'],
        );
        $this->load->view('admin/beranda');
        $this->load->view('admin/edit_kproduksi', $data); 
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
        $res = $this->global_model->Update('k_produksi', $data, $where);
        if ($res>0) {
        redirect('admin/KemampuanProduksi/cetak','refresh');
    }
    }


}