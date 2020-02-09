<?php

class Login extends CI_Controller {

	public function index () {
		$this->load->view('user/login_gagal');
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('http://localhost/surveyumkm/');
	}

	public function LoginUser() {
	$username = $this->input->post('username');
	$password = $this->input->post('password');

	$where = array(
		'username' =>$username,
		'password' =>$password,
	);
	$cek = $this->global_model->Login("registrasi", $where)->num_rows();
	if ($cek > 0) {

		$data_session = array(
			'username' => $username,
			'status' => "login",
		);

		$this->session->set_userdata($data_session);
		redirect('user/Beranda/beranda');
	}

	else {
		redirect('user/Login/index');
	}

	}

	public function ganti_p () {

		$this->load->view('user/edit_password');
	}

	public function sucses_ganti_p() {
		$this->load->view('user/notif_changepass');

	}

	public function change_password () {
		$email = $_POST['email'];
        $password = $_POST['password_lama'];

        $cek = $this->db->query("select * from registrasi where password='$password' and email='$email'");	
		$jatah = $cek->num_rows();	

		if ($jatah > 0) {
			$data = array(
            'email' => $email,
            'password' => $this->input->post('password_baru'),
        );

        $where = array (
            'email' => $email,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('registrasi', $data, $where);
        if ($res>0) {
        redirect('user/Login/sucses_ganti_p');
   			 }
		}
		else {
			echo "password dan email engga sama";
		}

        
	}


}