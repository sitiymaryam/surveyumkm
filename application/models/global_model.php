<?php

class global_model extends CI_Model {
	public function Login($table, $where)
	{
		return $this->db->get_where($table,$where);
	}
	public function Insert($table, $data) 
	{
        $res = $this->db->insert($table,$data);
        return $res;
    }

    public function insertAdmin($table, $data) {
    	$res = $this->db->insert($table, $data);
    	return $res;
    }

    public function GetData ($table) {
        $res= $this->db->get($table);
        return $res->result_array();
    }

    public function GetWhere ($table,$data ) {
        $res= $this->db->get_where($table, $data);
        return $res->result_array();
    }

    public function Delete ($table, $where) 
    {
        $res= $this->db->delete($table, $where);
        return $res;
    }

    public function Update($table,$data,$where) {
        $res = $this->db->update($table,$data,$where);
        return $res;
    }

	public function get_sektor()
	{
		$this->db->select('*');
		$this->db->from('db_sektorekonomi');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_produk()
	{
		$this->db->select('*');
		$this->db->from('db_komoditas');
		$query = $this->db->get();
		return $query->result();

	}

	public function get_kategori()
	{
		$this->db->select('*');
		$this->db->from('db_kategori');
		$query = $this->db->get();
		return $query->result();

	}
	
}