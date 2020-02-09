<?php
class login extends CI_Controller {

	function index () {
		$session = $this->session->userdata('isLogin');
		if($session == false) {
			$this->load->view('form_login');
		} else {
			redirect('dashboard');
		}
	}

	function do_login() {
		$this->load->model('m_login');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->m_login->cek_user($username, $password);

		if (count($cek)== 1) {
			foreach ($cek as $cek ) {
				$level = $cek['level'];
			}

			$this->session->set_userdata(array(
				'isLogin' => TRUE,
				'username' => $username,
				'lvl' -> $level
			));

			redirect('dashboard','refresh');

		}
		else {
			echo "<script> alert('Gagal Login')</script>";
			redirect('login', 'refresh');
		}
	}
}