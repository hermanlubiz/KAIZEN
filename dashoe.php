<?php
 include "ceklog_admin.php";
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
</head>

<body>
  <section id="container">
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="dashoe.php" class="logo"><b> E - KAIZEN DARYA-VARIA |<span>| CONTINUOUS IMPROVEMENT</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
         
          <!-- inbox dropdown start-->
          <!-- notification dropdown start 3-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle1" href="data_kzprod1.php">
              <i class="fa fa-bell-o" data-toggle="tooltip" data-placement="right" title="KAIZEN NEW"></i>
              <span class="badge count " style="background-color: red"></span>
              </a>
              <ul class="dropdown-menu" id="notif1"></ul>
           </li>


           <!-- notification dropdown start 3-->
         <!--  <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle2" href="data_a3.php">
              <i class="fa fa-font" data-toggle="tooltip" data-placement="right" title="A3 NEW"></i>
              <span class="badge count2 " style="background-color: red"></span>
              </a>
              <ul class="dropdown-menu" id="notif2"></ul>
           </li> -->



      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> FORM KAIZEN <span class="caret"></span></a>
                <ul class="dropdown-menu multi-level">
                <li class="dropdown-submenu" style="background-color: lightblue">
                        <a tabindex="-1" href="form_kzprod1.php">Form Kaizen Production</a>
                        <a tabindex="-1" href="form_oeqa.php">Form Kaizen QA</a>
                        <a tabindex="-1" href="form_oeqc.php">Form Kaizen QC</a>
                        <a tabindex="-1" href="form_oeppic.php">Form Kaizen PPIC</a>
                        <a tabindex="-1" href="form_oemtu.php">Form Kaizen MTU</a>
                        <a tabindex="-1" href="form_oehrgs.php">Form Kaizen HRGS/P-M</a>
                        <a tabindex="-1" href="form_oeeng.php">Form Kaizen Engineering</a>
                        <a tabindex="-1" href="form_oelog.php">Form Kaizen Logistic</a>
                        <a tabindex="-1" href="form_oeims.php">Form Kaizen IMS-HSE</a>     
                </li>
              </ul>

      <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> FORM A3 <span class="caret"></span></a>
                <ul class="dropdown-menu multi-level">
                <li class="dropdown-submenu" style="background-color: lightblue">
                        <a tabindex="-1" href="forma3_ip.php">Form A3 Category "IP" (Improvement Project)</a>
                        <a tabindex="-1" href="forma3_lti.php">Form A3 Category "LT" (LTI Incident)</a>
                        <a tabindex="-1" href="forma3_hse.php">Form A3 Category "IC" (Repeated HSE Incident)</a>
                        <a tabindex="-1" href="forma3_dev.php">Form A3 Category "DV" (Repeated Deviation)</a>
                        <a tabindex="-1" href="forma3_comp.php">Form A3 Category "CO" (Repeated Complaint)</a>
                </li>
              </ul> -->
       

      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
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
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="dashoe.php"><img src="img/oe1.jpg" class="img-circle" width="120"></a></p>
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

          <li class="mt">
            <a class="active" href="dashoe.php">
              <i class="fa fa-home"></i>
              <span>HOME</span>
              </a>
          </li>
          <li class="active">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>FORM KAIZEN</span>
              </a>
            <ul class="sub">
              <a tabindex="-1" a href="form_kzprod1.php">1. Form Input Kaizen</a>
              <a tabindex="-1" a href="data_kzprod1.php">2. View Data Kaizen</a>
            </ul>
           <li class="mt">
            <a class="active" href="emailmanualindex.php">
              <i class="fa fa-form"></i>
              <span>Form Email Manual</span>
              </a>
            </li>
          </li>
          <!-- <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>A3</span>
              </a>
            <ul class="sub">
              <a tabindex="-1" href="forma3_ip.php">Form A3 (Improvement Project)</a>
              <a tabindex="-1" href="forma3_lti.php">Form A3 (LTI Incident)</a>
              <a tabindex="-1" href="forma3_hse.php">Form A3 (Repeated HSE Incident)</a>
              <a tabindex="-1" href="forma3_dev.php">Form A3 (Repeated Deviation)</a>
              <a tabindex="-1" href="forma3_comp.php">Form A3 (Repeated Complaint)</a>
              <a tabindex="-1" href="data_a3.php">DATA A3</a>
            </ul>
          </li> -->
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart">
           

<div class="row" style="margin-top: -3%">
    <div class="col-lg-12">
        <h1 class="page-header" style="color: blue"><center>HOME OPERATIONAL EXCELLENCE</center></h1>
    </div>
    </div>

