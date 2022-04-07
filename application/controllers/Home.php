<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_agenda');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
			$x['berita']=$this->m_tulisan->get_berita_home();
			$x['agenda']=$this->m_agenda->get_agenda_home();
			$x['tot_dokter']=$this->db->get('tbl_dokter')->num_rows();
			$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
			$this->load->view('depan/v_home',$x);
	}

}
