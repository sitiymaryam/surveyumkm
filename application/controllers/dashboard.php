<?php
class Dashboard extends CI_Controller {
	function index() {
		$this->load->model('m_login');
		$ambil_akun = $this->m_login->ambil_user($this->session->userdata('username'));
		$data = array (
			'user' => $ambil_akun,
		);

		$stat = $this->session->userdata('lvl');

		if($stat == 1) {
			$this->load->view('Dashboard_admin', $data);
		}
		else
		{
			$this->load->view('user', $data);
		}
	}
}