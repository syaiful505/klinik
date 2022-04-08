<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Agenda</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Calendar Css -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/fullcalendar.min.css'?>" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
</head>

<body>
  <!--============================= HEADER =============================-->
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
<!--//END HEADER -->
<!--============================= EVENTS =============================-->
<section class="events">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="event-title">Jadwal Dokter</h2>
            </div>
            <div class="col-md-8">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item nav-tab1">
                        <a class="nav-link tab-list active" data-toggle="tab" href="#upcoming-events" role="tab">Agenda Terbaru </a>
                    </li>

                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="upcoming-events" role="tabpanel">
                <div class="box-body">    
                <table id="example1" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th style='width: 20rem'>Nama Dokter</th>
                            <th style='width: 20rem'>Specialist</th>
                            <th style='width: 20rem'>Tanggal</th>
                            <th style='width: 20rem'>Tempat</th>
                            <th style='width: 20rem'>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
					$no=0;
  					foreach ($data->result_array() as $i) :
  					   $no++;
                       $kode=$i['agenda_id'];
                       $agenda_mulai=$i['agenda_mulai'];
                       $agenda_selesai=$i['agenda_selesai'];
                       $agenda_tempat=$i['agenda_tempat'];
                       $agenda_waktu=$i['agenda_waktu'];
                       $agenda_keterangan=$i['agenda_keterangan'];
                       $agenda_author=$i['agenda_author'];
                       $tanggal=$i['tanggal'];
                       $agenda_dokter_id=$i['agenda_dokter_id'];
                       $agenda_dokter_nama=$i['dokter_nama'];
                       $agenda_dokter_specialist=$i['dokter_specialist'];
                    ?>
                            <tr>
                                <td><?php echo $agenda_dokter_nama;?></td>
                                <td><?php echo $agenda_dokter_specialist;?></td>
                                <td><?php echo $agenda_mulai.' s/d '.$agenda_selesai;?></td>
                                <td><?php echo $agenda_tempat;?></td>
                                <td><?php echo $agenda_waktu;?></td>
                            </tr>
                            <?php endforeach;?>
                            </tbody>
                    </table>
                    </div>
                <div class="col-md-12 text-center">
                    <?php echo $page;?>
                </div>
                </div>
            </div>
</div>
</section>
<!--//END EVENTS -->
<!--============================= FOOTER =============================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    
                    <p><?php echo date('Y');?> © copyright by Sabil Medika
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
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="sitemap">
                      <h3>Info</h3>
                      <ul>
                          <li><a href="<?php echo site_url('dokter');?>">Dokter</a></li>
                          <li><a href="<?php echo site_url('agenda');?>">Jadwal Dokter</a></li>
                      </ul>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span> Tigaraksa</p>
                        <p>Phone : (021) 5991735</p>
                        <ul class="footer-social-icons">
                        <li><a href="https://www.linkedin.com/in/muhammad-syaiful-karim-388a29150/"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
<!--                                        <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
-->                      </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--//END FOOTER -->
        <!-- jQuery, Bootstrap JS. -->
        <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
        <!-- Plugins -->
        <script src="<?php echo base_url().'theme/js/moment.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/fullcalendar.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
        <!-- Subscribe -->
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <!-- Script JS -->
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
    </body>

    </html>
