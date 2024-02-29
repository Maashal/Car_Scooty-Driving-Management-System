<?php

include 'connection.php';

if (isset($_GET['trainerregid'])) {

    
     $trainerid = $_GET['trainerregid'];  //getting id from url

     $query = "SELECT  *  FROM trainertable where tid   ='$trainerid'";

     $result = mysqli_query($conn, $query);

     if ($result->num_rows > 0) {
          $row = mysqli_fetch_assoc($result);

          $trainerid = $row["tid"];
          $name = $row["t_name"];
          $gender = $row["t_gender"];
          $city = $row["t_city"];
          $exprience = $row["experience"];
          $contact = $row["t_contact"];
          $email = $row["t_email"];
          $detail = $row["servicedetail"];
          $vname = $row['vehicle_detail'];
     
     }
}

?>