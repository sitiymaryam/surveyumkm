<?=

class Auth {
	public function cek_auth() {
		$this->ci =& get_instance();
		$this->sesi = $this->ci->session->userdata('isLogin');
		$this->hak = $this->ci->session->userdata('stat');

		if ($this->sesi != TRUE) {
			redirect('login','refresh');
			exit();
		}
	}

}