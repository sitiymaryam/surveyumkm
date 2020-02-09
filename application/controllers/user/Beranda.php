<?php

class Beranda extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');

		if($this->session->userdata('username') == null) {
            redirect('http://localhost/surveyumkm/');
        }
	}

		public function beranda() {
		$this->load->view('user/header_beranda');
		$this->load->model('Laporan');

		$data['data'] = $this->Laporan->get_nama();
		$this->load->view('user/beranda', $data);
	}	
}