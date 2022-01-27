<?php
include "ceklog_admin.php";
include "header1.php";
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
        <h3 class="modal-title" style="color: white"><center>FORM KAIZEN ONLINE (PPIC)</center></h3>
    </div>
    <div class="modal-body">
    <div class="container">

      <?php
      include "koneksi.php";
       $no     = mysqli_query($koneksi,"SELECT no_kaizen FROM tb_kzprod1 WHERE no_kaizen like 'I%' ORDER BY no_kaizen DESC");
       $no_kz  = mysqli_fetch_array($no);
       $kd     = $no_kz['no_kaizen'];
       $urut   = substr($kd, 5, 3);
       $tambah = (int) $urut + 1;
       $urut2  = substr($kd, 2,2);
       $thn = date("y");

       if ($urut2!==$thn){
          $format = "I-".$thn."-"."001";    
       }else{

          if (strlen($tambah) == 1){
          $format = "I-".$thn."-"."00".$tambah;
          }else if (strlen($tambah) == 2) {
          $format = "I-".$thn."-"."0".$tambah;
          }else{
          $format = "I-".$thn."-".$tambah;
          }
      }

      ?>

      <script> 
    function validate(){
    var cat1 = document.getElementById("cat1").checked;
    var cat2 = document.getElementById("cat2").checked;
    var cat3 = document.getElementById("cat3").checked;
    var cat4 = document.getElementById("cat4").checked;
    var cat5 = document.getElementById("cat5").checked;

    if((cat1=="") && (cat2=="") && (cat3=="") && (cat4=="") && (cat5=="")){
        alert("check Box type dan Category tidak boleh kosong");
    return false ;
    }
    return true
    }
    </script>

     <form name="forminput1" id="form1" method="post" action="" onsubmit="return validate()" enctype="multipart/form-data">

      <div style="color: black;margin-left: 34%;font-family: serif;font-size: 150%">KAIZEN</div>

     <div class="form-group row">
      <div class="col-xs-1" style="width: 16%;margin-top: -3%">
        <input class="form-control" value="Tanggal Usulan" readonly style="color: blue">
        <input class="form-control" value="No Kaizen" readonly style="color: blue">
        <input class="form-control" value="Kode & Area Proses" readonly style="color: blue">
        <input class="form-control" value="Oleh" readonly style="color: blue">
      </div>
      <div class="col-xs-3" style="width: 15%; margin-left: -2.7%;margin-top: -3%">
        <input class="form-control" type="text" value="<?php echo date("d/m/Y") ?>" readonly>
        <input class="form-control" type="text" name="no_kaizen" value="<?php echo $format; ?>" readonly="">
        <input class="form-control" type="text" name="area" required>
        <input class="form-control" type="text" name="oleh" required>
      </div>


      <!-- Trigger the modal with a button kode area -->
      <button class="fa fa-question-circle-o" data-toggle="modal" data-target="#myModal" data-toggle="tooltip" data-placement="right" title="Klik Untuk List KODE AREA" href="kode_area.php" style="margin-left: -48%;margin-top: 3.6%"></button>

      <script>
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
      });
      </script> 

      <!-- Modal kode area -->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <center><h4 class="modal-title">DAFTAR KODE AREA</h4></center>
            </div>
            <div class="modal-body">
             
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
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
        <label>TEMA/JUDUL : </label>
        <textarea rows="2" cols="4" type="text" name="judul" class="form-control" maxlength="300" required></textarea>
      </div>
      <div class="col-xs-4" style="width: 38%">
        <label>ALASAN : </label>
        <textarea rows="2" cols="4" type="text" name="alasan" class="form-control" maxlength="300" required></textarea>
      </div>
    </div>

    <div class="form-group row" style="margin-top: -1.5%;color: blue;font-size: 9px">
    <div class="col-xs-5">
    <label class="checkbox-inline"><input type="checkbox" name="tipe[]" id="check1" value="Mencegah" onclick="setChecks(this)">Mencegah</label>
    <label class="checkbox-inline"><input type="checkbox" name="tipe[]" id="check2" value="Menyempurnakan" onclick="setChecks(this)">Menyempurnakan</label>
    <label class="checkbox-inline"><input type="checkbox" name="tipe[]" id="check3" value="Ide/Design baru" onclick="setChecks(this)">Ide/Design Baru</label>
    </div>
    <div class="col-xs-5" style="margin-left: 38.5%;margin-top: -1.2%;color: blue;font-size: 9px">
    <label class="checkbox-inline"><input type="checkbox" id="cat1" name="cat[]" value="Quality">Quality</label>
    <label class="checkbox-inline"><input type="checkbox" id="cat2" name="cat[]" value="Cost">Cost</label>
    <label class="checkbox-inline"><input type="checkbox" id="cat3" name="cat[]" value="Delivery">Delivery</label>
    <label class="checkbox-inline"><input type="checkbox" id="cat4" name="cat[]" value="HSE">HSE</label>
    <label class="checkbox-inline"><input type="checkbox" id="cat5" name="cat[]" value="5S">5S</label>
    </div>
  </div>

  <div class="form-group row">
      <div class="col-xs-4" style="width: 25.3%">
        <label>URAIAN MASALAH :</label><i style="font-size: 10px;color: red"> Min 100 Huruf</i>
        <textarea rows="20" cols="4" type="text" name="masalah" class="form-control" onkeyup="HitungText1()" minlength="100" maxlength="1000" required></textarea><span align='center' id="hasil1">0 karakter</span>
      </div>
      <div class="col-xs-4" style="width: 25.3%">
        <label>TINDAKAN PERBAIKAN :</label><i style="font-size: 10px;color: red"> Min 100 Huruf</i>
        <textarea rows="20" cols="4" type="text" name="tindakan" class="form-control" onkeyup="HitungText2()" minlength="100" maxlength="1000" required></textarea><span align='center' id="hasil2">0 karakter</span>
      </div>
      <div class="col-xs-4" style="width: 25.3%">
        <label>DAMPAK PERBAIKAN :</label><i style="font-size: 10px;color: red"> Min 100 Huruf</i>
        <textarea rows="20" cols="4" type="text" name="dampak" class="form-control" onkeyup="HitungText3()" minlength="100" maxlength="1000" required></textarea><span align='center' id="hasil3">0 karakter</span>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-xs-4" style="width: 38%">
        <label>SEBELUM IMPROVEMENT :</label><i style="font-size: 12px;color: red"> Min 100 Huruf</i>
        <textarea rows="15" cols="4" type="text" name="sebelum" class="form-control" onkeyup="HitungText4()" minlength="100" maxlength="1000" required></textarea><span align='center' id="hasil4">0 karakter</span>
        <input type="file" id="image-source" onchange="previewImage();"/ name="img1" required>
        <img class="zoomA" id="image-preview" alt="image preview"/>
        <i style="float: left;font-size: 12px;color: red">File Max 1 MB dan harus Extention jpg, png atau gif.</i>
      </div>
      <div class="col-xs-4" style="width: 39.5%;color: blue;margin-left: -1.5%">
        <label>SESUDAH IMPROVEMENT :</label><i style="font-size: 12px;color: red"> Min 100 Huruf</i>
        <textarea rows="15" cols="4" type="text" name="sesudah" class="form-control" onkeyup="HitungText5()" minlength="100" maxlength="1000" required></textarea><span align='center' id="hasil5">0 karakter</span>
      <input type="file" id="image-source2" onchange="previewImage2();"/ name="img2" required>
      <img class="zoomA" id="image-preview2" alt="image preview2"/>
      <i style="float: left;font-size: 12px;color: red">File Max 1 MB dan harus Extention jpg, png atau gif.</i>
      </div>
      </div>

    <div class="form-group row">
      <div class="col-xs-1" style="width: 13%">
        <label>.</label>
        <input class="form-control" value="Dikaji Oleh" readonly style="color: blue">
      </div>

      <div class="col-xs-3" style="width: 19%; margin-left: -2.7%">
        <center><label>Supervisor</label></center>
        <select class="form-control" name="nm_spv" placeholder=" Nama Supervisor" required>
        <option></option>
          <option>Lidia Puspa Agustiani</option>
          <option>Pudji Rahayu</option>
        </select>
      </div>
  

    <div class="form-group row">
      <div class="col-xs-1" style="width: 16%">
        <center><label>Tgl Mulai</label></center>
        <input class="form-control" type="date" name="tgl_mulai" required>
      </div>
      <div class="col-xs-3" style="width: 16%;">
        <center><label>Tgl Selesai</label></center>
        <input class="form-control" type="date" name="tgl_selesai" required>     
      </div>
    </div>
  </div>

   <div class="form-group row">
      <div class="col-xs-4" style="width: 76%">
        <label>RENCANA PERBAIKAN SELANJUTNYA :</label>
        <textarea rows="2" cols="4" type="text" name="rps" class="form-control"></textarea>
      </div>
    </div>


    <div class="form-group row">
      <div class="col-xs-12">
        <button type="submit" name="simpan" class="btn btn-primary">Save <span class="glyphicon glyphicon-save"></button>

        <a href="data_kzprod1.php" button type="submit" class="btn btn-primary">Cek Data <span class="glyphicon glyphicon-check"></span></a>
      </div>
    </div>  
