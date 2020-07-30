<?php 
class Uji extends CI_controller{
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
        $data['title'] = 'Evaluasi Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nama'] = $this->db->get_where('siswa', ['nama' => $this->session->userdata('email')])->row_array();
        
        $data['evaluasi'] = $this->m_evaluasi->tampil_data()->result();
        $data['kelas'] = $this->m_kelas->tampil_data()->result();
        $data['siswa'] = $this->db->get('siswa')->result_array();
        $data['kelas'] = $this->db->get('kelas')->result_array();
        $data['juz'] = $this->db->get('juz')->result_array();
        $data['surat'] = $this->db->get('surat')->result_array();
        
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('uji/index', $data);
            $this->load->view('templates/footer');
      
    }
    public function get_uji_nama($id,$dari,$sampai,$kelas,$evaluasi,$kategori)
    {
        $data['title'] = 'Uji Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $where = array('id_kelas' => $id );
        $data['dari'] = array('ayat_ke' => $dari);
        $data['sampai'] = array('sampai' => $sampai);
        $data['id_kelas'] = $kelas;
        $data['id_evaluasi'] = $evaluasi;
        $data['kategori'] = $kategori;
        $data['evaluasi'] = $this->m_evaluasi->tampil_data()->result();



        $this->load->model('m_uji');
        $nama = $this->m_uji->get_nama($where,'siswa');
        $data['siswa'] = $nama;

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('uji/index', $data);
            $this->load->view('templates/footer');
    }
    public function input_nilai_uji(){
        $id_siswa = $this->input->post('id_siswa');   
        $id_kelas = $this->input->post('id_kelas');   
        $id_evaluasi = $this->input->post('id_evaluasi');   
        $guru_penguji = $this->input->post('guru_penguji');   
        $surat= $this->input->post('surat');   
        $nilai_kategori= $this->input->post('nilai_kategori');   
        $p = $this->input->post('p');   
        $k = $this->input->post('k');  

        $data = array(
            'id_siswa'      => $id_siswa, 
            'id_kelas'       => $id_kelas,  
            'id_evaluasi'       => $id_evaluasi,  
            'guru_penguji'       => $guru_penguji,  
            'surat'       => $surat,  
            'nilai_kategori'       => $nilai_kategori,  
            'p'       => implode(',', $this->input->post('p',TRUE)), 
            'k'       => implode(',', $this->input->post('k',TRUE))
        );
        $this->db->insert('uji',$data);
        redirect('evaluasi');

    }
}