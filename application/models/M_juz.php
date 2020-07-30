<?php 
class M_juz extends CI_model{
	public function tampil_data()
	{
		return $this->db->get('juz');
	}
}