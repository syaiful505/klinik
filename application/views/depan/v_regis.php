<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PENDAFTARAN</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'theme/css/dataTables.bootstrap4.min.css'?>" rel="stylesheet">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>
    <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">

</head>

<body>
  <!--============================= HEADER =============================-->
  <div class="header-topbar">
      <div class="container">
          <div class="row">
              <div class="col-xs-6 col-sm-8 col-md-9">
                  <div class="header-top_address">
                      <div class="header-top_list">
                          <span class="icon-phone"></span>+62857-1062-9041
                      </div>
                      <div class="header-top_list">
                          <span class="icon-envelope-open"></span>sdinurulkarimah21@gmail.com
                      </div>
                      <div class="header-top_list">
                          <span class="icon-location-pin"></span>Parung
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div data-toggle="affix" style="border-bottom:solid 1px #f2f2f2;">
      <div class="container nav-menu2">
          <div class="row">
              <div class="col-md-12">
                  <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                      <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                          <span class="icon-menu"></span>
                      </button>
                     <!--  <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="200px;" src="<?php echo base_url().'theme/images/logo-dark.png'?>"></a> -->
                      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                          <ul class="navbar-nav">
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('');?>">Home</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('about');?>">About</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('guru');?>">Guru</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('siswa');?>">Siswa</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('berita');?>">Berita</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('pengumuman');?>">Pengumuman</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('agenda');?>">Agenda</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('download');?>">Download</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('galeri');?>">Gallery</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('contact');?>">Contact</a>
                              </li>
                        </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
    <section>
