<?php

include "connection.php";

if (isset($_POST['add'])) {


    //getting values from input fields
    $name = $_POST['ptitle'];
    $fee = $_POST['pfee'];
    $detail = $_POST['pdetail'];
    
        $query = "Insert into packagestable (p_name,  p_charges, p_detail) values ('$name', '$fee', '$detail')";
   
      $result =  mysqli_query($conn, $query);

    if ($result == true) {

        $resultmsg  =  " <span style='padding:15px; width:50%' class='alert-success'>New Package Detail is Added successfully</span>";
        $conn->close();
    } else {
        $resultmsg  =  " <span style='padding:15px; width:50%' class='alert-success'> Package Detail is not Added due to ".mysqli_error($conn). "</span>";
        $conn->close();
    }
}
