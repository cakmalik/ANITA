<?php 
class M_kelas extends CI_model{
	public function tampil_data()
	{
		return $this->db->get('kelas');
	}
	public function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
}