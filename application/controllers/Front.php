<?php 

class Front extends CI_controller
{
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
			$data['guru'] = $this->m_guru->tampil_data_user()->result();
			$this->load->view('front/index', $data);
		}
	public function nilai()
	{

		$this->load->view('frontLayout/header');
		$this->load->view('frontLayout/topbar');
		$this->load->view('front/nilai');
		$this->load->view('frontLayout/footer');
	}
	public function guru()
	{
		$data['guru'] = $this->m_guru->tampil_data_user();
		$this->load->view('frontLayout/header');
		$this->load->view('frontLayout/topbar');
		$this->load->view('front/guru',$data);
		$this->load->view('frontLayout/footer');
	}
	public function siswa()
	{
		$data['siswa'] = $this->m_siswa->tampil_data();

		$this->load->view('frontLayout/header');
		$this->load->view('frontLayout/topbar');
		$this->load->view('front/siswa',$data);
		$this->load->view('frontLayout/footer');
	}
	public function get_where($id)
	{
		$where = array('nilai_kategori' => $id);
		$data['judul'] = $id;
        $data['kategori'] =  $this->m_evaluasi->get_where($where,'uji');
        $data['kelas'] = $this->db->get('kelas')->result();
        
		// $data['getdata'] = $this->m_evaluasi->get_nilai();
		$this->load->view('frontLayout/header', $data);
		$this->load->view('front/nilai_harian',$data);
		$this->load->view('frontLayout/footer');
	}
	public function get_kelas_brp($id)
	{
		$where = array('uji.id_kelas' => $id);
        $data['kategori'] =  $this->m_evaluasi->get_where($where,'uji');
        $data['kelas'] = $this->db->get('kelas')->result();
        
		$data['judul'] = 'kelas';
		// $data['getdata'] = $this->m_evaluasi->get_nilai();
		$this->load->view('frontLayout/header', $data);
		$this->load->view('front/nilai_harian',$data);
		$this->load->view('frontLayout/footer');
	}
	public function detail_nilai($id)
    {
        
        $where = array('id_uji' => $id);
        $data['getdata_id'] = $this->m_evaluasi->get_nilai_id($where,'uji'); 


        $this->load->view('frontLayout/header', $data);
        $this->load->view('front/detail_nilai', $data);
        $this->load->view('frontLayout/footer');
    }
    public function data_guru()
    {
    	$data['guru'] = $this->m_guru->tampil_data_user()->result();
    	$this->load->view('frontLayout/header', $data);
        $this->load->view('front/guru', $data);
        $this->load->view('frontLayout/footer');
    }
  //   public function search($keyword)
  //   {
		// $keyword = $this->input->post('keyword');
		
		// $data['cari'] = $this->m_evaluasi->get_keyword($keyword);
		// $this->load->view('frontLayout/header',$data);
		// $this->load->view('frontLayout/topbar');
		// $this->load->view('front/guru',$data);
		// $this->load->view('frontLayout/footer');
  //   }
}