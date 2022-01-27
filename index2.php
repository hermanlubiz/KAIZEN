
<?php
session_start();
?>
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

<div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="index.php">Back To All Form</a></li> 
        </ul>
        <ul class="nav pull-right" style="margin-top: 1%;margin-right: 1.5%; font-size: 120%;color: white">
        </ul>
      </div>

<body>
  <div id="login-page" style="margin-top: 3%;margin-left: 3.5%">
    <div class="container">
      <form class="form-login" method="post" action="login_proses.php">
        <h2 class="form-login-heading">sign in now</h2>
        <center><h2 style="color:blue">PT Darya-Varia Tbk</h2></center>
        <center><h4>Continuous Improvement</h4></center>
        <div class="login-wrap">
          <input type="text" class="form-control" name="username" placeholder="User Name" required="" autocomplete="off">
          <br>
          <input type="password" class="form-control" name="password" placeholder="Password" required="" autocomplete="off">
          <br>
          <button class="btn btn-theme btn-block" type="submit" name="login" value="login"><i class="fa fa-lock"></i> SIGN IN</button>
          <br>

          <div class="registration">
           <h4>OPERATIONAL EXCELLENCE</h4>
           
                  <script>
                  var myVar = setInterval(myTimer ,1000);
                  function myTimer() {
                    var d = new Date();
                    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
                  }
                  </script>
                  <!--Time hello-->
                          <div style="color: red; font-size: 120%">
                            <?php 
                            $tanggal=mktime(date("m"),date("d"),date("Y"));
                            echo"<b>".date("d-M-Y",$tanggal)."</b>";
                            date_default_timezone_set('Asia/Jakarta');
                            $jam=date("H:i:s");
                            echo " || <b id='demo'</b>"."</b>";       
                            ?> 
                          </div>
                <h8 style="font-size: 70%">Develop By Herman Lubis</h8>

          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/med.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
