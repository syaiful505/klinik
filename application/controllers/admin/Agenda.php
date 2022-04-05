<?php
class Agenda extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_agenda');
		$this->load->model('m_dokter');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_agenda->get_all_agenda();
		$x['dok']=$this->m_dokter->get_all_dokter();
		$this->load->view('admin/v_agenda',$x);
	}

	function simpan_agenda(){
		$dokter=strip_tags($this->input->post('xdokter'));
		$mulai=$this->input->post('xmulai');
		$selesai=$this->input->post('xselesai');
		$tempat=$this->input->post('xtempat');
		$waktu=$this->input->post('xwaktu');
		$keterangan=$this->input->post('xketerangan');
		$this->m_agenda->simpan_agenda($dokter,$mulai,$selesai,$tempat,$waktu,$keterangan);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/agenda');
	}

	function update_agenda(){
		$kode=strip_tags($this->input->post('kode'));
		$dokter=strip_tags($this->input->post('xdokter'));
		$mulai=$this->input->post('xmulai');
		$selesai=$this->input->post('xselesai');
		$tempat=$this->input->post('xtempat');
		$waktu=$this->input->post('xwaktu');
		$keterangan=$this->input->post('xketerangan');
		$this->m_agenda->update_agenda($kode,$dokter,$mulai,$selesai,$tempat,$waktu,$keterangan);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/agenda');
	}
	function hapus_agenda(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_agenda->hapus_agenda($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/agenda');
	}

}