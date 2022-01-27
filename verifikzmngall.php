<?php
  include "koneksi.php";
  include "ceklog_mngall.php";

  if(isset($_POST['edit']));
  
  $iddis = $_GET['id_edit']; // _GET id_edit di ambil dari link di form_anggota yang ada ?id_edit
  $editdis = mysqli_query($koneksi,"SELECT * from tb_kzprod1 where id='$iddis'");
  $dataku = mysqli_fetch_object($editdis);

  $datakutipe=explode(',', $dataku->tipe);
  $datakucat=explode(',', $dataku->cat);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>A3 Online</title>

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
    
    </header>
    <!--header end-->

  <!-- Modal -->
   <div class="modal-dialog modal-lg">
        <div class="modal-content"style="border-color: red;width: 101%;margin-left: 7%;margin-top: -2%;position: absolute">
        <div class="modal-header" style="border-color: red; background-color: #003366">
        <div class="col-xs-1">
          <img src="img/dvl.1.jpg" style="width: 55px; border-radius: 50px">
        </div>
        <h3 class="modal-title" style="color: white"><center>VERIFICATION KAIZEN (MANAGER)</center></h3>
    </div>
    <div class="modal-body">
    <div class="container">
     <form method="post" action="" enctype="multipart/form-data">

     <input class="form-control" type="hidden" name="id" value ="<?php echo $dataku->id ?>">

     <div style="color: black;margin-left: 34%;font-family: serif;font-size: 150%">KAIZEN</div>

     <div class="form-group row">
      <div class="col-xs-1" style="width: 16%;margin-top: -3%">
        <input class="form-control" value="Tanggal Usulan" readonly style="color: blue">
        <input class="form-control" value="No Kaizen" readonly style="color: blue">
        <input class="form-control" value="Area Proses" readonly style="color: blue">
        <input class="form-control" value="Oleh" readonly style="color: blue">
      </div>
      <div class="col-xs-3" style="width: 15%; margin-left: -2.7%;margin-top: -3%">
        <?php
         $ordate1 = $dataku->tgl_input;
         $nedate1 = date("Y-m-d",strtotime($ordate1));
         ?>
        <input class="form-control" type="text" value="<?php echo $nedate1 ?>" readonly>
        <input class="form-control" type="text" name="no_kaizen" value="<?php echo $dataku->no_kaizen ?>" readonly>
        <input class="form-control" type="text" name="area" value="<?php echo $dataku->area ?>" required readonly>
        <input class="form-control" type="text" name="oleh" value="<?php echo $dataku->oleh ?>" required readonly>
      </div>
  
      <div class="col-xs-1" style="width: 16%;margin-left: 19%;margin-top: -3%">
        <input class="form-control" value="Document No" readonly style="color: blue">
        <input class="form-control" value="Rev. No" readonly style="color: blue">
        <input class="form-control" value="Effective Date" readonly style="color: blue">
        <input class="form-control" value="Refer Doc" readonly style="color: blue">
      </div>
      <div class="col-xs-3" style="width: 15%; margin-left: -2.7%;margin-top: -3%">
        <input class="form-control" type="text" value="FS-09.09-005" readonly>
        <input class="form-control" type="text" value="00" readonly>
        <input class="form-control" type="text" value="02 Jan 2019" readonly>
        <input class="form-control" type="text" value="WI-09.09-003" readonly>
      </div>
     </div>


     <table border="1" width="75%">
        <tr>
          <td width="37.5%" style="background-color: #ebebe0"><center>TEMA/JUDUL :</center></td>
          <td width="37.5%" style="background-color: #ebebe0"><center>ALASAN :</center></td>
        </tr>
        <tr>
          <td><textarea rows="4" cols="1" class="form-control" name="judul" required readonly><?php echo $dataku->judul ?></textarea></td>
          <td><textarea rows="4" cols="1" class="form-control" name="alasan" required readonly><?php echo $dataku->alasan ?></textarea></td>
        </tr>
        <tr>
          <td>
          <center>
            <label class="checkbox-inline" style="pointer-events: none"><input type="checkbox" name="tipe[]" id="check1" value="Mencegah" <?php if (in_array("Mencegah", $datakutipe)) echo "checked";?> onclick="setChecks(this)">Mencegah</label>
            <label class="checkbox-inline" style="pointer-events: none"><input type="checkbox" name="tipe[]" id="check2" value="Menyempurnakan" <?php if (in_array("Menyempurnakan", $datakutipe)) echo "checked";?> onclick="setChecks(this)">Menyempurnakan</label>
            <label class="checkbox-inline" style="pointer-events: none"><input type="checkbox" name="tipe[]" id="check3" value="Ide/Design baru" <?php if (in_array("Ide/Design baru", $datakutipe)) echo "checked";?> onclick="setChecks(this)">Ide/Design Baru</label>
          </center>
          </td>
          <td>
          <center>
            <label class="checkbox-inline" style="pointer-events: none"><input type="checkbox" name="cat[]" value="Quality" <?php if (in_array("Quality", $datakucat)) echo "checked";?>>Quality</label>
            <label class="checkbox-inline" style="pointer-events: none"><input type="checkbox" name="cat[]" value="Cost" <?php if (in_array("Cost", $datakucat)) echo "checked";?>>Cost</label>
            <label class="checkbox-inline" style="pointer-events: none"><input type="checkbox" name="cat[]" value="Delivery" <?php if (in_array("Delivery", $datakucat)) echo "checked";?>>Delivery</label>
            <label class="checkbox-inline" style="pointer-events: none"><input type="checkbox" name="cat[]" value="HSE" <?php if (in_array("HSE", $datakucat)) echo "checked";?>>HSE</label>
            <label class="checkbox-inline" style="pointer-events: none"><input type="checkbox" name="cat[]" value="5S" <?php if (in_array("5S", $datakucat)) echo "checked";?>>5S</label>
          </center>
          </td>
        </tr>
      </table>


      <table border="1" width="75%">
        <tr>
          <td width="25%" style="background-color: #ebebe0"><center>URAIAN MASALAH :</center></td>
          <td width="25%" style="background-color: #ebebe0"><center>TINDAKAN PERBAIKAN :</center></td>
          <td width="25%" style="background-color: #ebebe0"><center>DAMPAK PERBAIKAN :</center></td>
        </tr>
        <tr>
          <td><textarea rows="6" cols="1" class="form-control" name="masalah" required readonly><?php echo $dataku->masalah ?></textarea></td>
          <td><textarea rows="6" cols="1" class="form-control" name="tindakan" required readonly><?php echo $dataku->tindakan ?></textarea></td>
          <td><textarea rows="6" cols="1" class="form-control" name="dampak" required readonly><?php echo $dataku->dampak ?></textarea></td>
        </tr>
      </table>

      <table border="1" width="75%">
        <tr>
          <td width="37.5%" style="background-color: #ebebe0"><center>SEBELUM IMPROVEMENT :</center></td>
          <td width="37.5%" style="background-color: #ebebe0"><center>SESUDAH IMPROVEMENT :</center></td>
        </tr>
        <tr>
          <td><textarea rows="6" cols="1" class="form-control" name="sebelum" required readonly><?php echo $dataku->sebelum ?></textarea></td>
          <td><textarea rows="6" cols="1" class="form-control" name="sesudah" required readonly><?php echo $dataku->sesudah ?></textarea></td>
        </tr>
        <tr>
          <td>
            <input type="checkbox" name="ubah_foto" value="true" style="pointer-events: none"> Ceklis ini jika ingin mengubah foto<br>
            <input type="file" name="img1" value="<?php echo $dataku->img1 ?>" style="pointer-events: none"/>
            <img class="zoomA" src="filesave/<?php echo $dataku->img1; ?>" style="width: 220px;float: left;margin-bottom: 5px;">
            <i style="float: left;font-size: 11px;color: red">File harus ber Extention jpg, png atau gif selain itu tidak disimpan</i>
          </td>
          <td>
            <input type="checkbox" name="ubah_foto" value="true" style="pointer-events: none"> Ceklis ini jika ingin mengubah foto<br>
            <input type="file" name="img2" value="<?php echo $dataku->img2 ?>" style="pointer-events: none"/>
            <img class="zoomA" src="filesave/<?php echo $dataku->img2; ?>" style="width: 220px;float: left;margin-bottom: 5px;">
            <i style="float: left;font-size: 11px;color: blue">File harus ber Extention jpg, png atau gif selain itu tidak disimpan</i>
          </td>
        </tr>
      </table>


      <table border="1" width="75%">
        <tr>
          <td width="25%" style="background-color: #ebebe0"><center>Tgl Mulai</center></td>
          <td width="25%" style="background-color: #ebebe0"><center>Tgl Selesai</center></td>
        </tr>
        <tr>
          <td>
            <?php
             $ordate2 = $dataku->tgl_mulai;
             $nedate2 = date("Y-m-d",strtotime($ordate2));
             ?>
            <input class="form-control" type="date" name="tgl_mulai" required readonly value="<?php echo $nedate2 ?>">
          </td>
          <td>
            <?php
             $ordate3 = $dataku->tgl_selesai;
             $nedate3 = date("Y-m-d",strtotime($ordate3));
             ?>
            <input class="form-control" type="date" name="tgl_selesai" required readonly value="<?php echo $nedate3 ?>">
          </td>
        </tr>
        <tr>
          <td width="37.5%" style="background-color: #ebebe0"><center>RENCANA PERBAIKAN SELANJUTNYA :</center></td>
          <td width="37.5%" style="background-color: #ebebe0"><center>DIKAJI OLEH</center></td>
        </tr>
        <tr>
          <td><textarea rows="3" cols="1" class="form-control" name="rps" readonly><?php echo $dataku->rps ?></textarea></td>

          <td>
          <input type="hidden" class="form-control text-center" style="width: 100%" name="nm_spv" value="<?php echo $dataku->nm_spv ?>" readonly>
          <input type="hidden" class="form-control text-center" style="width: 100%" name="dikaji" value="<?php echo $dataku->dikaji ?>" readonly>
          <input type="hidden" class="form-control text-center" style="width: 100%" name="tglkaji" value="<?php echo $dataku->tglkaji ?>" readonly>
          <?php
          $ar3x = $dataku->dikaji;
          if (empty($ar3x)){
            echo "<p style='color:coral'><center>In_Progres</center></p>";
          }else if ($ar3x=="DIKAJI"){
            echo "<a style='color:blue'><center>  ".$ar3x." secara elektronik </center></a>";
          }else {
            echo "<a style='color:red'><center>  ".$ar3x." secara elektronik </center></a>";
          }

          $ar4x = $dataku->tglkaji;
          $ar4ax= $dataku->dikaji;
          if (empty($ar4ax)) {
            echo "";
          }else if ($ar4x=="0000-00-00"){
           echo "";
         }else{
           echo "<a><center>".$ar4x."</center></a>";
         }

         $xr3x = $dataku->nm_spv;
         if (empty($xr3x)) {
          echo "";
        }else{
         echo "<a><center>".$dataku->nm_spv."</center></a>";
       }       
      ?>
      </td>
  </tr>
  </table>


      <table border="1" width="75%">
        <tr>
          <td width="37.5%" style="background-color: #ebebe0"><center>KOMENTAR MANAGER</center></td>
          <td width="37.5%" style="background-color: #ebebe0"><center>MANAGER DEPARTMENT</center></td>
        </tr>
        <td><textarea rows="7" cols="1" class="form-control" name="komen1"><?php echo $dataku->komen1 ?></textarea></td>

        <td>
          <input type="hidden" class="form-control text-center" style="width: 100%" name="ttdmng" value="<?php echo $dataku->ttdmng ?>" readonly>
          <input type="hidden" class="form-control text-center" style="width: 100%" name="mngprod" value="<?php echo $dataku->mngprod ?>" readonly>
          <input type="hidden" class="form-control text-center" style="width: 100%" name="tglmng" value="<?php echo $dataku->tglmng ?>" readonly>
          <?php
          $ar3x = $dataku->mngprod;
          if (empty($ar3x)){
            echo "<p style='color:coral'><center>In_Progres</center></p>";
          }else if ($ar3x=="DISETUJUI"){
            echo "<a style='color:blue'><center>  ".$ar3x." secara elektronik </center></a>";
          }else {
            echo "<a style='color:red'><center>  ".$ar3x." secara elektronik </center></a>";
          }

          $ar4x = $dataku->tglmng;
          $ar4ax= $dataku->mngprod;
          if (empty($ar4ax)) {
            echo "";
          }else if ($ar4x=="0000-00-00"){
           echo "";
         }else{
           echo "<a><center>".$ar4x."</center></a>";
         }

         $xr3x = $dataku->ttdmng;
         if (empty($xr3x)) {
          echo "";
        }else{
         echo "<a><center>".$dataku->ttdmng."</center></a>";
       }       
      ?>

        <p><center>isi option dibawah sebelum Click Button Verification</center></p>
        <select class="form-control" type="text" name="mngprod" required style="border-color: red">
         <option value="">
          <option style="color:blue">DISETUJUI</option>
          <option style="color:red">DITOLAK</option>
          <option style="color:black">REVIEW</option>
          <?php
            $dn01 = mysqli_query($koneksi,"SELECT * FROM tb_kzprod1 where id='$iddis'");
            foreach ($dn01 as $val01) 
            {
            echo "<option if ($val01[mngprod]==$dataku->mngprod) selected='selected' value='$val01[mngprod]'>".$val01['mngprod']."</option>";
            }  
          ?>   
         </select>
     
          <?php
          include "koneksi.php";
           $no     = mysqli_query($koneksi,"SELECT no_kaizen FROM tb_kzprod1 WHERE id='$iddis' ");
           $no_kz  = mysqli_fetch_array($no);
           $kd     = $no_kz['no_kaizen'];
           //$urut   = substr($kd, 5, 0);

              if (strpbrk($kd, P)){
                $ttd1 = "Oleh:A.Raino";
              }else if (strpbrk($kd, A)) {
                $ttd1 = "Oleh:Emi.P";
              }else if (strpbrk($kd, C)){
                $ttd1 = "Oleh:Dewi.S";
              }else if (strpbrk($kd, I)){
                $ttd1 = "Oleh:Abdullah.S";
              }else if (strpbrk($kd, M)){
                $ttd1 = "Oleh:Aprilia.P";
              }else if (strpbrk($kd, H)){
                $ttd1 = "Oleh:Teguh.S";
              }else if (strpbrk($kd, E)){
                $ttd1 = "Oleh:Wasana.S";
              }else if (strpbrk($kd, L)){
                $ttd1 = "Oleh:Abdullah.S";
              }else{
                $ttd1 = "Oleh:Adhi.S";
              }
              ?>

          <input type="text" name="ttdmng" value="<?php echo $ttd1 ?>" style="display:none;">
          <input type="text" name="tglmng" value="<?php echo date("d-m-Y") ?>" style="display:none;">
         </td>
        </tr>
      </table>




      <div class="form-group row" style="display: none; ">
      <div class="col-xs-1" style="width: 13%">
        <label>.</label>
        <input class="form-control" value="Verified By" readonly style="color: blue">
      </div>
      <div class="col-xs-3" style="width: 17%; margin-left: -2.7%">
        <center><label>Supervisor OE</label></center>
        <input class="form-control" type="text" name="spvoe" value="<?php echo $dataku->spvoe ?>">
        <input type="text" name="ttdoe" value="<?php echo $dataku->ttdoe ?>">
        <input type="text" name="tgloe" value="<?php echo $dataku->tgloe ?>" style="display:none; ;">
        <input type="text" name="grade" value="<?php echo $dataku->grade ?>" style="display:none; ;">
      </div>
      <div class="col-xs-3" style="width: 36.5%; margin-left: -2.7%">
        <center><label>Komentar</label></center>
        <input class="form-control" type="text" name="komen2" value="<?php echo $dataku->komen2 ?>">
      </div>
      <div class="col-xs-4" style="width: 15%;color: blue; margin-top: -3%">
        <center><label>Status Disposisi</label></center>
        <input class="form-control" type="text" name="status" value="<?php echo $dataku->status ?>">
      </div>
      </div>


      <?php

      include "koneksi.php";
       $noc     = mysqli_query($koneksi,"SELECT no_kaizen FROM tb_kzprod1 WHERE id='$iddis' ");
       $no_kzc  = mysqli_fetch_array($noc);
       $kdc     = $no_kzc['no_kaizen'];
       //$urut   = substr($kd, 5, 0);

          if (strpbrk($kdc, P)){
            $ke2 = "data_kzprodmng2_task.php";
          }else if (strpbrk($kdc, A)) {
            $ke2 = "data_kzqamng1_task.php";
          }else if (strpbrk($kdc, C)){
            $ke2 = "data_kzqcmng1_task.php";
          }else if (strpbrk($kdc, I)){
            $ke2 = "data_kzppicmng1_task.php";
          }else if (strpbrk($kdc, M)){
            $ke2 = "data_kzmtumng1_task.php";
          }else if (strpbrk($kdc, H)){
            $ke2 = "data_kzhrgsmng1_task.php";
          }else if (strpbrk($kdc, E)){
            $ke2 = "data_kzengmng1_task.php";
          }else if (strpbrk($kdc, L)){
            $ke2 = "data_kzlogmng1_task.php";
          }else{
            $ke2 = "data_kzimsmng1_task.php";
          }

      ?>

