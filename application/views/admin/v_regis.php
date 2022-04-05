<!--Counter Inbox-->
<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sabil Clinic | Data Booking</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'theme/images/Icon.png'?>">
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



</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <?php
    $this->load->view('admin/v_header');
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu Utama</li>
        <li>
          <a href="<?php echo base_url().'admin/dashboard'?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Pasien Booking</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/regis'?>"><i class="fa fa-star-o"></i>Pendaftaran Pasien</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url().'admin/inbox'?>">
            <i class="fa fa-envelope"></i> <span>Inbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php echo $jum_pesan;?></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'admin/komentar'?>">
            <i class="fa fa-comments"></i> <span>Komentar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php echo $jum_comment;?></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url().'admin/agenda'?>">
            <i class="fa fa-calendar"></i> <span>Jadwal Dokter</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'admin/dokter'?>">
            <i class="fa fa-user-md"></i> <span>Data Dokter</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Berita</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/tulisan'?>"><i class="fa fa-list"></i> List Berita</a></li>
            <li class="active"><a href="<?php echo base_url().'admin/tulisan/add_tulisan'?>"><i class="fa fa-thumb-tack"></i> Post Berita</a></li>
            <li><a href="<?php echo base_url().'admin/kategori'?>"><i class="fa fa-wrench"></i> Kategori</a></li>
          </ul>
        </li>
      
        <li>
          <a href="<?php echo base_url().'admin/pengguna'?>">
            <i class="fa fa-users"></i> <span>Pengguna</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
         <li>
          <a href="<?php echo base_url().'admin/login/logout'?>">
            <i class="fa fa-sign-out"></i> <span>Sign Out</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Calon Pasien (Booking)
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Data</a>
              <a class="btn btn-primary btn-flat" target="_blank"href="cetak"><span class="fa fa-print"></span> Excel</a>
            </div>
            
            <!-- /.box-header -->
            <!-- /.box-header -->
            <div class="box-body">
                  <table id="example1" class="table table-striped" style="font-size:13px;">
                    <thead>
                    <tr>
                        <th>Tanggal Daftar</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Ke Dokter</th>
                        <th>Specialist</th>
                        <th>No WhatsApp</th>
                        <th>Keterangan</th>
                        <th style="text-align:right;">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                        $no=0;
                        foreach ($data->result_array() as $i) :
                            $no++;
                            $kode=$i['pasiennew_id'];
                            $pasien_nama=$i['pasiennew_nama'];
                            $pasien_jenkel=$i['pasiennew_jenkel'];
                            $pasien_alamat=$i['pasiennew_alamat'];
                            $pasien_dokter_id=$i['pasiennew_dokter_id'];
                            $pasien_dokter_nama=$i['dokter_nama'];
                            $pasien_dokter_specialist=$i['dokter_specialist'];
                            $tanggal=$i['pasiennew_tgl_input'];
                            $pasien_wa=$i['pasiennew_wa'];
                            $pasien_ket=$i['pasiennew_ket'];
                        ?>
                    <tr>
                      <td><?php echo $tanggal;?></td>
                      <td><?php echo $pasien_nama;?></td>
                      <?php if($pasien_jenkel=='L'):?>
                      <td>Laki-Laki</td>
                      <?php else:?>
                      <td>Perempuan</td>
                      <?php endif;?>
                      <td><?php echo $pasien_alamat;?></td>
                      <td><?php echo $pasien_dokter_nama;?></td>
                      <td><?php echo $pasien_dokter_specialist;?></td>
                      <td><?php echo $pasien_wa;?></td>
                      <td><?php echo $pasien_ket;?></td>
                      <td style="text-align:right;">
                            <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $kode;?>"><span class="fa fa-pencil"></span></a>
                            <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $kode;?>"><span class="fa fa-trash"></span></a>
                      </td>                    
                    </tr>
            <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2022.Sabil.Clinic.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!--Modal Add Pengguna-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">DAFTAR</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url().'admin/regis/simpan_pasien'?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
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
                      <label for="inputUserName" class="col-sm-4 control-label">Alamat</label>
                      <div class="col-sm-7">
                          <input type="text" name="xalamat" class="form-control" id="inputUserName" placeholder="Alamat" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputUserName" class="col-sm-4 control-label">Nama Dokter</label>
                      <div class="col-sm-7">
                        <select class="form-control" name="xdokter" style="width: 100%;" required>
                            <option value="">-Pilih-</option>
                            <?php
                            $no=0;
                            foreach ($dok->result_array() as $a) :
                                $no++;
                                          $dok_id=$a['dokter_id'];
                                          $dok_nama=$a['dokter_nama'];

                                      ?>
                                  <option value="<?php echo $dok_id;?>"><?php echo $dok_nama;?></option>
                            <?php endforeach;?>
                        </select>
                      </div>
                  </div>
                  <!--<div class="form-group">
                      <label for="inputUserName" class="col-sm-4 control-label">Nama Dokter</label>
                      <div class="col-sm-7">
                        
                      </div>
                  </div>-->
                  <div class="form-group">
                      <label for="inputUserName" class="col-sm-4 control-label">No WhatsApp/HP</label>
                      <div class="col-sm-7">
                          <input type="text" name="xwa" class="form-control" id="inputUserName" placeholder="Contoh: 628979817173" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputUserName" class="col-sm-4 control-label">Keterangan</label>
                      <div class="col-sm-7">
                        <textarea class="form-control" name="xket" rows="2" placeholder="Keterangan ..."></textarea>
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

  <!--Modal Edit Regis-->
  <?php foreach ($data->result_array() as $i) :
        $kode=$i['pasiennew_id'];
        $pasien_nama=$i['pasiennew_nama'];
        $pasien_jenkel=$i['pasiennew_jenkel'];
        $pasien_alamat=$i['pasiennew_alamat'];
        $pasien_dokter_id=$i['pasiennew_dokter_id'];
        $pasien_dokter_nama=$i['dokter_nama'];
        $pasien_dokter_specialist=$i['dokter_specialist'];
        $tanggal=$i['pasiennew_tgl_input'];
        $pasien_wa=$i['pasiennew_wa'];
        $pasien_ket=$i['pasiennew_ket'];
      ?>
        <div class="modal fade" id="ModalEdit<?php echo $kode;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Pasien</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/regis/update_pasien'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                          <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                          <div class="col-sm-7">
                              <input type="text" name="xnama" value="<?php echo $pasien_nama;?>" class="form-control" id="inputUserName" placeholder="Nama" required>
                          </div>
                        </div>
                        <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                              <div class="col-sm-7">
                                <?php if($pasien_jenkel=='L'):?> 
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
                            <label for="inputUserName" class="col-sm-4 control-label">Alamat</label>
                            <div class="col-sm-7">
                                <input type="text" name="xalamat" value="<?php echo $pasien_alamat;?>" class="form-control" id="inputUserName" placeholder="Alamat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama Dokter</label>
                            <div class="col-sm-7">
                              <select class="form-control" name="xdokter" style="width: 100%;" required>
                                  <option value="">-Pilih-</option>
                                  <?php
                                      foreach ($dok->result_array() as $a) {
                                        $dok_id=$a['dokter_id'];
                                        $dok_nama=$a['dokter_nama'];
                                        if($agenda_dokter_id==$dok_id)
                                            echo "<option value='$dok_id' selected>$dok_nama</option>";
                                        else
                                            echo "<option value='$dok_id'>$dok_nama</option>";
                                      }?>
                              </select>
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama Dokter</label>
                            <div class="col-sm-7">
                              
                            </div>
                        </div>-->
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">No WhatsApp/HP</label>
                            <div class="col-sm-7">
                                <input type="text" name="xwa" value="<?php echo $pasien_wa;?>" class="form-control" id="inputUserName" placeholder="Contoh: 628979817173" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Keterangan</label>
                            <div class="col-sm-7">
                              <textarea class="form-control" name="xket" value="<?php echo $pasien_ket;?>" rows="2" placeholder="Keterangan ..."></textarea>
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
	<!--Modal Hapus Regis-->

	<?php foreach ($data->result_array() as $i) :
    $kode=$i['pasiennew_id'];
    $pasien_nama=$i['pasiennew_nama'];
    $pasien_jenkel=$i['pasiennew_jenkel'];
    $pasien_alamat=$i['pasiennew_alamat'];
    $pasien_dokter_id=$i['pasiennew_dokter_id'];
    $pasien_dokter_nama=$i['dokter_nama'];
    $tanggal=$i['tanggal'];
    $pasien_wa=$i['pasiennew_wa'];
    $pasien_ket=$i['pasiennew_ket'];
  ?>
	<!--Modal Hapus Pengguna-->
  <div class="modal fade" id="ModalHapus<?php echo $kode;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                  <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url().'admin/regis/hapus_pasien'?>" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <input type="hidden" name="kode" value="<?php echo $kode;?>"/>
                      <p>Apakah Anda yakin mau menghapus Data <b><?php echo $pasien_nama;?></b> ?</p>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
              </div>
              </form>
          </div>
      </div>
  </div>
	<?php endforeach;?>



<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
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