</section>
<!--//END HEADER -->
<section class="contact" style="margin-bottom:50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2>SILAHKAN KE MENU DOWNLOAD UNTUK BANTU TEST WEB</h2><br>
                    <a class="btn btn-success btn-flat text-center" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> DAFTAR </a><br><br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped" id="display">
                  <thead>
                    <tr>
                      <th>Photo</th>
                      <th>Nama</th>
                      <th>Jenis Pendaftaran</th>
                      <th>Jalur Pendaftaran</th>
                      <th>Tempat/Tgl Lahir</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>Tanggal Daftar</th>
                      <th style="text-align:right;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                        $no=0;
                        foreach ($data->result_array() as $i) :
                            $no++;
                            $id=$i['csiswa_id'];
                            $jenis=$i['csiswa_jenis'];
                            $jalur=$i['csiswa_jalur'];
                            $nama=$i['csiswa_nama'];
                            $jenkel=$i['csiswa_jenkel'];
                            $tmp_lahir=$i['csiswa_tmp_lahir'];
          					$tgl_lahir=$i['csiswa_tgl_lahir'];
                            $alamat=$i['csiswa_alamat'];
                            $photo=$i['csiswa_photo'];
                            $tgl_input=$i['csiswa_tgl_input'];
                        ?>
                    <tr>
                    <?php if(empty($photo)):?>
                      <td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/images/user_blank.png';?>"></td>
                      <?php else:?>
                      <td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/images/'.$photo;?>"></td>
                      <?php endif;?>
                      <td><?php echo $nama;?></td>
                      <td><?php echo $jenis;?></td>
                      <td><?php echo $jalur;?></td>
                      <td><?php echo $tmp_lahir.', '.$tgl_lahir;?></td>
                      <?php if($jenkel=='L'):?>
                      <td>Laki-Laki</td>
                      <?php else:?>
                      <td>Perempuan</td>
                      <?php endif;?>
                      <td><?php echo $alamat;?></td>
                      <td><?php echo $tgl_input;?></td>
                    </tr>
            <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!--//END  ABOUT IMAGE -->

    <!--============================= FOOTER =============================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="foot-logo">
                        <!-- <a href="<?php echo site_url();?>">
                            <img src="<?php echo base_url().'theme/images/logo-white.png'?>" class="img-fluid" alt="footer_logo">
                        </a> -->
                        <p><?php echo date('Y');?> © copyright by TeamPKM.Unpam</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sitemap">
                            <h3>Menu Utama</h3>
                            <ul>
                                <li><a href="<?php echo site_url();?>">Home</a></li>
                                <li><a href="<?php echo site_url('about');?>">About</a></li>
                                <li><a href="<?php echo site_url('artikel');?>">Berita </a></li>
                                <li><a href="<?php echo site_url('galeri');?>">Gallery</a></li>
                                <li><a href="<?php echo site_url('contact');?>">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                      <div class="sitemap">
                          <h3>Akademik</h3>
                          <ul>
                              <li><a href="<?php echo site_url('guru');?>">Guru</a></li>
                              <li><a href="<?php echo site_url('siswa');?>">Siswa </a></li>
                              <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                              <li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
                              <li><a href="<?php echo site_url('download');?>">Download</a></li>
                          </ul>
                      </div>
                    </div>
                    <div class="col-md-3">
                        <div class="address">
                            <h3>Hubungi Kami</h3>
                            <p><span>Alamat: </span>Parung</p>
                            <p>Email : sdinurulkarimah21@gmail.com
                                <br> Phone : +62857-1062-9041</p>
                                <ul class="footer-social-icons">
                                    <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--//END FOOTER -->
            <!-- Modal Tambah -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                            <h4 class="modal-title" id="myModalLabel">DAFTAR</h4>
                        </div>
                        <form class="form-horizontal" action="<?php echo base_url().'regis/simpan_siswa'?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <!-- Form Jenis -->
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Jenis Pendaftaran</label>
                                <div class="col-sm-7">
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="Baru" name="xjenis" checked>
                                        <label for="inlineRadio1"> Baru </label>
                                    </div>
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="Pindahan" name="xjenis">
                                        <label for="inlineRadio2"> Pindahan </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Jalur pendaftaran</label>
                                <div class="col-sm-7">
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="Prestasi" name="xjalur" checked>
                                        <label for="inlineRadio1"> Prestasi </label>
                                    </div>
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="Regular" name="xjalur">
                                        <label for="inlineRadio2"> Regular </label>
                                    </div>
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="Tahfidz" name="xjalur" checked>
                                        <label for="inlineRadio1"> Tahfidz </label>
                                    </div>
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="Yatim" name="xjalur">
                                        <label for="inlineRadio2"> Yatim </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Data Diri -->
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">NIK</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xno" class="form-control" id="inputUserName" placeholder="No Induk Kependudukan" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                                <div class="col-sm-7">
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                        <label for="inlineRadio1"> Laki-Laki </label>
                                    </div>
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                        <label for="inlineRadio2"> Perempuan </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xtmp_lahir" class="form-control" id="inputUserName" placeholder="Tempat lahir" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                                <div class="col-sm-7">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="xtgl_lahir" class="form-control pull-right" id="datepicker" required>
                                </div>
                                </div>
                                <!-- /.input group -->
                            </div>
                            

                            <!-- alamat dst -->
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Alamat</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xalamat" class="form-control" id="inputUserName" placeholder="Alamat" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">RT</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xrt" class="form-control" id="inputUserName" placeholder="Contoh: 002" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">RW</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xrw" class="form-control" id="inputUserName" placeholder="Contoh: 002" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Desa</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xdesa" class="form-control" id="inputUserName" placeholder="Desa" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Kecamatan</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xkec" class="form-control" id="inputUserName" placeholder="Kecamatan" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Kabupaten</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xkab" class="form-control" id="inputUserName" placeholder="Kabupaten" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Kode Pos</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xpos" class="form-control" id="inputUserName" placeholder="Contoh: 11231" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tempat Tinggal</label>
                                <div class="col-sm-7">
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="HakMilik" name="xtmp_tgl" checked>
                                        <label for="inlineRadio1"> HakMilik </label>
                                    </div>
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="Sewa" name="xtmp_tgl">
                                        <label for="inlineRadio2"> Sewa </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">No HP</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xhp" class="form-control" id="inputUserName" placeholder="Contoh: 08979817173" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">No Telpon</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xtlp" class="form-control" id="inputUserName" placeholder="Samakan HP bila tdk ada" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xemail" class="form-control" id="inputUserName" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tinggi</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xtinggi" class="form-control" id="inputUserName" placeholder="Satuan cm" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Berat</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xberat" class="form-control" id="inputUserName" placeholder="satuan kg" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Jarak</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xjarak" class="form-control" id="inputUserName" placeholder="satuan m/km" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Waktu</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xwaktu" class="form-control" id="inputUserName" placeholder="satuan menit/jam" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Jumlah saudara</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xsdr" class="form-control" id="inputUserName" placeholder="contoh: 2 bersaudara" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                                <div class="col-sm-7">
                                    <input type="file" name="filefoto"/>
                                </div>
                            </div>

                            <!-- Data Orangtua/wali-->
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Ayah</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xayh" class="form-control" id="inputUserName" placeholder="Nama ayah" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tahun Lahir Ayah</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xthn_ayh" class="form-control" id="inputUserName" placeholder="Contoh: 1997" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Pendidikan Ayah</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xpdk_ayh" class="form-control" id="inputUserName" placeholder="Contoh: S1" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Pekerjaan Ayah</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xjob_ayh" class="form-control" id="inputUserName" placeholder="Pekerjaan" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Penghasilan Ayah</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xgaji_ayh" class="form-control" id="inputUserName" placeholder="Contoh: 4.000.000" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Ibu</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xibu" class="form-control" id="inputUserName" placeholder="Nama Ibu" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tahun Lahir Ibu</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xthn_ibu" class="form-control" id="inputUserName" placeholder="Contoh: 1997" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Pendidikan Ibu</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xpdk_ibu" class="form-control" id="inputUserName" placeholder="Contoh: S1" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Pekerjaan Ibu</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xjob_ibu" class="form-control" id="inputUserName" placeholder="Pekerjaan" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Penghasilan Ibu</label>
                                <div class="col-sm-7">
                                    <input type="text" name="xgaji_ibu" class="form-control" id="inputUserName" placeholder="0 Jika Ibu Rumah Tangga" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Modal Edit -->
            <?php foreach ($data->result_array() as $i) :
              $id=$i['csiswa_id'];
              $jenis=$i['csiswa_jenis'];
              $jalur=$i['csiswa_jalur'];
              $no=$i['csiswa_no'];
              $nama=$i['csiswa_nama'];
              $jenkel=$i['csiswa_jenkel'];
              $tmp_lahir=$i['csiswa_tmp_lahir'];
              $tgl_lahir=$i['csiswa_tgl_lahir'];
              $alamat=$i['csiswa_alamat'];
              $rt=$i['csiswa_rt'];
              $rw=$i['csiswa_rw'];
              $desa=$i['csiswa_desa'];
              $kec=$i['csiswa_kec'];
              $kab=$i['csiswa_kab'];
              $pos=$i['csiswa_pos'];
              $tmp_tgl=$i['csiswa_tmp_tgl'];
              $hp=$i['csiswa_hp'];
              $tlp=$i['csiswa_tlp'];
              $email=$i['csiswa_email'];
              $tinggi=$i['csiswa_tinggi'];
              $berat=$i['csiswa_berat'];
              $jarak=$i['csiswa_jarak'];
              $waktu=$i['csiswa_waktu'];
              $sdr=$i['csiswa_sdr'];
              $photo=$i['csiswa_photo'];
              $ayh=$i['csiswa_ayh'];
              $thn_ayh=$i['csiswa_thn_ayh'];
              $pdk_ayh=$i['csiswa_pdk_ayh'];
              $job_ayh=$i['csiswa_job_ayh'];
              $gaji_ayh=$i['csiswa_gaji_ayh'];
              $ibu=$i['csiswa_ibu'];
              $thn_ibu=$i['csiswa_thn_ibu'];
              $pdk_ibu=$i['csiswa_pdk_ibu'];
              $job_ibu=$i['csiswa_job_ibu'];
              $gaji_ibu=$i['csiswa_gaji_ibu'];
            ?>
                <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                                <h4 class="modal-title" id="myModalLabel">Edit</h4>
                            </div>
                            <form class="form-horizontal" action="<?php echo base_url().'regis/update_siswa'?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                        <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                                        <input type="hidden" value="<?php echo $photo;?>" name="gambar">
                                            <!-- Form Jenis -->
                                            <div class="form-group">
                                                <label for="inputUserName" class="col-sm-4 control-label">Jenis Pendaftaran</label>
                                                <div class="col-sm-7">
                                                <?php if($jenis=='Baru'):?>
                                                <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Baru" name="xjenis" checked>
                                                        <label for="inlineRadio1"> Baru </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Pindahan" name="xjenis">
                                                        <label for="inlineRadio2"> Pindahan </label>
                                                    </div>
                                                <?php else:?>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Baru" name="xjenis">
                                                        <label for="inlineRadio1"> Baru </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Pindahan" name="xjenis" checked>
                                                        <label for="inlineRadio2"> Pindahan </label>
                                                    </div>
                                                <?php endif;?>
                                                </div>
                                            </div>
                                            <!-- Form Jalur -->
                                            <div class="form-group">
                                                <label for="inputUserName" class="col-sm-4 control-label">Jenis Pendaftaran</label>
                                                <div class="col-sm-7">
                                                <?php if($jalur=='Prestasi'):?>
                                                <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Prestasi" name="xjalur" checked>
                                                        <label for="inlineRadio1"> Prestasi </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Regular" name="xjalur">
                                                        <label for="inlineRadio2"> Regular </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Tahfidz" name="xjalur">
                                                        <label for="inlineRadio2"> Tahfidz </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Yatim" name="xjalur">
                                                        <label for="inlineRadio2"> Yatim </label>
                                                    </div>
                                                    <?php elseif($jalur=='Regular'):?>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Prestasi" name="xjalur" checked>
                                                        <label for="inlineRadio1"> Prestasi </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Regular" name="xjalur">
                                                        <label for="inlineRadio2"> Regular </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Tahfidz" name="xjalur">
                                                        <label for="inlineRadio2"> Tahfidz </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Yatim" name="xjalur">
                                                        <label for="inlineRadio2"> Yatim </label>
                                                    </div>
                                                    <?php elseif($jalur=='Tahfidz'):?>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Prestasi" name="xjalur" checked>
                                                        <label for="inlineRadio1"> Prestasi </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Regular" name="xjalur">
                                                        <label for="inlineRadio2"> Regular </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Tahfidz" name="xjalur">
                                                        <label for="inlineRadio2"> Tahfidz </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Yatim" name="xjalur">
                                                        <label for="inlineRadio2"> Yatim </label>
                                                    </div>
                                                    <?php else:?>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Prestasi" name="xjalur">
                                                        <label for="inlineRadio1"> Prestasi </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Regular" name="xjalur" checked>
                                                        <label for="inlineRadio2"> Regular </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Tahfidz" name="xjalur">
                                                        <label for="inlineRadio2"> Tahfidz </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Yatim" name="xjalur">
                                                        <label for="inlineRadio2"> Yatim </label>
                                                    <?php endif;?>
                                                </div>
                                            </div>
                                            <!-- Data Diri -->
                                            <div class="form-group">
                                                <label for="inputUserName" class="col-sm-4 control-label">No</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="xno" value="<?php echo $no;?>" class="form-control" id="inputUserName" placeholder="No" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="xnama" value="<?php echo $nama;?>" class="form-control" id="inputUserName" placeholder="Nama" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                                                <div class="col-sm-7">
                                                <?php if($jenkel=='L'):?>
                                                <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                                        <label for="inlineRadio1"> Laki-Laki </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                                        <label for="inlineRadio2"> Perempuan </label>
                                                    </div>
                                                <?php else:?>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="L" name="xjenkel">
                                                        <label for="inlineRadio1"> Laki-Laki </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="P" name="xjenkel" checked>
                                                        <label for="inlineRadio2"> Perempuan </label>
                                                    </div>
                                                <?php endif;?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="xtmp_lahir" value="<?php echo $tmp_lahir;?>" class="form-control" id="inputUserName" placeholder="Tempat lahir" required>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputUserName" class="col-sm-4 control-label">Tanggal lahir</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="xtgl_lahir" value="<?php echo $tgl_lahir;?>" class="form-control" id="inputUserName" placeholder="Contoh: 25 September 1993" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputUserName" class="col-sm-4 control-label">Alamat</label>
                                                <div class="col-sm-7">
                                                    <input type="text" name="xalamat" value="<?php echo $alamat;?>" class="form-control" id="inputUserName" placeholder="Alamat" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="inputUserName" class="col-sm-4 control-label">RT</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="xrt" value="<?php echo $rt;?>" class="form-control" id="inputUserName" placeholder="Contoh: 002" required>
                                            </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">RW</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xrw" value="<?php echo $rw;?>" class="form-control" id="inputUserName" placeholder="Contoh: 002" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Desa</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xdesa" value="<?php echo $desa;?>" class="form-control" id="inputUserName" placeholder="Desa" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Kecamatan</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xkec" value="<?php echo $kec;?>" class="form-control" id="inputUserName" placeholder="Kecamatan" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Kabupaten</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xkab" value="<?php echo $kab;?>" class="form-control" id="inputUserName" placeholder="Kabupaten" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Kode Pos</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xpos" value="<?php echo $pos;?>" class="form-control" id="inputUserName" placeholder="Contoh: 11231" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Tempat Tinggal</label>
                                                    <div class="col-sm-7">
                                                        <?php if($jenkel=='HakMilik'):?>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio1" value="HakMilik" name="xtmp_tgl" checked>
                                                            <label for="inlineRadio1"> HakMilik </label>
                                                        </div>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio1" value="Sewa" name="xtmp_tgl">
                                                            <label for="inlineRadio2"> Sewa </label>
                                                        </div>
                                                        <?php else:?>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio1" value="HakMilik" name="xtmp_tgl" checked>
                                                            <label for="inlineRadio1"> HakMilik </label>
                                                        </div>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio1" value="Sewa" name="xtmp_tgl">
                                                            <label for="inlineRadio2"> Sewa </label>
                                                        </div>
                                                        <?php endif;?>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">No HP</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xhp" value="<?php echo $hp;?>" class="form-control" id="inputUserName" placeholder="Contoh: 08979817173" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">No Telpon</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xtlp" value="<?php echo $tlp;?>" class="form-control" id="inputUserName" placeholder="Samakan HP bila tdk ada" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Email</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xemail" value="<?php echo $email;?>" class="form-control" id="inputUserName" placeholder="Email" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Tinggi</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xtinggi" value="<?php echo $tinggi;?>" class="form-control" id="inputUserName" placeholder="Tinggi" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Berat</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xberat" value="<?php echo $berat;?>" class="form-control" id="inputUserName" placeholder="Berat" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Jarak</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xjarak" value="<?php echo $jarak;?>" class="form-control" id="inputUserName" placeholder="Jarak" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Waktu</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xwaktu" value="<?php echo $waktu;?>" class="form-control" id="inputUserName" placeholder="Waktu" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Jumlah saudara</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xsdr" value="<?php echo $sdr;?>" class="form-control" id="inputUserName" placeholder="Saudara" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                                                <div class="col-sm-7">
                                                    <input type="file" name="filefoto"/>
                                                </div>
                                                </div>

                                                <!-- Data Orangtua/wali-->
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Nama Ayah</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xayh" value="<?php echo $ayh;?>" class="form-control" id="inputUserName" placeholder="Nama ayah" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Tahun Lahir Ayah</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xthn_ayh" value="<?php echo $thn_ayh;?>" class="form-control" id="inputUserName" placeholder="Contoh: 1997" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Pendidikan Ayah</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xpdk_ayh" value="<?php echo $pdk_ayh;?>" class="form-control" id="inputUserName" placeholder="Contoh: S1" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Pekerjaan Ayah</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xjob_ayh" value="<?php echo $job_ayh;?>" class="form-control" id="inputUserName" placeholder="Pekerjaan" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Penghasilan Ayah</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xgaji_ayh" value="<?php echo $gaji_ayh;?>" class="form-control" id="inputUserName" placeholder="Contoh: 4.000.000" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Nama Ibu</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xibu" value="<?php echo $ibu;?>" class="form-control" id="inputUserName" placeholder="Nama Ibu" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Tahun Lahir Ibu</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xthn_ibu" value="<?php echo $thn_ibu;?>" class="form-control" id="inputUserName" placeholder="Contoh: 1997" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Pendidikan Ibu</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xpdk_ibu" value="<?php echo $pdk_ibu;?>" class="form-control" id="inputUserName" placeholder="Contoh: S1" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Pekerjaan Ibu</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xjob_ibu" value="<?php echo $job_ibu;?>" class="form-control" id="inputUserName" placeholder="Pekerjaan" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUserName" class="col-sm-4 control-label">Penghasilan Ibu</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" name="xgaji_ibu" value="<?php echo $gaji_ibu;?>" class="form-control" id="inputUserName" placeholder="0 Jika IRT" required>
                                                    </div>
                                                </div>
                                            </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
            <!-- End Modal Edit -->
            <!-- End Modal Tambah -->
            <!-- jQuery 2.2.3 -->
            <script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
            <!-- Bootstrap 3.3.6 -->
            <script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
            <!-- DataTables -->
            <script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
            <script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
            <script src="<?php echo base_url().'assets/plugins/datepicker/bootstrap-datepicker.js'?>"></script>
            <!-- SlimScroll -->
            <script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
            <!-- FastClick -->
            <script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
            <!-- AdminLTE App -->
            <script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
            <script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
            <!-- page script -->
            <script>
            $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
                });
                $('#datepicker').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
                });
                $('#datepicker2').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
                });
                $('.datepicker3').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
                });
                $('.datepicker4').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
                });
                $(".timepicker").timepicker({
                showInputs: true
                });
            });
            </script>
            <?php if($this->session->flashdata('msg')=='error'):?>
                    <script type="text/javascript">
                            $.toast({
                                heading: 'Error',
                                text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                                showHideTransition: 'slide',
                                icon: 'error',
                                hideAfter: false,
                                position: 'bottom-right',
                                bgColor: '#FF4859'
                            });
                    </script>

                <?php elseif($this->session->flashdata('msg')=='success'):?>
                    <script type="text/javascript">
                            $.toast({
                                heading: 'Success',
                                text: "Data Berhasil disimpan.",
                                showHideTransition: 'slide',
                                icon: 'success',
                                hideAfter: false,
                                position: 'bottom-right',
                                bgColor: '#7EC857'
                            });
                    </script>
                <?php elseif($this->session->flashdata('msg')=='info'):?>
                    <script type="text/javascript">
                            $.toast({
                                heading: 'Info',
                                text: "Data berhasil di update",
                                showHideTransition: 'slide',
                                icon: 'info',
                                hideAfter: false,
                                position: 'bottom-right',
                                bgColor: '#00C9E6'
                            });
                    </script>
                <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
                    <script type="text/javascript">
                            $.toast({
                                heading: 'Success',
                                text: "Data Berhasil dihapus.",
                                showHideTransition: 'slide',
                                icon: 'success',
                                hideAfter: false,
                                position: 'bottom-right',
                                bgColor: '#7EC857'
                            });
                    </script>
                <?php else:?>

                <?php endif;?>
                <!-- End Function.nya -->
      </body>
</html>
