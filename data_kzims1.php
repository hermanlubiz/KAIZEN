<?php
date_default_timezone_set("ASIA/JAKARTA");
include "ceklog_ims.php";
include "headerims1.php";
?>
<section id="main-content" style="position: absolute;">
<section class="wrapper main-wrapper row">
<div class="col-md-12" style="background-color: #ebebe0;">              
          

<div class="container-fluid-left" style="color: black">
  <center><h2 style="color: blue">DATA RECORD KAIZEN DEPARTEMENT IMS-HSE</h2></center>

<a href="form_kzims1.php" button type="submit" class="btn btn-primary">+ Tambah Input <span class="glyphicon glyphicon-check"></span></a>
  <a href="exportxl_kzprod.php" button type="submit" class="btn btn-warning disabled">Save All Data To Excel  <span class="glyphicon glyphicon-download-alt"></span></a>
  <?php
  include "koneksi.php";
  $sql = mysqli_query($koneksi,"SELECT * from tb_kzprod1 WHERE no_kaizen LIKE 'S%' ORDER BY id ASC");
  $count = mysqli_num_rows($sql);
  ?>
  <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-home"></span> Total Data Kaizen IMS-HSE <span class="badge"><?php echo $count ?></span></button>

  <div class="form-group row button" style="margin-top: 0.5%;">
        <div class="col-xs-2" style="width: 15%">
         <input class="form-control" id="myInput" type="text" placeholder="Search Category..." style="color: red; background-color: #f2f2f2">
         <div id="iducing" style="margin-left: 0%"></div> <!--button javascript save -->
        </div>
        
      </div>
       <form action="" method="get" name="postform" style="margin-top: -15%">
       <div class="form-group row" >
        <div class="col-xs-2" style="width: 13%">
         <input class="form-control" type="date" name="tgl_awal"required="" style="color: red">
        </div>
        <div class="col-xs-1">
         <button class="btn btn-default" style="color: red">s/d
       </div> 
        <div class="col-xs-2" style="width: 13%;margin-left: -5%">
         <input class="form-control" type="date" name="tgl_akhir"required="" style="color: red">
        </div>
        <div class="col-xs-2" style="width: 10%">
         <button type="submit" name="cari" class="btn btn-primary">Cari Range Tanggal <span class="glyphicon glyphicon-search"></button>
      </div>
      <div class="col-xs-1"style="width: 9%">
     <a href="data_kzims1.php" type="submit" class="btn btn-danger">Back <span class="glyphicon glyphicon-repeat"></span></a>
   </div>
   <div class="col-xs-1" style="width: 8%; ;margin-left: -3.5%">
     <a href="exportxlrange_kzprod1.php?tgl_awal=<?php echo $_GET['tgl_awal'] ?>&tgl_akhir=<?php echo $_GET['tgl_akhir'] ?>" type="submit" name="simpanrange" class="btn btn-warning disabled">Save Range To Excel <span class="glyphicon glyphicon-save"></span></a>
   </div>
      </div>
  </form>

   <!-- div container harus absolute untuk judul tabel-->
  <div id="isi" class="container-fluid-left" style="color: black;position: absolute;max-height: 80px;width:100%;overflow-y:auto;overflow-x:hidden;">
  <table class="table-responsive" border="1" style="position: relative;">
    <thead >
      <tr style="color: black; background-color: lightblue">
        <th rowspan="2"><center>No</center></th>
        <th rowspan="2"><center>Tanggal Usulan</center></th>
        <th rowspan="2"><center>No Kaizen</center></th>
        <th rowspan="2"><center>Oleh</center></th>
        <th rowspan="2"><center>Kode & Area Proses</center></th>
        <th rowspan="2"><center>Judul Kaizen</center></th>
        <th rowspan="2"><center>Alasan</center></th>
        <th rowspan="2"><center>Tipe</center></th>
        <th rowspan="2"><center>Category</center></th>
        <th rowspan="2"><center>Uraian Masalah</center></th>
        <th rowspan="2"><center>Tindakan Perbaikan</center></th>
 
        <th><center>Supervisor</center></th>
        <th><center>Manager</center></th>
        <th><center>Komentar</center></th>
        <th><center>Supervisor OE</center></th>
        <th><center>Komentar</center></th>
        <th><center>Status Disposisi</center></th>
        <th><center>Opsi</center></th>
    
    </thead>
      <?php
