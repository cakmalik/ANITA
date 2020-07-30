<?php
class AmbilNilai extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_kategori');
        $this->load->model('m_guru');
        $this->load->model('m_siswa');
        $this->load->model('m_uji');
        $this->load->model('m_evaluasi');
        $this->load->model('m_surat');
        $this->load->model('m_juz');
        $this->load->model('m_kelas');
    }

    function index(){
        $data['title'] = 'Ambil Nilai';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['evaluasi'] = $this->m_evaluasi->tampil_data()->result();
        $data['siswa'] = $this->db->get('siswa')->result_array();
        $data['kelas'] = $this->db->get('kelas')->result_array();
        $data['juz'] = $this->db->get('juz')->result_array();
        $data['surat'] = $this->db->get('surat')->result_array();
        
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
        $data['data']=$this->m_kategori->get_kategori();
        $data['kategorievaluasi']=$this->m_kategori->get_kategorievaluasi();
        $data['juz']=$this->m_kategori->get_juz();
        $data['surat']=$this->m_kategori->get_surat();
        $this->load->view('ambilnilai', $data);
          
    }

    function get_subkategori(){
        $id=$this->input->post('id');
        $data=$this->m_kategori->get_subkategori($id);
        echo json_encode($data);
    }
    public function inputEvaluasi()

    {
        $id_kelas       = $this->input->post('id_kelas');   
        $kategori       = $this->input->post('kategori');   
        $id_juz       = $this->input->post('id_juz');   
        $id_surat       = $this->input->post('id_surat');   
        $ayat_ke       = $this->input->post('ayat_ke');   
        $sampai       = $this->input->post('sampai');   
        $tanggal       = $this->input->post('tanggal');    

        $data = array(
            'id_kelas'  => $id_kelas,
            'kategori'  => $kategori,
            'id_juz'    => $id_juz,
            'id_surat'  => $id_surat,
            'ayat_ke'   => $ayat_ke,
            'sampai'    => $sampai,
            'tanggal'   => $tanggal
            );
        $this->m_evaluasi->inputevaluasi($data,'evaluasi');
        redirect('evaluasi');
    }


}