<!-- QUERIES -->
<?php
session_start();
include_once('../connect_db.php');
$id = $_GET['id'];
$query = "SELECT * FROM logbook WHERE id = '$id'";
  //execute the query
$result = $db->query( $query );
if (!$result)
{
  die("could not query the database: <br />".$db->error);
}
$row = $result->fetch_object();

$coba = $_SESSION['id'];
$query2 = "SELECT * FROM user WHERE username = '$coba'";
    //execute the query
$result2 = $db->query( $query2 );
if (!$result2)
{
  die("could not query the database: <br />".$db->error);
}
$row2 = $result2->fetch_object();
?>

 <?php
if(isset($_SESSION['role']) && $_SESSION['role'] == -1)
{ 

} else if (isset($_SESSION['role']) && $_SESSION['role'] == 0) {
  header ('Location: ../../page_403.php');
  exit;
} else if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
  header ('Location: ../../page_403.php');
  exit;
}
else
{
  header ('Location: ../../page_4033.php');
  exit;

}

if ($row->status_res==0) {
  $message = "Unit ".$row->kode_unit." belum input hasil untuk program ini";
        echo "<script type='text/javascript'>alert('$message');
        window.location = 'form_ended.php';
        </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="../../assets/gi.ico" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Lihat Hasil</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- bootstrap-progressbar -->
  <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" />

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md" onload="setInterval('displayServerTime()', 1000);">


  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><span>Garuda Indonesia</span></a>
          </div>

          <div class="clearfix"></div>



<!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Beranda <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.php">Overall</a></li>
                    <li><a href="ucharts_JKTDZ.php">JKTDZ - President & CEO</a></li>
                    <li><a href="ucharts_JKTDI.php">JKTDI - Human Capital & Corporate Affairs</a></li>
                    <li><a href="ucharts_JKTDF.php">JKTDF - Finance & Risk Management</a></li>
                    <li><a href="ucharts_JKTDG.php">JKTDG - Cargo</a></li>
                    <li><a href="ucharts_JKTDO.php">JKTDO - Operations </a></li>
                    <li><a href="ucharts_JKTDE.php">JKTDE - Maintenance & Information Technology</a></li>
                    <li><a href="ucharts_JKTDC.php">JKTDC - Services</a></li>
                    <li><a href="ucharts_JKTDN.php">JKTDN - Commercial</a>
                      <li><a>JKTDN - Commercial (Branch Offices)<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu"><a href="bcharts_MESAM.php">MESAM - Sumatera Region</a>
                          </li>
                          <li><a href="bcharts_JKTAM.php">JKTAM - Jakarta Raya Region</a>
                          </li><li><a href="bcharts_SUBAM.php">SUBAM - Jawa, Bali, Nusa Tenggara Region</a>
                        </li><li><a href="bcharts_UPGAM.php">UPGAM - Kalimantan, Sulawesi, Papua Region</a>
                      </li><li><a href="bcharts_SINAM.php">SINAM - Asia Region</a>
                    </li><li><a href="bcharts_TYOAM.php">TYOAM - Japan & Korea Region</a>
                  </li><li><a href="bcharts_SHAAM.php">SHAAM - China Region</a>
                </li><li><a href="bcharts_SYDAM.php">SYDAM - South West Pacific Region</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a><i class="fa fa-tasks"></i> Lihat Program <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="show_form.php">Semua Program</a></li>
          <li><a href="form_unstarted.php">Program akan dilaksanakan</a></li>
          <li><a href="form_running.php">Program sedang berjalan</a></li>
          <li><a href="form_ended.php">Program telah terlaksana</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-user"></i> Manajemen User <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="user_management.php">Daftar User</a></li>
          <li><a href="admin_management.php">Daftar Admin</a></li>
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
            <img src="images/img.jpg" alt=""><?php echo''.$row2->username.''; ?>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="acc_logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="x_panel">
          <div class="x_title">
            <h2>Lihat Hasil </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a><button class="btn btn-primary btn-xs" id="clickme">Lihat Evaluasi</button></a>
              </li>
              <li><a><button onclick="goBack()" class="btn btn-primary btn-xs">Kembali</button></a>
              </li>

            </ul>
            <div class="clearfix">
            </div>
          </div>
          <div class="x_content">
            <table class="table table-striped table-bordered">
              <tr>
                <th colspan="2" class="center"><h4>Deskripsi Program</h4></th>
              </tr>
              <tr>
                <th>Kode Unik Log Book</th>
                <td><?php echo''.$row->id.'';?></td>
              </tr>
              <tr>
                <th>Kode Unit</th>
                <td><?php echo''.$row->kode_unit.'';?></td>
              </tr>
              <tr>
                <th>Nama Program</th>
                <td><?php echo''.$row->nama_program.'';?></td>
              </tr>
              <tr>
                <th>Deskripsi Program</th>
                <td><?php echo''.$row->deskripsi_program.'';?></td>
              </tr>
              <tr>
                <th>Start</th>
                <td><?php echo''.$row->start.'';?></td>
              </tr>   
              <tr>
                <th>End</th>
                <td><?php echo''.$row->end.'';?></td>
              </tr>
            </table>

            <!-- PRE -->
            <form action="post_hasil_logbook.php" method="POST">
                  <input readonly class="form-control" type="hidden" name="id" id="id" value="<?php echo $row->id ?>">
              
              <?php
              // aktivitas0
              if ($row->target_flyhi0!=='') {
                ?>
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_flyhi0;?>" class="form-control">
                   
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_flyhi0;?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_flyhi0" class="form-control" value="<?php $bandingg[]=$banding_flyhi0=$row->target_flyhi0/$row->hasil_flyhi0*100; echo $banding_flyhi0;?>">
                    
                  

                
                <?php 
              }
              // aktivitas0
              if ($row->target_flyhi1!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_flyhi1; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_flyhi1; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_flyhi1" class="form-control" value="<?php $bandingg[]=$banding_flyhi1=($row->target_flyhi1-$row->hasil_flyhi1)/$row->target_flyhi1*100; echo $banding_flyhi1;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_flyhi2!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_flyhi2; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_flyhi2; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_flyhi2" class="form-control" value="<?php $bandingg[]=$banding_flyhi2=($row->target_flyhi2-$row->hasil_flyhi2)/$row->target_flyhi2*100; echo $banding_flyhi2;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_flyhi3!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_flyhi3; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_flyhi3; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_flyhi3" class="form-control" value="<?php $bandingg[]=$banding_flyhi3=($row->target_flyhi3-$row->hasil_flyhi3)/$row->target_flyhi3*100; echo $banding_flyhi3;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_flyhi4!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_flyhi4; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_flyhi4; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_flyhi4" class="form-control" value="<?php $bandingg[]=$banding_flyhi4=($row->target_flyhi4-$row->hasil_flyhi4)/$row->target_flyhi4*100; echo $banding_flyhi4;?>">
                    
                  
                <hr>
                <?php 
              }
              // aktivitas0
              if ($row->aktifitas0!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->aktifitas0;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target0; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil0; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding0" class="form-control" value="<?php $bandingg[]=$banding0=$row->hasil0/$row->target0*100;; echo $banding0;?>">
                    
                  
                
                <?php 
              } 

              // aktivitas1
              if ($row->aktifitas1!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->aktifitas1;?>">

                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target1;?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil1; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding1" class="form-control" value="<?php $bandingg[]=$banding1=$row->hasil1/$row->target1*100;; echo $banding1;?>">
                    
                  
                 
                <?php  
              } 

              // aktivitas2
              if ($row->aktifitas2!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->aktifitas2;?>">

                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target2;?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil2; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding2" class="form-control" value="<?php $bandingg[]=$banding2=($row->hasil2-$row->target2)/$row->target2*100; echo $banding2;?>">
                    
                  
                 
                <?php  
              } 

              // aktivitas3
              if ($row->aktifitas3!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->aktifitas3;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target3;?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil3; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding3" class="form-control" value="<?php $bandingg[]=$banding3=($row->hasil3-$row->target3)/$row->target3*100; echo $banding3  ;?>">
                    
                  
                 
                <?php 
              } 

              // aktivitas4
              if ($row->aktifitas4!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->aktifitas4;?>">

                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target4;?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil4; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding4" class="form-control" value="<?php $bandingg[]=$banding4=($row->hasil4-$row->target4)/$row->target4*100; echo $banding4  ;?>">
                    
                  
                 <hr>
                <?php } ?>


                <!-- financial-->
                <?php if ($row->tujuan_capai_kinerja_0==1) { ?>
                
                    <input readonly type="hidden" class="form-control" value="Financial">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_financial0; ?>" class="form-control">
                   
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_financial0; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_financial0" class="form-control" value="<?php $bandingg[]=$banding_financial0=$row->hasil_financial0/$row->target_financial0*100; echo $banding_financial0;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_financial1!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_financial1; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_financial1; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_financial1" class="form-control" value="<?php $bandingg[]=$banding_financial1=($row->hasil_financial1-$row->target_financial1)/$row->target_financial1*100; echo $banding_financial1;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_financial2!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_financial2; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_financial2; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_financial2" class="form-control" value="<?php $bandingg[]=$banding_financial2=($row->hasil_financial2-$row->target_financial2)/$row->target_financial2*100; echo $banding_financial2;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_financial3!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_financial3; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_financial3; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_financial3" class="form-control" value="<?php $bandingg[]=$banding_financial3=($row->hasil_financial3-$row->target_financial3)/$row->target_financial3*100; echo $banding_financial3;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_financial4!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_financial4; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_financial4; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_financial4" class="form-control" value="<?php $bandingg[]=$banding_financial4=($row->hasil_financial4-$row->target_financial4)/$row->target_financial4*100; echo $banding_financial4;?>">
                    
                  
                
                <?php 
              } ?>
              <!-- financial-->

              <!-- customer -->
              <?php if ($row->tujuan_capai_kinerja_1==1) { ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="Customer">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_customer0; ?>" class="form-control">
                   
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_customer0; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_customer0" class="form-control" value="<?php $bandingg[]=$banding_customer0=($row->hasil_customer0-$row->target_customer0)/$row->target_customer0*100; echo $banding_customer0;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_customer1!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_customer1; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_customer1; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_customer1" class="form-control" value="<?php $bandingg[]=$banding_customer1=($row->hasil_customer1-$row->target_customer1)/$row->target_customer1*100; echo $banding_customer1;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_customer2!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_customer2; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_customer2; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_customer2" class="form-control" value="<?php $bandingg[]=$banding_customer2=($row->hasil_customer2-$row->target_customer2)/$row->target_customer2*100; echo $banding_customer2;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_customer3!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_customer3; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_customer3; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_customer3" class="form-control" value="<?php $bandingg[]=$banding_customer3=($row->hasil_customer3-$row->target_customer3)/$row->target_customer3*100; echo $banding_customer3;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_customer4!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_customer4; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_customer4; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_customer4" class="form-control" value="<?php $bandingg[]=$banding_customer4=($row->hasil_customer4-$row->target_customer4)/$row->target_customer4*100; echo $banding_customer4;?>">
                    
                  
                
                <?php 
              } ?>
              <!-- customer -->

              <!-- ibp -->
              <?php if ($row->tujuan_capai_kinerja_2==1) { ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="Internal Business Process">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_ibp0; ?>" class="form-control">
                   
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_ibp0; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_ibp0" class="form-control" value="<?php $bandingg[]=$banding_ibp0=($row->hasil_ibp0-$row->target_ibp0)/$row->target_ibp0*100; echo $banding_ibp0;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_ibp1!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_ibp1; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_ibp1; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_ibp1" class="form-control" value="<?php $bandingg[]=$banding_ibp1=($row->hasil_ibp1-$row->target_ibp1)/$row->target_ibp1*100; echo $banding_ibp1;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_ibp2!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_ibp2; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_ibp2; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_ibp2" class="form-control" value="<?php $bandingg[]=$banding_ibp2=($row->hasil_ibp2-$row->target_ibp2)/$row->target_ibp2*100; echo $banding_ibp2;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_ibp3!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_ibp3; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_ibp3; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_ibp3" class="form-control" value="<?php $bandingg[]=$banding_ibp3=($row->hasil_ibp3-$row->target_ibp3)/$row->target_ibp3*100; echo $banding_ibp3;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_ibp4!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_ibp4; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_ibp4; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_ibp4" class="form-control" value="<?php $bandingg[]=$banding_ibp4=($row->hasil_ibp4-$row->target_ibp4)/$row->target_ibp4*100; echo $banding_ibp4;?>">
                    
                  
                
                <?php 
              } ?>
              <!-- ibp -->

              <!-- lg -->
              <?php if ($row->tujuan_capai_kinerja_3==1) { ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="Learning & Growth">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_lg0; ?>" class="form-control">
                   
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_lg0; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_lg0" class="form-control" value="<?php $bandingg[]=$banding_lg0=($row->hasil_lg0-$row->target_lg0)/$row->target_lg0*100; echo $banding_lg0;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_lg1!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_lg1; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_lg1; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_lg1" class="form-control" value="<?php $bandingg[]=$banding_lg1=($row->hasil_lg1-$row->target_lg1)/$row->target_lg1*100; echo $banding_lg1;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_lg2!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_lg2; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_lg2; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_lg2" class="form-control" value="<?php $bandingg[]=$banding_lg2=($row->hasil_lg2-$row->target_lg2)/$row->target_lg2*100; echo $banding_lg2;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_lg3!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_lg3; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_lg3; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_lg3" class="form-control" value="<?php $bandingg[]=$banding_lg3=($row->hasil_lg3-$row->target_lg3)/$row->target_lg3*100; echo $banding_lg3;?>">
                    
                  
                
                <?php 
              }
              // aktivitas0
              if ($row->target_lg4!=='') {
                ?>
                
                  
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  
                  
                    
                      <input readonly type="hidden" id="target" value="<?php echo $row->target_lg4; ?>" class="form-control">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_lg4; ?>">
                    
                  
                  
                    
                      <input readonly type="hidden" id="target" name="banding_lg4" class="form-control" value="<?php $bandingg[]=$banding_lg4=($row->hasil_lg4-$row->target_lg4)/$row->target_lg4*100; echo $banding_lg4;?>">
                    
                  
                <?php 
              } ?>
              <!-- lg -->


      </form>
      <!-- PRE -->

      

            <!-- page content -->
      <div class="row">
        <div class="x_panel">
          <div class="x_title">
          </div>
          <div class="x_content">

              <!-- CHART overall -->
              <div class="col-md-12 col-sm-12 col-xs-14">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Overall</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="submitted" style="height:370px;"></div>
                  </div>
                  <div class="tile-stats">
                  <?php 
            $summary1=array_sum($bandingg)/sizeof($bandingg);
          ?>
                  <div class="count">Overall : <?php echo $summary1;?>% <?php if ($summary1<=100) {
                    echo "(Dalam skala 0 sampai 100)";
                  } elseif ($summary1>=100 && $summary1<500) {
                    echo "(Dalam skala 100 sampai 500)";
                  } elseif ($summary1>=500 && $summary1<100) {
                    echo "(Dalam skala 500 sampai 1000)";
                  }?></div>
                  
                </div>
                </div>
              </div>
            <!-- CHART overall -->

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
            ?>

          <h2 align="center"><strong>Rincian Hasil</strong></h2>
            <form action="post_hasil_logbook.php" method="POST">
                  <input readonly class="form-control" type="hidden" name="id" id="id" value="<?php echo $row->id ?>">
              </div>
              
              <?php
              // aktivitas0
              if ($row->target_flyhi0!=='') {
                ?>
                <h2>Merubah Perilaku</h2>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <label>Perilaku</label>
                    <input readonly type="text" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 1</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_flyhi0;?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan_flyhi0; ?></span>
                   </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 1</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_flyhi0;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan_flyhi0; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 1</label>
                      <input readonly type="text" id="target" name="banding_flyhi0" class="form-control" value="<?php $banding[]=$banding_flyhi0=$row->target_flyhi0/$row->hasil_flyhi0*100; echo $banding_flyhi0;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>

                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_flyhi1!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 2</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_flyhi1; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan_flyhi1; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 2</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_flyhi1; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan_flyhi1; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 2</label>
                      <input readonly type="text" id="target" name="banding_flyhi1" class="form-control" value="<?php $banding[]=$banding_flyhi1=($row->target_flyhi1-$row->hasil_flyhi1)/$row->target_flyhi1*100; echo $banding_flyhi1;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_flyhi2!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 3</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_flyhi2; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan_flyhi2; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 3</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_flyhi2; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan_flyhi2; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 3</label>
                      <input readonly type="text" id="target" name="banding_flyhi2" class="form-control" value="<?php $banding[]=$banding_flyhi2=($row->target_flyhi2-$row->hasil_flyhi2)/$row->target_flyhi2*100; echo $banding_flyhi2;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_flyhi3!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 4</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_flyhi3; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan_flyhi3; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 4</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_flyhi3; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan_flyhi3; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 4</label>
                      <input readonly type="text" id="target" name="banding_flyhi3" class="form-control" value="<?php $banding[]=$banding_flyhi3=($row->target_flyhi3-$row->hasil_flyhi3)/$row->target_flyhi3*100; echo $banding_flyhi3;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_flyhi4!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 5</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_flyhi4; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan_flyhi4; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 5</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_flyhi4; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan_flyhi4; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 5</label>
                      <input readonly type="text" id="target" name="banding_flyhi4" class="form-control" value="<?php $banding[]=$banding_flyhi4=($row->target_flyhi4-$row->hasil_flyhi4)/$row->target_flyhi4*100; echo $banding_flyhi4;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div><hr>
                <?php 
              }

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
              // aktivitas0
              if ($row->aktifitas0!=='') {
                ?>
                <h2>Nilai Tambah Untuk Perusahaan</h2>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <label>Aktifitas 1</label>
                    <input readonly type="text" class="form-control" value="<?php echo $row->aktifitas0;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 1</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target0; ?>" class="form-control">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan0; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 1</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil0; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan0; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 1</label>
                      <input readonly type="text" id="target" name="banding0" class="form-control" value="<?php $banding[]=$banding0=$row->hasil0/$row->target0*100; echo $banding0;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              } 

              // aktivitas1
              if ($row->aktifitas1!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <label>Aktifitas 2</label>
                    <input readonly type="text" class="form-control" value="<?php echo $row->aktifitas1;?>">

                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 2</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target1;?>" class="form-control">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan1; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil2">Hasil 2</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil1; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan1; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 2</label>
                      <input readonly type="text" id="target" name="banding1" class="form-control" value="<?php $banding[]=$banding1=$row->hasil1/$row->target1*100; echo $banding1;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div> 
                <?php  
              } 

              // aktivitas2
              if ($row->aktifitas2!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <label>Aktifitas 3</label>
                    <input readonly type="text" class="form-control" value="<?php echo $row->aktifitas2;?>">

                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 3</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target2;?>" class="form-control">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan2; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil3">Hasil 3</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil2; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan2; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 3</label>
                      <input readonly type="text" id="target" name="banding2" class="form-control" value="<?php $banding[]=$banding2=($row->hasil2-$row->target2)/$row->target2*100; echo $banding2;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div> 
                <?php  
              } 

              // aktivitas3
              if ($row->aktifitas3!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <label>Aktifitas 4</label>
                    <input readonly type="text" class="form-control" value="<?php echo $row->aktifitas3;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 4</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target3;?>" class="form-control">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan3; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil4">Hasil 4</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil3; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan3; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 4</label>
                      <input readonly type="text" id="target" name="banding3" class="form-control" value="<?php $banding[]=$banding3=($row->hasil3-$row->target3)/$row->target3*100; echo $banding3  ;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div> 
                <?php 
              } 

              // aktivitas4
              if ($row->aktifitas4!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <label>Aktifitas 5</label>
                    <input readonly type="text" class="form-control" value="<?php echo $row->aktifitas4;?>">

                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 5</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target4;?>" class="form-control">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan4; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil5">Hasil 5</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil4; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $satuan4; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 5</label>
                      <input readonly type="text" id="target" name="banding4" class="form-control" value="<?php $banding[]=$banding4=($row->hasil4-$row->target4)/$row->target4*100; echo $banding4  ;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div> <hr>
                <?php } ?>


                <!-- financial-->
                <?php if ($row->tujuan_capai_kinerja_0==1) { ?>
                <h2>Pendorong Tercapainya Kinerja Terbaik</h2>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <label>Kinerja</label>
                    <input readonly type="text" class="form-control" value="Financial">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 1</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_financial0; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_financial0; ?></span>
                   </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 1</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_financial0; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_financial0; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 1</label>
                      <input readonly type="text" id="target" name="banding_financial0" class="form-control" value="<?php $banding[]=$banding_financial0=$row->hasil_financial0/$row->target_financial0*100; echo $banding_financial0;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_financial1!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 2</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_financial1; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_financial1; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 2</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_financial1; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_financial1; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 2</label>
                      <input readonly type="text" id="target" name="banding_financial1" class="form-control" value="<?php $banding[]=$banding_financial1=($row->hasil_financial1-$row->target_financial1)/$row->target_financial1*100; echo $banding_financial1;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_financial2!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 3</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_financial2; ?>">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_financial2; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 3</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_financial2; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_financial2; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 3</label>
                      <input readonly type="text" id="target" name="banding_financial2" class="form-control" value="<?php $banding[]=$banding_financial2=($row->hasil_financial2-$row->target_financial2)/$row->target_financial2*100; echo $banding_financial2;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_financial3!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 4</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_financial3; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_financial3; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 4</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_financial3; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_financial3; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 4</label>
                      <input readonly type="text" id="target" name="banding_financial3" class="form-control" value="<?php $banding[]=$banding_financial3=($row->hasil_financial3-$row->target_financial3)/$row->target_financial3*100; echo $banding_financial3;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_financial4!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 5</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_financial4; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_financial4; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 5</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_financial4; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_financial4; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 5</label>
                      <input readonly type="text" id="target" name="banding_financial4" class="form-control" value="<?php $banding[]=$banding_financial4=($row->hasil_financial4-$row->target_financial4)/$row->target_financial4*100; echo $banding_financial4;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div><br>
                <?php 
              } ?>
              <!-- financial-->

              <!-- customer -->
              <?php if ($row->tujuan_capai_kinerja_1==1) { ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <label>Kinerja</label>
                    <input readonly type="text" class="form-control" value="Customer">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 1</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_customer0; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_customer0; ?></span>
                   </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 1</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_customer0; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_customer0; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 1</label>
                      <input readonly type="text" id="target" name="banding_customer0" class="form-control" value="<?php $banding[]=$banding_customer0=($row->hasil_customer0-$row->target_customer0)/$row->target_customer0*100; echo $banding_customer0;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_customer1!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 2</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_customer1; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_customer1; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 2</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_customer1; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_customer1; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 2</label>
                      <input readonly type="text" id="target" name="banding_customer1" class="form-control" value="<?php $banding[]=$banding_customer1=($row->hasil_customer1-$row->target_customer1)/$row->target_customer1*100; echo $banding_customer1;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_customer2!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 3</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_customer2; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_customer2; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 3</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_customer2; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_customer2; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 3</label>
                      <input readonly type="text" id="target" name="banding_customer2" class="form-control" value="<?php $banding[]=$banding_customer2=($row->hasil_customer2-$row->target_customer2)/$row->target_customer2*100; echo $banding_customer2;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_customer3!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 4</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_customer3; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_customer3; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 4</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_customer3; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_customer3; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 4</label>
                      <input readonly type="text" id="target" name="banding_customer3" class="form-control" value="<?php $banding[]=$banding_customer3=($row->hasil_customer3-$row->target_customer3)/$row->target_customer3*100; echo $banding_customer3;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_customer4!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 5</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_customer4; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_customer4; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 5</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_customer4; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_customer4; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 5</label>
                      <input readonly type="text" id="target" name="banding_customer4" class="form-control" value="<?php $banding[]=$banding_customer4=($row->hasil_customer4-$row->target_customer4)/$row->target_customer4*100; echo $banding_customer4;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div><br>
                <?php 
              } ?>
              <!-- customer -->

              <!-- ibp -->
              <?php if ($row->tujuan_capai_kinerja_2==1) { ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <label>Kinerja</label>
                    <input readonly type="text" class="form-control" value="Internal Business Process">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 1</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_ibp0; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_ibp0; ?></span>
                   </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 1</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_ibp0; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_ibp0; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 1</label>
                      <input readonly type="text" id="target" name="banding_ibp0" class="form-control" value="<?php $banding[]=$banding_ibp0=($row->hasil_ibp0-$row->target_ibp0)/$row->target_ibp0*100; echo $banding_ibp0;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_ibp1!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 2</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_ibp1; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_ibp1; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 2</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_ibp1; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_ibp1; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 2</label>
                      <input readonly type="text" id="target" name="banding_ibp1" class="form-control" value="<?php $banding[]=$banding_ibp1=($row->hasil_ibp1-$row->target_ibp1)/$row->target_ibp1*100; echo $banding_ibp1;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_ibp2!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 3</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_ibp2; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_ibp2; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 3</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_ibp2; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_ibp2; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 3</label>
                      <input readonly type="text" id="target" name="banding_ibp2" class="form-control" value="<?php $banding[]=$banding_ibp2=($row->hasil_ibp2-$row->target_ibp2)/$row->target_ibp2*100; echo $banding_ibp2;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_ibp3!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 4</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_ibp3; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_ibp3; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 4</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_ibp3; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_ibp3; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 4</label>
                      <input readonly type="text" id="target" name="banding_ibp3" class="form-control" value="<?php $banding[]=$banding_ibp3=($row->hasil_ibp3-$row->target_ibp3)/$row->target_ibp3*100; echo $banding_ibp3;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_ibp4!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 5</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_ibp4; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_ibp4; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 5</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_ibp4; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_ibp4; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 5</label>
                      <input readonly type="text" id="target" name="banding_ibp4" class="form-control" value="<?php $banding[]=$banding_ibp4=($row->hasil_ibp4-$row->target_ibp4)/$row->target_ibp4*100; echo $banding_ibp4;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div><br>
                <?php 
              } ?>
              <!-- ibp -->

              <!-- lg -->
              <?php if ($row->tujuan_capai_kinerja_3==1) { ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <label>Kinerja</label>
                    <input readonly type="text" class="form-control" value="Learning & Growth">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 1</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_lg0; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_lg0; ?></span>
                   </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 1</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_lg0; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_lg0; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 1</label>
                      <input readonly type="text" id="target" name="banding_lg0" class="form-control" value="<?php $banding[]=$banding_lg0=($row->hasil_lg0-$row->target_lg0)/$row->target_lg0*100; echo $banding_lg0;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_lg1!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 2</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_lg1; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_lg1; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 2</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_lg1; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_lg1; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 2</label>
                      <input readonly type="text" id="target" name="banding_lg1" class="form-control" value="<?php $banding[]=$banding_lg1=($row->hasil_lg1-$row->target_lg1)/$row->target_lg1*100; echo $banding_lg1;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_lg2!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 3</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_lg2; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_lg2; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 3</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_lg2; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_lg2; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 3</label>
                      <input readonly type="text" id="target" name="banding_lg2" class="form-control" value="<?php $banding[]=$banding_lg2=($row->hasil_lg2-$row->target_lg2)/$row->target_lg2*100; echo $banding_lg2;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_lg3!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 4</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_lg3; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_lg3; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 4</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_lg3; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_lg3; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 4</label>
                      <input readonly type="text" id="target" name="banding_lg3" class="form-control" value="<?php $banding[]=$banding_lg3=($row->hasil_lg3-$row->target_lg3)/$row->target_lg3*100; echo $banding_lg3;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div>
                <?php 
              }
              // aktivitas0
              if ($row->target_lg4!=='') {
                ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-xs-12">
                    <input readonly type="hidden" class="form-control" value="<?php echo $row->tujuan_merubah_perilaku;?>">
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="target1">Target 5</label>
                      <input readonly type="text" id="target" value="<?php echo $row->target_lg4; ?>" class="form-control">
                        <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_lg4; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Hasil 5</label>
                      <input readonly type="text" id="target" name="hasil_flyhi0" class="form-control" value="<?php echo $row->hasil_lg4; ?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo $row->satuan_lg4; ?></span>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-xs-12">
                    <div class="input-field col s6 has-feedback">
                      <label for="hasil1">Perbandingan 5</label>
                      <input readonly type="text" id="target" name="banding_lg4" class="form-control" value="<?php $banding[]=$banding_lg4=($row->hasil_lg4-$row->target_lg4)/$row->target_lg4*100; echo $banding_lg4;?>">
                      <span class="form-control-feedback right" aria-hidden="true" style="color: grey"><?php echo '%'; ?></span>
                    </div>
                  </div>
                </div><hr><br>
                <?php 
              } ?>
              <!-- lg -->

          
          <?php 
            $summary=array_sum($banding)/sizeof($banding);
          ?>

          </div>
        </div>
      </div>
      </form>
      <!-- /page content -->

          <br>
          <form action="post_komentar_logbook.php" method="POST">
          <input <input type="text" name="id" readonly value="<?php echo $row->id; ?>">
          <label for="deskripsi">Evaluasi Program</label>
          <div class="input-field col s12">
            <textarea id="deskripsi" class="form-control" placeholder="<?php if ($row->komentar!=='') {echo $row->komentar;} else {echo '';}?>" name="komentar" ></textarea>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
      <button type="submit" value="Submit" class="btn btn-success">Submit</button>
      </div>
          </form>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
      <div class="pull-right">
        Corporate Culture Information Systems - GA
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
</div>

<!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- ECharts -->
    <script src="../vendors/echarts/dist/echarts.min.js"></script>
    <script src="../vendors/echarts/map/js/world.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

<!-- Skycons -->
<script>
  function goBack() {
    window.history.back();
  }

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

  $(document).ready(function (){
    $("#clickme").click(function (){
      $('html, body').animate({
        scrollTop: $("#deskripsi").offset().top
      }, 500);
    });
  });

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

    <script>
    var theme = {
          color: [
              '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
              '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
          ],

          title: {
              itemGap: 8,
              textStyle: {
                  fontWeight: 'normal',
                  color: '#408829'
              }
          },

          dataRange: {
              color: ['#1f610a', '#97b58d']
          },

          toolbox: {
              color: ['#408829', '#408829', '#408829', '#408829']
          },

          tooltip: {
              backgroundColor: 'rgba(0,0,0,0.5)',
              axisPointer: {
                  type: 'line',
                  lineStyle: {
                      color: '#408829',
                      type: 'dashed'
                  },
                  crossStyle: {
                      color: '#408829'
                  },
                  shadowStyle: {
                      color: 'rgba(200,200,200,0.3)'
                  }
              }
          },

          dataZoom: {
              dataBackgroundColor: '#eee',
              fillerColor: 'rgba(64,136,41,0.2)',
              handleColor: '#408829'
          },
          grid: {
              borderWidth: 0
          },

          categoryAxis: {
              axisLine: {
                  lineStyle: {
                      color: '#408829'
                  }
              },
              splitLine: {
                  lineStyle: {
                      color: ['#eee']
                  }
              }
          },

          valueAxis: {
              axisLine: {
                  lineStyle: {
                      color: '#408829'
                  }
              },
              splitArea: {
                  show: true,
                  areaStyle: {
                      color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                  }
              },
              splitLine: {
                  lineStyle: {
                      color: ['#eee']
                  }
              }
          },
          timeline: {
              lineStyle: {
                  color: '#408829'
              },
              controlStyle: {
                  normal: {color: '#408829'},
                  emphasis: {color: '#408829'}
              }
          },

          k: {
              itemStyle: {
                  normal: {
                      color: '#68a54a',
                      color0: '#a9cba2',
                      lineStyle: {
                          width: 1,
                          color: '#408829',
                          color0: '#86b379'
                      }
                  }
              }
          },
          map: {
              itemStyle: {
                  normal: {
                      areaStyle: {
                          color: '#ddd'
                      },
                      label: {
                          textStyle: {
                              color: '#c12e34'
                          }
                      }
                  },
                  emphasis: {
                      areaStyle: {
                          color: '#99d2dd'
                      },
                      label: {
                          textStyle: {
                              color: '#c12e34'
                          }
                      }
                  }
              }
          },
          force: {
              itemStyle: {
                  normal: {
                      linkStyle: {
                          strokeColor: '#408829'
                      }
                  }
              }
          },
          chord: {
              padding: 4,
              itemStyle: {
                  normal: {
                      lineStyle: {
                          width: 1,
                          color: 'rgba(128, 128, 128, 0.5)'
                      },
                      chordStyle: {
                          lineStyle: {
                              width: 1,
                              color: 'rgba(128, 128, 128, 0.5)'
                          }
                      }
                  },
                  emphasis: {
                      lineStyle: {
                          width: 1,
                          color: 'rgba(128, 128, 128, 0.5)'
                      },
                      chordStyle: {
                          lineStyle: {
                              width: 1,
                              color: 'rgba(128, 128, 128, 0.5)'
                          }
                      }
                  }
              }
          },
          gauge: {
              startAngle: 225,
              endAngle: -45,
              axisLine: {
                  show: true,
                  lineStyle: {
                      color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                      width: 8
                  }
              },
              axisTick: {
                  splitNumber: 10,
                  length: 12,
                  lineStyle: {
                      color: 'auto'
                  }
              },
              axisLabel: {
                  textStyle: {
                      color: 'auto'
                  }
              },
              splitLine: {
                  length: 18,
                  lineStyle: {
                      color: 'auto'
                  }
              },
              pointer: {
                  length: '90%',
                  color: 'auto'
              },
              title: {
                  textStyle: {
                      color: '#333'
                  }
              },
              detail: {
                  textStyle: {
                      color: 'auto'
                  }
              }
          },
          textStyle: {
              fontFamily: 'Arial, Verdana, sans-serif'
          }
      };

      var echartGauge = echarts.init(document.getElementById('submitted'), theme);

      echartGauge.setOption({
        tooltip: {
          formatter: "{a} <br/>{b} : {c}%"
        },
        toolbox: {
          show: true,
          feature: {
            saveAsImage: {
              show: true,
              title: "Save Image"
            }
          }
        },
        series: [{
          name: 'Unit submit',
          type: 'gauge',
          center: ['50%', '50%'],
          startAngle: 180,
          endAngle: 0,
          min: 0,
          max: 200,
          precision: 0,
          splitNumber: 10,
          axisLine: {
            show: true,
            lineStyle: {
              color: [
                [0.49, '#ff4500'],
                [0.74, '#ffcc00'],
                [1, 'lightgreen']
              ],
              width: 30
            }
          },
          axisTick: {
            show: true,
            splitNumber: 5,
            length: 8,
            lineStyle: {
              color: '#eee',
              width: 1,
              type: 'solid'
            }
          },
          axisLabel: {
            show: true,
            formatter: function(v) {
              switch (v + '') {
                case '-50':
                  return '';
                case '30':
                  return '';
                case '60':
                  return '';
                default:
                  return '';
              }
            },
            textStyle: {
              color: '#333'
            }
          },
          splitLine: {
            show: true,
            length: 30,
            lineStyle: {
              color: '#eee',
              width: 2,
              type: 'solid'
            }
          },
          pointer: {
            length: '80%',
            width: 8,
            color: 'auto'
          },
          title: {
            show: true,
            offsetCenter: ['-65%', -10],
            textStyle: {
              color: '#333',
              fontSize: 15
            }
          },
          detail: {
            show: true,
            backgroundColor: 'rgba(0,0,0,0)',
            borderWidth: 0,
            borderColor: '#ccc',
            width: 100,
            height: 40,
            offsetCenter: ['-60%', 10],
            formatter: '{value}%',
            textStyle: {
              color: 'auto',
              fontSize: 30
            }
          },
          data: [{
            value: <?php echo $summary;?>,
            name: 'Submitted'
          }]
        }]
      });
      </script>

      <?php 
      /*$i=1;
      while (isset($banding[$i])) {
        echo $banding[$i].' ';
        $i++;
      }*/
       ?>

  </body>
  </html>