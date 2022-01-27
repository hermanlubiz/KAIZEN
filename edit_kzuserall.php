<?php
  include "koneksi.php";
  include "ceklog_userall.php";
  include "header1.php";


  if(isset($_POST['edit']));
  
  $iddis = $_GET['id_edit']; // _GET id_edit di ambil dari link di form_anggota yang ada ?id_edit
  $editdis = mysqli_query($koneksi,"SELECT * from tb_kzprod1 where id='$iddis'");
  $dataku = mysqli_fetch_object($editdis);

  $datakutipe=explode(',', $dataku->tipe);
  $datakucat=explode(',', $dataku->cat);
?>

<section class="wrapper main-wrapper row" style="color: red">
   <div class="container-left">
  <!-- Modal -->
   <div class="modal-dialog modal-lg">
        <div class="modal-content"style="border-color: red;width: 101%;margin-left: 7%;margin-top: -2%;position: absolute">
        <div class="modal-header" style="border-color: red; background-color: #003366">
        <div class="col-xs-1">
          <img src="img/dvl.1.jpg" style="width: 55px; border-radius: 50px">
        </div>
        <h3 class="modal-title" style="color: white"><center>FORM EDIT KAIZEN ONLINE</center></h3>
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
        <input class="form-control" value="Kode & Area Proses" readonly style="color: blue">
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

    <div class="form-group row">
      <div class="col-xs-4" style="width: 38%">
        <label>TEMA/JUDUL :</label>
        <textarea class="form-control" rows="4" cols="4" type="text" name="judul" required><?php echo $dataku->judul ?></textarea>
      </div>
      <div class="col-xs-4" style="width: 38%">
        <label>ALASAN :</label>
        <textarea class="form-control" rows="4" cols="4" type="text" name="alasan" required><?php echo $dataku->alasan ?></textarea>
      </div>
    </div>
         
    <div class="form-group row" style="margin-top: -1.5%;color: blue;font-size: 9px">
    <div class="col-xs-5">
    <label class="checkbox-inline"><input type="checkbox" name="tipe[]" id="check1" value="Mencegah" <?php if (in_array("Mencegah", $datakutipe)) echo "checked";?> onclick="setChecks(this)">Mencegah</label>
    <label class="checkbox-inline"><input type="checkbox" name="tipe[]" id="check2" value="Menyempurnakan" <?php if (in_array("Menyempurnakan", $datakutipe)) echo "checked";?> onclick="setChecks(this)">Menyempurnakan</label>
    <label class="checkbox-inline"><input type="checkbox" name="tipe[]" id="check3" value="Ide/Design baru" <?php if (in_array("Ide/Design baru", $datakutipe)) echo "checked";?> onclick="setChecks(this)">Ide/Design Baru</label>
    </div>

    <div class="col-xs-5" style="margin-left: 38.5%;margin-top: -1.2%;color: blue;font-size: 9px">
    <label class="checkbox-inline"><input type="checkbox" name="cat[]" value="Quality" <?php if (in_array("Quality", $datakucat)) echo "checked";?>>Quality</label>
    <label class="checkbox-inline"><input type="checkbox" name="cat[]" value="Cost" <?php if (in_array("Cost", $datakucat)) echo "checked";?>>Cost</label>
    <label class="checkbox-inline"><input type="checkbox" name="cat[]" value="Delivery" <?php if (in_array("Delivery", $datakucat)) echo "checked";?>>Delivery</label>
    <label class="checkbox-inline"><input type="checkbox" name="cat[]" value="HSE" <?php if (in_array("HSE", $datakucat)) echo "checked";?>>HSE</label>
    <label class="checkbox-inline"><input type="checkbox" name="cat[]" value="5S" <?php if (in_array("5S", $datakucat)) echo "checked";?>>5S</label>
    </div>
  </div>

  <div class="form-group row">
      <div class="col-xs-4" style="width: 25.3%">
        <label>URAIAN MASALAH :</label>
        <textarea rows="20" cols="4" type="text" name="masalah" class="form-control" required><?php echo $dataku->masalah ?></textarea>
      </div>
      <div class="col-xs-4" style="width: 25.3%">
        <label>TINDAKAN PERBAIKAN :</label>
        <textarea rows="20" cols="4" type="text" name="tindakan" class="form-control" required><?php echo $dataku->tindakan ?></textarea>
      </div>
      <div class="col-xs-4" style="width: 25.3%">
        <label>DAMPAK PERBAIKAN :</label>
        <textarea rows="20" cols="4" type="text" name="dampak" class="form-control" required><?php echo $dataku->dampak ?></textarea>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-xs-4" style="width: 38%">
        <label>SEBELUM IMPROVEMENT :</label>
        <textarea rows="15" cols="4" type="text" name="sebelum" class="form-control" required><?php echo $dataku->sebelum ?></textarea>
      <input type="checkbox" name="ubah_foto" value="true"> Ceklis ini jika ingin mengubah foto<br>
      <input type="file" id="image-source" name="img1" value="<?php echo $dataku->img1 ?>"/>
      <img src="filesave/<?php echo $dataku->img1; ?>" style="width: 220px;float: left;margin-bottom: 5px;">
      <i style="float: left;font-size: 11px;color: red">File Max 1 MB dan harus ber Extention jpg, png atau gif selain itu tidak disimpan</i>
      </div>
      <div class="col-xs-4" style="width: 39.5%;color: blue;margin-left: -1.5%">
        <label>SESUDAH IMPROVEMENT :</label>
        <textarea rows="15" cols="4" type="text" name="sesudah" class="form-control" required><?php echo $dataku->sesudah ?></textarea>
      <input type="checkbox" name="ubah_foto" value="true"> Ceklis ini jika ingin mengubah foto<br>
      <input type="file" id="image-source2" name="img2" value="<?php echo $dataku->img2 ?>"/>
      <img src="filesave/<?php echo $dataku->img2; ?>" style="width: 220px;float: left;margin-bottom: 5px;">
      <i style="float: left;font-size: 11px;color: blue">File Max 1 MB dan harus ber Extention jpg, png atau gif selain itu tidak disimpan</i>
      </div>
    </div>



    <div class="form-group row">
      <div class="col-xs-1" style="width: 13%">
        <label>.</label>
        <input class="form-control" value="Dikaji Oleh" readonly style="color: blue">
      </div>
      <div class="col-xs-3" style="width: 17%; margin-left: -2.7%">
        <center><label>Supervisor</label></center>
        <input class="form-control" type="text" name="nm_spv" placeholder=" Nama Supervisor" required readonly value="<?php echo $dataku->nm_spv ?>">
      </div>
  

    <div class="form-group row">
      <div class="col-xs-1" style="width: 16%">
        <center><label>Tgl Mulai</label></center>
        <?php
         $ordate2 = $dataku->tgl_mulai;
         $nedate2 = date("Y-m-d",strtotime($ordate2));
         ?>
        <input class="form-control" type="date" name="tgl_mulai" required value="<?php echo $nedate2 ?>">
      </div>
      <div class="col-xs-3" style="width: 16%;">
        <center><label>Tgl Selesai</label></center>
        <?php
         $ordate3 = $dataku->tgl_selesai;
         $nedate3 = date("Y-m-d",strtotime($ordate3));
         ?>
        <input class="form-control" type="date" name="tgl_selesai" required value="<?php echo $nedate3 ?>">     
      </div>
    </div>
  </div>

  <div class="form-group row">
      <div class="col-xs-4" style="width: 76%">
        <label>RENCANA PERBAIKAN SELANJUTNYA :</label>
        <textarea rows="2" cols="4" type="text" name="rps" class="form-control"><?php echo $dataku->rps ?></textarea>
      </div>
    </div>
 
    <div class="form-group row" style="display: none">
      <div class="col-xs-1" style="width: 13%">
        <label>.</label>
        <input class="form-control" value="Riviewed By" readonly style="color: blue">
      </div>
      <div class="col-xs-3" style="width: 17%; margin-left: -2.7%">
        <center><label>Manager</label></center>
        <input class="form-control" type="text" name="mngprod" value="<?php echo $dataku->mngprod ?>">
      </div>
      <div class="col-xs-3" style="width: 36.5%; margin-left: -2.7%">
        <center><label>Komentar</label></center>
        <input class="form-control" type="text" name="komen1" value="<?php echo $dataku->komen1 ?>">
      </div>
      </div>

      <div class="form-group row" style="display: none">
      <div class="col-xs-1" style="width: 13%">
        <label>.</label>
        <input class="form-control" value="Verified By" readonly style="color: blue">
      </div>
      <div class="col-xs-3" style="width: 17%; margin-left: -2.7%">
        <center><label>Supervisor OE</label></center>
        <input class="form-control" type="text" name="spvoe" value="<?php echo $dataku->spvoe ?>">
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
            $ke02 = "data_kzprod2.php";
          }else if (strpbrk($kdc, A)) {
            $ke02 = "data_kzqa1.php";
          }else if (strpbrk($kdc, C)){
            $ke02 = "data_kzqc1.php";
          }else if (strpbrk($kdc, I)){
            $ke02 = "data_kzppic1.php";
          }else if (strpbrk($kdc, M)){
            $ke02 = "data_kzmtu1.php";
          }else if (strpbrk($kdc, H)){
            $ke02 = "data_kzhrgs1.php";
          }else if (strpbrk($kdc, E)){
            $ke02 = "data_kzeng1.php";
          }else if (strpbrk($kdc, L)){
            $ke02 = "data_kzlog1.php";
          }else{
            $ke02 = "data_kzims1.php";
          }

      ?>


    <div class="form-group row">
      <div class="col-xs-12">
        <button type="submit" name="update" class="btn btn-primary">Save Edit <span class="glyphicon glyphicon-save"></button>

        <a href="<?php echo $ke02 ?>" button type="submit" class="btn btn-danger">Cancel <span class="glyphicon glyphicon-check"></span></a>
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

      <script type="text/javascript">
      var uploadField = document.getElementById("image-source");
      uploadField.oninput = function() {
          if(this.files[0].size > 1000000){ // ini untuk ukuran 800KB, 1000000 untuk 1 MB.
             alert("Maaf. File Terlalu Besar ! Maksimal Upload 1 MB atau 1000 KB");
             this.value = "";
          };
      };
      </script> 


      <script type="text/javascript">
      var uploadField2 = document.getElementById("image-source2");
      uploadField2.oninput = function() {
          if(this.files[0].size > 1000000){ // ini untuk ukuran 800KB, 1000000 untuk 1 MB.
             alert("Maaf. File Terlalu Besar ! Maksimal Upload 1 MB atau 1000 KB");
             this.value = "";
          };
      };
      </script>

