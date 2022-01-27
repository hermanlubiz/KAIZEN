<?php

$connect = mysqli_connect("localhost", "kaizendv_hrn", "Alghifari@17", "kaizendv_db");

if(isset($_POST["view"])){

  if($_POST["view"] != ''){

    $update_query = "UPDATE tb_kzprod1 SET status2=1 WHERE status2=0";

    mysqli_query($connect, $update_query);

   }

  $query = "SELECT * FROM tb_kzprod1 ORDER BY id DESC LIMIT 5";

  $result = mysqli_query($connect, $query);

  $output = '';

 

  if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_array($result)){

     $output .= '

     <li>

      <a href="data_kzprod1.php">

       No Kaizen : <strong>'.$row["no_kaizen"].'</strong><br />

       Oleh : <small><em>'.$row["oleh"].'</em></small>

      </a>

     </li>

     <li class="divider"></li>

     ';

    }

  }else{

    $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';

  }

  $query_1 = "SELECT * FROM tb_kzprod1 WHERE status2=0";

  $result_1 = mysqli_query($connect, $query_1);

  $count = mysqli_num_rows($result_1);

  $data = array(

    'notification'   => $output,

    'unseen_notification' => $count

  );

  echo json_encode($data);

}

?>