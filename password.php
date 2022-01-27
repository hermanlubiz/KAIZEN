
    <?php
    include "ceklog_passall.php";
    ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
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

  <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/bootstrap.min.css" />
</head>

<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:1220px; height:325px;">

   
    <?php
    include "koneksi.php";
    if (isset($_SESSION['nama_user'])) {
        $nama_user = $_SESSION['nama_user'];
    }
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    }
    else {
    die ("Error. No ID Selected! ");    
    }
    //proses ganti password
    if (isset($_POST['Ganti'])) {
    $username         = $_POST['username'];
    $password_lama    = md5($_POST['password_lama']);
    $password_baru    = md5($_POST['password_baru']);
    $konf_password    = md5($_POST['konf_password']);

    //cek old password
    $query = mysqli_query($koneksi, "SELECT * FROM tb_log WHERE username='$username' AND password='$password_lama'");
    //$sql = mysqli_query ($query);
    $hasil = mysqli_num_rows ($query);
    if (! $hasil >= 1) {
        ?>
            <script language="JavaScript">
            alert('Password lama tidak sesuai!, silahkan ulang kembali!');
            document.location='password.php';

            </script>
        <?php
            unset($_SESSION['username']);
            unset($_SESSION['level']);
            session_destroy();
    }
    //validasi data data kosong
    else if (empty($_POST['password_baru']) || empty($_POST['konf_password'])) {
            echo "<h3><font color=red>Ganti Password Gagal! Data Tidak Boleh Kosong.</font></h3>";    
    }
    //validasi input konfirm password
    else if (($_POST['password_baru']) != ($_POST['konf_password'])) {
            echo "<h3><font color=red><center>Ganti Password Gagal! Password dan Konfirm Password Harus Sama.</center></font></h3>";    
    }
    else {
    //update data
    $query = mysqli_query($koneksi, "UPDATE tb_log SET password='$password_baru' WHERE username='$username'");
    //$sql = mysqli_query ($query);
    //setelah berhasil update
    if ($query) {
        echo "<h3><font color=#8BB2D9><center>Ganti Password Berhasil!.... Silahkan login kembali</center></font></h3>";    
    } else {
        echo "<h3><font color=red><center>Ganti Password Gagal!</center></font></h3>";    
    }
    }
    }
?>
<form action="" method="POST" name="form-ganti-password" enctype="multipart/form-data">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="100%" align="center">
            <td><font size="2" color="FFA800"><b>FORM GANTI PASSWORD</b></font></td>
        </tr>
    </table>
    <table width="75%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="36">
            <td width="25%">Nama User</td>
            <td width="75%"><b><?=$nama_user?><input type="hidden" value="<?=$nama_user?>"></b></td>
        </tr>
        <tr height="36">
            <td width="25%">Username</td>
            <td width="75%"><b><?=$username?><input type="hidden" name="username" id="username" required value="<?=$username?>"></b></td>
        </tr>
        <tr height="36">
            <td>Password Lama</td>
            <td><input type="password" name="password_lama" id="password_lama" size="30" maxlength="20" required ></td>
        </tr>
        <tr height="36">
            <td>Password Baru</td>
            <td><input type="password" name="password_baru" id="password_baru" size="30" maxlength="20" required ></td>
        </tr>
        <tr height="36">
            <td>Konfirm Password Baru</td>
            <td><input type="password" name="konf_password" id="konf_password" size="30" maxlength="20" required ></td>
        </tr>

         <?php

          if ($username == "admin"){
            $ke2 = "dashoe.php";
          }else if ($username == "kaizenadmin"){
            $ke2 = "dashoe.php";
          }else if ($username == "spvprod"){
            $ke2 = "data_kzprod2.php";
          }else if ($username == "spvqa"){
            $ke2 = "data_kzqa1.php";
          }else if ($username == "spvqc"){
            $ke2 = "data_kzqc1.php";
          }else if ($username == "spvppic"){
            $ke2 = "data_kzppic1.php";
          }else if ($username == "spvmtu"){
            $ke2 = "data_kzmtu1.php";
          }else if ($username == "spvhrgs"){
            $ke2 = "data_kzhrgs1.php";
          }else if ($username == "spveng"){
            $ke2 = "data_kzeng1.php";
          }else if ($username == "spvlog"){
            $ke2 = "data_kzlog1.php";
          }else if ($username == "spvims"){
            $ke2 = "data_kzims1.php";
          }else if ($username == "mgrprod"){
            $ke2 = "data_kzprodmng2.php";
          }else if ($username == "mgrqa"){
            $ke2 = "data_kzqamng1.php";
          }else if ($username == "mgrqc"){
            $ke2 = "data_kzqcmng1.php";
          }else if ($username == "mgrppic"){
            $ke2 = "data_kzppicmng1.php";
          }else if ($username == "mgrmtu"){
            $ke2 = "data_kzmtumng1.php";
          }else if ($username == "mgrhrgs"){
            $ke2 = "data_kzhrgsmng1.php";
          }else if ($username == "mgreng"){
            $ke2 = "data_kzengmng1.php";
          }else if ($username == "mgrlog"){
            $ke2 = "data_kzlogmng1.php";
          }else if ($username == "mgrims"){
            $ke2 = "data_kzimsmng1.php";
          }else if ($username == "admprod"){
            $ke2 = "datauser_prod.php";
          }else if ($username == "admeng"){
            $ke2 = "datauser_eng.php";
          }else if ($username == "admhrgs"){
            $ke2 = "datauser_hrgs.php";
          }else if ($username == "admims"){
            $ke2 = "datauser_ims.php";
          }else if ($username == "admlog"){
            $ke2 = "datauser_log.php";
          }else if ($username == "admmtu"){
            $ke2 = "datauser_mtu.php";
          }else if ($username == "admppic"){
            $ke2 = "datauser_ppic.php";
          }else if ($username == "admqa"){
            $ke2 = "datauser_qa.php";
          }else if ($username == "admqc"){
            $ke2 = "datauser_qc.php";
          }

          ?>
          
        <tr height="56">
            <td> </td>
            <td><button type="submit" name="Ganti" class="btn btn-danger">Ganti Password <span class="glyphicon glyphicon-check"></button> <a href="<?php echo $ke2 ?>" button type="submit" class="btn btn-info">Kembali <span class="glyphicon glyphicon-repeat"></span></a></td>
        </tr>
    </table>
</form>
<?php
    mysqli_close($Open);
?>
</div>

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