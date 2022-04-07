<?php
class M_agenda extends CI_Model{

	function get_all_agenda(){
		$hsl=$this->db->query("SELECT tbl_agenda.*,DATE_FORMAT(agenda_tanggal,'%d/%m/%Y') AS tanggal,dokter_nama,dokter_specialist FROM tbl_agenda JOIN tbl_dokter ON agenda_dokter_id=dokter_id ORDER BY agenda_id DESC");
		return $hsl;
	}
	function simpan_agenda($dokter,$mulai,$selesai,$tempat,$waktu,$keterangan){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("INSERT INTO tbl_agenda(agenda_dokter_id,agenda_mulai,agenda_selesai,agenda_tempat,agenda_waktu,agenda_keterangan,agenda_author) VALUES ('$dokter','$mulai','$selesai','$tempat','$waktu','$keterangan','$author')");
		return $hsl;
	}
	function update_agenda($kode,$dokter,$mulai,$selesai,$tempat,$waktu,$keterangan){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("UPDATE tbl_agenda SET agenda_dokter_id='$dokter',agenda_mulai='$mulai',agenda_selesai='$selesai',agenda_tempat='$tempat',agenda_waktu='$waktu',agenda_keterangan='$keterangan',agenda_author='$author' where agenda_id='$kode'");
		return $hsl;
	}
	function hapus_agenda($kode){
		$hsl=$this->db->query("DELETE FROM tbl_agenda WHERE agenda_id='$kode'");
		return $hsl;
	}

	//front-end
	function get_agenda_home(){
		$hsl=$this->db->query("SELECT tbl_agenda.*,DATE_FORMAT(agenda_tanggal,'%d/%m/%Y') AS tanggal,dokter_nama,dokter_specialist FROM tbl_agenda JOIN tbl_dokter ON agenda_dokter_id=dokter_id ORDER BY agenda_id DESC limit 3");
		return $hsl;
	}
	function agenda(){
		$hsl=$this->db->query("SELECT tbl_agenda.*,DATE_FORMAT(agenda_tanggal,'%d/%m/%Y') AS tanggal,dokter_nama,dokter_specialist FROM tbl_agenda JOIN tbl_dokter ON agenda_dokter_id=dokter_id ORDER BY agenda_id DESC");
		return $hsl;
	}
	function agenda_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_agenda.*,DATE_FORMAT(agenda_tanggal,'%d/%m/%Y') AS tanggal,dokter_nama,dokter_specialist FROM tbl_agenda JOIN tbl_dokter ON agenda_dokter_id=dokter_id ORDER BY agenda_id DESC limit $offset,$limit");
		return $hsl;
	}


} 