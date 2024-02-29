<?php

include "connection.php";

if (isset($_POST['btnregister'])) {



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
    $useremail = $_POST['usremail'];
    $password = $_POST['usrpasswrd'];

    $query = "Insert into trainertable (t_name,  t_gender, t_contact, t_city, t_address, experience, servicedetail, vehicle_detail, t_email, t_loginpasswrd, t_status)
    values ('$name', '$gender', '$contact',  '$city',  '$address', '$exprnce', '$details', '$allservices', '$useremail', '$password', '$status')";

    $result =  mysqli_query($conn, $query);

    if ($result == true) {

        $msg  =  " <span style='padding:15px; width:50%' class='alert-success'>Registration is Completed successfully</span>";
        $conn->close();
    } else {
        $msg  =  " <span style='padding:15px; width:50%' class='alert-success'> Registration is not  Completed due to ".mysqli_error($conn). "</span>";
        $conn->close();
    }
}

