<?php
date_default_timezone_set("ASIA/JAKARTA");
include "ceklog_qamng.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kaizen Online</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
  <script src="lib/jquery-3.4.1.js"></script>
</head>

<body>
  <section id="container">
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a class="logo"><b>PT Darya-Varia Tbk |<span>| CONTINUOUS IMPROVEMENT</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          
           
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="index.php">Logout</a></li>
          <li><a class="logout" href="password.php">Ubah password Saya</a></li>
        </ul>
        <ul class="nav pull-right" style="margin-top: 1%;margin-right: 1.5%; font-size: 120%;color: white">
          <li><span class="glyphicon glyphicon-user fa-lg"></span> <?php echo $_SESSION['nama_user'] ?> </li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse " style="z-index: 999">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a><img src="img/oe1.jpg" class="img-circle" width="120"></a></p>
          <h5 class="centered">CONTINUOUS IMPROVEMENT</h5>

          <center><p id="demo" style="font-size: 170%; color: white"></p></center>
          <center style="color: white"><?php echo date("d/m/Y");?></center>

            <script>
            var myVar = setInterval(myTimer, 1000);

            function myTimer() {
              var d = new Date();
              document.getElementById("demo").innerHTML = d.toLocaleTimeString();
            }
            </script>

        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

<!--header end-->




<section id="main-content" style="position: absolute;">
<section class="wrapper main-wrapper row">
<div class="col-md-12" style="background-color: #ebebe0;">              
          
<div class="container-fluid-left" style="color: black">
  <center><h2 style="color: blue">DATA RECORD KAIZEN DEPARTEMENT QA BELUM VERIFIKASI</h2></center>

  <a href="data_kzqamng1.php" button type="submit" class="btn btn-primary">Klik Disini->Data Semua Kaizen QA <span class="glyphicon glyphicon-list"></span></a>

   <!-- div container harus absolute untuk judul tabel-->
  <div id="isi" class="container-fluid-left" style="color: black;position: absolute;max-height: 555px;width:90%">
  <table class="table-responsive" border="1" style="position: relative;">
    <thead >
      <tr style="color: black; background-color: lightblue">
        <th rowspan="2"><center>No</center></th>
        <th rowspan="2"><center>Tanggal Usulan</center></th>
        <th rowspan="2"><center>No Kaizen</center></th>
        <th rowspan="2"><center>Oleh</center></th>
        <th rowspan="2"><center>Kode & Area Proses</center></th>
        <th rowspan="2"><center>Judul Kaizen</center></th>
        <th rowspan="2"><center>Alasan</center></th>
        <th rowspan="2"><center>Tipe</center></th>
        <th rowspan="2"><center>Category</center></th>
        <th rowspan="2"><center>Uraian Masalah</center></th>
        <th rowspan="2"><center>Tindakan Perbaikan</center></th>
 
        <th><center>Supervisor</center></th>
        <th><center>Manager</center></th>
        <th><center>Komentar</center></th>
        <th><center>Supervisor OE</center></th>
        <th><center>Komentar</center></th>
        <th><center>Status Disposisi</center></th>
        <th><center>Opsi</center></th>
    
    </thead>
      <?php
include "koneksi.php";
if (isset($_GET['cari'])) {

    $tgl1 = $_GET['tgl_awal'];
    $tgl2 = $_GET['tgl_akhir'];

$sql = mysqli_query($koneksi,"SELECT * from tb_kzprod1 WHERE tgl_input BETWEEN '$tgl1' and '$tgl2' ORDER BY id ASC");
}else{
$sql = mysqli_query($koneksi,"SELECT * from tb_kzprod1 WHERE mngprod='' and no_kaizen LIKE 'A%' ORDER BY id ASC");
}

$no=1;

