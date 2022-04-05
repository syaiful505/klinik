<?php
class Regis extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_regis');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_regis->get_all_siswa();
		$this->load->view('depan/v_regis',$x);
	}
	
	function simpan_siswa(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
                      {
                              $gbr = $this->upload->data();
                              //Compress Image
                              $config['image_library']='gd2';
                              $config['source_image']='./assets/images/'.$gbr['file_name'];
                              $config['create_thumb']= FALSE;
                              $config['maintain_ratio']= FALSE;
                              $config['quality']= '60%';
                              $config['width']= 300;
                              $config['height']= 300;
                              $config['new_image']= './assets/images/'.$gbr['file_name'];
                              $this->load->library('image_lib', $config);
                              $this->image_lib->resize();

                              $photo=$gbr['file_name'];
							  $jenis=strip_tags($this->input->post('xjenis'));
							  $jalur=strip_tags($this->input->post('xjalur'));
                              $no=strip_tags($this->input->post('xno'));
                              $nama=strip_tags($this->input->post('xnama'));
                              $jenkel=strip_tags($this->input->post('xjenkel'));
							  $tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							  $tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
                              $alamat=strip_tags($this->input->post('xalamat'));
                              $rt=strip_tags($this->input->post('xrt'));
                              $rw=strip_tags($this->input->post('xrw'));
                              $desa=strip_tags($this->input->post('xdesa'));
                              $kec=strip_tags($this->input->post('xkec'));
                              $kab=strip_tags($this->input->post('xkab'));
                              $pos=strip_tags($this->input->post('xpos'));
                              $tmp_tgl=strip_tags($this->input->post('xtmp_tgl'));
                              $hp=strip_tags($this->input->post('xhp'));
                              $tlp=strip_tags($this->input->post('xtlp'));
                              $email=strip_tags($this->input->post('xemail'));
                              $tinggi=strip_tags($this->input->post('xtinggi'));
                              $berat=strip_tags($this->input->post('xberat'));
                              $jarak=strip_tags($this->input->post('xjarak'));
                              $waktu=strip_tags($this->input->post('xwaktu'));
                              $sdr=strip_tags($this->input->post('xsdr'));
                              $ayh=strip_tags($this->input->post('xayh'));
                              $thn_ayh=strip_tags($this->input->post('xthn_ayh'));
                              $pdk_ayh=strip_tags($this->input->post('xpdk_ayh'));
                              $job_ayh=strip_tags($this->input->post('xjob_ayh'));
                              $gaji_ayh=strip_tags($this->input->post('xgaji_ayh'));
                              $ibu=strip_tags($this->input->post('xibu'));
                              $thn_ibu=strip_tags($this->input->post('xthn_ibu'));
                              $pdk_ibu=strip_tags($this->input->post('xpdk_ibu'));
                              $job_ibu=strip_tags($this->input->post('xjob_ibu'));
                              $gaji_ibu=strip_tags($this->input->post('xgaji_ibu'));
							  $ibu=strip_tags($this->input->post('xwali'));
                              $thn_ibu=strip_tags($this->input->post('xthn_wali'));
                              $pdk_ibu=strip_tags($this->input->post('xpdk_wali'));
                              $job_ibu=strip_tags($this->input->post('xjob_wali'));
                              $gaji_ibu=strip_tags($this->input->post('xgaji_wali'));

                              $this->m_regis->simpan_siswa($jenis,$jalur,$no,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$alamat,$rt,$rw,$desa,$kec,$kab,$pos,$tmp_tgl,$hp,$tlp,$email,$tinggi,$berat,$jarak,$waktu,$sdr,$photo,$ayh,$thn_ayh,$pdk_ayh,$job_ayh,$gaji_ayh,$ibu,$thn_ibu,$pdk_ibu,$job_ibu,$gaji_ibu);
                              echo $this->session->set_flashdata('msg','success');
                              redirect('regis');
                          }else{
                                  echo $this->session->set_flashdata('msg','warning');
                                  redirect('regis');
                              }
	                 
	            }else{
					$jenis=strip_tags($this->input->post('xjenis'));
					$jalur=strip_tags($this->input->post('xjalur'));
					$no=strip_tags($this->input->post('xno'));
					$nama=strip_tags($this->input->post('xnama'));
					$jenkel=strip_tags($this->input->post('xjenkel'));
					$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
					$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
					$alamat=strip_tags($this->input->post('xalamat'));
					$rt=strip_tags($this->input->post('xrt'));
					$rw=strip_tags($this->input->post('xrw'));
					$desa=strip_tags($this->input->post('xdesa'));
					$kec=strip_tags($this->input->post('xkec'));
					$kab=strip_tags($this->input->post('xkab'));
					$pos=strip_tags($this->input->post('xpos'));
					$tmp_tgl=strip_tags($this->input->post('xtmp_tgl'));
					$hp=strip_tags($this->input->post('xhp'));
					$tlp=strip_tags($this->input->post('xtlp'));
					$email=strip_tags($this->input->post('xemail'));
					$tinggi=strip_tags($this->input->post('xtinggi'));
					$berat=strip_tags($this->input->post('xberat'));
					$jarak=strip_tags($this->input->post('xjarak'));
					$waktu=strip_tags($this->input->post('xwaktu'));
					$sdr=strip_tags($this->input->post('xsdr'));
					$ayh=strip_tags($this->input->post('xayh'));
					$thn_ayh=strip_tags($this->input->post('xthn_ayh'));
					$pdk_ayh=strip_tags($this->input->post('xpdk_ayh'));
					$job_ayh=strip_tags($this->input->post('xjob_ayh'));
					$gaji_ayh=strip_tags($this->input->post('xgaji_ayh'));
					$ibu=strip_tags($this->input->post('xibu'));
					$thn_ibu=strip_tags($this->input->post('xthn_ibu'));
					$pdk_ibu=strip_tags($this->input->post('xpdk_ibu'));
					$job_ibu=strip_tags($this->input->post('xjob_ibu'));
					$gaji_ibu=strip_tags($this->input->post('xgaji_ibu'));
					

					$this->m_regis->simpan_siswa_tanpa_img($jenis,$jalur,$no,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$alamat,$rt,$rw,$desa,$kec,$kab,$pos,$tmp_tgl,$hp,$tlp,$email,$tinggi,$berat,$jarak,$waktu,$sdr,$ayh,$thn_ayh,$pdk_ayh,$job_ayh,$gaji_ayh,$ibu,$thn_ibu,$pdk_ibu,$job_ibu,$gaji_ibu);
					echo $this->session->set_flashdata('msg','success');
					redirect('regis');
              }
				
	}
	
	function update_siswa(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $gambar=$this->input->post('gambar');
							$path='./assets/images/'.$gambar;
							unlink($path);

							$photo=$gbr['file_name'];
							$kode=$this->input->post('kode');
							$jenis=strip_tags($this->input->post('xjenis'));
							$jalur=strip_tags($this->input->post('xjalur'));
							$no=strip_tags($this->input->post('xno'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$alamat=strip_tags($this->input->post('xalamat'));
							$rt=strip_tags($this->input->post('xrt'));
							$rw=strip_tags($this->input->post('xrw'));
							$desa=strip_tags($this->input->post('xdesa'));
							$kec=strip_tags($this->input->post('xkec'));
							$kab=strip_tags($this->input->post('xkab'));
							$pos=strip_tags($this->input->post('xpos'));
							$tmp_tgl=strip_tags($this->input->post('xtmp_tgl'));
							$hp=strip_tags($this->input->post('xhp'));
							$tlp=strip_tags($this->input->post('xtlp'));
							$email=strip_tags($this->input->post('xemail'));
							$tinggi=strip_tags($this->input->post('xtinggi'));
							$berat=strip_tags($this->input->post('xberat'));
							$jarak=strip_tags($this->input->post('xjarak'));
							$waktu=strip_tags($this->input->post('xwaktu'));
							$sdr=strip_tags($this->input->post('xsdr'));
							$ayh=strip_tags($this->input->post('xayh'));
							$thn_ayh=strip_tags($this->input->post('xthn_ayh'));
							$pdk_ayh=strip_tags($this->input->post('xpdk_ayh'));
							$job_ayh=strip_tags($this->input->post('xjob_ayh'));
							$gaji_ayh=strip_tags($this->input->post('xgaji_ayh'));
							$ibu=strip_tags($this->input->post('xibu'));
							$thn_ibu=strip_tags($this->input->post('xthn_ibu'));
							$pdk_ibu=strip_tags($this->input->post('xpdk_ibu'));
							$job_ibu=strip_tags($this->input->post('xjob_ibu'));
							$gaji_ibu=strip_tags($this->input->post('xgaji_ibu'));

	                        $this->m_regis->update_siswa($kode,$jenis,$jalur,$no,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$alamat,$rt,$rw,$desa,$kec,$kab,$pos,$tmp_tgl,$hp,$tlp,$email,$tinggi,$berat,$jarak,$waktu,$sdr,$photo,$ayh,$thn_ayh,$pdk_ayh,$job_ayh,$gaji_ayh,$ibu,$thn_ibu,$pdk_ibu,$job_ibu,$gaji_ibu);
                            echo $this->session->set_flashdata('msg','success');
                            redirect('regis');
	                }else{
	                        echo $this->session->set_flashdata('msg','warning');
	                        redirect('regis');
	                }
	                
	            }else{
					
					$kode=$this->input->post('kode');
					$jenis=strip_tags($this->input->post('xjenis'));
					$jalur=strip_tags($this->input->post('xjalur'));
					$no=strip_tags($this->input->post('xno'));
					$nama=strip_tags($this->input->post('xnama'));
					$jenkel=strip_tags($this->input->post('xjenkel'));
					$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
					$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
					$alamat=strip_tags($this->input->post('xalamat'));
					$rt=strip_tags($this->input->post('xrt'));
					$rw=strip_tags($this->input->post('xrw'));
					$desa=strip_tags($this->input->post('xdesa'));
					$kec=strip_tags($this->input->post('xkec'));
					$kab=strip_tags($this->input->post('xkab'));
					$pos=strip_tags($this->input->post('xpos'));
					$tmp_tgl=strip_tags($this->input->post('xtmp_tgl'));
					$hp=strip_tags($this->input->post('xhp'));
					$tlp=strip_tags($this->input->post('xtlp'));
					$email=strip_tags($this->input->post('xemail'));
					$tinggi=strip_tags($this->input->post('xtinggi'));
					$berat=strip_tags($this->input->post('xberat'));
					$jarak=strip_tags($this->input->post('xjarak'));
					$waktu=strip_tags($this->input->post('xwaktu'));
					$sdr=strip_tags($this->input->post('xsdr'));
					$ayh=strip_tags($this->input->post('xayh'));
					$thn_ayh=strip_tags($this->input->post('xthn_ayh'));
					$pdk_ayh=strip_tags($this->input->post('xpdk_ayh'));
					$job_ayh=strip_tags($this->input->post('xjob_ayh'));
					$gaji_ayh=strip_tags($this->input->post('xgaji_ayh'));
					$ibu=strip_tags($this->input->post('xibu'));
					$thn_ibu=strip_tags($this->input->post('xthn_ibu'));
					$pdk_ibu=strip_tags($this->input->post('xpdk_ibu'));
					$job_ibu=strip_tags($this->input->post('xjob_ibu'));
					$gaji_ibu=strip_tags($this->input->post('xgaji_ibu'));

					$this->m_regis->update_siswa_tanpa_img($kode,$jenis,$jalur,$no,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$alamat,$rt,$rw,$desa,$kec,$kab,$pos,$tmp_tgl,$hp,$tlp,$email,$tinggi,$berat,$jarak,$waktu,$sdr,$ayh,$thn_ayh,$pdk_ayh,$job_ayh,$gaji_ayh,$ibu,$thn_ibu,$pdk_ibu,$job_ibu,$gaji_ibu);
					echo $this->session->set_flashdata('msg','success');
					redirect('regis');
	            } 

	}

	function hapus_siswa(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_regis->hapus_siswa($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('regis');
	}

	function cetak(){
		$kode=$this->input->post('kode');
		$this->m_regis->cetak($kode);
		redirect('regis');
	}

}