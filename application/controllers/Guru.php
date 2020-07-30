<?php 
class Guru extends CI_controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_kategori');
        $this->load->model('M_guru');
        $this->load->model('M_siswa');
        $this->load->model('M_uji');
        $this->load->model('M_evaluasi');
        $this->load->model('M_surat');
        $this->load->model('M_juz');
        $this->load->model('M_kelas');
    }

 public function index()
    {
        $data['title'] = 'Data Guru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['guru'] = $this->M_guru->tampil_data_user()->result();
        
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('guru/index', $data);
            $this->load->view('templates/footer');
      
    }
}