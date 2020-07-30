<?php 
class M_surat extends CI_model{
	public function tampil_data()
	{
		$this->db->order_by('nomor_surat','ASC');
		return $this->db->get('surat');
	}
	public function input_data($where,$table)
	{
		$this->db->insert($table,$where);
	}
	public function hapus_data($where,$table)
	{
		 $this->db->where($where);
		 $this->db->delete($table);
	}
}