<?php 
class M_guru extends CI_model{
	public function tampil_data()
	{
		return $this->db->get('guru');
	}
	public function tampil_data_user()
	{
		return $this->db->get('user');
	}
}