<script>
<!--
//initial checkCount of zero
var checkCount=0
//maximum number of allowed checked boxes
var maxChecks=1
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



// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data foto yang dipilih dari form
  $gm12 = $_FILES['img1']['name'];
  $tmp1 = $_FILES['img1']['tmp_name'];

  $gm14 = $_FILES['img2']['name'];
  $tmp2 = $_FILES['img2']['tmp_name'];


  // 1 cek dulu jika ada gambar produk jalankan coding ini
if($gm12 != "") {
  $ekstensi_diperbolehkan1 = array('png','jpg','gif'); //ekstensi file gambar yang bisa diupload 
  $x1 = explode('.', $gm12); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi1 = strtolower(end($x1));
  $file_tmp1 = $_FILES['img1']['tmp_name'];   
  $angka_acak1     = rand(1,999);
  $nama_gambar_baru1 = $angka_acak1.'-'.$gm12; //menggabungkan angka acak dengan nama file sebenarnya
  // Set path folder tempat menyimpan fotonya
  $path1 = "filesave/".$nama_gambar_baru1;

  // Proses upload // Query ke1 untuk foto
  if(move_uploaded_file($tmp1, $path1)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query1 = "SELECT * FROM tb_kzprod1 WHERE id='".$id."'";
    $sql1 = mysqli_query($koneksi, $query1); // Eksekusi/Jalankan query dari variabel $query
    $dataz1 = mysqli_fetch_array($sql1); // Ambil data dari hasil eksekusi $sql
     // Hapus file foto sebelumnya yang ada di folder images
    unlink("filesave/".$dataz1['img1']);

    // di query ke 2 ini hanya img2 dihilangkan karna yg img1 mau di input
    $query1 = "UPDATE tb_kzprod1 SET id='$id', no_kaizen='$a1', area='$a2', oleh='$a3', judul='$a4',alasan='$a5', tipe='$a6', cat='$a7', masalah='$a8', tindakan='$a9', dampak='$a10', sebelum='$a11', img1='$nama_gambar_baru1', sesudah='$a13', nm_spv='$a15', tgl_mulai='$a16', tgl_selesai='$a17', rps='$a18',mngprod='$a19', komen1='$a20', spvoe='$a21', komen2='$a22', status='$a23'";
                  $query1 .= "WHERE id = '$id'";
                  $result1 = mysqli_query($koneksi, $query1);
                  // periska query apakah ada error
                  if(!$result1){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {

                         include "koneksi.php";
                         $no1     = mysqli_query($koneksi,"SELECT no_kaizen FROM tb_kzprod1 WHERE id='$id' ");
                         $no_kz1  = mysqli_fetch_array($no1);
                         $kd1     = $no_kz1['no_kaizen'];
                         //$urut   = substr($kd, 5, 0);

                            if (strpbrk($kd1, 'P')){
                              $ke = "data_kzprod2.php";
                            }else if (strpbrk($kd1, 'A')) {
                              $ke = "data_kzqa1.php";
                            }else if (strpbrk($kd1, 'C')){
                              $ke = "data_kzqc1.php";
                            }else if (strpbrk($kd1, 'I')){
                              $ke = "data_kzppic1.php";
                            }else if (strpbrk($kd1, 'M')){
                              $ke = "data_kzmtu1.php";
                            }else if (strpbrk($kd1, 'H')){
                              $ke = "data_kzhrgs1.php";
                            }else if (strpbrk($kd1, 'E')){
                              $ke = "data_kzeng1.php";
                            }else if (strpbrk($kd1, 'L')){
                              $ke = "data_kzlog1.php";
                            }else{
                              $ke = "data_kzims1.php";
                            }
                            //tampil alert dan akan redirect ke halaman index.php
                            //silahkan ganti index.php sesuai halaman yang akan dituju
                            echo "<script>alert('Gambar 1 berhasil di ubah.');window.location='".$ke."';</script>";
                          }
    }             
    }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='data_kzprod1.php'>Kembali Ke Form</a>";
  }