<br>

    <div class="form-group row">
      <div class="col-xs-12">
        <button type="submit" name="update" class="btn btn-primary">Verified <span class="glyphicon glyphicon-save"></button>
        <a href="<?php echo $ke2 ?>" button type="submit" class="btn btn-danger">Cancel <span class="glyphicon glyphicon-check"></span></a>
      </div>
    </div>  
</form>
</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "footjqr.php"; ?>



<!-- proses update-->
<?php

?>

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

                 include "koneksi.php";
                 $no1     = mysqli_query($koneksi,"SELECT no_kaizen FROM tb_kzprod1 WHERE id='$id' ");
                 $no_kz1  = mysqli_fetch_array($no1);
                 $kd1     = $no_kz1['no_kaizen'];
                 //$urut   = substr($kd, 5, 0);

                    if (strpbrk($kd1, 'P')){
                      $ke = "data_kzprodmng2_task.php";
                    }else if (strpbrk($kd1, 'A')) {
                      $ke = "data_kzqamng1_task.php";
                    }else if (strpbrk($kd1, 'C')){
                      $ke = "data_kzqcmng1_task.php";
                    }else if (strpbrk($kd1, 'I')){
                      $ke = "data_kzppicmng1_task.php";
                    }else if (strpbrk($kd1, 'M')){
                      $ke = "data_kzmtumng1_task.php";
                    }else if (strpbrk($kd1, 'H')){
                      $ke = "data_kzhrgsmng1_task.php";
                    }else if (strpbrk($kd1, 'E')){
                      $ke = "data_kzengmng1_task.php";
                    }else if (strpbrk($kd1, 'L')){
                      $ke = "data_kzlogmng1_task.php";
                    }else{
                      $ke = "data_kzimsmng1_task.php";
                    }
                    
                    echo "<script>alert('BERHASIL DI VERIFIKASI.');window.location='".$ke."';</script>";
      
                  }

}

 ?>

<script>
<!--
//initial checkCount of zero
var checkCount=0
//maximum number of allowed checked boxes
var maxChecks=0
function setChecks(obj){
//increment/decrement checkCount
if(obj.checked){
checkCount=checkCount+1
}else{
checkCount=checkCount-1
}
//if they checked a 4th box, uncheck the box, then decrement checkcount and pop alert
if (checkCount>maxChecks){
obj.checked=false
checkCount=checkCount-1
alert('Hanya bisa memilih '+1+' options saja ya..!!')
}
}
//-->
</script>

<!-- untuk zoom gambar-->
  <style>
      .zoomA {
        width: 500px;
        height: auto;
        transition-duration: 1s;
        transition-timing-function: ease;
      }
      .zoomA:hover {
        transform: scale(3.1);
      }
    </style>




 