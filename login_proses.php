<?php
session_start();
if($_SESSION){
    
if ($_SESSION['level']=="admin"){

  header("location:dashoe.php");
}
if ($_SESSION['level']=="oe"){

  header("location:dashoe.php");
}
if ($_SESSION['level']=="production"){

  header("location:data_kzprod2_task.php");
}
if ($_SESSION['level']=="qa"){

  header("location:data_kzqa1_task.php");
}
if ($_SESSION['level']=="qc"){

  header("location:data_kzqc1_task.php");
}
if ($_SESSION['level']=="ppic"){

  header("location:data_kzppic1.php");
}
if ($_SESSION['level']=="mtu"){

  header("location:data_kzmtu1.php");
}
if ($_SESSION['level']=="hrgs"){

  header("location:data_kzhrgs1.php");
}
if ($_SESSION['level']=="engineering"){

  header("location:data_kzeng1_task.php");
}
if ($_SESSION['level']=="logistic"){

  header("location:data_kzlog1.php");
}
if ($_SESSION['level']=="ims"){

  header("location:data_kzims1.php");
}
if ($_SESSION['level']=="mngprod"){

  header("location:data_kzprodmng2_task.php");
  }
if ($_SESSION['level']=="mngqa"){

  header("location:data_kzqamng1_task.php");
}
if ($_SESSION['level']=="mngqc"){

  header("location:data_kzqcmng1_task.php");
}
if ($_SESSION['level']=="mngppic"){

  header("location:data_kzppicmng1_task.php");
}
if ($_SESSION['level']=="mngmtu"){

  header("location:data_kzmtumng1_task.php");
}
if ($_SESSION['level']=="mnghrgs"){

  header("location:data_kzhrgsmng1_task.php");
}
if ($_SESSION['level']=="mngeng"){

  header("location:data_kzengmng1_task.php");
}
if ($_SESSION['level']=="mnglog"){

  header("location:data_kzlogmng1_task.php");
}
if ($_SESSION['level']=="mngims"){

  header("location:data_kzimsmng1_task.php");
}if ($_SESSION['level']=="admprod"){

  header("location:datauser_prod.php");
}if ($_SESSION['level']=="admeng"){

  header("location:datauser_eng.php");
}if ($_SESSION['level']=="admhrgs"){

  header("location:datauser_hrgs.php");
}if ($_SESSION['level']=="admims"){

  header("location:datauser_ims.php");
}if ($_SESSION['level']=="admlog"){

  header("location:datauser_log.php");
}if ($_SESSION['level']=="admmtu"){

  header("location:datauser_mtu.php");
}if ($_SESSION['level']=="admppic"){

  header("location:datauser_ppic.php");
}if ($_SESSION['level']=="admqa"){

  header("location:datauser_qa.php");
}if ($_SESSION['level']=="admqc"){

  header("location:datauser_qc.php");
}

}

?>

<?php
include "koneksi.php";
if(isset($_POST['login']))
{ 

$user        = $_POST['username'];
$pass        = md5($_POST['password']);

$login       = mysqli_query($koneksi,"SELECT * from tb_log where username = '$user' AND password = '$pass'");
$cek = mysqli_num_rows($login);
if ($cek > 0);

$row = mysqli_fetch_assoc($login);

$_SESSION['nama_user']=$row['nama_user'];
$_SESSION['username']=$row['username'];
$_SESSION['level'] = $row['level'];


if ($row['level']=="admin"){

  header("location:dashoe.php");
}
else if ($row['level']=="oe"){

  header("location:dashoe.php");
}
else if ($row['level']=="production"){

  header("location:data_kzprod2_task.php");
}
else if ($row['level']=="qa"){

  header("location:data_kzqa1_task.php");
}
else if ($row['level']=="qc"){

  header("location:data_kzqc1_task.php");
}
else if ($row['level']=="ppic"){

  header("location:data_kzppic1.php");
}
else if ($row['level']=="mtu"){

  header("location:data_kzmtu1.php");
}
else if ($row['level']=="hrgs"){

  header("location:data_kzhrgs1.php");
}
else if ($row['level']=="engineering"){

  header("location:data_kzeng1_task.php");
}
else if ($row['level']=="logistic"){

  header("location:data_kzlog1.php");
}
else if ($row['level']=="ims"){

  header("location:data_kzims1.php");
}
else if ($row['level']=="mngprod"){

  header("location:data_kzprodmng2_task.php");
  }
else if ($row['level']=="mngqa"){

  header("location:data_kzqamng1_task.php");
}
else if ($row['level']=="mngqc"){

  header("location:data_kzqcmng1_task.php");
}
else if ($row['level']=="mngppic"){

  header("location:data_kzppicmng1_task.php");
}
else if ($row['level']=="mngmtu"){

  header("location:data_kzmtumng1_task.php");
}
else if ($row['level']=="mnghrgs"){

  header("location:data_kzhrgsmng1_task.php");
}
else if ($row['level']=="mngeng"){

  header("location:data_kzengmng1_task.php");
}
else if ($row['level']=="mnglog"){

  header("location:data_kzlogmng1_task.php");
}
else if ($row['level']=="mngims"){

  header("location:data_kzimsmng1_task.php");
}
else if ($row['level']=="admprod"){

  header("location:datauser_prod.php");
}
else if ($row['level']=="admeng"){

  header("location:datauser_eng.php");
}
else if ($row['level']=="admhrgs"){

  header("location:datauser_hrgs.php");
}
else if ($row['level']=="admims"){

  header("location:datauser_ims.php");
}
else if ($row['level']=="admlog"){

  header("location:datauser_log.php");
}
else if ($row['level']=="admmtu"){

  header("location:datauser_mtu.php");
}
else if ($row['level']=="admppic"){

  header("location:datauser_ppic.php");
}
else if ($row['level']=="admqa"){

  header("location:datauser_qa.php");
}
else if ($row['level']=="admqc"){

  header("location:datauser_qc.php");
}
else
{
  echo "<script>window.alert('SORRY,,, USERNAME OR PASSWORD WRONG .... PLEASE TRY AGAIN .. !!!')
    window.location='index.php'</script>";  
}

}

?>