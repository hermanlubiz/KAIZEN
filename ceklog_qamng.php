<?php
session_start();
error_reporting(0);
if ($_SESSION['level']==""){
   header('location:index2.php');
}
//cek level
if($_SESSION['level']!="admin")
if($_SESSION['level']!="mngqa")
{
    echo "<script>window.alert(' HAK AKSES DILARANG ANDA AKAN DI LOGOUT OTOMATIS !!!')
          window.location='index.php'</script>";
}
?>