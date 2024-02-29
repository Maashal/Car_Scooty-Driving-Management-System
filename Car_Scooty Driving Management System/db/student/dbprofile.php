<?php

include 'connection.php';
$updateprofile = false;

$studentid = $_SESSION['userid'];  //getting student id from session

//getting data base on  after click on update button
$query = "SELECT * from studenttable  where sid   ='$studentid'";
$result = mysqli_query($conn, $query);

if ($result->num_rows > 0) {
     $row = mysqli_fetch_assoc($result);

     $name = $row['s_name'];
     $gender = $row['s_gender'];
     $contact = $row['s_contact'];
     $city = $row['s_city'];
     $address = $row['s_raddress'];
     $email = $row['s_email'];
     $password = $row['s_loginpasswrd'];
}
//if update button is clicked
if (isset($_GET['updateprofile'])) {

     $updateprofile = true;
     header("Location:updateprofile.php");
}
//updating profile
else if (isset($_POST['update'])) {

      $name = $_POST['uname'];
     $gender = $_POST['ugender'];
     $contactnum = $_POST['ucontactd'];
     $city = $_POST['ucity'];
     $address = $_POST['address'];
     $emailadrs = $_POST['usremail'];
     $password = $_POST['usrpasswrd'];

    
     $query = "UPDATE studenttable SET s_name='$name', s_contact='$contactnum', s_gender='$gender',  s_city='$city', s_raddress='$address', s_email='$emailadrs', s_loginpasswrd='$password'  where sid ='$studentid'";
     $result = mysqli_query($conn, $query);

     if ($result == false) {

          $_SESSION['resultmsg'] = '<p class="alert-danger alert" > <i class="fa fa-exclamation-triangle" style="color:yellow;"></i> &emsp; Profile Info is not Updated Due to due to '. mysqli_error($conn) . '
          <span style="float:right; margin-right:20px; color:red;"><i class="fa fa-window-close" aria-hidden="true" id="btnclose"></i></span>
          </p>';
     } else {

          $_SESSION['resultmsg'] =  '<p class="alert-success alert"> <i class="fa fa-check-circle" style="color:green"></i> &emsp; Profile Information is updated Successfully.
          
          <span style="float:right; margin-right:20px; color:blue;"><i class="fa fa-window-close" aria-hidden="true" id="btnclose"></i></span>
          </p>';


          //redirecting to  page
          header("Location: profile.php");
     }
}
