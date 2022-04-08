<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_agenda');
		$this->load->model('m_daftar');
		$this->load->model('m_dokter');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
			$x['data']=$this->m_daftar->get_all_pasien();
			$x['dok']=$this->m_dokter->get_all_dokter();
			$x['berita']=$this->m_tulisan->get_berita_home();
			$x['agenda']=$this->m_agenda->get_agenda_home();
			$x['tot_dokter']=$this->db->get('tbl_dokter')->num_rows();
			$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
			$this->load->view('depan/v_home',$x);
	}
	function simpan_pasien(){
        $nama=$this->input->post('xnama');
        $jenkel=$this->input->post('xjenkel');
        $alamat=$this->input->post('xalamat');
        $wa=$this->input->post('xwa');
        $dokter=strip_tags($this->input->post('xdokter'));
        $ket=$this->input->post('xket');
        $this->m_daftar->simpan_pasien($nama,$jenkel,$alamat,$wa,$dokter,$ket);
        echo $this->session->set_flashdata('msg', 'success');
        redirect('home');
    }
}