</form>
</div>
        </div>
        <?php include "footer.php"; ?>
      </div>
    </div>
  </div>
</div>

<?php
include "koneksi.php"; 
//proses save
if (isset($_POST['simpan'])) {


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




// 1 cek dulu jika ada gambar produk jalankan coding ini
if($gm12 != "") {
  $ekstensi_diperbolehkan1 = array('png','jpg','gif'); //ekstensi file gambar yang bisa diupload 
  $x1 = explode('.', $gm12); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi1 = strtolower(end($x1));
  $file_tmp1 = $_FILES['img1']['tmp_name'];   
  $angka_acak1     = rand(1,999);
  $nama_gambar_baru1 = $angka_acak1.'-'.$gm12; //menggabungkan angka acak dengan nama file sebenarnya
        
// 2 cek dulu jika ada gambar produk jalankan coding ini
if($gm14 != "") {
  $ekstensi_diperbolehkan = array('png','jpg','gif'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gm14); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['img2']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru2 = $angka_acak.'-'.$gm14; //menggabungkan angka acak dengan nama file sebenarnya

        if(in_array($ekstensi1, $ekstensi_diperbolehkan1) === true)  {     
                move_uploaded_file($file_tmp1, 'filesave/'.$nama_gambar_baru1); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'filesave/'.$nama_gambar_baru2); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)

                  $query = "INSERT INTO tb_kzprod1 (id,no_kaizen,area,oleh,judul,alasan,tipe,cat,masalah,tindakan,dampak,sebelum,img1,sesudah,img2,nm_spv,tgl_mulai,tgl_selesai,rps,mngprod,komen1,spvoe,komen2,status,ttdmng,ttdoe) 
                  VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$nama_gambar_baru1','$a13','$nama_gambar_baru2','$a15','$a16','$a17','$a18','','','','','','','')";
                  $result = mysqli_query($koneksi, $query);

                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='form_oeppic.php';</script>";
                  }

            }
            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, png atau gif.');window.location='form_oeppic.php';</script>";
            }
}
} else {
   $query = "INSERT INTO tb_kzprod1 (id,no_kaizen,area,oleh,judul,alasan,tipe,cat,masalah,tindakan,dampak,sebelum,img1,sesudah,img2,nm_spv,tgl_mulai,tgl_selesai,rps,mngprod,komen1,spvoe,komen2,status,ttdmng,ttdoe) 
   VALUES ('','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11',null,'$a13',null,'$a15','$a16','$a17','$a18','','','','','','','')";
   $result = mysqli_query($koneksi, $query);

                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='form_oeppic.php';</script>";
                  }
   }


}

 ?>


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

