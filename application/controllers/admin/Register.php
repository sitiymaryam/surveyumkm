<?php
class Register extends CI_Controller {
	public function index() {
		$this->load->view('user/header_register');
		$this->load->view('admin/register');
	}

	public function insert () {
		$this->load->model('global_model');
		$NIP = $_POST['NIP'];
		$cek = $this->db->query("select * from admin where NIP='$NIP'");	
		$jatah = $cek->num_rows();	

		if ($jatah > 0) {
			echo "Hii NIP nya ga bole sama Looo"; 

		}
		else {

		$data = array (
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'NIP' => $NIP,
			'no_hp' => $this->input->post('no_hp'),
			'password' => $this->input->post('password'),
			'divisi' => $this->input->post('divisi'),
		);

		$data = $this->global_model->insertAdmin('admin', $data);
		redirect('http://localhost/surveyumkm/index.php/admin/Login/index');
		}
	}
}