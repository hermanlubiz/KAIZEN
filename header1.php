<!DOCTYPE html>
<html>
<head>
  <title>OE Online</title>

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
      <a href="dashoe.php" class="logo"><b>E - KAIZEN DARYA-VARIA |<span>| CONTINUOUS IMPROVEMENT</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <!-- inbox dropdown start-->
             <!-- notification dropdown start 2-->
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
          <!-- <li id="header_notification_bar" class="dropdown">
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

     <!--  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> FORM A3 <span class="caret"></span></a>
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
      <div id="sidebar" class="nav-collapse " style="z-index: 999">
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
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>KAIZEN</span>
              </a>
            <ul class="sub">
              <li><a href="form_kzprod1.php">1. Form Input Kaizen</a></li>
              <li><a href="data_kzprod1.php">2. View Data Kaizen</a></li>
            </ul>
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






<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

    <!-- untuk notifikasi header...-->
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