<!-- <style>
      .zoomA {
        width: 5000px;
        height: auto;
        transition-duration: 1s;
        transition-timing-function: ease;
      }
      .zoomA:hover {
        transform: scale(2.5);
      }
    </style> -->

<script>
function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
 
    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>
<style>
  #image-preview{
    display:none;
    width : 210px;
    height : 150px;
}
</style>


<script>
function previewImage2() {
    document.getElementById("image-preview2").style.display = "block";
    var oFReader2 = new FileReader();
     oFReader2.readAsDataURL(document.getElementById("image-source2").files[0]);
 
    oFReader2.onload = function(oFREvent2) {
      document.getElementById("image-preview2").src = oFREvent2.target.result;
    };
  };
</script>
<style>
  #image-preview2{
    display:none;
    width : 210px;
    height : 150px;
}
</style>

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
alert('Hanya bisa memilih '+maxChecks+' options saja ya..!!')
}
}
//-->
</script>

<!--untuk cek karakter text -->

  <script language='javascript'>
  function HitungText1(){
  var Teks1 = document.forminput1.masalah.value.length;
  var total1 = document.getElementById('hasil1');
  total1.innerHTML = Teks1 + ' Karakter';
  }</script>

  <script language='javascript'>
  function HitungText2(){
  var Teks2 = document.forminput1.tindakan.value.length;
  var total2 = document.getElementById('hasil2');
  total2.innerHTML = Teks2 + ' Karakter';
  }</script>

  <script language='javascript'>
  function HitungText3(){
  var Teks3 = document.forminput1.dampak.value.length;
  var total3 = document.getElementById('hasil3');
  total3.innerHTML = Teks3 + ' Karakter';
  }</script>

  <script language='javascript'>
  function HitungText4(){
  var Teks4 = document.forminput1.sebelum.value.length;
  var total4 = document.getElementById('hasil4');
  total4.innerHTML = Teks4 + ' Karakter';
  }</script>

  <script language='javascript'>
  function HitungText5(){
  var Teks5 = document.forminput1.sesudah.value.length;
  var total5 = document.getElementById('hasil5');
  total5.innerHTML = Teks5 + ' Karakter';
  }</script>