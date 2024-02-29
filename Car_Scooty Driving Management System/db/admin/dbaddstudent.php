<?php

include "connection.php";
if (isset($_POST['btnregister'])) {

       //getting values from input fields
     $name = $_POST['uname'];
     $gender = $_POST['ugender'];
     $contact = $_POST['ucontact'];
     $city = $_POST['ucity'];
     $address = $_POST['address'];
     $useremail = $_POST['usremail'];
     $password = $_POST['usrpasswrd'];

     $query = "Insert into studenttable (s_name, s_gender,  s_contact,  s_city, s_raddress,s_email, s_loginpasswrd)
      values ('$name', '$gender', '$contact', '$city', '$address', '$useremail', '$password')";

    $result =  mysqli_query($conn, $query);

    if ($result == true) {

        $msg  =  " <span style='padding:15px; width:50%' class='alert-success'>Student is Added successfully</span>";
        $conn->close();
    } else {
        $msg  =  " <span style='padding:15px; width:50%' class='alert-success'> Student Registration is not  Completed due to ".mysqli_error($conn). "</span>";
        $conn->close();
    }
}

