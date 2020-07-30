<?php 

class Tes extends CI_controller
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
		 $this->load->view('tes');
	}
	public function inputdata()
	{
        $tes   =  $this->input->post('tes');  

        $data = array(
  
        	'tesp' => implode(',', $this->input->post('tesp',TRUE)),
        	'tesk' => implode(',', $this->input->post('tesk',TRUE))
        	 );  

        $this->db->insert('tes',$data);

	}
}