include "koneksi.php";
if (isset($_GET['cari'])) {

    $tgl1 = $_GET['tgl_awal'];
    $tgl2 = $_GET['tgl_akhir'];

$sql = mysqli_query($koneksi,"SELECT * from tb_kzprod1 WHERE tgl_input BETWEEN '$tgl1' and '$tgl2' ORDER BY id ASC");
}else{
$sql = mysqli_query($koneksi,"SELECT * from tb_kzprod1 WHERE no_kaizen LIKE 'S%' ORDER BY id DESC");
}

$no=1;

while ($data = mysqli_fetch_object($sql))
{ 
       ?>
<tbody id="myTable">
<tr class="btn-default" >
 <div class="container">
<!-- untuk hidden data judul tabel -->
 <tr style="background-color: white;visibility:hidden;">
  <!-- Trigger the modal with a button -->
  <td><center><?php echo $no ?></center></td>
  <td><center><?php echo $data->tgl_input ?></center></td>
  <td><center><?php echo $data->no_kaizen ?></center></td>
  <td><center><?php echo $data->oleh ?></center></td>
  <td><center><?php echo $data->area ?></center></td>

  <td><textarea rows="5" readonly><?php echo $data->judul ?></textarea></td>
  <td><textarea rows="5" readonly><?php echo $data->alasan ?></textarea></td>
  <td><center><?php echo $data->tipe ?></center></td>
  <td><center><?php echo $data->cat ?></center></td>
  <td><textarea rows="5" readonly><?php echo $data->masalah ?></textarea></td>
  <td><textarea rows="5" readonly><?php echo $data->tindakan ?></textarea></td>

  <td><center><p><?php
                        $ar3x = $data->dikaji;
                        if (empty($ar3x)){
                          echo "<p style='color:coral'><center>In_Progres</center></p>";
                        }else if ($ar3x=="DIKAJI"){
                          echo "<a style='color:blue'><center>  ".$ar3x." secara elektronik </center></a>";
                        }else {
                          echo "<a style='color:red'><center>  ".$ar3x." secara elektronik </center></a>";
                        }

                        $ar4x = $data->tglkaji;
                        $ar4ax= $data->dikaji;
                        if (empty($ar4ax)) {
                          echo "";
                        }else if ($ar4x=="0000-00-00"){
                         echo "";
                        }else{
                         echo "<a><center>".$ar4x."</center></a>";
                        }

                        $xr3x = $data->nm_spv;
                        if (empty($xr3x)) {
                        echo "";
                        }else{
                        echo "<a><center>".$data->nm_spv."</center></a>";
                        }       
                        ?>
                        
  <a class="btn btn-primary btn-xs" href= "verifikzuserall.php?id_edit=<?php echo $data->id ?>">Review <span class="glyphicon glyphicon-check"></span></a>
  </center></td>

  <?php  $no++; // otomatis ++  ?>

  <td><center><p><?php  $a1 = $data->mngprod;
                        if (empty($a1)){
                        echo "<p>In_Progres</p>";
                        }else if ($a1=="DISETUJUI"){
                        echo "<a style='color:blue'><center> ".$a1." secara elektronik </center></a>";
                        }else {
                        echo "<a style='color:red'><center> ".$a1." secara elektronik </center></a>";
                        }?>

                        <?php
                        $m3 = $data->tglmng;
                        $m3a= $data->mngprod;
                        if (empty($m3a)) {
                        echo "";
                        }else if ($m3=="0000-00-00"){
                         echo "";
                        }else{
                         echo "<a><center>".$m3."</center></a>";
                        }?>

                        <?php
                        $x1 = $data->ttdmng;
                        if (empty($x1)) {
                        echo "";
                        }else{
                         echo $data->ttdmng;
                        }?></center>

  <td><textarea rows="5" readonly><?php echo $data->komen1 ?></textarea></td>

  <td><center><p><?php
                        $a2 = $data->spvoe;
                        if (empty($a2)){
                        echo "<p>In_Progres</p>";
                        }else if ($a2=="DISETUJUI"){
                        echo "<a style='color:blue'><center> ".$a2." secara elektronik </center></a>";
                        }else {
                        echo "<a style='color:red'><center> ".$a2." secara elektronik </center></a>";
                        }?>

                        <?php
                        $x3 = $data->tgloe;
                        $x3a = $data->spvoe;
                        if (empty($x3a)) {
                        echo "";
                        }else if ($x3=="0000-00-00"){
                         echo "";
                        }else{
                         echo "<a><center>".$x3."</center></a>";
                        }?>

                        <?php
                        $x2 = $data->ttdoe;
                        if (empty($x2)) {
                        echo "";
                        }else{
                         echo $data->ttdoe;
                        }?></td></center>

  <td><textarea rows="5" readonly><?php echo $data->komen2 ?></textarea></td>
  <center><?php
                    $a3 = $data->status;
                    if (empty($a3)){
                    echo "<td>In_Progres</td>";
                    }else if ($a3=="DITOLAK"){
                    echo "<td style='color:red'><center>".$a3."</center></td>";
                    }else {
                    echo "<td style='color:blue'><center>".$a3."</center></td>";
                    }?></center>

  
  <td><center>
  <a class="btn btn-info btn-xs" target="_blank" href= "cetak.php?id_edit=<?php echo $data->id ?>">View.&.print <span class="glyphicon glyphicon-print"></span></a>
  <a class="btn btn-success btn-xs" href= "edit_kzuserall.php?id_edit=<?php echo $data->id ?>">Edit <span class="glyphicon glyphicon-edit"></span></a>
  </center></td>
</tr>
<?php 
}
?>
   </tbody>
  </table>
