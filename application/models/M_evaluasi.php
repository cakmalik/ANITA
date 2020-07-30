<?php
class M_evaluasi extends CI_model
{
	public function tampil_data()
	{
		return $this->db->get('evaluasi');
	}
	public function detail_data($id = NULL)
	{
		$query = $this->db->get_where('evaluasi', array('id' => $id))->row();
		return $query;
	}
	public function inputevaluasi($data, $table)
	{
		$this->db->insert($table, $data);
	}
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_nilai()
	{
		$this->db->select('*');
		$this->db->from('uji');
		$this->db->join('kelas', 'kelas.id_kelas = uji.id_kelas');
		$this->db->join('siswa', 'siswa.id_siswa = uji.id_siswa');
		$this->db->join('evaluasi', 'evaluasi.id_evaluasi = uji.id_evaluasi');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_nilai_kelas($kelas)
	{
		$this->db->select('*');
		$this->db->from('uji');
		$this->db->join('kelas', 'kelas.id_kelas = uji.id_kelas');
		$this->db->join('siswa', 'siswa.id_siswa = uji.id_siswa');
		$this->db->join('evaluasi', 'evaluasi.id_evaluasi = uji.id_evaluasi');
		$this->db->where('kelas.id_kelas', $kelas);
		$this->db->order_by('evaluasi.id_evaluasi', 'ASC');
		$this->db->order_by('siswa.nama', 'ASC');

		$query = $this->db->get();
		return $query->result();
	}
	public function get_nilai_kelas_f($kelas)
	{
		$this->db->select('*');
		$this->db->from('uji');
		$this->db->join('kelas', 'kelas.id_kelas = uji.id_kelas');
		$this->db->join('siswa', 'siswa.id_siswa = uji.id_siswa');
		$this->db->join('evaluasi', 'evaluasi.id_evaluasi = uji.id_evaluasi');
		$this->db->where('kelas.id_kelas', $kelas);
		$this->db->order_by('siswa.nama', 'ASC');
		$this->db->order_by('evaluasi.id_evaluasi', 'ASC');

		$query = $this->db->get();
		return $query->result();
	}

	public function get_nilai_id($where, $table)
	{
		$this->db->where($where);
		$this->db->select('*');
		$this->db->from('uji');
		$this->db->join('kelas', 'kelas.id_kelas = uji.id_kelas');
		$this->db->join('siswa', 'siswa.id_siswa = uji.id_siswa');
		$this->db->join('evaluasi', 'evaluasi.id_evaluasi = uji.id_evaluasi');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_where($where, $table)
	{

		$this->db->select('*');
		$this->db->from('uji');
		$this->db->join('kelas', 'kelas.id_kelas = uji.id_kelas');
		$this->db->join('siswa', 'siswa.id_siswa = uji.id_siswa');
		$this->db->join('evaluasi', 'evaluasi.id_evaluasi = uji.id_evaluasi');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}
}
