<?php
class Regis extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_regis');
		$this->load->model('m_dokter');
		$this->load->library('upload');
	}

	function index(){
		$x['data']=$this->m_regis->get_all_pasien();
		$x['dok']=$this->m_dokter->get_all_dokter();
		$this->load->view('admin/v_regis',$x);
	}
	function export(){
		$x['data']=$this->m_regis->export_data();
		$x['dok']=$this->m_dokter->export_dokter();
		$this->load->view('admin/export_data/v_export_data',$x);
	}
	function simpan_pasien(){
		$nama=strip_tags($this->input->post('xnama'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$alamat=strip_tags($this->input->post('xalamat'));
		$wa=strip_tags($this->input->post('xwa'));
		$dokter=strip_tags($this->input->post('xdokter'));
		$ket=strip_tags($this->input->post('xket'));
		$this->m_regis->simpan_pasien($nama,$jenkel,$alamat,$wa,$dokter,$ket);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('admin/regis');
	}
	function update_pasien(){
		$kode=strip_tags($this->input->post('kode'));
		$nama=strip_tags($this->input->post('xnama'));
		$jenkel=strip_tags($this->input->post('xjenkel'));
		$alamat=strip_tags($this->input->post('xalamat'));
		$wa=strip_tags($this->input->post('xwa'));
		$dokter=strip_tags($this->input->post('xdokter'));
		$ket=strip_tags($this->input->post('xket'));
		$this->m_regis->update_pasien($kode,$nama,$jenkel,$alamat,$wa,$dokter,$ket);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/regis');
	}
	function hapus_pasien(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_regis->hapus_pasien($kode);
		echo $this->session->set_flashdata('msg','succes-hapus');
		redirect('admin/regis');
	}
	function export_data(){
		$kode=$this->input->post('kode');
		$this->m_regis->export_data($kode);
		redirect('admin/regis/export_data');
	}
}