</div>

</body>
</html>






<!--untuk VIEW SCROOLL-->

<!-- untuk tabel scroll-->
<div  class="container-fluid-left" style="color: black;position: absolute-block;max-height: 655px;width:101.9%;overflow-y:auto;overflow-x:hidden;margin-top: 4.2%" >

<table class="table-responsive" border="1" style="position: relative;">
    <thead>
      <tr style="color: grey; background-color: transparent;">
        <th rowspan="2"><center>No</center></th>
        <th rowspan="2"><center>Tanggal Usulan</center></th>
        <th rowspan="2"><center>No Kaizen</center></th>
        <th rowspan="2"><center>Oleh</center></th>
        <th rowspan="2"><center>Kode & Area Proses</center></th>
        <th rowspan="2"><center>Judul Kaizen</center></th>
        <th rowspan="2"><center>Alasan</center></th>
        <th rowspan="2"><center>Tipe</center></th>
        <th rowspan="2"><center>Category</center></th>
        <th rowspan="2"><center>Uraian Masalah</center></th>
        <th rowspan="2"><center>Tindakan Perbaikan</center></th>
 
        <th><center>Supervisor</center></th>
        <th><center>Manager</center></th>
        <th><center>Komentar</center></th>
        <th><center>Supervisor OE</center></th>
        <th><center>Komentar</center></th>
        <th><center>Status Disposisi</center></th>
        <th><center>Opsi</center></th>
    
    </thead>
      <?php
include "koneksi.php";
if (isset($_GET['cari'])) {

    $tgl1 = $_GET['tgl_awal'];
    $tgl2 = $_GET['tgl_akhir'];

$sql = mysqli_query($koneksi,"SELECT * from tb_kzprod1 WHERE tgl_input BETWEEN '$tgl1' and '$tgl2' ORDER BY id ASC");
}else{
$sql = mysqli_query($koneksi,"SELECT * from tb_kzprod1 WHERE no_kaizen LIKE 'S%' ORDER BY id DESC");
}

$no=1;

