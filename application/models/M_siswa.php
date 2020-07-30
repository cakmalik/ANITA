<?php 
class M_siswa extends CI_model{
	public function tampil_data()
	{
		$this->db->order_by('id_kelas','ASC');
		$query = $this->db->get('siswa');
		return $query->result();
	}
	public function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function get_kelas()
	{
	$this->db->select('*');
	$this->db->from('siswa');
	$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
	$query = $this->db->get();
	return $query->result();
	}
}