<?php
class KomoditasUtama extends Ci_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('NIP') == null) {
            redirect('admin/Login/index');
        }
    }
    
	public function cetak () {
		$this->load->model('global_model');
        $data = $this->global_model->GetData('db_komoditas');
        $data = array('data' => $data);
		$this->load->view('admin/beranda');
		$this->load->view('admin/komoditas_utama', $data);
	}

	public function v_tambah () {
		$this->load->view('admin/beranda');
		$this->load->view('admin/add_komoditas');
	}

	public function tambah () {
		$this->load->model('global_model');
		$data = array (
			'nama_produk' => $this->input->post('nama_produk'),
		);

		$data = $this->global_model->Insert('db_komoditas', $data);
		redirect('http://localhost/surveyumkm/index.php/admin/KomoditasUtama/cetak');

	}

	public function delete ($id) {
		$id = array('id' => $id);
   		$this->load->model('global_model');
	    $this->global_model->Delete('db_komoditas', $id);
	    redirect(base_url('index.php/admin/KomoditasUtama/cetak'),'refresh');
	}

	public function v_edit ($id) {
		$this->load->model('global_model');
	    $key = $this->global_model->GetWhere('db_komoditas', array('id' => $id));
	    $data = array(
	        'id' => $key[0]['id'],
	        'nama_produk' => $key[0]['nama_produk'],
        );
	    $this->load->view('admin/beranda');
	    $this->load->view('admin/edit_komoditas', $data); 
	}

	public function update () {
		$id = $_POST['id'];
        $nama_produk = $_POST['nama_produk'];
        $data = array(
            'id' => $id,
            'nama_produk' => $nama_produk,
        );

        $where = array (
            'id' => $id,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('db_komoditas', $data, $where);
        if ($res>0) {
        redirect('admin/KomoditasUtama/cetak','refresh');
    }
	}
}