<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="panel panel-primary" >
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <p class="centered"><a href="data_kzprod1.php"><img src="img/kz2.png" class="img-circle" width="110"></a></p>
                    </div>
                    <div class="col-xs-9 text-right" style="font-size: 130%">
                        <?php
                        include "koneksi.php";
                        $sql = mysqli_query($koneksi,"SELECT * from tb_kzprod1");
                        $count = mysqli_num_rows($sql);
                        ?>
                        <div class="huge"><h5>TOTAL JUMLAH DATA ALL KAIZEN SAAT INI : <?php echo $count ?></h5></div>
                        <div><h2>DATA KAIZEN ONLINE</h2></div>
                    </div>
                </div>
            </div>
            <a href="form_kzprod1.php">
                <div class="panel-footer">
                    <span class="pull-left">FORM KAIZEN ONLINE</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
            <a href="data_kzprod1.php">
                <div class="panel-footer">
                    <span class="pull-left">DATA KAIZEN ONLINE</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <p class="centered"><a href="#"><img src="img/a31.jpg" class="img-circle" width="130"></a></p>
                    </div>
                    <div class="col-xs-9 text-right" style="font-size: 130%">
                        <div class="huge"><h5>TOTAL JUMLAH DATA A3 SAAT INI : 0</h5></div>
                        <div><h2>DATA A3 ONLINE</h2></div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                   <a class="dropdown-toggle" data-toggle="dropdown" href="#"> FORM A3 ONLINE <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span></a>
                <!-- <ul class="dropdown-menu multi-level">
                <li class="dropdown-submenu" style="background-color: lightblue">
                        <a tabindex="-1" href="forma3_ip.php">Form A3 Category "IP" (Improvement Project)</a>
                        <a tabindex="-1" href="forma3_lti.php">Form A3 Category "LT" (LTI Incident)</a>
                        <a tabindex="-1" href="forma3_hse.php">Form A3 Category "IC" (Repeated HSE Incident)</a>
                        <a tabindex="-1" href="forma3_dev.php">Form A3 Category "DV" (Repeated Deviation)</a>
                        <a tabindex="-1" href="forma3_comp.php">Form A3 Category "CO" (Repeated Complaint)</a>
                       
                </li>
              </ul> -->
              </div>
            </a>

            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">DATA A3 ONLINE </span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>

<br>

<!-- <div id="myCarousel" class="carousel slide" data-ride="carousel" >
   
    <div class="carousel-inner" role="listbox">
      <div class="item active" >
       <div class="container-fluid text-center bg-grey">
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/kz1.png" alt="Paris" width="210" height="100">
        <p><strong>CONTINUOUS IMPROVEMENT</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/oe4.jpg" alt="New York" width="216" height="100">
        <p><strong>SMART GOAL</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/oe2.png" alt="San Francisco" width="220" height="100">
        <p><strong>OE PERFORMANCE</strong></p>
      </div>
    </div>
  </div>
</div>
      </div>
      <div class="item">
      
<div class="container-fluid text-center bg-grey">
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/pdca.jpg" alt="Paris" width="200" height="100">
        <p><strong>PDCA DEMING CYCLE</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/oe1.jpg" alt="New York" width="200" height="100">
        <p><strong>OPERATIONAL EXCELLENCE</strong></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/tn1.jpg" alt="San Francisco" width="200" height="100">
        <p><strong>TRUE NORTH</strong></p>
      </div>
    </div>
  </div>
</div> -->
    
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>


<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script> 

</body>
</html>




<!-- untuk notifikasi header kaizen...-->
<script>

$(document).ready(function(){

 function load_unseen_notification(view = ''){

  $.ajax({

   url:"fetch.php",

   method:"POST",

   data:{view:view},

   dataType:"json",

   success:function(data){

    $('#notif1').html(data.notification);

    if(data.unseen_notification > 0){

     $('.count').html(data.unseen_notification);

    }

   }

  });

 }

 load_unseen_notification();


 $(document).on('click', '.dropdown-toggle1', function(){

  $('.count').html('');

  load_unseen_notification('yes');

 });

 setInterval(function(){

  load_unseen_notification();;

 }, 5000);

});

</script>


<!-- untuk notifikasi header A3 REPORT...-->
<script>

$(document).ready(function(){

 function load_unseen_notification2(view = ''){

  $.ajax({

   url:"fetcha3.php",

   method:"POST",

   data:{view:view},

   dataType:"json",

   success:function(data){

    $('#notif2').html(data.notification);

    if(data.unseen_notification > 0){

     $('.count2').html(data.unseen_notification);

    }

   }

  });

 }

 load_unseen_notification2();


 $(document).on('click', '.dropdown-toggle2', function(){

  $('.count2').html('');

  load_unseen_notification2('yes');

 });

 setInterval(function(){

  load_unseen_notification2();;

 }, 5000);

});

</script>