<?php
class Evaluasi extends CI_controller
{
    function __construct()
    {
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
        $data['title'] = 'Data evaluasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['evaluasi'] = $this->m_evaluasi->tampil_data()->result();
        $data['siswa'] = $this->db->get('siswa')->result_array();
        $data['kelas'] = $this->db->get('kelas')->result_array();
        $data['juz'] = $this->db->get('juz')->result_array();
        $data['surat'] = $this->db->get('surat')->result_array();
        $data['data'] = $this->m_kategori->get_kategori();
        $data['kategorievaluasi'] = $this->m_kategori->get_kategorievaluasi();
        $data['juz'] = $this->m_kategori->get_juz();
        $data['surat'] = $this->m_kategori->get_surat();

        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->join('evaluasi', 'evaluasi.id_kelas=kelas.id_kelas');
        $query = $this->db->get();
        $data['join'] = $query;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('evaluasi/index', $data);
        $this->load->view('templates/footer');
    }
    public function detail($id)
    {
        $data['title'] = 'Data evaluasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('m_evaluasi');
        $detail = $this->m_evaluasi->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('evaluasi/detail', $data);
        $this->load->view('templates/footer');
    }
    public function hapus($id)
    {
        $where = array('id_evaluasi' => $id);
        $this->m_evaluasi->hapus_data($where, 'evaluasi');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Evaluasi Berhasil Di hapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>');
        redirect('evaluasi');
    }
    public function hapusHasilSiswa($id)
    {
        $where = array('id_uji' => $id);
        $this->m_evaluasi->hapus_data($where, 'uji');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Uji Berhasil Di hapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>');
        redirect('evaluasi/uts');
    }

    public function uts()
    {

        $data['title'] = 'Data UTS';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['getdata'] = $this->m_evaluasi->get_nilai();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('evaluasi/uts', $data);
        // $this->load->view('templates/footer');

    }

    public function duatable()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->join('evaluasi', 'evauasi.id_kelas=kelas.kelas');
        $query = $this->db->get();
        return $query->result();
    }
    public function detail_nilai($id)
    {
        $data['title'] = 'Rekap Nilai Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id_uji' => $id);
        $data['getdata_id'] = $this->m_evaluasi->get_nilai_id($where, 'uji');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('evaluasi/detail_nilai', $data);
        $this->load->view('templates/footer');
    }
    public function kelas()
    {
        $kelas = $this->input->post('kelas');
        $data['title'] = 'Data UTS';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['getdata'] = $this->m_evaluasi->get_nilai_kelas($kelas);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('evaluasi/hasil_kelas', $data);
        // $this->load->view('templates/footer');

    }
    public function frontKelas()
    {
        $kelas = $this->input->post('kelas');
        $namaKelas = $this->input->post('nama_kelas');
        $this->db->where('id_kelas', $kelas);
        $namaKelas = $this->db->get('kelas')->row();

        $where = array('uji.id_kelas' => $kelas);
        $data['kategori'] =  $this->m_evaluasi->get_where($where, 'uji');

        $data['judul'] = $namaKelas;
        $data['getdata'] = $this->m_evaluasi->get_nilai_kelas_f($kelas);

        $this->load->view('frontLayout/header', $data);
        $this->load->view('front/nilai_harian', $data);
        $this->load->view('frontLayout/footer');
    }
}
