<?php
session_start();
error_reporting(0);
if ($_SESSION['level']==""){
   header('location:index2.php');
}
//cek level
if($_SESSION['level']!="admin")
if($_SESSION['level']!="oe")
if($_SESSION['level']!="mngeng")
if($_SESSION['level']!="mnghrgs")
if($_SESSION['level']!="mngims")
if($_SESSION['level']!="mnglog")
if($_SESSION['level']!="mngmtu")
if($_SESSION['level']!="mngppic")
if($_SESSION['level']!="mngprod")
if($_SESSION['level']!="mngqa")
if($_SESSION['level']!="mngqc")

{
    echo "<script>window.alert(' HAK AKSES DILARANG ANDA AKAN DI LOGOUT OTOMATIS !!!')
          window.location='index.php'</script>";
}
?>