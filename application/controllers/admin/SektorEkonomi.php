<?php 
class SektorEkonomi extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('NIP') == null) {
            redirect('admin/Login/index');
        }
    }
    
	public function cetak() {
		$this->load->model('global_model');
        $data = $this->global_model->GetData('db_sektorekonomi');
        $data = array('data' => $data);
        $data['page'] = 'admin/cetak';
		$this->load->view('admin/beranda');
		$this->load->view('admin/s_ekonomi', $data);
	}

	public function v_tambah () {
		$this->load->view('admin/beranda');
		$this->load->view('admin/add_sekonomi');
	}

	public function tambah () {
		$this->load->model('global_model');
		$data = array (
			'nama_sektor' => $this->input->post('nama_sektor'),
		);

		$data = $this->global_model->Insert('db_sektorekonomi', $data);
		redirect('http://localhost/surveyumkm/index.php/admin/SektorEkonomi/cetak');

	}

	public function delete ($id) {
		$id = array('id' => $id);
   		$this->load->model('global_model');
	    $this->global_model->Delete('db_sektorekonomi', $id);
	    redirect(base_url('index.php/admin/SektorEkonomi/cetak'),'refresh');
	}

	public function v_edit ($id) {
		$this->load->model('global_model');
	    $key = $this->global_model->GetWhere('db_sektorekonomi', array('id' => $id));
	    $data = array(
	        'id' => $key[0]['id'],
	        'nama_sektor' => $key[0]['nama_sektor'],
        );
	    $data['page'] = 'admin/edit SektorEkonomi';
	    $this->load->view('admin/beranda');
	    $this->load->view('admin/edit_sekonomi', $data); 
	}

	public function update () {
		$id = $_POST['id'];
        $nama_sektor = $_POST['nama_sektor'];
        $data = array(
            'id' => $id,
            'nama_sektor' => $nama_sektor,
        );

        $where = array (
            'id' => $id,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('db_sektorekonomi', $data, $where);
        if ($res>0) {
        redirect('admin/SektorEkonomi/cetak','refresh');
    }
	}
}

?>