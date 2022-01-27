<?php
session_start();
error_reporting(0);
if ($_SESSION['level']==""){
   header('location:index2.php');
}
//cek level
if($_SESSION['level']!="admin")
if($_SESSION['level']!="oe")
if($_SESSION['level']!="production")
if($_SESSION['level']!="hrgs")
if($_SESSION['level']!="ims")
if($_SESSION['level']!="logistic")
if($_SESSION['level']!="mtu")
if($_SESSION['level']!="ppic")
if($_SESSION['level']!="engineering")
if($_SESSION['level']!="qa")
if($_SESSION['level']!="qc")

{
    echo "<script>window.alert(' HAK AKSES DILARANG ANDA AKAN DI LOGOUT OTOMATIS !!!')
          window.location='index.php'</script>";
}
?>