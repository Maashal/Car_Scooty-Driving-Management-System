<?php

include 'connection.php';

$sid = $_SESSION['userid'];

if (isset($_POST['accept'])) {
     $query = "SELECT * from bookingstable 
     JOIN trainertable on  bookingstable.tid = trainertable.tid
     JOIN packagestable on  bookingstable.packagesID = packagestable.pid
      where bookingstable.sid   ='$sid' and bookingstable.h_status = 'Accepted'";
     $header = "<br><h3>All Accepted Booking  Requests</h3><hr>";
} else if (isset($_REQUEST['reject'])) {
     $query = "SELECT * from bookingstable 
     JOIN trainertable on  bookingstable.tid = trainertable.tid
     JOIN packagestable on  bookingstable.packagesID = packagestable.pid
      where bookingstable.sid   ='$sid' and bookingstable.h_status = 'Rejected'";
     $header = "<br><h3>All Rejected Booking  Requests</h3><hr>";
} else if (isset($_POST['pending'])) {
     $query = "SELECT * from bookingstable 
    JOIN trainertable on  bookingstable.tid = trainertable.tid
    JOIN packagestable on  bookingstable.packagesID = packagestable.pid
     where bookingstable.sid   ='$sid' and bookingstable.h_status = 'Pending'";
     $header = "<br><h3>All Pending Booking  Requests</h3><hr>";
} else {
     $query = "SELECT * from bookingstable 
     JOIN trainertable on  bookingstable.tid = trainertable.tid
     JOIN packagestable on  bookingstable.packagesID = packagestable.pid
      where bookingstable.sid='$sid' and bookingstable.h_status = 'Pending'";
     $header = "<br><h3>All Pending Booking  Requests</h3><hr>";
}

$result = mysqli_query($conn, $query);

echo $header;

if ($result->num_rows > 0) {

     echo "
          <tr style='background:darkblue; color:white;'>
        
          <td>Trainer Name</td>
          <td>Package Title</td>
          <td>Class Timing</td>
          <td>Your Comments</td>
          <td>Status</td>
          <td>Booking Date</td>
           </tr>";

     while ($row =  mysqli_fetch_assoc($result)) {

          $id = $row['hid'];
          $trainername = $row['t_name'];
          $package = $row['p_name'];
          $classtiming = $row['class_timing'];
          $comments = $row['comments'];
          $status = $row['h_status'];
          $hiringdate = $row['h_date'];

          echo "<tr >         
               
               <td>$trainername</td>
               <td>$package</td>
               <td>$classtiming</td>
               <td>$comments</td>
               <td>$status</td>
               <td>$hiringdate</td>
               </tr>
              ";
     }
} else {
     echo "<span class='alert-info alert' style='width:80%; margin:auto; padding:5px;'>There is no Booking Record exist with in database";
}
