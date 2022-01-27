
<?php
 include "ceklog_admin.php";
 ?>
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
<h2 style="color: blue">Kirim Email Pemberitahuan Verifikasi E-Kaizen Manual</h2>
<form method="POST" action="emailmanualindexkirim.php">
 <table>
  <tr>
   <td><h3>EMAIL TUJUAN 1 :</h3></td>
   <td><input type="email" name="email1" size="30" required></td>
  </tr>
   <td><h3>EMAIL TUJUAN 2 :</h3></td>
   <td><input type="email" name="email2" size="30"></td>
  </tr>
<hr>
  <tr>
   <td><h3>NO. KAIZEN:</h3></td>
   <td><textarea name="nokaizen" style="width: 97%;height:200px" required></textarea></td>
   <td><input type="text" name="subject" size="30" value="Kaizen Notification" style="visibility: hidden;"></td>
  </tr>
  <tr>
   <td></td>
   <td><button style="background-color: green"><input type="submit" name="kirim" value="KIRIM EMAIL" style="color: green"></button></td>
   <td style="color: blue"><a href="dashoe.php">BACK / CANCEL</td>
  </tr>
 </table>
</form>
</body>
</html>




<hr>
<table class="table-responsive" border="1">
    <thead>
      <tr style="color: black;">
       
        <th colspan="2"style="background-color: grey"><center>PRODUCTION</center></th>
        <th colspan="2" style="background-color: lightblue"><center>QC</center></th>
        <th colspan="2" style="background-color: magenta"><center>QA</center></th>
        <th colspan="2" style="background-color: yellow"><center>HRGS</center></th>
        <th colspan="2" style="background-color: pink"><center>ENGINEERING</center></th>
        <th colspan="2" style="background-color: green"><center>LOGISTIC</center></th>
        <th colspan="2" style="background-color: orange"><center>PPIC</center></th>
        <th colspan="2" style="background-color: coral"><center>MTU</center></th>
        <th colspan="2" style="background-color: red"><center>HSE</center></th>
        </tr>

        <th><center>NAMA</center></th>
        <th><center>EMAIL</center></th>
        <th><center>NAMA</center></th>
        <th><center>EMAIL</center></th>
        <th><center>NAMA</center></th>
        <th><center>EMAIL</center></th>
        <th><center>NAMA</center></th>
        <th><center>EMAIL</center></th>
        <th><center>NAMA</center></th>
        <th><center>EMAIL</center></th>
        <th><center>NAMA</center></th>
        <th><center>EMAIL</center></th>
        <th><center>NAMA</center></th>
        <th><center>EMAIL</center></th>
        <th><center>NAMA</center></th>
        <th><center>EMAIL</center></th>
        <th><center>NAMA</center></th>
        <th><center>EMAIL</center></th>
    
    </thead>
      
<tbody id="myTable">
<tr class="btn-default" >
 <div class="container">
  <td><center>Emi Pujiastuti</center></td>
  <td><center>emy.pujiastuti@darya-varia.com</center></td>

  <td><center>Dewi Sulistyowati</center></td>
  <td><center>dewi.sulistyowati@darya-varia.com</center></td>

  <td><center>Antonius Raino Dymita</center></td>
  <td><center>antonius.dymita@darya-varia.com</center></td>

  <td><center>Teguh Suprijanto</center></td>
  <td><center>teguh.suprijanto@darya-varia.com</center></td>

  <td><center>Wasana Saputra</center></td>
  <td><center>wasana.saputra@darya-varia.com</center></td>

  <td><center>Wahyu Prasetyo Wibowo</center></td>
  <td><center>wahyu.wibowo@darya-varia.com</center></td>

  <td><center>Pudji Rahayu</center></td>
  <td><center>fudji.rahayu@darya-varia.com</center></td>

  <td><center>Aprilia Primadawaty</center></td>
  <td><center>aprilia.primadawaty@darya-varia.com</center></td>

  <td><center>Adhi Susilo</center></td>
  <td><center>adhi.susilo@darya-varia.com</center></td>

  <tr>

  <td><center>Moses Prasetyo</center></td>
  <td><center>moses.prasetio@darya-varia.com</center></td>

  <td><center>Yogie Pratama Sandi</center></td>
  <td><center>yogie.sandi@darya-varia.com</center></td>

  <td><center>Arie Ferdiani</center></td>
  <td><center>arie.ferdiani@darya-varia.com</center></td>

  <td><center>Kartini</center></td>
  <td><center>kartini.mutiah@darya-varia.com</center></td>

  <td><center>Mukhalip</center></td>
  <td><center>mukhalip.alip@darya-varia.com</center></td>

  <td><center>Aziz Muslim</center></td>
  <td><center>aziz.muslim@darya-varia.com</center></td>

  <td><center>Lidia Puspa Agustiani</center></td>
  <td><center>lidia.agustiani@darya-varia.com</center></td>

  <td><center>Ridho Ali Reza</center></td>
  <td><center>ridho.reza@darya-varia.com</center></td>

  <td><center></center></td>
  <td><center></center></td>


  <tr>
  <td><center>Jauza Nurrianti</center></td>
  <td><center>jauza.nurrianti@darya-varia.com</center></td>

  <td><center>Sherly Yunilara Rizky</center></td>
  <td><center>sherly.rizky@darya-varia.com</center></td>

  <td><center>Siti Lathifah Noor Amir </center></td>
  <td><center>siti.lathifah@darya-varia.com</center></td>

  <td><center>Agus Sukandar</center></td>
  <td><center>agus.sukandar@darya-varia.com</center></td>

  <td><center>Adi Kurnianto</center></td>
  <td><center>adi.kurnianto@darya-varia.com</center></td>

  <td><center>Ganjar Sutrisno</center></td>
  <td><center>ganjar.sutrisno@darya-varia.com</center></td>

  <td><center>Abdullah Swandy</center></td>
  <td><center>abdullah.swandy@darya-varia.com</center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <tr>
  <td><center>Prastomo Wibisono</center></td>
  <td><center>prastomo.wibisono@darya-varia.com</center></td>

  <td><center>Abas Rivaie</center></td>
  <td><center>abbas.rivai@darya-varia.com</center></td>

  <td><center>Dian Thoriqul Fitri</center></td>
  <td><center>dian.fitri@darya-varia.com</center></td>

  <td><center>Eric Symitra Dayan</center></td>
  <td><center>eric.dayan@darya-varia.com</center></td>

  <td><center>Hartoyo</center></td>
  <td><center>hartoyo.harto@darya-varia.com</center></td>

  <td><center>Akbar Ajie Sagita</center></td>
  <td><center>akbar.sagita@darya-varia.com</center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <tr>
  <td><center>Galih Sinatria</center></td>
  <td><center>galih.sinatria@darya-varia.com</center></td>

  <<td><center>Thomas Aquino A.W</center></td>
  <td><center>thomas.aditya@darya-varia.com</center></td>

  <td><center>Rindhu Shinta Rini</center></td>
  <td><center>dyan.rindhu@darya-varia.com</center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>


  <tr>
  <td><center>Ade Mulyana</center></td>
  <td><center>ade.mulyana@darya-varia.com</center></td>

  <td><center>Yani Risaini Putri</center></td>
  <td><center>yani.putri@darya-varia.com</center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <tr>
  <td><center>Dwi Cahyo Kusumo</center></td>
  <td><center>dwi.cahyo@darya-varia.com</center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>

  <td><center></center></td>
  <td><center></center></td>
</tr>
   </tbody>
  </table>
