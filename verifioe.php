<?php
  include "ceklog_admin.php";
  include "koneksi.php";

  if(isset($_POST['edit']));
  
  $iddis = $_GET['id_edit']; // _GET id_edit di ambil dari link di form_anggota yang ada ?id_edit
  $editdis = mysqli_query($koneksi,"SELECT * from tb_kzprod1 where id='$iddis'");
  $dataku = mysqli_fetch_object($editdis);

  $datakutipe=explode(',', $dataku->tipe);
  $datakucat=explode(',', $dataku->cat);
?>

  <!-- Modal -->
   <div class="modal-dialog modal-lg">
        <div class="modal-content"style="border-color: red;width: 101%;margin-left: 7%;margin-top: -2%;position: absolute">
        <div class="modal-header" style="border-color: red; background-color: #003366">
        <div class="col-xs-1">
          <img src="img/dvl.1.jpg" style="width: 55px; border-radius: 50px">
        </div>
        <h3 class="modal-title" style="color: white"><center>VERIF. KAIZEN</center></h3>
    </div>
    <div class="modal-body">
    <div class="container">
     <form method="post" action="verifioeubah.php" enctype="multipart/form-data">

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
        <input class="form-control" type="text" name="area" value="<?php echo $dataku->area ?>" required>
        <input class="form-control" type="text" name="oleh" value="<?php echo $dataku->oleh ?>" required>
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
          <td><textarea rows="4" cols="1" class="form-control" name="judul" required ><?php echo $dataku->judul ?></textarea></td>
          <td><textarea rows="4" cols="1" class="form-control" name="alasan" required ><?php echo $dataku->alasan ?></textarea></td>
        </tr>
        <tr>
          <td>
          <center>
            <label class="checkbox-inline"><input type="checkbox" name="tipe[]" id="check1" value="Mencegah" <?php if (in_array("Mencegah", $datakutipe)) echo "checked";?> onclick="setChecks(this)">Mencegah</label>
            <label class="checkbox-inline"><input type="checkbox" name="tipe[]" id="check2" value="Menyempurnakan" <?php if (in_array("Menyempurnakan", $datakutipe)) echo "checked";?> onclick="setChecks(this)">Menyempurnakan</label>
            <label class="checkbox-inline"><input type="checkbox" name="tipe[]" id="check3" value="Ide/Design baru" <?php if (in_array("Ide/Design baru", $datakutipe)) echo "checked";?> onclick="setChecks(this)">Ide/Design Baru</label>
          </center>
          </td>
          <td>
          <center>
            <label class="checkbox-inline"><input type="checkbox" name="cat[]" value="Quality" <?php if (in_array("Quality", $datakucat)) echo "checked";?>>Quality</label>
            <label class="checkbox-inline"><input type="checkbox" name="cat[]" value="Cost" <?php if (in_array("Cost", $datakucat)) echo "checked";?>>Cost</label>
            <label class="checkbox-inline"><input type="checkbox" name="cat[]" value="Delivery" <?php if (in_array("Delivery", $datakucat)) echo "checked";?>>Delivery</label>
            <label class="checkbox-inline"><input type="checkbox" name="cat[]" value="HSE" <?php if (in_array("HSE", $datakucat)) echo "checked";?>>HSE</label>
            <label class="checkbox-inline"><input type="checkbox" name="cat[]" value="5S" <?php if (in_array("5S", $datakucat)) echo "checked";?>>5S</label>
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
          <td><textarea rows="6" cols="1" class="form-control" name="masalah" required ><?php echo $dataku->masalah ?></textarea></td>
          <td><textarea rows="6" cols="1" class="form-control" name="tindakan" required ><?php echo $dataku->tindakan ?></textarea></td>
          <td><textarea rows="6" cols="1" class="form-control" name="dampak" required ><?php echo $dataku->dampak ?></textarea></td>
        </tr>
      </table>

      <table border="1" width="75%">
        <tr>
          <td width="37.5%" style="background-color: #ebebe0"><center>SEBELUM IMPROVEMENT :</center></td>
          <td width="37.5%" style="background-color: #ebebe0"><center>SESUDAH IMPROVEMENT :</center></td>
        </tr>
        <tr>
          <td><textarea rows="6" cols="1" class="form-control" name="sebelum" required ><?php echo $dataku->sebelum ?></textarea></td>
          <td><textarea rows="6" cols="1" class="form-control" name="sesudah" required ><?php echo $dataku->sesudah ?></textarea></td>
        </tr>
        <tr>
          <td>
            <input type="checkbox" name="ubah_foto" value="true"> Ceklis ini jika ingin mengubah foto<br>
            <input type="file" name="img1" value="<?php echo $dataku->img1 ?>"/>
            <img class="zoomA" src="filesave/<?php echo $dataku->img1; ?>" style="width: 220px;float: left;margin-bottom: 5px;">
            <i style="float: left;font-size: 11px;color: red">File harus ber Extention jpg, png atau gif selain itu tidak disimpan</i>
          </td>
          <td>
            <input type="checkbox" name="ubah_foto" value="true"> Ceklis ini jika ingin mengubah foto<br>
            <input type="file" name="img2" value="<?php echo $dataku->img2 ?>"/>
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
            <input class="form-control" type="date" name="tgl_mulai" required value="<?php echo $nedate2 ?>">
          </td>
          <td>
            <?php
             $ordate3 = $dataku->tgl_selesai;
             $nedate3 = date("Y-m-d",strtotime($ordate3));
             ?>
            <input class="form-control" type="date" name="tgl_selesai" required value="<?php echo $nedate3 ?>">
          </td>
        </tr>
        <tr>
          <td width="37.5%" style="background-color: #ebebe0"><center>RENCANA PERBAIKAN SELANJUTNYA :</center></td>
          <td width="37.5%" style="background-color: #ebebe0"><center>DIKAJI OLEH</center></td>
        </tr>
        <tr>
          <td><textarea rows="3" cols="1" class="form-control" name="rps"><?php echo $dataku->rps ?></textarea></td>

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
        <td><textarea rows="3" cols="1" class="form-control" name="komen1"><?php echo $dataku->komen1 ?></textarea></td>

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

        </tr>
      </table>


      <table border="1" width="75%">
        <tr>
          <td width="25%" style="background-color: #ebebe0"><center>KOMENTAR SPV OE</center></td>
          <td width="10%" style="background-color: #ebebe0"><center>GRADE</center></td>
          <td width="35%" style="background-color: #ebebe0"><center>SPV OE</center></td>
        </tr>
        <td><textarea rows="5" cols="1" class="form-control" name="komen2"><?php echo $dataku->komen2 ?></textarea></td>

        <td>
          <select class="form-control" type="text" name="grade">
         <option value="">
          <option style="color:blue">1</option>
          <option style="color:red">2</option>
          <option style="color:black">3</option>
          <?php
            $dn0 = mysqli_query($koneksi,"SELECT * FROM tb_kzprod1 where id='$iddis'");
            foreach ($dn0 as $val0) 
            {
            echo "<option if ($val0[grade]==$dataku->grade) selected='selected' value='$val0[grade]'>".$val0['grade']."</option>";
            }  
          ?>   
         </select>
        </td>

        <td>
          <input type="hidden" class="form-control text-center" style="width: 100%" name="ttdoe" value="<?php echo $dataku->ttdoe ?>" readonly>
          <input type="hidden" class="form-control text-center" style="width: 100%" name="spvoe" value="<?php echo $dataku->spvoe ?>" readonly>
          <input type="hidden" class="form-control text-center" style="width: 100%" name="tgloe" value="<?php echo $dataku->tgloe ?>" readonly>
          <?php
          $ar3x = $dataku->spvoe;
          if (empty($ar3x)){
            echo "<p style='color:coral'><center>In_Progres</center></p>";
          }else if ($ar3x=="DISETUJUI"){
            echo "<a style='color:blue'><center>  ".$ar3x." secara elektronik </center></a>";
          }else {
            echo "<a style='color:red'><center>  ".$ar3x." secara elektronik </center></a>";
          }

          $ar4x = $dataku->tgloe;
          $ar4ax= $dataku->spvoe;
          if (empty($ar4ax)) {
            echo "";
          }else if ($ar4x=="0000-00-00"){
           echo "";
         }else{
           echo "<a><center>".$ar4x."</center></a>";
         }

         $xr3x = $dataku->ttdoe;
         if (empty($xr3x)) {
          echo "";
        }else{
         echo "<a><center>".$dataku->ttdoe."</center></a>";
       }       
      ?>

      <p><center>isi option dibawah sebelum Click Button Verification</center></p>
      <select class="form-control" type="text" name="spvoe" required style="border-color: red">
         <option value="">
          <option style="color:blue">DISETUJUI</option>
          <option style="color:red">DITOLAK</option>
          <option style="color:black">REVIEW</option>
          <?php
            $dn1 = mysqli_query($koneksi,"SELECT * FROM tb_kzprod1 where id='$iddis'");
            foreach ($dn1 as $val1) 
            {
            echo "<option if ($val1[spvoe]==$dataku->spvoe) selected='selected' value='$val1[spvoe]'>".$val1['spvoe']."</option>";
            }  
          ?>   
         </select>

         <input type="text" name="ttdoe" value="Oleh:Adriel.M" style="display: none;">
         <input type="text" name="tgloe" value="<?php echo date("d-m-Y") ?>" style="display:none;">

         <div class="form-group row" style="display: none;">
         <div class="col-xs-4" style="width: 15%;color: blue; margin-top: -3%">
        <center><label>Status Disposisi</label></center>
        <input class="form-control" type="text" name="status" value="<?php echo $dataku->status ?>">
      </div>
      </div>

        </tr>
      </table>

      <br>

    <div class="form-group row">
      <div class="col-xs-12">
        <button type="submit" name="update" class="btn btn-primary">Verified <span class="glyphicon glyphicon-save"></button>
        <a href="data_kzprod1.php" type="submit" class="btn btn-danger">Cancel <span class="glyphicon glyphicon-repeat"></span></a>
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



 