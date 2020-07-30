<?php 
class Kelas extends CI_controller{
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
        $data['title'] = 'Data Kelas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['kelas'] = $this->m_kelas->tampil_data();

        
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kelas/index', $data);
            $this->load->view('templates/footer');
      
    }
    public function tambah_aksi()
    {
        $kelas      = $this->input->post('kelas');
        $wali_kelas = $this->input->post('wali_kelas');
        $no_hp      = $this->input->post('no_hp');

        $data = array(
            'kelas' => $kelas,
            'wali_kelas' => $wali_kelas,
            'no_hp' => $no_hp
             );
        
        $this->m_kelas->input_data($data,'kelas');
        redirect('kelas');
    }
}