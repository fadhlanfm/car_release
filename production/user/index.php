<?php 
include ('check_session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="../../assets/gi.ico" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Beranda</title>

  <!-- jQuery -->
  <script src="../../vendors/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap -->
  <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- bootstrap-progressbar -->
  <link href="../../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="../../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

  <!-- Custom Theme Style -->
  <link href="../../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md" onload="setInterval('displayServerTime()', 1000);">

  <!-- QUERIES -->
  <?php
  include('../Connection/dbconn.php');

  $coba = $_SESSION['id'];
  $query2 = "SELECT * FROM user WHERE username = '$coba'";
        //execute the query
  $result2 = $db->query( $query2 );
  if (!$result2)
  {
    die("could not query the database: <br />".$db->error);
  }
  $row2 = $result2->fetch_object();
  $unit2 = $row2->unit;

  $query = "SELECT * FROM logbook JOIN unit WHERE start <= curdate() and end >= curdate() and unit.kode=logbook.kode_unit and logbook.kode_unit='$unit2'";
        //execute the query
  $result = $db->query( $query );
  $row = $result->fetch_object();
  
  if (!$result)
  {
    die("could not query the database: <br />".$db->error);
  }
 ?>

  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"> <span>Garuda Indonesia</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->


          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">

              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Beranda <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.php">Halaman Utama</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> CC Program <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="programs.php">Corporate Culture Program</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-cog"></i> Pengaturan<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="edit_username2.php">Ubah Username</a></li>
                    <li><a href="edit_password2.php">Ubah Password</a></li>
                  </ul>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav hidden-print">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="../images/img.jpg" alt=""><?php

                  echo''.$row2->username.'';
                  ?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="#" data-toggle="modal" data-target="#konfirmasi"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>
              <li role="presentation">
                <a href="javascript:window.print()">
                  <i class="fa fa-print"></i>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- Modal -->
      <div id="konfirmasi" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Logout</h4>
            </div>
            <div class="modal-body">
              <p>Anda Yakin ingin Logout</p>
            </div>
            <div class="modal-footer">
              <a href="../acc_logout.php"><button type="button" class="btn btn-default">Ya</button></a>
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            </div>
          </div>

        </div>
      </div>

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="row">

        <?php if(isset($row)){?>
          <!-- start of running program achievement -->
          <div class="col-md-12 col-sm-8 col-xs-12">
          <div class="title_left">
                    <h5>Selamat Datang <b><?php echo $_SESSION['nama']; ?></b>, di Culture Acceleration Report!</h5>
                    <h5>Culture Acceleration Report adalah program wajib setiap Unit PT Garuda Indonesia untuk mengaktualisasi budaya perusahaan</h5>
                    <h5>Buat program, tentukan goals, and let's FLY-HI! </h5>
                  </div>
                  <?php if (isset($_GET['pesan'])&& $_GET['pesan']==1) {
                     ?>
          <div class="x_content bs-example-popovers">
                        <div class="alert alert-success alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <strong> Username sukses diubah</strong>
                                  </div>
                      </div>
                      <?php } ?>
                  <?php if (isset($_GET['pesan'])&& $_GET['pesan']==2) {
                     ?>
          <div class="x_content bs-example-popovers">
                        <div class="alert alert-success alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <strong> Password sukses diubah</strong>
                                  </div>
                      </div>
                      <?php } ?>
                  <?php if (isset($_GET['pesan'])&& $_GET['pesan']==3) {
                     ?>
          <div class="x_content bs-example-popovers">
                        <div class="alert alert-success alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <strong> Program berhasil disubmit</strong>
                                  </div>
                      </div>
                      <?php } ?>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="x_panel tile">
                <div class="x_title">
                  <h2>Running Program Summary</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <!-- sini inininin -->
                  <table class="table table-striped table-bordered">
                      <tr>
                        <th>Kode Program</th>
                        <td><?php echo $row->id; ?></td>
                      </tr>
                      <tr>
                        <th>Nama Program</th>
                        <td><?php echo $row->nama_program;?></td>
                      </tr>
                      <tr>
                        <th>Periode Program <small>(YYYY-MM-DD)</small></th>
                        <td><?php echo $row->start.' s/d '.$row->end; ?></td>
                      </tr>
                  </table>

                  </br>

                  <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <td colspan="2" align="center"><strong>Merubah Perilaku</strong></td>
                        </tr>
                      </thead>
                      <tr>
                        <th>Tujuan</th>
                        <td><?php echo $row->tujuan_merubah_perilaku; ?></td>
                      </tr>
                      <tr>
                        <th>Target</th>
                        <td><ol>
                              <?php
                                if ($row->satuan_flyhi0==1) {
                                  $satuan_flyhi0="Rupiah";
                                }elseif ($row->satuan_flyhi0==2) {
                                  $satuan_flyhi0="Hari";
                                }elseif ($row->satuan_flyhi0==3) {
                                  $satuan_flyhi0="%";
                                }elseif ($row->satuan_flyhi0==4) {
                                  $satuan_flyhi0="Kali";
                                }

                                if ($row->satuan_flyhi1==1) {
                                  $satuan_flyhi1="Rupiah";
                                }elseif ($row->satuan_flyhi1==2) {
                                  $satuan_flyhi1="Hari";
                                }elseif ($row->satuan_flyhi1==3) {
                                  $satuan_flyhi1="%";
                                }elseif ($row->satuan_flyhi1==4) {
                                  $satuan_flyhi1="Kali";
                                }

                                if ($row->satuan_flyhi2==1) {
                                  $satuan_flyhi2="Rupiah";
                                }elseif ($row->satuan_flyhi2==2) {
                                  $satuan_flyhi2="Hari";
                                }elseif ($row->satuan_flyhi2==3) {
                                  $satuan_flyhi2="%";
                                }elseif ($row->satuan_flyhi2==4) {
                                  $satuan_flyhi2="Kali";
                                }

                                if ($row->satuan_flyhi3==1) {
                                  $satuan_flyhi3="Rupiah";
                                }elseif ($row->satuan_flyhi3==2) {
                                  $satuan_flyhi3="Hari";
                                }elseif ($row->satuan_flyhi3==3) {
                                  $satuan_flyhi3="%";
                                }elseif ($row->satuan_flyhi3==4) {
                                  $satuan_flyhi3="Kali";
                                }

                                if ($row->satuan_flyhi4==1) {
                                  $satuan_flyhi4="Rupiah";
                                }elseif ($row->satuan_flyhi4==2) {
                                  $satuan_flyhi4="Hari";
                                }elseif ($row->satuan_flyhi4==3) {
                                  $satuan_flyhi4="%";
                                }elseif ($row->satuan_flyhi4==4) {
                                  $satuan_flyhi4="Kali";
                                }

                                if ($row->target_flyhi0!=='') {
                                  echo '<li>'.$row->target_flyhi0.' '.$satuan_flyhi0.'</li>';
                                }if ($row->target_flyhi1!=='') {
                                  echo '<li>'.$row->target_flyhi1.' '.$satuan_flyhi1.'</li>';
                                }if ($row->target_flyhi2!=='') {
                                  echo '<li>'.$row->target_flyhi2.' '.$satuan_flyhi2.'</li>';
                                }if ($row->target_flyhi3!=='') {
                                  echo '<li>'.$row->target_flyhi3.' '.$satuan_flyhi3.'</li>';
                                }if ($row->target_flyhi4!=='') {
                                  echo '<li>'.$row->target_flyhi4.' '.$satuan_flyhi4.'</li>';
                                }
                              ?>
                            </ol>
                        </td>
                      </tr>
                  </table>

                  </br>

                  <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <td colspan="2" align="center"><strong>Nilai Tambah Untuk Perusahaan</strong></td>
                        </tr>
                      </thead>
                      <tr>
                        <th>Aktifitas</th>
                        <th>Target</td>
                      </tr>
                      <?php 
                        if ($row->satuan0==1) {
                          $satuan0="Rupiah";
                        }elseif ($row->satuan0==2) {
                          $satuan0="Hari";
                        }elseif ($row->satuan0==3) {
                          $satuan0="%";
                        }elseif ($row->satuan0==4) {
                          $satuan0="Kali";
                        }

                        if ($row->satuan1==1) {
                          $satuan1="Rupiah";
                        }elseif ($row->satuan1==2) {
                          $satuan1="Hari";
                        }elseif ($row->satuan1==3) {
                          $satuan1="%";
                        }elseif ($row->satuan1==4) {
                          $satuan1="Kali";
                        }

                        if ($row->satuan2==1) {
                          $satuan2="Rupiah";
                        }elseif ($row->satuan2==2) {
                          $satuan2="Hari";
                        }elseif ($row->satuan2==3) {
                          $satuan2="%";
                        }elseif ($row->satuan2==4) {
                          $satuan2="Kali";
                        }

                        if ($row->satuan3==1) {
                          $satuan3="Rupiah";
                        }elseif ($row->satuan3==2) {
                          $satuan3="Hari";
                        }elseif ($row->satuan3==3) {
                          $satuan3="%";
                        }elseif ($row->satuan3==4) {
                          $satuan3="Kali";
                        }

                        if ($row->satuan4==1) {
                          $satuan4="Rupiah";
                        }elseif ($row->satuan4==2) {
                          $satuan4="Hari";
                        }elseif ($row->satuan4==3) {
                          $satuan4="%";
                        }elseif ($row->satuan4==4) {
                          $satuan4="Kali";
                        }
                      ?>
                      <?php if ($row->aktifitas0!==''){?>
                      <tr>
                        <td><?php echo $row->aktifitas0; ?></td>
                        <td><?php echo $row->target0.' '.$satuan0; ?></td>
                      </tr>
                      <?php } ?>
                      <?php if ($row->aktifitas1!==''){?>
                      <tr>
                        <td><?php echo $row->aktifitas1; ?></td>
                        <td><?php echo $row->target1.' '.$satuan1; ?></td>
                      </tr>
                      <?php } ?>
                      <?php if ($row->aktifitas2!==''){?>
                      <tr>
                        <td><?php echo $row->aktifitas2; ?></td>
                        <td><?php echo $row->target2.' '.$satuan2; ?></td>
                      </tr>
                      <?php } ?>
                      <?php if ($row->aktifitas3!==''){?>
                      <tr>
                        <td><?php echo $row->aktifitas3; ?></td>
                        <td><?php echo $row->target3.' '.$satuan3; ?></td>
                      </tr>
                      <?php } ?>
                      <?php if ($row->aktifitas4!==''){?>
                      <tr>
                        <td><?php echo $row->aktifitas4; ?></td>
                        <td><?php echo $row->target4.' '.$satuan4; ?></td>
                      </tr>
                      <?php } ?>
                  </table>

                  </br>

                  <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <td colspan="2" align="center"><strong>Mendorong Tercapainya Kinerja Terbaik</strong></td>
                        </tr>
                      </thead>
                      <tr>
                        <th>Tujuan</th>
                        <th>Target</td>
                      </tr>
                      <?php if ($row->tujuan_capai_kinerja_0==1){?>
                      <tr>
                        <td><span class="fa fa-check-square-o"></span>&ensp;Financial</td>
                        <td><ol>
                              <?php
                                if ($row->target_financial0!=='') {
                                  echo '<li>'.$row->target_financial0.' '.$row->satuan_financial0.'</li>';
                                }if ($row->target_financial1!=='') {
                                  echo '<li>'.$row->target_financial1.' '.$row->satuan_financial1.'</li>';
                                }if ($row->target_financial2!=='') {
                                  echo '<li>'.$row->target_financial2.' '.$row->satuan_financial2.'</li>';
                                }if ($row->target_financial3!=='') {
                                  echo '<li>'.$row->target_financial3.' '.$row->satuan_financial3.'</li>';
                                }if ($row->target_financial4!=='') {
                                  echo '<li>'.$row->target_financial4.' '.$row->satuan_financial4.'</li>';
                                }
                              ?>
                            </ol></td>
                      </tr>
                      <?php }else{ ?>
                      <tr>
                        <td style="color:#DCDCDC"><span class="fa fa-check-square-o"></span>&ensp;Financial</td>
                        <td>-</td>
                      </tr>
                      <?php } ?>
                      <?php if ($row->tujuan_capai_kinerja_1==1){?>
                      <tr>
                        <td><span class="fa fa-check-square-o"></span>&ensp;Customer</td>
                        <td><ol>
                              <?php
                                if ($row->target_customer0!=='') {
                                  echo '<li>'.$row->target_customer0.' '.$row->satuan_customer0.'</li>';
                                }if ($row->target_customer1!=='') {
                                  echo '<li>'.$row->target_customer1.' '.$row->satuan_customer1.'</li>';
                                }if ($row->target_customer2!=='') {
                                  echo '<li>'.$row->target_customer2.' '.$row->satuan_customer2.'</li>';
                                }if ($row->target_customer3!=='') {
                                  echo '<li>'.$row->target_customer3.' '.$row->satuan_customer3.'</li>';
                                }if ($row->target_customer4!=='') {
                                  echo '<li>'.$row->target_customer4.' '.$row->satuan_customer4.'</li>';
                                }
                              ?>
                            </ol></td>
                      </tr>
                      <?php }else{ ?>
                      <tr>
                        <td style="color:#DCDCDC"><span class="fa fa-check-square-o"></span>&ensp;Customer</td>
                        <td>-</td>
                      </tr>
                      <?php } ?>
                      <?php if ($row->tujuan_capai_kinerja_2==1){?>
                      <tr>
                        <td><span class="fa fa-check-square-o"></span>&ensp;Internal Business Process</td>
                        <td><ol>
                              <?php
                                if ($row->target_ibp0!=='') {
                                  echo '<li>'.$row->target_ibp0.' '.$row->satuan_ibp0.'</li>';
                                }if ($row->target_ibp1!=='') {
                                  echo '<li>'.$row->target_ibp1.' '.$row->satuan_ibp1.'</li>';
                                }if ($row->target_ibp2!=='') {
                                  echo '<li>'.$row->target_ibp2.' '.$row->satuan_ibp2.'</li>';
                                }if ($row->target_ibp3!=='') {
                                  echo '<li>'.$row->target_ibp3.' '.$row->satuan_ibp3.'</li>';
                                }if ($row->target_ibp4!=='') {
                                  echo '<li>'.$row->target_ibp4.' '.$row->satuan_ibp4.'</li>';
                                }
                              ?>
                            </ol></td>
                      </tr>
                      <?php }else{ ?>
                      <tr>
                        <td style="color:#DCDCDC"><span class="fa fa-check-square-o"></span>&ensp;Internal Business Process</td>
                        <td>-</td>
                      </tr>
                      <?php } ?>
                      <?php if ($row->tujuan_capai_kinerja_3==1){?>
                      <tr>
                        <td><span class="fa fa-check-square-o"></span>&ensp;Learning & Growth</td>
                        <td><ol>
                              <?php
                                if ($row->target_lg0!=='') {
                                  echo '<li>'.$row->target_lg0.' '.$row->satuan_lg0.'</li>';
                                }if ($row->target_lg1!=='') {
                                  echo '<li>'.$row->target_lg1.' '.$row->satuan_lg1.'</li>';
                                }if ($row->target_lg2!=='') {
                                  echo '<li>'.$row->target_lg2.' '.$row->satuan_lg2.'</li>';
                                }if ($row->target_lg3!=='') {
                                  echo '<li>'.$row->target_lg3.' '.$row->satuan_lg3.'</li>';
                                }if ($row->target_lg4!=='') {
                                  echo '<li>'.$row->target_lg4.' '.$row->satuan_lg4.'</li>';
                                }
                              ?>
                            </ol></td>
                      </tr>
                      <?php }else{ ?>
                      <tr>
                        <td style="color:#DCDCDC"><span class="fa fa-check-square-o"></span>&ensp;Learning & Growth</td>
                        <td>-</td>
                      </tr>
                      <?php } ?>
                  </table>

                </div>
              </div>
            </div>
            <?php }else{?>
            <div class="col-md-12 col-sm-8 col-xs-12">
            <div class="title_left">
                    <h5>Selamat Datang <b><?php echo $_SESSION['nama']; ?></b>, di Culture Acceleration Report!</h5>
                    <h5>Culture Acceleration Report adalah program wajib setiap Unit PT Garuda Indonesia untuk mengaktualisasi budaya perusahaan</h5>
                    <h5>Buat program, tentukan goals, and let's FLY-HI! </h5>
                  </div>
              <div class="x_panel">

                <div class="x_title">

                  
                  <h2 align="center">Unit Belum Mempunyai Program Aktif</h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content" align="center">
                  <a href="programs.php"><button class="btn btn-primary btn-xs" style="padding: 10px 100px"><strong>&ensp;Cek Disini</strong></button></a>
                </div>
              </div>
            </div>
            <?php } ?>

            <?php if (isset($row)) { ?>
            <!-- start of recent evaluation -->
            <div class="col-md-6 col-sm-8 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Recent Evaluation</h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">

                    <ul class="list-unstyled timeline widget">
                      <?php
                        if ($row->komentar !== '') {
                          ?>
                          <li>
                            <div class="block">
                              <div class="block_content">
                                <h2 class="title">
                                  <a href="lihat_logbook.php%20?id=<?php echo $row->id ?>"><?php echo $row->nama_program ?></a>
                                </h2>
                                <div class="byline">
                                  by <a>Admin</a>
                                </div>
                                <p class="excerpt">
                                  <?php echo $row->komentar ?>
                                </p>
                              </div>
                            </div>
                          </li>
                          <?php
                        }else{
                      ?>
                      <li>
                            <div class="block">
                              <div class="block_content">
                                <h2 class="title">
                                  <a href="lihat_logbook.php%20?id=<?php echo $row->id ?>"><?php echo $row->nama_program ?></a>
                                </h2>
                                <div class="byline">
                                  by <a>Admin</a>
                                </div>
                                <p class="excerpt">
                                  Tidak Ada Evaluasi
                                </p>
                              </div>
                            </div>
                          </li>
                          <?php } ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <?php }   else{ ?>
            <!-- start of recent evaluation -->
            <div class="col-md-12 col-sm-8 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Evaluation</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <a>Tidak Ada</a>
                </div>
              </div>
            </div>
            <?php } ?>
            <!-- end of recent evaluation -->
          </div>
          <!-- end of running program achievement -->

          

        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

<!-- footer content -->
<footer class="hidden-print">
  <div class="pull-right">
    Corporate Culture Information Systems - GA
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="../../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../../vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="../../vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="../../vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../../vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="../../vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="../../vendors/Flot/jquery.flot.js"></script>
<script src="../../vendors/Flot/jquery.flot.pie.js"></script>
<script src="../../vendors/Flot/jquery.flot.time.js"></script>
<script src="../../vendors/Flot/jquery.flot.stack.js"></script>
<script src="../../vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="../../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="../../vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="../../vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="../../vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="../../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../js/moment/moment.min.js"></script>
<script src="../js/datepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="../../build/js/custom.min.js"></script>

<!-- Flot -->
<script>
  $(document).ready(function() {
    var data1 = [
    [gd(2012, 1, 1), <?php echo $cek1;?>],
    [gd(2012, 2, 2), <?php echo $cek2;?>],
    [gd(2012, 3, 3), <?php echo $cek3;?>],
    [gd(2012, 4, 4), 65530],
    [gd(2012, 5, 5), 43356],
    [gd(2012, 6, 6), 54689]
    ];

    var data2 = [
    [gd(2012, 1, 1), 10000],
    [gd(2012, 2, 2), 30000],
    [gd(2012, 3, 3), 50000],
    [gd(2012, 4, 4), 35000],
    [gd(2012, 5, 5), 20000],
    [gd(2012, 6, 6), 60000]
    ];
    $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
      data1, data2
      ], {
        series: {
          lines: {
            show: false,
            fill: true
          },
          splines: {
            show: true,
            tension: 0.4,
            lineWidth: 1,
            fill: 0.4
          },
          points: {
            radius: 0,
            show: true
          },
          shadowSize: 2
        },
        grid: {
          verticalLines: true,
          hoverable: true,
          clickable: true,
          tickColor: "#d5d5d5",
          borderWidth: 1,
          color: '#fff'
        },
        colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
        xaxis: {
          tickColor: "rgba(51, 51, 51, 0.06)",
          mode: "time",
          tickSize: [1, "month"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: false
        });

    function gd(year, month, day) {
      return new Date(year, month - 1, day).getTime();
    }
  });
</script>
<!-- /Flot -->

<!-- JQVMap -->
<script>
  $(document).ready(function(){
    $('#world-map-gdp').vectorMap({
      map: 'world_en',
      backgroundColor: null,
      color: '#ffffff',
      hoverOpacity: 0.7,
      selectedColor: '#666666',
      enableZoom: true,
      showTooltip: true,
      values: sample_data,
      scaleColors: ['#E6F2F0', '#149B7E'],
      normalizeFunction: 'polynomial'
    });
  });
</script>
<!-- /JQVMap -->

<!-- Skycons -->
<script>
  $(document).ready(function() {
    var icons = new Skycons({
      "color": "#73879C"
    }),
    list = [
    "clear-day", "clear-night", "partly-cloudy-day",
    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
    "fog"
    ],
    i;

    for (i = list.length; i--;)
      icons.set(list[i], list[i]);

    icons.play();
  });
</script>
<!-- /Skycons -->

<!-- Doughnut Chart -->
<script>
  $(document).ready(function(){
    var options = {
      legend: false,
      responsive: false
    };

    new Chart(document.getElementById("canvas1"), {
      type: 'doughnut',
      tooltipFillColor: "rgba(51, 51, 51, 0.55)",
      data: {
        labels: [
        "Economy Class",
        "Business Class",
        "First Class"
        ],
        datasets: [{
          data: [3412, 768, 475],
          backgroundColor: [
          "#9B59B6",
          "#26B99A",
          "#3498DB"
          ],
          hoverBackgroundColor: [
          "#B370CF",
          "#36CAAB",
          "#49A9EA"
          ]
        }]
      },
      options: options
    });
  });
</script>
<!-- /Doughnut Chart -->

<!-- bootstrap-daterangepicker -->
<script>
  $(document).ready(function() {

    var cb = function(start, end, label) {
      console.log(start.toISOString(), end.toISOString(), label);
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    };

    var optionSet1 = {
      startDate: moment().subtract(29, 'days'),
      endDate: moment(),
      minDate: '01/01/2012',
      maxDate: '12/31/2015',
      dateLimit: {
        days: 60
      },
      showDropdowns: true,
      showWeekNumbers: true,
      timePicker: false,
      timePickerIncrement: 1,
      timePicker12Hour: true,
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      opens: 'left',
      buttonClasses: ['btn btn-default'],
      applyClass: 'btn-small btn-primary',
      cancelClass: 'btn-small',
      format: 'MM/DD/YYYY',
      separator: ' to ',
      locale: {
        applyLabel: 'Submit',
        cancelLabel: 'Clear',
        fromLabel: 'From',
        toLabel: 'To',
        customRangeLabel: 'Custom',
        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        firstDay: 1
      }
    };
    $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    $('#reportrange').daterangepicker(optionSet1, cb);
    $('#reportrange').on('show.daterangepicker', function() {
      console.log("show event fired");
    });
    $('#reportrange').on('hide.daterangepicker', function() {
      console.log("hide event fired");
    });
    $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
      console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
    });
    $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
      console.log("cancel event fired");
    });
    $('#options1').click(function() {
      $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
    });
    $('#options2').click(function() {
      $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
    });
    $('#destroy').click(function() {
      $('#reportrange').data('daterangepicker').remove();
    });
  });
