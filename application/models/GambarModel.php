<?php 
class GambarModel extends CI_Model {
	function add_account($data)
	{
	  $this->load->database();
	  $this->db->insert('gambar_user',$data);			
	}

	public function view () {
		return $this->db->get('gambar_user');
	}

	public function upload() {
		$config['upload_path']		= './icon/';
		$config['allowed_types']	= 'jpeg|jpg|png';
		$config['max_size']			= 2048;
		$config['remove_space']		= true;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('berkas')) {
			$return = array ('result' => 'success', 'file'
			=> $this->upload->data(), 'error' => '');
			return $return;
		}
		else {
			$return = array ('result' => 'failed', 'file'=>'', 'error'
			=> $this->upload->display_errors());
			return $return;
		}
	}

	public function save ($upload) {
		$data = array(
			'deskripsi' => $this->input->post('input_deskripsi'),
			'nama_file' =>$upload ['file'] ['file_name'],
			'ukuran_file' =>$upload ['file'] ['file_size'],	
			'tipe_file' =>$upload ['file'] ['file_type'],		
		);

		$this->db->insert('gambar_user', $data);
	}
}