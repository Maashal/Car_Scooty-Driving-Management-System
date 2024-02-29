<?php

include "connection.php";

if (isset($_POST['btncontinueregister'])) {

    $_SESSION['email'] = $_POST['usremail'];
    $_SESSION['passwrd'] = $_POST['usrpasswrd'];

    header("Location:registeraccount.php");

} 

else if (isset($_POST['btnregister'])) {

  

    if(isset($_SESSION['email'])){

        $role =  $_POST['userrole'];
        $username = $_SESSION['email'];   //getting from index.php
        $password = $_SESSION['passwrd'];

    if ($role ==  "Trainer") {
  
        //getting values from input fields
        $name = $_POST['uname'];
        $gender = $_POST['ugender'];
        $contact = $_POST['ucontact'];
        $city = $_POST['ucity'];
        $address = $_POST['address'];
        $details = $_POST['udetail'];
        $exprnce = $_POST['exprnce'];
        $vservices = $_POST['services'];
        $allservices = implode(", ", $vservices); //implod function is use to get multiple values from all checked boxes and also for use to add specific character like , . etc.
        $status =  "Active";
        $query = "Insert into trainertable (t_name,  t_gender, t_contact, t_city, t_address, experience, servicedetail, vehicle_detail, t_email, t_loginpasswrd, t_status)
        values ('$name', '$gender', '$contact',  '$city',  '$address', '$exprnce', '$details', '$allservices', '$username', '$password', '$status')";
    } else {
       
      
        //getting values from input fields
        $name = $_POST['uname'];
        $gender = $_POST['ugender'];
        $contact = $_POST['ucontact'];
        $city = $_POST['ucity'];
        $address = $_POST['address'];

        $query = "Insert into studenttable (s_name, s_gender,  s_contact,  s_city, s_raddress,s_email, s_loginpasswrd)
         values ('$name', '$gender', '$contact', '$city', '$address', '$username', '$password')";
    }

    $result =  mysqli_query($conn, $query);

    if ($result == true) {

        $msg  =  " <span style='padding:15px; width:50%' class='alert-success'>". $role . " Registration is Completed successfully</span>";
        session_destroy();
       // header("Refresh: 3, index.php");
        $conn->close();
       
    } else {
        $msg  =  " <span style='padding:15px; width:50%' class='alert-success'>". $role . "  Registration is not  Completed due to " . mysqli_error($conn) . "</span>";
        $conn->close();
    }
}
else{
    $msg  =  " <span style='padding:15px; width:50%' class='alert-danger'>Please Enter User Email and Password first to Continue registration</span>";

}
     
}

