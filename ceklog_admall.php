<?php
session_start();
error_reporting(0);
if ($_SESSION['level']==""){
   header('location:index2.php');
}
//cek level
if($_SESSION['level']!="admin")
if($_SESSION['level']!="oe")
if($_SESSION['level']!="admprod")
if($_SESSION['level']!="admhrgs")
if($_SESSION['level']!="admims")
if($_SESSION['level']!="admlog")
if($_SESSION['level']!="admmtu")
if($_SESSION['level']!="admppic")
if($_SESSION['level']!="admeng")
if($_SESSION['level']!="admqa")
if($_SESSION['level']!="admqc")

{
    echo "<script>window.alert(' HAK AKSES DILARANG ANDA AKAN DI LOGOUT OTOMATIS !!!')
          window.location='index.php'</script>";
}
?>