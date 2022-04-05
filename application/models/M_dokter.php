<?php 
class M_dokter extends CI_Model{

	function get_all_dokter(){
		$hsl=$this->db->query("SELECT * FROM tbl_dokter");
		return $hsl;
	}

	function simpan_dokter($nip,$nama,$specialist,$jenkel,$tmp_lahir,$tgl_lahir,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_dokter (dokter_nip,dokter_nama,dokter_specialist,dokter_jenkel,dokter_tmp_lahir,dokter_tgl_lahir,dokter_photo) VALUES ('$nip','$nama','$specialist','$jenkel','$tmp_lahir','$tgl_lahir','$photo')");
		return $hsl;
	}
	function simpan_dokter_tanpa_img($nip,$nama,$specialist,$jenkel,$tmp_lahir,$tgl_lahir){
		$hsl=$this->db->query("INSERT INTO tbl_dokter (dokter_nip,dokter_nama,dokter_specialist,dokter_jenkel,dokter_tmp_lahir,dokter_tgl_lahir) VALUES ('$nip','$nama','$specialist','$jenkel','$tmp_lahir','$tgl_lahir')");
		return $hsl;
	}

	function update_dokter($kode,$nip,$nama,$specialist,$jenkel,$tmp_lahir,$tgl_lahir,$photo){
		$hsl=$this->db->query("UPDATE tbl_dokter SET dokter_nip='$nip',dokter_nama='$nama',dokter_specialist='$specialist',dokter_jenkel='$jenkel',dokter_tmp_lahir='$tmp_lahir',dokter_tgl_lahir='$tgl_lahir',dokter_photo='$photo' WHERE dokter_id='$kode'");
		return $hsl;
	}
	function update_dokter_tanpa_img($kode,$nip,$nama,$specialist,$jenkel,$tmp_lahir,$tgl_lahir){
		$hsl=$this->db->query("UPDATE tbl_dokter SET dokter_nip='$nip',dokter_nama='$nama',dokter_specialist='$specialist',dokter_jenkel='$jenkel',dokter_tmp_lahir='$tmp_lahir',dokter_tgl_lahir='$tgl_lahir' WHERE dokter_id='$kode'");
		return $hsl;
	}
	function hapus_dokter($kode){
		$hsl=$this->db->query("DELETE FROM tbl_dokter WHERE dokter_id='$kode'");
		return $hsl;
	}

	//front-end
	function dokter(){
		$hsl=$this->db->query("SELECT * FROM tbl_dokter");
		return $hsl;
	}
	function dokter_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_dokter limit $offset,$limit");
		return $hsl;
	}

}