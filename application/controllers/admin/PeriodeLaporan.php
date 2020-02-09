<?php
class PeriodeLaporan extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Laporan');

        if($this->session->userdata('NIP') == null) {
            redirect('admin/Login/index');
        }
    }

	public function index () {
		$data = $this->Laporan->periodelaporan();
		$data = array(
			'id'=>$data[0]->id,
			'periode_awal' => $data[0]->periode_awal,
			'periode_akhir' => $data[0]->periode_akhir,
		);
		$this->load->view ('admin/beranda');
		$this->load->view ('admin/periodelaporan', $data);
	}

	public function v_edit () {
		$data = $this->Laporan->periodelaporan();
		$data = array(
			'id'=>$data[0]->id,
			'periode_awal' => $data[0]->periode_awal,
			'periode_akhir' => $data[0]->periode_akhir,
		);
		$this->load->view ('admin/beranda');
		$this->load->view ('admin/periode', $data);	
	}

	public function input_lembaga () {
		$this->load->model('global_model');
		$id = $_POST['id'];

        $data = array (
        	'id'=> $id,
            'periode_awal' => $this->input->post('periode_awal'),
            'periode_akhir' => $this->input->post('periode_akhir'),
        );

        $where = array (
            'id' => $id,
        );

        $this->load->model('global_model');
        $res = $this->global_model->Update('periode_laporan', $data, $where);
        if ($res>0) {
        redirect('admin/PeriodeLaporan/index','refresh');
    	}
}
}