<?php

include 'connection.php';

if (isset($_GET['studentprofile'])) {

    
     $stdntid = $_GET['studentprofile'];  //getting id from url

     $query = "SELECT  *  FROM studenttable where sid   ='$stdntid'";

     $result = mysqli_query($conn, $query);

     if ($result->num_rows > 0) {
          $row = mysqli_fetch_assoc($result);

          $trainerid = $row["sid"];
          $name = $row["s_name"];
          $contact = $row["s_contact"];
          $gender = $row["s_gender"];
          $city = $row["s_city"];
          $email = $row["s_email"];
     
     }
}

?>