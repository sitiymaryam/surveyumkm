<?php

class Beranda extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Laporan');

		if($this->session->userdata('NIP') == null) {
            redirect('admin/Login/index');
        }
	} 

	public function index() {
		$data ['data'] = $this->Laporan->profil_admin();
		$this->load->view('admin/beranda', $data);
		$this->load->view('admin/beranda_admin');

	}
}