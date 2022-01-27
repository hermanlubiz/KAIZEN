<?php
require_once __DIR__ . '/vendor/autoload.php';

include "koneksi.php";
include "header.php";
  //include "ceklogin_spv.php";
  
  $iddis = $_GET['id_edit']; // _GET id_edit di ambil dari link di form_anggota yang ada ?id_edit
  $editdis = mysqli_query($koneksi,"SELECT * from tb_kzprod1 where id='$iddis'");
  $dataku = mysqli_fetch_object($editdis);

  $datakutipe=explode(',', $dataku->tipe);
  $datakucat=explode(',', $dataku->cat);

  $ordate1 = $dataku->tgl_input;
  $nedate1 = date("d-m-Y,H:i",strtotime($ordate1));

  $ordate2 = $dataku->tgl_mulai;
  $nedate2 = date("d-m-Y",strtotime($ordate2));
         
  $ordate3 = $dataku->tgl_selesai;
  $nedate3 = date("d-m-Y",strtotime($ordate3));       

  
$mpdf = new \Mpdf\Mpdf();
$cetak1 = '

<html>
<head>
    <title>Cetak Kaizen Online</title>
    <link rel="shortcut icon" href="img/dvl.ico">
</head>
<body>

     <input class="form-control" type="hidden" name="id" value ="<?php echo '.$dataku->id.' ?>">

   <table table-responsive border="1" cellspacing="0">
        <tr>
            <td colspan="1" style="background-color:lightgrey;width:19%"><center><img src="img/dvll.1.png" style="width: 9%;height:6%"></center></td>
            <td colspan="11" style="background-color:lightgrey"><center><h3> FORM </h3></center></td>
            <td colspan="1" style="font-size:55%; color:blue; background-color:lightgrey"><center><h4> PT DARYA-VARIA LABORATORIA TBK Citeureup Plant </h4></center></td>
        </tr>
        <tr>
            <td style="background-color:lightgrey;font-size:80%">Tanggal Ulasan</td>
            <td style="background-color:lightgrey">:</td>
            <td style="background-color:lightgrey;font-size:80%"><b>' . $nedate1 .' </b></td>

            <td colspan="7" rowspan="4" style="background-color:lightgrey;width:30%"><h2><center>KAIZEN</center></h2></td>
        
            <td style="background-color:lightgrey;font-size:80%;width:15%">Document No</td>
            <td style="background-color:lightgrey">:</td>
            <td style="background-color:lightgrey;font-size:80%"><h4> FS-09.09-005 </h4></td>
        </tr>

        <tr>
            <td style="background-color:lightgrey;font-size:80%"> No Kaizen </td>
            <td style="background-color:lightgrey">:</td>
            <td style="background-color:lightgrey;font-size:80%"><h4>' . $dataku->no_kaizen . ' </h4></td>

            <td style="background-color:lightgrey;font-size:80%"> Rev. No </td>
            <td style="background-color:lightgrey">:</td>
            <td style="background-color:lightgrey;font-size:80%"><h4> 00 </h4></td>
        </tr>
        <tr>
            <td style="background-color:lightgrey;font-size:80%">Kode & Area Proses</td>
            <td style="background-color:lightgrey">:</td>
            <td style="background-color:lightgrey;font-size:80%"><h4>' . $dataku->area . '</h4></td>

            <td style="background-color:lightgrey;font-size:80%"> Effective Date </td>
            <td style="background-color:lightgrey">:</td>
            <td style="background-color:lightgrey;font-size:80%"><h4> 02 Jan 2019 </h4></td>
        </tr>
        <tr>
            <td style="background-color:lightgrey;font-size:80%">Oleh</td>
            <td style="background-color:lightgrey">:</td>
            <td style="background-color:lightgrey;font-size:80%"><h4>' . $dataku->oleh . '</h4></td>
            <td style="background-color:lightgrey;font-size:80%"> Refer Doc </td>
            <td style="background-color:lightgrey">:</td>
            <td style="background-color:lightgrey;font-size:80%"><h4> WI-09.09-003 </h4></td>
        </tr>
    </table><br>


    <table table-responsive border="1" cellspacing="0" style="width:100%;margin-top:-1.5%">
        <tr>
            <td style="background-color:lightgrey;font-size:60%"><center> TEMA/JUDUL </center></td>
            <td style="background-color:lightgrey;font-size:60%"><center> ALASAN </center></td>
        </tr>
        <tr>
            <td style="font-size:60%">'.$dataku->judul.' </td>
            <td style="font-size:60%">'.$dataku->alasan.'</td>   
        </tr>
    </table>

    <table table-responsive border="1" cellspacing="0" style="width:50.5%">
        <tr>
            <td style="background-color:lightgrey;font-size:60%"> Type : </td>
            <td style="font-size:60%"><center>'.$dataku->tipe.' </center></td>  
        </tr>
    </table>
    <table table-responsive border="1" cellspacing="0" style="margin-left:50%;margin-top:-2.5%;width:100%">
        <tr>
            <td style="background-color:lightgrey;font-size:60%"> Category : </td>
            <td style="font-size:60%"><center>'.$dataku->cat.' </center></td>  
        </tr>
    </table><br>

    <table table-responsive border="1" cellspacing="0" style="width:100%;margin-top:-1%">
        <tr>
            <td style="background-color:lightgrey;font-size:60%"><center> URAIAN MASALAH </center></td>
            <td style="background-color:lightgrey;font-size:60%"><center> TINDAKAN PERBAIKAN </center></td>
            <td style="background-color:lightgrey;font-size:60%"><center> DAMPAK PERBAIKAN </center></td>
        </tr>
        <tr>
            <td style="font-size:60%">'.$dataku->masalah.' </td>
            <td style="font-size:60%">'.$dataku->tindakan.'</td>
            <td style="font-size:60%">'.$dataku->dampak.'</td>   
        </tr>
    </table><br>

    <table table-responsive border="1" cellspacing="0" style="width:100%;margin-top:-1%">
        <tr>
            <td style="background-color:lightgrey;font-size:60%"><center> SEBELUM IMPROVEMENT </center></td>
            <td style="background-color:lightgrey;font-size:60%"><center> SESUDAH IMPROVEMENT </center></td>
        </tr>
        <tr>
            <td style="font-size:60%">'.$dataku->sebelum.' </td>
            <td style="font-size:60%">'.$dataku->sesudah.'</td><tr>
            <td style="font-size:60%"><img style="width: 50%;height:30%;float: left;margin-bottom: 5px;" src="filesave/'.$dataku->img1.'"></td>
            <td style="font-size:60%"><img style="width: 50%;height:30%;float: left;margin-bottom: 5px;" src="filesave/'.$dataku->img2.'"></td>
        </tr>
    </table><br>

    <table table-responsive border="1" cellspacing="0" style="width:100%;margin-top:-1%">
        <tr>
            <td style="background-color:lightgrey;font-size:60%"><center> DIKAJI OLEH SUPERVISOR </center></td>
            <td style="background-color:lightgrey;font-size:60%"><center> TANGGAL MULAI </center></td>
            <td style="background-color:lightgrey;font-size:60%"><center> TANGGAL SELESAI </center></td>
        </tr>
        <tr>
            <td style="font-size:60%"><center>'.$dataku->nm_spv.' </center></td>
            <td style="font-size:60%"><center>'.$nedate2.'</center></td>
            <td style="font-size:60%"><center>'.$nedate3.'</center></td><tr>   
            <td colspan="3" style="background-color:lightgrey;font-size:60%"><center> RENCANA PERBAIKAN SELANJUTNYA </center></td><tr>
            <td colspan="3" style="font-size:60%"><center>'.$dataku->rps.' </center></td>
        </tr>
    </table><br>


    <table table-responsive border="1" cellspacing="0" style="width:100%;margin-top:-1%">
        <tr>
            <td style="background-color:lightgrey;font-size:60%"><center> Has been electronically '.$dataku->mngprod.'</center></td>
            <td style="background-color:lightgrey;font-size:60%"><center> Has been electronically '.$dataku->spvoe.' </center></td>
            <td style="background-color:lightgrey;font-size:60%"><center> STATUS DISPOSISI </center></td><tr>
        </tr>
        <tr>
            <td style="font-size:60%"><center>'.$dataku->ttdmng.' - '.$dataku->tglmng.' </center></td>
            <td style="font-size:60%"><center>'.$dataku->ttdoe.' - '.$dataku->tgloe.' </center></td>
            <td rowspan="4"><center> '.$dataku->status.' </center></td><tr>
           
            <td style="background-color:lightgrey;font-size:50%"><center> KOMENTAR </center></td>
            <td style="background-color:lightgrey;font-size:50%"><center> KOMENTAR </center></td><tr>
            <td style="font-size:60%"><center>'.$dataku->komen1.' </center></td>
            <td style="font-size:60%"><center>'.$dataku->komen2.'</center></td>
            
            
       ';

        $cetak1 .= '</table>

    
        
</body>
</html>

';

$mpdf->WriteHTML($cetak1);
$mpdf->Output('Kaizen-Produksi.pdf', 'I');

?>
