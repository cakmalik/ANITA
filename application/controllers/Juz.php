<?php 
class Juz extends CI_controller{
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

 public function index()
    {
        $data['title'] = 'Data Juz';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['juz'] = $this->m_juz->tampil_data()->result();
        
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('juz/index', $data);
            $this->load->view('templates/footer');
      
    }
}