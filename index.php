<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Perhitungan Bangun Datar || JWP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link"><center>
      
           <span class="brand-text font-weight-light">Mari Menghitung</span><br>
           <span class="brand-text font-weight-light">Luas Bangun Datar</span>
    </a></center>

    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
              <li class="nav-item">
                <a href="index.php" class="nav-link">
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="segitiga.php" class="nav-link">
                  <p>Segitiga</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="persegi.php" class="nav-link">
                  <p>Persegi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="lingkaran.php" class="nav-link">
                  <p>Lingkaran</p>
                </a>
              </li>
          
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php 
							        //untuk menjumlahkan berapa kali melakukan hitungan pada sistem
							        
							        $queryhitungsegitiga = mysqli_query($koneksi, "SELECT COUNT(id_segitiga) FROM segitiga"); //untuk menghitung berapa kali percobaan dalam segitiga
							        $datasegitiga=mysqli_fetch_array($queryhitungsegitiga);
                      $countsegitiga= $datasegitiga['COUNT(id_segitiga)']; 

                      $queryhitungpersegi = mysqli_query($koneksi, "SELECT COUNT(id_persegi) FROM persegi"); //untuk menghitung berapa kali percobaan dalam persegi
                      $datapersegi=mysqli_fetch_array($queryhitungpersegi);
                      $countpersegi= $datapersegi['COUNT(id_persegi)'];
                      
                      $queryhitunglingkaran = mysqli_query($koneksi, "SELECT COUNT(id_lingkaran) FROM lingkaran"); //untuk menghitung berapa kali percobaan dalam lingkaran
                      $datalingkaran=mysqli_fetch_array($queryhitunglingkaran);
                      $countlingkaran= $datalingkaran['COUNT(id_lingkaran)'];

                      $total = $countsegitiga + $countpersegi + $countlingkaran; //untuk menghitung jumlah semua percobaan pada masing-masing bangun datar
                      ?> 
                <h2 class="number"><?= $total ?> KALI </h2>
              </div>
              <span class="desc">Jumlah Perhitungan</span>
              <div class="icon">
                  <i class="zmdi zmdi-plus"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              
                <?php 
                      $persensegitiga = round((($countsegitiga / $total) * 100),2);//untuk menghitung persentase perhitungan segitiga
                      ?> 
                      <h2 class="number"><?= $persensegitiga ?> %</h2>
                      <span class="desc">Persentase Hitungan Segitiga</span>
              </div>
              <a onclick="window.location.href='file/segitiga_luas.txt'" class="small-box-footer">Riwayat Hasil Perhitungan Segitiga <i class="fas fa-arrow-circle-right"></i></a>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
              $persenpersegi = round((($countpersegi / $total) * 100),2);//untuk menghitung persentase perhitungan persegi
                      ?> 
                      <h2 class="number"><?= $persenpersegi ?> %</h2>
                      <span class="desc">Persentase Hitungan persegi</span>
                      
              </div>
              <a onclick="window.location.href='file/persegi_luas.txt'" class="small-box-footer">Riwayat Hasil Perhitungan Persegi <i class="fas fa-arrow-circle-right"></i></a>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
              <?php
              $persenlingkaran = round((($countlingkaran / $total) * 100),2);//untuk menghitung persentase perhitungan lingkaran
                      ?> 
                      <h2 class="number"><?= $persenlingkaran ?> %</h2>
                      <span class="desc">Persentase Hitungan lingkaran</span>
              </div>
              <a onclick="window.location.href='file/lingkaran_luas.txt'" class="small-box-footer">Riwayat Hasil Perhitungan Lingkaran <i class="fas fa-arrow-circle-right"></i></a>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
            </div>
          </div>
          
        <!-- /.row -->
        <!-- Main row -->
              
                
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