</script>
<!-- /bootstrap-daterangepicker -->

<!-- gauge.js -->
<script>
  var opts = {
    lines: 12,
    angle: 0,
    lineWidth: 0.4,
    pointer: {
      length: 0.75,
      strokeWidth: 0.042,
      color: '#1D212A'
    },
    limitMax: 'false',
    colorStart: '#1ABC9C',
    colorStop: '#1ABC9C',
    strokeColor: '#F0F3F3',
    generateGradient: true
  };
  var target = document.getElementById('foo'),
  gauge = new Gauge(target).setOptions(opts);

  gauge.maxValue = 6000;
  gauge.animationSpeed = 32;
  gauge.set(3200);
  gauge.setTextField(document.getElementById("gauge-text"));
</script>
<!-- /gauge.js -->

<script type="text/javascript">
    //set timezone
    <?php date_default_timezone_set('Asia/Jakarta'); ?>
    //buat object date berdasarkan waktu di server
    var serverTime = new Date(<?php print date('Y, m, d, H, i, s, 0'); ?>);
    //buat object date berdasarkan waktu di client
    var clientTime = new Date();
    //hitung selisih
    var Diff = serverTime.getTime() - clientTime.getTime();    
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function displayServerTime(){
        //buat object date berdasarkan waktu di client
        var clientTime = new Date();
        //buat object date dengan menghitung selisih waktu client dan server
        var time = new Date(clientTime.getTime() + Diff);
        //ambil nilai jam
        var sh = time.getHours().toString();
        //ambil nilai menit
        var sm = time.getMinutes().toString();
        //ambil nilai detik
        var ss = time.getSeconds().toString();
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
      }
    </script>

  </body>
  </html>
