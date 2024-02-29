<?php

include 'connection.php';

if (isset($_POST['accept'])) {
     $query = "SELECT * from bookingstable 
     JOIN studenttable on  bookingstable.sid = studenttable.sid
     JOIN trainertable on  bookingstable.tid = trainertable.tid
     JOIN packagestable on  bookingstable.packagesID = packagestable.pid
      where bookingstable.h_status = 'Accepted'";

     $header = "<br><h3>All Accepted Requests for Booking</h3><hr>";
} else if (isset($_REQUEST['reject'])) {

     $query = "SELECT * from bookingstable 
     JOIN studenttable on  bookingstable.sid = studenttable.sid
     JOIN trainertable on  bookingstable.tid = trainertable.tid
     JOIN packagestable on  bookingstable.packagesID = packagestable.pid
      where bookingstable.h_status = 'Rejected'";

     $header = "<br><h3>All Rejected Requests for Booking</h3><hr>";
}

else if (isset($_REQUEST['all'])) {

     $query = "SELECT * from bookingstable 
     JOIN studenttable on  bookingstable.sid = studenttable.sid
     JOIN trainertable on  bookingstable.tid = trainertable.tid
     JOIN packagestable on  bookingstable.packagesID = packagestable.pid";

     $header = "<br><h3>All (Pending/Accepted/Rejected)) Bookings </h3><hr>";
}

else {
     $query = "SELECT * from bookingstable 
     JOIN studenttable on  bookingstable.sid = studenttable.sid
     JOIN trainertable on  bookingstable.tid = trainertable.tid
     JOIN packagestable on  bookingstable.packagesID = packagestable.pid
     where  bookingstable.h_status = 'Accepted'";
     $header = "<br><h3>All Accepted Requests for Booking</h3><hr>";
}

$result = mysqli_query($conn, $query);

echo $header;

if ($result->num_rows > 0) {

     echo "
          <tr style='background:darkblue; color:white;'>
        
          <td>Trainer Name</td>
          <td>Student Name</td>
          <td>Package Title</td>
          <td>Class Timing</td>
          <td>Request Date</td>
          <td>Status</td>
           </tr>";

     while ($row =  mysqli_fetch_assoc($result)) {
          $id = $row['hid'];
          $studentname = $row['s_name'];
          $trainername = $row['t_name'];
          $package = $row['p_name'];
          $classtiming = $row['class_timing'];
          $comments = $row['comments'];
          $status = $row['h_status'];
          $Bookingdate = $row['h_date'];

          echo "<tr >         
               
               <td>$trainername</td>
               <td>$studentname</td>
               <td>$package</td>
               <td>$classtiming</td>
               <td>$Bookingdate</td>
               <td>$status</td>
               </tr>
              ";
     }
} else {
     echo "<span class='alert-info alert' style='width:80%; margin:auto; padding:5px;'>There is no Booking Record exist with in database";
}
