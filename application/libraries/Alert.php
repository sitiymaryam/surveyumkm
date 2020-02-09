<?php 
class Alert {
	private $CI;
	private $data;
	private $tag_after = '<br/>';

	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->library('session');
		$this->data['_nr'] = array();
		$this->data['_rr'] = array();
	}

	public function set($type, $message = '', $is_nr = false)
	{
		
		if(!$is_nr){
			
			// Buat alert dengan menggunakan flashdata
			$this->data['_rr'][$type][] = $message;
			$this->_set_rr($type, $message);
			
		}else{
			
			// Buat alert dengan variable biasa
			$this->data['_nr'][$type][] = $message;
		}
		
		// Return this supaya bisa chainable
		return $this;
	}
 
	
	//Method untuk flashdata
	private function _set_rr($type, $message)
	{
		foreach($this->data['_rr'] as $type => $val) 
		{
			// Buat flashdata CI
			$this->CI->session->set_flashdata($type, $val);
		}
	}

	private function alert_collection()
	{
		
		// Ambil alert dari masing-masing type
		$rrs = $this->CI->session->flashdata();
		$nrs = $this->data['_nr'];
		
		// Menggabungkan alert
		$all_alert = array_merge($rrs, $nrs);
		$new_alert = array();
		
		foreach($all_alert as $key => $messages){
			
			$i = 1;
			$count_message = count($messages);
			$str_message = '';
		
		
			foreach($messages as $m){
				$str_message .= $m;
				$str_message .= $i < $count_message ? $this->tag_after : '';
				
				$i++;
			}
		
			
			$new_alert[$key] = $str_message;
		}
		
		return $new_alert;
	}
	
	
	/*
	*
	* Method untuk menampilkan semua alert
	* Return array
	*/
	private function show_all()
	{
		return $this->alert_collection();
	}
	
	
	/*
	*
	* Method untuk menampilkan alert berdasarkan type
	* Return string
	*/
	private function show($type)
	{
		$collection = $this->alert_collection();
		
		if(array_key_exists($type, $collection)){
			return $collection[$type];
		}
	}
	
	
	/*
	*
	* Method menampilkan alert untuk public
	* Return array/string
	*/
	public function has_alert($type = '')
	{
		if($type !== ''){
			return $this->show($type);
		}
		
		return $this->show_all();
	}


}