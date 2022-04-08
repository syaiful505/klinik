<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Selamat Datang di Sabil Medika</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Databales -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                    <a class="btn btn-success btn-flat text-center" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> DAFTAR </a> 
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                        <div class="header-top_list">
                            <span class="icon-phone"></span>(021) 5991735
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>Tigaraksa, Tangerang
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda');?>">Jadwal Dokter</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('dokter');?>">Dokter</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('berita');?>">Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about');?>">About</a>
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
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider.jpg'?>" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Bepikir Kreaftif &amp; Inovatif</h1>
                            <h4>Bagi kami kreativitas merupakan gerbang masa depan.<br> kreativitas akan mendorong inovasi. <br> Itulah yang kami lakukan.</h4>
                            <div class="slider-btn">
                                <a href="<?php echo site_url('artikel');?>" class="btn btn-default">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider-2.jpg'?>" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Guru Bekualitas Tinggi</h1>
                            <h4>Guru merupakan faktor penting dalam proses belajar-mengajar.<br> Itulah kenapa kami mendatangkan guru-guru <br>terbaik dari berbagai penjuru.</h4>
                            <div class="slider-btn">
                                <a href="<?php echo site_url('guru');?>" class="btn btn-default">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!--//END HEADER -->
<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <h2>Welcome</h2>
               <p>Kami Menyambut baik terbitnya Website SDI Nurul Karimah yang baru , dengan harapan dipublikasinya website ini sekolah berharap : Peningkatan layanan pendidikan kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat. </p>

            </div>
            <div class="col-md-4">
                <img src="<?php echo base_url().'theme/images/welcome.png'?>" class="img-fluid about-img" alt="#">
            </div>
        </div>
    </div>
</section>
<!--//END ABOUT -->
<!--============================= OUR COURSES =============================-->
<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Artikel Terbaru</h2>
            </div>
        </div>
        <div class="row">
          <?php foreach ($berita->result() as $row) :?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="courses_box mb-4">
                    <div class="course-img-wrap">
                        <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="courses-img">
                    </div>
                    <!-- // end .course-img-wrap -->
                    <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="course-box-content">
                        <h3 style="text-align:center;"><?php echo $row->tulisan_judul;?></h3>
                    </a>
                </div>
            </div>
          <?php endforeach;?>
        </div> <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('artikel');?>" class="btn btn-default btn-courses">View More</a>
            </div>
        </div>
    </div>
</section>
<!--//END OUR COURSES -->
<!--============================= Table Jadwal Dokter EVENTS =============================-->

<!--============================= DETAILED CHART =============================-->
<div class="detailed_chart">
        <div class="container">
            <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
                    <div class="chart-img">
                        <img src="<?php echo base_url().'theme/images/chart-icon_1.png'?>" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter"><?php echo $tot_dokter;?></span> Dokter
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 chart_top">
                    <div class="chart-img">
                        <img src="<?php echo base_url().'theme/images/chart-icon_3.png'?>" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_agenda;?></span> Jadwal Dokter</p>
                    </div>
                </div>
            </div>
        </div>
</div>
    <!--//END DETAILED CHART -->
<!--//END EVENTS -->
<!--============================= FOOTER =============================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                   <!--  <a href="<?php echo site_url();?>">
                        <img src="<?php echo base_url().'theme/images/logo-white.png'?>" class="img-fluid" alt="footer_logo">
                    </a> -->
                    <p><?php echo date('Y');?> © copyright by Sabil Medika <br>All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a href="<?php echo site_url();?>">Home</a></li>
                            <li><a href="<?php echo site_url('about');?>">About</a></li>
                            <li><a href="<?php echo site_url('artikel');?>">Berita </a></li>
                            <li><a href="<?php echo site_url('contact');?>">Contact</a></li>
                            <li><a href="<?php echo base_url().'admin/login'?>">Login</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="sitemap">
                      <h3>Info</h3>
                      <ul>
                          <li><a href="<?php echo site_url('dokter');?>">Guru</a></li>
                          <li><a href="<?php echo site_url('agenda');?>">Jadwal Dokter</a></li>
                      </ul>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span>Tigaraksa</p>
                        <p>Phone : (021) 5991735</p>
                            <ul class="footer-social-icons">
                                <li><a href="https://www.linkedin.com/in/muhammad-syaiful-karim-388a29150/"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--//END FOOTER -->
        <!-- Modal Tambah -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Pendaftaran Pasien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" action="<?php echo base_url().'home/simpan_pasien'?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label for="inputUserName" class="col-form-label">Nama:</label>
                    <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama anda" required>
                </div>
                <div class="form-group">
                    <label for="inputUserName" class="col-form-label">Jenis Kelamin:</label>
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
                    <label for="inputUserName" class="col-form-label">Alamat:</label>
                    <input type="text" name="xalamat" class="form-control" id="inputUserName" placeholder="Alamat" required>
                </div>
                <div class="form-group">
                    <label for="inputUserName" class="col-form-label">No HP/WhatsApp:</label>
                    <input type="text" name="xwa" class="form-control" id="inputUserName" placeholder="No Wa: 6289123123" required>
                </div>
                <div class="form-group">
                    <label for="inputUserName" class="col-form-label">Nama Dokter:</label>
                    <select class="form-control" name="xdokter" style="width: 100%;" required>
                    <option value="">-Pilih-</option>
                        <?php
                        $no=0;
                        foreach ($dok->result_array() as $a) :
                            $no++;
                                    $dok_id=$a['dokter_id'];
                                    $dok_nama=$a['dokter_nama'];
                                    $dok_specialist=$a['dokter_specialist'];
                                ?>
                            <option value="<?php echo $dok_id;?>"><?php echo $dok_nama.'&nbsp&nbsp&nbsp ('.$dok_specialist;?>)</option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputUserName" class="col-form-label">Keterangan:</label>
                    <textarea class="form-control" name="xket" rows="2" placeholder="Keterangan ..."></textarea>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
            </div>
        </div>
        </div>
        <!-- End Modal Tambah -->
        <!-- jQuery, Bootstrap JS. -->
        <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
        <!-- jQuery 2.2.3 -->
        <script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script> 
        <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
        <!-- DataTables -->
        <script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
        <!-- Plugins -->
        <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
        <!-- Subscribe -->
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <!-- Script JS -->
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>

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
                                text: "Data Berhasil disimpan. tunggu ada notifikasi WA dari kami, Terimakasih",
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
            <script>$('#myModal').modal(options)</script>
            </body>

    </html>