// Query ke2 untuk foto
  // 2 cek dulu jika ada gambar produk jalankan coding ini
  if($gm14 != "") {
    $ekstensi_diperbolehkan2 = array('png','jpg','gif'); //ekstensi file gambar yang bisa diupload 
    $x2 = explode('.', $gm14); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi2 = strtolower(end($x2));
    $file_tmp2 = $_FILES['img2']['tmp_name'];   
    $angka_acak2     = rand(1,999);
    $nama_gambar_baru2 = $angka_acak2.'-'.$gm14; //menggabungkan angka acak dengan nama file sebenarnya
    // Set path folder tempat menyimpan fotonya
    $path2 = "filesave/".$nama_gambar_baru2;

    if(move_uploaded_file($tmp2, $path2)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query2 = "SELECT * FROM tb_kzprod1 WHERE id='".$id."'";
    $sql2 = mysqli_query($koneksi, $query2); // Eksekusi/Jalankan query dari variabel $query
    $dataz2 = mysqli_fetch_array($sql2); // Ambil data dari hasil eksekusi $sql
    unlink("filesave/".$dataz2['img2']);
    // di query ke 2 ini hanya img1 dihilangkan karna yg img2 mau di input
    $query2 = "UPDATE tb_kzprod1 SET id='$id', no_kaizen='$a1', area='$a2', oleh='$a3', judul='$a4',alasan='$a5', tipe='$a6', cat='$a7', masalah='$a8', tindakan='$a9', dampak='$a10', sebelum='$a11', sesudah='$a13', img2='$nama_gambar_baru2', nm_spv='$a15', tgl_mulai='$a16', tgl_selesai='$a17', rps='$a18',mngprod='$a19', komen1='$a20', spvoe='$a21', komen2='$a22', status='$a23'";
                  $query2 .= "WHERE id = '$id'";
                  $result2 = mysqli_query($koneksi, $query2);
                  // periska query apakah ada error
                  if(!$result2){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {

                         include "koneksi.php";
                         $no2     = mysqli_query($koneksi,"SELECT no_kaizen FROM tb_kzprod1 WHERE id='$id' ");
                         $no_kz2  = mysqli_fetch_array($no2);
                         $kd2     = $no_kz2['no_kaizen'];
                         //$urut   = substr($kd, 5, 0);

                            if (strpbrk($kd2, 'P')){
                              $ke2 = "data_kzprod2.php";
                            }else if (strpbrk($kd2, 'A')) {
                              $ke2 = "data_kzqa1.php";
                            }else if (strpbrk($kd2, 'C')){
                              $ke2 = "data_kzqc1.php";
                            }else if (strpbrk($kd2, 'I')){
                              $ke2 = "data_kzppic1.php";
                            }else if (strpbrk($kd2, 'M')){
                              $ke2 = "data_kzmtu1.php";
                            }else if (strpbrk($kd2, 'H')){
                              $ke2 = "data_kzhrgs1.php";
                            }else if (strpbrk($kd2, 'E')){
                              $ke2 = "data_kzeng1.php";
                            }else if (strpbrk($kd2, 'L')){
                              $ke2 = "data_kzlog1.php";
                            }else{
                              $ke2 = "data_kzims1.php";
                            }
                          //tampil alert dan akan redirect ke halaman index.php
                          //silahkan ganti index.php sesuai halaman yang akan dituju
                          echo "<script>alert('Gambar 2 berhasil di ubah.');window.location='".$ke2."';</script>";
                        }
    }
    }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload 2.";
    echo "<br><a href='data_kzprod1.php'>Kembali Ke Form</a>";
    }

}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
  // Proses ubah data ke Database di query ke3  ini semua image dihilangkan 
  $query3 = "UPDATE tb_kzprod1 SET id='$id', no_kaizen='$a1', area='$a2', oleh='$a3', judul='$a4',alasan='$a5', tipe='$a6', cat='$a7', masalah='$a8', tindakan='$a9', dampak='$a10', sebelum='$a11', sesudah='$a13', nm_spv='$a15', tgl_mulai='$a16', tgl_selesai='$a17', rps='$a18',mngprod='$a19', komen1='$a20', spvoe='$a21', komen2='$a22', status='$a23'";

                  $query3 .= "WHERE id = '$id'";
                  $result3 = mysqli_query($koneksi, $query3);
                  // periska query apakah ada error
                  if(!$result3){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {

                         include "koneksi.php";
                         $no3     = mysqli_query($koneksi,"SELECT no_kaizen FROM tb_kzprod1 WHERE id='$id' ");
                         $no_kz3  = mysqli_fetch_array($no3);
                         $kd3     = $no_kz3['no_kaizen'];
                         //$urut   = substr($kd, 5, 0);

                            if (strpbrk($kd3, 'P')){
                              $ke3 = "data_kzprod2.php";
                            }else if (strpbrk($kd3, 'A')) {
                              $ke3 = "data_kzqa1.php";
                            }else if (strpbrk($kd3, 'C')){
                              $ke3 = "data_kzqc1.php";
                            }else if (strpbrk($kd3, 'I')){
                              $ke3 = "data_kzppic1.php";
                            }else if (strpbrk($kd3, 'M')){
                              $ke3 = "data_kzmtu1.php";
                            }else if (strpbrk($kd3, 'H')){
                              $ke3 = "data_kzhrgs1.php";
                            }else if (strpbrk($kd3, 'E')){
                              $ke3 = "data_kzeng1.php";
                            }else if (strpbrk($kd3, 'L')){
                              $ke3 = "data_kzlog1.php";
                            }else{
                              $ke3 = "data_kzims1.php";
                            }
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil di ubah.');window.location='".$ke3."';</script>";
      
                  }


}

}

 ?>
 