while ($data = mysqli_fetch_object($sql))
{ 
       ?>
<tbody id="myTable">
<tr class="btn-default" >
 <div class="container">
<!-- untuk hidden data judul tabel -->
 <tr class="btn-default">
  <!-- Trigger the modal with a button -->
  <td><center><?php echo $no ?></center></td>
  <td><center><?php echo $data->tgl_input ?></center></td>
  <td><center><?php echo $data->no_kaizen ?></center></td>
  <td><center><?php echo $data->oleh ?></center></td>
  <td><center><?php echo $data->area ?></center></td>

  <td><textarea rows="5" readonly><?php echo $data->judul ?></textarea></td>
  <td><textarea rows="5" readonly><?php echo $data->alasan ?></textarea></td>
  <td><center><?php echo $data->tipe ?></center></td>
  <td><center><?php echo $data->cat ?></center></td>
  <td><textarea rows="5" readonly><?php echo $data->masalah ?></textarea></td>
  <td><textarea rows="5" readonly><?php echo $data->tindakan ?></textarea></td>

  <td><center><p><?php
                        $ar3x = $data->dikaji;
                        if (empty($ar3x)){
                          echo "<p style='color:coral'><center>In_Progres</center></p>";
                        }else if ($ar3x=="DIKAJI"){
                          echo "<a style='color:blue'><center>  ".$ar3x." secara elektronik </center></a>";
                        }else {
                          echo "<a style='color:red'><center>  ".$ar3x." secara elektronik </center></a>";
                        }

                        $ar4x = $data->tglkaji;
                        $ar4ax= $data->dikaji;
                        if (empty($ar4ax)) {
                          echo "";
                        }else if ($ar4x=="0000-00-00"){
                         echo "";
                        }else{
                         echo "<a><center>".$ar4x."</center></a>";
                        }

                        $xr3x = $data->nm_spv;
                        if (empty($xr3x)) {
                        echo "";
                        }else{
                        echo "<a><center>".$data->nm_spv."</center></a>";
                        }       
                        ?>
                        
  <a class="btn btn-primary btn-xs" href= "verifikzuserall.php?id_edit=<?php echo $data->id ?>">Review <span class="glyphicon glyphicon-check"></span></a>
  </center></td>

  <?php  $no++; // otomatis ++  ?>

  <td><center><p><?php  $a1 = $data->mngprod;
                        if (empty($a1)){
                        echo "<p>In_Progres</p>";
                        }else if ($a1=="DISETUJUI"){
                        echo "<a style='color:blue'><center> ".$a1." secara elektronik </center></a>";
                        }else {
                        echo "<a style='color:red'><center> ".$a1." secara elektronik </center></a>";
                        }?>

                        <?php
                        $m3 = $data->tglmng;
                        $m3a= $data->mngprod;
                        if (empty($m3a)) {
                        echo "";
                        }else if ($m3=="0000-00-00"){
                         echo "";
                        }else{
                         echo "<a><center>".$m3."</center></a>";
                        }?>

                        <?php
                        $x1 = $data->ttdmng;
                        if (empty($x1)) {
                        echo "";
                        }else{
                         echo $data->ttdmng;
                        }?></center>

  <td><textarea rows="5" readonly><?php echo $data->komen1 ?></textarea></td>

  <td><center><p><?php
                        $a2 = $data->spvoe;
                        if (empty($a2)){
                        echo "<p>In_Progres</p>";
                        }else if ($a2=="DISETUJUI"){
                        echo "<a style='color:blue'><center> ".$a2." secara elektronik </center></a>";
                        }else {
                        echo "<a style='color:red'><center> ".$a2." secara elektronik </center></a>";
                        }?>

                        <?php
                        $x3 = $data->tgloe;
                        $x3a = $data->spvoe;
                        if (empty($x3a)) {
                        echo "";
                        }else if ($x3=="0000-00-00"){
                         echo "";
                        }else{
                         echo "<a><center>".$x3."</center></a>";
                        }?>

                        <?php
                        $x2 = $data->ttdoe;
                        if (empty($x2)) {
                        echo "";
                        }else{
                         echo $data->ttdoe;
                        }?></td></center>

  <td><textarea rows="5" readonly><?php echo $data->komen2 ?></textarea></td>
  <center><?php
                    $a3 = $data->status;
                    if (empty($a3)){
                    echo "<td>In_Progres</td>";
                    }else if ($a3=="DITOLAK"){
                    echo "<td style='color:red'><center>".$a3."</center></td>";
                    }else {
                    echo "<td style='color:blue'><center>".$a3."</center></td>";
                    }?></center>

  
  <td><center>
  <a class="btn btn-info btn-xs" target="_blank" href= "cetak.php?id_edit=<?php echo $data->id ?>">View.&.print <span class="glyphicon glyphicon-print"></span></a>
  <a class="btn btn-success btn-xs" href= "edit_kzuserall.php?id_edit=<?php echo $data->id ?>">Edit <span class="glyphicon glyphicon-edit"></span></a>
  </center></td>
</tr>
<?php 
}
?>
  </table>
</body>
</html>

</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

      // untuk save javascript.
      var wk = document.getElementById('myInput').value; // utk ambil text yang dicari
      var link = document.getElementById('myInput').innerHTML =  'exportxl_kzprod.php?kode=' + wk ; // utk mnghubungkan data text yang di cari masukan ke innerhtml utk buat link baru 
      var wy = document.getElementById('iducing').innerHTML ="<a class='btn btn-primary disabled' href=" + link + ">Save Category </a>";
      // utk membuat button dan menampilkan button yg ada di atas <div id='iducing'></div>
      console.log(wy);
    });
  });
});
</script>

<script>
  $(document).ready(function(){
  $("#myInput").on("focus", function(){
    $("#isi").toggle(200);
  });
});
</script>

<!-- untuk zoom gambar-->
  <style>
      .zoomA {
        width: 5000px;
        height: auto;
        transition-duration: 1s;
        transition-timing-function: ease;
      }
      .zoomA:hover {
        transform: scale(9.2);
      }
    </style>
    <!-- untuk zoom text-->
  <style>
      .zoomAA {
        width: 5000px;
        height: auto;
        transition-duration: 1s;
        transition-timing-function: ease;
      }
      .zoomAA:hover {
        transform: scale(6.2);
      }
    </style>

    <?php include "footjqr.php"; ?>

</div>
</html>



