<!-- proses update-->

<?php
include "koneksi.php"; 
//proses update
if (isset($_POST['update'])) {

$id   = $_POST['id'];

$a1   = $_POST['no_kaizen'];
$a2   = $_POST['area'];
$a3   = $_POST['oleh'];
$a4   = $_POST['judul'];
$a5   = $_POST['alasan'];
$a6   = implode(",", $_POST['tipe']);
$a7   = implode(",", $_POST['cat']);
$a8   = $_POST['masalah'];
$a9   = $_POST['tindakan'];
$a10  = $_POST['dampak'];

$a11  = $_POST['sebelum'];
$gm12 = $_FILES['img1']['name'];
$a13  = $_POST['sesudah'];
$gm14 = $_FILES['img2']['name'];

$a15  = $_POST['nm_spv'];
$a16  = $_POST['tgl_mulai'];
$a17  = $_POST['tgl_selesai'];
$a18  = $_POST['rps'];
$a19  = $_POST['mngprod'];
$a20  = $_POST['komen1'];
$a21  = $_POST['spvoe'];
$a22  = $_POST['komen2'];
$a23  = $_POST['status'];
$a24  = $_POST['ttdmng'];
$a25  = $_POST['ttdoe'];
$a26  = $_POST['grade'];
$a27  = $_POST['tglmng'];
$a28  = $_POST['tgloe'];



  $query3 = "UPDATE tb_kzprod1 SET id='$id', no_kaizen='$a1', area='$a2', oleh='$a3', judul='$a4',alasan='$a5', tipe='$a6', cat='$a7', masalah='$a8', tindakan='$a9', dampak='$a10', sebelum='$a11', sesudah='$a13', nm_spv='$a15', tgl_mulai='$a16', tgl_selesai='$a17', rps='$a18',mngprod='$a19', komen1='$a20', spvoe='$a21', komen2='$a22', status='$a21', ttdmng='$a24', ttdoe='$a25', grade='$a26', tglmng='$a27', tgloe='$a28'";

                  $query3 .= "WHERE id = '$id'";
                  $result3 = mysqli_query($koneksi, $query3);
                  // periska query apakah ada error
                  if(!$result3){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    
                    echo "<script>alert('BERHASIL DI VERIFIKASI.');window.location='data_kzprod1.php';</script>";
      
                  }


}

 ?>