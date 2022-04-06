<?php
class M_daftar extends CI_Model{
    function get_all_pasien(){
		$hsl=$this->db->query("SELECT tbl_pasiennew.*,dokter_nama,dokter_specialist FROM tbl_pasiennew JOIN tbl_dokter ON pasiennew_dokter_id=dokter_id");
		return $hsl;
	}
	function simpan_pasien($nama,$jenkel,$alamat,$wa,$dokter,$ket){
		$hsl=$this->db->query("INSERT INTO tbl_pasiennew (pasiennew_nama,pasiennew_jenkel,pasiennew_alamat,pasiennew_wa,pasiennew_dokter_id,pasiennew_ket) VALUES ('$nama','$jenkel','$alamat','$wa','$dokter','$ket')");
		return $hsl;
	}
}