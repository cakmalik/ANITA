<?php
class M_kategori extends CI_Model{
 
    function get_kategori(){
        $hasil=$this->db->query("SELECT * FROM kelas");
        return $hasil;
    }
 
    function get_subkategori($id){
        $hasil=$this->db->query("SELECT * FROM siswa WHERE id_kelas='$id'");
        return $hasil->result();
    }
    function get_kategorievaluasi(){
        $hasil=$this->db->query("SELECT * FROM kategori");
        return $hasil;
    }
    function get_juz(){
        $hasil=$this->db->query("SELECT * FROM juz");
        return $hasil;
    }
    function get_surat(){
        $hasil=$this->db->query("SELECT * FROM surat");
        return $hasil;
    }
}