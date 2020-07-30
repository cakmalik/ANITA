<?php 

	class M_uji extends CI_model
	{
	public function get_nilai()
	{
		 return $this->db->get('uji');
	}
	public function get_nama($where,$table)
	{
		 return $this->db->get_where($table,$where);
	}
	public function get_ayat($where, $table)	
	{
		 return $this->db->get($where,$table);
	}
	public function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
}