<?php
require_once __DIR__ . '/vendor/autoload.php';

include "koneksi.php";
  //include "ceklogin_spv.php";
  
  $iddis = $_GET['id_edit']; // _GET id_edit di ambil dari link di form_anggota yang ada ?id_edit
  $editdis = mysqli_query($koneksi,"SELECT * from tb_kzprod1 where id='$iddis'");
  $dataku = mysqli_fetch_object($editdis);

  $datakutipe=explode(',', $dataku->tipe);
  $datakucat=explode(',', $dataku->cat);

  $ordate1 = $dataku->tgl_input;
  $nedate1 = date("d-m-Y",strtotime($ordate1));

  $ordate2 = $dataku->tgl_mulai;
  $nedate2 = date("d-m-Y",strtotime($ordate2));
         
  $ordate3 = $dataku->tgl_selesai;
  $nedate3 = date("d-m-Y",strtotime($ordate3));       
         

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
$cetak1 = '

<html>
<head>
	<title>Cetak Kaizen Online</title>
    <link rel="shortcut icon" href="img/dvl.ico">
</head>
<body>

     <input class="form-control" type="hidden" name="id" value ="<?php echo '.$dataku->id.' ?>">

   <table width="100%" table-responsive border="1" cellspacing="0" cellpadding="0">
                 <tr>
                 <td rowspan="3"><center><img src="img/dvll.1.png" style="width:11%;height:8%"></center></td>
                 <td colspan="7" style="color:"><center><h3>FORM</h3></center></td>
                 <td rowspan="2" style="font-size:85%;width:15%"><b>Document No</b></td> 
                 <td rowspan="2" style="font-size:85%;border"><b>:FS-03.11-010 </b></td>
                 </tr>
                  <tr>
                      
                      <td colspan="7" rowspan="4" style="width:45%">
                      <h2><center>KAIZEN</center></h2>
                      </td>  
                        
                  </tr>

                  <tr>
                      <td style="font-size:85%"><b> Rev. No </b></td>
                      <td style="font-size:85%"><b>:02 </b></td>
                  </tr>
                  <tr>
                      <td rowspan="2" cellspacing="7" style="font-size:80%;width:27%"><center><h4> PT DARYA-VARIA</h4><h4>LABORATORIA Tbk</h4><h5>CITEUREUP PLANT </h5></center></td>
                      <td style="font-size:85%"><b> Effective Date </b></td>  
                      <td style="font-size:85%"><b>:10 Mar 2020 </b></td>
                  </tr>
                  <tr>
                      <td style="font-size:80%"><b> Refer Doc </b></td>  
                      <td style="font-size:80%"><b>:SOP-03.11 </b></td>
                  </tr>
              </table>
              <br>

    <table table-responsive border="1" cellspacing="0" style="width:100%;margin-top:-1.5%">
        <tr>
        <td width="10%" style="background-color:#f5f5ef;font-size:60%">No Kaizen</td>
        <td style="font-size:60%;"><center>'.$dataku->no_kaizen.'</center></td>
        <td width="10%" style="background-color:#f5f5ef;font-size:60%">Oleh</td>
        <td style="font-size:60%;"><center>'.$dataku->oleh.'</center></td>
        <td width="10%" style="background-color:#f5f5ef;font-size:60%">Kode Area</td>
        <td style="font-size:60%;"><center>'.$dataku->area.'</center></td>
        <td width="10%" style="background-color:#f5f5ef;font-size:60%">Tanggal Usulan</td>
        <td style="font-size:60%;"><center>'.$nedate1.'</center></td>
        </tr>
    </table> 
    

    <table table-responsive border="1" cellspacing="0" style="width:100%;">
        <tr>
            <td style="background-color:#f5f5ef;font-size:60%"><center> TEMA/JUDUL </center></td>
            <td style="background-color:#f5f5ef;font-size:60%"><center> ALASAN </center></td>
        </tr>
        <tr>
            <td style="font-size:60%;width: 50%">'.$dataku->judul.' </td>
            <td style="font-size:60%;width: 50%">'.$dataku->alasan.'</td>   
        </tr>
    </table>

    <table table-responsive border="1" cellspacing="0" style="width:50.5%;margin-top:-0.2%">
        <tr>
            <td style="background-color:#f5f5ef;font-size:60%"> Type : </td>
            <td style="font-size:60%;width: 50%"><center>'.$dataku->tipe.' </center></td>  
        </tr>
    </table>
    <table table-responsive border="1" cellspacing="0" style="margin-left:49.9%;margin-top:-1.6%;width:100%">
        <tr>
            <td style="background-color:#f5f5ef;font-size:60%"> Category : </td>
            <td style="font-size:60%;width: 50%"><center>'.$dataku->cat.' </center></td>  
        </tr>
    </table><br>

    <table table-responsive border="1" cellspacing="0" style="width:100%;margin-top:-1%">
        <tr>
            <td style="background-color:#f5f5ef;font-size:60%"><center> URAIAN MASALAH </center></td>
            <td style="background-color:#f5f5ef;font-size:60%"><center> TINDAKAN PERBAIKAN </center></td>
            <td style="background-color:#f5f5ef;font-size:60%"><center> DAMPAK PERBAIKAN </center></td>
        </tr>
        <tr>
            <td style="font-size:60%;width: 33.3%">'.$dataku->masalah.' </td>
            <td style="font-size:60%;width: 33.3%">'.$dataku->tindakan.'</td>
            <td style="font-size:60%;width: 33.3%">'.$dataku->dampak.'</td>   
        </tr>
    </table><br>

    <table table-responsive border="1" cellspacing="0" style="width:100%;margin-top:-1%">
        <tr>
            <td colspan="2" style="background-color:#f5f5ef;font-size:60%"><center> SEBELUM IMPROVEMENT </center></td>
            <td colspan="2" style="background-color:#f5f5ef;font-size:60%"><center> SESUDAH IMPROVEMENT </center></td>
        </tr>
        <tr>
            <td style="font-size:60%;width: 25%;height:17%">'.$dataku->sebelum.' </td>  
            <td style="font-size:60%"><img style="width:25%;height:17%;float: left" src="filesave/'.$dataku->img1.'"></td>

            <td style="font-size:60%;width: 25%;height:17%">'.$dataku->sesudah.'</td>
            <td style="font-size:60%"><img style="width:25%;height:17%;float: left" src="filesave/'.$dataku->img2.'"></td>
        </tr>
    </table><br>

    <table table-responsive border="1" cellspacing="0" style="width:100%;margin-top:-1%">
        <tr>
            <td style="background-color:#f5f5ef;font-size:60%"><center> '.$dataku->dikaji.' Supervisor Secara Elektronik </center></td>
            <td style="background-color:#f5f5ef;font-size:60%"><center> TANGGAL MULAI </center></td>
            <td style="background-color:#f5f5ef;font-size:60%"><center> TANGGAL SELESAI </center></td>
        </tr>
        <tr>
            <td style="font-size:60%"><center> Oleh:'.$dataku->nm_spv.' - '.$dataku->tglkaji.' </center></td>
            <td style="font-size:60%"><center>'.$nedate2.'</center></td>
            <td style="font-size:60%"><center>'.$nedate3.'</center></td><tr>
        </tr>
    </table><br>


    <table table-responsive border="1" cellspacing="0" style="width:100%;margin-top:-1%">
        <tr>
            <td colspan="1" style="background-color:#f5f5ef;font-size:60%"><center> RENCANA PERBAIKAN SELANJUTNYA </center></td>
            <td style="background-color:#f5f5ef;font-size:60%"><center> Direview dan '.$dataku->mngprod.' Manager secara elektronik </center></td>
            <td style="background-color:#f5f5ef;font-size:60%"><center> Diverifikasi dan '.$dataku->spvoe.' Spv OE secara elektronik </center></td>
            <td style="background-color:#f5f5ef;font-size:60%"><center> STATUS DISPOSISI </center></td><tr>
        </tr>
        <tr>
            <td rowspan="3" style="font-size:60%;width: 41.3%"><center>'.$dataku->rps.' </center></td>
            <td style="font-size:60%"><center>'.$dataku->ttdmng.' - '.$dataku->tglmng.' </center></td>
            <td style="font-size:60%"><center>'.$dataku->ttdoe.' - '.$dataku->tgloe.' </center></td>
            <td rowspan="3"><center> '.$dataku->status.' </center></td><tr>
            
            <td style="background-color:#f5f5ef;font-size:60%"><center> KOMENTAR </center></td>
            <td style="background-color:#f5f5ef;font-size:60%"><center> KOMENTAR </center></td><tr>
            <td style="font-size:60%;width: 25%"><center>'.$dataku->komen1.' </center></td>
            <td style="font-size:60%;width: 25%"><center>'.$dataku->komen2.'</center></td>
            
            
       ';

        $cetak1 .= '</table>

    
        
</body>
</html>

';


$mpdf->setFooter('<p><h4><mark style="background-color:#f5f5ef">Disclaimer :</mark></h4></p>'.'<p style="font-family:Courier New;font-size:80%">All approval and report made in this application e-Kaizen form is printed electronically</p>|'.'| Page {PAGENO} of {nbpg}');

$mpdf->WriteHTML($cetak1);
$mpdf->Output('Kaizen-Cetak.pdf', 'I');

?>
