<?php 
class Surat extends CI_controller{
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
        $data['title'] = 'Data Surat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['surat'] = $this->m_surat->tampil_data()->result();
        
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('surat/index', $data);
            $this->load->view('templates/footer');
      
    }
    public function tambah_aksi()
    {
        $nomor       = $this->input->post('nomor_surat');   
        $nama        = $this->input->post('nama_surat');    
        $jumlah     = $this->input->post('jumlah_ayat');   

        $data = array(
            'nomor_surat'      => $nomor, 
            'nama_surat'       => $nama, 
            'jumlah_ayat'    => $jumlah
        );

        $this->m_surat->input_data($data,'surat');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Tambah Data
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>');
        redirect('surat');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_surat->hapus_data($where,'surat');
        redirect('surat');
    }
}