while ($data = mysqli_fetch_object($sql))
{ 
       ?>
<tbody id="myTable">
<tr class="btn-default" >
 <div class="container">
<!-- untuk hidden data judul tabel -->
 <tr class="btn-default">
  <!-- Trigger the modal with a button -->
  <td><center><?php echo $no ?></center></td>
  <td><center><?php echo $data->tgl_input ?></center></td>
  <td><center><?php echo $data->no_kaizen ?></center></td>
  <td><center><?php echo $data->oleh ?></center></td>
  <td><center><?php echo $data->area ?></center></td>

  <td><textarea rows="5" readonly><?php echo $data->judul ?></textarea></td>
  <td><textarea rows="5" readonly><?php echo $data->alasan ?></textarea></td>
  <td><center><?php echo $data->tipe ?></center></td>
  <td><center><?php echo $data->cat ?></center></td>
  <td><textarea rows="5" readonly><?php echo $data->masalah ?></textarea></td>
  <td><textarea rows="5" readonly><?php echo $data->tindakan ?></textarea></td>

  <td><center><p><?php
                        $ar3x = $data->dikaji;
                        if (empty($ar3x)){
                          echo "<p style='color:coral'><center>In_Progres</center></p>";
                        }else if ($ar3x=="DIKAJI"){
                          echo "<a style='color:blue'><center>  ".$ar3x." secara elektronik </center></a>";
                        }else {
                          echo "<a style='color:red'><center>  ".$ar3x." secara elektronik </center></a>";
                        }

                        $ar4x = $data->tglkaji;
                        $ar4ax= $data->dikaji;
                        if (empty($ar4ax)) {
                          echo "";
                        }else if ($ar4x=="0000-00-00"){
                         echo "";
                        }else{
                         echo "<a><center>".$ar4x."</center></a>";
                        }

                        $xr3x = $data->nm_spv;
                        if (empty($xr3x)) {
                        echo "";
                        }else{
                        echo "<a><center>".$data->nm_spv."</center></a>";
                        }       
                        ?><br></center></td>
  
  <?php  $no++; // otomatis ++  ?>

  <td><center><p><?php  $a1 = $data->mngprod;
                        if (empty($a1)){
                        echo "<p>In_Progres</p>";
                        }else if ($a1=="DISETUJUI"){
                        echo "<a style='color:blue'><center> ".$a1." secara elektronik </center></a>";
                        }else {
                        echo "<a style='color:red'><center> ".$a1." secara elektronik </center></a>";
                        }?>

                        <?php
                        $m3 = $data->tglmng;
                        $m3a= $data->mngprod;
                        if (empty($m3a)) {
                        echo "";
                        }else if ($m3=="0000-00-00"){
                         echo "";
                        }else{
                         echo "<a><center>".$m3."</center></a>";
                        }?>

                        <?php
                        $x1 = $data->ttdmng;
                        if (empty($x1)) {
                        echo "";
                        }else{
                         echo $data->ttdmng;
                        }?><br>
  <a class="btn btn-primary btn-xs" href= "verifikzmngall.php?id_edit=<?php echo $data->id ?>">Review <span class="glyphicon glyphicon-check"></span></a>
  </center></td>

  <td><textarea rows="6" readonly><?php echo $data->komen1 ?></textarea></td>

  <td><center><p><?php
                        $a2 = $data->spvoe;
                        if (empty($a2)){
                        echo "<p>In_Progres</p>";
                        }else if ($a2=="DISETUJUI"){
                        echo "<a style='color:blue'><center> ".$a2." secara elektronik </center></a>";
                        }else {
                        echo "<a style='color:red'><center> ".$a2." secara elektronik </center></a>";
                        }?>

                        <?php
                        $x3 = $data->tgloe;
                        $x3a = $data->spvoe;
                        if (empty($x3a)) {
                        echo "";
                        }else if ($x3=="0000-00-00"){
                         echo "";
                        }else{
                         echo "<a><center>".$x3."</center></a>";
                        }?>

                        <?php
                        $x2 = $data->ttdoe;
                        if (empty($x2)) {
                        echo "";
                        }else{
                         echo $data->ttdoe;
                        }?></td></center>

  <td><textarea rows="6" readonly><?php echo $data->komen2 ?></textarea></td>

  <center><?php
                    $a3 = $data->status;
                    if (empty($a3)){
                    echo "<td>In_Progres</td>";
                    }else if ($a3=="DITOLAK"){
                    echo "<td style='color:red'><center>".$a3."</center></td>";
                    }else {
                    echo "<td style='color:blue'><center>".$a3."</center></td>";
                    }?></center>

  
  <td><center>
  <a class="btn btn-info btn-xs" target="_blank" href= "cetak.php?id_edit=<?php echo $data->id ?>">View.&.print <span class="glyphicon glyphicon-print"></span></a>
  </center></td>
</tr>
<?php 
}
?>
  </table>
</body>
</html>

</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

      // untuk save javascript.
      var wk = document.getElementById('myInput').value; // utk ambil text yang dicari
      var link = document.getElementById('myInput').innerHTML =  'exportxl_kzprod.php?kode=' + wk ; // utk mnghubungkan data text yang di cari masukan ke innerhtml utk buat link baru 
      var wy = document.getElementById('iducing').innerHTML ="<a class='btn btn-primary disabled' href=" + link + ">Save Category </a>";
      // utk membuat button dan menampilkan button yg ada di atas <div id='iducing'></div>
      console.log(wy);
    });
  });
});
</script>

<script>
  $(document).ready(function(){
  $("#myInput").on("focus", function(){
    $("#isi").toggle(200);
  });
});
</script>

<!-- untuk zoom gambar-->
  <style>
      .zoomA {
        width: 5000px;
        height: auto;
        transition-duration: 1s;
        transition-timing-function: ease;
      }
      .zoomA:hover {
        transform: scale(9.2);
      }
    </style>
    <!-- untuk zoom text-->
  <style>
      .zoomAA {
        width: 5000px;
        height: auto;
        transition-duration: 1s;
        transition-timing-function: ease;
      }
      .zoomAA:hover {
        transform: scale(6.2);
      }
    </style>

    <?php include "footjqr.php"; ?>


  
</div>
</html>
<br><br>
<center><h3>Kaizen yang belum di Verifikasi akan muncul disini...</h3></center>
