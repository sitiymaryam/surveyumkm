<?php 
class Gambar extends CI_Controller {
	
	public function index()
	{
			$this->load->view('gambar/form',$data);
	}


}