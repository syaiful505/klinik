<?php 
class Daftar extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_daftar');
        $this->load->model('m_dokter');
        $this->load->library('upload');
    }
    function index(){
        $x['data']=$this->m_daftar->get_all_pasien();
        $x['dok']=$this->m_dokter->get_all_dokter();
        $this->load->view('admin/v_daftar',$x);
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
        redirect('admin/daftar');
    }
    function update_pasien(){
        $kode=strip_tags($this->input->post('kode'));
        $nama=$this->input->post('xnama');
        $jenkel=$this->input->post('xjenkel');
        $alamat=$this->input->post('xalamat');
        $wa=$this->input->post('xwa');
        $dokter=strip_tags($this->input->post('xdokter'));
        $ket=$this->input->post('xket');
        $this->m_daftar->update_pasien($kode,$nama,$jenkel,$alamat,$wa,$dokter,$ket);
        echo $this->session->set_flashdata('msg', 'info');
        redirect('admin/daftar');
    }
    function hapus_pasien(){
        $kode=strip_tags($this->input->post('kode'));
        $this->m_daftar->hapus_pasien($kode);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('admin/daftar');
    }
}