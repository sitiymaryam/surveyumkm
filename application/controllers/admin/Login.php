<?php
class Login extends CI_Controller {
	public function index() {
		$this->load->view('admin/login');
	}

	public function Logout() {
		$this->session->sess_destroy();
		redirect('admin/Login/index');
	}

	public function AdminLogin() {
	$NIP = $this->input->post('NIP');
	$password = $this->input->post('password');

	$where = array(
		'NIP' =>$NIP,
		'password' =>$password,
	);
	$cek = $this->global_model->Login("admin", $where)->num_rows();
	if ($cek > 0) {

		$data_session = array(
			'NIP' => $NIP,
			'status' => "login",
		);

		$this->session->set_userdata($data_session);
		redirect('admin/Beranda/index');
	}

	else {
		redirect('admin/Login/index');
	}

	}

	public function ganti_p () {

		$this->load->view('admin/edit_password');
	}

	public function change_password () {
		$email = $_POST['email'];
        $password = $_POST['password_lama'];

        $cek = $this->db->query("select * from admin where password='$password' and email='$email'");	
		$jatah = $cek->num_rows();	

		if ($jatah > 0) {
			$data = array(
            'email' => $email,
            'password' =>$this->input->post('password_baru'),
        );

        $where = array (
            'email' => $email,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('admin', $data, $where);
        if ($res>0) {
        redirect('admin/Login/sucses_ganti_p');
		    }

		}

		else {
			echo "password dan email engga sama";
		}

        
	}

	public function sucses_ganti_p() {
		$this->load->view('admin/notif_changepass');

	}

}