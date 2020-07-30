<?php 
class Siswa extends CI_controller{
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
        $data['title'] = 'Data Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kelas']= $this->db->get('kelas');
        // $data['siswa'] = $this->m_siswa->tampil_data();
        $data['siswa'] = $this->m_siswa->get_kelas();
        $data['getdata'] = $this->m_evaluasi->get_nilai();  
        
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('siswa/index', $data);
            $this->load->view('templates/footer');
      
    }

    public function tambah_aksi()
    {
        $nama       = $this->input->post('nama');   
        $id_kelas        = $this->input->post('id_kelas');    
        $nohp_siswa     = $this->input->post('nohp_siswa');   

        $data = array(
            'nama'      => $nama, 
            'id_kelas'       => $id_kelas, 
            'nohp_siswa'    => $nohp_siswa
        );

        $this->m_siswa->input_data($data,'siswa');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Tambah Data
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>');
        redirect('siswa');
    }
    public function hapus($id)
    {
        $where = array('id_siswa' => $id);
        $this->m_siswa->hapus_data($where,'siswa');
        redirect('siswa');
    }
}