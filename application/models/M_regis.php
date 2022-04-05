<?php 
class M_regis extends CI_Model{

	function get_all_pasien(){
		$hsl=$this->db->query("SELECT tbl_pasiennew.*,dokter_nama,dokter_specialist FROM tbl_pasiennew JOIN tbl_dokter ON pasiennew_dokter_id=dokter_id");
		return $hsl;
	}
	function simpan_pasien($nama,$jenkel,$alamat,$wa,$dokter,$ket){
		$hsl=$this->db->query("INSERT INTO tbl_pasiennew (pasiennew_nama,pasiennew_jenkel,pasiennew_alamat,pasiennew_wa,pasiennew_dokter_id,pasiennew_ket) VALUES ('$nama','$jenkel','$alamat','$wa','$dokter','$ket')");
		return $hsl;
	}
	function update_pasien($kode,$nama,$jenkel,$alamat,$wa,$dokter,$ket){
		$hsl=$this->db->query("UPDATE tbl_pasiennew SET pasiennew_nama='$nama',pasiennew_jenkel='$jenkel',pasiennew_alamat='$alamat',pasiennew_wa='$wa',pasiennew_dokter_id='$dokter',pasiennew_ket='$ket' WHERE pasiennew_id='$kode'");
		return $hsl;
	}
	function hapus_pasien($kode){
		$hsl=$this->db->query("DELETE FROM tbl_pasiennew WHERE pasiennew_id='$kode'");
		return $hsl;
	}
	function pasien(){
		$hsl=$this->db->query("SELECT * FROM tbl_pasiennew");
		return $hsl;
	}
	function pasien_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_pasiennew limit $offset,$limit");
		return $hsl;
	}

}