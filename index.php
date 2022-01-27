  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
</head>
<body style="position: absolute;">

  <section id="container">
    <!--header start-->
    <header class="header black-bg">
      <!--logo start-->
      <a class="logo" style="margin-left: 10%"><b> PT Darya-Varia Laboratoria Tbk |<span>| CONTINUOUS IMPROVEMENT</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
         
      </div>
     
    </header>
    <!--header end-->

<div class="row">
    <div class="col-lg-12" style="margin-top: 7%">
        <h1 style="color: yellow; margin-left: -10%;font-size: 350%"><center>FORM KAIZEN ALL DEPARTEMENT</center></h1>
    </div>
    </div>

</head>
<body>

<div class="container text-center" style="margin-left: 3%">
  <div class="row">
    <div class="col-sm-2">
      <p class="centered"><a href="form_userprod2.php"><img class="zoomA" src="img2/prod.png" class="img-circle" width="255" height="255"></a></p>
    </div>
    <div class="col-sm-2">
      <p class="centered"><a href="form_userqa1.php"><img class="zoomA" src="img2/qa.png" class="img-circle" width="255" height="255"></a></p>
    </div>
    <div class="col-sm-2">
      <p class="centered"><a href="form_userqc1.php"><img class="zoomA" src="img2/qc.png" class="img-circle" width="255" height="255"></a></p>
    </div>
     <div class="col-sm-2">
      <p class="centered"><a href="form_userppic1.php"><img class="zoomA" src="img2/ppic.png" class="img-circle" width="255" height="255"></a></p>
    </div>
    <div class="col-sm-2">
      <p class="centered"><a href="form_usermtu1.php"><img class="zoomA" src="img2/mtu.png" class="img-circle" width="255" height="255"></a></p>
    </div>
  </div>

    <div class="row">
    <div class="col-sm-2">
      <p class="centered"><a href="form_userhrgs1.php"><img class="zoomA" src="img2/hrgs.png" class="img-circle" width="255" height="255"></a></p>
    </div>
    <div class="col-sm-2">
      <p class="centered"><a href="form_usereng1.php"><img class="zoomA" src="img2/eng.png" class="img-circle" width="255" height="255"></a></p>
    </div>
    <div class="col-sm-2">
      <p class="centered"><a href="form_userlog1.php"><img class="zoomA" src="img2/log.png" class="img-circle" width="255" height="255"></a></p>
    </div>
    <div class="col-sm-2">
      <p class="centered"><a href="form_userims1.php"><img class="zoomA" src="img2/ims.png" class="img-circle" width="255" height="255"></a></p>
    </div>
  </div>


 
                <div class="panel-footer" style="width:25%;height:160% ; margin-left:90%;margin-top:-90%">
                  <p class="pull-left" style="margin-top: -100%;font-size: 190%;color: white">KHUSUS SPV & MANAGER UNTUK REVIEW & VERIFICATION KAIZEN SILAHKAN LOGIN TERLEBIH DAHULU   </p>
                  
                  <div class="top-menu" style="margin-left:8%">
                  <ul class="nav pull-right top-menu" style="margin-top:-10%">
                    <li><a class="logout" href="index2.php">Login Khusus Spv & Manager Untuk Review & Verification</a></li> 
                  </ul>
                  </div>
                    <div class="clearfix" style="background-color: #000000;height: 100%"></div>
                </div>

                <div style="margin-right: -38%;margin-top: -7%; font-size: 120%"><script>
                  var myVar = setInterval(myTimer ,1000);
                  function myTimer() {
                    var d = new Date();
                    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
                  }
                  </script>
                  <!--Time hello-->
                          <div style="color: white; font-size: 120%">
                            <?php 
                            $tanggal=mktime(date("m"),date("d"),date("Y"));
                            echo"<b>".date("d-M-Y",$tanggal)."</b>";
                            date_default_timezone_set('Asia/Jakarta');
                            $jam=date("H:i:s");
                            echo " || <b id='demo'</b>"."</b>";       
                            ?> 
                          </div>


              

<!-- untuk zoom gambar-->
  <style>
      .zoomA {
        width: 150px;
        height: auto;
        transition-duration: 1s;
        transition-timing-function: ease;
      }
      .zoomA:hover {
        transform: scale(1.3);
      }
    </style>



  
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/tech6.jpg", {
      speed: 50
    });
  </script>
</body>

</html>