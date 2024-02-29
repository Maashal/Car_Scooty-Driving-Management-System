<?php

include 'connection.php';
$updateprofile = false;

$trainerid = $_SESSION['userid'];  //getting trainer id from session

//getting data base on  after click on update button
$query = "SELECT * from trainertable  where tid   ='$trainerid'";
$result = mysqli_query($conn, $query);

if ($result->num_rows > 0) {
     $row = mysqli_fetch_assoc($result);

     $name = $row['t_name'];
     $gender = $row['t_gender'];
     $contact = $row['t_contact'];
     $city = $row['t_city'];
     $address = $row['t_address'];
     $exprnce = $row['experience'];
     $srdetail = $row['servicedetail'];
     $vdetail = $row['vehicle_detail'];
     $email = $row['t_email'];
     $password = $row['t_loginpasswrd'];
 
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
     $details = $_POST['udetail'];
     $exprnce = $_POST['exprnce'];
     $vservices = $_POST['services'];
     $vehicleservices = implode(", ", $vservices); //implod function is use to get multiple values from all checked boxes and also for use to add specific character like , . etc.
     $status =  "Active";
    
     $query = "UPDATE trainertable SET t_name='$name', t_contact='$contactnum', t_gender='$gender',  t_city='$city', t_address='$address', t_email='$emailadrs', t_loginpasswrd='$password', experience='$exprnce', servicedetail='$details', vehicle_detail='$vehicleservices'  
               where tid ='$trainerid'";
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
