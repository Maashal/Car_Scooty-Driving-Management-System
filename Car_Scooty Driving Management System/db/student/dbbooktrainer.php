<?php

include "connection.php";
//getting packages detail and showing into drop down 
$query= "SELECT  * FROM packagestable";
$result = mysqli_query($conn, $query);
$packge = "";  //declaring empty veriable

if($result == true){
    while ($row = mysqli_fetch_array($result)){
  
        $packge = $packge . "<a href='packages.php' target='_blank'><input type='radio' value='".$row["pid"]."' name='packages'>&nbsp; ".$row["p_name"]."</a>&emsp;";
    }
} 
else{
    $packge = $packge . "No Package Record exist";
}
   

//saving booking record to database
    
if(isset($_POST['btnbook'])){

    $trainerid = $_GET['trainerregid'];  // trainer id from url
    $studentid = $_SESSION['userid']; // student id from session
    $packageid = $_POST['packages'];
    $timing = $_POST['timing'];
    $comments = $_POST['comments'];
    $status = "Pending";
  
    $query = "INSERT  into bookingstable (packagesID, tid, sid, class_timing, comments, h_status)
    values ('$packageid', '$trainerid', '$studentid', '$timing', '$comments', '$status')";
    $result =  mysqli_query($conn, $query);

      if($result== false){
   
       $resultmsg =  "<span style='color:red'> Unable to send booking request to Trainer because of  ".mysqli_error($conn)."</span>";
   
      }
   
      else {

         $_SESSION['msg']  =  " <span style='padding:10px; width:60%' class='alert-success'>Booking request is sendt successfully.</span>";
         header("Location: viewbookingshistory.php") ;
         $conn -> close();
   
       }
   
}

?>