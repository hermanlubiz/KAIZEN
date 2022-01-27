<?php
date_default_timezone_set("ASIA/JAKARTA");
header("content_type:application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=kaizen_Download.xls");
error_reporting(0);
?>

<center><h2 style="color: blue">DATA RECORD KAIZEN ALL DEPARTEMENT</h2></center>
<table class="table-responsive" border="1">
    <thead style="background-color: grey">
      <tr style="background-color: green">
        <th><center>No</center></th>
        <th><center>Tgl Usulan</center></th>
        <th><center>No Kaizen</center></th>
        <th><center>Kode & Area Proses</center></th>
        <th><center>Judul Kaizen</center></th>
        <th><center>Alasan</center></th>
        <th><center>Tipe</center></th>
        <th><center>Category</center></th>
        <th><center>Uraian Masalah</center></th>
        <th><center>Tindakan Perbaikan</center></th>
        <th><center>Dampak Perbaikan</center></th>
        <th><center>Sebelum Perbaikan</center></th>
        <th><center>Sesudah Perbaikan</center></th>
        <th style="background-color: coral"><center>Nama Superior</center></th>
        <th style="background-color: coral"><center>Nama Supervisor</center></th>

        <!-- <th colspan="2" style="background-color: coral"><center>Dikaji Oleh</center></th> -->
        <th style="background-color: coral"><center>Disetujui Oleh Manager</center></th>
        <th style="background-color: coral"><center>Comment MGR</center></th>
        <th style="background-color: coral"><center>Diverifikasi Oleh Spv OE</center></th>
        <th style="background-color: coral"><center>Comment SPV OE</center></th>
        <th><center>Status Disposisi</center></th>
        <th><center>Grade</center></th>
        </tr>
      
    
        

        
    </thead>
      <?php
include "koneksi.php";
if (isset($_GET['kode'])) {
$getdata = $_GET['kode'];
$sql = mysqli_query($koneksi,"SELECT * from tb_kzprod2020 WHERE tb_kzprod1.no_kaizen LIKE '%$getdata%' ORDER BY id ASC");
}else{
$sql = mysqli_query($koneksi,"SELECT * from tb_kzprod2020 ORDER BY id ASC");
}

$no=1;

while ($data = mysqli_fetch_object($sql))
{ 
       ?>
<tbody id="myTable">

 <tr class="btn-default" style="font-size: 70%">
  <!-- Trigger the modal with a button -->

  <td style="vertical-align: middle"><center><?php echo $no ?></center></td>
  <td style="vertical-align: middle"><center><?php
                   $ordate1 = $data->tgl_input;
                   $nedate1 = date("d-m-Y",strtotime($ordate1));
                   echo $nedate1 ?></center></td>
  <td style="vertical-align: middle"><center><?php echo $data->no_kaizen ?></center></td>
  <td style="vertical-align: middle"><center><?php echo $data->area ?></center></td>

  <td style="vertical-align: middle;font-size: 70%"><?php echo $data->judul ?></td>
  <td style="vertical-align: middle;font-size: 70%"><?php echo $data->alasan ?></td>
  <td style="vertical-align: middle"><center><?php echo $data->tipe ?></center></td>
  <td style="vertical-align: middle"><center><?php echo $data->cat ?></center></td>

  <td style="vertical-align: middle;font-size: 70%"><?php echo $data->masalah ?></td>
  <td style="vertical-align: middle;font-size: 70%"><?php echo $data->tindakan ?></td>
  <td style="vertical-align: middle;font-size: 70%"><?php echo $data->dampak ?></td>
  <td style="vertical-align: middle;font-size: 70%"><?php echo $data->sebelum ?></td>
  <td style="vertical-align: middle;font-size: 70%"><?php echo $data->sesudah ?></td>
  
  <td style="vertical-align: middle"><center><?php echo $data->oleh ?></center></td>
  <!-- <td style="vertical-align: middle"><center><?php echo $data->dikaji ?></center></td>
  <td style="vertical-align: middle"><center><?php echo $data->mngprod ?></center></td>
  <td style="vertical-align: middle"><center><?php echo $data->komen1 ?></center></td>
  <td style="vertical-align: middle"><center><?php echo $data->spvoe ?></center></td>
  <td style="vertical-align: middle"><center><?php echo $data->komen2 ?></center></td>
  <td style="vertical-align: middle"><center><?php echo $data->status ?></center></td> -->
  <?php  $no++; // otomatis ++  ?>
  <td style="vertical-align: middle"><center><?php  $a1x = $data->dikaji;
                        if (empty($a1x)){
                        echo "<p>In_Progres Oleh :".$data->nm_spv."</p>";
                        }else if ($a1x=="DIKAJI"){
                        echo "<a style='color:blue'><center>  ".$a1x." secara elektronik Oleh : ".$data->nm_spv." </center></a>";
                        }else {
                        echo "<a style='color:red'><center>  ".$a1x." secara elektronik Oleh : ".$data->nm_spv." </center></a>";
                        }?>

                       </center></td>
  

  

  <td style="vertical-align: middle"><center><?php  $a1 = $data->mngprod;
                        if (empty($a1)){
                        echo "<p>In_Progres Oleh : ".$data->ttdmng."</p>";
                        }else if ($a1=="DISETUJUI"){
                        echo "<a style='color:blue'><center> ".$a1." secara elektronik Oleh : ".$data->ttdmng." </center></a>";
                        }else {
                        echo "<a style='color:red'><center> ".$a1." secara elektronik Oleh : ".$data->ttdmng." </center></a>";
                        }?>

                        </center></td>


  <td style="vertical-align: middle"><center><?php echo $data->komen1 ?></center></td>
  

  <td style="vertical-align: middle"><center><?php
                        $a2 = $data->spvoe;
                        if (empty($a2)){
                        echo "<p>In_Progres Oleh : ".$data->ttdoe."</p>";
                        }else if ($a2=="DISETUJUI"){
                        echo "<a style='color:blue'><center> ".$a2." secara elektronik Oleh : ".$data->ttdoe." </center></a>";
                        }else {
                        echo "<a style='color:red'><center> ".$a2." secara elektronik Oleh : ".$data->ttdoe." </center></a>";
                        }?>

                       </center></td>

  <td style="vertical-align: middle"><center><?php echo $data->komen2 ?></center></td>

  <center><?php
                    $a3 = $data->status;
                    if (empty($a3)){
                    echo "<td style='vertical-align: middle'><center>In_Progres</center></td>";
                    }else if ($a3=="DITOLAK"){
                    echo "<td style='color:red;vertical-align: middle'><center>".$a3."</center></td>";
                    }else {
                    echo "<td style='color:blue;vertical-align: middle'><center>".$a3."</center></td>";
                    }?></center>

  <td style="vertical-align: middle"><center><?php echo $data->grade ?></center></td>
  
</tr>
<?php 
}
?>
  </table>
