<?php

include 'connection.php';

$sid = $_SESSION['userid'];

if (isset($_POST['accept'])) {
     $query = "SELECT * from bookingstable 
     JOIN studenttable on  bookingstable.sid = studenttable.sid
     JOIN packagestable on  bookingstable.packagesID = packagestable.pid
      where bookingstable.sid   ='$sid' and bookingstable.h_status = 'Accepted'";
     $header = "<br><h3>All Accepted Booking  Requests</h3><hr>";
} else if (isset($_REQUEST['reject'])) {
     $query = "SELECT * from bookingstable 
     JOIN studenttable on  bookingstable.sid = studenttable.sid
     JOIN packagestable on  bookingstable.packagesID = packagestable.pid
      where bookingstable.sid   ='$sid' and bookingstable.h_status = 'Rejected'";
     $header = "<br><h3>All Rejected Booking  Requests</h3><hr>";
} else if (isset($_POST['pending'])) {
     $query = "SELECT * from bookingstable 
    JOIN studenttable on  bookingstable.sid = studenttable.sid
    JOIN packagestable on  bookingstable.packagesID = packagestable.pid
     where bookingstable.sid   ='$sid' and bookingstable.h_status = 'Pending'";
     $header = "<br><h3>All Pending Booking  Requests</h3><hr>";
} else {
     $query = "SELECT * from bookingstable 
     JOIN studenttable on  bookingstable.sid = studenttable.sid
     JOIN packagestable on  bookingstable.packagesID = packagestable.pid
      where bookingstable.sid='$sid' and bookingstable.h_status = 'Pending'";
     $header = "<br><h3>All Pending Booking  Requests</h3><hr>";
}

$result = mysqli_query($conn, $query);

echo "<div style='width:60%; padding:10px; margin:auto'> 
" . $header . "</div>";

if ($result->num_rows > 0) {



     while ($row =  mysqli_fetch_assoc($result)) {

          $id = $row['hid'];
          $studentname = $row['s_name'];
          $studntid = $row['sid'];
          $city = $row['s_city'];
          $package = $row['p_name'];
          $classtiming = $row['class_timing'];
          $comments = $row['comments'];
          $status = $row['h_status'];
          $hiringdate = $row['h_date'];

          echo '<div style="width:60%; margin:auto; box-shadow:0px 0px 10px 0px grey; padding:15px;">
          
          <h2 style="color:blue;">' . $studentname . ' </h2>
          <span>Booking Date: &emsp;' . $hiringdate . '</span>
          <hr>

          <table>

          <tr>
          <td><b> Package Title</b></td>
          <td>' . $package . '</td>
          </tr>

          <tr>
          <td><b> Location</b>
          </td> 
           <td>' . $city . '  </td>
          </tr>

          <tr>
          <td><b>Class Timing</b></td>
            <td>' . $classtiming . '</td>
          </tr>

          <tr>
          <td><b>Student Comments</b></td>
            <td>' . $comments . '</td>
          </tr>

          </table>

          <hr>
          <div style="float:right; margin-right:25px;">';

          if ($status == "Accepted") {
               echo "<a target='_blank' href='viewstudentdetail.php?studentprofile=" . $studntid . "'><button type='button' class='btn btn-info' >View Student Profile</button></a>
               </div><br>
               </div><br>";
          } else if ($status == "Rejected") {
               echo " <a target='_blank' href='viewstudentdetail.php?studentprofile=" . $studntid . "'><button type='button' class='btn btn-info' >View Student Profile</button></a>
               </div><br>
               </div><br>";
          } else {

               echo "<a href='viewbookingshistory.php?responserequest=accept&bookigid=" . $id . "'><button type='button' class='btn btn-warning' >Accept Request</button></a>
                    <a href='viewbookingshistory.php?responserequest=reject&bookigid=" . $id . "'><button type='button' class='btn btn-danger'>Reject Request</button></a>
                    &nbsp; <a target='_blank' href='viewstudentdetail.php?studentprofile=" . $studntid . "'><button type='button' class='btn btn-info' >View Profile</button></a>
                    </div><br>
                    </div><br>";
          }
     }
} else {
     echo '<div style="width:60%; margin:auto;  padding:15px;">';
     echo "<span class='alert-info alert' style='width:80%; margin:auto; padding:5px;'>There is no Booking Record exist with in database.</span><div>";
}

// ==============================================================================================================================
// accepting and rejecting request

if (isset($_GET['responserequest'])) {

     $action = $_GET['responserequest'];
     $bookingid =  $_GET['bookigid'];

     if ($action == "accept") {

          $query = "UPDATE bookingstable SET h_status  ='Accepted' where hid ='$bookingid'";
     } else if ($action == "reject") {
          $query = "UPDATE bookingstable SET h_status  ='Rejected' where hid ='$bookingid'";
     }
     $result = mysqli_query($conn, $query);

     if ($result == true) {
          $_SESSION['resultmsg'] =  '<p class="alert-success alert"> <i class="fa fa-check-circle" style="color:green"></i> &emsp; Request Status is updated Successfully.
          
          <span style="float:right; margin-right:20px; color:blue;"><i class="fa fa-window-close" aria-hidden="true" id="btnclose"></i></span>
          </p>';
         
          //redirecting to  page

          echo "<script> location.href='viewbookingshistory.php'; </script>";  //redirecting to new page with javascript

        
     } else {
          $_SESSION['resultmsg'] = '<p class="alert-danger alert" > <i class="fa fa-exclamation-triangle" style="color:yellow;"></i> &emsp; Request Status is not Updated Due to due to '. mysqli_error($conn) . '
          <span style="float:right; margin-right:20px; color:red;"><i class="fa fa-window-close" aria-hidden="true" id="btnclose"></i></span>
          </p>';
                  
          //  header("Location: ../trainer/viewbookinghistory.php");
          echo "<script> location.href='viewbookingshistory.php'; </script>";  //redirecting to new page with javascript

     }
}
